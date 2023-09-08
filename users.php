<?php
    include "connect.php";
    include "header.php";
    include "navbar.php";
?>

<!doctype html>
<html lang="en">
<!--<style>
body {
  background-image: url('images/contact.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>
-->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
	<title>FinancialHub</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<link rel="stylesheet" href="style2.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="navbar_styles.css">

</head>    

<body style= "background-image: url(images/Money-transfer.jpg); ">

    <?php
    include 'connect.php';
    $sql = "SELECT * FROM customers";
    $result = mysqli_query($conn, $sql);
    ?>




   <div class="overlay" style="background-color: rgba(204, 204, 204, 0.3);">
    <!-- options -->
    <div class="d-grip gap-2 col-6 mx-auto text-center p-3 mb-2">
        <a href="transactions.php"><button type="button" class="btn btn-primary btn-lg mb-3">See all Transaction History</button></a>
    </div>


    <div class="container">
        <div class="row text-center">
            <div class="col text-center">
                <div class="table-responsive-sm">
                    <table class="table table-hover table-striped table-sm">
                        <thead style="color : black;" class="table-danger">
                            <tr>
                                <th scope="col" class="text-center py-2">S.No.</th>
                                <th scope="col" class="text-center py-2">Name</th>
                                <th scope="col" class="text-center py-2">E-Mail</th>
                                <th scope="col" class="text-center py-2">Balance</th>
                                <th scope="col" class="text-center py-2">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($rows = mysqli_fetch_assoc($result)) {
                            ?>
                                <tr style="color : white; background-color : rgba(0,0,0,0.75);">
                                    <td class="text-center py-2">
                                        <?php echo $rows['id'] ?>
                                    </td>
                                    <td class="text-center py-2">
                                        <?php echo $rows['name'] ?>
                                    </td>
                                    <td class="text-center py-2">
                                        <?php echo $rows['email'] ?>
                                    </td>
                                    <td class="text-center py-2">
                                        <?php echo $rows['balance'] ?>
                                    </td>
                                    <td><a href="selecteduserdetails.php?id= <?php echo $rows['id']; ?>"> <button class="btn btn-outline-dark btn" style="background-color : rgb(91, 176, 229);"> Transfer money</button></a></td>
                                </tr>
                            <?php
                            }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

    <!-- footer -->

    <div class="foot" style="background-color: rgba(0, 0, 0, 0.2);">
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


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
</body>

</html>
