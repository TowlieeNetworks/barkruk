@extends('layouts.app')


@section('content')
        <h1 class="col-md-5 text-md-right">Create Quotation</h1>

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
        <div>
        <label for="productname1" class="col-md-4 col-form-label text-md-right">product Naam</label>

        <select name="Customer" >
                    @foreach($customers as $customer)
                        <option value="{{$customer->id}}">{{$customer->name}}</option>
                        @endforeach
                </select>
        </div>
        <label for="productname1" class="col-md-4 col-form-label text-md-right">product Naam</label>

                <select name="Productname"  >
                    @foreach($supplies as $supply)
                        <option value="{{$supply->id}}">{{$supply->name}}</option>
                    @endforeach
                </select>
        <div>
        <label class="col-md-4 col-form-label text-md-right">description</label>
        <input type="text" id="description" name="description" required>
        </div>

        <div>
            <label class="col-md-4 col-form-label text-md-right" for="date">Gewenste datum van levering</label>
            <input type="date" id="date" name="date" placeholder="Gewenste datum van levering" >
        </div>

                    <input class="btn btn-primary" type="submit" value="Confirm" style="width: 25% ; margin-left: 25%;">


    </form>

@endsection