@extends('layouts.app')

@section('content')


    <h1>Sales dashboard</h1>
    <ul>
        <li><a href="{{ route('sales.create') }}">klant aanmaken</a></li>
        <li><a href="">prijsopgave maken</a></li>
        <li><a href="">prijsopgave > offerte</a></li>
        <li><a href="">offerte emailen naar klant</a></li>
        <li><a href="">opmerkingen bij nieuwe klant</a></li>
    </ul>

    @if(isset($data))

        @dd($data)

    @else

        <p>geen data gevonden</p>

    @endif


@endsection