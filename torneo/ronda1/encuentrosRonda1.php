<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Link de boostrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />
    <!-- Link de font awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <title>Fase de grupos</title>
    <link rel="stylesheet" href="../../nuevoTorneo/listados/listas.css" />
</head>
<body>
    <header class="container">
        <div class="row">
            <div class="col-auto">
                <a href="menuRonda1.html">
                    <h1><i class="fas fa-arrow-alt-circle-left"></i></h1>
                </a>
            </div>
            <div class="col-auto me-auto">
                <a href="../../index.html">
                    <h1><i class="fas fa-volleyball-ball"></i> SGTV</h1>
                </a>
            </div>
        </div>
    </header>
    <main class="container main">
        <div class="container">
            <h3 class="tittleMain">Encuentros Fase de Grupos</h3>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <td class="columnaCabecera"></td>
                            <td class="columnaCabecera">
                                <p>
                                    <b>
                                        <center>GRUPO A</center>
                                    </b>
                                </p>
                            </td>
                            <td class="columnaCabecera"></td>
                        </tr>
                    </thead>
                    <?php

                    include("../../conexion/conexionServer.php");

                    $sql = "SELECT Cod_Equipo FROM equipos";
                    $consulta = mysqli_query($conexion, $sql);
                    $equipo = [];

                    while ($equipos = mysqli_fetch_array($consulta)) {
                        $equipo[] = $equipos["Cod_Equipo"];
                    }
                    ?>
                    <tbody>
                        <tr>
                            <td>
                                <center><?php echo $equipo[0]; ?></center>
                            </td>
                            <td>
                                <center>VS</center>
                            </td>
                            <td>
                                <center><?php echo $equipo[1]; ?></center>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <center><?php echo $equipo[0]; ?></center>
                            </td>
                            <td>
                                <center>VS</center>
                            </td>
                            <td>
                                <center><?php echo $equipo[2]; ?></center>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <center><?php echo $equipo[0]; ?></center>
                            </td>
                            <td>
                                <center>VS</center>
                            </td>
                            <td>
                                <center><?php echo $equipo[3]; ?></center>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <center><?php echo $equipo[1]; ?></center>
                            </td>
                            <td>
                                <center>VS</center>
                            </td>
                            <td>
                                <center><?php echo $equipo[2]; ?></center>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <center><?php echo $equipo[1]; ?></center>
                            </td>
                            <td>
                                <center>VS</center>
                            </td>
                            <td>
                                <center><?php echo $equipo[3]; ?></center>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <center><?php echo $equipo[2]; ?></center>
                            </td>
                            <td>
                                <center>VS</center>
                            </td>
                            <td>
                                <center><?php echo $equipo[3]; ?></center>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="col-xs-12">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <td class="columnaCabecera"></td>
                            <td class="columnaCabecera">
                                <p>
                                    <b>
                                        <center>GRUPO B</center>
                                    </b>
                                </p>
                            </td>
                            <td class="columnaCabecera"></td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <center><?php echo $equipo[4]; ?></center>
                            </td>
                            <td>
                                <center>VS</center>
                            </td>
                            <td>
                                <center><?php echo $equipo[5]; ?></center>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <center><?php echo $equipo[4]; ?></center>
                            </td>
                            <td>
                                <center>VS</center>
                            </td>
                            <td>
                                <center><?php echo $equipo[6]; ?></center>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <center><?php echo $equipo[4]; ?></center>
                            </td>
                            <td>
                                <center>VS</center>
                            </td>
                            <td>
                                <center><?php echo $equipo[7]; ?></center>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <center><?php echo $equipo[5]; ?></center>
                            </td>
                            <td>
                                <center>VS</center>
                            </td>
                            <td>
                                <center><?php echo $equipo[6]; ?></center>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <center><?php echo $equipo[5]; ?></center>
                            </td>
                            <td>
                                <center>VS</center>
                            </td>
                            <td>
                                <center><?php echo $equipo[7]; ?></center>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <center><?php echo $equipo[6]; ?></center>
                            </td>
                            <td>
                                <center>VS</center>
                            </td>
                            <td>
                                <center><?php echo $equipo[7]; ?></center>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="col-xs-12">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <td class="columnaCabecera"></td>
                            <td class="columnaCabecera">
                                <p>
                                    <b>
                                        <center>GRUPO C</center>
                                    </b>
                                </p>
                            </td>
                            <td class="columnaCabecera"></td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <center><?php echo $equipo[8]; ?></center>
                            </td>
                            <td>
                                <center>VS</center>
                            </td>
                            <td>
                                <center><?php echo $equipo[9]; ?></center>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <center><?php echo $equipo[8]; ?></center>
                            </td>
                            <td>
                                <center>VS</center>
                            </td>
                            <td>
                                <center><?php echo $equipo[10]; ?></center>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <center><?php echo $equipo[8]; ?></center>
                            </td>
                            <td>
                                <center>VS</center>
                            </td>
                            <td>
                                <center><?php echo $equipo[11]; ?></center>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <center><?php echo $equipo[9]; ?></center>
                            </td>
                            <td>
                                <center>VS</center>
                            </td>
                            <td>
                                <center><?php echo $equipo[10]; ?></center>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <center><?php echo $equipo[9]; ?></center>
                            </td>
                            <td>
                                <center>VS</center>
                            </td>
                            <td>
                                <center><?php echo $equipo[11]; ?></center>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <center><?php echo $equipo[10]; ?></center>
                            </td>
                            <td>
                                <center>VS</center>
                            </td>
                            <td>
                                <center><?php echo $equipo[11]; ?></center>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="col-xs-12">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <td class="columnaCabecera"></td>
                            <td class="columnaCabecera">
                                <p>
                                    <b>
                                        <center>GRUPO D</center>
                                    </b>
                                </p>
                            </td>
                            <td class="columnaCabecera"></td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <center><?php echo $equipo[12]; ?></center>
                            </td>
                            <td>
                                <center>VS</center>
                            </td>
                            <td>
                                <center><?php echo $equipo[13]; ?></center>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <center><?php echo $equipo[12]; ?></center>
                            </td>
                            <td>
                                <center>VS</center>
                            </td>
                            <td>
                                <center><?php echo $equipo[14]; ?></center>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <center><?php echo $equipo[12]; ?></center>
                            </td>
                            <td>
                                <center>VS</center>
                            </td>
                            <td>
                                <center><?php echo $equipo[15]; ?></center>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <center><?php echo $equipo[13]; ?></center>
                            </td>
                            <td>
                                <center>VS</center>
                            </td>
                            <td>
                                <center><?php echo $equipo[14]; ?></center>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <center><?php echo $equipo[13]; ?></center>
                            </td>
                            <td>
                                <center>VS</center>
                            </td>
                            <td>
                                <center><?php echo $equipo[15]; ?></center>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <center><?php echo $equipo[14]; ?></center>
                            </td>
                            <td>
                                <center>VS</center>
                            </td>
                            <td>
                                <center><?php echo $equipo[15]; ?></center>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="col-xs-12">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <td class="columnaCabecera"></td>
                            <td class="columnaCabecera">
                                <p>
                                    <b>
                                        <center>GRUPO E</center>
                                    </b>
                                </p>
                            </td>
                            <td class="columnaCabecera"></td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <center><?php echo $equipo[16]; ?></center>
                            </td>
                            <td>
                                <center>VS</center>
                            </td>
                            <td>
                                <center><?php echo $equipo[17]; ?></center>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <center><?php echo $equipo[16]; ?></center>
                            </td>
                            <td>
                                <center>VS</center>
                            </td>
                            <td>
                                <center><?php echo $equipo[18]; ?></center>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <center><?php echo $equipo[16]; ?></center>
                            </td>
                            <td>
                                <center>VS</center>
                            </td>
                            <td>
                                <center><?php echo $equipo[19]; ?></center>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <center><?php echo $equipo[17]; ?></center>
                            </td>
                            <td>
                                <center>VS</center>
                            </td>
                            <td>
                                <center><?php echo $equipo[18]; ?></center>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <center><?php echo $equipo[17]; ?></center>
                            </td>
                            <td>
                                <center>VS</center>
                            </td>
                            <td>
                                <center><?php echo $equipo[19]; ?></center>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <center><?php echo $equipo[18]; ?></center>
                            </td>
                            <td>
                                <center>VS</center>
                            </td>
                            <td>
                                <center><?php echo $equipo[19]; ?></center>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="col-xs-12">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <td class="columnaCabecera"></td>
                            <td class="columnaCabecera">
                                <p>
                                    <b>
                                        <center>GRUPO F</center>
                                    </b>
                                </p>
                            </td>
                            <td class="columnaCabecera"></td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <center><?php echo $equipo[20]; ?></center>
                            </td>
                            <td>
                                <center>VS</center>
                            </td>
                            <td>
                                <center><?php echo $equipo[21]; ?></center>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <center><?php echo $equipo[20]; ?></center>
                            </td>
                            <td>
                                <center>VS</center>
                            </td>
                            <td>
                                <center><?php echo $equipo[22]; ?></center>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <center><?php echo $equipo[20]; ?></center>
                            </td>
                            <td>
                                <center>VS</center>
                            </td>
                            <td>
                                <center><?php echo $equipo[23]; ?></center>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <center><?php echo $equipo[21]; ?></center>
                            </td>
                            <td>
                                <center>VS</center>
                            </td>
                            <td>
                                <center><?php echo $equipo[22]; ?></center>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <center><?php echo $equipo[21]; ?></center>
                            </td>
                            <td>
                                <center>VS</center>
                            </td>
                            <td>
                                <center><?php echo $equipo[23]; ?></center>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <center><?php echo $equipo[22]; ?></center>
                            </td>
                            <td>
                                <center>VS</center>
                            </td>
                            <td>
                                <center><?php echo $equipo[23]; ?></center>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="col-xs-12">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <td class="columnaCabecera"></td>
                            <td class="columnaCabecera">
                                <p>
                                    <b>
                                        <center>GRUPO G</center>
                                    </b>
                                </p>
                            </td>
                            <td class="columnaCabecera"></td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <center><?php echo $equipo[24]; ?></center>
                            </td>
                            <td>
                                <center>VS</center>
                            </td>
                            <td>
                                <center><?php echo $equipo[25]; ?></center>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <center><?php echo $equipo[24]; ?></center>
                            </td>
                            <td>
                                <center>VS</center>
                            </td>
                            <td>
                                <center><?php echo $equipo[26]; ?></center>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <center><?php echo $equipo[24]; ?></center>
                            </td>
                            <td>
                                <center>VS</center>
                            </td>
                            <td>
                                <center><?php echo $equipo[27]; ?></center>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <center><?php echo $equipo[25]; ?></center>
                            </td>
                            <td>
                                <center>VS</center>
                            </td>
                            <td>
                                <center><?php echo $equipo[26]; ?></center>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <center><?php echo $equipo[25]; ?></center>
                            </td>
                            <td>
                                <center>VS</center>
                            </td>
                            <td>
                                <center><?php echo $equipo[27]; ?></center>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <center><?php echo $equipo[26]; ?></center>
                            </td>
                            <td>
                                <center>VS</center>
                            </td>
                            <td>
                                <center><?php echo $equipo[27]; ?></center>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="col-xs-12">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <td class="columnaCabecera"></td>
                            <td class="columnaCabecera">
                                <p>
                                    <b>
                                        <center>GRUPO H</center>
                                    </b>
                                </p>
                            </td>
                            <td class="columnaCabecera"></td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <center><?php echo $equipo[28]; ?></center>
                            </td>
                            <td>
                                <center>VS</center>
                            </td>
                            <td>
                                <center><?php echo $equipo[29]; ?></center>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <center><?php echo $equipo[28]; ?></center>
                            </td>
                            <td>
                                <center>VS</center>
                            </td>
                            <td>
                                <center><?php echo $equipo[30]; ?></center>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <center><?php echo $equipo[28]; ?></center>
                            </td>
                            <td>
                                <center>VS</center>
                            </td>
                            <td>
                                <center><?php echo $equipo[31]; ?></center>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <center><?php echo $equipo[29]; ?></center>
                            </td>
                            <td>
                                <center>VS</center>
                            </td>
                            <td>
                                <center><?php echo $equipo[30]; ?></center>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <center><?php echo $equipo[29]; ?></center>
                            </td>
                            <td>
                                <center>VS</center>
                            </td>
                            <td>
                                <center><?php echo $equipo[31]; ?></center>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <center><?php echo $equipo[30]; ?></center>
                            </td>
                            <td>
                                <center>VS</center>
                            </td>
                            <td>
                                <center><?php echo $equipo[31]; ?></center>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

    </main>

    <!-- Scripts de boostrap-->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <!--Scripts cdn de font awesome-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/js/all.min.js" integrity="sha512-UwcC/iaz5ziHX7V6LjSKaXgCuRRqbTp1QHpbOJ4l1nw2/boCfZ2KlFIqBUA/uRVF0onbREnY9do8rM/uT/ilqw==" crossorigin="anonymous"></script>
</body>

</html>