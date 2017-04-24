<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>TRAMIET | University Management System</title>
<link rel="icon" href="image/logo3.png" type="image/png">
<link rel="stylesheet" href="CSS/style.css" />
</head>
<body>
<?php
	require('db.php');
    // If form submitted, insert values into the database.
    if (isset($_REQUEST['name'])){
		$name = stripslashes($_REQUEST['name']); // removes backslashes
		$name = mysqli_real_escape_string($con,$name); //escapes special characters in a string
		$duration = stripslashes($_REQUEST['duration']);
		$duration = mysqli_real_escape_string($con,$duration);
        $query = "INSERT into `degrees` (name, duration) VALUES ('$name', '$duration')";
        $result = $con->query($query);
        if($result){
            echo "<div class='form'><h1>degree registered successfully.</h1><br/><h1>Click here to </h1><a href='dashboard.php'><h1>Dashboard</h1></a></div>";
        }else{
            //this will show you the error 
            printf("%s\n", $con->error);
            exit();
        }
    }else{
?>
<div class="logo">
<img src="image/logo3.png" />
</div>
<div class="ums_logo">
<img src="image/ums_logo.png" />
</div>
<div class="login_box" style="margin-left: 370px;">
<div class="red_box">
</div>
<div class="sign_in">Degree
</div>
<form action="" method="post" name="registration">
<div class="table">
<div id="UpdatePanel1">
  <table align="center" width="100%" border="0" cellspacing="30" cellpadding="0" class="login_tbl">
    <tr>
      <td height="41"><h3>Degree Name</h3></td>
      <td><input name="name" type="text" class="input_type" id="name" placeholder="Degree Name" required="required" /></td>
    </tr>
    <tr>
      <td height="41"><h3>Duration </h3></td>
      <td><input name="duration" type="text" class="input_type" id="duration" placeholder="Duration" required="required" /></td>
    </tr>
	  <tr>
  <td><div class="login_button">
    <input type="image" name="register" id="register" src="add-button-blue-hi.png" alt="register" style="height:80px;width:130px;border-width:0px; " />
  </div></td>
  </tr>
  </table>
  </div>
</div>
</form></div>
<?php } ?>
</body>
</html>
</body>
</html>
