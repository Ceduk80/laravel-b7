<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <header>
        <a href=" {{ Route('home_page') }}">Home</a> | 
        <a href=" {{ Route('services_page') }}">Serviços</a> |
        <a href=" {{ Route('contact_page') }}">Contato</a> 
      
    </header>
    <hr>


    <main>
        @yield('content')
    </main>
    <hr>



    <footer>
        Rodapé
    </footer>
</body>

</html>
