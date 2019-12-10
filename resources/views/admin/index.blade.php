@extends('layouts.app')

@section('content')
    @if ($errors->any())
        <div class="alert alert-success">
            <strong>{!! implode('', $errors->all('<div>:message</div>')) !!}</strong>
        </div>
    @endif

    <h1>welkom op het admin dashboard</h1>

    <a href="{{ route('admin.create') }}">maak een nieuwe klant aan</a>
    <label>{{password_hash('testtest', PASSWORD_DEFAULT)}}</label>


@endsection