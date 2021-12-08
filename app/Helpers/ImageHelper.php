<?php

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
        $name = 'images/' . md5(time()) . '.jpg';

        $result = $image->resize($width, $height)->encode('jpg');
        Storage::disk('public')->put($name, $result);
        return $name;
    }
}

?>
