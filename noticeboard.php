<?php 
include 'lib/Session.php';
Session::init(); 
?>
<?php include 'config/config.php';?>
<?php include 'lib/Database.php';?>
<?php include 'helpers/Format.php';?>
<?php 
        $db = new Database();
        $fm = new Format();     
 ?>
 <?php
      if(isset($_GET['action']) && isset($_GET['action'])=="logout"){
          Session::destroy();
      }
        if(isset($_SESSION['username']) && $_SESSION['username']=='adminsays'){
        echo "<script>window.location='admin/'</script>";
        exit;
      }
?>

<?php 

    if ($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['name'])  && !isset($_POST['department'])   ) {

                    $name =  $fm->validation($_POST['name']); 
                    $name =  mysqli_real_escape_string($db->link,$name);

                    $email =  $fm->validation($_POST['email']); 
                    $email =  mysqli_real_escape_string($db->link,$email);



                    $to = "selim@gmail.com";
                $from = "$email";
                $headers = "From: $from\n";
                $headers .= 'MIME-Version: 1.0' . "\r\n";
                $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                $subject = "Your Password";
                $message = "Message from $name. Email is $email . Newsletter Subscription Request";

                $sendmail = mail($to, $subject, $message,$headers);
                if ($sendmail) {
                     Session::set("message","Successfully subscribed to newsletter");
                     Session::set("color","success");
                }else{
                    Session::set("message","Email not sent !!.");
                }

                }


 ?>
                
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>ICE NOTICEBOARD</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">

    <style type="text/css">

    .search-container{

    margin-top: -6px;
    }
.navbar-inverse {
    background-color: #2B4664;
    border-color: #080808;
}
.navbar-brand {
  padding: 0px 0px; 
  
}
    </style>

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js.map"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js.map"></script>

</head><!--/head-->
<body>

    
    
<div class="navbar navbar-inverse nav2" role="navigation">
    <div class="container">
        <div class="navbar-header">
              <a class="navbar-brand" href="<?php echo SITE_URL; ?>"><img src="images/ICE.png" alt="LOGO" style="
    height: 78px;
"></a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar2">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar2">
            <ul class="nav navbar-nav navbar-right cust-nav text-uppercase ">
			
			<?php 
$dt = new DateTime('now', new DateTimezone('Asia/Dhaka'));
$current_time = $dt->format('h:i A');
$current_date = $dt->format('j F, Y');

 ?>
                <li><a href="#"></a></li>
                <li><a href="#" style="color: white;
    font-weight: bold;    font-size: 15px;">Time:   <span class="hours"></span> :
  <span class="minutes"></span> :
    <span class="seconds"></span>
    <span class="twelvehr"></span><br>Date: <?php echo $current_date; ; ?></a></li>
                <li><a href="#"></a></li>
                
                <li>   <div class="search-container">
    <form action="<?php echo SITE_URL;?>search.php" method="get">
      <input type="text" placeholder="Search.." name="search" style="    padding: 6px;
    margin-top: 8px;
    font-size: 17px;
    border: none;    border-radius: 5px;    width: 340px;" required>

    <input type="submit"  style="float: right;
    padding: 6px;
    margin-top: 8px;
    margin-right: 16px;
    background: #4FB51E;
    font-size: 17px;
    border: none;
    cursor: pointer;    border-radius: 5px;color:white"  value="Search"/>
      
    </form>
  </div></li>
  
  <li><a href="#"></a></li>
  <li><a href="#"></a></li>
                <li><a href="<?php echo SITE_URL; ?>">HOME</a></li>
                <li><a href="noticeboard.php">NOTICEBOARD</a></li>
                <?php 

                    if(isset($_SESSION['email'])){ ?>
                    <li><a href="archive.php">ARCHIVE</a></li>
                    <li><a href="<?php echo SITE_URL;?>?action=logout">LOGOUT</a></li>
                <?php    }else{

                 ?>
                
                <li><a href="login.php">LOG IN</a></li>
                <li><a href="signup.php">SIGN UP</a></li>
                <?php } ?>
                
                <div class="hd hidden-md"></div>
            </ul>


        </div>
    </div>
</div>

    
    <div class="container">

    <div class="col-md-2">
        
<h4 style="">UPDATED NEWS</h4>
    </div>

    <div class="col-md-8" style="border-right :2px solid #4FB51E;border-left:2px solid #4FB51E">
        
 <marquee style="
    margin: 8px -7px;
">

  <?php   $size = 0;
          $query = "SELECT * from tbl_sliders";
          $departments = $db->select($query);
          if($departments){ ?>

            <?php $i=0;
                      while ($result = $departments->fetch_assoc()) { $i++;?>

                      <?php $size=$i;?>


                      <?php } } ?>

 <?php 
          $query = "SELECT * from tbl_sliders";
          $departments = $db->select($query);
          if($departments){ ?>

            <?php $i=0;
                      while ($result = $departments->fetch_assoc()) { $i++;?>

                      <?php
					  $image = $result['image'];

                        $image = str_replace("_thump","",$image);
						
						$test = SITE_URL.'upload/'.$image;
						
                      if($size!=$i){
                        echo '<a target="_blank" href='.$test.'>'.$result['name'].'<a>   &nbsp&nbsp&nbsp *   &nbsp&nbsp&nbsp';
                    }else{
                        echo '<a target="_blank" href='.$test.'>'.$result['name'].'<a>   &nbsp&nbsp&nbsp';
                    }

                      

                      ?>


                      <?php } } ?>



</marquee>
    </div>

    <div class="col-md-2">
        <h4 >ALL NEWS</h4>

    </div>
       
          
        
        
    </div>


    <section id="main-slider" class="no-margin">
     
<div class="container-fluid career-form-area">
  <div class="container">
    <div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12 career-form">
    <div class="career-header">
      <h2>Notice Board</h2>
      <ul class="list-inline pull-right">
              </ul>
      <div class="clearfix"></div>
    </div>
  </div>
</div>
    <div class="row">
      
    </div>
  </div>
</div>

<div class="container">
  <div class="row">

   <?php 
          $query = "SELECT * from tbl_sliders ORDER by id DESC LIMIT 24";
          $departments = $db->select($query);
          if($departments){ ?>

           <?php $i=0; 
                      while ($result = $departments->fetch_assoc()) { $i++; 

                        $image = $result['image'];

                        $image = str_replace("_thump","",$image);

                        


                        ?>

    <div class="col-sm-4">
        
        <a href="upload/<?php echo $image;?>" data-toggle="lightbox" >
          <img src="upload/<?php echo $image;?>" class="img-fluid" height="450" width="375"  >
         </a>
      </div>

      <?php } } ?>
      
    </div>

</div>


    </section><!--/#main-slider-->

   



    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                   Copyright &copy; 2018 <a target="_blank" href="#" title="Free Twitter Bootstrap WordPress Themes and HTML templates">ICE-NSTU-</a>All Rights Reserved.
                </div>
                <div class="col-sm-2">
                </div>
                <div class="col-sm-1">
                </div>
                <div class="col-sm-3">
                    Designed & Developed by Selim Ahemmed
                </div>
            </div>
        </div>
    </footer><!--/#footer-->


   
    <script src="js/jquery.prettyPhoto.js"></script>
    
    <script type="text/javascript">
  $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox();
            });
</script>


<script type="text/javascript">
var $document = $(document);
(function () { 
  var clock = function () {
      clearTimeout(timer);
    
      date = new Date();    
      hours = date.getHours();
      minutes = date.getMinutes();
      seconds = date.getSeconds();
      dd = (hours >= 12) ? 'PM' : 'AM';
      
    hours = (hours > 12) ? (hours - 12) : hours
      
      var timer = setTimeout(clock, 1000);
    
    $('.hours').html(Math.floor(hours));
    $('.minutes').html(Math.floor(minutes));
    $('.seconds').html(Math.floor(seconds));
      $('.twelvehr').html(dd);
  };
  clock();
})();

(function () {
  $document.bind('contextmenu', function (e) {
    e.preventDefault();
  });  
})();
    </script>


</body>
</html>