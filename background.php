<!DOCTYPE html>
<?php
    if(isset($_POST["submit"])) {
        die("<p>Success!</p><br/><p>Return to <a href='homepage.php'>homepage</a></p>");
    }
?>
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
                color: #fff;
                text-decoration: none;
            }
			#title:hover {
				text-decoration: none;
			}
            .background {
                text-align: center;
            }
            .chat * {
                transition: all .5s;
                box-sizing: border-box;
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
            }
            .chat {
                cursor: default;
                -webkit-touch-callout: none; /* iOS Safari */
                -webkit-user-select: none;   /* Chrome/Safari/Opera */
                -khtml-user-select: none;    /* Konqueror */
                -moz-user-select: none;      /* Firefox */
                -ms-user-select: none;       /* IE/Edge */
                user-select: none;   
            }
            .chat .messages {
                display: block;
                overflow-x: hidden;
                overflow-y: scroll;
                position: relative;
                height: 90%;
                width: 100%;
                padding: 2% 3%;
                border-bottom: 1px solid #ecf0f1;
            }
            .chat .message {
                display: block;
                width: 98%;
                padding: 0.5%;
            }
            .chat .message p {
                margin: 0;
            }
            .chat .myMessage,
            .chat .fromThem {
                max-width: 50%;
                word-wrap: break-word;
                margin-bottom: 20px;
            }
            .chat .myMessage,.fromThem {
                position: relative;
                padding: 10px 20px;
                color: white;
                border-radius: 25px;
                clear: both;
                font: 400 15px 'Open Sans', sans-serif;
            }
            .chat .myMessage {
                background: #00e34d;
                color: white;
                float: right;
                clear: both;
                border-bottom-right-radius: 20px 0px\9;
            }
            .chat .myMessage:before {
                content: "";
                position: absolute;
                z-index: 1;
                bottom: -2px;
                right: -8px;
                height: 19px;
                border-right: 20px solid #00e34d;
                border-bottom-left-radius: 16px 14px;
                -webkit-transform: translate(0, -2px);
                transform: translate(0, -2px);
                border-bottom-left-radius: 15px 0px\9;
                transform: translate(-1px, -2px)\9;
            }
            .chat .myMessage:after {
                content: "";
                position: absolute;
                z-index: 1;
                bottom: -2px;
                right: -42px;
                width: 12px;
                height: 20px;
                background: white;
                border-bottom-left-radius: 10px;
                -webkit-transform: translate(-30px, -2px);
                transform: translate(-30px, -2px);
            }
            .chat .fromThem {
                background: #E5E5EA;
                color: black;
                float: left;
                clear: both;
                border-bottom-left-radius: 30px 0px\9;
            }
            .chat .fromThem:before {
                content: "";
                position: absolute;
                z-index: 2;
                bottom: -2px;
                left: -7px;
                height: 19px;
                border-left: 20px solid #E5E5EA;
                border-bottom-right-radius: 16px 14px;
                -webkit-transform: translate(0, -2px);
                transform: translate(0, -2px);
                border-bottom-right-radius: 15px 0px\9;
                transform: translate(-1px, -2px)\9;
            }
            .chat .fromThem:after {
                content: "";
                position: absolute;
                z-index: 3;
                bottom: -2px;
                left: 4px;
                width: 26px;
                height: 20px;
                background: white;
                border-bottom-right-radius: 10px;
                -webkit-transform: translate(-30px, -2px);
                transform: translate(-30px, -2px);
            }
		</style>
	</head>
	<body>
		<header id="myHeader" class="header">
			<a id="title" href="homepage.php">
                <h1>Screenr</h1>
            </a>
		</header>
		<div class="background">
			<h1>Background Checks</h1>
            <div class="chat">
                <div class="messages">
                    <div class="message">
                        <div class="fromThem">
                            <p>Screenr can cost cuts for your gig economy startup
                            by allowing you to outsource your background checking
                            process</p>
                        </div>
                        <div class="myMessage">
                            <p>How much do background checks usually cost?</p>
                        </div>
                        <div class="fromThem">
                            <p>Here are how much background checks usually cost:</p>
                        </div>
                        <div class="fromThem">
                            <p>County Criminal Records: $5 – $20</p>
                            <p>State Criminal Records: $9 – $20</p>
                            <p>Federal Criminal Records: $8 – $15</p>
                            <p>Sex Offender Status: Free to $10</p>
                            <p>Records of Terrorist Activity: Free to $5</p>
                            <p>Motor Vehicle Background Checks: $3 – $10</p>
                            <p>SSN Verification Checks: Free – $10</p>
                            <p>Education Verification Checks: $7 – $15</p>
                            <p>Employment Verification Checks: $7 – $15</p>
                            <p>Professional License Checks: $7 – $15</p>
                            <p>Credit Background Checks: $5 – $12</p>
                        </div>
                        <div class="fromThem">
                            <p>A company like Uber would have to pay $25 - $80
                            per screen</p>
                        </div>
                        <div class="myMessage">
                            <p>How much can I save with Screenr?</p>
                        </div>
                        <div class="fromThem">
                            <p>Find out below!</p>
                        </div>
                    </div>
                </div>
            </div>
            <form action="background.php" method="POST">
                <h1>Price Range Calculator:</h1>
                <input id="county" type="checkbox" name="screens" value="county"> County Criminal Records<br>
                <input id="state" type="checkbox" name="screens" value="state"> State Criminal Records<br>
                <input id="federal" type="checkbox" name="screens" value="federal"> Federal Criminal Records<br>
                <input id="sex" type="checkbox" name="screens" value="sex"> Sex Offender Status<br>
                <input id="terrorist" type="checkbox" name="screens" value="terrorist"> Records of Terrorist Activity<br>
                <input id="motor" type="checkbox" name="screens" value="motor"> Motor Vehicle Background Checks<br>
                <input id="ssn" type="checkbox" name="screens" value="ssn"> SSN Verification Checks<br>
                <input id="education" type="checkbox" name="screens" value="education"> Education Verification Checks<br>
                <input id="employment" type="checkbox" name="screens" value="employment"> Employment Verification Checks<br>
                <input id="professional" type="checkbox" name="screens" value="professional"> Professional License Checks<br>
                <input id="credit" type="checkbox" name="screens" value="credit"> Credit Background Checks<br>
                <br/>
                <p id="costs"></p>
                <p id="savings"></p>
                <h1>Submit your information below!</h1>
                <label>First Name</label>
                <input type="text" name="firstName" value="" placeholder="Enter first name" required/>
                <br/>
                <br/>
                <label>Last Name</label>
                <input type="text" name="lastName" value="" placeholder="Enter last name" required/>
                <br/>
                <br/>
                <label>Email</label>
                <input type="text" name="email" value="" placeholder="Enter email" required/>
                <br/>
                <br/>
                <label>Phone Number</label>
                <input type="text" name="phone" value="" placeholder="Enter phone number" required/>
                <br/>
                <br/>
                <label>Company Name</label>
                <input type="text" name="company" value="" placeholder="Enter company name" required/>
                <br/>
                <br/>
                <input type="submit" name="submit" value="Submit"/>
			</form>
		</div>
        <script>
            var lowerCosts = 0;
            var higherCosts = 0;
            var savings = 0;
            $(function() {
                $("#costs").html("Total Costs: $" + lowerCosts + " - $" + higherCosts + " per screen");
                $("#savings").html("Screenr's Price: $" + savings + " per screen");
                $("#county").click(function() {
                    $(this).toggleClass("clicked");
                    if($(this).hasClass("clicked")) {
                        lowerCosts += 5;
                        higherCosts += 20;
                        savings = (lowerCosts * 0.8).toFixed(2);
                        $("#costs").html("Total Costs: $" + lowerCosts + " - $" + higherCosts + " per screen");
                        $("#savings").html("Screenr's Price: $" + savings + " per screen");
                    } else {
                        lowerCosts -= 5;
                        higherCosts -= 20;
                        savings = (lowerCosts * 0.8).toFixed(2);
                        $("#costs").html("Total Costs: $" + lowerCosts + " - $" + higherCosts + " per screen");
                        $("#savings").html("Screenr's Price: $" + savings + " per screen");
                    }
                })
                $("#state").click(function() {
                    $(this).toggleClass("clicked");
                    if($(this).hasClass("clicked")) {
                        lowerCosts += 9;
                        higherCosts += 20;
                        savings = (lowerCosts * 0.8).toFixed(2);
                        $("#costs").html("Total Costs: $" + lowerCosts + " - $" + higherCosts + " per screen");
                        $("#savings").html("Screenr's Price: $" + savings + " per screen");
                    } else {
                        lowerCosts -= 9;
                        higherCosts -= 20;
                        savings = (lowerCosts * 0.8).toFixed(2);
                        $("#costs").html("Total Costs: $" + lowerCosts + " - $" + higherCosts + " per screen");
                        $("#savings").html("Screenr's Price: $" + savings + " per screen");
                    }
                })
                $("#federal").click(function() {
                    $(this).toggleClass("clicked");
                    if($(this).hasClass("clicked")) {
                        lowerCosts += 8;
                        higherCosts += 15;
                        savings = (lowerCosts * 0.8).toFixed(2);
                        $("#costs").html("Total Costs: $" + lowerCosts + " - $" + higherCosts + " per screen");
                        $("#savings").html("Screenr's Price: $" + savings + " per screen");
                    } else {
                        lowerCosts -= 8;
                        higherCosts -= 15;
                        savings = (lowerCosts * 0.8).toFixed(2);
                        $("#costs").html("Total Costs: $" + lowerCosts + " - $" + higherCosts + " per screen");
                        $("#savings").html("Screenr's Price: $" + savings + " per screen");
                    }
                })
                $("#sex").click(function() {
                    $(this).toggleClass("clicked");
                    if($(this).hasClass("clicked")) {
                        lowerCosts += 0;
                        higherCosts += 10;
                        savings = (lowerCosts * 0.8).toFixed(2);
                        $("#costs").html("Total Costs: $" + lowerCosts + " - $" + higherCosts + " per screen");
                        $("#savings").html("Screenr's Price: $" + savings + " per screen");
                    } else {
                        lowerCosts -= 0;
                        higherCosts -= 10;
                        savings = (lowerCosts * 0.8).toFixed(2);
                        $("#costs").html("Total Costs: $" + lowerCosts + " - $" + higherCosts + " per screen");
                        $("#savings").html("Screenr's Price: $" + savings + " per screen");
                    }
                })
                $("#terrorist").click(function() {
                    $(this).toggleClass("clicked");
                    if($(this).hasClass("clicked")) {
                        lowerCosts += 0;
                        higherCosts += 5;
                        savings = (lowerCosts * 0.8).toFixed(2);
                        $("#costs").html("Total Costs: $" + lowerCosts + " - $" + higherCosts + " per screen");
                        $("#savings").html("Screenr's Price: $" + savings + " per screen");
                    } else {
                        lowerCosts -= 0;
                        higherCosts -= 5;
                        savings = (lowerCosts * 0.8).toFixed(2);
                        $("#costs").html("Total Costs: $" + lowerCosts + " - $" + higherCosts + " per screen");
                        $("#savings").html("Screenr's Price: $" + savings + " per screen");
                    }
                })
                $("#motor").click(function() {
                    $(this).toggleClass("clicked");
                    if($(this).hasClass("clicked")) {
                        lowerCosts += 3;
                        higherCosts += 10;
                        savings = (lowerCosts * 0.8).toFixed(2);
                        $("#costs").html("Total Costs: $" + lowerCosts + " - $" + higherCosts + " per screen");
                        $("#savings").html("Screenr's Price: $" + savings + " per screen");
                    } else {
                        lowerCosts -= 3;
                        higherCosts -= 10;
                        savings = (lowerCosts * 0.8).toFixed(2);
                        $("#costs").html("Total Costs: $" + lowerCosts + " - $" + higherCosts + " per screen");
                        $("#savings").html("Screenr's Price: $" + savings + " per screen");
                    }
                })
                $("#ssn").click(function() {
                    $(this).toggleClass("clicked");
                    if($(this).hasClass("clicked")) {
                        lowerCosts += 0;
                        higherCosts += 10;
                        savings = (lowerCosts * 0.8).toFixed(2);
                        $("#costs").html("Total Costs: $" + lowerCosts + " - $" + higherCosts + " per screen");
                        $("#savings").html("Screenr's Price: $" + savings + " per screen");
                    } else {
                        lowerCosts -= 0;
                        higherCosts -= 10;
                        savings = (lowerCosts * 0.8).toFixed(2);
                        $("#costs").html("Total Costs: $" + lowerCosts + " - $" + higherCosts + " per screen");
                        $("#savings").html("Screenr's Price: $" + savings + " per screen");
                    }
                })
                $("#education").click(function() {
                    $(this).toggleClass("clicked");
                    if($(this).hasClass("clicked")) {
                        lowerCosts += 7;
                        higherCosts += 15;
                        savings = (lowerCosts * 0.8).toFixed(2);
                        $("#costs").html("Total Costs: $" + lowerCosts + " - $" + higherCosts + " per screen");
                        $("#savings").html("Screenr's Price: $" + savings + " per screen");
                    } else {
                        lowerCosts -= 7;
                        higherCosts -= 15;
                        savings = (lowerCosts * 0.8).toFixed(2);
                        $("#costs").html("Total Costs: $" + lowerCosts + " - $" + higherCosts + " per screen");
                        $("#savings").html("Screenr's Price: $" + savings + " per screen");
                    }
                })
                $("#employment").click(function() {
                    $(this).toggleClass("clicked");
                    if($(this).hasClass("clicked")) {
                        lowerCosts += 7;
                        higherCosts += 15;
                        savings = (lowerCosts * 0.8).toFixed(2);
                        $("#costs").html("Total Costs: $" + lowerCosts + " - $" + higherCosts + " per screen");
                        $("#savings").html("Screenr's Price: $" + savings + " per screen");
                    } else {
                        lowerCosts -= 7;
                        higherCosts -= 15;
                        savings = (lowerCosts * 0.8).toFixed(2);
                        $("#costs").html("Total Costs: $" + lowerCosts + " - $" + higherCosts + " per screen");
                        $("#savings").html("Screenr's Price: $" + savings + " per screen");
                    }
                })
                $("#professional").click(function() {
                    $(this).toggleClass("clicked");
                    if($(this).hasClass("clicked")) {
                        lowerCosts += 7;
                        higherCosts += 15;
                        savings = (lowerCosts * 0.8).toFixed(2);
                        $("#costs").html("Total Costs: $" + lowerCosts + " - $" + higherCosts + " per screen");
                        $("#savings").html("Screenr's Price: $" + savings + " per screen");
                    } else {
                        lowerCosts -= 7;
                        higherCosts -= 15;
                        savings = (lowerCosts * 0.8).toFixed(2);
                        $("#costs").html("Total Costs: $" + lowerCosts + " - $" + higherCosts + " per screen");
                        $("#savings").html("Screenr's Price: $" + savings + " per screen");
                    }
                })
                $("#credit").click(function() {
                    $(this).toggleClass("clicked");
                    if($(this).hasClass("clicked")) {
                        lowerCosts += 5;
                        higherCosts += 12;
                        savings = (lowerCosts * 0.8).toFixed(2);
                        $("#costs").html("Total Costs: $" + lowerCosts + " - $" + higherCosts + " per screen");
                        $("#savings").html("Screenr's Price: $" + savings + " per screen");
                    } else {
                        lowerCosts -= 5;
                        higherCosts -= 12;
                        savings = (lowerCosts * 0.8).toFixed(2);
                        $("#costs").html("Total Costs: $" + lowerCosts + " - $" + higherCosts + " per screen");
                        $("#savings").html("Screenr's Price: $" + savings + " per screen");
                    }
                })
            });
        </script>
	</body>
</html>