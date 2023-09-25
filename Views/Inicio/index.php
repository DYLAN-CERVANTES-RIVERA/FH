<?php header_f($data);?>
  <body>

    <div id="page-container" class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed main-content-narrow">

    <?php menu($data);?>

      <main id="main-container">
      
        <div class="content">
          
          <div class="row">
            <div class="col-xl-12 col-xxl-12 d-flex flex-column">              
              <div class="block block-rounded flex-grow-1 d-flex flex-column">
                <div class="block-header block-header-default">
                  <h3 class="block-title">TEXTO</h3>
                </div>
                <div class="block-content block-content-full flex-grow-1 d-flex align-items-center">
                  -----------
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </main>
 
      <?php footer_f();?>
    </div>

  <?php scripts_f();?>
  </body>
</html>
