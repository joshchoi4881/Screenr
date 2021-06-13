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
            .research {
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
		<div class="research">
			<h1>Research Company Applicants</h1>
            <div class="chat">
                <div class="messages">
                    <div class="message">
                        <div class="fromThem">
                            <p>Screenr can help you thoroughly
                            research and vet the companies that apply for
                            work on your gig economy platform</p>
                        </div>
                        <div class="myMessage">
                            <p>How is this done?</p>
                        </div>
                        <div class="fromThem">
                            <p>Submit your information below
                            and we'll reach out to you!</p>
                        </div>
                    </div>
                </div>
            </div>
            <form action="research.php" method="POST">
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
	</body>
</html>