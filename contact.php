<?php include 'inc/header.php';?>


<?php 

	if ($_SERVER['REQUEST_METHOD']=='POST') {

                    $name =  $fm->validation($_POST['name']); 
                    $name =  mysqli_real_escape_string($db->link,$name);

                    $email =  $fm->validation($_POST['email']); 
                    $email =  mysqli_real_escape_string($db->link,$email);

                    $message =  $fm->validation($_POST['message']); 
                    $message =  mysqli_real_escape_string($db->link,$message);


                    $to = "selim@gmail.com";
                $from = "$email";
                $headers = "From: $from\n";
                $headers .= 'MIME-Version: 1.0' . "\r\n";
                $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                $subject = "Your Password";
                $message = "Message from $name. Email is $email. Message ; $message";

                $sendmail = mail($to, $subject, $message,$headers);
                if ($sendmail) {
                     Session::set("message","Email sent successfully");
                     Session::set("color","success");
                }else{
                    Session::set("message","Email not sent !!.");
                }

                }


 ?>


    <section id="main-slider" class="no-margin">

<div class="container">
  <center><h2>Contact Us</h2></center><br>
 <div class="container">


         
           <form role="form" action="" method="POST">
                        <div class="input-group">

                        
                            <input type="text" class="form-control" name="name" placeholder="Enter Name" style="    width: 324px;" required><br><br>

                            <input type="text" class="form-control" name="email" placeholder="Enter E-mail" style="    width: 324px;" required><br><br>

                            <textarea class="form-control" rows="5" id="comment" name="message" required></textarea><br><br>
                            
                            
                                
                            <input type="submit" value="SEND"  style="margin-top:3px;background:#4FB51E">
                            
                        </div>
                    </form>
       </div>
      
</div>




    </section><!--/#main-slider--><BR><BR><BR>

   

   <?php include 'inc/footer.php';?>