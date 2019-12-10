@extends('layouts.app')

@section('content')


    <h1>Sales dashboard</h1>
    <ul>
        <li><a href="{{ route('sales.create') }}">klant aanmaken</a></li>
        <li><a href="{{ route('quotations.create') }}">Offerte aanmaken</a></li>
        <li><a href="">prijsopgave > offerte</a></li>
        <li><a href="">offerte emailen naar klant</a></li>
        <li><a href="">opmerkingen bij nieuwe klant</a></li>
    </ul>

    <ul>
    @foreach($companies as $company)
            <li><p>{{$company->user->name}}<a href="{{ route('BKR_checkController.edit', $company->id)}}" type="submit" class="btn btn-primary"style="margin-left: 2em;">BKR Check</a></p></li>
        @endforeach
    </ul>


@endsection