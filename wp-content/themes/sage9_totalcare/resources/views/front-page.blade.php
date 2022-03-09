@extends('layouts.app')

@include('partials.banner')

@section('content')

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

@endsection
