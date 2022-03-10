@extends('layouts.app')

@include('partials.banner')

@section('content')

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

<div class="container white-section blog-spacer">
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
        <img class="w-100" src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_url( $image['alt'] ); ?>" />
      </div>

    <?php endwhile;
    endif; ?>  
    </div>

    <?php endwhile;
  endif; ?>  
</div> 

<div class="news-section px-6">
  <div class="row no-gutters">
    <div class="col-md-6 spacer background-dark-blue">
        <table class="table">
          <div class="heading-news">
            <h1>Latest News</h1>
          </div>
          <?php 
            $the_query = new WP_Query( array(
              'posts_per_page' => 3,
            )); 
          ?>
          <?php if ( $the_query->have_posts() ) :  ?>
          <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

            <tr>
              <td>  
                <a class="d-flex" href="{{ get_permalink() }}"><?php echo get_the_date( get_option('date_format') ); ?>
                <img class="pl-20" src="@asset('images/arrow-icon.svg')" alt="Total Care Arrow Icon">
                </a>
                @php the_excerpt() @endphp
              </td>  
            </tr>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
          <?php endif; ?>
        </table>
        <div class="text-center pt-5">
          <button class="btn white-button" type="button">read more</button>
        </div>
    </div>  
    <div class="col-md-6">
    </div>  
  </div>  
</div>  

@include('partials.instagram-feed')

@endsection
