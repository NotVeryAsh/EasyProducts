<?php

namespace App\Services;

use Illuminate\Support\Facades\File;

class ImageService
{
    public static function getPublicImage($image): string
    {
        $image = "images/$image";

        return File::exists(public_path($image)) ?
            $image
            : asset('/images/default.jpg');
    }
}
