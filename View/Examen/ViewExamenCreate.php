<div class="container mt-4">
    <h2>Registrar Examen</h2>

    <form action="index.php?controller=Examen&function=store" method="POST">
        <div class="form-group mb-3">
            <label for="descripcion">Descripción:</label>
            <input type="text" class="form-control" id="descripcion" name="descripcion" required>
        </div>

        <div class="form-group mb-3">
            <label for="valor">Valor:</label>
            <input type="number" class="form-control" id="valor" name="valor" required>
        </div>

        <div class="form-group mb-3">
            <label for="tipo">Tipo:</label>
            <input type="text" class="form-control" id="tipo" name="tipo" required>
        </div>

        <div class="form-group mb-3">
            <label for="estado">Estado:</label>
            <select class="form-control" id="estado" name="estado">
                <option value="Activo">Activo</option>
                <option value="Inactivo">Inactivo</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="index.php?controller=Examen&function=index" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
<?php
         ModalsExamen::modalCreate();
         ModalsExamen::modalEdit();
