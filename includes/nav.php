    <?php

    $nav = [
      "" => "Home",
      "about.php" => "About",
      "#portfolio" => "Portfolio"
    ];


    $link = $_SERVER['REQUEST_URI'];
    $link_array = explode('/',$link);
    $page = end($link_array);

    ?>

    <!-- Static navbar -->
    <div class="navbar navbar-default navbar-fixed-top firstnav" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">Phillip Stoneman</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <!-- <li class="active"><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="index.php#portfolio">Portfolio</a></li> -->
            <?php 
              foreach($nav as $key => $value){
                if (!$isIndex || $key != "index"){
                ?>
            <li class="nav-item <?php if ($page == $key) {?> active<?php } ?>">
              <a class="nav-link" href="/<?php echo $key;?>"><?php echo $value;?></a>
            </li>
                <?php
              }
            }
            ?>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="navbar navbar-default navbar-fixed-top secondnav" role="navigation">
    </div>
