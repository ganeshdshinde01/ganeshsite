<?php

echo '
<div class="w3-content w3-section" style="max-width:500px">
  <img class="mySlides" src="images/header3.jpg" style="width:691 " height="299">
  <img class="mySlides" src="images/header1.jpg" style="width:691 " height="299">
  <img class="mySlides" src="images/header2.jpg" style="width:691" height="299">
</div>


<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
';
?>