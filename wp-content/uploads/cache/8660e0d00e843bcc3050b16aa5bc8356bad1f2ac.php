<div class="home-banner">
    <?php
$image = get_field( 'banner_image' );
if ( !empty( $image ) ) { ?>
    <div class="background-image" style="background-image:url('<?php echo $image['url']; ?>');">
<?php } ?>
</div>