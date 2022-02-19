<html>
<body>
<h2>Registration Form </h2>
<hr>
<form action="Control/result.php" method="post">
 <table>
 <tr>
   Name:   
   <input type="text" name=  "name " placeholder="">
   <br>
   Age:   
   <input type="age" name=  " age " placeholder="">
   <br>
   
   Designation :
   <input type="radio" name="designation"> Junior Programmer 
I<input type="radio" name="designation"> Senior Programmer
   <input type="radio" name="designation">  Project Lead
   <br>
    Preferred language :
   <input type="radio" name="language"> Java 
I<input type="radio" name="language"> PHP
   <input type="radio" name="language">  C++
   <br>
  Email :   
   <input type="text" name=  "email " placeholder="">
   <br>
    Password :   
   <input type="text" name=  " Password " placeholder="">
   <br>
   Please Choose file :
        <input type="submit" name="submit" value="Choose File"><br>
   <input type="submit" name ="submit" value="Insert">
     <input type="reset" name ="reset" value="clear">
 </table>    
</form>
</body>
</html>