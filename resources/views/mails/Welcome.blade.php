@component('mail::message')
    # Account Creation Confirmation.

    Your account has been created.

    E-mail: {{ $my_data['email'] }}
    Password: {{ $my_data['password'] }}

    We advise you to change your password as soon as possible.
        1. go to www.Barroc-Intense.nl.
        2. press the login button.
        3. click on forgot password.
        4. look in your mail and click on the reset password button.
        5. now fill in a new password and you are good to go.


    Thanks,
    {{ config('app.name') }}
@endcomponent