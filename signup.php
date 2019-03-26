<?php include 'inc/header.php';?>


             <?php 

                if ($_SERVER['REQUEST_METHOD']=='POST') {

                    $name =  $fm->validation($_POST['name']); 
                    $name =  mysqli_real_escape_string($db->link,$name);

                    $department =  $fm->validation($_POST['department']); 
                    $department =  mysqli_real_escape_string($db->link,$department);

                    $institution =  $fm->validation($_POST['institution']); 
                    $institution =  mysqli_real_escape_string($db->link,$institution);

                    $roll =  $fm->validation($_POST['roll']); 
                    $roll =  mysqli_real_escape_string($db->link,$roll);

                    $session =  $fm->validation($_POST['session']); 
                    $session =  mysqli_real_escape_string($db->link,$session);

                    $year =  $fm->validation($_POST['year']); 
                    $year =  mysqli_real_escape_string($db->link,$year);

                    $term =  $fm->validation($_POST['term']); 
                    $term =  mysqli_real_escape_string($db->link,$term);

                    $faculty =  $fm->validation($_POST['faculty']); 
                    $faculty =  mysqli_real_escape_string($db->link,$faculty);

                    $hall =  $fm->validation($_POST['hall']); 
                    $hall =  mysqli_real_escape_string($db->link,$hall);

                    $who_am_i =  $fm->validation($_POST['who_am_i']); 
                    $who_am_i =  mysqli_real_escape_string($db->link,$who_am_i);

                    $mobile_no =  $fm->validation($_POST['mobile_no']); 
                    $mobile_no =  mysqli_real_escape_string($db->link,$mobile_no);

                    $email =  $fm->validation($_POST['email']); 
                    $email =  mysqli_real_escape_string($db->link,$email);

                    $password =  $fm->validation($_POST['password']); 
                    $password =  mysqli_real_escape_string($db->link,$password);
                    $password = password_hash($password, PASSWORD_BCRYPT);  


                    $mailquery = "SELECT * FROM tbl_users where email = '$email' limit 1";
           $mailcheck = $db->select($mailquery);
           if ($mailcheck != false) {
            

            Session::set("message","E-mail Already exists !!!");
            Session::set("color","danger");
           }else{

           	   $query = "INSERT INTO  tbl_users(name,department,institution,roll,session,year,term,faculty,hall,who_am_i,mobile_no,email,password) VALUES ('$name','$department','$institution','$roll','$session','$year','$term','$faculty','$hall','$who_am_i','$mobile_no','$email','$password')";
                $dept_insert = $db->insert($query);
                if($dept_insert){
                  Session::set("message","Registration Successfull !!!");
            Session::set("color","success");
            echo "<script>window.location='login.php'</script>";  
            exit();
                } 

           }

                  





}

?>


  <center><h2>SIGN UP</h2></center><hr>

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


                            <input type="text" class="form-control" name="name" placeholder="Enter Name*" style="    width: 324px;" required><br><br>

                            <input type="text" class="form-control" name="department" placeholder="Enter Department*" style="    width: 324px;" required><br><br>

                            <input type="text" class="form-control" name="institution" placeholder="Enter Institution*" style="    width: 324px;" required><br><br>

                            <input type="text" class="form-control" name="roll" placeholder="Enter Roll/ID No" style="    width: 324px;" ><br><br>

                            <input type="text" class="form-control" name="session" placeholder="Enter Session" style="    width: 324px;" ><br><br>

                            <input type="text" class="form-control" name="year" placeholder="Enter Year" style="    width: 324px;" ><br><br>

                            <input type="text" class="form-control" name="term" placeholder="Enter Term" style="    width: 324px;" ><br><br>

                            <input type="text" class="form-control" name="faculty" placeholder="Enter Faculty*" style="    width: 324px;" required><br><br>

                            <input type="text" class="form-control" name="hall" placeholder="Enter Hall" style="    width: 324px;" ><br><br>

                            <select class="form-control" id="sel1" name="who_am_i">
                              <option value="">I am a</option>
                              <option value="teacher">Teacher</option>
                              <option value="student">Student</option>
                              <option value="employee">Employee</option>
                            </select><br><br>

                             <input type="text" class="form-control" name="mobile_no" placeholder="Enter Mobile Number" style="    width: 324px;" ><br><br>

                            <input type="text" class="form-control" name="email" placeholder="Enter E-mail*" style="    width: 324px;" required><br><br>


                            <input type="text" class="form-control" name="password"placeholder="Enter Password*"  style="margin-top:3px;    width: 324px;"  required><br><br>
                            
                                
                            <input type="submit" value="SIGN UP"  style="margin-top:3px;background:#4FB51E">
                            
                        </div>
                    </form>
       </div>

      



    </section><!--/#main-slider--><BR><BR><BR>

   

   <?php include 'inc/footer.php';?>