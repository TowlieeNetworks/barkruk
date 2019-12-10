<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/homepage.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <title>Barroc Intense</title>
</head>
<body>
<header>
    <img id="headerlogo" src="images/Logo6_klein.png" alt="logo">
    <img id="headermenu" src="images/menu.png" alt="menu">
    <a href="{{ route('login') }}">Login</a>
</header>
<main>
    <div class="lb-wrap">
        <div class="logo-big">
            <a href="">Example</a>
            <img src="images/Logo2_groot.png" alt="barroc intense">
        </div>
    </div>
    <div class="bl-wrap">
        <div class="bit-light">
            <h2>Barroc Intese Italian Light</h2>
            <img src="images/bit-light.png" alt="bit light">
        </div>
    </div>
    <div class="bd-wrap">
        <div class="bit-deluxe">
            <h2>Barroc Intense Italisan Deluxe</h2>
            <img src="images/bit-deluxe.png" alt="bit deluxe">
        </div>
    </div>

    <div class="contactForm" style="border: 1px black solid; margin: 0 auto; margin-bottom: 40px;">
        <h5>Contact Formulier</h5>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('contact.store') }}" class="form-group" method="post">
            @csrf
            <div class="personal_input">
                <label for="full_name" class="col-md-4 col-form-label text-md-right">Volledige Naam</label>
                <input class="col-lg-2" type="text" id="full_name" name="full_name" placeholder="Volledige Naam" required><br>

                <label for="email" class="col-md-4 col-form-label text-md-right">E-mail</label>
                <input class="col-lg-2" type="email" id="email" name="email" placeholder="E-mail" required><br>
            </div>

            <div class="company_input">
                <label for="company_name" class="col-md-4 col-form-label text-md-right">Bedrijfs Naam</label>
                <input class="col-lg-2" type="text" id="company_name" name="company_name" placeholder="Bedrijfs Naam" required><br>

                <label for="street_name" class="col-md-4 col-form-label text-md-right">Straat Naam</label>
                <input class="col-lg-2" type="text" id="street_name" name="street_name" placeholder="Straat Naam" required><br>

                <label for="number" class="col-md-4 col-form-label text-md-right">Huis Nummer</label>
                <input class="col-lg-2" type="text" id="number" name="number" placeholder="Huis Nummer" required><br>

                <label for="postal_code" class="col-md-4 col-form-label text-md-right">Post Code</label>
                <input class="col-lg-2" type="text" id="postal_code" name="postal_code" placeholder="Post Code" required><br>

                <label for="city" class="col-md-4 col-form-label text-md-right">Stad</label>
                <input class="col-lg-2" type="text" id="city" name="city" placeholder="Stad" required><br>

                <label for="phone_number" class="col-md-4 col-form-label text-md-right">Telefoon Nummer</label>
                <input class="col-lg-2" type="text" id="phone_number" name="phone_number" placeholder="0612345678 / 0761234567" required><br>
            </div>

            <input class="btn btn-primary" type="submit" value="Confirm" style="width: 25% ; margin-left: 25%;">
        </form>

    </div>
</main>
<footer>

</footer>
</body>
</html>