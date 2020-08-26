<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head();?>
</head>
<body>
    <header>
    	<div class="header__container">
    		<div class="header__content">
	    		<div class="header__logo">
	    			<img class="header__logo_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-header.png" alt="logotype">
	    		</div>
	    		<div class="header__text_wrapper">
	    			<span class="header__text">Book of Forest it’s not just an interesting game, but also an exciting world of adventure. You will be able to choose your character, use magic, participate in tournaments, level up and get achievements. Are you curious? Then it's time to leave your mail and you will be the first to know about the grandiose exit of the game. Also on this subscription your first bonus will be credited, which you will receive as soon as you register.</span>
	    		</div>
	    		<div>
	    			<form class="header__form">
	    				<div class="header__email_wrapper">
	    					<input class="header__email" type="email" name="email" placeholder="Email" required id="email-input">
	    				</div>
	    				<div class="header__button_wrapper">
	    					<input class="header__button" type="submit" name="Confirm" value="Confirm">
	    				</div>
	    			</form>
	    		</div>
	    	</div>
    		<div>
	    		<nav class="header__menu">
	    			<a class="header__menu_item" href="#"><img class="header__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/bitcoin.png" alt="Bitcoin"></a>
	    			<a class="header__menu_item" href="#"><img class="header__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/bitcoinlightning.png" alt="Bitcoin Lightning"></a>
	    			<a class="header__menu_item" href="#"><img class="header__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/ethereum.png" alt="Ethereum"></a>
	    			<a class="header__menu_item" href="#"><img class="header__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/xrp.png" alt="XRP"></a>
	    			<a class="header__menu_item" href="#"><img class="header__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/dogecoin.png" alt="Dogecoin"></a>
	    			<a class="header__menu_item" href="#"><img class="header__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/litecoin.png" alt="Litecoin"></a>
	    			<a class="header__menu_item" href="#"><img class="header__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/dash.png" alt="DASH"></a>
	    		</nav>
    		</div>
    	</div>
    </header>
    <div class="content">
    	<div class="content__container">
		    	<div class="content__text">
		    		<div class="contant__title_wrapper">
		    			<h1 class="contant__title"><?php the_title(); ?></h1>
					</div>
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		  					<?php the_content(); ?>
					<?php endwhile; endif; //?>
		    	</div>
		    	<div class="content__form_wrapper">
		    		<form class="content__form">
		    			<div class="content__button_wrapper">
		    				<a class="content__button" href="#email-input"><span><?php echo __('Get Bonus', 'roma'); ?></span></acos>
		    			</div>
		    		</form>
		    	</div>
		    
	    </div>
    </div>
</body>
</html>