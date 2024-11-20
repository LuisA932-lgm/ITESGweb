  <?php
    include '/sistemas/views/footer.php';
  ?>
<body>
    <div class="text-center">
        <img src='/ITESG/images/banner/logo_comite.png' class="mx-auto">
    </div>

    <div>
        <img src="/ITESG/images/banner/COM_COD_ETI.jpg">
    </div>

    <div class="text-center">
        <a href="/ITESG/images/documentos/cod_etica.pdf" target="_blank">
            <img src="/ITESG/images/banner/info_ccond.jpg">
        </a>
    </div>

    <div>
        <img src="/ITESG/images/banner/COM_INT_ET.jpg">
    </div>

    <div class="text-center">
        <img src="/ITESG/images/banner/BAN_WEB_COM_INT.jpg">
    </div>

    <div class="d-flex align-items-center my-3">
        <a href="/ITESG/images/documentos/3_4_lineamientos_generales.pdf">
            <img src="/ITESG/images/iconos/codigo.png" alt="Ícono de Código" class="me-3"
                style="width: 50px; height: 50px;">
        </a>
        <p class="mb-0">Lineamientos Generales CIEyPCI</p>
    </div>

    <div>
        <img src="/ITESG/images/banner/prin_inst.jpg">
    </div>

    <?php
    $ligas=["4.2%20Principios.jpg","4.3%20Principios.jpg","4.4%20Principios.jpg","5.2%20Reglas%20de%20Integridad.jpg","5.3%20Reglas%20de%20Integridad.jpg","5.4%20Reglas%20de%20Integridad.jpg"];
    $img=["principios1.png","5.1%20INTEGRIDAD.png"];

    for($i=0;$i<6;$i++)
    {
        if($i<3)
        {
            echo '<div class="d-flex align-items-center my-3">
            <img src="/ITESG/images/iconos/'.$img[0].'"alt="Ícono de Código" class="me-3" style="width: 70px; height: 70px;">
            <a href="/ITESG/images/recursos/'.$ligas[$i].'">';
        }
        else{
            echo '<div class="d-flex align-items-center my-3">
            <img src="/ITESG/images/iconos/'.$img[1].'"alt="Ícono de Código" class="me-3" style="width: 70px; height: 70px;">
            <a href="/ITESG/images/recursos/'.$ligas[$i].'">';
        }
        echo '
                <p class="mb-0">Para descargar da click aquí</p>
                </a>
                </div>';
        if($i==2)
        {
            echo'<div>
                <img src="/ITESG/images/banner/COM_REGLAS.jpg">
                </div>';
        }
    }
    ?>
    <div>
        <img src="/ITESG/images/banner/COM_VAL.jpg">
    </div>

    <div class="text-center">
        <a href="/ITESG/images/documentos/codigo_conducta23.pdf" target="_blank">
            <img src="/ITESG/images/banner/info_cetica.jpg">
        </a>
    </div>
<?php
$img=["6.1%20VALORES.png","COM_SENSI.jpg","7%20SENSIBILIZACION.png","COM_EVA.jpg","8 EVALUACIÓN.png"];
for($i=0;$i<5;$i++)
{
    if($i % 2 == 1)
    {
        echo '<div>
        <img src="/ITESG/images/banner/'.$img[$i].'">
        </div>';
    }
    else{
        echo '<div>
        <img src="/ITESG/images/iconos/'.$img[$i].'" style="width: 70px; height: 70px;">
        </div>';
    }
}?>
</body>
  <php?
    include '/sistemas/views/footer.php';
  ?>
