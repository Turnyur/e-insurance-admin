<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Image;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param $location for storing user uploaded image
     * @param $imageDimensions specified image width and height respectively
     * @return boolean true if image upload was successful, false if image upload unseccessful
     */
    public function uploadUserImage(
        Request $request,
        $location,
        $defaultImage = 'storage/uploads/default_profile.png',
        array $imageDimensions
    ) {


        if (isset($request->image) && !empty($request->image)) {
            $imagePath = $location ."/" . $request->image->store('uploads', 'public');

            $image = Image::make($imagePath)->fit(
                $imageDimensions['width'],
                $imageDimensions['height']
            );
            $image->save();
            return $imagePath;
        }

            $imagePath = $defaultImage;
            return $imagePath;

    }


}
