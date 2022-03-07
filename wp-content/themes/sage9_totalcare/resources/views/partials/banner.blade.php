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
</div>