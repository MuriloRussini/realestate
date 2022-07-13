@extends('layouts.admin')

@section('page-title', 'Edit Listing')

@section('content')
  
<div id="mainContent">

  <form method="POST" action="{{ route('admin.listings.update', ['slug' => $listing->slug, 'id' => $listing->id]) }}">
    @csrf
    @method('PUT')
    <div class="row">
      <div class="col-md-9">
        <div class="bgc-white p-20 bd">
          <h1>Edit Listing</h1>
          <div class="mT-30">
            <div class="mb-3">
              <h3>Address</h3><label class="form-label" for="adress">Address</label> <input type="text" name="adress"
                class="form-control" id="adress" placeholder="ex: 1234 Main St" value="{{ old('adress', $listing->adress) }}" autocomplete="off">
                @error('adress')
                  <div class="error-sub-text">
                      {{ $message }}
                  </div>
                @enderror
            </div>
            <div class="mb-3"><label class="form-label" for="adress2">Address 2</label> <input type="text" name="adress2"
                class="form-control" id="adress2" placeholder="ex: Apartment, studio, or floor" value="{{ old('adress2', $listing->adress2) }}"></div>
            <div class="row">
              <div class="mb-3 col-md-6"><label class="form-label" for="city">City</label> <input type="text" name="city"
                  class="form-control" id="city" placeholder="ex: Miami" value="{{ old('city', $listing->city) }}">
                  @error('city')
                  <div class="error-sub-text">
                      {{ $message }}
                  </div>
                  @enderror</div>
              <div class="mb-3 col-md-4"><label class="form-label" for="state">State</label> <select id="state" name="state"
                  class="form-control">
                  <option value="NY" @selected(old('state', $listing->state) == 'NY')>New York</option>
                  <option value="FL" @selected(old('state', $listing->state) == 'FL')>Florida</option>
                </select>
                @error('state')
                  <div class="error-sub-text">
                      {{ $message }}
                  </div>
                @enderror</div>
              <div class="mb-3 col-md-2"><label class="form-label" for="zipcode">Zip</label> <input type="text"
                  class="form-control" id="zipcode" name="zipcode" value="{{ old('zipcode', $listing->zipcode) }}" placeholder="ex: 411623">
                  @error('zipcode')
                  <div class="error-sub-text">
                      {{ $message }}
                  </div>
                  @enderror</div>
            </div>
            <div class="row">
              <div class="mb-3 col-md-6"><label class="form-label" for="bedrooms">Bedrooms</label> <input type="text"
                  class="form-control" id="bedrooms" name="bedrooms" placeholder="ex: 4" value="{{ old('bedrooms', $listing->bedrooms) }}">
                  @error('bedrooms')
                  <div class="error-sub-text">
                      {{ $message }}
                  </div>
                  @enderror</div>
            </div>
  
            <div class="row">
              <div class="mb-3 col-md-6"><label class="form-label" for="bathrooms">Bathrooms</label> <input type="text"
                  class="form-control" id="bathrooms" name="bathrooms" placeholder="ex: 2" value="{{ old('bathrooms', $listing->bathrooms) }}">
                  @error('bathrooms')
                  <div class="error-sub-text">
                      {{ $message }}
                  </div>
                  @enderror</div>
            </div>
  
            <div class="row">
              <div class="mb-3 col-md-6"><label class="form-label" for="squarefootage">SQFT</label> <input type="text"
                  class="form-control" id="squarefootage" name="squarefootage" placeholder="ex: 2000" value="{{ old('squarefootage', $listing->squarefootage) }}">
                  @error('squarefootage')
                  <div class="error-sub-text">
                      {{ $message }}
                  </div>
                  @enderror</div>
            </div>

            <div class="row">
              <div class="mb-3 col-md-12">
                <h3>Details</h3>
                <label class="form-label" for="description">Description</label>
                <textarea type="text" class="form-control" id="description" name="description" placeholder="ex: Talk about your property">{{ old('description', $listing->description) }}</textarea>
                  @error('description')
                  <div class="error-sub-text">
                      {{ $message }}
                  </div>
                  @enderror</div>
            </div>
          </div>
        </div>
      </div>
    
      <div class="col-md-3">
        <div class="bgc-white p-20 bd">
          <div class="mT-30">
            <h3>Settings</h1>            
            <div class="form-group">
              <label class="form-label" for="status">Status</label> <select id="status" name="status"
                  class="form-control">
                  <option value="draft" @selected(old('status', $listing->status) == 'draft')>Draft</option>
                  <option value="published" @selected(old('status', $listing->status) == 'published')>Published</option>
                </select>
                @error('status')
                  <div class="error-sub-text">
                      {{ $message }}
                  </div>
                @enderror
            </div>

            <div class="form-group" style="display: flex; margin-top: 1rem; flex-direction: column;">
              <a href="{{ route('admin.listings.photos', ['slug' => $listing->slug, 'id' => $listing->id]) }}" class="btn cur-p btn-outline-success" onclick="return confirm('Did you save your updates?')" style="width: 100%; margin-top: 1rem; color: black;">Photos</a>
            </div>

            <div class="form-group" style="display: flex; margin-top: 1rem; flex-direction: column;">
              <button type="submit" class="btn btn-primary btn-color" style="width: 100%;">Save</button>
              <a href="{{ route('admin.listings.delete', ['slug' => $listing->slug, 'id' => $listing->id]) }}" class="btn btn-danger btn-color" onclick="return confirm('Are you sure you want to delete this listing?')" style="width: 100%; margin-top: 1rem;">Delete</a>
            </div>
          </div>
        </div>
      </div>
    </div> 
  </form>
</div>

@endsection