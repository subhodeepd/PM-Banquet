<?php
require("header.php");
?>
<html>
	<head>
		<title>PM - Allied Services </title>
		
                <link rel="stylesheet" href="assets/css/main.css" />
		
	</head>
	<body class="landing">
            <section id="one" class="wrapper style1">
                <div class="inner">
                    <article class="feature left">

                        <div class="content">
                            <h2>Allied Services</h2>
                            <h1>Select a Service</h1>
                            <form method="post">
                                <select name="service" id="service" >		
                                    <?php
                                    $conn = mysql_connect("mysql://$OPENSHIFT_MYSQL_DB_HOST:$OPENSHIFT_MYSQL_DB_PORT/", "adminaQYhir2", "IBEgx-AkNgY3");
mysql_select_db("pm",$conn);
                                    $query = mysql_query("SELECT * FROM allied_master");
                                    while ($run = mysql_fetch_array($query)) {
                                        $name = $run['service_name'];

                                        echo "<option value='$name'>$name</option>";
                                    }
                                    ?>

                                </select>
                                <ul class="actions">
                                    <li>
                                        <button type="submit" class="special" name="ser">Search</button>
                                    </li>
                                </ul>
                        </div>
                    </article>

                </div>
            </section>
            <?php
            if(isset($_POST['ser'])){
            
            $name = $_POST['service'];
            $conn = mysql_connect("mysql://$OPENSHIFT_MYSQL_DB_HOST:$OPENSHIFT_MYSQL_DB_PORT/", "adminaQYhir2", "IBEgx-AkNgY3");
mysql_select_db("pm",$conn);
            $qry = "SELECT * FROM allied_master WHERE service_name='$name'";
            $result = mysql_query($qry,$conn);
            if(!empty($result))
            {
            while($row=  mysql_fetch_assoc($result)) {   ?>
            
            
            <section id="two" class="wrapper special">
                <div class="inner">
                    <header class="major ">
                        <h2><?php echo $row["service_name"];?></h2>
                        <p><?php echo $row["service_desc"];; ?></p>
                    </header>
                </div>
                <span class="image"><img src="data:image/jpg;base64,<?php echo base64_encode($row["service_thumb"]); ?>" alt="" /></span>

            </section>
                <?php } }} require ("footer.php");?>
            