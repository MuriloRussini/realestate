@extends('layouts.account')

@section('page-title', 'User Saved Listings - Creampie Realty')
@section('page-bg', 'https://images.pexels.com/photos/842682/pexels-photo-842682.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1')

@section('content')
<div class="listings-properties">
    <div class="row">
      <div class="col-sm-12 col-lg-4 col-xl-4">
        <div class="listings-properties__item">
          <img src="https://cdn.onekindesign.com/wp-content/uploads/2017/01/Contemporary-Home-Design-Vertical-Arts-Architecture-01-1-Kindesign.jpg" alt="">
          <div class="listings-properties__saved"><i class="fa-solid fa-heart"></i></div>
          <span class="listings-properties__item-price">$250,000</span>
          <span class="listings-properties__item-details"><i class="fa-solid fa-bed"></i> 4 <i class="fa-solid fa-bath"></i> 3 <i class="fa-solid fa-ruler"></i></i> 2440 SQFT</span>
          <span class="listings-properties__item-address">2135 Grand St,<br>
          Miami Beach, FL 23456</span>
          <div class="listings-properties__item-line"></div>
          <span class="listings-properties__item-owner">Creampie Realty</span>
        </div>
      </div>
    </div>
</div>
@endsection