@extends('layouts.app')

@section('content')
  <div class="row">
    <div class="medium-12 large-12 columns">
        <?php $modify = ""; ?>
      <h4>{{ $modify == 1 ? 'Modify Program' : 'New Program' }}</h4>
      <form action="{{ $modify == 1 ? route('update_client', [ 'client_id' => $client_id ]) : route('create_client') }}" method="post">
        <div class="medium-4  columns">
          <label>Program Name</label>
          <input name="programName" type="text" value="{{ old('programName') ? old('programName') : $programName }}">
          <small class="error">{{$errors->first('programName')}}</small>
        </div>
        <div class="medium-8  columns">
          <label>Description</label>
          <input name="programDescription" type="text" value="{{ old('programDescription') ? old('programDescription') : $programDescription }}">
          <small class="error">{{$errors->first('programDescription')}}</small>
        </div>
        <div class="medium-4  columns">
          <label>Start Date</label>
          <input name="programStartDates" type="text" value="{{ old('programStartDate') ? old('programStartDate') : $programStartDate }}">
          <small class="error">{{$errors->first('programStartDate')}}</small>
        </div>
        <div class="medium-4  columns">
          <label>End Date</label>
          <input name="programEndDate" type="text" value="{{ old('programEndDate') ? old('programEndDate') : $programEndDate}}">
          <small class="error">{{$errors->first('programEndDate')}}</small>
        </div>
        <div class="medium-4  columns">
          <label>Price</label>
          <input name="programPrice" type="text" value="{{ old('price') ? old('price') : $programPrice }}">
          <small class="error">{{$errors->first('price')}}</small>
        </div>
        <div class="medium-12  columns">
          <input value="SAVE" class="button success hollow" type="submit">
        </div>
      </form>
    </div>
  </div>
@endsection