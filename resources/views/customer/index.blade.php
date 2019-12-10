@extends('layouts.app')

@section('content')

    @if ($errors->any())
        <div class="alert alert-success">
            <strong>{!! implode('', $errors->all('<div>:message</div>')) !!}</strong>
        </div>
    @endif

    <h1>Klant Dashboard</h1>
    <form action="{{ route('malfunction.create') }}" class="form-group" style="width: 20%; margin: 0 auto;">
        <div>
            <label for="what">Wat is er kapot/fout</label>
            <input type="text" id="what" name="what" placeholder="Wat is er kapot?" style="width: 100%;">
        </div>

        <div>
            <label for="description">Beschrijving</label>
            <input type="text" id="description" name="description" placeholder="Beschrijf wat er aan de hand is" style="width: 100%;">
        </div>

        <div>
            <label for="date">Gewenste datum van bezoek</label>
            <input type="date" id="date" name="date" placeholder="Gewenste datum van bezoek" style="width: 100%;">
        </div>

        <div>
            <input class="btn-block" type="submit" value="Storings aanvraag maken." style="width: 100% ; margin-top: 5%;">
        </div>
    </form>
    
@endsection