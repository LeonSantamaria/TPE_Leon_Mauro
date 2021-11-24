<div class="formulario-admin bg-primary text-light">
    <h2>Registro</h2>

    <form action="register" method="post">
        <div class="mb-3">
            <label  class="form-label">Nombre de usuario</label>
            <input type="text" class="form-control"  name="usuario" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="text" class="form-control"name="email" required>
        </div>
        <div class="mb-3 ">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" name="password" required>
        </div>
        
        <input type="submit" class="btn btn-light" value="Actualizar">
    </form>
</div>