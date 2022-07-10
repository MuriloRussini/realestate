<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Photo;
use App\Models\User;
use App\Helper\Helper;
use Illuminate\Support\Facades\DB;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($slug, $id)
    {
        $photos = Photo::where(['user_id' => auth()->user()->id, 'listing_id' =>$id])->paginate(10);

        if ($photos->total() < 1) {
            return redirect('/admin/listings/{$slug}/{$id}/photos/create');
        }

        return view('admin/listings/photos/index',[
            'photos' => $photos
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($slug, $id)
    {
        return view('admin/listings/photos/create', [
            'slug' => $slug,
            'id' => $id,
          ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $slug, $id)
    {
        // $this->authorize('create', Listing::class);

        request()->validate([
            'image' => 'required|file|mimes:jpg,bmg,png',
        ]);

        $newName = time() . '-' . $request->file('image')->getClientOriginalName();

        $size = $request->file('image')->getSize();
        $name = $newName;
        $request->file('image')->move(public_path('img'), $name);


        $photo = new Photo();
        $photo->name = $name;
        $photo->size = $size;
        $photo->user_id = auth()->user()->id;
        $photo->listing_id = $id;
        // $listing->adress = $request->get('adress');
        // $listing->adress2 = $request->get('adress2');
        // $listing->city = $request->get('city');
        // $listing->state = $request->get('state');
        // $listing->zipcode = $request->get('zipcode');
        // $listing->bedrooms = $request->get('bedrooms');
        // $listing->bathrooms = $request->get('bathrooms');
        // $listing->squarefootage = $request->get('squarefootage');
        // $listing->status = "draft";
        // $listing->slug = Helper::slugify("{$request->adress}-{$request->adress2}-{$request->city}-{$request->state}-{$request->zipcode}");

        $photo->save();

        return redirect("/admin/listings/{$slug}/{$id}/photos")->with('success', 'Photo Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
