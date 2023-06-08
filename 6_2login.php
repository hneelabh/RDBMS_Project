<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Project";
   
$con = new mysqli($servername,$username,$password,$dbname);

$regno= $_POST['register_number'];
$password = $_POST['password'];

// $str_password = password_hash($password,PASSWORD_BCRYPT);

    if($con->connect_error){
        die("Failed to connect :" .$con->connect_error);
    }

    else{
        $stmt=$con->prepare("select *  from info where regno = ?");
        $stmt->bind_param("i",$regno);
        $stmt->execute();
        $stmt_result=$stmt->get_result();

        if( $stmt_result->num_rows>0){
            $data=$stmt_result->fetch_assoc();
            if( $data['password']===$password){
              header("location: 6_3register.php");
            }
        }

        else{
           echo '<script>
           alert("Entered credentails are incorrect!");
            window.location="../login/6_2login.php";
           </script>';
         }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | CUSAT</title>
    <link rel="stylesheet" href="6_2login.css">
</head>
<body>

    <!-- <script src="6_2login.js"></script> -->

    <header id="header" >
        <img src="https://e7.pngegg.com/pngimages/451/785/png-clipart-school-of-engineering-cusat-cochin-university-of-science-and-technology-thrikkakkara-bachelor-of-technology-test-science-and-technology-text-logo.png" height="100px" width="100px" align="left" alt="logo">
        <img src="https://e7.pngegg.com/pngimages/451/785/png-clipart-school-of-engineering-cusat-cochin-university-of-science-and-technology-thrikkakkara-bachelor-of-technology-test-science-and-technology-text-logo.png" height="100px" width="100px" align="right" alt="logo">
        <h1>STUDENT ELECTIONS</h1>
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

        <div class="container">
            <form class="login-form" action="login.php" method="post" >
                <h2><u>LOGIN</u></h2>
                <br>
                <label for="register_number">Register Number:</label>
                <input type="number" id="register_number" name="register_number" required>
    
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
    
                <button type="submit">Login</button>
                <p>New user ? <a href = "phpl/partials/registration.php">Register Here</a></p>
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
