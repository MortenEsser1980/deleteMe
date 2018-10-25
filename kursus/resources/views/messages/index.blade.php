@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="medium-12 large-12 columns">
            <h4>Messages</h4>
            <div class="medium-2  columns"><a class="button hollow success" href="{{ route('new_message') }}">SEND NEW MESSAGE</a></div>
            <br />

            <h4>Previous messages</h4>
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
                        <td> Morten Schrøder Olsen (hard codet) </td>
                        <td> 01.10.2018</td>
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