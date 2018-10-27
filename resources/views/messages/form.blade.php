@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="medium-12 large-12 columns">
            <?php $modify = ""; ?>
            <h4>{{ $modify == 1 ? 'Modify Program' : 'New Message' }}</h4>
            <form action="{{ $modify == 1 ? route('update_client', [ 'client_id' => $client_id ]) : route('create_client') }}" method="post">

                <div class="medium-8  columns">
                    <label>Message Recipient</label>
                    <input name="messageRecipient" type="text" value="{{ old('messageRecipient') ? old('messageRecipient') : $messageRecipient}}">
                    <small class="error">{{$errors->first('messageRecipient')}}</small>
                </div>

                <div class="medium-8  columns">
                    <label>Contents</label>
                    <input name="messageContent" type="text" value="{{ old('messageContent') ? old('messageContent') : $messageContent }}">
                    <small class="error">{{$errors->first('messageContent')}}</small>
                </div>



                <div class="medium-8  columns">
                    <label>Email</label>
                    <input name="recipientEmail" type="text" value="{{ old('recipientEmail') ? old('recipientEmail') : $recipientEmail }}">
                    <small class="error">{{$errors->first('recipientEmail')}}</small>
                </div>
                <div class="medium-8  columns">
                    <input value="ATTACH FILE" class="button success hollow" type="submit">
                    <input value="SEND" class="button success hollow" type="submit">
                </div>

            </form>
        </div>
    </div>
@endsection