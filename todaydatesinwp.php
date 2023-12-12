<?php
/*
Plugin Name: todaysdateinwp
Description: Añade los shortcodes: [year], [month], [daymonth], [dayweek]
Author: Maca-chan
*/

namespace todaysdateinwp

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


function add_shortcodes() {
    add_shortcode('year', 'todaysdateinwp\\obtener_ano_actual');
	add_shortcode('month', 'todaysdateinwp\\obtener_mes_actual');
    add_shortcode('daymonth', 'todaysdateinwp\\obtener_diames_actual');
    add_shortcode('dayweek', 'todaysdateinwp\\obtener_diasemana_actual');
}

add_action('init', 'todaysdateinwp\\add_shortcodes');
