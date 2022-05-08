<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfect builders</title>
    <meta content="author" name="Adam Broško">
    <link rel="icon short-cut" href="./images/skyscrapper.jpg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="./company.css" type="text/css">
    <link rel="stylesheet" href="./css/materialize.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body class="w-100">
    <!-- navigation -->
    <nav class="nav-wrapper teal z-depth-4 w-100" style="position: fixed; top: 0;">
        <a href="#top-page" style="margin-left: 5%;" class="brand-logo"><i id="builders-icon" class="large material-icons">account_balance</i> Perfect builds</a>
        <a href="#" class="sidenav-trigger" data-target="sidenav"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
        <li><a href="#projects">Naše projekty</a></li>
        <li><a href="#about">O nás</a></li>
        <li><a href="#team">Team</a></li>
        <li><a href="#contact">Kontakt</a></li>
        <li><a type="button" href="#login" class="btn teal waves-light waves-effect modal-trigger"><i class="material-icons">perm_identity</i></a></li>
        </ul>
    </nav>

    <ul class="sidenav" id="sidenav">
        <li><a href="#projects">Naše projekty</a></li>
        <li><a href="#about">O nás</a></li>
        <li><a href="#team">Team</a></li>
        <li><a href="#contact">Kontakt</a></li>
    </ul>

    <form method="POST" class="modal p-5 mt-5" id="login" style="margin-top: -3%">
            <div class="modal-content center">
                <h2>Prihlásenie</h2>
                <br>
                <div class="container mb-5">
                    <div>
                        <label for="name">E-mail</label>
                        <input type="email" class="validate" id="name" name="firstname" autocomplete="off">
                    </div>
                    <div>
                        <label for="surname">Heslo</label>
                        <input type="password" class="validate" id="surname" name="surname" autocomplete="off">
                    </div>
                </div>
                <button class="btn teal btn-large waves-light waves-effect mt-4" name="submit" type="submit">Prihlásiť <i class="material-icons">login</i></button>
            </div>
        </form>