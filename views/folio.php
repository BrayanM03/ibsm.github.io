<?php
require_once 'backend/conexion.php';

$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;

if (!$id) {
    http_response_code(400);
    die('Folio no especificado.');
}

$stmt = $con->prepare("SELECT * FROM registro_misioneros WHERE id = ?");
$stmt->execute([$id]);
$misionero = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$misionero) {
    http_response_code(404);
    die('No se encontró ningún registro con ese folio.');
}

$stmt = $con->prepare("SELECT * FROM registro_esposas WHERE misionero_id = ? AND estatus = 1");
$stmt->execute([$id]);
$esposa = $stmt->fetch(PDO::FETCH_ASSOC);

$stmt = $con->prepare("SELECT * FROM registro_hijos WHERE misionero_id = ? AND estatus = 1");
$stmt->execute([$id]);
$hijos = $stmt->fetchAll(PDO::FETCH_ASSOC);

$stmt = $con->prepare("SELECT * FROM registro_acompanantes WHERE misionero_id = ? AND estatus = 1");
$stmt->execute([$id]);
$acompanantes = $stmt->fetchAll(PDO::FETCH_ASSOC);

$dias_visita = !empty($misionero['dias_visita'])
    ? implode(', ', array_map(fn($d) => trim($d) . ' Nov', explode(',', $misionero['dias_visita'])))
    : 'No especificado';
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Folio #<?= htmlspecialchars($misionero['id']) ?> - <?= htmlspecialchars($misionero['nombre']) ?></title>
<script src="https://cdn.tailwindcss.com"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&family=Roboto+Slab:wght@400;700&display=swap" rel="stylesheet">
<script src="https://unpkg.com/@phosphor-icons/web"></script>
<script>
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    brand: { yellow: '#F59E0B', light: '#FEF3C7', dark: '#B45309', gray: '#1F2937' }
                },
                fontFamily: { sans: ['Inter', 'sans-serif'], serif: ['Roboto Slab', 'serif'] }
            }
        }
    }
</script>
<style>
    @media print {
        .no-print { display: none !important; }
        body { background: white !important; }
    }
</style>
</head>
<body class="bg-gray-100 font-sans antialiased min-h-screen flex items-center justify-center p-4">

<div class="w-full max-w-md">

    <div class="bg-white rounded-2xl shadow-xl overflow-hidden border-t-8 border-brand-yellow">

        <div class="bg-brand-gray text-white text-center py-5 px-6">
            <p class="text-xs uppercase tracking-widest text-brand-yellow font-bold">XXXV Conferencia Misionera 2026</p>
            <p class="text-white/70 text-xs">19 al 22 de Noviembre &mdash; IBSM Matamoros</p>
        </div>

        <div class="text-center pt-6">
            <span class="inline-block bg-brand-light text-brand-dark font-bold text-sm px-4 py-1 rounded-full uppercase tracking-wide">
                Folio #<?= htmlspecialchars($misionero['id']) ?>
            </span>
        </div>

        <div class="px-6 pt-4 pb-6 text-center">
            <i class="ph ph-user-circle text-6xl text-brand-yellow"></i>
            <h1 class="text-2xl font-serif font-bold text-gray-900 mt-2"><?= htmlspecialchars($misionero['nombre']) ?></h1>
            <?php if (!empty($misionero['cargo'])): ?>
                <span class="inline-block bg-brand-dark text-white text-xs font-bold uppercase tracking-widest px-3 py-1 rounded-full mt-2">
                    <?= htmlspecialchars($misionero['cargo']) ?>
                </span>
            <?php endif; ?>
        </div>

        <div class="px-6 pb-6 space-y-4">

            <div class="bg-gray-50 rounded-xl p-4">
                <p class="text-xs font-bold uppercase text-gray-400 mb-1">Iglesia</p>
                <p class="font-semibold text-gray-800"><?= htmlspecialchars($misionero['nombre_iglesia'] ?: 'No especificado') ?></p>
                <p class="text-sm text-gray-500"><?= htmlspecialchars($misionero['direccion_iglesia'] ?: '') ?></p>
            </div>

            <div class="grid grid-cols-2 gap-3">
                <div class="bg-gray-50 rounded-xl p-4">
                    <p class="text-xs font-bold uppercase text-gray-400 mb-1">Talla</p>
                    <p class="font-semibold text-gray-800"><?= htmlspecialchars($misionero['talla_camisa'] ?: '—') ?></p>
                </div>
                <div class="bg-gray-50 rounded-xl p-4">
                    <p class="text-xs font-bold uppercase text-gray-400 mb-1">Teléfono</p>
                    <p class="font-semibold text-gray-800"><?= htmlspecialchars($misionero['numero_telefono'] ?: '—') ?></p>
                </div>
            </div>

            <div class="bg-gray-50 rounded-xl p-4">
                <p class="text-xs font-bold uppercase text-gray-400 mb-1">Días que asistirá</p>
                <p class="font-semibold text-gray-800"><?= htmlspecialchars($dias_visita) ?></p>
            </div>

            <?php if ($esposa || $hijos || $acompanantes): ?>
            <div class="border-t border-dashed border-gray-200 pt-4">
                <p class="text-xs font-bold uppercase text-gray-400 mb-2">Acompañantes</p>
                <ul class="space-y-1 text-sm text-gray-700">
                    <?php if ($esposa): ?>
                        <li class="flex items-center gap-2"><i class="ph ph-heart text-brand-yellow"></i> <?= htmlspecialchars($esposa['nombre']) ?> (Esposa) Talla: <?= htmlspecialchars($esposa['talla_vestido'] ?: '—') ?></li>
                    <?php endif; ?>
                    <?php foreach ($hijos as $hijo): ?>
                        <li class="flex items-center gap-2"><i class="ph ph-baby text-brand-yellow"></i> <?= htmlspecialchars($hijo['nombre']) ?> (Hijo/a<?= $hijo['edad'] !== null ? ', ' . htmlspecialchars($hijo['edad']) . ' años' : '' ?>) Calzado: <?= htmlspecialchars($hijo['numero_calzado'] ?: '—') ?></li>
                    <?php endforeach; ?>
                    <?php foreach ($acompanantes as $ac): ?>
                        <li class="flex items-center gap-2"><i class="ph ph-users text-brand-yellow"></i> <?= htmlspecialchars($ac['nombre']) ?> (Acompañante)</li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <?php endif; ?>

        </div>

        <div class="bg-gray-50 text-center py-3 text-xs text-gray-400 border-t border-gray-100">
            Presenta este folio en el registro para recoger tu gafete
        </div>
    </div>

    <button onclick="window.print()" class="no-print mt-4 w-full bg-brand-yellow hover:bg-brand-dark text-white font-bold py-3 rounded-xl transition flex items-center justify-center gap-2">
        <i class="ph ph-printer"></i> Imprimir folio
    </button>

</div>

</body>
</html>