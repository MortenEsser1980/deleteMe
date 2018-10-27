<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Upload as Upload;

class UploadController extends Controller
{
    //
    public function newUpload( Request $request, Upload $upload )
    {
        $data = [];

        $data['uploadRecipient'] = $request->input('uploadRecipient');
        $data['uploadMessage'] = $request->input('UploadMessage');
        $data['uploadGroup'] = $request->input('uploadGroup');



        if( $request->isMethod('post') )
        {
            //dd($data);
            $this->validate(
                $request,
                [
                    'uploadRecipient' => 'uploadRecipient',
                    'uploadMessage' => 'uploadMessage',
                    'uploadGroup' => 'uploadGroup',

                ]
            );

            $upload->insert($data);

            return redirect('upload');
        }

        return view('uploads.form', $data);
    }

    public function show(){
        $data = [];
        $data['method'] = __METHOD__;
        //$data['programs'] = $this->program->all();
        return view('uploads.index', $data);
    }
}
