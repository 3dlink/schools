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
		echo $this->Html->css('schools_2');
		echo $this->Html->css('animate');
		echo $this->Html->script('jquery-2.2.0.min');
		echo $this->Html->script('bootstrap.min');
		echo $this->Html->script('scrollTo');
		echo $this->Html->script('viewportchecker');
		echo $this->Html->script('clubs');
		echo $this->Html->script('owl.carousel.min');
		echo $this->Html->script('pekeUpload');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div class="loader"></div>
	<div id="container">
		<div id="header">
			<div onclick="window.location.href='<?php echo $this->webroot;?>'" id="logo"></div>
			<div id="clubs" class="menu_web"></div>
			<div onclick="window.location.href='<?php echo $this->webroot;?>#plan'" class="menu_item menu_web  hw_men">HOW IT WORKS</div>
			<div onclick="window.location.href='<?php echo $this->webroot;?>#chrome'" class="menu_item menu_web  ap_men">APPLY</div>
			<div onclick="window.location.href='<?php echo $this->webroot;?>#fan_pass'" class="menu_item menu_web wh_men">WHAT IS FAN PASS</div>
			<div onclick="window.open('http://www.fanpass.co.nz/','_blank')" class="menu_item menu_web fp_men">GO TO FAN PASS</div>
			<div id="burger"></div>
			<div id="menu_movil">
				<div onclick="window.open('http://www.fanpass.co.nz/','_blank')" class="menu_movil">GO TO FAN PASS</div>
				<div onclick="window.location.href='<?php echo $this->webroot;?>#fan_pass'" class="menu_movil">WHAT IS FAN PASS</div>
				<div onclick="window.location.href='<?php echo $this->webroot;?>#chrome'" class="menu_movil">APPLY</div>
				<div onclick="window.location.href='<?php echo $this->webroot;?>#plan'" class="menu_movil">HOW IT WORKS</div>
			</div>
		</div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
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
