<!DOCTYPE html >
<html lang="<?php echo $lang; ?>">
<head>
  <title><?php if(x($page,'title')) echo $page['title'] ?></title>
  <script>var baseurl="<?php echo $a->get_baseurl() ?>";</script>
  <?php if(x($page,'htmlhead')) echo $page['htmlhead'] ?>
</head>
<body <?php if($a->module === 'home') echo 'onLoad="setTimeout(\'homeRedirect()\', 1500)"'?>>
	<?php if(x($page,'nav')) echo $page['nav']; ?>

	<?php if( $a->module === 'home' ) { ?>
	<center>
	<div class="login-button">
	<a href="login" class="login-button-link"><img class="login-button-image" src="images/friendica-1600.png" title="Click to log in"></a>
	</div>
	</center>

	<?php } elseif ( $a->module === 'login' || $a->module === 'register' || $a->module === 'lostpass' ) {
	?>
	<div class='section-wrapper'>
	<section><?php if(x($page,'content')) echo $page['content']; ?>
	</section>
	</div>
	<footer><?php if(x($page,'footer')) echo $page['footer']; ?></footer>

	<?php } else { ?>
	<div class='main-container'>
<!--		<div class='main-content-container'>-->
		<div class='section-wrapper'>
		<?php if( ($a->module === 'settings' || $a->module === 'message' || $a->module === 'profile') && x($page,'aside')) echo $page['aside']; ?>
		<section>
			<?php if(x($page,'content')) echo $page['content']; ?>
			<div id="pause"></div> <!-- The pause/resume Ajax indicator -->
			<div id="page-footer"></div>
		</section>
		</div>
		<right_aside><?php if(x($page,'right_aside')) echo $page['right_aside']; ?></right_aside>
		<?php if( ($a->module === 'contacts') && x($page,'aside')) echo $page['aside']; ?>
		<footer><?php if(x($page,'footer')) echo $page['footer']; ?></footer>
<!--		</div>-->
	</div>
	<?php } ?>
	<?php if(x($page,'end')) echo $page['end']; ?>
</body>
</html>
