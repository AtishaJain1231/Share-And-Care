<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Book</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <script type="text/javascript">

var citiesBycity = {
newdelhi: ["Andaz Delhi Aerocity", "The Metropolitan Hotel and Spa", "Crowne Plaza Okhla"],
bengaluru: ["Lemon Tree Premier, Ulsoor Lake","Courtyard by Marriott Bengaluru Hebbal","Four Seasons Hotel Bengaluru at Embassy ONE"],
kolkata: ["Kenilworth Hotel", "Fairfield by Marriott", "Holiday Inn Kolkata Airport"],
chennai: ["Taj Connemara","Trident Chennai","The Accord Metropolitan"],
mumbai: ["-Mumbai Grand Hyatt Mumbai Hotel and Residences", "Sofitel Mumbai BKC", "The Orchid Ecotel Mumbai Airport"]
}
function makeSubmenu(value) {
if(value.length==0) document.getElementById("placeSelect").innerHTML = "<option></option>";
else {
var citiesOptions = "";
for(placeId in citiesBycity[value]) {
citiesOptions+="<option>"+citiesBycity[value][placeId]+"</option>";
}
document.getElementById("placeSelect").innerHTML = citiesOptions;
}
}

function resetSelection() {
document.getElementById("countrySelect").selectedIndex = 0;
document.getElementById("placeSelect").selectedIndex = 0;
}
</script>


</head>
<body   onload="resetSelection()">
   
<!-- header section starts  -->

<section class="header">

   <a href="home.php" class="logo">Share and Care</a>
   <nav class="navbar">
   <a href="home.php">Home</a>
      <a href="about.php">About</a>
      <a href="package.php">Services</a>
      <!-- <a href="explore.php">Explore</a> -->
      <a href="book.php">Book</a>
      <a href="login.php">Login</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<div class="heading" style="background:url(images/book.jpg) no-repeat">
   <h1>Book now</h1>
</div>

<!-- booking section starts  -->

<section class="booking">

   <h1 class="heading-title"></h1>

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
      
         <!--  
         <div class="inputBox">
            <span>how many :</span>
            <input type="number" placeholder="number of guests" name="guests">
         </div> 
         -->  
         <div class="inputBox">
            <span>arrivals :</span>
            <input type="date" name="arrivals">
         </div>
         <br>
         <br>
         <div class="inputBox">
            <span>leaving :</span>
            <input type="date" name="leaving">
         </div>
         <div class="inputBox">
         <span>select city</span>
         <select id="countrySelect" size="1" onchange="makeSubmenu(this.value)">
         <option value="" disabled selected>Choose city :</option>
         <option>new delhi</option>
         <option>bengaluru</option>
         <option>kolkata</option>
         <option>chennai</option>
         <option>mumbai</option>
         </select>
         <br>
         <br>
         <br>
         <span>Select Place : </span>
        <select id="placeSelect" class ="place" size="1" >
<option value="" disabled selected>Choose place</option>
<option></option>
</select>

</div>

      </div>

       <input type="submit" value="submit" class="btn" name="submit"> 
   
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
         <a href="login.php"> <i class="fas fa-angle-right"></i> login</a>

      </div>

      <div class="box">
         <h3>extra links</h3>
         <a href="faq.html"> <i class="fas fa-angle-right"></i> ask questions</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about us</a>
         <a href="privacyPolicy.html"> <i class="fas fa-angle-right"></i> privacy policy</a>
         <a href="aboutFooter"> <i class="fas fa-angle-right"></i> terms of use</a>
       

      </div>

      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
         <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
         <a href="https://mail.google.com/mail"> <i class="fas fa-envelope"></i> share&care@gmail.com </a>
         <a href="map.html"> <i class="fas fa-map"></i> Jabalpur, INDIA - 482001 </a>
      </div>

      <div class="box">
         <h3>follow us</h3>
         <a href="https://www.facebook.com" target="_blank">
          <i class="fab fa-facebook-f"></i> Facebook </a>
         <a href="https://www.twitter.com" target="_blank">
          <i class="fab fa-twitter"></i> Twitter </a>
          <a href="https://www.instagram.com" target="_blank">
          <i class="fab fa-instagram"></i> Instagram </a>
          <a href="https://www.linkedin.com" target="_blank">
          <i class="fab fa-linkedin"></i> Linkedin </a>
      </div>


   </div>

   <div class="credit"> Copyright © 2008 - 2022 <span>All Rights Reserved.</span></div>

</section>

<!-- footer section ends -->


<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>