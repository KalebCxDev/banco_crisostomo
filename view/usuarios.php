<?php include 'view/partials/header.php'; ?>

<div class="card">
    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
        <span><?= $titulo ?></span>
        <a href="index.php" class="btn btn-sm" style="background: white; color: #1a1a2e;">🏠 Inicio</a>
    </div>
    
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Usuario</th>
                    <th>Saldo</th>
                    <th style="text-align: center;">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($usuarios)): ?>
                    <?php foreach ($usuarios as $fila): ?>
                        <tr>
                            <td><?= $fila['id'] ?></td>
                            <td><strong><?= htmlspecialchars($fila['usuario']) ?></strong></td>
                            <td>
                                <span class="badge badge-success">$<?= number_format($fila['saldo'], 2) ?></span>
                            </td>
                            <td style="text-align: center;">
                                <a href="index.php?accion=login&u=<?= urlencode($fila['usuario']) ?>" 
                                   class="btn btn-primary btn-sm" title="Login rápido"></a>
                                <a href="index.php?accion=retiro&monto=100" 
                                   class="btn btn-success btn-sm" title="Retiro $100"></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="4" style="text-align: center; padding: 30px; color: #666;">
                            No hay usuarios registrados.
                        </td>
                    </tr>
                <?php endif; ?>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="4" style="text-align: center; background: #f8f9fa; font-size: 13px; color: #666;">
                        Total: <strong><?= count($usuarios) ?></strong> usuarios
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>
    
    <div style="display: flex; justify-content: space-between; margin-top: 15px; padding: 0 5px;">
        <a href="index.php" class="btn" style="background: #6c757d; color: white;">Volver al Inicio</a>
        <button class="btn btn-primary" onclick="window.print()">Imprimir</button>
    </div>
</div>

<?php include 'view/partials/footer.php'; ?>