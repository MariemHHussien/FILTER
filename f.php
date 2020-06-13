<?php

if(isset($_POST["button"]))
{$age=$_POST['age'];
$pass=$_POST['pass'];
$phone=$_POST['phone'];
$facebook=$_POST['facebook'];
$Email=$_POST['Email'];}
$AFTER=filter_var($age,FILTER_SANITIZE_NUMBER_INT);
echo "Before Sanitize your age:".$age."</br>";
echo "After Sanitize your age:".$AFTER."</br>";
if(filter_var($AFTER,FILTER_VALIDATE_INT))
{
    echo "DONE";
}
else
{echo "we filter this";
}
echo "</br>";
echo"************************************************";
echo "</br>";
$a=filter_var($pass,FILTER_SANITIZE_NUMBER_INT);
echo "Before Sanitize your pass:".$pass."</br>";
echo "After Sanitize your pass".$a."</br>";
if(filter_var($a,FILTER_VALIDATE_INT))
{
    echo "DONE";
}
else
{
   echo "we filter this";
}
echo "</br>";
echo"************************************************";
echo "</br>";
$after=filter_var($phone,FILTER_SANITIZE_NUMBER_INT);
echo "Before Sanitize your phone:".$phone."</br>";
echo "After Sanitize your phone:".$after."</br>";
if(filter_var($after,FILTER_VALIDATE_INT))
{
    echo "DONE";
}
else
{
    echo "we filter this";
}
echo "</br>";
echo"************************************************";
echo "</br>";
$after=filter_var($facebook,FILTER_SANITIZE_URL);
echo "Before Sanitize your face:".$facebook."</br>";
echo "After Sanitize your face:".$after."</br>";
if(filter_var($after,FILTER_VALIDATE_URL))
{
    echo "DONE";
}
else
{
    echo "This is not URL";
}
echo "</br>";
echo"************************************************";
echo "</br>";
$a=filter_var($Email,FILTER_SANITIZE_EMAIL);
echo "Before Sanitize your Email:".$Email."</br>";
echo "After Sanitize your Email:".$a."</br>";
if(filter_var($a,FILTER_VALIDATE_EMAIL))
{
    echo "DONE";
}
else
{
   echo "we filter this";
}

?>
