<?php include 'view/partials/header.php'; ?>

<div class="card hero-card">
    <h1>Bienvenido al Sistema Bancario</h1>
    <p>Accede a las funciones desde el menú o mediante los botones rápidos.</p>
    <hr>
    <p>Prueba: <code>?accion=login&u=Noe&p=1234</code></p>
</div>

<div class="grid-4">
    <div class="grid-item">
        <span class="icon"></span>
        <h5>Iniciar Sesión</h5>
        <p>Accede a tu cuenta bancaria</p>
        <a href="index.php?accion=login" class="btn btn-primary">Login</a>
    </div>
    
    <div class="grid-item">
        <span class="icon"></span>
        <h5>Retirar Fondos</h5>
        <p>Realiza un retiro de tu cuenta</p>
        <a href="index.php?accion=retiro" class="btn btn-success">Retirar</a>
    </div>
    
    <div class="grid-item">
        <span class="icon"></span>
        <h5>Usuarios</h5>
        <p>Lista de usuarios registrados</p>
        <a href="index.php?accion=listar" class="btn btn-info">Ver Usuarios</a>
    </div>
    
    <div class="grid-item">
        <span class="icon"></span>
        <h5>Auditoría</h5>
        <p>Registro de operaciones</p>
        <a href="index.php?accion=auditoria" class="btn btn-warning">Ver Auditoría</a>
    </div>
</div>

<div class="card">
    <div class="card-header">Acceso Rápido</div>
    <form action="index.php" method="GET">
        <input type="hidden" name="accion" value="login">
        <div style="display: grid; grid-template-columns: 1fr 1fr auto; gap: 10px;">
            <input type="text" class="form-control" name="u" placeholder="Usuario" required>
            <input type="password" class="form-control" name="p" placeholder="Contraseña" required>
            <button type="submit" class="btn btn-primary">➜</button>
        </div>
    </form>
</div>

<?php include 'view/partials/footer.php'; ?>