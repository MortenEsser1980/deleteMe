<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    //
    public function show(){
        $data = [];
        $data['method'] = __METHOD__;
        //$data['programs'] = $this->program->all();
        return view('invoices.index', $data);
    }
}
