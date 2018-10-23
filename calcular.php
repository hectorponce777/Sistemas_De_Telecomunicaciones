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
        <p> Resultados </p>
    </center>
    <br>
    <?php
        //phpinfo();
        //echo $_REQUEST['freq'];
        //echo $_REQUEST['rangofreq'];$_REQUEST
        //$frecuencia=$_REQUEST['freq'];
        //$rangofrecuencia=$_REQUEST['rangofreq'];
        //*****************************************************
        //LONGITUD DE ONDA *****************************************************
        $parte=$_POST['parte'];
        if ($parte==1)
        {
        $frecuencia=$_POST['freq'];// Ejemplo 2.4
        $rangofrecuencia=$_POST['rangofreq'];// Ejemplo Thz, Ghz, Mhz, Khz, Hz
        $ckm=299792.458;//Velocidad de la Luz Real en Kilómetros
        $cm=299792458;//Velocidad de la Luz Real en Métros
        $ccm=29979245800;//Velocidad de la Luz Real en Centímetros
        $cmm=299792458000;//Velocidad de la Luz Real en Milímetros
        if ($rangofrecuencia==1)//Opción Terahertz
        {
            $freq=$frecuencia;
            $frecuencia=$frecuencia*1000000000000; //De terahertz a Hertz
            $longkm=$ckm/$frecuencia;
            $longm=$cm/$frecuencia;
            $longcm=$ccm/$frecuencia;
            $longmm=$cmm/$frecuencia;
            
            echo ("Cálculo de la Longitud de Onda **************************************************************************");
            echo ("<br>");
            echo ("La Frecuencia es: $freq Thz");
            echo ("<br>");
            echo ("La longitud de onda en Kilómetros es: $longkm");
            echo ("<br>");
            echo ("La longitud de onda en Metros es: $longm");
            echo ("<br>");
            echo ("La longitud de onda en Centímetros es: $longcm");
            echo ("<br>");
            echo ("La longitud de onda en Milímetros es: $longmm");
            echo ("<br>");
            echo ("La zona de Fresnel es de");
        }
        if ($rangofrecuencia==2)//Opción Gigahertz
        {
            $freq=$frecuencia;
            $frecuencia=$frecuencia*1000000000; //De Gigahertz a Hertz
            $longkm=$ckm/$frecuencia;
            $longm=$cm/$frecuencia;
            $longcm=$ccm/$frecuencia;
            $longmm=$cmm/$frecuencia;

            echo ("Cálculo de la Longitud de Onda **************************************************************************");
            echo ("<br>");
            echo ("La Frecuencia es: $freq Ghz");
            echo ("<br>");
            echo ("La longitud de onda en Kilómetros es: $longkm");
            echo ("<br>");
            echo ("La longitud de onda en Metros es: $longm");
            echo ("<br>");
            echo ("La longitud de onda en Centímetros es: $longcm");
            echo ("<br>");
            echo ("La longitud de onda en Milímetros es: $longmm");
            echo ("<br>");
        }
        if ($rangofrecuencia==3)//Opción Megahertz
        {
            $freq=$frecuencia;
            $frecuencia=$frecuencia*1000000; //De Megahertz a Hertz
            $longkm=$ckm/$frecuencia;
            $longm=$cm/$frecuencia;
            $longcm=$ccm/$frecuencia;
            $longmm=$cmm/$frecuencia;

            echo ("Cálculo de la Longitud de Onda **************************************************************************");
            echo ("<br>");
            echo ("La Frecuencia es: $freq Mhz");
            echo ("<br>");
            echo ("La longitud de onda en Kilómetros es: $longkm");
            echo ("<br>");
            echo ("La longitud de onda en Metros es: $longm");
            echo ("<br>");
            echo ("La longitud de onda en Centímetros es: $longcm");
            echo ("<br>");
            echo ("La longitud de onda en Milímetros es: $longmm");
            echo ("<br>");
        }
        if ($rangofrecuencia==4)//Opción Kilohertz
        {
            $freq=$frecuencia;
            $frecuencia=$frecuencia*1000;//De Kilohertz a Hertz
            $longkm=$ckm/$frecuencia;
            $longm=$cm/$frecuencia;
            $longcm=$ccm/$frecuencia;
            $longmm=$cmm/$frecuencia;

            echo ("Cálculo de la Longitud de Onda **************************************************************************");
            echo ("<br>");
            echo ("La Frecuencia es: $freq Khz");
            echo ("<br>");
            echo ("La longitud de onda en Kilómetros es: $longkm");
            echo ("<br>");
            echo ("La longitud de onda en Metros es: $longm");
            echo ("<br>");
            echo ("La longitud de onda en Centímetros es: $longcm");
            echo ("<br>");
            echo ("La longitud de onda en Milímetros es: $longmm");
            echo ("<br>");
        }
        if ($rangofrecuencia==5)//Opción Hertz
        {
            $freq=$frecuencia;
            $longkm=$ckm/$frecuencia;
            $longm=$cm/$frecuencia;
            $longcm=$ccm/$frecuencia;
            $longmm=$cmm/$frecuencia;

            echo ("Cálculo de la Longitud de Onda **************************************************************************");
            echo ("<br>");
            echo ("La Frecuencia es: $freq Hz");
            echo ("<br>");
            echo ("La longitud de onda en Kilómetros es: $longkm");
            echo ("<br>");
            echo ("La longitud de onda en Metros es: $longm");
            echo ("<br>");
            echo ("La longitud de onda en Centímetros es: $longcm");
            echo ("<br>");
            echo ("La longitud de onda en Milímetros es: $longmm");
            echo ("<br>");
        }
        }
        //*****************************************************
        //COORDENADAS *****************************************************
        $parte=$_POST['parte'];
        if ($parte==2)
        {
        $puntoa=$_POST['puntoa'];// Nombre Punto A
        $asnma=$_POST['asnma'];// Altitud Sobre el Nivel del Mar Punto A
        
        $alag=$_POST['alag'];// Grados Latitud Punto A
        $alam=$_POST['alam'];// Minutos Latitud Punto A
        $alas=$_POST['alas'];// Segundos Latitud Punto A
        $alaor=$_POST['alaor'];// Cardinalidad Latitud Punto A
        
        $alog=$_POST['alog'];// Grados Longitud Punto A
        $alom=$_POST['alom'];// Minutos Longitud Punto A
        $alos=$_POST['alos'];// Segundos Longitud Punto A
        $aloor=$_POST['aloor'];// Cardinalidad Longitud Punto A
        
        $puntob=$_POST['puntob'];// Nombre Punto B
        $asnmb=$_POST['asnmb'];// Altitud Sobre el Nivel del Mar Punto B
        
        $blag=$_POST['blag'];// Grados Latitud Punto B
        $blam=$_POST['blam'];// Minutos Latitud Punto B
        $blas=$_POST['blas'];// Segundos Latitud Punto B
        $blaor=$_POST['blaor'];// Cardinalidad Latitud Punto B
        
        $blog=$_POST['blog'];// Grados Longitud Punto B
        $blom=$_POST['blom'];// Minutos Longitud Punto B
        $blos=$_POST['blos'];// Segundos Longitud Punto B
        $bloor=$_POST['bloor'];// Cardinalidad Longitud Punto B
        //COORDENADAS SEXAGECIMALES EN DECIMALES PUNTO A
        if ($alaor==1)
        {
            $declaA=$alag+($alam/60)+($alas/3600);//LAT1 POSITIVA
        }
        else
        {
            $declaA=-1*($alag+($alam/60)+($alas/3600));//LAT1 NEGATIVA
        }
        if ($aloor==1)
        {
            $decloA=$alog+($alom/60)+($alos/3600);//LON1 POSITIVA
        }
        else
        {
            $decloA=-1*($alog+($alom/60)+($alos/3600));//LON1 NEGATIVA
        }
        //COORDENADAS SEXAGECIMALES EN DECIMALES PUNTO B
        if ($blaor==1)
        {
            $declaB=$blag+($blam/60)+($blas/3600);//LAT2 POSITIVA
        }
        else
        {
            $declaB=-1*($blag+($blam/60)+($blas/3600));//LAT2 NEGATIVA
        }
        if ($bloor==1)
        {
            $decloB=$blog+($blom/60)+($blos/3600);//LON2 POSITIVA
        }
        else
        {
            $decloB=-1*($blog+($blom/60)+($blos/3600));//LON2 NEGATIVA
        }
        //LA FORMULA PARA CALCULAR LA DISTANCIA ENTRE DOS PUNTOS GEOGRÁFICOS.
        //$declaA = LAT1
        //$decloA = LON1
        //$declaB = LAT2
        //$decloB = LON2
        //6378.1 = Radio de la Tierra.
        
        //=6378.1*ACOS    (
        //                              COS(PI()*(90-LAT2)/180)*
        //                              COS((90-LAT1)*PI()/180)+
        //                              SENO((90-LAT2)*PI()/180)*
        //                              SENO((90-LAT1)*PI()/180)*
        //                              COS((LON1-LON2)*PI()/180)
        //                )
        //DISTANCIA FISICA EN KILOMETROS
        $distkm=6378.1*acos(cos(pi()*(90-$declaB)/180)*cos((90-$declaA)*pi()/180)+sin((90-$declaB)*pi()/180)*sin((90-$declaA)*pi()/180)*cos(($decloA-$decloB)*pi()/180));
        //DISTANCIA FISICA EN METROS
        $distm=$distkm*1000;
        //DIFERENCIA DE ALTURA
        $difasnm=abs($asnma-$asnmb);
        //DISTANCIA INALAMBRICA EN KILOMETROS (RAIZ(POTENCIA($distm,2)+POTENCIA($disti,2)))/1000
        $distikm=sqrt(pow($distm,2)+pow($difasnm,2))/1000;
        //DISTANCIA INALAMBRICA EN METROS pow ( number $base , number $exp )
        $distim=sqrt(pow($distm,2)+pow($difasnm,2));

        
            echo ("Cálculo de la Distancia entre 2 puntos geográficos ***********************************************");
            //echo ("<br>");
            //echo ("Valor decimal de Latitud 1 $declaA");
            //echo ("<br>");
            //echo ("Valor decimal de Longitud 1 $decloA");
            //echo ("<br>");
            //echo ("Valor decimal de Latitud 2 $declaB");
            //echo ("<br>");
            //echo ("Valor decimal de Longitud 2 $decloB");
            //echo ("<br>");
            echo ("<br>");
            echo ("<p>La Distancia física entre $puntoa y $puntob es: $distkm km </p>");
            //echo ("<br>");
            echo ("<p>La Distancia física entre $puntoa y $puntob es: $distm m </p>");
            //echo ("<br>");
            echo ("<p>La diferencia de altura entre $puntoa y $puntob es: $difasnm m </p>");
            //echo ("<br>");
            echo ("<p>La Distancia inalámbrica entre $puntoa y $puntob es: $distikm km </p>");
            //echo ("<br>");
            echo ("<p>La Distancia inalámbrica entre $puntoa y $puntob es: $distim m </p>");
            //echo ("<br>");
            //
            //
            // CALCULO DEL RUMBO
            echo ("<p>El rumbo a seguir entre $puntoa y $puntob es:  </p>");
            //echo ("<br>");
            echo ("<p>El rumbo a seguir entre entre $puntob y $puntoa es:  </p>");
            //echo ("<br>");
        }
        //***************************************************************************************** */
        //***************************************************************************************** */
        //***************************************************************************************** */
        //ZONA DE FRESNEL
        //=17.32*RAIZ((DISTANCIAKILOMETROS/(4*FRECUENCIA EN GHZ)))
        // float sqrt ( float $arg )
        $parte=$_POST['parte'];
        if ($parte==3)
        {
        $frecuencia=$_POST['freqfres'];// Ejemplo 2.4
        $rangofrecuencia=$_POST['rangofreqfres'];// Ejemplo Thz, Ghz, Mhz, Khz, Hz
        $distfres=$_POST['distfres'];// Distancia para zona de fresnel
        //echo ("$frecuencia ");
        //echo (" $rangofrecuencia ");
        //echo (" $distfres ");
        if ($rangofrecuencia==1)//Fresnel en Terahertz
        {
            $freqfes=$frecuencia;
            $freqfes=$freqfes*1000;
            $zonafres=17.32*sqrt(($distfres/(4*$freqfes)));
            
            echo ("Cálculo de la Zona de Fresnel **************************************************************************");
            echo ("<br>");
            echo ("<p>La Frecuencia es: $frecuencia Thz</p>");
            echo ("<br>");
            echo ("<p>La zona de fresnel es de: $zonafres metros</p>");
            
        }
        if ($rangofrecuencia==2)//Fresnel en Gigahertz
        {
            $freqfes=$frecuencia;
            
            $zonafres=17.32*sqrt(($distfres/(4*$freqfes)));
            
            echo ("Cálculo de la Zona de Fresnel **************************************************************************");
            echo ("<br>");
            echo ("<br>");
            echo ("La Frecuencia es: $frecuencia Ghz");
            echo ("<br>");
            echo ("La zona de fresnel es de: $zonafres metros");
        }
        if ($rangofrecuencia==3)//Fresnel en Megahertz
        {
            $freqfes=$frecuencia;
            $freqfes=$freqfes/1000;
            $zonafres=17.32*sqrt(($distfres/(4*$freqfes)));
            
            echo ("Cálculo de la Zona de Fresnel **************************************************************************");
            echo ("<br>");
            echo ("<br>");
            echo ("La Frecuencia es: $frecuencia Mhz");
            echo ("<br>");
            echo ("La zona de fresnel es de: $zonafres metros");
        }
        if ($rangofrecuencia==4)//Fresnel en Kilohertz
        {
            $freqfes=$frecuencia;
            $freqfes=$freqfes/1000000;
            $zonafres=17.32*sqrt(($distfres/(4*$freqfes)));
            
            echo ("Cálculo de la Zona de Fresnel **************************************************************************");
            echo ("<br>");
            echo ("<br>");
            echo ("La Frecuencia es: $frecuencia Khz");
            echo ("<br>");
            echo ("La zona de fresnel es de: $zonafres metros");
        }
        if ($rangofrecuencia==5)//Fresnel en Hertz
        {
            $freqfes=$frecuencia;
            $freqfes=$freqfes/1000000000;
            $zonafres=17.32*sqrt(($distfres/(4*$freqfes)));
            
            echo ("Cálculo de la Zona de Fresnel **************************************************************************");
            echo ("<br>");
            echo ("<br>");
            echo ("La Frecuencia es: $frecuencia Hz");
            echo ("<br>");
            echo ("La zona de fresnel es de: $zonafres metros");
        }
        }
    ?>
</body>
</html>
