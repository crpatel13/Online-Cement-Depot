<?php


include("conn.php");
session_start();
$UID = $_SESSION['U_Id'];
echo $UID;
$Id = $_GET['Id'];

$query = "SELECT * FROM product where PId = '$Id'";
$rs = $conn->query($query);
//$row = mysqli_fetch_array($query);
$row = $rs->fetch_assoc();
$name = $row["PName"];
$price = $row["PPrice"];

//$query = "INSERT INTO order"."(`name`,`price`)"." VALUES('$name',$price)";
$query = "INSERT INTO `cementdepot`.`cart` (`UId`, `PId`, `CId`, `name`, `price`) VALUES ('$UID', '$Id', NULL, '$name', '$price')";
echo $query;
   if (!$conn->query($query)) {
                    echo 'Data is not inserted';
                }
                else
                {
                    header("Location: product.php");
                }
?>
