<?php
/*
  Ensambla el blog: lee cada archivo de /secciones y lo une en una sola página.
  Para cambiar el orden, agregar o quitar un apartado, edita $orden.
*/
function parcial(string $nombre): void {
    $archivo = __DIR__ . '/secciones/' . $nombre . '.html';
    echo is_file($archivo) ? file_get_contents($archivo) : "<!-- falta: $nombre -->";
}

$orden = [
    'inicio',
    'sobre-mi',
    'linea-tiempo',
    'proyectos',
    'formacion',
    'viajes',
    'vida-personal',
    'gustos',
    'metas',
    'contacto',
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Mi Blog Personal — José Núñez</title>
  <meta name="description" content="Blog personal de José Gerardo Núñez Chávez (Gigo): proyectos, viajes, vida personal y metas.">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Fraunces:wght@600;700;800&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  <?php parcial('estilos'); ?>
</head>
<body>
  <?php parcial('cabecera'); ?>
  <main class="contenedor">
    <?php foreach ($orden as $seccion) { parcial($seccion); } ?>
  </main>
  <?php parcial('pie'); ?>
  <?php parcial('scripts'); ?>
</body>
</html>
