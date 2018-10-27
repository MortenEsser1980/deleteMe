<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Group as Group;

class GroupController extends Controller
{
    //
    public function newGroup( Request $request, Group $group )
    {
        $data = [];

        $data['groupName'] = $request->input('groupName');


        if( $request->isMethod('post') )
        {
            //dd($data);
            $this->validate(
                $request,
                [
                    'groupName' => 'required',
                ]
            );

            $group->insert($data);

            return redirect('group');
        }

        return view('groups/form', $data);
    }

    public function show(){
        $data = [];
        $data['method'] = __METHOD__;
        //$data['programs'] = $this->program->all();
        return view('groups/index', $data);
    }
}
