<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login page</title>
<link href="template.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="container">
    <div id="banner">
    	<div id="logo"><b><font size="+2" color="#990033">Online Cement Depot</font></b></div>
    </div>
    
    <div id="menu_search">
        <div id="menu">
            <ul>
                <li><a href="admin_home.php">Home</a></li>              
                <li><a href="product.php">Insert Product</a></li>
                <li><a href="dproduct.php">Delete Product</a></li>
                <li><a href="uproduct.php">Update Product</a></li>
                <li><a href="admin_logout.php">Logout</a></li>									
                
            </ul>    	
        </div> 
       
        
        <div class="cleaner"></div>	
	</div>
    <div class="uproduct">
	<form name="uproducts" action="updateproduct.php" method="post" enctype="multipart/form-data">
        <center>
        <table>
        <tr>
        	<td>Old Product Name</td>
            <td><label><input type="text" name="oname" id="oname" /></label></td>
        </tr>
        <tr>
        	<td>Updated Name</td>
            <td><label><input type="text" name="name" id="name" /></label></td>
        </tr>
        <tr>
        	<td>Price</td>
            <td><label><input type="text" name="price" id="price" /></label></td>
        </tr>
        <tr>
        	<td>Image</td>
            <td><label><input type="file" name="file" id="file" /></label></td>
        </tr>
        <tr>
        	<td><input type="submit" name="button" id="button" value="Update" /></td>
         </tr>
        </table>
        </center>
        </form>
        </div>
        
    <div id="footer">
        <ul class="footer_list">
            <li><a href="admin_home.php">Home</a></li>
            
        </ul> 
        
    <!-- end of footer -->
<!--  Free Website Templates @ TemplateMo.com  -->
</div>
</body>
</html>