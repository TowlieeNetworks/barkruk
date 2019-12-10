@extends('layouts/layout')

@section('title', 'customer')

@section('content')
    <div class="NC-wrap">
        <div class="NC-controlButtons">
            <a href="#"><img src="https://via.placeholder.com/50x50" alt=""></a>
            <a href="#"><img src="https://via.placeholder.com/50x50" alt=""></a>
            <a href="#"><img src="https://via.placeholder.com/50x50" alt=""></a>
        </div>

        <div class="NC-register">
            <div class="NC-overview">
                <ul style="overflow-y: scroll; height: 400px;">
                    <li><p>Example Preview</p><p>€456,39</p></li>
                </ul>
                <div class="NC-total">
                    <li><p>Total:</p><p>€999,99</p></li>
                </div>
            </div>
            <a href="#">Add Item</a>
        </div>

        <div class="NC-form-wrap">
            <div class="NC-search">
                <input type="text" id="searchbar" name="searchbar" placeholder="Search..">
                <input type="submit" id="sb-button" value="">
            </div>
            <form id="NC-form" name="NC-form" class="NC-form" action="" style="background:yellow">
                <div class="NC-input">
                    <input type="text" id="firstname" name="firstname" placeholder="First Name" required>
                    <input type="text" id="lastname" name="lastname" placeholder="Last Name" required>
                    <input type="text" id="companyName" name="companyName" placeholder="Company Name" required>
                    <input type="email" id="email" name="email" placeholder="E-mail" required>
                    <input type="text" id="city" name="city" placeholder="City" required>
                    <input type="text" id="address" name="address" placeholder="Address" required>
                </div>
                <div class="NC-comment">
                    <textarea name="comment" id="comment" cols="44" rows="10" placeholder="Comment about User.."></textarea>
                </div>
                <input class="NC-submit" type="submit" value="Confirm">
            </form>

        </div>
    </div>



@endsection