<?php

$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $date = $_POST['date'];

   $insert = mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, date) VALUES('$name','$email','$number','$date')") or die('query failed');

   if($insert){
      $message[] = 'appointment made successfully!';
   }else{
      $message[] = 'appointment failed';
   }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- Fontaweasome CSS link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- custom css link -->
    <link rel="stylesheet" href="css/style.css">
    <title>Dentist Website Design</title>
</head>

<body>

    <!-- heaader section start -->
    <header class="header fixed-top">
        <div class="container">
            <div class="navbar align-items-center justify-content-between">
                <a href="#home" class="logo">dental<span>elisa.</span></a>
                <nav class="nav">
                    <a href="#home">home</a>
                    <a href="#about">about</a>
                    <a href="#services">services</a>
                    <a href="#reviews">reviews</a>
                    <a href="#contact">contact</a>
                </nav>
                <a href="#contact" class="link-btn">make appointment</a>

                <div id="menu-btn" class="fas fa-bars"></div>
            </div>
        </div>
    </header>
    <!-- heaader section end -->

    <!-- home section start -->

    <section class="home" id="home">
        <div class="container">
            <div class="row min-vh-100 align-items-center">
                <div class="content text-center text-md-start">
                    <h3>let us brighten your smile</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Harum eligendi perspiciatis optio
                        pariatur minima officia.</p>
                    <a href="#contact" class="link-btn">make appointment</a>
                </div>
            </div>
        </div>
    </section>
    <!-- home section end -->

    <!-- about section start  -->

    <section class="about" id="about">

        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 image">
                    <img src="images/about-img.jpg" class="w-100 mb-5 mb-md-0" alt="">
                </div>

                <div class="col-md-6 content">
                    <span>about us</span>
                    <h3>True Healtcare For Your Famiy</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis veniam ratione beatae
                        obcaecati aliquam quidem ea error, voluptatum quia iure quo fuga facere ab delectus, dolorum
                        nisi iusto eum doloremque!</p>
                    <a href="#contact" class="link-btn">Make Appintment</a>
                </div>
            </div>
        </div>
    </section>

    <!-- about section end  -->

    <!-- services section start -->
    <section class="services" id="services">
        <h1 class="heading">our services</h1>
        <div class="box-container container">
            <div class="box">
            <i class="fa-solid fa-tooth"></i>
                <h3>Alignment specialist</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, assumenda.</p>
            </div>
            <div class="box">
            <i class="fa-solid fa-scissors"></i>
                <h3>Cosmetic dentistry</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, assumenda.</p>
            </div>
            <div class="box">
            <i class="fa-solid fa-teeth"></i>
                <h3>Oral Hygiene Experts</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, assumenda.</p>
            </div>
            <div class="box">
            <i class="fa-solid fa-suitcase-medical"></i>
                <h3>Root Canal Specialist</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, assumenda.</p>
            </div>
            <div class="box">
            <i class="fa-solid fa-face-smile"></i>
                            <h3>Live Dental Advisory</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, assumenda.</p>
            </div>
            <div class="box">
            <i class="fa-solid fa-face-grimace"></i>
                <h3>Cavity Inspection</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, assumenda.</p>
            </div>
        </div>
    </section>
    <!-- services section end -->

    <!-- process section start -->

    <section class="process">

        <h1 class="heading">work process</h1>
        <div class="box-container container">
            <div class="box">
                <img src="images/process-1.png" alt="">
                <h3>Cosmetic dentistry</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aperiam, esse!</p>
            </div>
            <div class="box">
                <img src="images/process-2.png" alt="">
                <h3>Pediatic dentistry</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aperiam, esse!</p>
            </div>
            <div class="box">
                <img src="images/process-3.png" alt="">
                <h3>Dental Implants</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aperiam, esse!</p>
            </div>
        </div>
    </section>
    <!-- process section end -->

    <!-- reviews section start -->
    <section class="reviews" id="reviews">
        <h1 class="heading">satisfied clients</h1>
        <div class="box-container container">
            <div class="box">
                <img src="images/pic-1.png" alt="">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid quasi magnam ad non hic, sequi sint.
                    Ad accusantium vero tempora.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>john deo</h3>
                <span>satisfied client</span>
            </div>
            <div class="box">
                <img src="images/pic-2.png" alt="">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid quasi magnam ad non hic, sequi sint.
                    Ad accusantium vero tempora.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>john deo</h3>
                <span>satisfied client</span>
            </div>
            <div class="box">
                <img src="images/pic-3.png" alt="">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid quasi magnam ad non hic, sequi sint.
                    Ad accusantium vero tempora.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>john deo</h3>
                <span>satisfied client</span>
            </div>
        </div>
    </section>

    <!-- reviews section end -->

    <!-- contact section start -->

    <section class="contact" id="section">
        <h1 class="heading">make appointment</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <?php
                if(isset($message)){
                    foreach($message as $message){
                        echo '<p class="message">' .$message. '</p>';
                    }
                };
            ?>
            <span>your name: </span>
            <input type="text" name="name" placeholder="enter your name" class="box" required>
            <span>your email: </span>
            <input type="email" name="email" placeholder="enter your email" class="box" required>
            <span>your number: </span>
            <input type="number" name="number" placeholder="enter your number" class="box">
            <span>appointment date: </span>
            <input type="datetime-local" name="date" class="box" required>
            <input type="submit" value="make appintment" name="submit" class="link-btn">
        </form>
    </section>
    <!-- contact section end -->

    <!-- footer section start -->

<section class="footer">
    <div class="box-container container">
        <div class="box">
            <i class="fas fa-phone"></i>
            <h3>phone number</h3>
            <p>+4917684468985</p>
        </div>
        <div class="box">
            <i class="fas fa-map-marker-alt"></i>
            <h3>our address</h3>
            <p>birkenfeld Pforzheim 75217</p>
        </div>
        <div class="box">
            <i class="fas fa-clock"></i>
            <h3>opening hours</h3>
            <p>00:07am to 10:00pm</p>
        </div>
        <div class="box">
            <i class="fas fa-envelope"></i>
            <h3>email address</h3>
            <p>erkan.akbas@hotmail.com.tr</p>
        </div>
    </div>

    <div class="credit"> &copy; copyright @ <?php echo date('Y') ?> <span><a href="http://www.erkanakbas.com.tr" target="_blank" >ea design</a></span> </div>
</section>            
    <!-- footer section end -->


    <!-- Bootstrap JS Link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <!-- Custom JS link -->
    <script src="js/script.js"></script>
</body>

</html>