<!DOCTYPE html>
<html lang="en">
	<head>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <meta name="description" content="Screening Solutions for the Gig Economy">
		<meta name="keywords" content="Screenr, Gig Economy, Screening">
		<meta name="author" content="Josh Choi">
	    <title>Screenr</title>
	    <link rel="stylesheet" type="text/css" href="css/slant.css">
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<style>
            .header {
                border-bottom: 2px solid gray;
                padding: 10px 16px;
                background-color: #fff;
                text-align: center;
            }
			#title {
                color: #000;
                text-decoration: none;
            }
			#title:hover {
				text-decoration: none;
			}
			.homepage {
				text-align: center;
				background: white;
			}
			.row {
				display: flex;
				justify-content: center;
			}
			.card {
				display: inline-block;
				margin: 0px -5px 0px -5px;
				border: solid 1px white;
				width: 50vw;
				height: 50vh;
			}
			.card:hover {
				filter: brightness(50%);
				margin: 0px -5px 0px -5px;
			}
			#backgroundCard {
				background-image: url("photos/background.jpeg");
				background-size: cover;
			}
			#skillCard {
				background-image: url("photos/skill.jpeg");
				background-size: cover;
			}
			#researchCard {
				background-image: url("photos/research.png");
				background-size: cover;
			}
			#inspectionCard {
				background-image: url("photos/inspection.png");
				background-size: cover;
			}
			h3 {
				color: black;
                background-color: white;
                border: 2px solid black;
                padding: 5px;
			}
		</style>
	</head>
	<body>
		<header id="myHeader" class="header">
			<a id="title" href="homepage.php">
                <h1>Screenr</h1>
            </a>
		</header>
		<div class="homepage">
			<div class="row">
				<a href="background.php">
					<div id="backgroundCard" class="card">
						<h3>Background Checks</h3>
					</div>
				</a>
				<a href="skill.php">
					<div id="skillCard" class="card">
						<h3>Skill Screenings</h3>
					</div>
				</a>
			</div>
			<div class="row">
				<a href="research.php">
					<div id="researchCard" class="card">
						<h3>Research Company Applicants</h3>
					</div>
				</a>
				<a href="inspection.php">
					<div id="inspectionCard" class="card">
						<h3>Capital Inspection</h3>
					</div>
				</a>
			</div>
		</div>
	</body>
</html>