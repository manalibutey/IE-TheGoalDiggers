<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width initial-scale=1">
    <meta name="viewport" content="width=device-width initial-scale=1">
    <title>CareerTree</title>
    <link rel="icon" href="./images/tab.ico" />
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/industry.css">

    <script src="./js/jquery.min.js"></script>
   
    
    
  </head>
    <body>
<svg aria-hidden="true" style="position: absolute; width: 0; height: 0; overflow: hidden;" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
<defs>
<symbol id="icon-home3" viewBox="0 0 32 32">
<title>Home</title>
<path d="M32 19l-6-6v-9h-4v5l-6-6-16 16v1h4v10h10v-6h4v6h10v-10h4z"></path>
</symbol>
<symbol id="icon-svg" viewBox="0 0 32 32">
<title>svg</title>
<path d="M29 13c-0.888 0-1.686 0.386-2.236 1h-5.936l4.197-4.197c0.822 0.046 1.66-0.245 2.288-0.874 1.172-1.172 1.172-3.071 0-4.243s-3.071-1.172-4.243 0c-0.628 0.628-0.919 1.466-0.874 2.288l-4.197 4.197v-5.936c0.614-0.549 1-1.347 1-2.236 0-1.657-1.343-3-3-3s-3 1.343-3 3c0 0.888 0.386 1.686 1 2.236v5.936l-4.197-4.197c0.045-0.822-0.245-1.66-0.874-2.288-1.172-1.172-3.071-1.172-4.243 0s-1.172 3.071 0 4.243c0.628 0.628 1.466 0.919 2.288 0.874l4.197 4.197h-5.936c-0.549-0.614-1.347-1-2.236-1-1.657 0-3 1.343-3 3s1.343 3 3 3c0.888 0 1.686-0.386 2.236-1h5.936l-4.197 4.197c-0.822-0.046-1.66 0.245-2.288 0.874-1.172 1.172-1.172 3.071 0 4.243s3.071 1.172 4.243 0c0.628-0.628 0.919-1.466 0.874-2.288l4.197-4.197v5.936c-0.614 0.549-1 1.347-1 2.235 0 1.657 1.343 3 3 3s3-1.343 3-3c0-0.888-0.386-1.686-1-2.236v-5.936l4.197 4.197c-0.046 0.822 0.245 1.66 0.874 2.288 1.172 1.172 3.071 1.172 4.243 0s1.172-3.071 0-4.243c-0.628-0.628-1.466-0.919-2.288-0.874l-4.197-4.197h5.936c0.549 0.614 1.347 1 2.235 1 1.657 0 3-1.343 3-3s-1.343-3-3-3z"></path>
</symbol>
</defs>
</svg>

<svg aria-hidden="true" style="position: absolute; width: 0; height: 0; overflow: hidden;" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
<defs>
<symbol id="icon-circle-left" viewBox="0 0 32 32">
<title>Back</title>
<path d="M16 32c8.837 0 16-7.163 16-16s-7.163-16-16-16-16 7.163-16 16 7.163 16 16 16zM16 3c7.18 0 13 5.82 13 13s-5.82 13-13 13-13-5.82-13-13 5.82-13 13-13z"></path>
<path d="M20.914 9.914l-2.829-2.829-8.914 8.914 8.914 8.914 2.828-2.828-6.086-6.086z"></path>
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
						<a class="nav-item active" href="/home.php" style="margin-top: 7px;">Home</a>
					</li>
					<li>
						<a class="nav-item" href="/aboutus.php" style="margin-top: 7px;">About Us</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
    
    <div class="sidebar">
<div class="icon-space"><a href="/home.php"><svg class="icon icon-home3"><use xlink:href="#icon-home3"></use></svg><span class="name"></span></a></div> 
<div class="icon-space"><a href="javascript:window.history.back()"><svg class="icon icon-circle-left"><use xlink:href="#icon-circle-left"></use></svg></a></div>
</div>

  <div class="full">

        <div class="mid-section">
           <h1><div class="title-line1">Your Previous Industry</div></h1>
        </div>
        <div class="sub-heading"><h4>Choose your previous work industry from our wide range of key industries within Australia</h4></div>

           <div class="grid-container">

                    <div class="col-sm-2 item1">
                        <figure class="image1">
                            <form method="post" action="occ.php">
                                <input type="image" name="submit1" class="thumbnail" src="./images/acco.png" onsubmit="occ.php" data-aos="zoom-in">
                            </form>
                        </figure>
                        <div class="caption" data-aos="zoom-in">Accomodation and Food Services </div>
                    </div>

                    <div class="col-sm-2 item2">
                        <figure class="image2">
                            <form method="post" action="occ.php">
                                <input type="image" name="submit2" class="thumbnail" src="./images/admin.png" onsubmit="occ.php" data-aos="zoom-in">
                            </form>
                        </figure>
                        <div class="caption" data-aos="zoom-in">
                            Administrative and Support Service
                        </div>
                    </div>

                    <div class="col-sm-2 item3">
                        <figure class="image3">
                            <form method="post" action="occ.php">
                                <input type="image" name="submit3" class="thumbnail" src="./images/agri.png" onsubmit="occ.php" data-aos="zoom-in">
                            </form>
                        </figure>
                        <div class="caption" data-aos="zoom-in">
                            Agriculture, Forestry and Fishing
                        </div>
                    </div>

                    <div class="col-sm-2 item4">
                        <figure class="image4">
                            <form method="post" action="occ.php">
                                <input type="image" name="submit4" class="thumbnail" src="./images/arts.png" onsubmit="occ.php" data-aos="zoom-in">
                            </form>
                        </figure>
                        <div class="caption" data-aos="zoom-in">
                            Arts and Recreation Services
                        </div>
                    </div>

                    <div class="col-sm-2 item5">
                        <figure class="image5">
                            <form method="post" action="occ.php">
                                <input type="image" name="submit5" class="thumbnail" src="./images/C.png" onsubmit="occ.php" data-aos="zoom-in">
                            </form>
                        </figure>
                        <div class="caption" data-aos="zoom-in">
                            Construction
                        </div>
                    </div>

                    <div class="col-sm-2 item6">
                        <figure class="image6">
                            <form method="post" action="occ.php">
                                <input type="image" name="submit6" class="thumbnail" src="./images/edu.png" onsubmit="occ.php" data-aos="zoom-in">
                            </form>
                        </figure>
                        <div class="caption" data-aos="zoom-in">
                            Education and Training
                        </div>
                    </div>

                    <div class="col-sm-2 item7">
                        <figure class="image7">
                            <form method="post" action="occ.php">
                                <input type="image" name="submit7" class="thumbnail" src="./images/elect.png" onsubmit="occ.php" data-aos="zoom-in">
                            </form>
                        </figure>
                        <div class="caption" data-aos="zoom-in">
                            Electricity, Gas, Water and Waste services
                        </div>
                    </div>

                    <div class="col-sm-2 item8">
                        <figure class="image8">
                            <form method="post" action="occ.php">
                                <input type="image" name="submit8" class="thumbnail" src="./images/fin.png" onsubmit="occ.php" data-aos="zoom-in">
                            </form>
                        </figure>
                        <div class="caption" data-aos="zoom-in">
                            Finance and Insurance Services
                        </div>
                    </div>

                    <div class="col-sm-2 item9">
                        <figure class="image9">
                            <form method="post" action="occ.php">
                                <input type="image" name="submit9" class="thumbnail" src="./images/health.png" onsubmit="occ.php" data-aos="zoom-in">
                            </form>
                        </figure>
                        <div class="caption" data-aos="zoom-in">
                            Health Care and Social Assistance
                        </div>
                    </div>

                    <div class="col-sm-2 item10">
                        <figure class="image10">
                            <form method="post" action="occ.php">
                                <input type="image" name="submit10" class="thumbnail" src="./images/infomedia.png" onsubmit="occ.php" data-aos="zoom-in">
                            </form>
                        </figure>
                        <div class="caption" data-aos="zoom-in">
                            Information Media and Telecommunications
                        </div>
                    </div>

                    <div class="col-sm-2 item11">
                        <figure class="image11">
                            <form method="post" action="occ.php">
                                <input type="image" name="submit11" class="thumbnail" src="./images/manufacturing.png" onsubmit="occ.php" data-aos="zoom-in">
                            </form>
                        </figure>
                        <div class="caption" data-aos="zoom-in">Manufacturing</div>
                    </div>

                    <div class="col-sm-2 item12">
                        <figure class="image12">
                            <form method="post" action="occ.php">
                                <input type="image" name="submit12" class="thumbnail" src="./images/mining.png" onsubmit="occ.php" data-aos="zoom-in">
                            </form>
                        </figure>
                        <div class="caption" data-aos="zoom-in">Mining</div>
                    </div>

                    <div class="col-sm-2 item13">
                        <figure class="image13">
                            <form method="post" action="occ.php">
                                <input type="image" name="submit13" class="thumbnail" src="./images/other.png" onsubmit="occ.php" data-aos="zoom-in">
                            </form>
                        </figure>
                        <div class="caption" data-aos="zoom-in">Other Services</div>
                    </div>

                    <div class="col-sm-2 item14">
                        <figure class="image14">
                            <form method="post" action="occ.php">
                                <input type="image" name="submit14" class="thumbnail" src="./images/prof.png" onsubmit="occ.php" data-aos="zoom-in">
                            </form>
                        </figure>
                        <div class="caption" data-aos="zoom-in">Professional, Scientific, and Technical Services</div>
                    </div>

                    <!--<div class="col-sm-2 item15">
                        <figure class="image15">
                            <form method="post" action="occ.php">
                                <input type="image" name="submit15" class="thumbnail" src="./images/shop.png" onsubmit="occ.php">
                            </form>
                        </figure>
                        <div class="caption">
                            Public Administration and Safety
                        </div>
                    </div> -->

                    <div class="col-sm-2 item16">
                        <figure class="image16">
                            <form method="post" action="occ.php">
                                <input type="image" name="submit16" class="thumbnail" src="./images/rental.png" onsubmit="occ.php" data-aos="zoom-in">
                            </form>
                        </figure>
                        <div class="caption" data-aos="zoom-in">Rental, Hiring and Real Estate Services</div>
                    </div>

                    <div class="col-sm-2 item17">
                        <figure class="image17">
                            <form method="post" action="occ.php">
                                <input type="image" name="submit17" class="thumbnail" src="./images/retail.png" onsubmit="occ.php" data-aos="zoom-in">
                            </form>
                        </figure>
                        <div class="caption" data-aos="zoom-in">Retail Trade</div>
                    </div>


                    <div class="col-sm-2 item18">
                        <figure class="image18">
                            <form method="post" action="occ.php">
                                <input type="image" name="submit18" class="thumbnail" src="./images/transport.png" onsubmit="occ.php" data-aos="zoom-in">
                            </form>
                        </figure>
                        <div class="caption" data-aos="zoom-in">Transport, Postal and Warehousing</div>
                    </div>

                    <div class="col-sm-2 item19">
                        <figure class="image19">
                            <form method="post" action="occ.php">
                                <input type="image" name="submit19" class="thumbnail" src="./images/wholesale.png" onsubmit="occ.php" data-aos="zoom-in">
                            </form>
                        </figure>
                        <div class="caption" data-aos="zoom-in">Wholesale Trade</div>
                        <!--<div class="caption" data-aos="zoom-in">Wholesale Trade</div>-->
                    </div>
                    </div>


</div>

   <div class="foot">
<footer class="footer"><p>
  &#169; Copyright 2018 Career Tree </p>
</footer>
</div>
    

<script>
        AOS.init({
            duration: 700,
        })
    </script>
 
</body>
</html>