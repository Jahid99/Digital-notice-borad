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

</head><!--/head-->
<body>

    
    <nav class="navbar nav1">
    <div class="container">
        <div class="navbar-header">
            <ul class="nav navbar-nav navbar-right top-nv text-uppercase">
                <li><a href="about.php">About</a></li>
                <li><a href="news.php">News</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="primary-social-menu-links nav navbar-nav navbar-right">
<li><a href="#"><i class="fa fa-facebook"></i></a></li>
<li><a href="#"><i class="fa fa-twitter"></i></a></li>
<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
<li><a href="#"><i class="fa fa-youtube"></i></a></li>
</ul>
        </div>
    </div>
</nav>
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


<!-- Lorem Ipsum is simply dummy text  &nbsp&nbsp&nbsp * &nbsp&nbsp&nbsp  When an unknown printer took a galley  &nbsp&nbsp&nbsp * &nbsp&nbsp&nbsp It is a long established fact that  &nbsp&nbsp&nbsp *  &nbsp&nbsp&nbsp This is basic example of marquee  &nbsp&nbsp&nbsp * &nbsp&nbsp&nbsp  There are many variations of &nbsp&nbsp&nbsp  *  &nbsp&nbsp&nbsp The standard chunk of Lorem -->


</marquee>
    </div>

    <div class="col-md-2">
        <h4 >ALL NEWS</h4>

    </div>
       
          
        
        
    </div>