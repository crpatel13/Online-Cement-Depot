<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home page</title>
<link href="tempstyle.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="container">
    <div id="banner">
    	<div id="logo"><b><font size="+2" color="#990033">Online Cement Depot</font></b></div>
    </div>
    
    <div id="menu_search">
        <div id="menu">
            <ul>
				<li><a href="home.php">Home</a></li>
                <li><a href="product.php">Product</a></li>
                <li><a href="cart.php">My Cart</a></li>
                <li><a href="logout.php">Logout</a></li>            </ul>    	
        </div> 
        <div class="cleaner"></div>	
	</div>
   	 
       	<div class="product">
        <table align="center">
        <?php
		include 'conn.php';
		$query = "SELECT * FROM product";
		$rs = $conn->query($query);
		if($rs->num_rows>0)
		{
        while($row = $rs->fetch_assoc())
		{
			$Id = $row["PId"];
			
		?>
		<tr>
        	<td><?php echo $row['PName']; ?></td><br />
        </tr>
        <tr>
        	<td><img src="admin/<?php echo $row['PImage']; ?>" width="300" height="200" /></td><br />
        </tr>
        <tr>
        	<td><?php echo $row['PPrice']; ?></td><br />
        </tr>
        
        <tr>
        	<td><?php echo "<a href=Buy.php?Id=$Id> Add to cart </a>" ; ?></td><br />
         </tr> 
        </table>
        <?php
        }
        }
		?>
       
        </div>  
		       
        
    <div id="footer">
        <ul class="footer_list">
            <li><a href="home.php">Home</a></li>
            <li class="last"><a href="contact.php">Contact Us</a></li>
        </ul> 
        
    <!-- end of footer -->
<!--  Free Website Templates @ TemplateMo.com  -->
</div>
</body>
</html>