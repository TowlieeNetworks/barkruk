@extends('layouts.app')

@section('content')


    <h1>finance dashboard</h1>

    <ul>
        @foreach($finances as $finance)
            <li><p>{{$finance->users->name}}<a href="{{ route('quotation_approved.edit', $finance->id)}}" type="submit" class="btn btn-primary"style="margin-left: 2em;">Approve</a></p></li>
        @endforeach
    </ul>

@endsection