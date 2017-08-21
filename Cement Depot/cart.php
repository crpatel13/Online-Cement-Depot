<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home page</title>
<link href="tempstyle.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="container">
	<!--  Free CSS Templates @ www.TemplateMo.com  -->
    <div id="banner">
    	<div id="logo"><b><font size="+2" color="#990033">Online Cement Depot</font></b></div>
    </div>
    
    <div id="menu_search">
        <div id="menu">
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="product.php">Product</a></li>
                <li><a href="cart.php">My Cart</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>    	
        </div> <!-- end of menu -->
       
        
        <div class="cleaner"></div>	
	</div>
    <div class="cart">
        <table align="center" border="2">
        <tr>
        	<th>Product Id</th>
            <th>Cart Id</th>
            <th>Name</th>
            <th>Price</th>
        </tr><br />
        <?php
		include 'conn.php';
		session_start();
		$query = "SELECT * FROM cart where UId = ".$_SESSION['U_Id'];
		$rs = $conn->query($query);
		if($rs->num_rows>0)
		{
        while($row = $rs->fetch_assoc())
		{
			$Id = $row["CId"];
			
		?>
		<tr>
        	<td><?php echo $row['PId']; ?></td>
        	<td><?php echo $row['CId']; ?></td>
        	<td><?php echo $row['name']; ?></td>
          	<td><?php echo $row['price']; ?></td>
        	<td><?php echo "<a href=delete.php?Id=$Id>delete</a>" ; ?></td>
        </tr>
        
        
        
        <?php
        }
		?>
        </table>
        <?php
        }
		?>
       <form name="buy" method="post" action="Buynow.php">
       	<label><input type="submit" name="buy" value="buy" /></label>
       </form>
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