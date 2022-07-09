@extends('layouts.admin')

@section('page-title', 'Create New Listing')

@section('content')
<div id="mainContent">
  <div class="col-md-6">
    <div class="bgc-white p-20 bd">
      <h1>Create New Listing</h1>
      <div class="mT-30">
        <form method="POST" action="{{ route('admin.listings.store') }}">
          @csrf
          <div class="mb-3"><label class="form-label" for="adress">Address</label> <input type="text" name="adress"
              class="form-control" id="adress" placeholder="ex: 1234 Main St" value="{{ old('adress') }}" autocomplete="off">
              @error('adress')
                <div class="error-sub-text">
                    {{ $message }}
                </div>
              @enderror
          </div>
          <div class="mb-3"><label class="form-label" for="adress2">Address 2</label> <input type="text" name="adress2"
              class="form-control" id="adress2" placeholder="ex: Apartment, studio, or floor" value="{{ old('adress2') }}"></div>
          <div class="row">
            <div class="mb-3 col-md-6"><label class="form-label" for="city">City</label> <input type="text" name="city"
                class="form-control" id="city" placeholder="ex: Miami" value="{{ old('city') }}">
                @error('city')
                <div class="error-sub-text">
                    {{ $message }}
                </div>
                @enderror</div>
            <div class="mb-3 col-md-4"><label class="form-label" for="state">State</label> <select id="state" name="state"
                class="form-control">
                <option value="NY" @selected(old('state') == 'NY')>New York</option>
                <option value="FL" @selected(old('state') == 'FL')>Florida</option>
              </select>
              @error('state')
                <div class="error-sub-text">
                    {{ $message }}
                </div>
              @enderror</div>
            <div class="mb-3 col-md-2"><label class="form-label" for="zipcode">Zip</label> <input type="text"
                class="form-control" id="zipcode" name="zipcode" value="{{ old('zipcode') }}" placeholder="ex: 411623">
                @error('zipcode')
                <div class="error-sub-text">
                    {{ $message }}
                </div>
                @enderror</div>
          </div>
          <div class="row">
            <div class="mb-3 col-md-6"><label class="form-label" for="bedrooms">Bedrooms</label> <input type="text"
                class="form-control" id="bedrooms" name="bedrooms" placeholder="ex: 4" value="{{ old('bedrooms') }}">
                @error('bedrooms')
                <div class="error-sub-text">
                    {{ $message }}
                </div>
                @enderror</div>
          </div>

          <div class="row">
            <div class="mb-3 col-md-6"><label class="form-label" for="bathrooms">Bathrooms</label> <input type="text"
                class="form-control" id="bathrooms" name="bathrooms" placeholder="ex: 2" value="{{ old('bathrooms') }}">
                @error('bathrooms')
                <div class="error-sub-text">
                    {{ $message }}
                </div>
                @enderror</div>
          </div>

          <div class="row">
            <div class="mb-3 col-md-6"><label class="form-label" for="squarefootage">SQFT</label> <input type="text"
                class="form-control" id="squarefootage" name="squarefootage" placeholder="ex: 2000" value="{{ old('squarefootage') }}">
                @error('squarefootage')
                <div class="error-sub-text">
                    {{ $message }}
                </div>
                @enderror</div>
          </div>
          <button type="submit" class="btn btn-primary btn-color">Create Listing</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection