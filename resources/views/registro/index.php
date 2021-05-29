<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <title>Registro</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/registro/styles.css">

    <!-- include alertify.css -->
    <link rel="stylesheet" href="css/alertify.min.css">

    <!-- include boostrap theme  -->
    <link rel="stylesheet" href="css/themes/bootstrap.min.css">

    <!-- include alertify script -->
    <script src="js/alertify.min.js"></script>
</head>

<body>
    <div class="container" id="registration-form">
        <div class="image"></div>
        <div class="frm" id="app" @submit="checkForm" novalidate="true">
            <h1>Registro</h1>
            <form>
                <div class="form-group">
                    <label for="username">Nombre:</label>
                    <input type="text" class="form-control" v-model="nombre" placeholder="Enter ">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" v-model="email" placeholder="Enter ">
                </div>
                <div class="form-group">
                    <label for="ubicacion">Ubicacion:</label>
                    <input type="text" class="form-control" v-model="ubicacion" placeholder="Enter">
                </div>
                <div class="form-group">
                    <label for="pwd">Contraseña:</label>
                    <input type="password" class="form-control" v-model="pwd" placeholder="password">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-lg">Registrarse</button>
                </div>
            </form>
        </div>
    </div>

    <script src="js/vue.js"></script>
    <script src="js/registro/myscript.js"></script>
</body>

</html>
