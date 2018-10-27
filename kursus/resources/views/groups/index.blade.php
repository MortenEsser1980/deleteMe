@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="medium-12 large-12 columns">
            <h4>Groups</h4>
            <div class="medium-2  columns"><a class="button hollow success" href="{{ route('new_group') }}">CREATE GROUP</a></div>
            <br />
        </div>
        <div class="medium-12 large-12 columns">
            <h4>Existing groups</h4>
            <table>
                <thead>
                <tr>
                    <th width="200">Group Name</th>
                    <th width="200">Action</th>
                </tr>
                </thead>
                <tbody>

                <! -- @ foreach( $programs as $program ) -->
                    <tr>
                        <td> Network Group </td>
                        <td>
                            <a class="hollow button" href="">EDIT GROUP</a>
                        </td>
                    </tr>
                <!--@ endforeach-->


                </tbody>
            </table>


        </div>
    </div>
@endsection