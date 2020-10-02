<?php
    require_once("includes/db2.php");

    $sql = "SELECT * FROM tennis_record";
    $tennis_record = mysqli_query($conn, $sql);
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
            <li><a class="active">Home</a></li>
            <li><a href="new2.php">New</a></li>
            <li><a href="#shop">TennisWarehouse.com</a></li>
            <li><a href="#atp">ATP.com</a></li>
        </ul>
        <!--Navbar end-->
        
        <!--Content-->
        <div class="row">
            <?php
            while ($t_record = mysqli_fetch_assoc($tennis_record)) {
            ?>
            <div class="col-4">
                <div class="card col-10">
                    <div class="p-name">
                        <span><?php echo $t_record['f_name'];?></span>
                        <div class="link-option">
                            <a href=<?php echo 'edit2.php?id=' . $t_record['id'];?>>edit</a>
                            <a href=<?php echo 'delete2.php?id=' . $t_record['id'];?>>delete</a>
                        </div>
                    </div>
                    <hr>
                    <div class="p-score"><?php echo $t_record['points'];?></div>

                    <table>
                        <tr>
                            <th>Jan</th>
                            <th>Feb</th>
                            <th>Mar</th>
                            <th>Apr</th>
                            <th>May</th>
                            <th>Jun</th>
                            <th>Jul</th>
                            <th>Aug</th>
                            <th>Sept</th>
                            <th>Oct</th>
                            <th>Nov</th>
                            <th>Dec</th>
                        </tr>
                        <tr>
                            <td><?php echo $t_record['jan'];?></td>
                            <td><?php echo $t_record['feb'];?></td>
                            <td><?php echo $t_record['mar'];?></td>
                            <td><?php echo $t_record['apr'];?></td>
                            <td><?php echo $t_record['may'];?></td>
                            <td><?php echo $t_record['jun'];?></td>
                            <td><?php echo $t_record['jul'];?></td>
                            <td><?php echo $t_record['aug'];?></td>
                            <td><?php echo $t_record['sept'];?></td>
                            <td><?php echo $t_record['oct'];?></td>
                            <td><?php echo $t_record['nov'];?></td>
                            <td><?php echo $t_record['december'];?></td>

                        </tr>
                    </table>
                </div>
            </div>
            <?php
            }
            mysqli_free_result($tennis_record);
            ?>
        </div>
            
        <div class="row">
            <?php
            while ($t_record = mysqli_fetch_assoc($tennis_record)) {
            ?>

            <table>
                <tr>
                    <th>Options</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Jan</th>
                    <th>Feb</th>
                    <th>Mar</th>
                    <th>Apr</th>
                    <th>May</th>
                    <th>Jun</th>
                    <th>Jul</th>
                    <th>Aug</th>
                    <th>Sept</th>
                    <th>Oct</th>
                    <th>Nov</th>
                    <th>Dec</th>
                </tr>
                <tr>
                
                    <td>
                        <a href=<?php echo 'edit2.php?id=' . $t_record['id'];?>>edit</a>
                        <a href=<?php echo 'delete2.php?id=' . $t_record['id'];?>>delete</a>
                    </td>
                    <td><?php echo $t_record['f_name'];?></td>

                    <td><?php echo $t_record['jan'];?></td>
                    <td><?php echo $t_record['feb'];?></td>
                    <td><?php echo $t_record['mar'];?></td>
                    <td><?php echo $t_record['apr'];?></td>
                    <td><?php echo $t_record['may'];?></td>
                    <td><?php echo $t_record['jun'];?></td>
                    <td><?php echo $t_record['jul'];?></td>
                    <td><?php echo $t_record['aug'];?></td>
                    <td><?php echo $t_record['sept'];?></td>
                    <td><?php echo $t_record['oct'];?></td>
                    <td><?php echo $t_record['nov'];?></td>
                    <td><?php echo $t_record['december'];?></td>

                </tr>
            </table>
            <?php
            }
            mysqli_free_result($tennis_record);
            ?>

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
<?php require_once("includes/footer2.php")?>