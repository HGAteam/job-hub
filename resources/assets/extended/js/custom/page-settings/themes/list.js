"use strict";

// Class definition
var Themes = function () {
    // init cards
    var initThemesList = function () {
        // URL desde las rutas
        var url = '/home/page-settings/themes/get-themes';

        // Obtener el contenedor de tarjetas
        var cardContainer = document.getElementById('theme-card-container');

        axios.get(url)
            .then(function (response) {
                // Imprimir la respuesta completa en la consola
                // console.log(response);

                var themes = response.data.themes;
                var themeCount = Object.keys(themes).length;
                // console.log(themeCount)
                // Actualizar la cantidad de temas instalados
                var siteQtyElement = document.querySelector('.themes-qty');
                siteQtyElement.textContent = '(' + themeCount + ')';
                // Verificar si themes es un array antes de iterar
                var firstActiveThemeFound = false; // Nuevo paso: variable para rastrear la primera tarjeta activa
                // Iterar sobre los objetos de temas
                for (var themeKey in themes) {
                    if (themes.hasOwnProperty(themeKey)) {
                        var theme = themes[themeKey];
                        // console.log(theme);
                        // console.log(theme.active);
                        if (theme.active == true) {
                            // Nuevo paso: marcar que se encontró la primera tarjeta activa
                            firstActiveThemeFound = true;

                            // Crear la tarjeta de tema activo
                            var cardHtml = `
                            <!-- begin::Activated Theme -->
                            <div class="col-lg-4">
                                <!--begin::Card-->
                                <div class="card border-shadow">
                                    <div class="card-body p-0 overlay overflow-hidden">
                                        <div class="overlay-wrapper">
                                            <img src="/${theme.image}" alt="${theme.name}"
                                                class="w-100" />
                                        </div>
                                        <div class="overlay-layer bg-dark bg-opacity-50">
                                            <a href="#" class="btn btn-light-dark btn-shadow ms-2" data-bs-toggle="modal" data-bs-target="#theme_details"><b>${lang.t('Theme Details')}</b></a>
                                        </div>
                                    </div>
                                    <div class="card-footer py-3">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <p class="text-start mb-2"><span class="fs-6"><b>${lang.t('Active')}:
                                                </span>${lang.t(theme.name)}</b></p>
                                            <a href="#" class="btn btn-sm btn-primary btn-shadow">${lang.t('Customize')}</a>
                                        </div>
                                    </div>

                                </div>
                                <!--end::Card-->
                            </div>
                            <!-- end::Activated Theme -->
                            `;
                            // Insertar la tarjeta al principio del contenedor
                            cardContainer.insertAdjacentHTML('afterbegin', cardHtml);
                        } else {

                            // Crear la tarjeta de tema inactivo
                            var inactiveCardHtml = `
                            <!-- begin::Custom Themes -->
                            <div class="col-lg-4">
                                <!--begin::Card-->
                                <div class="card">
                                    <div class="card-body p-0 overlay overflow-hidden">
                                        <div class="overlay-wrapper">
                                            <img src="/${theme.image}" alt="${theme.name}"
                                                class="w-100" />
                                        </div>
                                        <div class="overlay-layer bg-dark bg-opacity-25">
                                            <a href="#" class="btn btn-light-dark btn-shadow ms-2">${lang.t('Theme Details')}</a>
                                        </div>
                                    </div>
                                    <div class="card-footer py-3">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <p class="text-start mb-2"><span class="fs-6 fw-bolder text-gray-800">${lang.t(theme.name)}
                                            <div class="text-end">
                                                <a href="#" class="btn btn-sm btn-primary btn-shadow">${lang.t('Activate')}</a>
                                                <a href="#" class="btn btn-sm btn-danger btn-shadow">${lang.t('Delete')}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Card-->
                            </div>
                            <!-- end::Custom Themes -->
                            `;
                            // Insertar la tarjeta después de la última tarjeta activa
                            cardContainer.insertAdjacentHTML('beforeend', inactiveCardHtml);
                        }
                        // console.log();
                        // console.log(theme.slug);
                        // console.log(theme.description);
                        // console.log(theme.type);
                        // console.log(theme.version);
                        // console.log();
                        // console.log(theme.author);
                    }
                }
            })
            .catch(function (error) {
                // Manejar el error
                console.error(error);
            });
    };

    return {
        // Public functions
        init: function () {
            initThemesList();
        }
    };
}();

// On document ready
KTUtil.onDOMContentLoaded(function () {
    Themes.init();
});
