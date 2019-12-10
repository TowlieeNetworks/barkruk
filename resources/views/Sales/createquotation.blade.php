@extends('layouts.app')


@section('content')
<label class="col-md-4 col-form-label text-md-right">Create Quotation</label>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form id="NC_form" name="NC_form" class="form-group" action="{{ route('quotations.store') }}" method="post">
    @csrf
        {{--bedrijf/naamklant, de heer/mevrouw naamklant, straatnaam + huisnummer, postcode + stad--}}

        {{--        //doorsturen naar cont          --}}
        <div class="quotation_input">
        <label for="full_name" class="col-md-4 col-form-label text-md-right">Bedrijfsnaam</label>
        <input class="col-lg-2" type="text" id="Company_name" name="Company_name" placeholder="BedrijfsNaam" required><br>

        <label for="full_name" class="col-md-4 col-form-label text-md-right">Klant naam</label>
        <input class="col-lg-2" type="text" id="Customer_name" name="Customer_name" placeholder="Klant naam" required><br>

        <label for="full_name" class="col-md-4 col-form-label text-md-right">Straatnaam</label>
        <input class="col-lg-2" type="text" id="Street_name" name="Street_name" placeholder="straatnaam" required><br>

        <label for="full_name" class="col-md-4 col-form-label text-md-right">Bedrijf- / Naamklant</label>
        <input class="col-lg-2" type="Number" id="House_number" name="House_number" placeholder="huisnummer" required><br>

        <label for="full_name" class="col-md-4 col-form-label text-md-right">Postcode</label>
        <input class="col-lg-2" type="text" id="Postal_code" name="Postal_code" placeholder="Postcode" required><br>

        <label for="full_name" class="col-md-4 col-form-label text-md-right">Stad</label>
        <input class="col-lg-2" type="text" id="City" name="City" placeholder="Stad" required><br>
        </div>


        <input class="btn btn-primary" type="submit" value="Confirm" style="width: 25% ; margin-left: 25%;">

    </form>

@endsection