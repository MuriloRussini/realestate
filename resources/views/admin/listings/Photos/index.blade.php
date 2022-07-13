@extends('layouts.admin') @section('page-title', 'Show Listings Photos')
@section('content')

<div id="mainContent">
  <div class="row">
    <div class="col-md-10">
      <h1>Show Photos Listings</h1>
    </div>
    <div class="col-md-2">
      <a href="{{ route('admin.listings.photos.create', ['slug' => $slug, 'id' => $id]) }}" class="btn cur-p btn-primary" style="width: 100%; margin-top: 1rem; color: black;">Add New Photo</a>
    </div>
  </div>
    <div class="col-md-12">
        <div class="bgc-white bd bdrs-3 p-20 mB-20">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Photo</th>
                        <th scope="col">Name</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach ($photos as $photo)
                    <tr>
                        <th scope="row">{{ $photo->id }}</th>
                        <td>
                          <img src="/img/{{$photo->name}}" alt="" style="width: 300px;">
                          
                          {{-- <a href="{{ route('admin.listings.edit', [
                          'slug' => $listing->slug,
                          'id' => $listing->id,
                        ]) }}">{{ $listing->adress }} {{ $listing->adress2 }} <br>
                          {{ $listing->city }}, {{ $listing->state }} {{ $listing->zipcode }}</a> --}}
                        </td>
                        <td>
                          {{ $photo->name }}
                        </td>
                        <td>
                          @if ($photo->featured)
                            <div class="btn cur-p btn-success" style="width: 100px; text-transform: capitalize;">
                              Featured Image
                            </div>
                          @else

                          @endif
                        </td>
                        <td>
                          <a href="{{ route('admin.listings.photos.featured', ['slug' => $slug, 'id' => $id, 'photo_id' => $photo->id]) }}" class="btn cur-p btn-outline-success" onclick="return confirm('Are you sure?')" style="width: 100%; margin-top: 1rem; color: black;">Make Featured</a>
                          <a href="{{ route('admin.listings.photos.delete', ['slug' => $slug, 'id' => $id, 'photo_id' => $photo->id]) }}" class="btn btn-danger btn-color" onclick="return confirm('Are you sure you want to delete this photo?')" style="width: 100%; margin-top: 1rem;">Delete</a>
                        </td>
                    </tr>
                  @endforeach
                </tbody>
            </table>
            {{ $photos->links() }}
        </div>
        
    </div>
</div>
@endsection
