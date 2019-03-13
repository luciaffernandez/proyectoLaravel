<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Página principal</title>
        <style>
            #cabecera{
                background-color: #002752;
                color:white;
                height: 200px;
                margin:0;
                width:auto;
                margin-bottom: 30px;
            }
            .img{
                width: 100px;
                float:left;
                padding-right:20px;
            }
            .logo{
                padding:30px;
            }
            li{
                style:none;
                display:inline-block;
            }
            a{
                style:none;
                color:white;
                padding: 20px;
                padding-left: 0;
            }
        </style>
    </head>
    <body>
        <header>
            <div id="cabecera">
                <div class="logo">
                <img src="./img/logo.png" class="img">
                <h1>EMPRESA</h1>
                </div>
                <nav>
                    <ul>
                        <li><a href="/">HOME</a></li>
                        <li><a href="about">SOBRE NOSOTROS</a></li>
                        <li><a href="contacto">CONTACTO</a></li>
                        <li><a href="productos">PRODUCTOS</a></li>
                    </ul>
                </nav>
            </div>

        </header>
        <div class="contenidoPrincipal">
            <div>
                @yield ("about")
                @yield ("contacto")
                @yield ("index")
                @yield ("productos")
            </div>
        </div>
    </body>
</html>

