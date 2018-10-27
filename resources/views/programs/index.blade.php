@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="medium-12 large-12 columns">
            <h4>Programs</h4>
            <div class="medium-2  columns"><a class="button hollow success" href="{{ route('new_program') }}">ADD NEW PROGRAM</a></div>

            <table>
                <thead>
                <tr>
                    <th width="200">Program Name</th>
                    <th width="200">Start Date</th>
                    <th width="200">Action</th>
                </tr>
                </thead>
                <tbody>

                <! -- @ foreach( $programs as $program ) -->
                    <tr>
                        <td> Program name 1 hard codet </td>
                        <td> 01.01.2020</td>
                        <td>
                            <a class="hollow button" href="">EDIT</a>
                        </td>
                    </tr>
                <!--@ endforeach-->


                </tbody>
            </table>


        </div>
    </div>
@endsection