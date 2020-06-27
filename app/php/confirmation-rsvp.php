
<?php
    echo'
    <div class="confirm-rsvp">
        <h1>Reservación Completada!</h1>
        <h2>A continuación se muestan los detalles de tu Reservación:</h2>
        <h3>*Fecha de llegada: '.$_POST['llegada'].'</h3>
        <h3>*Fecha de salida: '.$_POST['salida'].'</h3>
        <h3>*Tipo de Habitación: '.$_POST['tipo-hab'].'</h3>
        <br><h3>Este es tu número de reservación, asegurate de guardarlo!</h3>
    </div>
    ';
?>