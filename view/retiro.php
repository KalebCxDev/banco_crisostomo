<?php include 'view/partials/header.php'; ?>

<div class="card card-login">
    <div class="card-header">Módulo de Retiros</div>
    
    <?php if (isset($mensaje) && $mensaje): ?>
        <div class="alert <?php echo strpos($mensaje, 'APROBADO') !== false ? 'alert-success' : (strpos($mensaje, 'ERROR') !== false ? 'alert-error' : 'alert-info'); ?>">
            <strong>Resultado:</strong> <?= $mensaje ?>
        </div>
    <?php endif; ?>

    <div class="bg-info-user">
        <div class="flex-between">
            <span><strong>Usuario:</strong> Noe</span>
            <span><strong>Saldo:</strong> <span class="text-success-bold">$<?= number_format($saldoActual ?? 1500, 2) ?></span></span>
        </div>
    </div>

    <form action="index.php" method="GET" id="formRetiro">
        <input type="hidden" name="accion" value="retiro">
        
        <div class="form-group">
            <label>Monto a retirar ($)</label>
            <input type="number" class="form-control" id="monto" name="monto" 
                   min="1" step="0.01" required
                   placeholder="Ingresa el monto"
                   value="<?= isset($_GET['monto']) ? htmlspecialchars($_GET['monto']) : '' ?>">
            <small style="color: #666; font-size: 12px;">Monto mínimo: $1.00</small>
        </div>
        
        <button type="submit" class="btn btn-success btn-lg btn-full">
            Procesar Retiro
        </button>
        
        <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 8px; margin-top: 10px;">
            <button type="button" class="btn btn-outline btn-sm" onclick="setMonto(100)">$100</button>
            <button type="button" class="btn btn-outline btn-sm" onclick="setMonto(200)">$200</button>
            <button type="button" class="btn btn-outline btn-sm" onclick="setMonto(500)">$500</button>
            <button type="button" class="btn btn-outline btn-sm" onclick="setMonto(1000)">$1000</button>
        </div>
        
        <div style="margin-top: 10px;">
            <a href="index.php" class="btn btn-full" style="background: #6c757d; color: white;">Volver al Inicio</a>
        </div>
    </form>
</div>

<script>
function setMonto(valor) {
    document.getElementById('monto').value = valor;
    document.getElementById('formRetiro').submit();
}
</script>

<?php include 'view/partials/footer.php'; ?>