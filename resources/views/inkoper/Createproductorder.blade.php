@extends('layouts.app')

@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form id="NC_form" name="NC_form" class="form-group" action="{{ route('inkoop.store') }}" method="post">
        <div class="Order_Product">
            <h1 class="col-md-4  text-md-right">Order Product</h1>

            @csrf
            <h2 class="col-md-4 text-md-right">Product 1</h2>
            <label for="productname1" class="col-md-4 col-form-label text-md-right">product Naam</label>

            <select name="productname1">
                @foreach($supplies as $supply)
                    <option value="{{$supply->id}}">{{$supply->name}}</option>
                @endforeach
            </select>

            <div>
                <label class="col-md-4 text-md-right">Hoeveelheid</label>
                <input type="number" id="purchase_amount" name="purchase_amount1" required>
            </div>

            <div>
                <label for="date1" class="col-md-4 col-form-label text-md-right">aflevings datum</label>
                <input class="col-lg-2" type="date" id="date1" name="date1" placeholder="date" required><br>
            </div>



            <h2 class="col-md-4 text-md-right">Product 2</h2>
            <label for="productname2" class="col-md-4 col-form-label text-md-right">product Naam</label>

            <select name="productname2">
                @foreach($supplies as $supply)
                    <option value="{{$supply->id}}">{{$supply->name}}</option>
                @endforeach
            </select>

            <div>
                <label class="col-md-4 text-md-right">Hoeveelheid</label>
                <input type="number" id="purchase_amount" name="purchase_amount2" required>
            </div>

            <div>
                <label for="date2" class="col-md-4 col-form-label text-md-right">aflevings datum</label>
                <input class="col-lg-2" type="date" id="date2" name="date2" placeholder="date" required><br>
            </div>



            <h2 class="col-md-4 text-md-right">Product 3</h2>
            <label for="productname3" class="col-md-4 col-form-label text-md-right">product Naam</label>

            <select name="productname3">
                @foreach($supplies as $supply)
                    <option value="{{$supply->id}}">{{$supply->name}}</option>
                @endforeach
            </select>

            <div>
                <label class="col-md-4 text-md-right">Hoeveelheid</label>
                <input type="number" id="purchase_amount" name="purchase_amount3" required>
            </div>

            <div>
                <label for="date3" class="col-md-4 col-form-label text-md-right">aflevings datum</label>
                <input class="col-lg-2" type="date" id="date3" name="date3" placeholder="date" required><br>
            </div>
        </div>
        <input class="btn btn-primary" type="submit" value="Order_Product" style="width: 25% ; margin-left: 25%;">
    </form>
@endsection