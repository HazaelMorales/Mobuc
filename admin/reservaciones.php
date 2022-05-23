<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
            <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!--Estilos de Fuentes--->
        <link href="https://fonts.googleapis.com/css?family=Barlow&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Courgette&display=swap" rel="stylesheet">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
        <link rel="stylesheet" type="text/css" href="css/styles.css">
        <link rel="stylesheet" type="text/css" href="css/contac.css">
        <link rel="stylesheet" href="css/style_admin.css">

        <title>Mobuc - Administrador</title>
    </head>
    <body>
        <div class="ContenedorPrincipal">
            <header>
                <div class="logo">
                    <img src="img/ucol.png" alt="" width="250px">
                </div>
                <nav>
                    <a class="qi" href="index.php">Inicio</a>
                    <a class="qi" href="reservaciones.php">Reservaciones</a>
                    <!--a class="qi" href="renovaciones.php">Renovaciones</a-->
                    <a class="qi" href="configuraciones.php">Configuraciones</a>
                </nav>
            </header>
            <!-- Aqui ira la informacion del administrador-->
            <div class="informacion">
                <h4>Reservaciones</h4>
                <!--div id="pedido1">
                    <div class="alumno">
                            <label for="estudiante">Estudiante: </label>
                            <label for="nombre">Natividad del Carmen Antonio Vazquez</label> <br>

                            <label for="email">Correo electronico:</label>
                            <label for="email_estudent">nantonio@ucol.mx</label> <br>

                            <label for="ejemplar"> Libro: </label>
                            <label for="nombre_libro">----</label> <br>
                            <button>Aceptar</button>
                            <button>Rechazar</button>
                    </div>
                    <div class="img">
                        <img src="img/libros/fundamentos.jpg" alt="Matematicas Discretas">
                    </div>
                </div-->
                    
                <div id="pedido2">
                    <div class="alumno">
                        <label for="estudiante">Estudiante: </label>
                        <label for="nombre">Mario Hazael Morales Montenegro</label> <br>

                        <label for="email">Correo electronico:</label>
                        <label for="email_estudent">mmorales13@ucol.mx</label> <br>

                        <label for="ejemplar"> Libro: </label>
                        <label for="nombre_libro">----</label> <br>
                        <button >Aceptar</button>
                        <button >Rechazar</button>
                    </div>
                    <div class="img">     
                        <img src="img/libros/c.jpg" alt="Fundamentos de programación">
                    </div>
                </div>
            </div>
            <!-- Aqui termina la informacion del administrador-->
            <footer>
                <div id="logos">
                    <a href="https://www.facebook.com/Biblioteca-de-Ciencias-del-Mar-160360921103339/"><img src="img/logos/fblogo.png" id="fb" alt=""></a>
                    <a href="http://127.0.0.1:5500/contactanos.html"><img src="img/logos/email.png" id="gmail" alt=""></a>
                </div>
                <div id="copyright">
                    &copy;Derechos Reservados 2018-2021 Universidad de Colima
                </div>
                <div id="mapsite">
                    <a href="#"><img src="img/logos/mapsite.png" id="ms" alt=""></a>
                </div>
            </footer>
        </div>
        <script src="js/main.js"></script>
    </body>
</html>