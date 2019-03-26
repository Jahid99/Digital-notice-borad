<?php include 'inc/header.php'; ?>
    <div class="container">
      <div class="row">
        <h2>Add a Slider</h2><hr>

             <?php 

                if ($_SERVER['REQUEST_METHOD']=='POST') {

                    $name =  $fm->validation($_POST['name']); 
                    $name =  mysqli_real_escape_string($db->link,$name);
               
                
                     $file = $_FILES['image']['tmp_name']; 
        $sourceProperties = getimagesize($file);
        $fileNewName = time();
        $folderPath = "../upload/";
        $ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
        $imageType = $sourceProperties[2];


        switch ($imageType) {


            case IMAGETYPE_PNG:
                $imageResourceId = imagecreatefrompng($file); 
                $targetLayer = imageResize($imageResourceId,$sourceProperties[0],$sourceProperties[1]);
                imagepng($targetLayer,$folderPath. $fileNewName. "_thump.". $ext);
                break;


            case IMAGETYPE_GIF:
                $imageResourceId = imagecreatefromgif($file); 
                $targetLayer = imageResize($imageResourceId,$sourceProperties[0],$sourceProperties[1]);
                imagegif($targetLayer,$folderPath. $fileNewName. "_thump.". $ext);
                break;


            case IMAGETYPE_JPEG:
                $imageResourceId = imagecreatefromjpeg($file); 
                $targetLayer = imageResize($imageResourceId,$sourceProperties[0],$sourceProperties[1]);
                imagejpeg($targetLayer,$folderPath. $fileNewName. "_thump.". $ext);
                break;


            default:
                echo "Invalid Image type.";
                exit;
                break;
        }


        move_uploaded_file($file, $folderPath. $fileNewName. ".". $ext);

        $path = $fileNewName. "_thump.". $ext;
        

          $query = "INSERT INTO  tbl_sliders(image,name) VALUES ('$path','$name')";
                $dept_insert = $db->insert($query);
                if($dept_insert){
                  Session::set("message","Slider added succesully !!!");
            Session::set("color","success");
            echo "<script>window.location='index.php'</script>";  
            exit();
                } 
             



             
               
                 }


                 function imageResize($imageResourceId,$width,$height) {


    $targetWidth =1920;
    $targetHeight =750;


    $targetLayer=imagecreatetruecolor($targetWidth,$targetHeight);
    imagecopyresampled($targetLayer,$imageResourceId,0,0,0,0,$targetWidth,$targetHeight, $width,$height);


    return $targetLayer;
}
             ?>

                 <form action="" method="post" enctype="multipart/form-data">
                        <table class="form">                    
                          
                             <tr>
                                <td>
                                    <label class="form-group">Name:</label>
                                </td>
                                <td>
                                    <input type="text" name="name" class="form-control" placeholder="Name" required/><br>

                                </td>
                            </tr>                
                          
                             <tr>
                                <td>
                                    <label class="form-group">Image:</label>
                                </td>
                                <td>
                                    <input type="file" name="image" class="form-control" required/><br>

                                </td>
                            </tr>
                             
                            
                             <tr>
                                <td>
                                </td>
                                <td>
                                    <input type="submit" class="btn btn-default" name="submit" Value="Submit" />
                                </td>
                            </tr>
                        </table>
                    </form>
      </div>
    </div>
       
<?php include 'inc/footer.php'; ?>