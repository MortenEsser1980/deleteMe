@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="medium-12 large-12 columns">
            <h4>Upload documents</h4>
            <div class="medium-2  columns"><a class="button hollow success" href="{{ route('new_upload') }}">NEW UPLOAD</a></div>
            <br />
        </div>
        <div class="medium-12 large-12 columns">
            <h4>Previous uploads</h4>
            <table>
                <thead>
                <tr>
                    <th width="200">Recipient Name</th>
                    <th width="200">Send Date</th>
                    <th width="200">Action</th>
                </tr>
                </thead>
                <tbody>

                <! -- @ foreach( $programs as $program ) -->
                    <tr>
                        <td> Group Network </td>
                        <td> 01.08.2018</td>
                        <td>
                            <a class="hollow button" href="">DELETE</a>
                        </td>
                    </tr>
                <!--@ endforeach-->


                </tbody>
            </table>


        </div>
    </div>
@endsection