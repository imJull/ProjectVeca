<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond|Open+Sans+Condensed:300&display=swap" rel="stylesheet">
    <title>Main Page | AS2</title>
    <style>
        body {
            margin: 0%;
            background: #fafafa;
            width: 100%;
        }

        .container {
            margin: 2%;
        }

        .line {
            border: 1px solid #000;
            width: 100%;
        }

        /*header starts here*/
        .titlebar {
            width: 97%;
            margin: 0%;
            height: 7%;
            background: #000;
            display: flex;
            color: #fff;
            padding: 1%;
        }

        .logo {
            margin-left: 2%;
            width: 6%;
        }

        .logoimg {
            width: 100%;
        }

        .title {
            margin-left: 3%;
            margin-top: 2%;
            font-size: 40px;
        }

        .controls {
            margin-left: 35%;
            margin-top: 3%;
            font-size: 28px;
        }

        .controls a {
            text-decoration: none;
            color: #fff;
        }

        /*page conted starts here*/
        .main {
            width: 97%;
            margin: 0%;
            margin-top: 2%;
            height: 700px;
            display: flex;
        }

        /*bluebar*/
        .menucontrols {
            margin-left: 3%;
            width: 20%;
            background: #002c61;
            text-align: center;
            font-size: 28px;
            padding: 1%;
            height: 90%;
        }

        .menucontrols a {
            text-decoration: none;
            color: #fff;
        }

        .items {
            margin-top: 4%;
        }

        /*dashboard*/
        .Dashboard {
            margin-left: 0.5%;
            width: 70%;
            background: #ddd;
            padding-left: 1%;
            padding-right: 1%;
            height: 95%;
        }

        .Dashboard h2 {
            font-family: 'Cormorant Garamond', serif;
            font-size: 40px;
            margin-bottom: 1%;
        }

        .details {
            font-size: 25px;
            font-family: 'Open Sans Condensed', sans-serif;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="titlebar">
            <div class="logo">
                <a href="http://unadeca.ac.cr/home/"><img class="logoimg" src="Unadecalogo.png" alt="unadecalogo"></a>
            </div>
            <div class="title">Gestor de Horas Beca</div>
            <div class="controls">
                <a href="userinfo.html">
                    <!--{{usuarios->nombre.apellidoPaterno}}-->Usuario</a> | <a href="">Logout</a>
            </div>
        </div>
        <div class="main">
            <div class="menucontrols">
                <div class="items"><a href="addhours.html">Ingresar Horas
                        <!--addhours temporal--></a></div>
                <div class="items"><a href="rules.html">Reglamentos
                        <!--Rules temporal--></a></div>
                <div class="items"><a href="comments.html">Comentarios
                        <!--Coments temporal--></a></div>
                <div class="items"><a href="https://unadeca.ac.cr/moodle/">Moodle
                        <!--link to moodle--></a></div>
                <div class="items"><a href="aboutUs.html">Acerca de Nosotros
                        <!--About Us temporal--></a></div>
            </div>
            <div class="Dashboard">
                <div class="real">
                    <h2>Dashboard</h2>
                    <div class="line"></div>
                    <div class="details">
                        <p>
                            Estudiante:
                            <!--ususarios ->nombre-->Usuario Tal y Tal <br>Departamento:
                            <!--Departamento-->Mantenimiento <br>
                            Horas Trabajadas:
                            <!--TotalHoras--> 425 <br> Cantidad Acumulada:
                            <!--TatalAcumulado--> $$$$
                        </p>
                    </div>
                </div>
                <div class="horarios">
                    <h2>Horario de Trabajo</h2>
                    <div class="line"></div>
                    <table>

                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>