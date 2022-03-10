<?php echo $__env->make('partials.banner', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->startSection('content'); ?>

<div class="grey-section px-6">
  <div class="row no-gutters">
    <div class="col-md-7">
      <?php the_field('description'); ?>
    </div>
  </div>
</div>

<div class="carousel-section spacer">
  <div class="dark-blue-background">
    <div class="container slick-section">
      <div class="autoplay">
        <?php if( have_rows('home_carousel') ):
          $i = 0;
          while( have_rows('home_carousel') ) : the_row();
          $home_image = get_sub_field('image');
        ?>

        <div class="item">
          <a href="<?php the_sub_field('link'); ?>">
              <img class="carousel-image" src="<?php echo esc_url($home_image['url']); ?>"
                alt="<?php echo esc_url($home_image['alt']); ?>">
          </a>
        </div>

        <?php $i++;
        endwhile; ?>
        <?php endif; ?>
      </div> 
    </div>
  </div>
</div>

<div class="left-image-section">
  <div class="row no-gutters">
  <?php 
    if( have_rows('left_image_section') ):
    while( have_rows('left_image_section') ) : the_row(); ?>
    <div class="col-md-3">
      <?php $image = get_sub_field('left_image'); ?>
      <img class="image w-100" src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_url( $image['alt'] ); ?>" />
    </div>
    <div class="col-md-9 spacer">
      <?php the_sub_field('description'); ?>
    </div>
  <?php endwhile;
  endif; ?>  
  </div>
</div>

<div class="right-image-section">
  <div class="row no-gutters">
  <?php 
    if( have_rows('right_image_section') ):
    while( have_rows('right_image_section') ) : the_row(); ?>
    <div class="col-md-9 spacer">
      <?php the_sub_field('description'); ?>
    </div>
    <div class="col-md-3">
      <?php $image = get_sub_field('image'); ?>
      <img class="image w-100" src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_url( $image['alt'] ); ?>" />
    </div>
  <?php endwhile;
  endif; ?>  
  </div>
</div>

<div class="container white-section spacer">
<?php 
    if( have_rows('white_section') ):
    while( have_rows('white_section') ) : the_row(); ?>

    <?php the_sub_field('description'); ?>

    <div class="row no-gutters justify-content-md-center">
    <?php 
    if( have_rows('logos') ):
    while( have_rows('logos') ) : the_row(); 
    $image = get_sub_field('image');
    ?>
    
      <div class="col-md-3">
        <img class="image w-100" src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_url( $image['alt'] ); ?>" />
      </div>

    <?php endwhile;
    endif; ?>  
    </div>

    <?php endwhile;
  endif; ?>  
</div> 


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>