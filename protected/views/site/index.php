
  <?php
  $homepage = HomePage::model()->findAll(
          array(
              'select'=>'*',
              'condition'=>'status="1"',
          )
          );
  
          foreach ($homepage as $key => $value) {
              
              if($value->id==1){
                  $h1content=$value->content;
              }
              if($value->id==2){
                  $h2content=$value->content;
              }
              if($value->id==3){
                  $course1=$value->content;
              }
              
                
            }
  
  ?>
    <!-- Full Width Image Header -->
    <header class="header-image">
        <div class="headline">
            <div class="container">
                <h1><?php echo $h1content; ?></h1>
                <h2>Will Knock Your Socks Off</h2>
            </div>
        </div>
    </header>

    <!-- Page Content -->
    <div class="container">

        <hr class="featurette-divider">

        <!-- First Featurette -->
        <div class="featurette" id="about">
            <img class="featurette-image img-circle img-responsive pull-right" src="<?php echo Yii::app()->request->baseUrl;?>/images/500x500_1.jpg">
            <a href="<?php echo Yii::app()->request->baseUrl;?>/index.php/site/courseone" style=" text-decoration:none;">
            <h2 class="featurette-heading">This First Heading
                <span class="text-muted">Will Catch Your Eye</span>
            </h2>
            </a>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
       
        </div>

        <hr class="featurette-divider">

        <!-- Second Featurette -->
        <div class="featurette" id="services">
            <img class="featurette-image img-circle img-responsive pull-left" src="<?php echo Yii::app()->request->baseUrl;?>/images/500x500_2.jpg">
            <a href="" style=" text-decoration:none;"><h2 class="featurette-heading">The Second Heading
                <span class="text-muted">Is Pretty Cool Too.</span>
            </h2>
                </a>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>

        <hr class="featurette-divider">

        <!-- Third Featurette -->
        <div class="featurette" id="contact">
            <img class="featurette-image img-circle img-responsive pull-right" src="<?php echo Yii::app()->request->baseUrl;?>/images/500x500_3.jpg">
            <h2 class="featurette-heading">The Third Heading
                <span class="text-muted">Will Seal the Deal.</span>
            </h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>

        <hr class="featurette-divider">

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>

    </div>