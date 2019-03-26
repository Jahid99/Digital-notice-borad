<?php include 'inc/header.php'; ?>
    <div class="container">
      <div class="row">
        <h2>All Sliders <a href="add_slider.php" class="btn btn-primary pull-right">Add a Slider</a> </h2> <hr>

           <?php 
            if (isset($_GET['del'])) {
              $delid = $_GET['del'];
              $delquery = "delete from tbl_sliders where id ='$delid'";
              $deldata = $db->delete($delquery);
              if($deldata){
                        Session::set("message","Slider Deleted Successfully !!!");
                        Session::set("color","success");

                    }   else {
                        Session::set("message","Slider Not Deleted !!!");
                    }
            }

     

         ?>
         <?php   if(Session::get("message")){ ?>
                 
                <center><span class="label label-<?php 
                if(Session::get("color")){
                echo Session::get("color");
                Session::unset_it("color");
              }else{
                  echo "danger";
              }
                 ?>"><?php echo Session::get("message"); ?></span></center><br>
               <?php Session::unset_it("message");
              }
                    ?>
             <?php 
          $query = "SELECT * from tbl_sliders";
          $departments = $db->select($query);
          if($departments){ ?>
            <table class="table table-bordered" id="example">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Image.</th>
                    <th>Name.</th>
                    <th>Publish Date.</th>
                    <th>Action.</th>
                    
                    
                  </tr>
                </thead>
                <tbody>
                    <?php $i=0;
                      while ($result = $departments->fetch_assoc()) { $i++;?>

                        <tr class="odd gradeX">
                          <td><?php echo $i; ?></td>
                          <td><img src="../upload/<?php echo $result['image']; ?>" width="60" height="60"/></td>
                          <td><?php echo $result['name']; ?></td>
                          <td><?php  echo date( "d M, Y", strtotime($result['date']));; ?></td>
                       
                          <td><a href="edit_slider.php?deptid=<?php echo $result['id']; ?>">Edit</a> || <a onclick="return confirm('Are you sure to delete');" href="?del=<?php echo $result['id']; ?>">Delete</a></td>
                        </tr>
                        <?php } ?>
                    
                </tbody>
              </table>
               <?php
                    }else{
                      echo '<center><h2 style="color:red">No Slider Created Yet...</h2></center>';
                    }
                  

                     ?>
              
      </div>
    </div>
       
<?php include 'inc/footer.php'; ?>