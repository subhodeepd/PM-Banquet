<?php
session_start();
if(!isset($_SESSION["username"])) {
header('Location:index.php'); }
error_reporting(0);
require("base.php");
require("navbar.php");
if(!isset($_SESSION["username"])) {
$_SESSION['msg']= "Welcome to PM Banquet.! Good day .!";}
?>
<html>
    <head>
        <script type="text/javascript">
            $(document).ready(function(){
    $('.collapsible').collapsible({
      accordion : true // A setting that changes the collapsible behavior to expandable instead of the default accordion style
    });
  });
  </script>
    </head>
    <body class="landing">
        <div class="container">
            <a class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">add</i></a>
            <a class="waves-effect waves-light btn modal-trigger" href="#modal3">Modal Bottom Sheet Style</a>
 
     
        <div id="modal3" class="modal bottom-sheet">
          <div class="modal-content">
            <h4>Modal Header</h4>
            <ul class="collection">
              <li class="collection-item avatar">
                <img src="images/yuna.jpg" alt="" class="circle">
                <span class="title">Title</span>
                <p>First Line <br>
                   Second Line
                </p>
                <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
              </li>
              <li class="collection-item avatar">
                <i class="material-icons circle">folder</i>
                <span class="title">Title</span>
                <p>First Line <br>
                   Second Line
                </p>
                <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
              </li>
              <li class="collection-item avatar">
                <i class="material-icons circle green">assessment</i>
                <span class="title">Title</span>
                <p>First Line <br>
                   Second Line
                </p>
                <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
              </li>
              <li class="collection-item avatar">
                <i class="material-icons circle red">play_arrow</i>
                <span class="title">Title</span>
                <p>First Line <br>
                   Second Line
                </p>
                <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
              </li>
            </ul>
          </div>
        </div>
            <ul class="collapsible" data-collapsible="accordion">
    <li>
      <div class="collapsible-header"><i class="material-icons">filter_drama</i>First</div>
      <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">place</i>Second</div>
      <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">whatshot</i>Third</div>
      <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
    </li>
  </ul>
      </div>
        
        
            
    </body>
</html>