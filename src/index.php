<?php
function nota($notaAlumne) {
    if ($notaAlumne>= 60) {
        $missatge = "Primera divisió";
    } else if ($notaAlumne >=45) {
        $missatge = "Segona divisió";
    } else if ($notaAlumne >=33) {
        $missatge = "Tercera divisió";
    } else {
        $missatge = "Reprovat";
    }
    return $missatge;
}
?>