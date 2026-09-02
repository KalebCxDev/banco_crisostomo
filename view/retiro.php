<?php
include 'view/partials/header.php';
include 'view/partials/nav.php';
?>

<div>
    <h2>Módulo de Retiros</h2>
    <p><strong>Resultado:</strong> <?php echo $mensaje; ?></p>
</div>

<form method="GET" action="index.php">
    <input type="hidden" name="action" value="retiro">
    <label for="monto">Monto a retirar ($):</label>
    <input type="number" name="monto" id="monto" min="1" required>
    <button type="submit">Procesar Retiro</button>
</form>

<?php
include 'view/partials/footer.php';
?>
