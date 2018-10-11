<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sistemas de Telecomunicaciones I</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <center>
        <p>Sistemas de Telecomunicaciones 1</p>
        <p>Cálculo de Línea de Vista (LOS)</p>
        <p> Principal </p>
    </center>
    <br>
    <p>Longitud de Onda</p>
    <form action="/calcular.php" method="post">
        <table cellspacing="2" cellpadding="2" border="1" >
            <tr>
                <td>Introduce el valor:</td>
                <td><input type="text" size="6" maxlength="6" name="freq"></td>
                <td>
                    <select name="rangofreq">
                        <option value="1">Thz</option>
                        <option value="2" selected>Ghz</option>
                        <option value="3">Mhz</option>
                        <option value="4">Khz</option>
                        <option value="5">Hz</option>
                    </select>
                </td>
                <td> <input type="submit" value="Calcular"> </td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </td>
                <td> <input type="reset" value="Cancelar"> </td>
            </tr>
        </table>
    </form>
    <br>
    <br>
    <br>
    <p>Coordenadas</p>
    <form action="/calcular.php" method="post">
        <!--*****PARA EL PUNTO A -->
        <table cellspacing="2" cellpadding="2" border="1">
            <tr>
                <td>Punto A</td>
                <td><input type="text" size="50" maxlength="100" name="puntoa"></td>
                <td>A.S.N.M</td>
                <td><input type="number" size="7" maxlength="4" name="asnma"></td>
            </tr>
        </table>
        <table cellspacing="2" cellpadding="2" border="1">
            <tr>
                <td>&nbsp;</td>
                <td>Grados</td>
                <td>Minútos</td>
                <td>Segundos</td>
                <td>Cardinalidad</td>
            </tr>
            <tr>
                <td>Latitud</td>
                <td><input type="number" size="15" maxlength="2" name="alag" min="1" max="180"></td>
                <td><input type="number" size="15" maxlength="2" name="alam" min="0" max="59"></td>
                <td><input type="number" size="15" maxlength="5" name="alas" step="any" min="0" max="59.99"></td>
                <td>
                    <select name="alaor">
                        <option value="1" selected>Norte</option>
                        <option value="2">Sur</option>                        
                    </select>
                </td>
            </tr>
            <tr>
                <td>Longitud</td>
                <td><input type="number" size="15" maxlength="2" name="alog" min="1" max="180"></td>
                <td><input type="number" size="15" maxlength="2" name="alom" min="0" max="59"></td>
                <td><input type="number" size="15" maxlength="5" name="alos" step="any" min="0" max="59.99"></td>
                <td>
                    <select name="aloor">
                        <option value="1">Este</option>
                        <option value="2" selected>Oeste</option>                        
                    </select>
                </td>
            </tr>
        </table>
        <!--*****PARA EL PUNTO B -->
        <table cellspacing="2" cellpadding="2" border="1">
            <tr>
                <td>Punto B</td>
                <td><input type="text" size="50" maxlength="100" name="puntob"></td>
                <td>A.S.N.M</td>
                <td><input type="number" size="7" maxlength="4" name="asnmb"></td>
            </tr>
        </table>
        <table cellspacing="2" cellpadding="2" border="1">
            <tr>
                <td>&nbsp;</td>
                <td>Grados</td>
                <td>Minútos</td>
                <td>Segundos</td>
                <td>Cardinalidad</td>
            </tr>
            <tr>
                <td>Latitud</td>
                <td><input type="number" size="15" maxlength="2" name="blag" min="1" max="180"></td>
                <td><input type="number" size="15" maxlength="2" name="blam" min="0" max="59"></td>
                <td><input type="number" size="15" maxlength="5" name="blas" step="any" min="0" max="59.99"></td>
                <td>
                    <select name="blaor">
                        <option value="1" selected>Norte</option>
                        <option value="2">Sur</option>                        
                    </select>
                </td>
            </tr>
            <tr>
                <td>Longitud</td>
                <td><input type="number" size="15" maxlength="2" name="blog" min="1" max="180"></td>
                <td><input type="number" size="15" maxlength="2" name="blom" min="0" max="59"></td>
                <td><input type="number" size="15" maxlength="5" name="blos" step="any" min="0" max="59.99"></td>
                <td>
                    <select name="bloor">
                        <option value="1">Este</option>
                        <option value="2" selected>Oeste</option>                        
                    </select>
                </td>
            </tr>
        </table>
        <table cellspacing="2" cellpadding="2" border="1" >
            <tr>
                <td> <input type="submit" value="Calcular"> <input type="hidden" name="coords" value="1"></td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </td>
                <td> <input type="reset" value="Cancelar"> </td>
            </tr>
        </table>
    </form>
    <br>
    <br>
    <br>
    <p>Zona de Fresnel</p>
    <form action="/calcular.php" method="post">
        <table cellspacing="2" cellpadding="2" border="1" >
            <tr>
                <td>Introduce la frecuencia:</td>
                <td><input type="text" size="6" maxlength="6" name="freqfres"></td>
                <td>
                    <select name="rangofreqfres">
                        <option value="1">Thz</option>
                        <option value="2" selected>Ghz</option>
                        <option value="3">Mhz</option>
                        <option value="4">Khz</option>
                        <option value="5">Hz</option>
                    </select>
                </td>
                <td>Introduce la Distancia en Kilómetros:</td>
                <td><input type="text" size="6" maxlength="6" name="distfres"></td>
                <td> <input type="submit" value="Calcular"> </td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </td>
                <td> <input type="reset" value="Cancelar"> </td>
            </tr>
        </table>
    </form>
</body>
</html>