<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		Schools
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('owl.carousel');
		echo $this->Html->css('bootstrap.min');
		// echo $this->Html->css('materialize.min');
		echo $this->Html->css('animate');
		echo $this->Html->css('schools');
		echo $this->Html->script('jquery-2.2.0.min');
		echo $this->Html->script('bootstrap.min');
		echo $this->Html->script('parallax');
		echo $this->Html->script('scrollTo');
		echo $this->Html->script('viewportchecker');
		echo $this->Html->script('clubs');
		echo $this->Html->script('owl.carousel.min');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=0.7, user-scalable=no">
</head>
<body>
	<div class="loader"></div>
	<div id="container">
		<div id="header">
			<div onclick="$('body').scrollTo('#home',1500);" id="logo"></div>
			<div id="clubs" class="menu_web"></div>
			<div onclick="$('body').scrollTo('#plan_btn',1500,{offset:-750});" class="menu_item menu_web hw_men">HOW IT WORKS</div>
			<div onclick="$('body').scrollTo('#chrome',1500);" class="menu_item menu_web ap_men">APPLY</div>
			<div onclick="$('body').scrollTo('#fan_pass',1500,{offset:-150});" class="menu_item menu_web wh_men">WHAT IS FAN PASS</div>
			<div onclick="window.open('http://www.fanpass.co.nz/','_blank')" class="menu_item menu_web fp_men">GO TO FAN PASS</div>
			<div id="burger"></div>
			<div id="menu_movil">
				<div onclick="window.open('http://www.fanpass.co.nz/','_blank')" class="menu_movil">GO TO FAN PASS</div>
				<div onclick="$('body').scrollTo('#fan_pass',1500,{offset:-150});" class="menu_movil">WHAT IS FAN PASS</div>
				<div onclick="$('body').scrollTo('#chrome',1500);" class="menu_movil">APPLY</div>
				<div onclick="$('body').scrollTo('#plan_btn',1500,{offset:-250});" class="menu_movil">HOW IT WORKS</div>
			</div>
		</div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer_2">
			<div id="footer_mask">
				<div id="rights"></div>
				<ul style="margin-left: 10px;">
					<li><a href="<?php echo $this->webroot; ?>about">ABOUT US</a></li>
					<li><a href="<?php echo $this->webroot; ?>contact">CONTACT US</a></li>
					<li><a href="<?php echo $this->webroot; ?>faq">FAQ</a></li>
				</ul>
				<div id="clubs_2"></div>
			</div>
		</div>

		<script type="text/javascript">
		$( window ).load(function() {
          $(".loader").css("display", 'none');
      });

			$('#burger').click(function(event) {
				if($('#menu_movil').hasClass('in')){
					$('#menu_movil').css('display', 'none');
					$('#menu_movil').removeClass('in');
					$('#header').css('height', '50px');
				}else{
					$('#menu_movil').css('display', 'block');
					$('#menu_movil').addClass('in');
					$('#header').css('height', 'initial');
				}
			});
		</script>


	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
