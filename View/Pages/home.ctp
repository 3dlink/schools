<script type="text/javascript">
	$(window).load(function() {
		$('#goodbye').css('height', $('#goodbye img').height());
		$('#zona_verde').css('height', $('#zona_verde img').height());
		$('#chrome').css('height', $('#chrome img').height());
	});
</script>

<section id="home" class="parallax-window" data-parallax="scroll" data-image-src="<?php echo $this->webroot;?>img/home.png">
	<img id="logo_home" src="<?php echo $this->webroot; ?>img/logo_home.png">
	<h1 class="animated">Forget the <br><b>sausage sizzle</b></h1>
	<button class="animated btn_clubs black_trans" onclick="window.location.href='<?php echo $this->webroot;?>apply'">APPLY HERE NOW</button>
	<p>WATCH SPORT, <b>SUPPORT YOUR SCHOOL.</b> <br>IT’S THAT EASY</p>
</section>


<section id="goodbye">
	<img class="fondo_img" src="<?php echo $this->webroot;?>img/basket.jpg">
	<h1 id="title_gb" class="animated"><b>SAY GOOD-BYE</b><br>TO THE GALA</h1>
	<p class="animated">With <b>Fan Pass</b> your school earns<br><b>10% on every subscription</b>your<br>parents and supporters buy.</p>

	<div class="supporters">
		<h1 class="animated" style="color: black;margin-bottom: 50px;">YOUR SUPPORTERS<br><b>GET SPORT FOR LESS</b></h1>
		<p class="animated" style="color: black;">People who sign up <b>from your school</b> get a <b>10%<br> discount on their Fan Pass.</b><br><br>It all adds up to a great deal - for the <br>kids and the sports fans. </p>
	</div>
</section>

<section id="zona_verde">
	<img class="fondo_img" src="<?php echo $this->webroot;?>img/zonaverde.jpg">
	<h1 id="title_zv" class="animated"><b>GO LONG ON SPORT</b></h1>
	<p class="animated"><br><b>Fan Pass</b> puts you in charge of the remote. All you can <br>handle sport. No contracts, no commitment. <b>For as <br>little as $14.99</b> you get all the games you want - and <br>none you don’t. </p>

	<div id="fan_pass" class="supporters">
		<h1 class="animated" style="margin-bottom: 100px;">WHAT’S <b>FAN PASS?</b></h1>
		<p class="animated">You get SKY Sport channels 1, 2, 3, 4 through the <b>Fan <br>Pass</b> website or mobile app. Just buy a pass for a day, <br>a week or a month starting from only $14.99. <br><br>You get the freedom and flexibility to watch sport <br>when you want to, without contracts or long-term <br>commitment. It’s a player’s dream come true.</p>
	</div>
</section>

<section id="chrome">
	<div id="chrome_">
		<img class="fondo_img" src="<?php echo $this->webroot;?>img/abajo_.jpg">
		<h1 id="title_w" class="animated" style="color: black;">WHAT’S IN IT <br><b>FOR YOUR SCHOOL?</b></h1>
		<p class="animated" style="color: black;">Say no to ‘fun’ runs, stop more buying your own cake <br class="brs3">at the bake sale - with <b>FAN PASS</b> your school earns <br class="brs3">money every time parents or supporters buy a pass. <br class="brs3">And your members get <b>FAN PASS</b> for less. <br><b>It’s a WIN-WIN.</b><br class="brs"><br class="brs"><br class="brs"><br><br><br>
		<b class="animated good" style="font-size:20px;font-weight:600;letter-spacing: 2px;">Fundraise just by watching sport. <br>Sound good?, right?</b></p><br class="brs2"><br class="brs"><br class="brs"><br class="brs"><br class="brs2">
		<button class="animated btn_clubs blue_trans" onclick="window.location.href='<?php echo $this->webroot;?>apply'">APPLY HERE NOW</button>
		<div style="clear:both;"></div>
		<img class="animated" id="chromecast" src="<?php echo $this->webroot; ?>img/chromecast.png">
		<div id="bonus">
			<h1 id="title_b" class="animated"><b>BONUS POINT</b></h1>
			<p class="animated"><b>Your school gets a free Google Chromecast for every 100 passes sold to parents or supporters.</b> <br>Chromecast lets you easily stream digital content on your TV or big screen.<br><br><b style="font-size:20px;font-weight:700;">Now that’s something worth raffling.</b></p>
		</div>
	</div>
	<div id="slider">
		<h1 id="title_s" class="animated"><b>SCHOOLS</b><br>ALREADY FUNDRAISING WITH <b>FAN PASS</b></h1>
		<div class="carrusel-margins">
	    <div id="owl-demo-v" class="owl-carousel">
	    	<?php foreach ($others as $key => $value){ ?>
		      <div class="item" style="background-image:url('<?php echo $this->webroot;?>files/<?php echo $value['Logo']['logo'] ?>');">
		        <!-- <img src=""> -->
		      </div>
	    	<?php } ?>
	    	<?php foreach ($logos as $key => $value){?>
		      <div class="item" style="background-image:url('<?php echo $this->webroot;?>files/<?php echo $value['Application']['logo'] ?>');">
		        <!-- <img src="<?php echo $this->webroot;?>files/<?php echo $value['Application']['logo'] ?>"> -->
		      </div>
	    	<?php } ?>
	    </div>
  		<p class="animated over">Over <b>$5,000,000</b> given back to schools!</p>
	   </div>
		<div id="plan_btn">
			<button class="btn_clubs orange_trans" onclick="window.location.href='<?php echo $this->webroot;?>apply'">APPLY HERE NOW</button>
		</div>
</section>



<script type="text/javascript">

	$(window).load(function(){

	})

	$(window).resize(function() {
		if($(window).height()>870)
			$('#home').css('height', $(window).height());

			$('#goodbye').css('height', $('#goodbye img').height());
			$('#zona_verde').css('height', $('#zona_verde img').height());
			$('#chrome').css('height', $('#chrome img').height());
	});

	$(document).ready(function() {

		if($(window).height()>870)
			$('#home').css('height', $(window).height());

    $('.parallax').parallax();

		$('#owl-demo-v').owlCarousel({
	    items:5,
	    loop:true,
	    margin:30,
	    autoplay:true,
	    autoplayTimeout:2000,
	    autoplayHoverPause:true
	  });
	});
</script>
