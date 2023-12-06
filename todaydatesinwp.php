<?php
/*
Plugin Name: todaysdateinwp
Description: Añade los shortcodes: [year], [month], [daymonth], [dayweek]
Author: Maca-chan
License: Eclipse Public License - v 2.0
*/

function obtener_mes_actual() {
    $mes_actual = date('n');
    
    $meses = array(
        1 => 'Enero',
        2 => 'Febrero',
        3 => 'Marzo',
        4 => 'Abril',
        5 => 'Mayo',
        6 => 'Junio',
        7 => 'Julio',
        8 => 'Agosto',
        9 => 'Septiembre',
        10 => 'Octubre',
        11 => 'Noviembre',
        12 => 'Diciembre'
    );
    
    return $meses[$mes_actual];
}

function obtener_diames_actual() {
    
    return date('j');
}

function obtener_diasemana_actual() {
    $dia_actual = date('l');

    if ($dia_actual == "Monday") {return "Lunes";}
    if ($dia_actual == "Tuesday") {return "Martes";}
    if ($dia_actual == "Wednesday") {return "Miércoles";}
    if ($dia_actual == "Thursday") {return "Jueves";}
    if ($dia_actual == "Friday") {return "Viernes";}
    if ($dia_actual == "Saturday") {return "Sábado";}
    else {return "Domingo";}

}

function obtener_ano_actual() {
    $ano_actual = date('Y');
    return $ano_actual;
}

// Registramos el shortcode
add_shortcode('year', 'obtener_ano_actual');


// Registramos el shortcode
add_shortcode('month', 'obtener_mes_actual');

// Registramos el shortcode
add_shortcode('daymonth', 'obtener_diames_actual');


// Registramos el shortcode
add_shortcode('dayweek', 'obtener_diasemana_actual');