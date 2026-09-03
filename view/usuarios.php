<?php
include 'view/partials/header.php';
include 'view/partials/nav.php';
?>

<h2><?php echo $titulo; ?></h2>

<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Usuario</th>
            <th>Saldo</th>
        </tr>
    </thead>
    <tbody>
        <?php if (!empty($usuarios)): ?>
            <?php foreach ($usuarios as $fila): ?>
                <tr>
                    <td><?php echo $fila['id']; ?></td>
                    <td><?php echo $fila['usuario']; ?></td>
                    <td>$<?php echo number_format($fila['saldo'], 2); ?></td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="3">No hay usuarios registrados.</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>

<?php
include 'view/partials/footer.php';
?>
