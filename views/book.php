<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="htpps://unpkg.com/swiper@8/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <title> book </title>
</head>

<body>
    <section class="header">
        <a href="index.php" class="logo"> Travel ✈️</a>
        <nav class="navbar">
            <a href="../index.php"> Home </a>
            <a href="about.php"> About </a>
            <a href="package.php"> Package </a>
            <a href="#"> Book </a>
        </nav>
        <div id="menu-btn" class="fas fa-bars"></div>

    </section>

    <div class="heading" style="background:url(../images/header-bg-3.png) no-repeat">
   <h1>book now</h1>
</div>

<!-- booking section starts  -->

<section class="booking">

   <h1 class="heading-title">book your trip!</h1>

   <form action="book_form.php" method="post" class="book-form">

      <div class="flex">
         <div class="inputBox">
            <span>name :</span>
            <input type="text" placeholder="enter your name" name="name">
         </div>
         <div class="inputBox">
            <span>email :</span>
            <input type="email" placeholder="enter your email" name="email">
         </div>
         <div class="inputBox">
            <span>phone :</span>
            <input type="number" placeholder="enter your number" name="phone">
         </div>
         <div class="inputBox">
            <span>address :</span>
            <input type="text" placeholder="enter your address" name="address">
         </div>
         <div class="inputBox">
            <span>where to :</span>
            <input type="text" placeholder="place you want to visit" name="location">
         </div>
         <div class="inputBox">
            <span>how many :</span>
            <input type="number" placeholder="number of guests" name="guests">
         </div>
         <div class="inputBox">
            <span>arrivals :</span>
            <input type="date" name="arrivals">
         </div>
         <div class="inputBox">
            <span>leaving :</span>
            <input type="date" name="leaving">
         </div>
      </div>

      <input type="submit" value="submit" class="btn" name="send">

   </form>

</section>

    

    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>quick links</h3>
                <a href="index.php"> <i class="fas fa-angle-right"></i>Home </a>
                <a href="views/about.php"> <i class="fas fa-angle-right"></i>About </a>
                <a href="views/package.php"> <i class="fas fa-angle-right"></i>Package </a>
                <a href="views/book.php"> <i class="fas fa-angle-right"></i>Book </a>
            </div>
            <div class="box">
                <h3>extra links</h3>
                <a href="#"> <i class="fas fa-angle-right"></i> ask questions </a>
                <a href="#"> <i class="fas fa-angle-right"></i> about us </a>
                <a href="#"> <i class="fas fa-angle-right"></i> privacy policy </a>
                <a href="#"> <i class="fas fa-angle-right"></i> terms of use </a>
            </div>
            <div class="box">
                <h3> contact info</h3>
                <a href="#"> <i class="fas fa-phone"></i> +855 67-340-156 </a>
                <a href="#"> <i class="fas fa-phone"></i> +855 96-47-91-338</a>
                <a href="#"> <i class="fas fa-envelope"></i> netse0962@gmail.com</a>
                <a href="#"> <i class="fas fa-envelope"></i> netcutie24@gmail.com</a>
                <a href="#"> <i class="fas fa-map"></i> Phnom Penh, Cambodia - 6A : 271</a>
            </div>

            <div class="box">
                <h3>Follow us</h3>
                <a href="#"> <i class="fas fa-facebook-f"></i> Facebook </a>
                <a href="#"> <i class="fas fa-twitter"></i> Twitter </a>
                <a href="#"> <i class="fas fa-instagram"></i> Instagram </a>
                <a href="#"> <i class="fas fa-linkedin"></i> Linkin </a>
            </div>

            <div class="credit">
                created by <span>mr.net se baby developer </span> | all right reserved</div>
        </div>
    </section>


</body>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<script src="../js/script.js"></script>

</html>