<?php
$tokenCSRF = Utiles::obtenerTokenCSRF();
?>
<div class="row">
    <div class="col-sm">
        <h1>Nuevo cliente</h1>
    </div>
</div>
<div class="row">
    <div class="col-sm">
        <form method="post" action="<?php echo BASE_URL ?>/?p=guardar_cliente">
            <input type="hidden" name="tokenCSRF" value="<?php echo $tokenCSRF ?>">
            <div class="form-group">
                <label for="razonSocial">Nombre o razón social</label>
                <input autofocus name="razonSocial" autocomplete="off" required type="text" class="form-control" id="razonSocial" placeholder="Por ejemplo: Luis Cabrera Benito">
            </div>

            <div class="form-group row">
                <div class="col-6">
                    <label for="telefono">Telefono de contacto:</label>
                    <input autofocus name="telefono" autocomplete="off" required type="text" class="form-control" id="telefono" placeholder="310...">
                </div>

                <div class="col-6">
                    <label for="email">Email:</label>
                    <input autofocus name="email" autocomplete="off" required type="text" class="form-control" id="email" placeholder="ejemplo@--..com">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a class="btn btn-success" href="<?php echo BASE_URL ?>/?p=clientes">&larr; Volver</a>
        </form>
    </div>
</div>