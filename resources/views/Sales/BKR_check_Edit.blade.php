@extends('layouts.app')

@section('content')

<form id="NC_form" name="NC_form" class="form-group" action="{{ route('BKR_checkController.update', $company->id) }}" method="post">
    @method('PUT')
    @csrf
    <h1 class="col-md-5 text-md-right">Naam: {{$company->user->name}}</h1>
<div id="wrapper">
    <label for="yes_no" class="col-md-4 col-form-label text-md-right">BKR Registered</label>
    <input type="radio" name="yes_no" value="true" checked>Yes</input>
    <input type="radio" name="yes_no" value="false">No</input>
</div>
    <input class="btn btn-primary" type="submit" value="Update" style="width: 25% ; margin-left: 25%;">
</form>
@endsection