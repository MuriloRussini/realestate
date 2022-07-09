@extends('layouts.admin') @section('page-title', 'Show All Listings')
@section('content')

<div id="mainContent">
    <div class="col-md-12">
      <h1>Show All Listings</h1>
        <div class="bgc-white bd bdrs-3 p-20 mB-20">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Address</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach ($listings as $listing)
                    <tr>
                        <th scope="row">{{ $listing->id }}</th>
                        <td><a href="{{ route('admin.listings.edit', [
                          'slug' => $listing->slug,
                          'id' => $listing->id,
                        ]) }}">{{ $listing->adress }} {{ $listing->adress2 }} <br>
                          {{ $listing->city }}, {{ $listing->state }} {{ $listing->zipcode }}</a></td>
                        <td>Active</td>
                    </tr>
                  @endforeach
                </tbody>
            </table>
            {{ $listings->links() }}
        </div>
        
    </div>
</div>
@endsection
