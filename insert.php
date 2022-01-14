<?php 
$name=$surname=$curs=$image='';
$con=require 'database.php';

if ($_SERVER['REQUEST_METHOD']=='POST') {
	$name=$_POST['name'];
	$surname=$_POST['surname'];
	$curs=$_POST['curs'];

$target_dir = "rasm/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["image"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["image"]["name"])). " has been uploaded.";
    $image=basename( $_FILES["image"]["name"]);
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}


	$sql="insert into talaba(name,surname,curs,image) values('$name', '$surname', '$curs','$image')";
	$result=$con->query($sql);

	if($result){
		header("location:index.php");
	}
	else{
		echo "error";
	}
}

$con->close();
?>