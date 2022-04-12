<?php
$a = [
        [
                'Nombre' => 'NOMBRE',
                'Apellido' => 'APELLIDO',
                'dirección' => 'DIRECCIÓN',
                'telefono' => 'TELEFONO',
                'fechaCumpleaños' => 'FECHA DE CUMPLEAÑOS',
                'ColorFavorito' => 'COLOR PREFERIDO',
                'significado' => 'SIGNIFICAO DEL COLOR',   

        ],
        [
                'Nombre' => 'Juan',
                'Apellido' => 'Perez',
                'dirección' => 'cr 45 # 45-56',
                'telefono' => 3456789,
                'fechaCumpleaños' => '23/12/97',
                'ColorFavorito' => 'amarillo',
                'significado' => 'riqueza y alegría',  

        ],
        [
                'Nombre' => 'Pablo',
                'Apellido' => 'Manrique',
                'dirección' => 'Cll 23 #12-19sur',
                'telefono' => 3214567,
                'fechaCumpleaños' => '12/10/1980',
                'ColorFavorito' => 'verde',
                'significado' => 'null',   
        ],
        [ 
                'Nombre' => 'Nancy',
                'Apellido' => 'Peña',
                'dirección' => 'Av 34 #16-12',
                'telefono' => 2135423,
                'fechaCumpleaños' => '07/06/2000',
                'ColorFavorito' => 'rojo', 
                'significado' => 'null',
        ]
];

$s = '<table border="1">';
foreach ( $a as $r ) {
        $s .= '<tr>';
        foreach ( $r as $v ) {
                $s .= '<td>'.$v.'</td>';
        }
        $s .= '</tr>';
}
$s .= '</table>';

echo $s;