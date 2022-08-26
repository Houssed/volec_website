<?php
  if (isset($_POST["submit"])) {
    $username = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    $to = "houssam.ed.jaz1@gmail.com";
    $subject = $message;

    $message = "Name: {$username} Email: {$email} Phone: {$phone}  Message: " . $message;

    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // More headers
    $headers .= 'From: houssam.ed.jaz1@gmail.com';

    $mail = mail($to,$subject,$message,$headers);

    if ($mail) {
      echo "<script>alert('Mail Send.');</script>";
    }else {
      echo "<script>alert('Mail Not Send.');</script>";
    }
  }
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--css link-->
    <link rel="stylesheet" href="../css/contact-style.css">
    <!--icons link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Contact</title>
</head>


<body>
    <div class="header-nav">
        <header>
            <div class="container">
                <div class="social">
                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                </div>
                <div class="contact">
                    <div class="place">
                        <span class="vl"></span>
                        <i class="fa-solid fa-location-dot"></i>
                        <span>Casablanca, Morocco</span>
                    </div>
                    <div class="email">
                        <span class="vl"></span>
                        <i class="fa-solid fa-envelope"></i>
                        <span>houssam.ed.jaz1@gmail.com</span>
                    </div>
                    <div class="phone">
                        <span class="vl"></span>
                        <i class="fa-solid fa-phone"></i>
                        <span>+2126 11 11 36 11</span>
                    </div>
                </div>

            </div>
        </header>
        <nav>
            <div class="container">
                <div class="logo">
                    <img src="/volec.siteweb/img/logo.png" alt="" class="logo" style="height: 65px;">
                </div>
                <ul>
                    <!--<div class="vl"></div>-->
                    <li><a href="../index.html">HOME</a></li>
                    <li><a href="about.html">ABOUT</a></li>
                    <li><a href="services.html">SERVICES</a></li>
                    <li><a href="projects.html">PROJECTS</a></li>
                    <li><a href="contact.html" style="color: greenyellow;">CONTACT</a></li>
                </ul>
            </div>
        </nav>
        <section id="showcase">
            <div class="container">
                <h1>ABOUT</h1>
                <p>HOME <i class="fa-solid fa-angle-right"></i> <span>ABOUT</span></p>

            </div>
        </section>
    </div>
    <div class="contact-us">
        <span class="big-circle"></span>
        <img src="/volec.siteweb/img/shape.png" class="square" alt="" />
        <div class="form">
            <div class="contact-info">
                <h3 class="title">Let's get in touch</h3>
                <p class="text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe
                    dolorum adipisci recusandae praesentium dicta!
                </p>

                <div class="info">
                    <div class="information">
                        <i class="fa-solid fa-map-location-dot"
                            style="color: rgb(112, 177, 13); margin-right: 10px; font-size: 25px;"></i>
                        <p>92 Cherry Drive Uniondale, NY 11553</p>
                    </div>
                    <div class="information">
                        <i class="fa-solid fa-envelope"
                            style="color: rgb(112, 177, 13); margin-right: 10px; font-size: 25px;"></i>
                        <p>lorem@ipsum.com</p>
                    </div>
                    <div class="information">
                        <i class="fa-solid fa-phone"
                            style="color: rgb(112, 177, 13); margin-right: 10px; font-size: 25px;"></i>
                        <p>123-456-789</p>
                    </div>
                </div>

                <div class="social-media">
                    <p>Connect with us :</p>
                    <div class="social-icons">
                        <a href="#">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="contact-form">
                <span class="circle one"></span>
                <span class="circle two"></span>

                <form action="" method="post" autocomplete="off">
                    <h3 class="title">Contact us</h3>
                    <div class="input-container">
                        <input type="text" name="name" class="input" />
                        <label for="">Username</label>
                        <span>Username</span>
                    </div>
                    <div class="input-container">
                        <input type="email" name="email" class="input" />
                        <label for="">Email</label>
                        <span>Email</span>
                    </div>
                    <div class="input-container">
                        <input type="tel" name="phone" class="input" />
                        <label for="">Phone</label>
                        <span>Phone</span>
                    </div>
                    <div class="input-container textarea">
                        <textarea name="message" class="input"></textarea>
                        <label for="">Message</label>
                        <span>Message</span>
                    </div>
                    <input type="submit" name="submit" value="Send" class="btn" />
                </form>
            </div>
        </div>
    </div>
    <footer>
        <div class="main-content">
            <div class="left-box">
                <img src="/volec.siteweb/img/logo.png" alt="Logo for the company" style="height: 75px;" />
                <div class="content">
                    <p style="text-align: left;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam quae,
                        suscipit rem optio
                        cupiditate magni. Amet, consequuntur, saepe distinctio ducimus rerum ullam minima facere est
                        nisi culpa possimus dicta vel.</p>
                    <div class="social">
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="center-box">
                <h2>Link</h2>
                <div class="links" style="text-align: left;">
                    <a href="#">> Company History</a><br />
                    <a href="#">> About Us</a><br />
                    <a href="#">> Contact Us</a><br />
                    <a href="#">> Services</a><br />
                    <a href="#">> Privacy Policy</a><br />
                </div>
            </div>
            <div class="right-box">
                <h2>Contact Us</h2>
                <div class="content">
                    <div class="place" style="text-align: left;">
                        <i class="fa-solid fa-location-dot"></i>
                        <span>bd Ahl Loghlam (Sidi Moumen) , rue 46 groupe Q n° 60 - lot. Salam 2 20450
                            Casablanca - Maroc</span>
                    </div>
                    <div class="phone" style="text-align: left;">
                        <i class="fa-solid fa-phone"></i>
                        <span>+2126 11 11 36 11</span>
                    </div>
                    <div class="email" style="text-align: left;">
                        <i class="fa-solid fa-envelope"></i>
                        <span>houssam.ed.jaz1@gmail.com</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <p>COPYRIGHT © 2022 — VOLEC GROUP., ALL RIGHTS RESERVED.</p>
        </div>

    </footer>

    <script src="/volec.siteweb/js/main.js"></script>
</body>

</html>