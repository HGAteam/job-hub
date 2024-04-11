<x-base-layout>
    <!--begin::Form-->
    <form class="form" action="{{ route('multimedia.library.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row d-flex justify-content-center">
            <div class="col-lg-8 col-sm-12">
                <!--begin::Input group-->
                <div class="fv-row text-center">
                    <!--begin::Dropzone-->
                    <div class="dropzone" id="library_dropzone">
                        <!--begin::Message-->
                        <div class="dz-message needsclick">
                            <!--begin::Wrapper-->
                            <div class="text-center py-20 my-10">
                                <!--begin::Title-->
                                <h2 class="fs-2x fw-bold mb-10">{{ __('Add images to library') }}</h2>
                                <!--end::Title-->
                                <!--begin::Description-->
                                <p class="text-gray-400 fs-4 fw-semibold mb-10">
                                    {{ __('Drop files here or click to upload') }}.
                                    <br>
                                    {{ __('Upload up to 10 files') }}
                                    <br><br>
                                    <small>{{ __('Maximum file size is up to 30 MB') }}</small>
                                </p>
                                <!--end::Description-->
                                <!--begin::Action-->
                                <!--end::Action-->
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Illustration-->
                            <div class="text-center px-4">
                                <img class="mw-100 mh-300px" alt=""
                                    src="{{ asset(theme()->getMediaUrlPath() . 'illustrations/sketchy-1/2.png') }}">
                            </div>
                            <!--end::Illustration-->
                        </div>
                    </div>
                    <a href="{{ route('multimedia.library.index') }}"
                        class="btn btn-secondary">{{ __('Go to library') }}</a>
                    <button class="btn btn-light my-6" type="reset">{{ __('Reset form') }}</button>
                    <!--end::Dropzone-->
                </div>
                <!--end::Input group-->
            </div>
        </div>
    </form>
    <!--end::Form-->

    <div class="row d-flex justify-content-center">
        <div class="col-lg-8 col-sm-12">
        <!--begin::Notice-->
        <div class="notice d-flex bg-light-warning rounded border-warning border border-dashed  p-6">
            <!--begin::Icon-->
            <i class="ki-duotone ki-information fs-2tx text-warning me-4">
                <span class="path1"></span>
                <span class="path2"></span>
                <span class="path3"></span>
            </i>
            <!--end::Icon-->

            <!--begin::Wrapper-->
            <div class="d-flex flex-stack flex-grow-1 ">
                <!--begin::Content-->
                <div class=" fw-semibold">
                    <h4 class="text-gray-900 fw-bold">{{__('We need your attention!')}}</h4>

                    <div class="fs-6 text-gray-700 ">{{__('We need to remind you that file storage space may be limited. Check with your web hosting provider.')}}</div>
                    <p>{{__('The available space is')}}: <span class="fw-bold">{{$freeSpaceInGB}}</span> GB | {{__('Space used is:')}}: <span class="fw-bold">{{$usedSpaceInGB}}</span> GB</p>

                </div>
                <!--end::Content-->

            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Notice-->
        </div>
    </div>

    @section('scripts')
        <script>
            Dropzone.autoDiscover = false;

            var uploadedDocumentMap = {};

            var myDropzone = new Dropzone("#library_dropzone", {
                url: "{{ route('multimedia.library.store') }}",
                autoProcessQueue: true,
                maxFiles: 10,
                maxFilesize: 30, // MB
                uploadMultiple: true,
                addRemoveLinks: true,
                parallelUploads: 10,
                acceptedFiles: 'image/*, video/*, application/*',
                headers: {
                    'X-CSRF-TOKEN': "{{ csrf_token() }}"
                },
                successmultiple: function(files, response) {
                    $.each(response['name'], function(key, val) {
                        $('form').append('<input type="hidden" name="file[]" value="' + val + '">');
                        uploadedDocumentMap[files[key].name] = val;
                    });
                },
                removedfile: function(file) {
                    file.previewElement.remove();
                    var name = '';
                    if (typeof file.file_name !== 'undefined') {
                        name = file.file_name;
                    } else {
                        name = uploadedDocumentMap[file.name];
                    }
                    $('form').find('input[name="file[]"][value="' + name + '"]').remove();
                }
            });

            myDropzone.on("successmultiple", function(files, response) {
                // Procesar la respuesta del servidor para obtener los mensajes de éxito o error
                if (response.success) {
                    $.each(response.name, function(key, val) {
                        $('form').append('<input type="hidden" name="file[]" value="' + val + '">');
                        uploadedDocumentMap[files[key].name] = val;
                    });

                    // Mostrar mensaje de éxito
                    showResponseMessage("Archivos almacenados correctamente", "success");
                } else {
                    // Mostrar mensaje de error
                    showResponseMessage("Error al cargar los archivos", "error");
                }
            });

            function showResponseMessage(message, type) {
                var messageElement = $('<div class="alert alert-' + type + ' mt-2">' + message + '</div>');
                $(".dz-message").append(messageElement);

                // Eliminar el mensaje después de unos segundos
                setTimeout(function() {
                    messageElement.fadeOut("slow", function() {
                        $(this).remove();
                    });
                }, 5000); // 5 segundos (puedes ajustar el tiempo en milisegundos)
            }

            document.querySelector('[type="reset"]').addEventListener('click', function(e) {
                e.preventDefault();
                myDropzone.removeAllFiles();
            });

            $(document).ready(function () {
            getFreeSpace();
        });

         async function getFreeSpace() {
            try {
                const fileHandle = await window.showDirectoryPicker();
                const quota = await navigator.storage.estimate();

                const freeSpaceInBytes = quota.quota - quota.usage;
                const freeSpaceInGB = (freeSpaceInBytes / (1024 * 1024 * 1024)).toFixed(2);

                document.getElementById('freeSpace').textContent = `${freeSpaceInGB} GB`;
            } catch (err) {
                console.error('Error al obtener el espacio disponible:', err);
            }
        }
        </script>
    @endsection
</x-base-layout>
