@props(['titre'])

@php
    $activeMenuItem = '';
    switch ($titre) {
        case 'Accueil':
            $activeMenuItem = 'Accueil';
            break;
        case 'Présentation':
            $activeMenuItem = 'Présentation';
            break;
        case 'Resultat':
            $activeMenuItem = 'Resultat';
            break;
        case 'Contact':
            $activeMenuItem = 'Contact';
            break;
        default:
            $activeMenuItem = '';
            break;
    }
@endphp


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>école | {{$titre}}</title>
    <style>
        header{
            display: flex;
            justify-content:space-between;
        }
        .div_h{
            display: flex;
            justify-content:space-between;
        }
        footer{
            display: flex;
            flex-wrap:wrap;
            padding-top: 20px;
        }
        .article{
            display: flex;
            justify-content:center;
            margin-bottom: 40px;
        }
        .menu_footer{
            margin-left: 180px;
            margin-right: 600px;
        }
        .div_footer{
            margin-right: 100px;
        }
        .para_footer{
            margin-left: 600px;
        }
        .logo{
            width: 60px;
            height: 60px;
        }
        .imagehome{
            width: 100%;
        }
        .pr{
            width: 1000px;
            margin-left: 200px;
            margin-top: 40px;
            margin-bottom: 40px;
        }
    </style>
</head>
<body>
    <x-headercompenet :activeMenuItem='$activeMenuItem'/>
    <section >
        <img src="{{ asset('storage/Photo/imag2.png') }}" alt="home" class="imagehome">
    </section>
    <section>
        {{$slot}}
    </section>

    <x-footercompenet />
</body>
</html>