<?php


include("conn.php");
session_start();
$UID = $_SESSION['U_Id'];
echo $UID;
//$Id = $_GET['Id'];

$query = "SELECT * FROM cart";
$rs = $conn->query($query);
		if($rs->num_rows>0)
		{
        while($row = $rs->fetch_assoc())
		{
			$Id = $row["PId"];
//$row = mysqli_fetch_array($query);
			$name = $row["name"];
			$price = $row["price"];

//$query = "INSERT INTO order"."(`name`,`price`)"." VALUES('$name',$price)";
			$query = "INSERT INTO `cementdepot`.`order` (`UId`, `PId`, `OId`, `name`, `price`) VALUES ('$UID', '$Id', NULL, '$name', '$price')";
		   if (!$conn->query($query)) {
                    echo 'Data is not inserted';
                }
		}
		}
		$sql = "DELETE FROM `cementdepot`.`cart` WHERE `UId` = $UID";
					if(!$conn->query($sql)){
							echo "Record deleted unsuccessfully";
						}
		header("Location: home.php");
?>
