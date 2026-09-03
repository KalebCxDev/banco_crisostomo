<?php include 'view/partials/header.php'; ?>

<div class="card card-login">
    <div class="card-header">Inicio de Sesión</div>
    
    <?php if ($mensaje): ?>
        <div class="alert <?php echo strpos($mensaje, 'EXITOSO') !== false ? 'alert-success' : (strpos($mensaje, 'ERROR') !== false ? 'alert-error' : 'alert-info'); ?>">
            <?= $mensaje ?>
        </div>
    <?php endif; ?>

    <?php if ($usuarioLogueado): ?>
        <div style="background: #2d6a4f; color: white; padding: 25px; border-radius: 4px; text-align: center;">
            <div style="font-size: 48px; margin-bottom: 10px;"></div>
            <h3>Bienvenido, <?= htmlspecialchars($usuarioLogueado['usuario']) ?></h3>
            <p style="font-size: 20px; margin: 10px 0;">
                Saldo: $<?= number_format($usuarioLogueado['saldo'], 2) ?>
            </p>
            <div style="display: flex; gap: 10px; justify-content: center; margin-top: 15px;">
                <a href="index.php?accion=retiro" class="btn btn-success">Retirar</a>
                <a href="index.php" class="btn btn-outline" style="border-color: white; color: white;">Inicio</a>
            </div>
        </div>
    <?php else: ?>
        <form action="index.php" method="GET">
            <input type="hidden" name="accion" value="login">
            
            <div class="form-group">
                <label>Usuario</label>
                <input type="text" class="form-control" name="u" 
                       placeholder="Ingresa tu usuario" required
                       value="<?= isset($_GET['u']) ? htmlspecialchars($_GET['u']) : '' ?>">
            </div>
            
            <div class="form-group">
                <label>Contraseña</label>
                <input type="password" class="form-control" name="p" 
                       placeholder="Ingresa tu contraseña" required>
            </div>
            
            <button type="submit" class="btn btn-primary btn-lg btn-full">
                Iniciar Sesión
            </button>
            
            <div class="text-muted-small">
                <p>Credenciales de prueba: <br>
                <strong>Usuario:</strong> Noe | <strong>Contraseña:</strong> 1234</p>
            </div>
        </form>
    <?php endif; ?>
</div>

<?php include 'view/partials/footer.php'; ?>