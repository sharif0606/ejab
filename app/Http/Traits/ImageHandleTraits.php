<?php

namespace App\Http\Traits;

use Illuminate\Support\Str;
use Storage;
use File;
use Image;


trait ImageHandleTraits{

    public function uploadImage($image, $path)
    {
		$imageNewName = Str::random(8).time().'.'.$this->checkValidImage($image);
		$destinationPath = 'files/'.$path;
        $image->move($destinationPath,$imageNewName);
        return $destinationPath.'/'.$imageNewName;
    }

    public function uploadImageResize($image, $path, $width, $height)
    {
		$imageNewName = Str::random(8).time().'.'.$this->checkValidImage($image);
		$destinationPath = public_path('/files/'.$path);
		
		/* if folder not found */
		File::isDirectory($destinationPath) or File::makeDirectory($destinationPath, 0777, true, true);

		$img = Image::make($image->path());
		$img->resize($width, $height)->save($destinationPath.'/'.$imageNewName);
        $destinationPath = 'files/'.$path;
        return $destinationPath.'/'.$imageNewName;
    }
	
	public function checkValidImage($image)
    {
        $extention = $image->getClientOriginalExtension();
        if ($extention === 'jpeg' || $extention === 'jpg' || $extention === 'png' || $extention === 'gif' || $extention === 'svg' || $extention === 'pdf') {
            return $extention;
        } else {
            return 'Invalid image format. Please try again';
        }
    }

    public function deleteImage($image, $path)
    {
        $oldImagePath = public_path("/files/$path/$image");
        if (File::exists($oldImagePath)) {
            return File::delete($oldImagePath);
        } else {
            return 'no image';
        }
    }
}