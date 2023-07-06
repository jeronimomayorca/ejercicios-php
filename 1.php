<?php
/*
1. Desarrolla un script que reciba un número de mes y un número de día de la semana y devuelva el nombre del mes, el nombre del día de la semana y el número de días de dicho mes
*/
function obtenerInformacion($numeroMes, $numeroDiaSemana)
{
    $nombresMeses = array(
        1 => "Enero",
        2 => "Febrero",
        3 => "Marzo",
        4 => "Abril",
        5 => "Mayo",
        6 => "Junio",
        7 => "Julio",
        8 => "Agosto",
        9 => "Septiembre",
        10 => "Octubre",
        11 => "Noviembre",
        12 => "Diciembre"
    );

    $nombresDiasSemana = array(
        1 => "Domingo",
        2 => "Lunes",
        3 => "Martes",
        4 => "Miércoles",
        5 => "Jueves",
        6 => "Viernes",
        7 => "Sábado"
    );

    // Obtener el nombre del mes
    $nombreMes = $nombresMeses[$numeroMes];

    // Obtener el nombre del día de la semana
    $nombreDiaSemana = $nombresDiasSemana[$numeroDiaSemana];

    // Obtener el número de días del mes
    $numeroDias = cal_days_in_month(CAL_GREGORIAN, $numeroMes, date('Y'));

    // Devolver los resultados
    return array(
        "nombreMes" => $nombreMes,
        "nombreDiaSemana" => $nombreDiaSemana,
        "numeroDias" => $numeroDias
    );
}

// Ejemplo de uso
$numeroMes = (int) readline("Dame el numero del mes, del 1 al 12 ");
$numeroDiaSemana = (int) readline("Dame el numero del día de la semana, del 1 al 7 ");

$informacion = obtenerInformacion($numeroMes, $numeroDiaSemana);

echo "Mes: " . $informacion["nombreMes"] . "\n";
echo "Día de la semana: " . $informacion["nombreDiaSemana"] . "\n";
echo "Número de días: " . $informacion["numeroDias"] . "\n";
