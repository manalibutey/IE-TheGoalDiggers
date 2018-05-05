<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width initial-scale=1">
    <meta name="viewport" content="width=device-width initial-scale=1">
    <title>CareerTree</title>
    <link rel="icon" href="./images/tab.ico" />
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/home.css">
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>

    <script src="./vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="./vendor/chosen_v1.8.5/chosen.jquery.min.js"></script>
    <link href="./vendor/chosen_v1.8.5/chosen.css" rel="stylesheet" />
    <script>smoothscroll</script>
    <script type="text/javascript">
        $(function () {
            $('a[href*=#]').on('click', function (e) {
                e.preventDefault();
                $('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top }, 500, 'linear');
            });
        });
        $(document).ready(function () {
            $('.chosen-select').chosen();
        });
    </script>
    <script>
        //function validate_submit() {
        //    var result = false;
        //    var options = document.getElementById("mylist").options;
        //    for (var i = 0; i < options.length; i++) {
        //        if (document.getElementById('category').value == options[i].value) {
        //            result = true;
        //        }
        //    }
        //    if (!result) {
        //        alert("Please select occupations from the list");
        //    }
        //    return result;
        //}
        function validate_submit() {
            var result = false;
            if (document.getElementById('category').value) {
                    result = true;
            }
            if (!result) {
                alert("Please select occupations from the list");
            }
            return result;
        }
    </script>
</head>

<body>

<svg aria-hidden="true" style="position: absolute; width: 0; height: 0; overflow: hidden;" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
<defs>
<symbol id="icon-search" viewBox="0 0 32 32">
<title>search</title>
<path d="M31.008 27.231l-7.58-6.447c-0.784-0.705-1.622-1.029-2.299-0.998 1.789-2.096 2.87-4.815 2.87-7.787 0-6.627-5.373-12-12-12s-12 5.373-12 12 5.373 12 12 12c2.972 0 5.691-1.081 7.787-2.87-0.031 0.677 0.293 1.515 0.998 2.299l6.447 7.58c1.104 1.226 2.907 1.33 4.007 0.23s0.997-2.903-0.23-4.007zM12 20c-4.418 0-8-3.582-8-8s3.582-8 8-8 8 3.582 8 8-3.582 8-8 8z"></path>
</symbol>
</defs>
</svg>

	<div class="navbar  navbar-dark navbar-expand-md fixed-top">

		<div class="container">
			<a class="navbar-brand" href="/home.php">
				<img src="./images/logo2.png" />
			</a>
			
			<button class="navbar-toggle" data-toggle="collapse" data-target=".navCollapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<div class="collapse navbar-collapse navCollapse">
				<ul class="nav navbar-nav navbar-right">
					<li>
						<a class="nav-item active" href="#" style="margin-top: 7px;">Home</a>
					</li>
					<li>
						<a class="nav-item" href="/aboutus.php" style="margin-top: 7px;">About Us</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
    <section class="section">
    <section class="section1"> 
	<div class="full">
		<div class="back">
			<img class="back-image" src="./images/background.jpg" />
             <div class="head" >
<div class="title-line" ><h1><strong>Welcome To Your Future</strong></h1> </div>
<h5>The Sky is the Limit</h5>
</div>
             <div class="subhead1" ><h4>Improve your employability. Change career like a pro.</h4>
<h4>Let us help you discover your choices for a career change.</h4>
</div>

<div class="search">
<label for="category"></label>
<form method="post" action="skill.php">
    <!--<input type="text" id="category" name="occ" autocomplete="off" list="mylist" placeholder="Enter your previous or current occupation">-->    
    <?php
    include 'db_connection.php';
    //$dbconn4 = OpenCon();
    //$sql = "Select Occname
    //From Occupation as Occ, Industry as Ind, Industry_Occupation as IndOcc
    //Where IndOcc.IndID = Ind.IndID and Occ.OccID = IndOcc.OccID
    //and Occ.occid in (select occid from Career_Changer_Matrix )
    //Order by Occ.OccName";
    //$result = pg_query($dbconn4, $sql);
    //if (!$result) {
    //echo "An error occurred.\n";
    //exit;
    //}
    //echo '<datalist id="mylist">';
    //while ($res = pg_fetch_row($result)) {
    //$result1 = $res[0];
    //echo '<option value = "'. $result1 .'">'. $result1 .'</option>';
    //}
    //echo '</datalist>';
    //pg_close($dbconn4);

    ///////////////////////////////////////////////////////////////////////////////////
    $dbconn4 = OpenCon();
    //updated query 29/04/2018
    $sql = "Select CASE WHEN OccABS.abs_name is not null THEN OccABS.abs_name ELSE Occ.occname END as ABSName
    From Occupation as Occ
	left outer join Occupation_ABS as OccABS on Occ.occid = OccABS.occid
    Where  Occ.occid in (select occid from Career_Changer_Matrix )
    Order by ABSName";
    $result = pg_query($dbconn4, $sql);
    echo '<select class="chosen-select" id="category" name="occ" style="height:auto;width:500px;">';
    echo '<option disabled selected value>Please enter your previous occupation</option>';
        while ($res = pg_fetch_row($result)) {
            $result1 = $res[0];
            echo '<option value = "'. $result1 .'">'. $result1 .'</option>';
        }
        echo '</select>';
    pg_close($dbconn4);
    ?>
    <button type="submit" class="button button-rounded-small" name="submit" id="searchsubmit" onclick="return validate_submit()">
        <span>
            <svg class="icon icon-search"><use xlink:href="#icon-search"></use></svg>
        </span>
    </button>
</form>
<!-- <div id="hover-content">
        "Big things have small beginnings." ~ Prometheus
    </div> -->

</div>
             <div id="section01" class="demo">
 
  <a href="#section02"><span></span><span></span><span></span>Know More</a>
</div>
        </div>
       
        </section> 

        <section class="section2" id="section02"> 
		<main role="main">
			<div class="mid-section">
           
				<h1 data-aos="fade-down"><div class="title-line1" >How Career Tree Works</div></h1>
                
			</div>

			<div class="grid">
				<div class="col-sm-2 i1">
					
                    <div class="column">
    <img src="./images/Picture1.png"  class="hover-shadow" data-aos="fade-right"/>
    <div class="caption">
                        <p data-aos="fade-right">Choose your previous work</p>
                    </div>
  </div>
            
                    
				</div>

				<div class="col-sm-2 i2">
					
           <div class="column">
    <img src="./images/Picture2.png" class="hover-shadow" data-aos="fade-up"/>
     <div class="caption">
                        <p data-aos="fade-up">Select your skills and knowledge</p>
                    </div>
  </div>

                   
				</div>

				<div class="col-sm-2 i3">
					

                               <div class="column">
    <img src="./images/Picture3.png"  class="hover-shadow" data-aos="fade-left"/>
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


             
               </div>

				
                 <div class="btn" data-aos="fade-up">
                    <input type="button" value="Let's Start" onclick="start()" >
				</div>
			
                        


		</main>

<footer class="footer"><p>
  &#169; Copyright 2018 Career Tree </p>
</footer>

        </section>

        <!-- The Modal/Lightbox -->
<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      <div class="numbertext">1 / 3</div>
      <img src="./images/Picture1.png" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 3</div>
      <img src="./images/Picture2.png" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">3 / 3</div>
      <img src="./images/Picture3.png" style="width:100%">
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


