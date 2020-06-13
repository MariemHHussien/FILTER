<?php

if(isset($_POST["button"]))
{$age=$_POST['age'];
$pass=$_POST['pass'];
$phone=$_POST['phone'];
$facebook=$_POST['facebook'];
$Email=$_POST['Email'];}
$AFTER=filter_var($age,FILTER_SANITIZE_NUMBER_INT);
echo "Before Sanitize:".$age."</br>";
echo "After Sanitize :".$AFTER."</br>";
if(filter_var($AFTER,FILTER_VALIDATE_INT))
{
    echo "DONE";
}
else
{echo "we filter this";
}
echo "</br>";
echo"*********************";
echo "</br>";
$a=filter_var($pass,FILTER_SANITIZE_NUMBER_INT);
echo "Before Sanitize:".$pass."</br>";
echo "After Sanitize :".$a."</br>";
if(filter_var($a,FILTER_VALIDATE_INT))
{
    echo "DONE";
}
else
{
   echo "we filter this";
}
echo "</br>";
echo"*********************";
echo "</br>";
$after=filter_var($phone,FILTER_SANITIZE_NUMBER_INT);
echo "Before Sanitize:".$phone."</br>";
echo "After Sanitize :".$after."</br>";
if(filter_var($after,FILTER_VALIDATE_INT))
{
    echo "DONE";
}
else
{
    echo "we filter this";
}
echo "</br>";
echo"*********************";
echo "</br>";
$after=filter_var($facebook,FILTER_SANITIZE_URL);
echo "Before Sanitize:".$facebook."</br>";
echo "After Sanitize :".$after."</br>";
if(filter_var($after,FILTER_VALIDATE_URL))
{
    echo "DONE";
}
else
{
    echo "This is not URL";
}
echo "</br>";
echo"*********************";
echo "</br>";
$a=filter_var($Email,FILTER_SANITIZE_EMAIL);
echo "Before Sanitize:".$Email."</br>";
echo "After Sanitize :".$a."</br>";
if(filter_var($a,FILTER_VALIDATE_EMAIL))
{
    echo "DONE";
}
else
{
   echo "we filter this";
}

?>