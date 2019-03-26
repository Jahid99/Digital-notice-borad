<?php include 'inc/header.php';?>

     <?php 
    $search =  mysqli_real_escape_string($db->link,$_GET['search']);
    if (!isset($search) || $search == NULL) {
        header("Location: 404.php");
    }else{
        $search = $search;
    }

 ?>
    <section id="main-slider" class="no-margin">
       



<div class="container-fluid career-form-area">
  <div class="container">
    <div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12 career-form">
    <div class="career-header">
      <h2>Search Result</h2>
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
          
           $query = "SELECT * FROM tbl_sliders WHERE name LIKE '%$search%'  order by id desc";
          $departments = $db->select($query);
          if($departments){ ?>

            <?php $i=0;
                      while ($result = $departments->fetch_assoc()) { $i++;?>
              <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $result['name']; ?></td>
                <td><?php  echo date( "d M, Y", strtotime($result['date']));; ?></td>
                <td>
                <a target="_blank" href="upload/<?php echo $result['image']; ?>"><i class="fa fa-file"></i></a>                </td>
              </tr>
<?php } }else{



  
$ok = 1;


  } ?>



   </tbody></table>
              </div>
              <?php if(isset($ok)){ ?>
              <center style="color:red">Not result Found</center><br>
              <?php  } ?>
              
    </div>

  </div>

</div>


    </section><!--/#main-slider-->

   

   <?php include 'inc/footer.php';?>