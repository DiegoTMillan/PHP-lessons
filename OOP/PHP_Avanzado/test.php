<?php
    foreach ($_FILES['fileUpload'] as $key => $item)
    echo $key . ' - ' . $item .
        '<br>';
    $usuario = get_current_user();
    $rutaGuardado = './' . basename($_FILES['fileUpload']['name']);
    $archivo = $_FILES['fileUpload']['tmp_name'];
    $err = $_FILES['fileUpload']['error'];
    if (
        $err == 0 && move_uploaded_file($archivo, $rutaGuardado)
    )
        echo '<p>Archivo guardado con éxito</p>';
print $rutaGuardado;