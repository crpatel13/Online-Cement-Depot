<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login page</title>
<link href="template.css" rel="stylesheet" type="text/css" />
</head>
<body>

<?php

include 'conn.php';
if(isset($_POST['log_in']))
{
$Id = $_POST['Id'];
$password = $_POST['password'];
if($Id!="" && $password!="")
{
$query ="select * from login_admin";
$rs = $conn->query($query);
$flag=0;
if($rs->num_rows>0)
{
     while($row = $rs->fetch_assoc()) {

        if($row["admin_Id"] == $Id && $row["admin_pass"] == $password)
        {
            $flag = 1;
            session_start();
            $_SESSION['admin_Id']=$Id;
            $_SESSION['start'] = time();
            header( 'Location: admin_home.php' ) ;
        }
        

}
}
if($flag==0)
{
echo "you are not an admin";
}
}
}
?>
<div id="container">
    <div id="banner">
    	<div id="logo"><b><font size="+2" color="#990033">Online Cement Depot</font></b></div>
    </div>
    
    <div id="menu_search">
        <div id="menu">
            <ul>

                <li><a href="admin_login.php">Login</a></li>                
            </ul>    	
        </div> 
       
        
        <div class="cleaner"></div>	
	</div>
    
    <div class="login">
    
        <center><b><form name="log_in" action="admin_login.php" method="post">
        <br /><br /><br /><br /><br />
        	<label>User Id:</label><input type="text" id="Id" name="Id"/>
            <br /><br />
            <label>Password:</label><input type="password" id="password" name="password" />
            <br /><br />
            <input type="submit" id="log_in" value="login" name="log_in" />
            </form></b></center>
		<div class="cleaner"></div>    
    </div>
    
    <div id="footer">
        <ul class="footer_list">
        </ul> 
        
    <!-- end of footer -->
<!--  Free Website Templates @ TemplateMo.com  -->
</div>
</body>
</html>