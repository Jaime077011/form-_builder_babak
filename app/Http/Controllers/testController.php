<?php

namespace App\Http\Controllers;

use App\Helpers\FileUploader;

use Illuminate\Http\Request;

use App\Traits\ApiBitrix;
class testController extends Controller
{
  use ApiBitrix;

    public function index()
    {
  
      $data = $this->createTask(23,'My Task', 'This is my task description.');
   

      if ($data['status'] == '200') {
        # code...
        return $data['message'];
      }else{
        return $data['message'];
      }


       // return view('test');
    }
    public function add(Request $request)
    {
        $fileUploader = new FileUploader();
        $uploadedFile = $fileUploader->uploadFile($request->file('file'), 'uploads/employee', [
            'file' => 'required|file|max:10000',
            'mimes' => 'image/jpeg|image/png|image/gif',
        ]);

        if (empty($uploadedFile['errors'])) {
            dd('uploaded');
            // The file was uploaded successfully.
        } else {
            dd('not uploaded');

            // The file upload failed.
            // $uploadedFile['errors'] will contain an array of error messages.
        }
        return redirect()->route('test.index');
    }
}
