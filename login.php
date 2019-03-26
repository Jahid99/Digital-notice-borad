<?php include 'inc/header.php';?>


<?php 

 if ($_SERVER['REQUEST_METHOD']=='POST' && !isset($_POST['name'])) {

                    $email =  $fm->validation($_POST['email']); 
                    $email =  mysqli_real_escape_string($db->link,$email);

                    $password =  $fm->validation($_POST['password']); 
                    $password =  mysqli_real_escape_string($db->link,$password);


                    $query = "SELECT * FROM tbl_users WHERE email = '$email'";
            $result = $db->select($query);
            if($result!= false){
            $value = $result->fetch_assoc();
            $dbpassword = $value['password'];
            if(password_verify($password, $dbpassword)){
            Session::set("login",true);
            Session::set("email",$value['email']);
            Session::set("userId",$value['id']);
            echo "<script>window.location='archive.php'</script>";
            }else{
              Session::set("message","Username and Password do not matched !!!");
            Session::set("color","danger");
          
            }
            }else{
             Session::set("message","Username and Password do not matched !!!");
            Session::set("color","danger");
            }

                  }


 ?>

  <center><h2>LOG IN</h2></center><hr>

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

    <section id="main-slider" class="no-margin"><BR><BR>


       
       <div class="container">


         
           <form role="form" action="" method="POST">
                        <div class="input-group">
                            <input type="text" class="form-control" name="email" placeholder="Enter E-mail" style="    width: 324px;" required><br><br>
                            <input type="text" class="form-control" name="password"  placeholder="Enter Password"  style="margin-top:3px;    width: 324px;"  required><br><br>
                            
                               <input type="submit" value="LOG IN"  style="margin-top:3px;background:#4FB51E">
                            
                        </div>
                    </form>
       </div>

      



    </section><!--/#main-slider--><BR><BR><BR>

   

   <?php include 'inc/footer.php';?>