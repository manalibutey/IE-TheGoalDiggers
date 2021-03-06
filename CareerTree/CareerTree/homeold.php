<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width initial-scale=1">
    <meta name="viewport" content="width=device-width initial-scale=1">
    <title>CareerTree</title>
    <link rel="icon" href="./images/tab.ico" />
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/homeold.css">
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

        function start() {
			window.location.href = "./industry.php";
		}


        $(function() {
    $(window).scroll(function() {
            $(".sidebar").show();
      
    });
});
    </script>
    <script>
    window.onload = function(){ 
// Get the modal
var modal1 = document.getElementById('myModal1');
var modal2 = document.getElementById('myModal2');
var modal3 = document.getElementById('myModal3');

// Get the button that opens the modal
var btn = document.getElementById("s1");

// Get the <span> element that closes the modal
var span1 = document.getElementsByClassName("close1")[0];
var span2 = document.getElementsByClassName("close2")[0];
var span3 = document.getElementsByClassName("close3")[0];

// When the user clicks the button, open the modal 
s1.onclick = function() {
    modal1.style.display = "block";
}
s2.onclick = function() {
    modal2.style.display = "block";
}
s3.onclick = function() {
    modal3.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span1.onclick = function() {
    modal1.style.display = "none";
    modal2.style.display = "none";
      modal3.style.display = "none";
}
span2.onclick = function() {
   
    modal2.style.display = "none";
     
}
span3.onclick = function() {
   
      modal3.style.display = "none";
}


// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal1 ||event.target == modal2||event.target == modal3) {
        modal1.style.display = "none";
          modal2.style.display = "none";
           modal3.style.display = "none";
    }
}

};
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

<svg aria-hidden="true" style="position: absolute; width: 0; height: 0; overflow: hidden;" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
<defs>
<symbol id="icon-mail" viewBox="0 0 32 32">
<title>Gmail</title>
<path d="M26.666 0h-21.332c-2.934 0-5.334 2.4-5.334 5.333v21.333c0 2.934 2.4 5.334 5.334 5.334h21.332c2.936 0 5.334-2.4 5.334-5.334v-21.333c0-2.934-2.398-5.333-5.334-5.333zM8 8h16c0.286 0 0.563 0.061 0.817 0.177l-8.817 10.286-8.817-10.287c0.254-0.116 0.531-0.177 0.817-0.177zM6 22v-12c0-0.042 0.002-0.084 0.004-0.125l5.864 6.842-5.8 5.8c-0.045-0.167-0.069-0.34-0.069-0.517zM24 24h-16c-0.177 0-0.35-0.024-0.517-0.069l5.691-5.691 2.826 3.297 2.826-3.297 5.691 5.691c-0.167 0.045-0.34 0.069-0.517 0.069zM26 22c0 0.177-0.024 0.35-0.069 0.517l-5.8-5.8 5.864-6.842c0.003 0.041 0.004 0.083 0.004 0.125v12z"></path>
</symbol>
</defs>
</svg>

<svg aria-hidden="true" style="position: absolute; width: 0; height: 0; overflow: hidden;" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
<defs>
<symbol id="icon-linkedin" viewBox="0 0 32 32">
<title>LinkedIn</title>
<path d="M29 0h-26c-1.65 0-3 1.35-3 3v26c0 1.65 1.35 3 3 3h26c1.65 0 3-1.35 3-3v-26c0-1.65-1.35-3-3-3zM12 26h-4v-14h4v14zM10 10c-1.106 0-2-0.894-2-2s0.894-2 2-2c1.106 0 2 0.894 2 2s-0.894 2-2 2zM26 26h-4v-8c0-1.106-0.894-2-2-2s-2 0.894-2 2v8h-4v-14h4v2.481c0.825-1.131 2.087-2.481 3.5-2.481 2.488 0 4.5 2.238 4.5 5v9z"></path>
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
						<a class="nav-item" href="/about.php" style="margin-top: 7px;">About Us</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
    <div class="sidebar" style="display:none;">
        <div class="icon-space"><a href="mailto:careertree.thegoaldiggers@gmail.com"><svg class="icon icon-mail"><use xlink:href="#icon-mail"></use></svg><span class="name"></span></a></div> 
        <div class="icon-space"><a href="https://www.linkedin.com/company/careertree-goaldiggers/"><svg class="icon icon-linkedin"><use xlink:href="#icon-linkedin"></use></svg></use></svg></a></div>

    </div>

    <section class="section">
    <section class="section1"> 
	<div class="full">
		<div class="back">
        <img class="back-image" src="./images/background.jpg" />
		<div class="layer">	
             <div class="head" >
                    <div class="title-line" ><h1>Career Tree</h1> </div>

              </div>
<h5>We empower the unemployed</h5>
             <div class="subhead1" ><h4>Improve your employability. Change career like a pro.</h4>
<h4>Let us help you discover your choices for a career change.</h4>
</div>

<div class="search">
<label for="category"></label>
<form method="post" action="skillset.php">
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
    //updated query 10/05/2018
    $sql = "Select CASE WHEN OccABS.abs_name is not null THEN OccABS.abs_name ELSE Occ.occname END as ABSName, Occ.occname
    From Occupation as Occ
	inner join Occupation_ABS as OccABS on Occ.occid = OccABS.occid
    Where  Occ.occid in (select distinct a.occid from Career_Changer_Matrix a inner join occupation_abs b on a.relatedoccid = b.occid )
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
        </div>
       
        </section> 
        <section class="section2" id="section02"> 
		<main role="main">
			<div class="mid-section">
           
				<h1 data-aos="fade-down"><div class="title-line1" >How Career Tree Works</div></h1>
                
			</div>

			<div class="grid">
				<div class="col-sm-2 i1">
					
                    <div class="column" id="s1">
                    <img src="./images/Picture1.png"  class="hover-shadow" data-aos="fade-right"/>
                    <div class="caption">
                        <p data-aos="fade-right">Choose your previous career</p>
                    </div>
                    </div>
            
                    
				</div>

				<div class="col-sm-2 i2">
					
                <div class="column" id="s2">
                    <img src="./images/Picture2.png" class="hover-shadow" data-aos="fade-up"/>
                    <div class="caption">
                        <p data-aos="fade-up">Select your skills and knowledge</p>
                    </div>
                </div>

                   
				</div>

				<div class="col-sm-2 i3">
                    <div class="column" id="s3">
                        <img src="./images/Picture3.png"  class="hover-shadow" data-aos="fade-left"/>
                    <div class="caption" data-aos="fade-left">
                        <p >Explore suggested occupations</p>
                    </div>
                    </div>
				</div>

                           
               </div>

				
                 <div class="btn" data-aos="fade-up">
                    <input type="button" value="Get Started" onclick="start()" >
				</div>
			
                        
            <!--    <button id="s1">Open Modal</button>
                 <button id="s2">Open Modal</button>
                  <button id="s3">Open Modal</button> -->
                
		</main>

<div class="foot">
<!-- <div class="contact"><a href="/home.php"><svg class="icon icon-mail"><use xlink:href="#icon-mail"></use></svg></a></div> -->
<footer class="footer"><p>
  &#169; Copyright 2018 Career Tree </p>
</footer>

<!-- Trigger/Open The Modal -->


<!-- The Modal -->
<div id="myModal1" class="modal">

  <!-- Modal content for step 1-->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close1">&times;</span>
      <h2>Career Tree</h2>
    </div>
    <div class="modal-body">
    <div class="step-img">
    <img class="step1" src="./images/s1.jpg" />
    </div>
      <h3>Step 1</h3>
      <p>To provide you the best possible career recommendations, let us know your previous work industry and occupation</p>
      <div class="btn-align">
      <div class="btn2" >
                    <input type="button" value="Get Started" onclick="start()" >
				</div>
                </div>
    </div>
    
  </div>

</div>


<!-- The Modal for step 2-->
<div id="myModal2" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close2">&times;</span>
      <h2>Career Tree</h2>
    </div>
    <div class="modal-body">
    <div class="step-img">
    <img class="step1" src="./images/s2.jpg" />
    </div>
     <h3>Step 2</h3>
      <p>To empower your journey of career change, let us know the skills you possess from our set of skills</p>
      <div class="btn-align">
      <div class="btn2" >
                    <input type="button" value="Get Started" onclick="start()" >
				</div>
                </div>
    </div>
    
  </div>

</div>


<!-- The Modal for step 3-->
<div id="myModal3" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close3">&times;</span>
      <h2>Career Tree</h2>
    </div>
    <div class="modal-body">
    <div class="step-img">
    <img class="step1" src="./images/s3.jpg" />
    </div>
        <h3>Step 3</h3>
      <p>Explore the range of recommended occupations best suited to your skill set, and choose your new career with the knowledge of the duties, skills required and employment statistics of the occupation</p>
      <div class="btn-align">
      <div class="btn2" >
                    <input type="button" value="Get Started" onclick="start()" >
				</div>
                </div>
    </div>
    
  </div>

</div>

</div>

        </section>

       

        </section>

		
	</div>
	
   
<script>
AOS.init({
  duration: 1100,
})
</script>
</body>

</html>


