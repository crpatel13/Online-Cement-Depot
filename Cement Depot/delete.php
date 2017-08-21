<?php


include("conn.php");
session_start();
$UID = $_SESSION['U_Id'];
echo $UID;
$Id = $_GET['Id'];

		$sql = "DELETE FROM `cementdepot`.`cart` WHERE `CId` = $Id";
					if(!$conn->query($sql)){
							echo "Record deleted unsuccessfully";
						}
						else
						{
							header("Location: cart.php");
						}
		
?>
