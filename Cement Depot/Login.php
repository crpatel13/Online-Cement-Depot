<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home page</title>
<link href="tempstyle.css" rel="stylesheet" type="text/css" />
	

</head>
<body>

<?php

include 'conn.php';
if(isset($_POST['clogin']))
{
$Id = $_POST['Id'];
$password = $_POST['password'];
if($Id!="" && $password!="")
{
$query ="select * from login_client where User_Id ='".$_POST['Id']."'";
$rs = $conn->query($query);
$flag=0;
if($rs->num_rows>0)
{
     while($row = $rs->fetch_assoc()) {

        if($row["User_Id"] == $Id && $row["Password"] == $password)
        {
			$UId = $row["U_Id"];
            $flag = 1;
            session_start();
            $_SESSION['User_Id']=$Id;
			$_SESSION['U_Id']=$UId;
            $_SESSION['start'] = time();
            header( 'Location: home.php' ) ;
        }
        

}
}
if($flag==0)
{
echo "you are not registered";
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
                <li><a href="login.php">Login</a></li>
                <li><a href="register.php">Register</a></li>
                
            </ul>    	
        </div> 
       
        
        <div class="cleaner"></div>	
	</div>
    
    <div class="login">
    
        <center><b><form name="log_in" action="Login.php" method="post" >
        <br /><br /><br /><br /><br />
        	<label>User Id:</label><input type="text" id="Id" name="Id" />
            <br /><br />
            <label>Password:</label><input type="password" id="password" name="password" />
            <br /><br />
            <input type="submit" id="clogin" value="login" name="clogin" />
            <br /><br />
            <a href="register.php">Not registered yet</a>
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