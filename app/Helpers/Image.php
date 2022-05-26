<?php

namespace App\Helpers;

use Illuminate\Support\Str;
use Intervention\Image\Facades\Image as ImageIntervention;

class Image{

    public static function traitement($image, $format,$dossier){

        $img=ImageIntervention::make($image)->encode($format);
        $name=Str::random().time().'.jpg';
        $path=public_path()."/app/$dossier/";
        $img->save($path.$name);
        return $name;
    }
    
}
