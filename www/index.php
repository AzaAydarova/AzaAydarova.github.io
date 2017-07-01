<!DOCTYPE html>
<html lang="en">
  <head>
    <?php 
    	$title = "Freelancer";
    	require_once "app/head.php";
    ?>
  </head>
<body>

<?php
	ini_set('error_reporting', E_ALL);
	ini_set('display_errors', 1);
	ini_set('display_startup_e', 1);
?>


<?php require_once "app/header.php" ?>

 
 <div class="container">
      <div class="content">
        <div class="row">
          <div class="col-md-4">          
           <div class="article">
              <h4>PEACE<br>OF MIND<span>.</span></h4>
              <p>You’re safe with us. The privacy and<br>security of your financial information<br>is our top priority.</p>
              <a href="#">MORE <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="article">
              <h4>FREE<span>.</span><br>ACTUALLY FREE</h4>
              <p>No more pricing grids. No more fine<br>print. Sending and receivin cash is<br>free without gimmicks.</p>
              <a href="#">MORE <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="article">
              <h4>SIMPLE<br>PAYMENTS<span>.</span></h4>
              <p>The same debit card you use to buy<br>coffee lets deposit money staight to<br>your bank account.</p>
              <a href="#">MORE <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
            </div>
          </div>       
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="portfolio">
              <img src="public/img/port.png">
            </div>
          </div>
          <div class="col-md-6">
            <div class="portfolio">
              <h3>PORTFOLIO<span>.</span></h3>
              <h5>We are small, but strong team</h5>
              <p>No more pricing grids. No more fine print.<br>Sendinng and receving cash is free without gimmicks.</p> 
              <p class="p">The same debit card you use to buy coffee lets<br>deposit money straight to your bank account.</p>
              <a href="#">MORE <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
            </div>
           </div>
        </div>
        <div class="row">
          <div class="col-md-12"> 
            <h4>OUR TEAM<span>.</span></h4>
            <p>They are big, but still friendly.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"> 
            <div class="about">
              <a href="about-ma.php" class="about-link-img" rel="external"><img src="public/img/1.png"></a>
              <p class="p-1"><a href="about-ma.php" rel="external">MARIE</a></p>
              <p class="p-2">Web designer</p>
              <p>Animals lover. PS and Sketch master. Vegan.</p>                   
            </div>
          </div>
          <div class="col-md-4">
            <div class="about"> 
              <a href="about-j.php" rel="external" class="about-link-img"><img src="public/img/3.png"></a>
              <p class="p-1"><a href="about-j.php" rel="external">JOEY</a></p>
              <p class="p-2">Web developer</p>
              <p>Coffee lover. Always on bike. iPhone fan.</p>     
            </div>
          </div>
          <div class="col-md-4"> 
            <div class="about">
              <a href="about-mi.php" class="about-link-img" rel="external"><img src="public/img/2.png"></a>
              <p class="p-1"><a href="about-mi.php" rel="external">MIKE</a></p>
              <p class="p-2">Copywriter</p>
              <p>MTB biker. Rock fan. Loving Father.</p>
            </div>
          </div>        
        </div>
        <div class="row">
          <div class="col-md-10"></div>
            <div class="col-md-2">
              <div class="about-link"><a href="#">MORE <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></div>
            </div>
          </div>
        </div>
      </div>
    </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript">
  		/* <![CDATA[ */
    	function externalLinks() {
    		links = document.getElementsByTagName("a");
    		for (i=0; i<links.length; i++) {
   		 	  link = links[i];
    		  if (link.getAttribute("href") && link.getAttribute("rel") == "external")
    		  link.target = "_blank";
    		}
    	}
   		window.onload = externalLinks;
  		/* ]]> */ 
 	</script>



<?php require_once "app/footer.php" ?>

</body>
</html>