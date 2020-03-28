<html>
<head>

<style>
.slideshow-container {
  max-width: 800px;
  position: relative;
  margin: auto;
}

.dot {
  height: 13px;
  width: 13px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}
</style>
</head>

<body bgcolor="pink">
<b><h1><center><marquee bgcolor="white "BEHAVIOR=ALTERNATE> RichAditi S.W.A.G. (Shopping Wished Apparels Guaranteed) </marquee> </center></h1></b>
<table cellspacing="20">
<tr> 
<td > <a href="proj_cat1.php" > <h3> Women </h3> </td>
<td > <a href="proj_cat2.php" > <h3> Men </h3> </td>
<td> <a href="proj_cat3.php"> <h3> Children </h3> </td>
<td> <a href="proj_cat4.php">  <h3> Men Footwear </h3> </td>
<td> <a href="proj_cat5.php">  <h3> Women Footwear </h3> </td>
<td> <a href="proj_cart.php">  <h3> Go to cart </h3> </td>
<td><a href="project_contact.php">  <h3> Contact Us  </h3></td>
<td><a href="project_login.php">  <h3> LogOut  </h3></td>

</tr>
</table>
<hr/>

<div class="slideshow-container">

<div class="mySlides fade">
<img src="shop1.jpg" style="width:100%">
</div>
<div class="mySlides fade">
<img src="shop2.jpg" style="width:100%">
</div>
<div class="mySlides fade">
<img src="shop3.jpg" style="width:100%">
</div>
</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
<hr/>




</body>
</html> 
