<?php 
error_reporting(0);
header_f($data);?>

<body>
    <div id="page-container">

        <!-- Main Container -->
        <main id="main-container">
        <!-- Page Content -->
        <div class="hero">
            <div class="hero-inner text-center">
            <div class="bg-body-extra-light">
                <div class="content content-full overflow-hidden">
                    <div class="py-4">
                        <!-- Error Header -->
                        <h1 class="display-1 fw-bolder text-city">
                        ERROR
                        </h1>
                        <h2 class="h4 fw-normal text-muted mb-5">
                            P&aacute;gina No existe
                        </h2>
                        <p class="fs-4 fw-medium text-muted mb-5">
                            Lo sentimos pero su solicitud es incorrecta, contacte a su administrador para solucionarlo.
                        </p>
                        <img class="" src="<?=media(); ?>/img/logo.png" alt="SSC" width="350">
                    </div>
                </div>
            </div>
            <div class="content content-full text-muted fs-sm fw-medium">
                <a class="link-fx" href="javascript:void(0)">Secretar&iacute;a de Seguridad Ciudadana</a> <span data-toggle="year-copy"></span>
            </div>
            </div>
        </div>
        <!-- END Page Content -->
        </main>
        <!-- END Main Container -->
    </div>
    <script src="<?=media(); ?>/js/oneui.app.min.js"></script>
</body>
</html>
