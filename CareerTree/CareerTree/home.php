<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width initial-scale=1">
	<meta name="viewport" content="width=device-width initial-scale=1">
	<title>CareerTree</title>
	<link rel="icon" href="./images/2.ico" />
	<link rel="stylesheet" href="./css/bootstrap.min.css">
	<link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
    <script type="text/javascript">
$(function() {
  $('a[href*=#]').on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top}, 500, 'linear');
  });
});    
</script>
</head>

<body>

	<div class="navbar  navbar-dark navbar-expand-md fixed-top">

		<div class="container">
			<a class="navbar-brand" href="/home.php">
				<img src="./images/logo.png" />
			</a>
			
			<button class="navbar-toggle" data-toggle="collapse" data-target=".navCollapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<div class="collapse navbar-collapse navCollapse">
				<ul class="nav navbar-nav navbar-right">
					<li>
						<a class="nav-item active" href="#" style="margin-top: 7px;">HOME</a>
					</li>
					<li>
						<a class="nav-item" href="/aboutus.php" style="margin-top: 7px;">ABOUT US</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
    <section class="section">
    <section class="section1"> 
	<div class="full">
		<div class="back">

			<img class="back-image" src="./images/bck.jpg" />
             <div class="head" ><h1>IMPROVE YOUR EMPLOYABILITY</h1></div>
             <div class="subhead1" ><p>Change career like a pro.</p></div>
                 <div class="subhead2" ><p>Let us help you discover your choices for a career change.</p></div>
                 

             <div id="section01" class="demo">
 
  <a href="#section02"><span></span><span></span><span></span>Scroll</a>
</div>
        </div>
       
        </section>

        <section class="section2" id="section02"> 
		<main role="main">
			<div class="mid-section">
				<h1 data-aos="fade-down">How Career Tree Works</h1>
			</div>

			<div class="grid">
				<div class="col-sm-2 i1">
					
                    <div class="column">
    <img src="./images/Picture11.png"  class="hover-shadow" data-aos="fade-right"/>
    <div class="caption">
                        <p data-aos="fade-right">Choose your previous work</p>
                    </div>
  </div>
            
                    
				</div>

				<div class="col-sm-2 i2">
					
           <div class="column">
    <img src="./images/Picture22.png" class="hover-shadow" data-aos="fade-up"/>
     <div class="caption">
                        <p data-aos="fade-up">Select your skills and knowledge</p>
                    </div>
  </div>

                   
				</div>

				<div class="col-sm-2 i3">
					

                               <div class="column">
    <img src="./images/Picture33.png"  class="hover-shadow" data-aos="fade-left"/>
     <div class="caption" data-aos="fade-left">
                        <p >Explore suggested occupations</p>
                    </div>
  </div>
                    
				</div>

               <!--<div class="arrow">
                <figure class="i4"> 
						<i class="material-icons" style="font-size: 165px">trending_flat</i>
                </figure>
                </div>

                <div class="arrow">
                    <figure class="i5">
						<i class="material-icons" style="font-size: 165px">trending_flat</i>
					</figure>
               </div>-->


               <div class="btn" data-aos="fade-up">
                    <input type="button" value="Let's Start" onclick="start()" >
				</div>
               </div>

				

			

		</main>

        </section>

        <!-- The Modal/Lightbox -->
<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      <div class="numbertext">1 / 3</div>
      <img src="./images/Picture11.png" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 3</div>
      <img src="./images/Picture22.png" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">3 / 3</div>
      <img src="./images/Picture33.png" style="width:100%">
    </div>

    

    <!-- Next/previous controls -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <!-- Caption text -->
    <div class="caption-container">
      <p id="caption"></p>
    </div>

    <!-- Thumbnail image controls -->
    <div class="column">
      <img class="demo" src="./images/Picture1.png" onclick="currentSlide(1)" alt="Nature">
    </div>

    <div class="column">
      <img class="demo" src="./images/Picture2.png" onclick="currentSlide(2)" alt="Trolltunga">
    </div>

    <div class="column">
      <img class="demo" src="./images/Picture3.png" onclick="currentSlide(3)" alt="Mountains">
    </div>

   
  </div>
</div>

        </section>

		
	</div>
	<script>
		function start() {
			window.location.href = "./industry.php";
		}
	</script>
    <script>
// Open the Modal
function openModal() {
  document.getElementById('myModal').style.display = "block";
}

// Close the Modal
function closeModal() {
  document.getElementById('myModal').style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
<script>
AOS.init({
  duration: 1100,
})
</script>
</body>

</html>


