<?php
include 'connect.php';
include "header.php";
include "navbar.php";

if(isset($_POST['submit']))
{
    $from = $_GET['id'];
    $to = $_POST['to'];
    $amount = $_POST['amount'];

    $sql = "SELECT * from customers where id=$from";
    $query = mysqli_query($conn,$sql);
    $sql1 = mysqli_fetch_array($query);

    $sql = "SELECT * from customers where id=$to";
    $query = mysqli_query($conn,$sql);
    $sql2 = mysqli_fetch_array($query);

     //Conditions
    //For negative value
    if (($amount)<0)
    {
        echo '<script type="text/javascript">';
        echo ' alert("Negative value cannot be transferred !")';
        echo '</script>';
    }

    //Insufficient balance
    else if($amount > $sql1['balance']) 
    {
        
        echo '<script type="text/javascript">';
        echo ' alert("Sorry! you have insufficient balance !")';
        echo '</script>';
    }

    //for zero value
    else if($amount == 0){

        echo "<script type='text/javascript'>";
        echo "alert('Zero value cannot be transferred !')";
        echo "</script>";
    }

    else {
        
        // deducting amount from sender's account
        $newbalance = $sql1['balance'] - $amount;
        $sql = "UPDATE customers set balance=$newbalance where id=$from";
        mysqli_query($conn,$sql);
     

        // adding amount to reciever's account
        $newbalance = $sql2['balance'] + $amount;
        $sql = "UPDATE customers set balance=$newbalance where id=$to";
        mysqli_query($conn,$sql);
        
        $sender = $sql1['name'];
        $receiver = $sql2['name'];
        $sql = "INSERT INTO transactions(`sender`, `receiver`, `amount`) VALUES ('$sender','$receiver','$amount')";
        $query=mysqli_query($conn,$sql);

        if($query){
             echo "<script> alert('Hurray! Transaction is Successful');
                             window.location='transactions.php';
                   </script>";
            
        }

        $newbalance= 0;
        $amount =0;
}

}
?>
<!doctype html>
<html lang="en">
<!--<style>
 {
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
    <link rel="stylesheet" href="css/style2.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
</head>
<body>
   <div style="background-color:rgba(245,245,220,0.4)">
    <class class="welcome">
        <h2>
             <strong>Money Transfer</strong> 
        </h2>
    </class>

    <div class="container">
        <h2 class="text-center pt-4" style="color : black;">Customer Details</h2>
            <?php
                include 'connect.php';
                $sid=$_GET['id'];
                $sql = "SELECT * FROM  customers where id=$sid";
                $result=mysqli_query($conn,$sql);
                if(!$result)
                {
                    echo "Error : ".$sql."<br>".mysqli_error($conn);
                }
                $rows=mysqli_fetch_assoc($result);
            ?>
            <form method="post" name="tcredit" class="tabletext" ><br>
        <div>
            <table class="table table-striped table-hover">
                <tr style="color : black;" class="table-primary">
                    <th class="text-center">Account No.(...xxxx)</th>
                    <th class="text-center">Account Name</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Account Balance</th>
                </tr>
                <tr style="color : black;">
                    <td class=" text-center py-2"><?php echo $rows['id'] ?></td>
                    <td class=" text-center py-2"><?php echo $rows['name'] ?></td>
                    <td class=" text-center py-2"><?php echo $rows['email'] ?></td>
                    <td class=" text-center py-2"><?php echo $rows['balance'] ?></td>
                </tr>
            </table>
        </div>
        <br><br><br>
        <label style="color : black;"><b>Transfer To:</b></label>
        <select name="to" class="form-control" required>
            <option value="" disabled selected>Choose Account</option>
            <?php
                include 'connect.php';
                $sid=$_GET['id'];
                $sql = "SELECT * FROM customers where id!=$sid";
                $result=mysqli_query($conn,$sql);
                if(!$result)
                {
                    echo "Error ".$sql."<br>".mysqli_error($conn);
                }
                while($rows = mysqli_fetch_assoc($result)) {
            ?>
            <option class="table" value="<?php echo $rows['id'];?>" >
                
                <?php echo $rows['name'] ;?> (Balance: 
                <?php echo $rows['balance'] ;?> ) 
           
            </option>
            <?php 
                } 
            ?>
            <div>
        </select>
        <br>
        <br>
        <label style="color : black;"><strong>Amount:</strong></label>
            <input type="number" class="form-control" name="amount" required>   
            <br><br>
                <div class="text-center" >
                <button class="btn btn-outline-dark mb-3" name="submit" type="submit" id="myBtn" >Transfer Amount</button>
            </div>
        </form>
    </div> 
    </div>
    
    <!--footer-->

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

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
        crossorigin="anonymous"></script>
    </div>
</body>

</html>
