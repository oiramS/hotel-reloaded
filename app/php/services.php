<div class="row">
  <div class="column-services gym">
    <h1>Gimnasio</h1>
    <div class="cont-form">
     <br><br><br><form action="log-in-huesped.php" class="box">
        <?php require 'form-services.php';?>
        <input type="text" name="class" id="class" required value="gym"><br>
        <input type="submit" name="" value="Reservar">
      </form>
    </div>
  </div>
  <div class="column-services yoga">
    <h1>Yoga</h1>
    <div class="cont-form">
        <br><br><br><form action="log-in-huesped.php" class="box" id="yoga">
          <?php require 'form-services.php';?>
          <input type="text" name="class" id="class" required value="yoga"><br>
          <input type="submit" name="" value="Reservar">
        </form>
    </div>
  </div>
  <div class="column-services zumba">
    <h1>Zumba</h1>
    <div class="cont-form">
        <br><br><br><form action="log-in-huesped.php" class="box">
        <?php require 'form-services.php';?>
        <input type="text" name="class" id="class" required value="zumba"><br>
        <input type="submit" name="" value="Reservar">
      </form>
    </div>
  </div>
</div> 