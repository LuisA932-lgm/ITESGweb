<?php
include 'header.php';
?>

<body>
    <article class="article fulltext ">
        <section class="article-body">
            <div class="text-center">
                <img src='../images/comite/logo_comite.png' class="mx-auto">
            </div>

            <div>
                <img src="../images/comite/COM_COD_ETI.jpg">
            </div>

            <div class="text-center">
                <a href="../images/comite/cod_etica.pdf" target="_blank">
                    <img src="../images/display/info_ccond.jpg" class="img-full-width">
                </a>
            </div>

            <div>
                <img src="../images/comite/COM_INT_ET.jpg">
            </div>

            <div class="text-center">
                <img src="../images/comite/BAN_WEB_COM_INT.jpg" class="img-full-width">
            </div>

            <div class="d-flex align-items-center my-3">
                <a href="../images/comite/3_4_lineamientos_generales.pdf">
                    <img src="../images/comite/codigo.png" alt="Ícono de Código" class="me-3"
                        style="width: 70px; height: 70px;">
                </a>
                <p class="mb-0">Lineamientos Generales CIEyPCI</p>
            </div>

            <div>
                <img src="../images/comite/prin_inst.jpg">
            </div>

            <?php
            $ligas = ["4.2%20Principios.jpg", "4.3%20Principios.jpg", "4.4%20Principios.jpg", "5.2%20Reglas%20de%20Integridad.jpg", "5.3%20Reglas%20de%20Integridad.jpg", "5.4%20Reglas%20de%20Integridad.jpg"];
            $img = ["principios1.png", "5.1%20INTEGRIDAD.png"];

            for ($i = 0; $i < 6; $i++) {
                if ($i < 3) {
                    echo '<div class="d-flex align-items-center my-3">
            <img src="../images/comite/' . $img[0] . '"alt="Ícono de Código" class="me-3" style="width: 70px; height: 70px;">
            <a href="../images/comite/' . $ligas[$i] . '">';
                } else {
                    echo '<div class="d-flex align-items-center my-3">
            <img src="../images/comite/' . $img[1] . '"alt="Ícono de Código" class="me-3" style="width: 70px; height: 70px;">
            <a href="../images/comite/' . $ligas[$i] . '">';
                }
                echo 'Para descargar da click aquí
                </a>
                </div>';
                if ($i == 2) {
                    echo '<div>
                <img src="../images/comite/COM_REGLAS.jpg">
                </div>';
                }
            }
            ?>
            <div>
                <img src="../images/comite/COM_VAL.jpg">
            </div>

            <div class="text-center">
                <a href="../images/documentos/codigo_conducta23.pdf" target="_blank">
                    <img src="../images/display/info_cetica.jpg" class="img-full-width">
                </a>
            </div>
            <?php
            $img = ["6.1%20VALORES.png", "COM_SENSI.jpg", "7%20SENSIBILIZACION.png", "COM_EVA.jpg", "8 EVALUACIÓN.png"];
            for ($i = 0; $i < 5; $i++) {
                if ($i % 2 == 1) {
                    echo '<div>
        <img src="../images/comite/' . $img[$i] . '">
        </div>';
                } else {
                    echo '<div>
        <img src="../images/comite/' . $img[$i] . '" style="width: 70px; height: 70px;">
        </div>';
                }
            } ?>
        </section>
    </article>
</body>
<?php
include 'footer.php';
?>
