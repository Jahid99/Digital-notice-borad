<?php include 'inc/header.php';?>


    <section id="main-slider" class="no-margin">
        <div class="carousel slide wet-asphalt">
           <!--  <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
            </ol> -->
            <div class="carousel-inner">

              <?php 
          $query = "SELECT * from tbl_sliders ORDER by id DESC LIMIT 15";
          $departments = $db->select($query);
          if($departments){ ?>

           <?php $i=0; 
                      while ($result = $departments->fetch_assoc()) { $i++; $image = $result['image'];?>
               
                 <div class="item <?php if($i==1){echo "active";} ?>" style="background-image: url(upload/<?php echo $image; ?>);background-size: 758px 600px;background-position:center center;">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                               <!--  <div class="carousel-content center centered">
                                    <h2 class="boxed animation animated-item-1">Pellentesque habitant morbi tristique senectus</h2>
                                    <p class="boxed animation animated-item-2">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                                    <br>
                                    <a class="btn btn-md animation animated-item-3" href="#">Read More</a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
               
              <?php } } ?>

                
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="icon-angle-left"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="icon-angle-right"></i>
        </a>
    </section><!--/#main-slider-->

   

   <?php include 'inc/footer.php';?>