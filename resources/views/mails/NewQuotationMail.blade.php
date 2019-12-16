@component('mail::message')

    Thanks {{$my_data['name']}} for your purchase.

    Your purchase of a {{$my_data['Supply']}}, with the description {{$my_data['description']}} has been approved.


    Kind regards,
    {{ config('app.name') }}

    @endcomponent