<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php the_title(); ?></title>
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
	    			<span class="header__text">
                        <?php echo get_field('general_description'); ?>
                    </span>
	    		</div>
	    		<div>
	    		
                    <?php dynamic_sidebar('sidebar-2'); ?>
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
		    				<button class="content__button_link">
		    					<a class="content__button" href="#email-input"><span><?php echo __('Get Bonus', 'roma'); ?></span></acos>
		    				</button>
		    			</div>
		    		</form>
		    	</div>
		    
	    </div>
    </div>
</body>
</html>