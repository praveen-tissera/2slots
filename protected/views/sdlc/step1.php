<hr>
<div class="container">

        <div class="row">

            <!-- Blog Post Content Column -->
            <div class="col-lg-8">

                <!-- Blog Post -->

                <!-- Title -->
                <h1>Planning Phase </h1>

                <!-- Author -->
                <p class="lead">
                    by <a href="#">Start Bootstrap</a>
                </p>

                <hr>

                <!-- Date/Time -->
                <p><span class="glyphicon glyphicon-time"></span> Posted on August 24, 2013 at 9:00 PM</p>

                <hr>

                <!-- Preview Image -->
                <img class="img-responsive" src="<?php echo Yii::app()->baseUrl; ?>/images/900x300_1.jpg" alt="">

                <hr>

                <!-- Post Content -->
                <p class="lead">Planning is the most important and fundamental stage in SDLC. It is performed by the senior members of the team with inputs from the customer, the sales department, market surveys and domain experts in the industry. This information is then used to plan the basic project approach and to conduct product feasibility study in the economical, operational, and technical areas.</p>
                <p>Proper planning is important as it allows:

                    the scope of the project to be defined
                    potential problem areas to be identified
                    the sequence of the tasks to be identified
                    for the provision of a basis for control.
                    The planning phase will normally follow a sequence of steps including:

                    recognising the problem
                    defining the problem
                    setting project objectives
                    identifying constraints
                    conducting feasibility studies
                    creating project proposals
                    establishing control mechanisms.</p>
                <hr>
                

                
              
                <!--Start task-->
<!-- Button trigger modal -->



<?php if(!Yii::app()->user->hasState("state_name")){?>
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Start Task
</button>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Enter Your Email</h4>
      </div>
      <div class="modal-body">
         
          <div class="form">
            <?php echo CHtml::beginForm(); ?>
          <lable>Email</lable>
          <input type="email" name='email' required>
          <button type="submit" class="btn btn-primary">Continue..</button>
          <?php echo CHtml::endForm(); ?>
          </div><!-- form -->
            
      </div>
      
    </div>
     
      
  </div>
</div>
                <!--********-->
      <?php }else{?> 
                
     <?php echo CHtml::link('Start Task',array('sdlc/TaskOne'),array('class'=>'btn btn-primary btn-lg')); ?> 
<?php
      }
?>
                
                

            </div>

           <?php  $this->render('side_bar', array('model'=>$model));  ?>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        

    </div>
