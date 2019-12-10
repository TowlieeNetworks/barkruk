@extends('layouts.app')

@section('content')
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

                    You are logged in!

                        <a href="{{ route('sales.index') }}" class="btn btn-primary">sales</a>
                        <a href="{{ route('sales.create') }}" class="btn btn-primary">newcustomer</a>
                        <a href="{{ route('customer.index') }}" class="btn btn-primary">Customer Dashboard</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
