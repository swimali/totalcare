<div class="home-banner">
    <?php
$image = get_field( 'banner_image' );
if ( !empty( $image ) ) { ?>
    <div class="background-image" style="background-image:linear-gradient(to top, #00466880, #00466880),url('<?php echo $image['url']; ?>');">
<?php } ?>
    <div class="container-fluid px-6 font-white">
        <div class="overlay-text">
            <h1><?php the_field('banner_caption'); ?></h1>
        </div>    
    </div>
    <div class="button-group px-6 w-100">
        <div class="d-flex">
            <a class="button-icon" href="#"><img class="button-image" src="@asset('images/message.svg')"></a>
            <button type="button" class="btn yellow-button font-dark-blue">Book now</button>
        
            <button type="button" class="btn yellow-button font-dark-blue right flex-end">Gym membership</button>
            <a class="button-icon" href="#"><img class="button-image" src="@asset('images/calendar.svg')"></a>    
        </div>
    </div>
</div>