 <?php
 function compararFechas($primera, $segunda)
    {
        $valoresPrimera = explode("-", $primera);
        $valoresSegunda = explode("-", $segunda);

        $diaPrimera    = $valoresPrimera[0];
        $mesPrimera  = $valoresPrimera[1];
        $anyoPrimera   = $valoresPrimera[2];

        $diaSegunda   = $valoresSegunda[0];
        $mesSegunda = $valoresSegunda[1];
        $anyoSegunda  = $valoresSegunda[2];

        $diasPrimeraJuliano = gregoriantojd($mesPrimera, $diaPrimera, $anyoPrimera);
        $diasSegundaJuliano = gregoriantojd($mesSegunda, $diaSegunda, $anyoSegunda);

        if (!checkdate($mesPrimera, $diaPrimera, $anyoPrimera)) {
            // "La fecha ".$primera." no es v&aacute;lida";
            return 0;
        } elseif (!checkdate($mesSegunda, $diaSegunda, $anyoSegunda)) {
            // "La fecha ".$segunda." no es v&aacute;lida";
            return 0;
        } else {
            return  $diasPrimeraJuliano - $diasSegundaJuliano;
        }
    }


    // -----------------------------------------------------------------------------
    function datetimeToDate($datetime)
    {
        $date  = date_create($datetime);
        return $date->format('d/m/Y H:i:s');
    }


    // -----------------------------------------------------------------------------
    function dateToDatetime($date)
    {
        $date1    = date_create_from_format('d/m/Y', $date);
        $datetime = date_format($date1, 'Y-m-d H:i:s');
        return $datetime;
    }
    ?>