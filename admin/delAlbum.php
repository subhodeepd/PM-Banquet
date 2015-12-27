<?php
session_start();
if (!isset($_SESSION["username"])) {
    header('Location:index.php');
}
error_reporting(0);
require("base.php");
require("navbar.php");
?>

<html>
    <head>
        <title>PM - Delete Service </title>

        <script type="text/javascript">
            $(function () {

                //autocomplete
                $(".auto").autocomplete({
                    source: "search.php",
                    minLength: 1
                });
            });
        </script>

    </head>
    <body class="landing">
        <div class="container">
            <header class="center">
                <h2>Select Album</h2>
            </header>	

            <form method="POST" action="DBHandler.php" class="col s12"  >
                <div class="row">
                    <div class="input-field col s6">
                        <select name="Album_id" id="album_name" >		
                            <?php
                            $conn = mysql_connect("localhost", "root", "");
                            mysql_select_db("PM_Banq", $conn);
                            $query = mysql_query("SELECT * FROM album_master");
                            while ($run = mysql_fetch_array($query)) {
                                $id = $run['album_id'];
                                $name = $run['album_name'];

                                echo "<option value='$id'>$name</option>";
                            }
                            ?>

                        </select>
                    </div>
                    <div class="input-field col s6">
                        <button type="submit" name="delAlbum" class="waves-effect waves-light btn-large">Delete</button>
                    </div>


                </div>

            </form>
        </div>
    </body>
</html>


