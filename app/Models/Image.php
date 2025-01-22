<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Image extends Model
{
    //
    protected $fillable = ['id','file_name','path','new_path','path_only','mime','size'];

    public static function advancedSave($files, array $option = [])
    {
        $saveImages = function ($file, $option) {
            try {
                DB::beginTransaction();
                $withMime = $file->getClientOriginalName();
                // Get just filename
                if (!isset($option['name']) || empty($option['name'])) {
                    $name = pathinfo($withMime, PATHINFO_FILENAME);
                } else {
                    $name = $option['name'];
                }
                $dir = '';
                if(isset($option['dir'])){
                    $dir = "/".$option['dir'];
                }
                $name = Str::slug($name, '-');
                $image = new Image;
                if(isset($option['id'])){
                    $image->id = $option['id'];
                }
                $image->mime        = $file->getClientOriginalExtension();
                $image->size        = $file->getSize();
                $image->file_name   = $name . '_' . time() . '.' . $image->mime;
                $image->path        = asset('storage/images' .$dir.'/'. $image->file_name);
                $image->new_path    = asset('storage/images' .$dir.'/'. $image->file_name);
                $image->path_only   = "/storage/images$dir/$image->file_name";
                try {
                    Storage::disk('public')->putFileAs('images'.$dir, $file, $image->file_name);
                } catch (\Throwable $th) {
                    return false;
                }
                $image->save();
                DB::commit();
                return $image;
            } catch (\Throwable $th) {
                throw $th;
                DB::rollback();
                return false;
            }
        };
        if (is_array($files)) {
            $images = [];
            foreach ($files as $file) {
                $images[] = $saveImages($file, $option);
            }
        } else {
            $images = $saveImages($files, $option);
        }
        return $images;
    }
}
