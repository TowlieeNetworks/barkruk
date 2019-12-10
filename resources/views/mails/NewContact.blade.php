@component('mail::message')
    # New Contact.

    Someone has filled in a contact form.

    Personal information:
        Name : {{ $my_data['name'] }}.
        Email : {{ $my_data['email'] }}.

    Company information:
        Company name : {{ $my_data['company_name'] }}.
        Street name : {{ $my_data['street_name'] }}.
        Number : {{ $my_data['number'] }}.
        Postal code : {{ $my_data['postal_code'] }}.
        City : {{ $my_data['city'] }}.
        Phone Number : {{ $my_data['phone_number'] }}.

    Thanks,
    {{ config('app.name') }}
@endcomponent