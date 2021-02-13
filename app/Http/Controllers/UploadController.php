<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File; 
use Illuminate\Support\Facades\Auth;
class UploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function fileUpload()
    {
        $files = File::files(public_path("uploads"));
        return view('upload', ['files'=>$files]);
    }

  

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function fileUploadPost(Request $request)
    {
        /* Check file exstention
        $request->validate([
            'file' => 'required|mimes:pdf,xlx,csv|max:2048',
        ]);
        */
        $fileName = $request->file->getClientOriginalName();  
        $request->file->move(public_path('uploads'), $fileName);
        return back()
            ->with('success','Файл успешно загружен.')
            ->with('file',$fileName);
    }

    public function delete()
    {
        /* Check file exstention

        $request->validate([
            'file' => 'required|mimes:pdf,xlx,csv|max:2048',
        ]);
        */
        if (!Auth::check()){
            return abort(404);
        }
        if(isset($_GET['filename'])){
            File::delete("uploads/".$_GET['filename']);
        }
        return redirect(url('upload'));
    }
}
