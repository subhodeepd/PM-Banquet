<?php
$id = $_GET['var'];
?>
<html>
    <head>
        <title>PM - Food Order Estimation</title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
        <link rel="stylesheet" href="assets/material/css/materialize.min.css">
        <link rel="stylesheet" href="assets/material/css/jquery-ui.min.css">
        <link rel="stylesheet" href="assets/material/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/material/css/style.css">
    </head>

    <body class="landing">
        <nav>
            <div class="nav-wrapper">
0
                <ul class="left hide-on-med-and-down">
                    <li><a href="index.php">PM Banquet</a></li>
                </ul>

                <ul class="right hide-on-med-and-down">
                    <li><a href="index.php"><i class="small material-icons left">home</i>Home</a></li>
                    <li><a href="foodService.php">Food</a></li>
                    <li><a href="event.php">Allied Service</a></li>
                    <li><a href="contact.php">Help</a></li>
                </ul>
            </div>
        </nav>

        <div class="container">
            <div class="row">
                <div class="col s12">
                    <ul class="tabs">
                        <li class="tab col s3"><a class="active" href="#test1">Hi-Tea</a></li>
                        <li class="tab col s3"><a href="#test2">Veg-Meal</a></li>
                    </ul>
                </div>



                <div id="test1" class="col s12">
                    <form action="foodEstimation.php?var=<?php echo $id;?>" method="POST">
                        <div class="container">
                            <header class='center'>
                                <h4>High-Tea</h4>
                                <p>Per Person It costs Rs.100</p>
                            </header>
                            <div class="row">
                                <?php
                                $conn = mysql_connect("localhost", "root", "");
                                mysql_select_db("PM_Banq", $conn);
                                $qry = "SELECT * FROM food_master  WHERE category='Hi-Tea'";
                                $result = mysql_query($qry, $conn);
                                while ($row = mysql_fetch_assoc($result)) {
                                    $himenu[] = $row;
                                }
                                if (!empty($himenu)) {
                                    foreach ($himenu as $key => $value) {
                                        ?>
                                        <div class="col s6">
                                            <ul class="collection">
                                                <li class="collection-item">
                                                    <input class="single-checkbox" type='checkbox' id='<?php echo $himenu[$key]["food_name"]; ?>' value='<?php echo $himenu[$key]["food_name"]; ?>' name='hiTea_order[]' >
                                                    <label for='<?php echo $himenu[$key]["food_name"]; ?>'><?php echo $himenu[$key]["food_name"]; ?></label></li>
                                                </li>
                                            </ul>            
                                        </div>
                                    <?php }unset($resultst);
                                }
                                ?>

                            </div>

                            <div class="row">

                                <div class="input-field col s6">
                                    <button type="submit" name="HiTea" class="waves-effect waves-light btn-large">Book</button>
                                    <button type="reset" class="waves-effect waves-light btn-large">Reset</button>
                                </div>
                            </div>

                        </div>

                    </form>

                </div>







                <div id="test2" class="col s12">
                    <form action="foodEstimation.php?var=<?php echo $id;?>" method="POST">
                        <div class="container">
                            <header class='center'>
                                <h3>Veg-Meal</h3>
                                <p>Per Person it Costs 300</p>
                                <h4>Appetizer</h4>
                                
                            </header>
                            <div class="row">

                                <?php
                                $conn = mysql_connect("localhost", "root", "");
                                mysql_select_db("PM_Banq", $conn);
                                $query = "SELECT * FROM food_master WHERE category LIKE 'Veg-Meal (Appetizers)'";
                                $rslt = mysql_query($query, $conn);
                                while ($rw = mysql_fetch_assoc($rslt)) {
                                    $resultst[] = $rw;
                                }
                                if (!empty($resultst)) {
                                    foreach ($resultst as $key => $value) {
                                        ?>
                                        <div class="col s6">
                                            <ul class="collection">
                                                <li class="collection-item">
                                                    <input class="single-checkbox" type='checkbox' id='<?php echo $resultst[$key]["food_name"]; ?>' value='<?php echo $resultst[$key]["food_name"]; ?>' name='appe_order[]' >
                                                    <label for='<?php echo $resultst[$key]["food_name"]; ?>'><?php echo $resultst[$key]["food_name"]; ?></label></li>
                                                </li>
                                            </ul>            
                                        </div>
                                    <?php }unset($resultst);
                                }
                                ?>
                            </div>



                            <header class='center'>
                                <h4>First Course</h4>
                            </header>
                            <div class="row">

                                <?php
                                $conn = mysql_connect("localhost", "root", "");
                                mysql_select_db("PM_Banq", $conn);
                                $query = "SELECT * FROM food_master WHERE category LIKE 'Veg-Meal (First Course)'";
                                $rslt = mysql_query($query, $conn);
                                while ($rw = mysql_fetch_assoc($rslt)) {
                                    $resultst[] = $rw;
                                }
                                if (!empty($resultst)) {
                                    foreach ($resultst as $key => $value) {
                                        ?>
                                        <div class="col s6">
                                            <ul class="collection">
                                                <li class="collection-item"><input type='checkbox' id='<?php echo $resultst[$key]["food_name"]; ?>' value='<?php echo $resultst[$key]["food_name"]; ?>' name='first_order[]' >
                                                    <label for='<?php echo $resultst[$key]["food_name"]; ?>'><?php echo $resultst[$key]["food_name"]; ?></label></li>
                                            </ul>            
                                        </div>
                                    <?php }unset($resultst);
                                }
                                ?>
                            </div>




                            <header class='center'>
                                <h4>Main Course</h4>
                            </header>
                            <div class="row">

                                <?php
                                $conn = mysql_connect("localhost", "root", "");
                                mysql_select_db("PM_Banq", $conn);
                                $query = "SELECT * FROM food_master WHERE category LIKE 'Veg-Meal (Main Course)'";
                                $rslt = mysql_query($query, $conn);
                                while ($rw = mysql_fetch_assoc($rslt)) {
                                    $resultst[] = $rw;
                                }
                                if (!empty($resultst)) {
                                    foreach ($resultst as $key => $value) {
                                        ?>
                                        <div class="col s6">
                                            <ul class="collection">
                                                <li class="collection-item"><input type='checkbox' id='<?php echo $resultst[$key]["food_name"]; ?>' value='<?php echo $resultst[$key]["food_name"]; ?>' name='main_order[]' >
                                                    <label for='<?php echo $resultst[$key]["food_name"]; ?>'><?php echo $resultst[$key]["food_name"]; ?></label></li>
                                            </ul>            
                                        </div>
                                    <?php }unset($resultst);
                                }
                                ?>
                            </div>






                            <header class='center'>
                                <h4>Dessert</h4>
                               
                            </header>
                            <div class="row">

                                <?php
                                $conn = mysql_connect("localhost", "root", "");
                                mysql_select_db("PM_Banq", $conn);
                                $query = "SELECT * FROM food_master WHERE category LIKE 'Veg-Meal (Dessert)'";
                                $rslt = mysql_query($query, $conn);
                                while ($rw = mysql_fetch_assoc($rslt)) {
                                    $resultst[] = $rw;
                                }
                                if (!empty($resultst)) {
                                    foreach ($resultst as $key => $value) {
                                        ?>
                                        <div class="col s6">
                                            <ul class="collection">
                                                <li class="collection-item"><input type='checkbox' id='<?php echo $resultst[$key]["food_name"]; ?>' value='<?php echo $resultst[$key]["food_name"]; ?>' name='dessert_order[]' >
                                                    <label for='<?php echo $resultst[$key]["food_name"]; ?>'><?php echo $resultst[$key]["food_name"]; ?></label></li>
                                            </ul>            
                                        </div>
                                    <?php }unset($resultst);
                                }
                                ?>
                            </div>
                            <div class="row">

                                <div class="input-field col s6 center">
                                    <button type="submit" name="veg_book" class="waves-effect waves-light btn-large">Book</button>
                                    <button type="reset" class="waves-effect waves-light btn-large">Reset</button>
                                </div>
                            </div>
                        </div>

                    </form>

                </div>
            </div>

        </div>




        <script type="text/javascript" src="assets/material/js/jquery.min.js"></script>
        <script type="text/javascript" src="assets/material/js/jquery-ui.min.js"></script>
        <script type="text/javascript" src="assets/material/js/materialize.min.js"></script>
        <script type="text/javascript" src="assets/material/js/ajax.js"></script>
        <script type="text/javascript" src="assets/material/js/style.js"></script>
        <script type="text/javascript" src="assets/material/js/custom.js"></script>
        <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

        <script>
            $(document).ready(function () {
                var limit = 3;
                $('input.single-checkbox').on('change', function (evt) {
                    if ($(this).siblings(':checked').length >= limit) {
                        this.checked = false;
                    }
                });
            });
        </script>
    </body>
</html>