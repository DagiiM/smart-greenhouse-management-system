<?php

namespace App\Http\Controllers\Image;

use App\Http\Controllers\WebController;
use App\Models\Image;
use App\Models\Social;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class ImageController extends WebController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $images=Image::all();

        return $this->showAll('system.image.index',$images);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('system.image.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $rules = [
       'subject'=>'required',
       'image'=>'required|max:2048',
     ];

      $this->validate($request,$rules);

      $data = $request->all();

      $data['image'] = $request->image->storeAs('system_image',$data['subject']);

      $image = Image::create($data);

      return back()->with('success','Image Added successfully!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function show(Image $image)
    {
        return $this->showOne('system.image.show',$image);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function edit(Image $image)
    {
        return $this->showOne('system.image.edit',$image);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Image $image)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy(Image $image)
    {
      $image->delete();

      Storage::delete($image->image);

      return back()->with('success','Image Deleted successfully!');
    }
}
