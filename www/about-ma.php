<!DOCTYPE html>
<html lang="en">
  <head>
    <?php 
      $title = "Freelancer - Marie";
      require_once "app/head.php";
    ?>
  </head>
<body>

<?php require_once "app/main-menu.php" ?>

<div class="m-row">
  <div class="row">
    <div class="col-md-6">
      <div class="information-about">
        <img src="public/img/1.png">
      </div>
    </div>
    <div class="col-md-6">
      <div class="information-about">
        <h5>MARIE</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate.</p>
      </div>
    </div>
  </div>
</div>  

<div class="row">
  <div class="col-md-12">
    <div class="information-about-link">
      <a href="index.php">BACK TO MAIN PAGE<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
    </div>
  </div>
</div>


<?php require_once "app/footer.php" ?> 



</body>
</html>