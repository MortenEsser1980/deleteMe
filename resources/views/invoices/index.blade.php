@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="medium-12 large-12 columns">
            <h4>Invoice handling</h4>
            <div class="medium-2  columns">
                <label>User name</label>
                <input type="text">

            </div>
            <div class="medium-2  columns">
                <label>Password</label>
                <input type="text">

            </div>
            <div class="medium-2  columns"><a class="button hollow success" href="">FETCH FROM ERP</a></div>
            <br />
        </div>
        <div class="medium-12 large-12 columns">
            <h4>List of invoices from ERP</h4>
            <table>
                <thead>
                <tr>
                    <th width="50">Invoice Id</th>
                    <th width="100">Invoice Due Date</th>
                    <th width="200">Invoice Description</th>
                    <th width="50">Select</th>
                </tr>
                </thead>
                <tbody>

                <! -- @ foreach( $programs as $program ) -->
                    <tr>
                        <td> 1001 </td>
                        <td> 01.11.2018</td>
                        <td> Nye ledere Program 22</td>
                        <td>
                            <input type="checkbox">
                        </td>
                    </tr>
                <tr>
                    <td> 1002 </td>
                    <td> 01.11.2018</td>
                    <td> Nye ledere Program 22</td>
                    <td>
                        <input type="checkbox">
                    </td>
                </tr>
                <!--@ endforeach-->


                </tbody>
            </table>
            <div class="medium-2  columns"><a class="button hollow success" href="">SELECT CLIENTS</a></div>

        </div>
    </div>
@endsection