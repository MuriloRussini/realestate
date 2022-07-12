@extends('layouts.admin') @section('page-title', 'Show Listings Photos')
@section('content')

<div id="mainContent">
    <div class="col-md-12">
      <h1>Show Photos Listings</h1>
        <div class="bgc-white bd bdrs-3 p-20 mB-20">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Photo</th>
                        <th scope="col">Name</th>
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
                          {{-- @if ($listing->status == 'published')
                            <div class="btn cur-p btn-success" style="width: 100px; text-transform: capitalize;">
                              {{ $listing->status }}
                            </div>
                          @else
                            <div class="btn cur-p btn-warning" style="width: 100px; text-transform: capitalize;">
                              {{ $listing->status }}
                            </div>
                          @endif --}}
                        </td>
                        <td>
                          <a href="">Make Featured</a>
                          <a href="">Delete</a>
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
