<body>
  <?php include ('header.php') ?>
    <div id="contactanos" class="col-md-4 mt-4 mt-sm-0 offset-md-1">
      <h1>Formulario de contacto</h1>
        <h2>Completa la totalidad de los campos para enviar tu consulta</h2>
        <form action="enviar_consulta.php" method="post">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
              </div>
              <br>
              <div class="form-group col-md-6">
                <label for="apellido">Apellido:</label>
                <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido">
              </div>
              <br>
              <div class="form-group">
                <label for="correo">Correo electrónico:</label>
                <input type="email" class="form-control" id="email" name="correo" placeholder="Correo electronico">
              </div>
              <br>
              <div class="form-group">
                <label for="mensaje">Mensaje:</label>
                <textarea class="form-control" id="mensaje" rows="4" name="mensaje" placeholder="Escribe tu mensaje"></textarea>
              </div>
              <br>
              <input type="submit" style="background-color: blue; color: white" value="Enviar">
            </div>
        </form>

        <?php
          if (isset($_GET['e'])){
            echo "<h3> Mensaje enviado correctamente </h3>";
          }
        ?>

    </div>
    <?php include ('footer.php') ?>
</body>
</html>