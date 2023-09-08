<?php
    include "header.php";
    include "navbar.php";

    
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>FinancialHub</title>
	<link rel="icon" href="/images/tsf.png" type="image/x-icon"/>
    <link rel="stylesheet" href="home_style.css">
	<link rel="stylesheet" href="style1.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
</head>

<body>
    <div class="flex-container-background">
        <div class="flex-container">
            <div class="flex-item-0">
                <h1 id="form_header">Your Financial Partner for Every Step of Life.</h1>
            </div>
        </div>

        <div class="flex-container">
            <div class="flex-item-1">
                
                    <div class="flex-item-login">
                        <h2 style="text-align:center;">Welcome</h2>
                    </div>

                    <div class="flex-item">
                        <form method="get" action="users.php">
                           <button type="submit" style="float:right;width:470px;">Money Transfer</button>
                        </form>
                    </div>

                    <div class="flex-item">
					    <form method="get" action="transactions.php">
                           <button type="submit" style="float: right;width:475px;">Transaction History</button>
						</form>
                    </div>

                    
                    </div>
                </form>
            </div>
            <br>
            <br>
        </div>

    </div>
	<div class="foot" style="background-color: rgba(0, 0, 0, 0.2);" >
        <footer class="bg-light text-center text-lg-start">
            <br>
            <!-- Copyright -->
            <div class="text-center p-3" style="margin-top:10px;text-align:center;color:black; font-size:20px; height:100px;">
                © 2023 Copyright - Made by <strong>Swasti Jain</strong> <br>
                Intern at 
                <a class="text-dark" href="https://www.thesparksfoundationsingapore.org/" target="_blank" style="color:black;"> The Sparks
                    Foundation </a>
            </div>
            <!-- Copyright -->
        </footer>
    </div>
</body>
</html>
