<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width initial-scale=1">
	<meta name="viewport" content="width=device-width initial-scale=1">
	<title>CareerTree</title>
	<link rel="icon" href="./images/title.ico" />
	<link rel="stylesheet" href="./css/bootstrap.min.css">
	<link rel="stylesheet" href="./css/style.css">

</head>

<body>

	<div class="navbar  navbar-dark navbar-expand-md fixed-top">

		<div class="container">
			<a class="navbar-brand" href="#">
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
						<a class="nav-item active" href="#">Home</a>
					</li>
					<li>
						<a class="nav-item" href="#">About Us</a>
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
        </div>
        </section>

        <section class="section2"> 
		<main role="main">
			<div class="mid-section">
				<h1>How Career Tree Works</h1>
			</div>

			<div class="grid">
				<div class="col-sm-2 i1">
					<figure class="image1">
						<img src="./images/Picture1.png" />
						<figcaption>Choose your previous work</figcaption>
					</figure>
				</div>

				<div class="col-sm-2 i2">
					<figure class="image2">
						<img src="./images/Picture2.png" />
						<figcaption>Select your skills and knowledge</figcaption>
					</figure>
				</div>

				<div class="col-sm-2 i3">
					<figure class="image3">
						<img src="./images/Picture3.png" />
						<figcaption>Explore suggested occupations</figcaption>
					</figure>
				</div>

                <div class="arrow">
                <figure class="i4">
						<img src="./images/picture1.png" />
						
					</figure>
                
                </div>

                <div class="arrow">
                <figure class="i5">
						<img src="./images/picture1.png" />
						
					</figure>
                
                </div>

				<div class="btn">

					<input type="button" value="Let's Start" onclick="start()">
				</div>

			</div>

		</main>

        </section>
        </section>

		<div class="footer">
			<div class="pull-right">
				<a href="#">Back to top</a>
			</div>
		</div>
	</div>
	<script>
		function start() {
			window.location.href = "./industry.php";
		}
	</script>
</body>


</html>