<div class="formulario-admin bg-primary text-light">
<h2>Crear Alquiler</h2>
      
<form action="insertarRental" method="post"  >
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Titulo</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="titulo" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Descripcion</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="descripcion">
  </div>
  <div class="mb-3 ">
    <label for="exampleInputPassword1" class="form-label">Contacto</label>
    <input type="number" class="form-control" id="exampleCheck1" name="contacto">
  </div>
   <div class="mb-3 ">
    <label for="exampleInputPassword1" class="form-label">Tipo</label>
    <input type="text" class="form-control" id="exampleCheck1" name="tipo">
  </div>
  <select name="id_ciudad" class="form-select select-admin" aria-label="Default select example">
    <option selected>Seleccione la ciudad</option>
    <option value="1">Tandil</option>
    <option value="2">Capital Federal</option>
    <option value="3">Mar del Plata</option>
  </select>
    <input type="submit" class="btn btn-light" value="Guardar">
</form>
</div>