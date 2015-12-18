<?php
include('admin/includes/config.php');
?>

<!DOCTYPE html>
<html lang="en"><head>
<meta charset="utf-8">
<title>JavaScript Form Validation using a sample registration form</title>
<meta name="keywords" content="example, JavaScript Form Validation, Sample registration form" />
<meta name="description" content="This document is an example of JavaScript Form Validation using a sample registration form. " />
<link rel='stylesheet' href='css/js-form-validation.css' type='text/css' />
<script src="js/sample-registration-form-validation.js"></script>
</head>
<body onload="document.registration.userid.focus();">
<h1>Registration Form</h1>
<p>Use tab keys to move from one input field to the next.</p>
<form name='registration' method="post" onSubmit="return formValidation();"
          action="<?php echo ADMINURL;?>">
<ul>
<li><label for="u_name">Name:</label></li>
<li><input type="text" name="u_name" size="12" /></li>
<li><label id="gender">Sex:</label></li>
<li><input type="radio" name="gender" id="male" value="Male" /><span>Male</span></li>
<li><input type="radio" name="gender" id="female" value="Female" /><span>Female</span></li>
<li><label for="phone">Phone:</label></li>
<li><input type="text" name="phone" /></li>
<li><label for="address">Address:</label></li>
<li><input type="text" name="address" size="50" /></li>
<li><label for="nationality">Nationality:</label></li>
<li><input type="text" name="nationality" size="12" /></li>
<li><label for="dob">DOB:</label></li>
<li><input type="datetime" name="dob" /></li>
<li><label for="edu_back">Education Background:</label></li>
<li><textarea name="edu_back" id="edu_back"></textarea></li>
<li><label for="contact">Contact:</label></li>
<li><select name="contact">
<option selected="" value="Default">(Please select a mode of contact)</option>
<option value="AF">Phone</option>
<option value="AL">Email</option>
</select></li>
<li><input type="submit" name="submit" value="Submit" /></li>
</ul>
</form>
</body>
</html>




