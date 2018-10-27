@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="medium-12 large-12 columns">
            <?php $modify = ""; ?>
            <h4>{{ $modify == 1 ? 'Modify Activity' : 'New Activities' }}</h4>
            <form action="{{ $modify == 1 ? route('update_client', [ 'client_id' => $client_id ]) : route('create_client') }}" method="post">

                <div class="medium-8  columns">
                    <label>Select area</label>
                    <input name="activityName" type="text" value="{{ old('activityName') ? old('activityName') : $activityName}}">
                    <small class="error">{{$errors->first('activityName')}}</small>
                </div>

                <div class="medium-8 columns">
                    <table>

                        <!-- UNUSED -->

                    </table>

                </div>




                <div class="medium-8  columns">
                    <input value="DELETE" class="button success hollow" type="submit">

                </div>

            </form>
        </div>
    </div>
@endsection