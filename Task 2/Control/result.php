<?php
Şname-$_POST["name"];
if($name=="")
{
    echo "please enter a valid name";
}
else
{
echo " your username is ", $_POST["name"];
echo "<br>";

Şage-$_POST["age"];
if($age=="")
{
    echo "please enter your age";
}
else
{
echo " your age is ", $_POST["age"];
echo "<br>";

$desisgnation=$_POST["designation"];
if($desisgnation="")
{
   echo "please select your designation ";
}
else{
   echo "your designation is ",$_POST["designation"];
}
echo "<br>";
Şprelang-$_POST["language"];
if($prelang=="")
{
    echo "please select a language ";
}
else
{
echo " you have selected ", $_POST["language"];
echo "<br>";

Şemail-$_POST["email"];
if($email=="")
{
    echo "please enter your email ";
}
else
{
echo " your email is valid ";
echo "<br>";
$password=$_POST["password"];
if(strlen($password)<5)
{
   echo "please enter a valid password";
}
else{
   echo "your password is valid";
}
echo "<br>";

if(isset($_POST["r1"]))
{
   echo "you have selected ".$_POST["r1"];
}
else{
   echo "you have not selected any radio ";
}
if(isset($_POST["c1"]) )
{
   echo "you have picked Box1";
}
else
   echo "you have not picked Box1";
?>