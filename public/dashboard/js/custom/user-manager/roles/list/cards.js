"use strict";

// Class definition
var Roles = function () {
    //init cards
    var initCardsList = () => {
        // URL desde las rutas
        var url = '/home/user-manager/roles/get-roles';

        // Obtener el div por defecto con la clase 'col-lg-4'
        var defaultDiv = document.querySelector('.col-lg-4');

        axios.get(url)
        .then(function (response) {
                // Manejar la respuesta exitosa
                var roles = response.data.roles;

                // Recorrer el array de roles y generar el HTML correspondiente
                roles.forEach(function (role) {
                    var roleHtml = `<!--begin::Card-->
                                    <div class="card card-flush h-md-100">
                                        <!--begin::Card header-->
                                        <div class="card-header">
                                        <!--begin::Card title-->
                                        <div class="card-title">
                                            <h2>${role.name}</h2>
                                        </div>
                                        <!--end::Card title-->
                                        </div>
                                        <!--end::Card header-->
                                        <!--begin::Card body-->
                                        <div class="card-body pt-1">
                                        <!--begin::Users-->
                                        <div class="fw-bold text-gray-600 mb-5">Total users with this role: ${role.users.length}</div>
                                        <!--end::Users-->
                                        <!--begin::Permissions-->
                                        <div class="d-flex flex-column text-gray-600">
                                            ${generatePermissionsHtml(role.permissions)}
                                        </div>
                                        <!--end::Permissions-->
                                        </div>
                                        <!--end::Card body-->
                                        <!--begin::Card footer-->
                                        <div class="card-footer flex-wrap pt-0">
                                        <a href="/home/user-manager/roles/${role.id}" class="btn btn-light btn-active-primary my-1 me-2">View Role</a>
                                        <button type="button" class="btn btn-light btn-active-light-primary my-1" data-bs-toggle="modal" data-bs-target="#kt_modal_update_role">Edit Role</button>
                                        </div>
                                        <!--end::Card footer-->
                                    </div>
                                    <!--end::Card-->`;

                    // Insertar el HTML del rol al contenedor de roles
                    var colDiv = document.createElement('div');
                    colDiv.className = 'col-lg-4';
                    colDiv.innerHTML = roleHtml;
                    // rolesContainer.appendChild(colDiv);
                    defaultDiv.parentNode.insertBefore(colDiv, defaultDiv);
                });
// Agregar el evento de clic a los botones de "Editar Rol"
var editRoleButtons = document.querySelectorAll('.btn[data-role-id][data-role-name][data-role-permissions]');

editRoleButtons.forEach(function(button) {
    button.addEventListener('click', function() {
        var roleId = this.getAttribute('data-role-id');
        var roleName = this.getAttribute('data-role-name');
        var rolePermissions = this.getAttribute('data-role-permissions').split(',');

        // Establecer el nombre del rol en el campo de entrada correspondiente
        var roleNameInput = document.getElementById('role_name_input');
        roleNameInput.value = roleName;

        // Obtener el contenedor de los permisos del modal
        var permissionsContainer = document.getElementById('permissions_container');
        permissionsContainer.innerHTML = '';

        // Generar los permisos correspondientes en el contenedor
        rolePermissions.forEach(function(permission) {
            var permissionName = permission.replace(/^[A-Za-z]+\s/, '');
            if (!permissionsContainer.querySelector(`td:contains("${permissionName}")`)) {
                var permissionHtml = `<td class="text-gray-800">${permissionName}</td>`;
                permissionsContainer.innerHTML += permissionHtml;
            }
        });

        // Abrir el modal
        var modal = new bootstrap.Modal(document.getElementById('kt_modal_update_role'));
        modal.show();
    });
});

        })
        .catch(function (error) {
            // Manejar el error
            console.error(error);
        });
    };

    // Function to generate permissions within the corresponding card
    var generatePermissionsHtml = function (permissions) {
        var permissionsHtml = '';
        var limitedPermissions = permissions.slice(0, 5);
        var remainingPermissions = permissions.slice(5);

        limitedPermissions.forEach(function(permission) {
            // Convertir la primera letra en mayúscula
            permissionsHtml += `
              <div class="d-flex align-items-center py-2">
                <span class="bullet bg-primary me-3"></span>${permission.name}
              </div>
            `;
          });

          if (remainingPermissions.length > 0) {
            permissionsHtml += `
              <div class='d-flex align-items-center py-2'>
                <span class='bullet bg-primary me-3'></span>
                <em>and ${remainingPermissions.length} more...</em>
              </div>
            `;
          }

        return permissionsHtml;
    };

    return {
        // Public functions
        init: function () {
            initCardsList();//from hear we initialize the function to generate permissions into corresponding card
        }
    };

}();
// On document ready
KTUtil.onDOMContentLoaded(function () {
    Roles.init();
});
