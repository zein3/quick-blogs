<?php

/*
 * Image Helper
 * The functions here operate on an image and then store them
 * get the image with Storage::disk('public')->get($filename)
 * where $filename is the string returned by the functions.
 *
 * image can be passed into the function either by specifying
 * the path to the image or passing uploaded file from laravel
 * like so: $request->file('foo').
 *
 * The difference between fucntions foo and fooAndStore is
 * that foo will save the image on local disk while fooAndStore
 * will save the image on public disk.
 *
 * To get image stored on public disk (by the fooAndStore func)
 * use asset('storage/' . $filename)
 */

namespace App\Helpers;

use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use SplFileInfo;

class ImageHelper
{
    // resize the image and returns path where it is stored
    public static function resizeAndStore(string|SplFileInfo $image, int $width, int $height): string
    {
        $image = Image::make($image);
        $name = 'images/' . uniqid() . '.jpg';

        $result = $image->resize($width, $height)->encode('jpg');
        Storage::disk('public')->put($name, $result);
        return $name;
    }

    public static function resize(string|SplFileInfo $image, int $width, int $height): string
    {
        $image = Image::make($image);
        $name = 'images/' . uniqid() . '.jpg';

        $result = $image->resize($width, $height)->encode('jpg');
        Storage::disk('local')->put($name, $result);
        return $name;
    }

    public static function clearImages()
    {
        // TODO delete all image that is stored in local disk
        // Use Storage::disk('local')->delete($filename)
    }
}

?>
