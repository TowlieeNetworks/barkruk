@extends('layouts.app')

@section('content')
    <div>
        <h2 class="card-header" style="width: 40%; margin: 0 auto; padding-left: 10px;">PROFILE INFO</h2>
        {{--@dd($user, $companyDetails, $role)--}}

        <div class="card" style="width: 40%; margin: 0 auto; align-items: normal; padding-left: 10px; padding-top: 10px;">

            <form method="get" action="{{ route('profile.edit', $user->id) }}">
                @csrf
{{--                @method('PUT')--}}

                <h3>Account</h3>
                <p class="InfoText">Naam: {{ $user->name }}</p>
                <p class="InfoText">Email: {{ $user->email }}</p>
                <p class="InfoText">Account Type: {{ $role->role_name }}</p>

                <h3>Company Details</h3>
                <p class="InfoText">Bedrijf Naam: {{ $companyDetails->company_name }}</p>
                <p class="InfoText">Straat Naam: {{ $companyDetails->street_name }}</p>
                <p class="InfoText">Huis Nummer: {{ $companyDetails->number }}</p>
                <p class="InfoText">Postcode: {{ $companyDetails->postal_code }}</p>
                <p class="InfoText">Stad: {{ $companyDetails->city }}</p>
                <p class="InfoText">Telefoon Nummer: {{ $companyDetails->phone_number }}</p>

                <button type="submit" class="btn btn-secondary" style="width: 20%; margin-bottom: 10px">
                    wijzig Gegevens.
                </button>
            </form>
        </div>
    </div>

    <div>
        <h2 class="card-header" style="width: 40%; margin: 0 auto; padding-left: 10px;">LEASE(S) INFO</h2>
        <div class="card" style="width: 40%; margin: 0 auto; align-items: normal; padding-left: 10px; padding-top: 10px;">
            @foreach ($leases as $lease)
                <div class="card">
                    <p> Lease Type = {{ $leaseTypes[$lease->leasetype_id - 1]->type_name }}</p>
                    @foreach($leaseRules as $leaseRule)
                        @if($leaseRule->lease_id != $lease->id)
                        @else
                            <ul>
                                <li>Product = {{ $products[$leaseRule->supply_id - 49]->name }}, Prijs = {{$leaseRule->price}}</li>
                            </ul>
                        @endif
                    @endforeach
                </div>
            @endforeach
        </div>
    </div>

    <div>
        <h2 class="card-header" style="width: 40%; margin: 0 auto; padding-left: 10px;">FACTUUR INFO</h2>
        <div class="card" style="width: 40%; margin: 0 auto; align-items: normal; padding-left: 10px; padding-top: 10px;">
            @foreach($facturen as $factuur)
                @if($factuur->user_id != $user->id)
                @else
                    <div class="card">
                        <p>Product naam = {{ $products[$factuur->supply_id - 49]->name }}</p>
                        <p>Hoeveelheid = {{ $factuur->amount }}</p>
                        <p>Prijs per stuk = {{ $products[$factuur->supply_id - 49]->unit_price }}</p>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
@endsection