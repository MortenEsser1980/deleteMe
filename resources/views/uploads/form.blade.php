@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="medium-12 large-12 columns">
            <?php $modify = ""; ?>
            <h4>{{ $modify == 1 ? 'Modify Program' : 'New Upload' }}</h4>
            <form action="{{ $modify == 1 ? route('update_client', [ 'client_id' => $client_id ]) : route('create_client') }}" method="post">

                <div class="medium-8  columns">
                    <label>Attach File</label>
                    <input value="ATTACH FILE" class="button success hollow" type="submit">
                </div>

                <div class="medium-8  columns">
                    <label>Message</label>
                    <input name="uploadMessage" type="text" value="{{ old('uploadMessage') ? old('uploadMessage') : $uploadMessage }}">
                    <small class="error">{{$errors->first('uploadMessage')}}</small>
                </div>

                <div class="medium-8  columns">


                    <table>
                        <tr><td><h4>Share with Groups</h4></td><td>Select</td></tr>
                        <tr>
                            <td>Nye ledere Program 22</td>
                            <td><input type="checkbox"></td>
                        </tr>
                        <tr>
                            <td>Nye ledere Program 18</td>
                            <td><input type="checkbox"></td>
                        </tr>


                    </table>
                </div>

                <div class="medium-8  columns">


                    <table>
                        <tr><td><h4>Share with Clients</h4></td><td>Select</td></tr>
                        <tr>
                            <td>Ole Meyer</td>
                            <td><input type="checkbox"></td>
                        </tr>
                        <tr>
                            <td>Morten Schrøder</td>
                            <td><input type="checkbox"></td>
                        </tr>


                    </table>
                </div>

                <div class="medium-8  columns">


                    <table>
                        <tr><td><h4>Share with everyone</h4></td><td>Select</td></tr>
                        <tr>
                            <td>Make this document public for everyone</td>
                            <td><input type="checkbox"></td>
                        </tr>



                    </table>
                </div>

                <div class="medium-8  columns">

                    <input value="UPLOAD" class="button success hollow" type="submit">
                </div>

            </form>
        </div>
    </div>
@endsection