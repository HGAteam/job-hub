    // Obtener el token CSRF de la etiqueta meta
    var csrfToken = $('meta[name="csrf-token"]').attr('content');

    var myDropzone = new Dropzone("#library_dropzone_js", {
        url: "/home/multimedia/library/store",
        paramName: "file",
        maxFiles: 10,
        maxFilesize: 10, // MB
        addRemoveLinks: true,
        headers: {
            'X-CSRF-TOKEN': csrfToken // Agregar el token CSRF como encabezado
        },
        accept: function (file, done) {
            if (file.name == "wow.jpg") {
                done("Naha, you don't.");
            } else {
                var formData = new FormData();
                formData.append('file', file);

                $.ajax({
                    url: "/home/multimedia/library/store",
                    type: "POST",
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    },
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function (response) {
                        // Manejar la respuesta exitosa, si es necesario
                        console.log(response);
                        done();
                    },
                    error: function (xhr, status, error) {
                        // Manejar el error, si es necesario
                        console.error(xhr.responseText);
                        done("Error al cargar el archivo.");
                    }
                });
            }
        }

    });
