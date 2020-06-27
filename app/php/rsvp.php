
<div class="row">
    <form action="log-in-huesped.php" class="box" method="POST">
        <div class="column-services rsvp">
            <h3>Fecha de llegada:</h3>
            <input type="date" name="llegada" id="llegada" required>
            <h3>Fecha de salida:</h3>
            <input type="date" name="salida" id="salida" required>
        </div>
        <div class="column-services rsvp">

        <h3>Seleccione el tipo de Habitación:</h3>
        <select name="tipo-hab" id="tipo-hab" required>
            <option value="" disabled selected>Seleccione un tipo de habitación.</option>
            <option value="Habitación Estandard">Habitación Estandard.</option>
            <option value="Junior Suite">Junior Suite</option>
        </select>
        <select name="rsvp" id="rsvp" class="lock">
            <option value="rsvp" class="lock"  selected></option>
        </select>
        </div>
        <div class="column-services rsvp">
            <h3>Información de pago: </h3>
            <h3>Titular de la tarjeta:</h3>
            <input type="text" id="tname" name="tname" placeholder="Juan Peréz" required><br>
            <h3>Número de la tarjeta de crédito:</h3>
            <input type="text" id="ccnum" name ="ccnum" placeholder="1111-2222-3333-4444" required><br>
            <h3>Mes de Expiración:</h3>
            <input type="text" id="monthexp" name="monthexp" placeholder="Enero" required><br>
            <h3>Año de expiración:</h3>
            <input type="text" id="yearexp" name="yearexp" placeholder="2023" required><br>
            <h3>CCV:</h3>
            <input type="text" id="ccv" name="ccv" placeholder="123" required><br>
            <input type="submit" value="Reservar.">
        </div>
    </form>
</div>