<?php
include 'conn.php';




if(isset($_POST['button']))
{
	$name = $_POST['name'];
	if($name!="")
	{		
		$query ="select * from product";
		$rs = $conn->query($query);
		$flag=0;
		if($rs->num_rows>0)
		{
     		while($row = $rs->fetch_assoc())
			{
				if($row["PName"] == $name)
        		{
					$Id = $row["PId"];			
            		$flag = 1;
					echo $row['PName'] . $row['PId'];
					$sql = "DELETE FROM `cementdepot`.`product` WHERE `PId` = $Id";
					if(!$conn->query($sql)){
							echo "Record deleted unsuccessfully";
						}
            		header( 'Location: dproduct.php' ) ;
        		}
        

			}
		}
		if($flag==0)
		{
			echo 'Data is not Found';
		}
	}
}
?>