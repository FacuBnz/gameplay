<?php
include_once(__DIR__."/layout/header.php");
include_once(__DIR__."/layout/sidebar.php");
?>
    <div id="principal">
        <h1>Modificar datos</h1>

        <?php if($this->completo != null) : ?>
            <div class="alerta alerta-exito">
                <?=$this->completo?>
            </div>
        <?php elseif ($this->errores != null) :?>
            <div class="alerta alerta-error">
                <?=$this->errores->getMessage()?>
            </div>
        <?php endif; ?>

        <form action="" method="POST">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" value="<?=$this->user['nombre']?>" minlength="3" maxlength="18" required>

            <label for="apellido">Apellido</label>
            <input type="text" name="apellido" id="apellido" value="<?=$this->user['apellido']?>" minlength="3" maxlength="18" required>

            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="<?=$this->user['email']?>" required>

            <input type="submit" name="mod" value="Actualizar">
        </form>
    </div>
</main>

<?php
include_once(__DIR__."/layout/footer.php");