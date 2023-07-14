<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="./Registration.css">
</head>
<body>
    <?php
    require_once("../connection.php")
    ?>
    
    <div class="container">
        <form action="./insert.php" method="post">
        <h1>Registration Form</h1>
            <label for="name">Full Name:</label>
            <input type="text" id="name" name="name" ><br><br>

            <label for="name">User Name:</label>
            <input type="text" id="name" name="username" ><br><br>

            <label type="text">DOB:</label>
            <input type="date"><br><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" ><br><br>

            <label for="Mobile">Mobile: </label>
            <input type="Mobile" id="Mobile" value="+91" name="mobilenumber" >

            <p> select Gender:</p>
            
            <input type="radio" name="gender" value="male" id="male"/>male
        
            <input type="radio" name="gender" value="female" id="female"/>female
            <input type="radio" name="gender" value="unknow" id="unknow"/>unknow
            <br><br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder=" Enter password" required ><br>
             <br>
            <label for="password"> Confirm Password:</label>
            <input type="password" id="password" placeholder=" Confirm password" required><br><br>
            <input type="radio">
             <label class="label" for="">Remember Me</label><br><br>
           <button type="submit">Register</button>
          
            
        </form>
    </div>
</body>
</html>
