<?php
    include('server3.php');
    if (!isset($_SESSION['username'])) {
        header('Location: login.php');
    } 
    
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
            <li><a href="welcome.php">Home</a></li>
            <li><a class="active">Points</a></li>
            <li><a href="new2.php">New</a></li>
            <li><a href="" onclick="pageUnderConstruction()">Photos</a></li>
            <li><a href="#shop">TennisWarehouse.com</a></li>
            <li><a href="#atp">ATP.com</a></li>
            <?php if (!isset($_SESSION['username'])): ?>
                <li class="login"><a href="login.php">Login</a></li>
            <?php endif ?>

            <?php if (isset($_SESSION['username'])): ?>
                <li class="login "><a href="welcome.php?logout='1'" style="color: red;">Logout</a></li>
                <li class="login welcome">Welcome <strong><?php echo $_SESSION['username']; ?></li>
            <?php endif ?>
        </ul>
        <!--Navbar end-->
        
        <!--Content-->
        <div class="row table_responsive">
            <table>
                <tr>
                    <th>Options</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Total</th>
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

                <?php
                while ($t_record = mysqli_fetch_assoc($tennis_record)) {
                ?>

                    <tr>
                        <?php if (isset($_SESSION['admin'])): ?>
                            <td>
                                <a href=<?php echo 'edit2.php?id=' . $t_record['id'];?>>edit</a>
                                <a href=<?php echo 'delete2.php?id=' . $t_record['id'];?>>delete</a>
                            </td>
                        <?php else: ?>
                            <td>           
                                N/A
                            </td>
                        <?php endif ?>
                        <td><?php echo $t_record['f_name'];?></td>
                        <td><?php echo $t_record['l_name'];?></td>
                        <td><?php echo $t_record['total']?></td>
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

                <?php
                }
                mysqli_free_result($tennis_record);
                ?>
            </table>
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
<?php require_once("includes/footer2.php")?>