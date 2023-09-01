<?php
include('connect.php');


if (isset($_POST['submit'])) {
   $name=$_POST['name'];
   $phone_number=$_POST['phone_number'];
   $email=$_POST['email'];
   $location=$_POST['location'];
   $message=$_POST['message'];

   $sql="INSERT INTO users(name,phone_number,email,location,message) VALUES('$name','$phone_number','$email','$location','$message')";

   $result=mysqli_query($connection ,$sql);
   if (!$result) {
    echo"connection failed please try again";
   }else{
    echo"Connection success";
   }

}





?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hire me now</title>
   <style>
    body{
        font-family: 'Rubik', sans-serif;
        justify-content: center;
        align-items: center;
        display: flex;
        flex-direction: column;
        background: #f5f5f5ff;
    }
        form{
        background: #fff;
        min-height: 70vh;
        border: #333;
        border-radius: 8px;
        }
      input,textarea{
        text-decoration: none;
        align-items: none;
        width: 100%;
   padding: 10px;
  margin-bottom: 8px;
  border: 1px solid #ccc;
   border-radius: 4px;
   box-sizing: border-box;
}
textarea{
    background: #333;
}

    
   </style>
</head>
<body>
    <h1>You may hire me now</h1>
    <div class="cointainer">
    <form action="hire.php" method="post">
        <label for="name"> name</label>
     <input type="text" name="name" placeholder="Enter your name" required> <br><br>
     <label for="phone_number">phone_number</label>
     <input type="tel" name="phone_number" placeholder="Enter your contact" required><br><br>
     <label for="email">email</label>
     <input type="email" name="email" placeholder="Enter your email" required><br><br>
     <label for="location"> location</label>
     <input type="text" name="location" placeholder="Enter yor location " required><br><br>
     <label for="message">message</label>
     <textarea name="message"placeholder="Send me any message" id="" cols="30" rows="10"></textarea required>
     <input type="submit" name="submit" value="Hire me">
     </form>
     </div>
</body>
</html>