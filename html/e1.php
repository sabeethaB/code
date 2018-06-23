<?php
$error='';
if(isset($_POST['submit']))
{
if(nameField($_POST['name'])=='')
{
    $error="Invalid Name";
}

if(numberField($_POST['phone'])=='')
{
    $error.="<br>Invalid Number";
}
if(nameField($_POST['address'])=='')
{
    $error.="Invalid Address";
}
if($error)
{
    echo $error;
}
else
{
    echo "Form submitted successfully";
}
}

function nameField($val)
{
if(preg_match("/([%\$#\*\'\"\()]+)/", $val)) //Not allowed some of the special characters
{
return false;
}
else
{
return true;
}
}
function numberField($val)
{
if(preg_match("/^[0-9]*$/", $val))
{
return true;
}
else
{
return false;
}
}
?>

<html>
<body>
<form method="post">
<input type="text" name="name"/>
<input type="text" name="phone">
<input type="text" name="address">
<input type="text" name="city">
<input type="submit" name="submit" value="Submit"/>
</form>
</body>
</html>