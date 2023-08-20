<?php
use App\Models\Upload;
use Illuminate\Support\Facades\File;







function UploadImage($file, $path = null, $model, $imageable_id, $update = false, $id = null, $type, $name = null)
{

    $imagename = uniqid() . 'Controllers' . $file->getClientOriginalExtension();
    $file->move(public_path($path), $imagename);
    if (!$update) {
        return Upload::create([
            'filename' => $imagename,
            'imageable_id' => $imageable_id,
            'imageable_type' => $model,
            'type' => $type,
            'name' => $name
        ]);
    } else {
        if ($name) {
            $image = Upload::where('imageable_id', $imageable_id)->where('imageable_type', $model)->where('name', $name)->first();
            if ($image) {
                File::delete(public_path($path . $image->filename));
                return $image->update(
                    [
                        'filename' => $imagename,
                        'imageable_id' => $imageable_id,
                        'imageable_type' => $model,
                        'type' => $type,
                        'name' => $name
                    ]
                );
            } else {
                return   Upload::create([
                    'filename' => $imagename,
                    'imageable_id' => $imageable_id,
                    'imageable_type' => $model,
                    'type' => $type,
                    'name' => $name
                ]);
            }
        } else {
            $image = Upload::where('imageable_id', $imageable_id)->where('imageable_type', $model)->where('type',$type)->first();
            if ($id) {
                $image = Upload::where('uuid', $id)->first();
            }
            if ($image) {
                File::delete(public_path($path . $image->filename));
               $image->update(
                    [
                        'filename' => $imagename,
                        'imageable_id' => $imageable_id,
                        'imageable_type' => $model,
                        'type' => $type,
                        'name' => $name
                    ]
                );
                return $imagename;
            } else {
                return  Upload::create([
                    'filename' => $imagename,
                    'imageable_id' => $imageable_id,
                    'imageable_type' => $model,
                    'type' => $type,
                    'name' => $name
                ]);
            }
        }
    }

}



?>
