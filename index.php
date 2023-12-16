
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rgistro e Inicio de secion</title>
    <link rel="stylesheet" href="src/styles.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Barlow+Condensed:wght@500&family=IBM+Plex+Mono:ital,wght@1,300&family=Montserrat:wght@500;600;700&family=Oswald:wght@500;600;700&display=swap" rel="stylesheet">
</head>
<body>



    <div class="container-form  login">
        <div class="information">
            <div class="info-childs">
                <h2>Bienvenido Nuevamente!!</h2>
                <p>Si aun no tienes cuenta registrate</p>
                <input type="button" value="Registrar" id="singup" value="singup">
            </div>
            
        </div>
        <div class="form-information">
            <div class="form-information-child">
                <h2>Inicia sesion</h2>
                <form class="form" action="secciones/vista_alumnos.php" method="post">
                    <label for="">
                        <i class='bx bx-envelope'></i>
                        <input type="text" name="" id="" placeholder="Ingrese su usoario o email">
                    </label>
                    <label for="">
                        <i class='bx bx-lock-alt' ></i>
                        <input type="text" name="" id="" placeholder="Ingrese su contraseña">
                    </label>
                    <input type="submit" value="Iniciar Sesion">
                </form>
            </div>
        </div>
    </div>

    <script src="src/script.js"></script>
</body>
</html>