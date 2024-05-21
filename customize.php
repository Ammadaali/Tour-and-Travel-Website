<!DOCTYPE html>
<html lang="en">
<head>

   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>customize</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

<style>

.heading{
   padding-bottom:30rem;
}

.customizing .customize-form{
   padding:2rem;
   background: var(--light-bg);
}

.customizing .customize-form .flex{
   display: flex;
   flex-wrap: wrap;
   gap:2rem;
}

.customizing .customize-form .flex .inputBox{
   flex:1 1 41rem;
}

.customizing .customize-form .flex .inputBox input{
   width: 100%;
   padding:1.2rem 1.4rem;
   font-size: 1.6rem;
   color:var(--light-black);
   text-transform: none;
   margin-top: 1.5rem;
   border:var(--border);
}

.customizing .customize-form .flex .inputBox input:focus{
   background: var(--light-black);
   color:var(--white);
}

.customizing .customize-form .flex .inputBox input:focus::placeholder{
   color:var(--light-white);
}

.customizing .customize-form .flex .inputBox span{
   font-size: 1.5rem;
   color:var(--light-black);
}

.customizing .customize-form .btn{
   margin-top: 2rem;
}



/* Customize the label (the container) */
.container {
  display: block;
  position: relative;
  padding-left: 30px;
  margin-bottom: 10px;
  cursor: pointer;
  font-size: 15px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default radio button */
.container input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
  height: 0;
  width: 0;
}

/* Create a custom radio button */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #eee;
  border-radius: 50%;
}

/* On mouse-over, add a grey background color */
.container:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the radio button is checked, add a blue background */
.container input:checked ~ .checkmark {
  background-color: #2196F3;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the indicator (dot/circle) when checked */
.container input:checked ~ .checkmark:after {
  display: block;
}

/* Style the indicator (dot/circle) */
.container .checkmark:after {
  top: 9px;
  left: 9px;
  width: 8px;
  height: 8px;
  border-radius: 50%;
  background: white;
}

.req{
   height: 8rem;
   width: 100%;
   padding:1.2rem 1.4rem;
   font-size: 1.6rem;
   color:var(--light-black);
   text-transform: none;
   margin-top: 1.5rem;
   border:var(--border);
}

.header .logo-img {
   width: 13rem; /* Adjust the width as needed */
   height: 7rem; /* Adjust the height as needed */
}










.pen {
  width: 50%;
  margin: 0;
  padding-left: 5px;
  border-radius: 8px;
  border: --light-black;
}

/* Styling the forma */
.pen forma {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
}

/* Styling the label */
.pen label {
  font-size: 1.5rem;
  color: var(--light-black);
  margin-bottom: 0;
}

/* Styling the select dropdown */
.pen select {
  width: 100%;
  padding: 1.2rem 1.4rem;
  font-size: 1.6rem;
  color: var(--light-black);
  text-transform: none;
  margin-top: 1.5rem;
  border: 1px solid var(--border);
}

/* Styling the city container */
.pen #citycontainer {
  margin-top: 10px;
}

/* Styling the city checkboxes */
.pen #citycontainer div {
  display: flex;
  align-items: center;
  margin-bottom: 5px;
}

/* Styling the city checkbox label */
.pen #citycontainer label {
  margin-left: 5px;
}

/* Hide the city container by default */
.hide {
  display: none;
}

.pen #calculate-btn {
  background-color: green;
  color: white;
  border: none;
  padding: 10px 20px;
  font-size: 1.6rem;
  margin-top: 1.5rem;
  border-radius: 4px;
  cursor: pointer;
}
.pen #total-expense {
  font-size: 2rem;
  margin-top: 1rem;
}

 
</style>

</head>

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

<div class="heading" style="background:url(images/gozayan1.png) no-repeat">
   <!--*<h1>plan now</h1>-->
</div>








<!-- customizing section starts  -->

<section class="customizing">

   <h1 class="heading-title">customize your trip!</h1>

   <form id="myForm" action="customize_form.php" method="post" class="customize-form">

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
            <span>Persons :</span>
            <input type="number" placeholder="number of guests" name="guests">
         </div>



         <div class="pen">
            <forma>
               <label for="country">Select Country:</label>
               <select id="country" onchange="showCities()" name="country">
                  <option value="">Select</option>
                  <option value="pakistan">Pakistan</option>
                  <option value="india">India</option>
                  <option value="switzerland">Switzerland</option>
               </select>

               <div id="citycontainer" class="hide" name="citycontainer">
                  <label>Select Cities:</label>
                  <div id="city-options" name="city-options"></div>
               </div>

               <label for="num-days">Number of Days:</label>
               <input type="number" id="num-days" name="num-days" min="1">

               <label for="num-nights">Number of Nights:</label>
               <input type="number" id="num-nights" name="num-nights" min="0">

               <button id="calculate-btn" type="button" onclick="calculateTotalExpense()">Calculate Total Expense</button>

               <div id="total-expense"></div>
               <input type="hidden" id="hidden-total-expense" name="total-expense">
            </forma>
         </div>





         
         <div class="inputBox">
            <span>arrivals :</span>
            <input type="date" name="arrivals">
         </div>


         <div class="inputBox">
            <span>travel standard :</span><br>
            <br><label class="container">economy
            <input type="radio" name="standard" checked="checked" value="economy">
            <span class="checkmark"></span>
            </label>

            <label class="container">business
            <input type="radio" name="standard" checked="checked" value="business">
            <span class="checkmark"></span>
            </label>

            
            <label class="container">not decided yet
            <input type="radio" name="standard" checked="checked" value="business">
            <span class="checkmark"></span>
            </label>
        
         </div>
         
         
         <div class="inputBox">
            <span>Additional requirements :</span>
            <textarea id="requirements" style="resize: none; overflow-y: scroll; height: 100px;" wrap="soft" class="req" placeholder="enter your requirements" name="requirements"></textarea>
         </div>






      </div>

      <br><center><input type="submit" value="request plan" class="btn" name="send"></center>

   </form>

</section>

<!-- booking section ends -->

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





<script>



function showCities() {
  var countrySelect = document.getElementById('country');
  var cityContainer = document.getElementById('citycontainer');
  var cityOptions = document.getElementById('city-options');

  // Clear city options
  cityOptions.innerHTML = '';

  // Get the selected country value
  var selectedCountry = countrySelect.value;

  if (selectedCountry === 'pakistan') {
    // Add Pakistan cities
    addCityOption('karachi', 'Karachi');
    addCityOption('lahore', 'Lahore');
    addCityOption('islamabad', 'Islamabad');
    addCityOption('peshawar', 'Peshawar');
    addCityOption('kashmir', 'Kashmir');
  } else if (selectedCountry === 'india') {
    // Add India cities
    addCityOption('mumbai', 'Mumbai');
    addCityOption('delhi', 'Delhi');
    addCityOption('goa', 'Goa');
    addCityOption('hyderabad', 'Hyderabad');
    addCityOption('agra', 'Agra');
  } else if (selectedCountry === 'switzerland') {
    // Add Switzerland cities
    addCityOption('zurich', 'Zurich');
    addCityOption('geneva', 'Geneva');
    addCityOption('berne', 'Berne');
    addCityOption('lucerne', 'Lucerne');
    addCityOption('interlaken', 'Interlaken');
  }

  // Show the city container
  cityContainer.classList.remove('hide');
}

function addCityOption(value, label) {
  var cityOptions = document.getElementById('city-options');
  var optionDiv = document.createElement('div');

  var checkbox = document.createElement('input');
  checkbox.type = 'checkbox';
  checkbox.id = value;
  checkbox.name = 'city[]'; // Changed to "city[]" to support multiple city selection
  checkbox.value = value;

  var checkboxLabel = document.createElement('label');
  checkboxLabel.htmlFor = value;
  checkboxLabel.textContent = label;

  optionDiv.appendChild(checkbox);
  optionDiv.appendChild(checkboxLabel);

  cityOptions.appendChild(optionDiv);
}

function calculateTotalExpense() {
  var cityInputs = document.getElementsByName('city[]');
  var numCities = cityInputs.length;

  var numDays = parseInt(document.getElementById('num-days').value);
  var numNights = parseInt(document.getElementById('num-nights').value);

  var totalExpense = numCities * (numDays + numNights);

  document.getElementById('total-expense').textContent = 'Total Expense: $' + totalExpense;
  document.getElementById('hidden-total-expense').value = totalExpense;
}

document.getElementById("myForm").addEventListener("submit", function(event) {
   // Submit the form
   //event.preventDefault(); // Prevent default form submission behavior

   var form = event.target;
   var formData = new FormData(form);
   var xhr = new XMLHttpRequest();
   xhr.open("POST", form.action);
   xhr.onreadystatechange = function() {
      if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
         // Form submitted successfully
         showPopupMessage();
      }
   };
   xhr.send(formData);
});

function showPopupMessage() {
   // Show the popup message using your preferred method
   alert("Thank you for submitting the form!");

   // You can perform additional actions or redirect the user as needed
}
</script>

</body>
</html>