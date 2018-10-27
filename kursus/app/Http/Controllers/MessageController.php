<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message as Message;

class MessageController extends Controller
{
    //
    public function newMessage( Request $request, Message $message )
    {
        $data = [];

        $data['messageRecipient'] = $request->input('messageRecipient');
        $data['messageContent'] = $request->input('messageContent');
        $data['recipientEmail'] = $request->input('recipientEmail');



        if( $request->isMethod('post') )
        {
            //dd($data);
            $this->validate(
                $request,
                [
                    'messageRecipient' => 'required|min:5',
                    'messageContent' => 'required',
                    'recipientEmail' => 'required',

                ]
            );

            $message->insert($data);

            return redirect('message');
        }

        return view('messages/form', $data);
    }

    public function show(){
        $data = [];
        $data['method'] = __METHOD__;
        //$data['programs'] = $this->program->all();
        return view('messages/index', $data);
    }
}
