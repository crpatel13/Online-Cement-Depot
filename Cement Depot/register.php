<?php
include 'conn.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Register page</title>
<link href="tempstyle.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
function check()
{
	e=document.registerForm.Id.value;
		f1=e.indexOf('@');
		f2=e.indexOf('@',f1+1);
		e1=e.indexOf('.');
		e2=e.indexOf('.',e1+1);
		n=e.length;

		if(!(f1>0 && f2==-1 && e1>0 && e2==-1 && f1!=e1+1 && e1!=f1+1 && f1!=n-1 && e1!=n-1))
		{
			alert("Please Enter valid Email");
			document.registerForm.Id.focus();
			return false;
			
		}
	if(document.registerForm.Fname.value=="")
	{
		alert("enter First Name");
		document.registerForm.Fname.focus();
		return false;
	}
	if(document.registerForm.Lname.value=="")
	{
		alert("enter last name");
		document.registerForm.Lname.focus();
		return false;
	}
	if(document.registerForm.contact.value=="")
	{
		alert("enter contact no.");
		document.registerForm.contact.focus();
		return false;
	}
	if(document.registerForm.Id.value=="")
	{
		alert("enter Email-Id");
		document.registerForm.Id.focus();
		return false;
	}
	 
	if(document.registerForm.password.value=="")
	{
		alert("Enter Password");
		document.registerForm.password.focus();
		return false;
	}
	if(document.registerForm.Confpassword.value=="")
	{
		alert("Enter confirm password");
		document.registerForm.Confpassword.focus();
		return false;
	}
	if(document.registerForm.password.value!=document.registerForm.Confpassword.value)
	{
		alert("Confirm Password is not match");
		document.registerForm.Confpassword.focus();
		return false;
	}
	return true;

	
   
}
	</script>
	<?php
  include 'conn.php';            
        if (isset($_POST["register"]))
		{
            if ($_POST["register"] == 'register')
			{
                $Fname = $_POST['Fname'];
                $Lname = $_POST['Lname'];
                $contact = $_POST['contact'];
				$Id = $_POST['Id'];
				$password = $_POST['password'];
				$Confpassword = $_POST['Confpassword'];
                //$query = "INSERT INTO login_client (`First_name`,`Last_name`,`User_Id`,`Password`,`Contact_No.`) values ('$first','$last','$user','$pass','$Cont')";
				if($Fname!="" && $Lname!="" && $contact!="" && $Id!="" && $password!="" && $Confpassword!="" && $password == $Confpassword)
				{
				$query = "INSERT INTO login_client "."(First_name,Last_name,User_Id,Password,Contact_No) ".    "VALUES('$Fname','$Lname','$Id','$password','$contact')";
            if (!$conn->query($query)) {
                    echo 'Registered Unsuccessfully';
                }
                else
                {
                    header("Location: login.php");
                }
				}
		   }
        }
   ?>
     
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
   
                <li><a href="login.php">Login</a></li>
                <li><a href="register.php">Register</a></li>
   

            </ul>    	
        </div> <!-- end of menu -->
       
        
        <div class="cleaner"></div>	
	</div>
    
<div class="Register">
    
        <center><b><form name="registerForm" action="register.php" method="post" onsubmit="check()">
        <br />
        	<label>First Name:</label><input type="text" id="Fname" name="Fname"/>
            <br /><br />
            <label>Last Name:</label><input type="text" id="Lname" name="Lname"/>
            <br /><br />
            <label>Contact No.:</label><input type="text" id="contact" name="contact"/>
            <br /><br />
        	<label>User Id:</label><input type="text" id="Id" name="Id"/>
            <br /><br />
            <label>Password:</label><input type="password" id="password" name="password" />
            <br /><br />
            <label>Confirm Password:</label><input type="password" id="Confpassword" name="Confpassword" />
            <br /><br />
            <input type="submit" name="register" id="register" value="register" />
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