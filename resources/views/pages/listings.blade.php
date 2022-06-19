@extends('layouts.main')

@section('content')
<div class="listings-page">
  <div class="listings-city">
    <img src="https://cdn.onekindesign.com/wp-content/uploads/2017/01/Contemporary-Home-Design-Vertical-Arts-Architecture-01-1-Kindesign.jpg" alt="" class="listings-city__img">

    <h1 class="listings-city__title">South Beach</h1>
  </div>

  <div class="listings-filter">
    <div class="listings-filter__wrapper">
      <div class="listings-filter__option">
        Any Price <i class="fa-solid fa-caret-down"></i>
      </div>
  
      
      <div class="listings-filter__option">
        All Beds <i class="fa-solid fa-caret-down"></i>
      </div>
  
      
      <div class="listings-filter__option">
        Hometype <i class="fa-solid fa-caret-down"></i>
      </div>
  
      
      <div class="listings-filter__option">
        More <i class="fa-solid fa-caret-down"></i>
      </div>
  
      
      <div class="listings-filter__button">
        Search
      </div>
    </div>
  </div>
</div>
@endsection