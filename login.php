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
            <li><a href="welcome.php">Home</a></li>
            <li><a href="index2.php">Points</a></li>
            <li><a href="new2.php">New</a></li>
            <li><a href="#shop">TennisWarehouse.com</a></li>
            <li><a href="#atp">ATP.com</a></li>
            <li class="active login"><a href="login.php">Login</a></li>
        </ul>
        <!--Navbar end-->

        <!--Content-->
        <div class="row">
            <div class="card col-2">
                <div>
                    <h2>Login</h2>
                </div>

                <form method="post" action="login.php">
                    <!-- display validation errors here -->
                    <?php include('errors3.php'); ?>
                    <div class="input-group">
                        <label>Username</label>
                        <input type="text" name="username">
                    </div>
                    <div class="input-group">
                        <label>Password</label>
                        <input type="password" name="password">
                    </div>
                    <div class="input-group">
                        <button type="submit" name="login" class="btn">Login</button>
                    </div>

                    <p>
                        Not yet a member? <a href="register3.php">Sign up</a>
                    </p>
                </form>
            </div>
        </div>
        <!--Content end-->
        <script>

        </script>
    </body>
    <footer>
        <hr>
        <code>Copyright &copy 2020 Michael Sun</code>
    </footer>
</html>
