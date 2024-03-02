<?php // Code within app\Helpers\Helper.php

namespace App\Helpers;

use App\Models\AppConfig;
use App\Models\Contacts;
use App\Models\Language;
use DateTime;
use DateTimeZone;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Session;
use Intervention\Image\Facades\Image;
class Helper
{
    /**
     * upload image
     * @param dir and file path
     * @return array
     * @author ss yusuf
    */
    public static function uploadDocument($path,$file){

        $upload_path = public_path($path);

        if ( ! file_exists($upload_path)) {
            mkdir($upload_path, 0777, true);
        }
        $filename = microtime().'_'.$file->getClientOriginalName();

        // save to server
        $file->move($upload_path, $filename);

        // create thumbnails
//        $img = Image::make($upload_path.$filename);
//        $img->save($upload_path.$filename);
//        $img->fit(200, 120, function ($c) {
//            $c->aspectRatio();
//            $c->upsize();
//        })->save($upload_path.$filename.'.thumb.jpg');

        return [
            'filePath' => $path.$filename,
            'fileFullPath' => url($path.$filename)
        ];
    }

}
