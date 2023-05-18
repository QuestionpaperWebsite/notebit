<script>
    
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); 
}

//function showPage() created for defaultpage.html
function showPage(){
  $('body').load("questionpaper.html"); //changing content of the page using .load() function
  $('head').load("questionpaper.html"); //changing title of the page using .load() function
  window.history.pushState(null,null,"questionpaper.html");  //changing url of the page using .pushState() function without refreshing
}

// function showPage(){
//   window.location.href="questionpaper.html";
// }

// function goBack(){
//   $('body').load("defaultpage.html");
//   $('head').load("defaultpage.html"); 
//   window.history.pushState(null,null,"defaultpage.html");

// }

</script>