@extends('layouts.app')

@section('content')
    <div>
        <h2 class="card-header" style="width: 40%; margin: 0 auto; padding-left: 10px;">PROFILE INFO EDIT</h2>
        {{--@dd($user, $companyDetails, $role)--}}

        <div class="card" style="width: 40%; margin: 0 auto; align-items: normal; padding-left: 10px; padding-top: 10px;">

            <form method="post" action="{{ route('profile.update', $user->id) }}">
                @csrf
                {{ method_field('PUT') }}
                <h3 style="padding-left: 31%;">Account</h3>

                <label for="name" class="text-lg-right" style="width: 21%;">Naam:</label>
                <input type="text" name="name" value="{{$user->name}}" placeholder="{{$user->name}}"><br>

                <label for="email" class="text-lg-right" style="width: 21%;">Email:</label>
                <input type="email" name="email" value="{{$user->email}}" placeholder="{{$user->email}}"><br>


                <h3 style="padding-left: 18%;">Company Details</h3><br>

                <label for="companyName" class="text-lg-right" style="width: 21%;">Bedrijf Naam:</label>
                <input type="text" name="companyName" value="{{$companyDetails->company_name}}" placeholder="{{$companyDetails->company_name}}"><br>

                <label for="street_name" class="text-lg-right" style="width: 21%;">Straat Naam:</label>
                <input type="text" name="street_name" value="{{ $companyDetails->street_name }}" placeholder="{{ $companyDetails->street_name }}"><br>

                <label for="number" class="text-lg-right" style="width: 21%;">Huis Nummer:</label>
                <input type="number" name="number" value="{{ $companyDetails->number }}" placeholder="{{ $companyDetails->number }}"><br>

                <label for="postalcode" class="text-lg-right" style="width: 21%;">Post Code:</label>
                <input type="text" name="postalcode" value="{{ $companyDetails->postal_code }}" placeholder="{{ $companyDetails->postal_code }}"><br>

                <label for="city" class="text-lg-right" style="width: 21%;">Stad:</label>
                <input type="text" name="city" value="{{ $companyDetails->city }}" placeholder="{{ $companyDetails->city }}"><br>

                <label for="phone" class="text-lg-right" style="width: 21%;">Telefoon Nummer:</label>
                <input type="number" name="phone" value="{{ $companyDetails->phone_number }}" placeholder="{{ $companyDetails->phone_number }}"><br>

                <button type="submit" class="btn btn-secondary" style="width: 20%; margin-bottom: 10px">
                    wijzig Gegevens.
                </button>
            </form>
        </div>
    </div>
@endsection