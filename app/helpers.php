<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class FileUploader
{
    public static function uploadFile($file, $path, $rules = [])
    {
        $validator = Validator::make(
            [
                'file' => $file,
            ],
            $rules
        );

        if ($validator->fails()) {
            return [
                'errors' => $validator->errors()->all(),
            ];
        }

        $fileName = $file->getClientOriginalName();
        $fileSize = $file->getSize();
        $fileMimeType = $file->getMimeType();
        $path2 = $path.'/'.$fileName;
        $fileStored = Storage::disk('public_uploads')->put($path2, file_get_contents($file));
        // dd($fileStored);
        if ($fileStored) {
            return [
                'fileName' => $fileName,
                'fileSize' => $fileSize,
                'fileMimeType' => $fileMimeType,
                'fileUrl' => Storage::url($path . '/' . $fileName),
            ];
        } else {
            return false;
        }
    }
}