@extends('layouts.app')

@section('content')
    @if ($errors->any())
        <div class="alert alert-success">
            <strong>{!! implode('', $errors->all('<div>:message</div>')) !!}</strong>
        </div>
    @endif


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard -> Barroc_Intense</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                            <h1>welkom op het admin dashboard</h1>


                        You are logged in!

                            <div>
                                <a href="{{ route('admin.create') }}" class="btn btn-primary">maak een nieuwe klant aan</a>
                            </div>

                        <div>
                            <a href="{{ route('sales.index') }}" class="btn btn-primary">Sales Dashboard</a>
                            <a href="{{ route('finance.index') }}" class="btn btn-primary">Finance Dashboard</a>
                            <a href="{{ route('maintenance.index') }}" class="btn btn-primary">Maintenance Dashboard</a>
                            <a href="{{ route('head_maintenance.index') }}" class="btn btn-primary">Head Maintenance Dashboard</a>
                            <a href="{{ route('inkoop.index') }}" class="btn btn-primary">Inkoop Dashboard</a>
                            <a href="{{ route('customer.index') }}" class="btn btn-primary">Customer Dashboard</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection