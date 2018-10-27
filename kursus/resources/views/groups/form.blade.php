@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="medium-12 large-12 columns">
            <?php $modify = ""; ?>
            <h4>{{ $modify == 1 ? 'Modify Program' : 'New Group' }}</h4>
            <form action="{{ $modify == 1 ? route('update_client', [ 'client_id' => $client_id ]) : route('create_client') }}" method="post">

                <div class="medium-8  columns">
                    <label>Group name</label>
                    <input name="groupName" type="text" value="{{ old('groupName') ? old('groupName') : $groupName}}">
                    <small class="error">{{$errors->first('groupName')}}</small>
                </div>

                <div class="medium-8 columns">
                    <table>
                        <tr>
                            <th>Client name</th><th>Select</th>
                        </tr>
                        <tr>
                            <td>Morten</td><td><input type="checkbox"></td>
                        </tr>
                        <tr>
                            <td>Ole</td><td><input type="checkbox"></td>
                        </tr>


                    </table>

                </div>




                <div class="medium-8  columns">
                    <input value="CREATE" class="button success hollow" type="submit">

                </div>

            </form>
        </div>
    </div>
@endsection