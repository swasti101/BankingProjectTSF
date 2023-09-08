<?php
include "header.php";
include "navbar.php";
include "connect.php";
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
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
      <title>FinancialHub</title>
      <link rel="stylesheet" href="css/style3.css">
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
  </head>

    <body>
      <div style="background-color:rgba(255,182,193,0.15);">
      <br>
      <class class="welcome">
        <h2 style="text-align:center; font-family: 'Times New Roman', serif;">
          <strong >Transaction History</strong> 
        </h2>
      </class>
      <br>

        <div class="table-responsive-sm">
           <table class="table table-hover table-striped">
               <thead style="color : black;" class="table-danger">
                  <tr>
                     <th class="text-center">S.No.</th>
                     <th class="text-center">Sender</th>
                     <th class="text-center">Receiver</th>
                     <th class="text-center">Amount</th>
                     <th class="text-center">Date & Time</th>
                 </tr>
             </thead>
        
             <tbody>
                 <?php
                  include 'connect.php';

                  $sql ="SELECT * FROM transactions";
                  $query =mysqli_query($conn, $sql);

                  while($rows = mysqli_fetch_assoc($query))
                     {
                       ?>
                       <tr style="color : black;">
                       <td class="text-center py-2"><?php echo $rows['s.no']; ?></td>
                       <td class="text-center py-2"><?php echo $rows['sender']; ?></td>
                       <td class="text-center py-2"><?php echo $rows['receiver']; ?></td>
                       <td class="text-center py-2">Rs. <?php echo $rows['amount']; ?> </td>
                       <td class="text-center py-2"><?php echo $rows['datetime']; ?> </td>
        
                <?php
                    }
                ?>

            </tbody>
      </table>

     </div>
    </div>

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

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
              integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
              crossorigin="anonymous"></script>
            </div>
    </body>
</html>
