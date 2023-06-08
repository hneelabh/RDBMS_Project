<?php

 if(isset($_POST['submit'])){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "election";

    // Create a database connection
    $conn= mysqli_connect($server, $username, $password, $election);

    // Check for connection success
    if(!$conn){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";

    // Collect post variables
   // $register_number= $_POST[`register_number`];
    $name = $_POST['name'];
    $email = $_POST['email'];
    // $semester = $_POST['semester'];
    // $department= $_POST[`department`];
    $password = $_POST['password'];
    //$confirm=$_POST[`confirm`];
   
    $sql = "INSERT INTO election ( `name`, `email`, `password``)
    VALUES ( '$name', '$email','$password');";
   
    if($conn->query($sql)== true){
                echo "Successfully insert";
            }
            else{
                echo "Error:  $sql <br> $conn->error";
            }
        $conn->close();}

?>

<!DOCTYPE html>
    <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | CUSAT</title>
    <link rel="stylesheet" href="6_1register.css">
</head>
<body>

<header id="header" >
    <img src="https://e7.pngegg.com/pngimages/451/785/png-clipart-school-of-engineering-cusat-cochin-university-of-science-and-technology-thrikkakkara-bachelor-of-technology-test-science-and-technology-text-logo.png" height="100px" width="100px" align="left" alt="logo">
    <img src="https://e7.pngegg.com/pngimages/451/785/png-clipart-school-of-engineering-cusat-cochin-university-of-science-and-technology-thrikkakkara-bachelor-of-technology-test-science-and-technology-text-logo.png" height="100px" width="100px" align="right" alt="logo">    
    <h1>ELECTION REGISTRATION </h1>
    <h2>SCHOOL OF ENGINEERING</h2>
    <h3>(COCHIN UNIVERSITY OF SCIENCE AND TECHNOLOGY)</h3>
</header>
    
<nav id="options" >
    <a href="https://admissions.cusat.ac.in/" span class="Admissions">Admissions  </a>
    <a href="https://estudents.cusat.ac.in/">Student Login</a>
    <a href="https://cusat.ac.in/news.php">Developments</a>
    <a href="https://cusat.ac.in/academics">Academics</a>
    <a href="https://cusat.ac.in/faculty/">Faculties</a>
    <a href="#" span class="Archieves" >Archieves</a>
</nav>
<script src="6_1register.js"></script>
<div class="container">
    <form name="myForm" id="registration-form" class="registration-form"  action= "6_1register.php" method="post">
        <h1><u>REGISTER FOR ELECTIONS</u></h1>
            <!-- <label for="register_number">Register Number:</label>
            <input type="number" id="register_number" name="register_number" required> -->
    
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
    
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
    
            <label for="Semester">Semester:</label>
            <select id="semester" name="semester" required>
                <option value="">--Select your Semester--</option>
                <option value="1">1st Semester</option>
                <option value="2">2nd Semester</option>
                <option value="3">3rd Semester</option>
                <option value="4">4th Semester</option>
                <option value="5">5th Semester</option>
                <option value="6">6th Semester</option>
                <option value="7">7th Semester</option>
                <option value="8">8th Semester</option>
            </select>
        
            <label for="Department">Department:</label>
            <select id="department" name="department" required>
                <option value="">--Select your Department--</option>
                <option value="CS">Computer Science</option>
                <option value="IT">Information Technology</option>
                <option value="EC">Electronic Communication</option>
                <option value="SF">Safety And Fire</option>
                <option value="ME">Mechanical Engineering</option>
                <option value="CE">Civil Engineering</option>
                <option value="EE">Electrical Engineering</option>
            </select>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>    
    
            <!-- <label for="confirm-password">Confirm Password:</label>
            <input type="password" id="confirm_password" name="confirm_password" class="formerror" required> -->
            <button type="submit" id="submit" value="submit" name="submit" >Register</button>
    </form>
    
</div>

</body>

<footer id="footer" >
    <a href="https://cusat.ac.in/campus-life" span class="Activities" >Campus Life</a>
    <a href="https://recruit.cusat.ac.in/">Recruitment</a>
    <a href="https://cusat.ac.in/contact">Contact Us</a>
    <a href="#" span class="last" > &copy;2023 | CUSAT</a>
</footer>
</html>
