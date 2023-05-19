<h1 style="text-align:center;">NUEVO REGISTRO</h1>
<br>
<form class="" action="index.html" method="post">
  <div class="container">


  <div class="row">
    <div class="col-md-4">
      <label for="">Cedula</label>
      <br>
      <input type="number" placeholder="Ingrese la cédula" class="form-control" name="cedula_cli"  value="">
    </div>

    <div class="col-md-4">
      <label for="">Apellido</label>

      <input type="text" placeholder="Ingrese su apellido" class="form-control" name="apellido_cli"  value="">
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-md-4">
      <label for="">Nombre</label>
      <br>
      <input type="text" placeholder="Ingrese su nombre" class="form-control" name="nombre_cli"  value="">
    </div>

    <div class="col-md-4">
      <label for="">Teléfono</label>
      <br>
      <input type="number" placeholder="Ingrese su telefono" class="form-control" name="telefono_ins "  value="">
    </div>
  </div>
  <br>
    <div class="row">
      <div class="col">
        <label for="">Dirección</label>
        <br>
        <input type="text" placeholder="Ingrese su direccion" class="form-control" name="direccion_ins"  value="">
      </div>
    </div>

  <br>
  <div class="col-md-12 text-center">
    <button type="submit" name="button" class="btn btn-primary" >Guardar</button>&nbsp &nbsp &nbsp &nbsp;
    <a href="<?php echo site_url(); ?>" class="btn btn-danger">Cancelar</a>

  </div>
</div>
</form>
