<?php include('server3.php'); ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="name" content="Brookings Tennis">
        <meta name="keywords" contents="Brookings Tennis">

        <link rel="stylesheet" href="styles/style2.css">
    </head>
    <body>
        <!--Navbar-->
        <ul class="topnav">
            <li><a class="active">Home</a></li>
            <li><a href="index2.php">Points</a></li>
            <li><a href="new2.php">New</a></li>
            <li><a href="" onclick="pageUnderConstruction()">Photos</a></li>
            <li><a href="#shop">TennisWarehouse.com</a></li>
            <li><a href="#atp">ATP.com</a></li>
            
            <?php if (!isset($_SESSION['username'])): ?>
                <li class="login"><a href="login.php">Login</a></li>
            <?php endif ?>

            <?php if (isset($_SESSION['username'])): ?>
                <li class="login "><a href="welcome.php?logout='1'" style="color: red;">Logout</a></li>
                <li class="login welcome">Welcome <strong><?php echo $_SESSION['username']; ?></strong></li>
            <?php endif ?>

        </ul>
        <!--Navbar end-->

        <!--Content-->
        <div class="row card1">
            <h1 class="topcenter">Welcome to Brookings Tennis club!</h1>
            <p>Find us on Facebook.com</p>
            <img src="image/tennis_court2.jpg" alt="Hillcrest Tennis Court" height="500" width="auto" >
        </div>
        <div class="row dark">
            <h2>When do we play?</h2>
            <table class="time">
                <tr>
                    <th>Monday:</th>
                    <td>18:00 - 21:00</td>
                </tr>
                <tr>
                    <th>Tuesday:</th>
                    <td>-</td>
                </tr>
                <tr>
                    <th>Wednesday:</th>
                    <td>18:00 - 21:00</td>
                </tr>
                <tr>
                    <th>Thursday:</th>
                    <td>-</td>
                </tr>
                <tr>
                    <th>Friday:</th>
                    <td>-</td>
                </tr>
                <tr>
                    <th>Saturday:</th>
                    <td>14:00 - 17:00</td>
                </tr>
                <tr>
                    <th>Sunday:</th>
                    <td>-</td>
                </tr>
            </table>
            <img src="image/tennis_court.jpg" alt="Tennis Court">
        </div>
        <div class="row">
            <h2>Where do we play?</h2>
            <p>Location: Hillcrest Tennis Courts</p>
            <p>1520 5th St, Brookings, SD 57006</p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5082
                        .752875944657!2d-96.77854705722558!3d44.31024523959054!3m2!
                        1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb2df45391081a321!2sH
                        illcrest%20Tennis%20Courts!5e0!3m2!1sen!2sus!4v16013201975
                        04!5m2!1sen!2sus" width="600" height="450" frameborder="0" 
                        style="border:0;" allowfullscreen="" aria-hidden="false" 
                        tabindex="0"></iframe>
        </div>
        <!--Content end-->
        <script>
        function pageUnderConstruction() {
            alert("\nCOMING SOON..");
        }
        </script>
    </body>
    <footer>
        <hr>
        <code>Copyright &copy 2020 Michael Sun</code>
    </footer>
</html>
