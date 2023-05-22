<?php 
    
$respuestas_recibidas = $_REQUEST;


$respuestas_guardadas = array(
    'pregunta1' => Array
        (
            '0' => 'Oveja',
            '1' => 'Globo',
            '2' => 'Serpiente',
            '3' => 'Playa' 
        ),

    'pregunta2' => Array
        (
            '0' => 'Amarillo',
            '1' => 'Purpura',
            '2' => 'Morado',
            '3' => 'Blanco',
            '4' => 'Azul'
        ),

    'pregunta3' => Array
        (
            '0' => 'Corto',
            '1' => 'Hermosa',
            '2' => 'Dialogo',
            '3' => 'Completo' 
        ),

    'pregunta4' => Array
        (
            '0' => '27'
        ),

    'pregunta5' => Array
        (
            '0' => '11'
        ),

    'pregunta6' => Array
        (
            '0' => '29',
            '1' => '7',
            '2' => '73',
            '3' => '26' 
        ),

    'pregunta7' => Array
        (
            '0' => 'Option1'
        )
);


$contador = 0;
$respuestas_r = [];
$respuestas_g = [];
$conteo_por_pregunta = [];

$contador_pregunta = 0;

$prueba = [];


foreach($respuestas_guardadas as $num_pregunta_rg => $pregunta_g){
    foreach($respuestas_recibidas as $num_pregunta_rc => $pregunta_r){
        if($num_pregunta_rg == $num_pregunta_rc){
            $contador = 0;
            // Conocer cuales son las preguntas recibidas y guardadas
            $respuestas_r[$num_pregunta_rc] = $pregunta_r;
            $respuestas_g[$num_pregunta_rg] = $pregunta_g;
            
            // Saber cuantas psiciones hay en cada pregunta recibida
            $conteo_por_pregunta[$num_pregunta_rc] = count($respuestas_r[$num_pregunta_rc]);
           
            for($i = 0; $i<$conteo_por_pregunta[$num_pregunta_rc]; $i++){
                if($respuestas_r[$num_pregunta_rc][$i] == $respuestas_g[$num_pregunta_rg][$i]){
                    $contador += 1;
                }
                if($contador == $conteo_por_pregunta[$num_pregunta_rc]){
                    $contador_pregunta += 1;
                }
            }
        }
    }
}

echo json_encode($contador_pregunta);