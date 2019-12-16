@extends('layouts.app')

@section('content')

<?php

        $id = 1 ;

?>


<h1>maintenance dashboard</h1>

<div class="malfunctions_List">
    <div style="border: #1d68a7 1px solid; width: 10%; height: 25%">
        <h3>Storing $id</h3>
        <p>$broken_product</p>
        <p>$description</p>
        <p>$preferred_date</p>
        <p>$created_at</p>
        <a href="{{ route('malfunction.show', $id) }}" class="btn btn-primary">Bekijken</a>
    </div>
</div>

    @endsection