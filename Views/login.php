<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title><?=SYSTEM ?></title>

    <meta name="description" content="<?=SYSTEM ?>">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="<?=SYSTEM ?>">
    <meta property="og:site_name" content="<?=SYSTEM ?>">
    <meta property="og:description" content="<?=SYSTEM ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <link rel="shortcut icon" href="<?=media(); ?>/img/estrella.ico">
    <link rel="icon" type="image/png" sizes="192x192" href="<?=media(); ?>/img/estrella.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="<?=media(); ?>/img/estrella.ico">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- OneUI framework -->
    <link rel="stylesheet" id="css-main" href="<?=media(); ?>/css/oneui.min.css">

    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/amethyst.min.css"> -->
    <!-- END Stylesheets -->
  </head>

  <body>

    <div id="page-container">

      <!-- Main Container -->
      <main id="main-container">
        <!-- Page Content -->
        <div class="hero-static d-flex align-items-center">
          <div class="content">
            <div class="row justify-content-center push">
              <div class="col-md-8 col-lg-6 col-xl-4">
                <!-- Sign In Block -->
                <div class="block block-rounded mb-0">
                  
                  <div class="block-content">
                    <div class="p-sm-3 px-lg-4 px-xxl-5 py-lg-5">
                      <center>
                        <img class="" src="<?=media(); ?>/img/logo.png" alt="SSC" width="280">
                      <br><br>
                      <p class="fw-medium text-muted">
                        titulo
                      </p>
                      </center>

                      <form id="frmLogin" action="javascript:void(0);" autocomplete="off">
                      <input type="hidden" value="<?=base_url(); ?>" id="url_base" name="url_base">
                        <div class="py-3">
                          <div class="mb-4">
                            <input type="text" class="form-control form-control-alt form-control-lg" id="usuario" name="usuario" placeholder="Usuario">
                          </div>
                          <div class="mb-4">
                            <div class="input-group">
                                <input type="password" class="form-control form-control-alt form-control-lg" id="pass" name="pass" placeholder="Contraseña">
                                <button type="button" class="btn btn-primary">
                                <i class="far fa-eye" onclick="mostrar_pass()"></i>
                                </button>
                            </div>
                          </div>

                        </div>
                        <div class="row mb-4">
                          <div class="col-md-6 col-xl-5">
                            <button type="submit" class="btn w-100 btn-hero btn-primary" onclick="frmLogin(event);">
                              <i class="fa fa-fw fa-sign-in-alt opacity-50 me-1"></i> Inicar
                            </button>
                          </div>
                        </div>

                        <div class="alert alert-danger text-center d-none" id="salerta" role="alert" >
                          </div>
                      </form>
                      <!-- END Sign In Form -->
                    </div>
                  </div>
                </div>
                <!-- END Sign In Block -->
              </div>
            </div>
            <div class="fs-sm text-muted text-center">
              <strong>Secretar&iacute;a de Seguridad Ciudadana</strong> &copy; <span data-toggle="year-copy"></span>
            </div>
          </div>
        </div>
        <!-- END Page Content -->
      </main>
      <!-- END Main Container -->
    </div>
    <!-- END Page Container -->

    <!--
        OneUI JS

        Core libraries and functionality
        webpack is putting everything together at assets/_js/main/app.js
    -->
    <script src="<?=media(); ?>/js/oneui.app.min.js"></script>

    <!-- jQuery (required for jQuery Validation plugin) -->
    <script src="<?=media(); ?>/js/lib/jquery.min.js"></script>

    <!-- Page JS Plugins -->
    <script src="<?=media(); ?>/js/plugins/jquery-validation/jquery.validate.min.js"></script>

    <!-- Page JS Code -->
    <script src="<?=media(); ?>/js/pages/op_auth_signin.min.js"></script>

    <script src="<?=base_url(); ?>Views/js/login.js"></script>
  </body>
</html>
