@extends('layouts.app')

@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.store') }}" class="form form-group" method="post" style="margin-top: 1%;">
        @csrf
        <div class="personal_input">
            <label for="full_name" class="col-md-4 col-form-label text-md-right">Volledige Naam *</label>
            <input class="col-lg-2" type="text" id="full_name" name="full_name" placeholder="Volledige Naam" required><br>

            <label for="email" class="col-md-4 col-form-label text-md-right">E-mail *</label>
            <input class="col-lg-2" type="email" id="email" name="email" placeholder="E-mail" required><br>

            <label for="notes" class="col-md-4 col-form-label text-md-right">Notities</label>
            <textarea class="col-lg-2" type="text" id="notes" name="notes" rows="4" cols="50" placeholder="Enter notes here..."></textarea><br>
        </div>
        <div class="company_input">
            <label for="company_name" class="col-md-4 col-form-label text-md-right">Bedrijfs Naam *</label>
            <input class="col-lg-2" type="text" id="company_name" name="company_name" placeholder="Bedrijfs Naam" required><br>

            <label for="street_name" class="col-md-4 col-form-label text-md-right">Straat Naam</label>
            <input class="col-lg-2" type="text" id="street_name" name="street_name" placeholder="Straat Naam"><br>

            <label for="number" class="col-md-4 col-form-label text-md-right">Huis Nummer</label>
            <input class="col-lg-2" type="text" id="number" name="number" placeholder="Huis Nummer"><br>

            <label for="postal_code" class="col-md-4 col-form-label text-md-right">Post Code</label>
            <input class="col-lg-2" type="text" id="postal_code" name="postal_code" placeholder="Post Code"><br>

            <label for="city" class="col-md-4 col-form-label text-md-right">Stad</label>
            <input class="col-lg-2" type="text" id="city" name="city" placeholder="Stad"><br>

            <label for="phone_number" class="col-md-4 col-form-label text-md-right">Telefoon Nummer *</label>
            <input class="col-lg-2" type="text" id="phone_number" name="phone_number" placeholder="0612345678 / 0761234567" required><br>

            <div id="wrapper">
                <label for="yes_no" class="col-md-4 col-form-label text-md-right">BKR Registered</label>
                <input type="radio" name="yes_no" value="true">Yes</input>
                <input type="radio" name="yes_no" value="false">No</input>
            </div>

            <label for="" style="width: 25%; margin-left: 46.5%">* = required</label>
        </div>
        <input class="btn btn-primary" type="submit" value="Confirm" style="width: 25% ; margin-left: 25.5%;">
    </form>
@endsection