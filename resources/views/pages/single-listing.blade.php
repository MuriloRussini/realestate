@extends('layouts.main')

@section('page-title', '23 Grand Ave - Creampie Realty')

@section('content')
<div class="single-listing-page">
  <div class="listing-top">
    <img src="https://cdn.onekindesign.com/wp-content/uploads/2017/01/Contemporary-Home-Design-Vertical-Arts-Architecture-01-1-Kindesign.jpg" alt="" class="listing-top__img">
    <div class="listing-top__form-wrapper">
      <div class="container">
        <form action="" class="listing-top__form">
          <label class="listing-top__form-label">Schedule A Tour</label>
          <div class="listing-top__form-group listing-top__form-group--horz">
            <div class="listing-top__form-option">In-Person</div>
            <div class="listing-top__form-option">Video</div>
          </div>

          <label class="listing-top__form-label">Date</label>
          <div class="listing-top__form-group listing-top__form-group--horz">
            <div class="listing-top__form-option">February 22nd</div>
          </div>

          <label class="listing-top__form-label">Time</label>
          <div class="listing-top__form-group">
            <div class="listing-top__form-option">11 AM</div>
          </div>

          <label class="listing-top__form-label">Personal Info</label>
          <div class="listing-top__form-group">
            <div class="listing-top__form-option">Enter Phone</div>
          </div>
          <div class="listing-top__form-group">
            <div class="listing-top__form-option">Enter Email</div>
          </div>

          <div class="listing-top__form-group">
            <button type="submit" class="listing-top__form-button">Schedule A Tour</button>
          </div>
        </form>
      </div>
      
    </div>
  </div>
  <section class="listing-info">
    <div class="container">
      <div class="row">
        <div class="col-md-7">
          <h1>23 Grand Ave<br>
          Miami, FL 33456</h1>
          <div class="listing-info__details">
            <span class="listing-info__details-text"><i class="fa-solid fa-bed"></i> 4</span>
            <span class="listing-info__details-text"><i class="fa-solid fa-bath"></i> 3</span>
            <span class="listing-info__details-text"><i class="fa-solid fa-ruler"></i> 2440 SQFT</span>
          </div>
        </div>
        <div class="col-md-5">
          <span class="listing-info__agent-title">Agent</span>
          <span class="listing-info__agent-name">John Smith</span>
          <p class="listing-info__agent">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tenetur soluta rem recusandae velit voluptatem nisi voluptatum ullam veniam, magni in? Adipisci ipsa nisi quas molestias animi architecto quibusdam dolor voluptatibus.</p>
        </div>
      </div>
    </div>
  </section>
  <section class="listing-extras">
    <div class="container">
      <div class="row">
        <div class="col-md-7">
          <div class="listing-extras__details">
            <h2>More Info</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati quibusdam tempore ad neque veritatis eos rerum repellendus odit ipsa sed accusantium quod soluta consequatur molestiae quos provident vitae, laborum natus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque quam saepe iure eum, a labore sapiente mollitia temporibus est nostrum, perferendis, voluptates voluptatibus quod odit obcaecati error at officiis. Temporibus?</p>
            <h3>Details</h3>
            <ul>
              <li>Test</li>
              <li>Test</li>
              <li>Test</li>
              <li>Test</li>
              <li>Test</li>
              <li>Test</li>
              <li>Test</li>
              <li>Test</li>
              <li>Test</li>
              <li>Test</li>
              <li>Test</li>
            </ul>
          </div>
        </div>
        <div class="col-md-5">
          <div class="listing-extras_gallery">
            <h2>Images</h2>
            <img src="https://cdn.onekindesign.com/wp-content/uploads/2017/01/Contemporary-Home-Design-Vertical-Arts-Architecture-01-1-Kindesign.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection