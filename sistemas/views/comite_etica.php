<?php
include $_SERVER['DOCUMENT_ROOT'] . '/sistemas/views/header.php';
?>

<body>
    <div class="text-center">
        <img src='/sistemas/images/comite/logo_comite.png' class="mx-auto">
    </div>

    <div>
        <img src="/ITESG/images/comite/COM_COD_ETI.jpg">
    </div>

    <div class="text-center">
        <a href="/sistemas/images/comite/cod_etica.pdf" target="_blank">
            <img src="/sistemas/images/display/info_ccond.jpg">
        </a>
    </div>

    <div>
        <img src="/sistemas/images/comite/COM_INT_ET.jpg">
    </div>

    <div class="text-center">
        <img src="/sistemas/images/comite/BAN_WEB_COM_INT.jpg">
    </div>

    <div class="d-flex align-items-center my-3">
        <a href="/sistemas/images/comite/3_4_lineamientos_generales.pdf">
            <img src="/sistemas/images/comite/codigo.png" alt="Ícono de Código" class="me-3"
                style="width: 50px; height: 50px;">
        </a>
        <p class="mb-0">Lineamientos Generales CIEyPCI</p>
    </div>

    <div>
        <img src="/sistemas/images/comite/prin_inst.jpg">
    </div>

    <?php
    $ligas = ["4.2%20Principios.jpg", "4.3%20Principios.jpg", "4.4%20Principios.jpg", "5.2%20Reglas%20de%20Integridad.jpg", "5.3%20Reglas%20de%20Integridad.jpg", "5.4%20Reglas%20de%20Integridad.jpg"];
    $img = ["principios1.png", "5.1%20INTEGRIDAD.png"];

    for ($i = 0; $i < 6; $i++) {
        if ($i < 3) {
            echo '<div class="d-flex align-items-center my-3">
            <img src="/sistemas/images/comite/' . $img[0] . '"alt="Ícono de Código" class="me-3" style="width: 70px; height: 70px;">
            <a href="/sistemas/images/comite/' . $ligas[$i] . '">';
        } else {
            echo '<div class="d-flex align-items-center my-3">
            <img src="/sistema/images/comite/' . $img[1] . '"alt="Ícono de Código" class="me-3" style="width: 70px; height: 70px;">
            <a href="/sistema/images/comite/' . $ligas[$i] . '">';
        }
        echo '
                <p class="mb-0">Para descargar da click aquí</p>
                </a>
                </div>';
        if ($i == 2) {
            echo '<div>
                <img src="/sistemas/images/comite/COM_REGLAS.jpg">
                </div>';
        }
    }
    ?>
    <div>
        <img src="/sistemas/images/comite/COM_VAL.jpg">
    </div>

    <div class="text-center">
        <a href="/sistemas/images/documentos/codigo_conducta23.pdf" target="_blank">
            <img src="/sistemas/images/comite/info_cetica.jpg">
        </a>
    </div>
    <?php
    $img = ["6.1%20VALORES.png", "COM_SENSI.jpg", "7%20SENSIBILIZACION.png", "COM_EVA.jpg", "8 EVALUACIÓN.png"];
    for ($i = 0; $i < 5; $i++) {
        if ($i % 2 == 1) {
            echo '<div>
        <img src="/sistemas/images/comite/' . $img[$i] . '">
        </div>';
        } else {
            echo '<div>
        <img src="/sistemas/images/comite/' . $img[$i] . '" style="width: 70px; height: 70px;">
        </div>';
        }
    } ?>
</body>
<?php
include $_SERVER['DOCUMENT_ROOT'] . '/sistemas/views/footer.php';
?>