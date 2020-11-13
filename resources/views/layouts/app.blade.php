<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bienvenido a TecnoIT</title>

    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/img-home.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" 
    integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">

</head>
<body>
    <nav class="menu">
        <label class="logo"> TecnoIT</label>
        <ul class="menu_items">
            <li class="active"><a href="/index">Home</a></li>
            <li><a href="/nosotros">Nosotros</a></li>
            <li><a href="/cursos">Cursos</a></li>
            <li><a href="/contacto">Contactanos</a></li>
        </ul>
    </nav>

    
    <div class="container-fluid p-0">

        @yield('container')

    </div>
 
    <footer>
        <nav class="footer">            
            <div class="footer_items">
                <span class="copyright quick-links">Copyright &copy; <a href="#">www.estiprop.com.ar</a> <script>document.write(new Date().getFullYear())</script>
                </span>
              </div>
        </nav>
    </footer>
    


</body>
</html>