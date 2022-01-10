<?php include 'connect.php';
if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $mobile=$_POST['mobile'];
    $image=$_FILES['file'];
    echo $username;
    echo "<br>";
    print_r($image);
    $imagename=$image['name'];
    print_r($imagename);
    echo "<br>";
   
    echo "<br>";
    $imagetype=$image['type'];
    print_r($imagetype);
    echo "<br>";
    $imagetmpname=$image['tmp_name'];
    print_r($imagetmpname);
    echo "<br>";
    $imageerror=$image['error'];
    print_r($imageerror);
    echo "<br>";
    $imagesize=$image['size'];
    print_r($imagesize);
    $file_separate=explode('.',$imagename);
    print_r($file_separate);
    $file_extension=strtolower(end($file_separate));
    print_r($file_extension);
    $extension=array('png','jpeg','jpg','mp4');
    if(in_array($file_extension,$extension)){
        echo "ok";
        $uploadimage='images/'.$imagename;
        move_uploaded_file($imagetmpname,$uploadimage);
        $sql="INSERT into hero (username,mobile,image) values('$username','$mobile','$uploadimage')";
        $result=mysqli_query($conn,$sql);
        if($result){
            echo "uploaded successfully";
        }
        
    }
    else{
        echo "not okay";
    }
   
   
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include 'connect.php';
    $sql="select * from hero";
    $result=mysqli_query($conn,$sql);
    if($result){
        while($row=mysqli_fetch_assoc($result)){
            $video=$row['image'];
        }
    }
    ?>
    
    <video width="320" height="240" controls>
  <source src=<?php echo $video ?> type="video/mp4">
 
  Your browser does not support the video tag.
</video>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    ?>
</body>
</html>