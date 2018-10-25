<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Program as Program;

class ProgramController extends Controller
{
    //
    public function __construct( Program $program) {
        $this->program = $program;
    }

    public function index(){
        $data = [];
        $program1 = new \stdClass;
        $program1->programId = 1;
        $program1->programName = "Program Name";
        $program1->programStartDate = "Program Start Date";

        //$data['programs'] = $this->program->all();
        $data['programs'][] = $program1;
        return view('programs/index', $data);
    }

    public function show(){
        $data = [];
        $data['method'] = __METHOD__;
        //$data['programs'] = $this->program->all();
        return view('programs/index', $data);
    }

    public function newProgram( Request $request, Program $program )
    {
        $data = [];

        $data['programName'] = $request->input('programName');
        $data['programDescription'] = $request->input('programDescription');
        $data['programStartDate'] = $request->input('programStartDate');
        $data['programEndDate'] = $request->input('programEndDate');
        $data['programPrice'] = $request->input('programPrice');


        if( $request->isMethod('post') )
        {
            //dd($data);
            $this->validate(
                $request,
                [
                    'programName' => 'required|min:5',
                    'programDescription' => 'required',
                    'programStartDate' => 'required',
                    'programEndDate' => 'required',
                    'programPrice' => 'required'

                ]
            );

            $program->insert($data);

            return redirect('programs');
        }

        return view('programs/form', $data);
    }
}
