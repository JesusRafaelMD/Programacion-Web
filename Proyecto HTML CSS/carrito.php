<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="preload" href="normalize.css" as="style">
    <link rel="stylesheet" href="normalize.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Krub:wght@400;700&display=swap" rel="stylesheet">
    <link rel="preload" href="css/styles.css" as="style">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
<header>
        <h1> <img class="logo" src="imagenes/betsy3.png" alt="logo"> </h1>
    </header>

    <div class="nav-bg">
      <nav class="navegacion-principal contenedor">
          <a href="index.html">Inicio</a>
          <a href="nosotros.html">Quienes somos</a>
          <!-- <a href="#">Ventas</a> -->
          <div class="dropdown">
              <button class="dropbtn">Catálogo
                <i class="fa fa-caret-down"></i>
              </button>
              <div class="dropdown-content">
                <a href="catalogo.html">Hombre</a>
                <a href="#">Mujer</a>
                <a href="#">Niños</a>
              </div>
            </div>
          <!--<a href="#">Clientes</a>-->
          <a href="contacto.html">Contacto</a>
      </nav>
  </div>

    <?php
        //include_once('layout/menu.php');
    ?>

    <main>
        <?php
            $response = json_decode(file_get_contents('C:\Users\Jesus\Downloads\Proyecto HTML CSS\api_productos.php'), true);
            echo $response;
            if($response['statuscode'] == 200){
                foreach($response['items'] as $item){
                    include('layout/items.php');
                }
            }else{
                // mostrar error
            }
        ?>
    </main>

    <script src="js/main.js"></script>

    <footer class="footer">
        <p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &#174;Betsy. <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-at" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <circle cx="12" cy="12" r="4" />
                <path d="M16 12v1.5a2.5 2.5 0 0 0 5 0v-1.5a9 9 0 1 0 -5.5 8.28" />
              </svg> contacto@Betsy.com 
            <a href="tel:8717819233"> </a> <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-phone" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
              </svg>  8717819233 </p>
    </footer>
</body>
</html>