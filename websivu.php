<!DOCTYPE html>
<html lang="en">
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
</style>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-green w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" href="/sivu/websivu">Home</a>
    <a class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" href="/sivu/contact">Contact</a>

  </div>

  <!-- Navbar on small screens -->
</div>

<!-- Header -->
<header href="/sivu/MyLittleFarm.png" class="w3-center" style="padding:128px 16px">
	<img src="/sivu/MyLittleFarm.png" alt="Girl in a jacket">
</header>

<!-- First Grid -->
<div class="w3-row-padding w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-twothird">
      <h1>About us</h1>
      <h5 class="w3-padding-32">My little farming</h5>

      <p class="w3-text-grey">Company was built in January 2020, because world needs better and more scalable automatic planting system. Product scales from small herb planting to huge plantations in Afrika. Many places are bad for planting and that’s why the planting system is required.

Our product is automated planting system for bigger and smaller plants. Product makes planting easy and growing easier for everyone, even someone with zero experience on planting can plant he’s own plants and herbs. Product works on its own and you are able to configure settings via mobile application. Planting system automatically waters the plants and regulates the amount of light you give to the plants.

At first the planting system will be only for smaller plantation, later we will start working on the scalability so the watering system could be installed to bigger plantations such as greenhouse. Main goes before the summer is to make small automatic planting system for herbs.</p>
    </div>

    <div class="w3-third w3-center">
      <i class="fa fa-anchor w3-padding-64 w3-text-red"></i>
    </div>
  </div>
</div>

<!-- Second Grid -->
<div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-third w3-center">
      <i class="fa fa-coffee w3-padding-64 w3-text-red w3-margin-right"></i>
    </div>

    <div class="w3-twothird">
      <h1>Products</h1>
      <h5 class="w3-padding-32">We provide small automatic plantation for small plants and herbs.</h5>

      <p class="w3-text-grey">Using the automated plantation is simple and easy. Just pick a herb and plant it, download the mobile application and connect the device to wifi. 
	  <br>After connection you are ready to go.</p>
    </div>
  </div>
</div>

<div class="w3-container w3-black w3-center w3-opacity w3-padding-64">
    <h1 class="w3-margin w3-xlarge">Enjoy your fresh herbs!</h1>
</div>

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity">  
 <p><a>My little farming</a></p>
</footer>

<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>

</body>
</html>
