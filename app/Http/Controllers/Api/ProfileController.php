<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProfileResource;
use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show(Profile $profile)
    {
        return new ProfileResource($profile);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // if (!empty($profile->image) && file_exists(public_path($path . '/' . $profile->image))) {
        //     unlink(public_path($path . '/' . $profile->image));
        // }
        // $validatedData = $request->validate([
        //     'homephone' => 'required|max:255',
        //     'cellphone' => 'required|max:255',
        //     'address' => 'required|max:255',
        //     'city' => 'required|max:255',
        //     'state' => 'required|max:255',
        //     'zipcode' => 'required|max:255',
        //     'image' => 'mimes:jpg,jpeg,png|max:4096'
        // ]);
        // $profile = auth()->user()->profile;
        // if ($request->hasFile('image')) {

        //     $destination = 'backend/profile/user_image/' . $profile->image;
        //     if (File::exists($destination)) {

        //         File::delete($destination);
        //     }
        //     $image = $request->file('image');
        //     $filename = time() . '.' . $image->getClientOriginalExtension();
        //     Image::make($image)->save(public_path('backend/profile/user_image/' . $filename));
        //     $profile->image = $filename;
        // }
        // $profile->update([
        //     'homephone' => $request->homephone,
        //     'cellphone' => $request->cellphone,
        //     'address' => $request->address,
        //     'city' => $request->city,
        //     'state' => $request->state,
        //     'zipcode' => $request->zipcode,
        // ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Profile $profile)
    {

        // $request->validate([
        //     'avatar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ]);

        $input = $request->all();

        // if ($image = $request->file('avatar')) {
        //     $destinationPath = 'images/';
        //     $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
        //     $image->move($destinationPath, $profileImage);
        //     $input['avatar'] = "$profileImage";
        // }

        $profile->update($input);
        return new ProfileResource($profile);
    }
}
