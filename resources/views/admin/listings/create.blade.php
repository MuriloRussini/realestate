@extends('layouts.admin')

@section('page-title', 'Create New Listing')

@section('content')
<div id="mainContent">
  <div class="col-md-6">
    <div class="bgc-white p-20 bd">
      <h1>Create New Listing</h1>
      <div class="mT-30">
        <form>
          <div class="mb-3"><label class="form-label" for="address">Address</label> <input type="text" name="adress"
              class="form-control" id="address" placeholder="1234 Main St"></div>
          <div class="mb-3"><label class="form-label" for="address2">Address 2</label> <input type="text" name="adress2"
              class="form-control" id="address2" placeholder="Apartment, studio, or floor"></div>
          <div class="row">
            <div class="mb-3 col-md-6"><label class="form-label" for="city">City</label> <input type="text" name="city"
                class="form-control" id="city"></div>
            <div class="mb-3 col-md-4"><label class="form-label" for="state">State</label> <select id="state" name="state"
                class="form-control">
                <option selected="selected">Choose...</option>
                <option>...</option>
              </select></div>
            <div class="mb-3 col-md-2"><label class="form-label" for="zipcode">Zip</label> <input type="text"
                class="form-control" id="zipcode" name="zipcode"></div>
          </div>
          <div class="row">
            <div class="mb-3 col-md-6"><label class="form-label" for="bedrooms">Bedrooms</label> <input type="email"
                class="form-control" id="bedrooms" name="bedrooms" placeholder="4"></div>
          </div>

          <div class="row">
            <div class="mb-3 col-md-6"><label class="form-label" for="bathrooms">Bathrooms</label> <input type="email"
                class="form-control" id="bathrooms" name="bathrooms" placeholder="2"></div>
          </div>

          <div class="row">
            <div class="mb-3 col-md-6"><label class="form-label" for="squarefootage">SQFT</label> <input type="email"
                class="form-control" id="squarefootage" name="squarefootage" placeholder="2000"></div>
          </div>
          <button type="submit" class="btn btn-primary btn-color">Sign in</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection