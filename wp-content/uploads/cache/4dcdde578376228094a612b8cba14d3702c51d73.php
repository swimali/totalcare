<?php echo $__env->make('partials.banner', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->startSection('content'); ?>

<div class="grey-section px-6">
  <div class="row no-gutters">
    <div class="col-md-7">
      <?php the_field('description'); ?>
    </div>
  </div>

  <div class="carousel-section spacer">
    <div class="autoplay">
        <div class="item">
          1
        </div>  
        <div class="item">
          2
        </div>  
        <div class="item">
          3
        </div>
    </div> 
  </div>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>