<?php include 'inc/header.php';?>


    <section id="main-slider" class="no-margin">
       



<div class="container-fluid career-form-area">
  <div class="container">
    <div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12 career-form">
    <div class="career-header">
      <h2>ARCHIVE</h2>
      <ul class="list-inline pull-right">
              </ul>
      <div class="clearfix"></div>
    </div>
  </div>
</div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12 information-part">
                  <table class="table table-bordered">
            <colgroup><col width="10%">
            <col width="65%">
            <col width="20%">
            <col width="5%">
            </colgroup><tbody><tr>
              <th>Sl No.</th>
              <th>Name</th>
              <th>Posting Date</th>
              <th>View</th>
            </tr>

              <?php 
          $query = "SELECT * from tbl_sliders";
          $departments = $db->select($query);
          if($departments){ ?>

            <?php $i=0;
                      while ($result = $departments->fetch_assoc()) { $i++;                        $image = $result['image'];

                        $image = str_replace("_thump","",$image);?>
              <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $result['name']; ?></td>
                <td><?php  echo date( "d M, Y", strtotime($result['date']));; ?></td>
                <td>
                <a target="_blank" href="upload/<?php echo $image; ?>"><i class="fa fa-file"></i></a>                </td>
              </tr>
<?php } } ?>



   </tbody></table>
              </div>
    </div>
  </div>
</div>


    </section><!--/#main-slider-->

   

   <?php include 'inc/footer.php';?>