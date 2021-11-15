<h2 style="color: red;"> Actividad obligatoria de PHP</h2>

<h3>Carga datos..</h3>
<?php



echo '<pre>';
$nombre='Mariano';
$apellido='Carbone';
$edad=38;
$hobbie='Dj musica electronica';
$editorCodPreferido='Visual editor code';
$sistoperativo='Windows 10';


echo 'Nombre: ',$nombre;
echo '<pre>';
echo 'Apellido: ',$apellido;
echo '<pre>';
echo 'Edad: ',$edad;
echo '<pre>';
echo 'Hobbie: ',$hobbie;
echo '<pre>';
echo 'Editor de codigo preferido: ',$editorCodPreferido;
echo '<pre>';
echo 'Sistema operativo que utiliza: ',$sistoperativo;
?>
<br>
<h2 style="color: red;">Datos con array..</h2>

<?php

$informacion=[
    'id_codpersonal'=>'001',
    'nombre'=>'Mariano',
    'apellido'=>'Carbone',
    'edad'=>38,
    'hobbie'=>'Dj musica electronica',
    '$editorCodPreferido'=>'Visual editor code',
    'sistoperativo'=>'Windows 10'
];

var_dump($informacion);
?>

