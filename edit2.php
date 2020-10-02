<?php
    require_once("includes/db2.php");
    require_once("includes/functions2.php");


    if($_SERVER['REQUEST_METHOD'] == "POST") {
        $f_name = prep_input($_POST['f_name']);
        $l_name = prep_input($_POST['l_name']);
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
        $id = prep_input($_POST["id"]);

        $sql = "UPDATE tennis_record SET ";
        $sql .= "f_name = '" . $f_name . "', ";
        $sql .= "l_name = '" . $l_name . "',";
        $sql .= "jan = '" . $jan . "',";
        $sql .= "feb = '" . $feb . "',";
        $sql .= "mar = '" . $mar . "',";
        $sql .= "apr = '" . $apr . "',";
        $sql .= "may = '" . $may . "',";
        $sql .= "jun = '" . $jun . "',";
        $sql .= "jul = '" . $jul . "',";
        $sql .= "aug = '" . $aug . "',";
        $sql .= "sept = '" . $sept . "',";
        $sql .= "oct = '" . $oct . "',";
        $sql .= "nov = '" . $nov . "',";
        $sql .= "december = '" . $december . "',";
        $sql .= "WHERE id = '" . $id . "' ";
        $sql .= "LIMIT 1";

        if(mysqli_query($conn, $sql)) {
            header("Location: index2.php");
        }
    }
    if(!isset($_GET['id'])) {
        header("Location: index2.php");
    }
    $id = $_GET['id'];
    $sql = "SELECT * FROM tennis_record WHERE id =' " . $id . "' LIMIT 1";
    $result = mysqli_query($conn, $sql);
    $t_record = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    
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
            <li><a href="index2.php">Home</a></li>
            <li><a class="active" href="#new">New</a></li>
            <li><a href="#shop">TennisWarehouse.com</a></li>
            <li><a href="#atp">ATP.com</a></li>
        </ul>
        <!--Navbar end-->
        <div class="card">
            <form action="edit2.php" method="post">
                <input type="hidden" name="id" value=<?php echo $t_record['id'];?>>

                <label for="f_name">First Name:</label>
                <input type="text" name="f_name" value=<?php echo $t_record['f_name'];?> required>
                <br>

                <label for="l_name">Last Name:</label>
                <input type="text" name="l_name" value=<?php echo $t_record['l_name'];?> required>
                <br><br>

                <!--Calendar year-->
                <label for="jan">Jan=</label>
                <input type="number" id="jan" name="jan" value=<?php echo $t_record['jan'];?>><br>
                
                <label for="feb">Feb=</label>
                <input type="number" id="feb" name="feb" value=<?php echo $t_record['feb'];?>><br>

                <label for="mar">Mar=</label>
                <input type="number" id="mar" name="mar" value=<?php echo $t_record['mar'];?>><br>

                <label for="apr">Apr=</label>
                <input type="number" id="apr" name="apr" value=<?php echo $t_record['apr'];?>><br>

                <label for="may">May=</label>
                <input type="number" id="may" name="may" value=<?php echo $t_record['may'];?>><br>

                <label for="jun">Jun=</label>
                <input type="number" id="jun" name="jun" value=<?php echo $t_record['jun'];?>><br>

                <label for="jul">Jul=</label>
                <input type="number" id="jul" name="jul" value=<?php echo $t_record['jul'];?>><br>

                <label for="aug">Aug=</label>
                <input type="number" id="aug" name="aug" value=<?php echo $t_record['aug'];?>><br>

                <label for="sept">Sept=</label>
                <input type="number" id="sept" name="sept" value=<?php echo $t_record['sept'];?>><br>

                <label for="oct">Oct=</label>
                <input type="number" id="oct" name="oct" value=<?php echo $t_record['oct'];?>><br>

                <label for="nov">Nov=</label>
                <input type="number" id="nov" name="nov" value=<?php echo $t_record['nov'];?>><br>

                <label for="december">Dec=</label>
                <input type="number" id="december" name="december" value=<?php echo $t_record['december'];?>>
                <br><br>
                <!--Calendar year end-->
                <input type="submit" value="Update">

            </form>
        </div>
        <!--Content

        Content end-->
        <script>

        </script>
    </body>
    <footer>
        <hr>
        <code>Copyright &copy 2020 Michael Sun</code>
    </footer>
</html>