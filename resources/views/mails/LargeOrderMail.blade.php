@component('mail::message')
    # A Large Order Has Been Made.

    {{ $my_data['user']['name'] }} has made a order of {{ $my_data['total'] }}

    name: {{ $my_data['product1']['name'] }}
    amount: {{ $my_data['amount1'] }}
    total price: {{ $my_data['total_price1'] }}

    name: {{ $my_data['product2']['name'] }}
    amount: {{ $my_data['amount2'] }}
    total price: {{ $my_data['total_price2'] }}

    name: {{ $my_data['product3']['name'] }}
    amount: {{ $my_data['amount3'] }}
    total price: {{ $my_data['total_price3'] }}

    Thanks,
    {{ config('app.name') }}
@endcomponent