<?php

echo "<pre>";
print_r($_POST);
echo "</pre>";

$info = $_POST['infoEmail'];

$totalInfo = count($info);

$infoSeleccionada = implode(", ", $info);

echo "<p>El usuario a partir de su selección recibirá en total $totalInfo canales de información vía e-mail. Los campos de información en los que se ha interesado son: $infoSeleccionada .</p>";

