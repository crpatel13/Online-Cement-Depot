<?php

include("conn.php");




if ($_FILES["file"]["error"] > 0)
  {
  echo "Error: " . $_FILES["file"]["error"] . "<br />";
  }
else
  {
/* echo "Upload: " . $_FILES["file"]["name"] . "<br />";
  
  echo "Type: " . $_FILES["file"]["type"] . "<br />";
  echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
  echo "Stored in: " . $_FILES["file"]["tmp_name"];*/
 
  
  $name1= $_FILES['file']['name'];
  $tmppath= $_FILES['file']['tmp_name'];
  if(move_uploaded_file ($tmppath, 'upload/'.$name1));
  $path='upload/'.$name1;
  }

$name = $_POST['name'];
$price  = $_POST['price'];
$query = "INSERT INTO product "."(PName,PPrice,PImage) "."VALUES('$name','$price','$path')";
echo $query;
if (!$conn->query($query)) {
                    echo 'Item is not Inserted';
                }
                else
                {
                    header("Location: product.php");
                }  
?>