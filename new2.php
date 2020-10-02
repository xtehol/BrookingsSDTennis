<?php
    include('server3.php');
    if (!isset($_SESSION['username']) || !isset($_SESSION['admin'])) {
        header('Location: login.php');
    }

    require_once("includes/db2.php");
    require_once("includes/functions2.php");

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $f_name = prep_input($_POST["f_name"]);
        $l_name = prep_input($_POST["l_name"]);
        $jan = prep_input($_POST["jan"]);
        $feb = prep_input($_POST["feb"]);
        $mar = prep_input($_POST["mar"]);
        $apr = prep_input($_POST["apr"]);
        $may = prep_input($_POST["may"]);
        $jun = prep_input($_POST["jun"]);
        $jul = prep_input($_POST["jul"]);
        $aug = prep_input($_POST["aug"]);
        $sept = prep_input($_POST["sept"]);
        $oct = prep_input($_POST["oct"]);
        $nov = prep_input($_POST["nov"]);
        $december = prep_input($_POST["december"]);
        $total = prep_input($_POST["total"]);

        $sql = "INSERT INTO tennis_record (f_name, l_name, jan, feb, mar, apr, may, jun, jul, aug, sept, oct, nov, december, total) VALUES ('";
        $sql .= $f_name . "','" . $l_name . "','";
        $sql .= $jan . "','" . $feb . "','" . $mar . "','" . $apr . "','" . $may . "','" . $jun . "','";
        $sql .= $jul . "','" . $aug . "','" . $sept . "','" . $oct . "','" . $nov . "','" . $december . "','" . $total ."')";
        
        if (mysqli_query($conn, $sql)) {
            echo "Successfully save into the database";
        } else {
            echo "Failed to save to the database";
        }
    }
?>

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
            <li><a class="active" href="#new">New</a></li>
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
        <div class="row" >
            <div class="card col-4 newplayer">
                <form action="new2.php" method="post">
                    <label for="f_name">First Name:</label>
                    <input type="text" placeholder="first name" name="f_name" required>
                    <br>

                    <label for="l_name">Last Name:</label>
                    <input type="text" placeholder="last name" name="l_name" required>
                    <br><br>

                    <!--Calendar year-->
                    
                    <label for="jan">Jan=</label>
                    <input type="number" id="jan" name="jan" value="0"><br>
                    
                    <label for="feb">Feb=</label>
                    <input type="number" id="feb" name="feb" value="0"><br>

                    <label for="mar">Mar=</label>
                    <input type="number" id="mar" name="mar" value="0"><br>

                    <label for="apr">Apr=</label>
                    <input type="number" id="apr" name="apr" value="0"><br>

                    <label for="may">May=</label>
                    <input type="number" id="may" name="may" value="0"><br>

                    <label for="jun">Jun=</label>
                    <input type="number" id="jun" name="jun" value="0"><br>

                    <label for="jul">Jul=</label>
                    <input type="number" id="jul" name="jul" value="0"><br>

                    <label for="aug">Aug=</label>
                    <input type="number" id="aug" name="aug" value="0"><br>

                    <label for="sept">Sept=</label>
                    <input type="number" id="sept" name="sept" value="0"><br>

                    <label for="oct">Oct=</label>
                    <input type="number" id="oct" name="oct" value="0"><br>

                    <label for="nov">Nov=</label>
                    <input type="number" id="nov" name="nov" value="0"><br>

                    <label for="december">Dec=</label>
                    <input type="number" id="december" name="december" value="0">
                    <br><br>
                    
                    <input type="hidden" id="total" name="total" value="">

                    <!--Calendar year end-->
                    
                    <input class="btn" type="submit" value="Submit" onclick="getTotal();">
                </form>
            </div>
        </div>
        <!--Content end-->

        <script>
            function getTotal() {
                var arr2 = parseInt(document.getElementById('jan').value);
                arr2 += parseInt(document.getElementById('feb').value);
                arr2 += parseInt(document.getElementById('mar').value);
                arr2 += parseInt(document.getElementById('apr').value);
                arr2 += parseInt(document.getElementById('may').value);
                arr2 += parseInt(document.getElementById('jun').value);
                arr2 += parseInt(document.getElementById('jul').value);
                arr2 += parseInt(document.getElementById('aug').value);
                arr2 += parseInt(document.getElementById('sept').value);
                arr2 += parseInt(document.getElementById('oct').value);
                arr2 += parseInt(document.getElementById('nov').value);
                arr2 += parseInt(document.getElementById('december').value);

                document.getElementById('total').value = arr2;
            }
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
<?php require_once("includes/footer2.php")?>