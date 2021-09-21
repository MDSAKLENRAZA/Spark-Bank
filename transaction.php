<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer History</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link href="css/style.css" rel="stylesheet">

    <style>
        .container-fuild {
            background-color:  #99ccff;
            height: 651px;
            margin-bottom: 0px;
            padding-top: 100px;
        }

        .container {
            background-color: #808080;
            padding-top: 25px;
        }

        h2 {
            color: #000;
        }
        th {
            text-align: white;

        }
        table:hover{
            color: red;
        }
    </style>
</head>

<body>

    <?php
    include 'navbar.php';
    ?>

    <div class="container-fuild">
        <div class="container">
            <h2 class="text-center pt-4">Transaction History</h2>

            <br>
            <div class="table-responsive-sm">
                <table class="table table-hover table-striped table-condensed table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center text-white">Sender</th>
                            <th class="text-center text-white">Receiver</th>
                            <th class="text-center text-white">Amount</th>
                            <th class="text-center text-white">Date & Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        include 'config.php';

                        $sql = "select * from transaction";

                        $query = mysqli_query($conn, $sql);

                        while ($rows = mysqli_fetch_assoc($query)) {
                        ?>

                            <tr>
                                <td class="py-2"><?php echo $rows['sender']; ?></td>
                                <td class="py-2"><?php echo $rows['receiver']; ?></td>
                                <td class="py-2"><?php echo $rows['balance']; ?> </td>
                                <td class="py-2"><?php echo $rows['datetime']; ?> </td>
                            </tr>

                            <?php
                        }

                            ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
   

   <br>

<!------------------------------footer------------------------------>

   <!-------Footer------>
  <div class="footer-dark">
    <footer>
      <div class="container-fluid bottom-fixed bg-dark ">
        
        <div class="text-center">
<p><a class=" text-white-50" href="https://internship.thesparksfoundation.info/">WEB DEVELOPEMENT & DESIGNING INTERN @THE SPARK FOUNDATION </a> </p>
        </div>
        <div class="col item social">
            <p class="copyright text-white-50">Follow Link</p>
          <a href="https://www.facebook.com/profile.php?id=100008154486801"><i class="icon ion-social-facebook"></i></a>
          <a href="https://www.linkedin.com/in/satish-kumar-5a60b0146/"><i class="icon ion-social-linkedin"></i></a>
          <a href="https://www.youtube.com/watch?v=RXddGTqT_ig"><i class="icon ion-social-youtube"></i></a>
          <a href=""><i class="icon ion-social-github"></i></a>
          <a href="https://mobile.twitter.com/Satishmonu2"><i class="icon ion-social-twitter"></i></a>
        </div>
        <p class="copyright text-center text-white-50 py-3">© 2021 Copyright:
    Made with ❤️ by <b>Er Satish Kumar(UCET-IT)</b></p>
      </div>
       
  <!-- Copyright -->
    </footer>
  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>