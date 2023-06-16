<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Ghulam Murtaza - Web developer</title>
    <link rel="stylesheet" href="/styles.css">
    <link rel="icon" type="image/png" href="/images/favicon.png" />

</head>

<body>

    <div class="container">
        <div class="sidebar sidebarGo">

            <nav>
                <ul>
                    <li><a href="/index.html">Home</a></li>
                    <li><a href="/pages/intro.html">My Intro</a></li>
                    <li><a href="/pages/services.html">Services</a></li>
                    <li><a href="/pages/blog.html">Blog</a></li>
                    <li><a href="/pages/contact.html">Contact Me</a></li>
                </ul>
            </nav>
        </div>
        <div class="main">
            <div class="hamburger">
                <img src="/images/ham1.png" alt="hamburger" class="ham">
                <img src="/images/cross.png" alt="cross" class="cross">
            </div>

            <div class="contactform">

                <h1>Contact form for work/general enquiries</h1>
                <form>
                    <div class="form-group">
                        <label for="clintname">Name</label>
                        <input type="text" name="nm" class="form-control" id="clientname" aria-describedby="emailHelp"
                            placeholder="Enter Name">

                    </div>
                    <div class="form-group">
                        <label for="clientemail">Email address</label>
                        <input type="email" name="email" class="form-control" id="clientemail"
                            aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                            else.</small>
                    </div>
                    <div class="form-group">
                        <label for="clientphon">Phone</label>
                        <input type="password" name="phone" class="form-control" id="clientphon" placeholder="Phone">
                    </div>
                    <div class="form-group">
                        <label for="clietenquery">Enquiry</label>
                        <input type="text" name="enquiry" class="form-control" id="clientenquery"
                            aria-describedby="emailHelp" placeholder="Enter enquiries">

                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="work" class="form-check-input" id="isclient">
                        <label class="form-check-label" for="isclient">Contact for work</label>
                    </div>
                    <button type="submit" name="register" class="btn btn-sm">Submit</button>
                </form>

            </div>
        </div>
    </div>
    <script src="/script.js"></script>

</body>

</html>
<?php

$servername = "localhost";
$username = "id20855280_root";
$password = "Gm$1091987";
$database = "id20855280_portfoliodb";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

if(isset($_POST['register'])){
    $name = $_POST['mname'];
    echo $name;
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $enquiry = $_POST['enquiry'];
    $mywork = $_Post['work'];
    $allwork = implode($mywork)


    
    $query = "INSERT INTO enqueryform ('NAME', 'email','Phone', 'Enquery') VALUES ('$name','$email','$phone','$enquiry')";
    $data = mysqli_query($conn, $query);
    if($data){
        echo "Thanks for contacting us we will contacting you soon!";
    }else{
        echo "Failed";
    };
    
};

?>