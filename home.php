<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">



</head>
<style>
    .header .logo-img {
         width: 13rem; /* Adjust the width as needed */
         height: 7rem; /* Adjust the height as needed */
      }
      .hot-deals {
         background-color: #f2f2f2;
         padding: 30px 0;
         text-align: center;
      }

      .hot-deals h2 {
         font-size: 32px;
         color: #333;
         margin-bottom: 20px;
      }

      .hot-deals-container {
         display: flex;
         justify-content: center;
         gap: 30px;
         margin-top: 30px;
      }

      .deal {
         max-width: 300px;
      }

      .deal img {
         width: 100%;
         height: auto;
         border-radius: 5px;
         margin-bottom: 15px;
      }

      .deal h3 {
         font-size: 24px;
         color: #333;
         margin-bottom: 10px;
      }

      .deal p {
         font-size: 14px;
         color: #777;
         margin-bottom: 20px;
      }

      .btn2 {
         display: inline-block;
         background-color: #ff5555;
         color: #fff;
         text-decoration: none;
         border-radius: 4px;
         transition: background-color 0.3s ease;
         margin-top: 1rem;
         font-size: 1.7rem;
         padding:1rem 3rem;
      }

      .btn2:hover {
         background-color: #ff3333;
      }

</style>
<body>
   
<!-- header section starts  -->

<section class="header">
   <a href="home.php" class="logo">
      <img src="images/logopic.jpg" alt="Logo" class="logo-img">
   </a>

   <nav class="navbar">
      <a href="home.php">home</a>
      <a href="about.php">about</a>
      <a href="package.php">package</a>
      <a href="book.php">book</a>
      <a href="customize.php">customize trip</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>
</section>


<!-- header section ends -->

<!-- home section starts  -->

<section class="home">

   <div class="swiper home-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide" style="background:url(images/newpic2.jpg) no-repeat">
            <div class="content">
               <span>explore, discover, travel</span>
               <h3>travel the world with Zetoon</h3>
               <a href="package.php" class="btn">discover more</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/home-slide-2.jpg) no-repeat">
            <div class="content">
               <span>explore, discover, travel</span>
               <h3>discover the new places</h3>
               <a href="package.php" class="btn">discover more</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/home-slide-3.jpg) no-repeat">
            <div class="content">
               <span>explore, discover, travel</span>
               <h3>make your tour worthwhile</h3>
               <a href="package.php" class="btn">discover more</a>
            </div>
         </div>
         
      </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>

   </div>

</section>

<!-- home section ends -->

<!-- services section starts  -->

<section class="services">

   <h1 class="heading-title"> our services </h1>

   <div class="box-container">

      <div class="box">
         <img src="images/icon-1.png" alt="">
         <h3>adventure</h3>
      </div>

      <div class="box">
         <img src="images/icon-2.png" alt="">
         <h3>tour guide</h3>
      </div>

      <div class="box">
         <img src="images/icon-3.png" alt="">
         <h3>trekking</h3>
      </div>

      <div class="box">
         <img src="images/icon-4.png" alt="">
         <h3>camp fire</h3>
      </div>

      <div class="box">
         <img src="images/icon-5.png" alt="">
         <h3>off road</h3>
      </div>

      <div class="box">
         <img src="images/icon-6.png" alt="">
         <h3>camping</h3>
      </div>

   </div>

</section>

<!-- services section ends -->

<section class="hot-deals">
   <h2>Hot Deals</h2>
   <div class="hot-deals-container">
      <div class="deal">
         <img src="images/deal1.jpg" alt="Deal 1">
         <h3>Deal 1</h3>
         <p>For online flight bookings only. Till 30th June, 2023. On Selected Domestic and International Flight Bookings</p>
         <a href="deal1.php" class="btn2">Learn More</a>
      </div>

      <!-- Add similar deal elements for other deals-->
      
      <div class="deal">
         <img src="images/deal2.jpg" alt="Deal 2">
         <h3>Deal 2</h3>
         <p>On base fare, for Bank Alfalah, Standard Chartered, Bank of Punjab, Faysal Bank, Allied Bank, Meezan Bank cards, JS Bank</p>
         <a href="deal2.php" class="btn2">Learn More</a>
      </div>
      <div class="deal">
         <img src="images/deal3.jpg" alt="Deal 3">
         <h3>Deal 3</h3>
         <p>For Bank Alfalah, Standard Chartered, Bank of Punjab, Faysal Bank, Allied Bank, Meezan Bank, JS Bank cards</p>
         <a href="deal3.php" class="btn2">Learn More</a>
      </div>
   </div> 
</section>





<!-- home about section starts  -->

<section class="home-about">

   <div class="image">
      <img src="images/newpic6.jpg" alt="">
   </div>

   <div class="content">
      <h3>about us</h3>
      <p>Travel and Tours is the Largest and most reliable tourism company in Pakistan with lots of satisfied clients and we have arranged almost over 500 tours successfully. We offer tour to Hunza Valley, Naltar Valley, Swat, Naran / Kaghan, Khunjrab Pass, Fairy Meadows, and many more incredible places around Pakistan. We arrange Family tours, Co-oporate tours, Group tours and Honeymoon tours for our valuable clients. With large numbers of fans, we became the largest tourism company in Pakistan. We also arrange tours for foreigners who came to Pakistan and Explore nature’s beauty at it’s best. So, pack your bags and visit your dream places in Pakistan.</p>
      <a href="about.php" class="btn">read more</a>
   </div>

</section>

<!-- home about section ends -->

<!-- home packages section starts  -->

<section class="home-packages">

   <h1 class="heading-title"> our packages </h1>

   <div class="box-container">

      <div class="box">
         <div class="image">
            <img src="images/newpic4.jpg" alt="">
         </div>
         <div class="content">
            <h3>HAJJ PACKAGE</h3>
            <p>18 Days / 17 Nights<br>
                MAKKAH: Movenpic Hajar Tower 5 Star 50 Meters<br>
                MADINA: Anwar Al Madinah Movenpic Hotel 50 Meters<br>
                (Include Visa, Return Tickets, Transport, Accommodation, Breakfasts, Lunches, Dinners and Tour Guide)<br>
                <br><b>1500000 PKR</b> </p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/newpic8.jpg" alt="">
         </div>
         <div class="content">
            <h3>UMRAH PACKAGE</h3>
            <p> 10 Days / 9 Nights<br>
                MAKKAH: Movenpic Hajar Tower 5 Star 50 Meters<br>
                MADINA: Anwar Al Madinah Movenpic Hotel 50 Meters<br>
                (Include Visa, Return Tickets, Transport, Accommodation, Breakfasts, Lunches, Dinners and Tour Guide)<br>
                <br><b>1000000 PKR</b></p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>
      
      <div class="box">
         <div class="image">
            <img src="images/newpic10.jpg" alt="">
         </div>
         <div class="content">
         <h3>UMRAH RAMADAN PACKAGE (50% Discount)</h3>
           <p><b> 10 Days / 9 Nights</b><br><br>
               MAKKAH: Movenpic Hajar Tower 5 Star.<br>
               MADINA: Anwar Al Madinah Movenpic Hotel.<br>
               (Include Visa, Return Tickets, Transport, Accommodation, Breakfasts, Lunches, Dinners and Tour Guide)<br>
               <br><b>500000 PKR</b> </p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

   </div>

   <div class="load-more"> <a href="package.php" class="btn">load more</a> </div>

</section>

<!-- home packages section ends -->

<!-- home offer section starts  -->

<section class="home-offer">
   <div class="content">
      <h3>upto 50% off</h3>
      <p>We offer 50% discounts on Islamic events like Ramadan-ul-Mubarak, Eid-ul-Adha, Eid-ul-Fitr, Muharam, Rabi-ul-Awal</p>
      <a href="book.php" class="btn">book now</a>
   </div>
</section>

<!-- home offer section ends -->


<!-- footer section starts  -->

<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
      </div>

      <div class="box">
         <h3>extra links</h3>
         <a href="refund.php"> <i class="fas fa-angle-right"></i> Refund Policy</a>
         <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
         <a href="privacy.php"> <i class="fas fa-angle-right"></i> privacy policy</a>
         <a href="terms.php"> <i class="fas fa-angle-right"></i> terms of use</a>
      </div>

      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +923121298454 </a>
         <a href="#"> <i class="fas fa-phone"></i> +923159208768 </a>
         <a href="#"> <i class="fas fa-envelope"></i> ammadali7777@gmail.com </a>
         <a href="#"> <i class="fas fa-map"></i> karachi, pakistan - 75120 </a>
      </div>

      <div class="box">
         <h3>follow us</h3>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
      </div>

   </div>

   <div class="credit"> created by <span>Ammad , Yumna, Adeena & Amit</span> | all rights reserved! </div>

</section>

<!-- footer section ends -->


<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>