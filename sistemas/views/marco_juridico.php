<?php
include $_SERVER['DOCUMENT_ROOT'] . '/sistemas/views/header.php';
?>

<body>
    <article class="article fulltext ">
        <section class="article-body">
            <div class="text-center">
                <img src="/sistemas/images/headers/marc_jur.png">
                <h3 style="font-size:300%;">General</h3>
                <?php
                $texto = ["Decreto de creación", "Estatuto orgánico", "Manual de organización"];
                $pdf = ["decreto_itesg.pdf", "estatuto_itesg.pdf", "Manual_organización_24_08_16.pdf"];
                for ($i = 0; $i < 3; $i++) {
                    echo '<h4>' . $texto[$i] . '</h4>
                    <div class="alert alert-success mx-4 text-center">
                        <img src="/sistemas/images/desc_pdf.png" width="44" height="50" alt="Icono de descarga"> 
                        <br>
                        <a href="/sistemas/images/documentos/' . $pdf[$i] . '" download="' . $pdf[$i] . '" target="_blank">
                            Descarga aquí
                        </a>
                    </div>';

                }
                ?>
                <h3 style="font-size:300%;">PARA SERVIDORES PÚBLICOS</h>
                <?php
                $texto = [
                    "Disposiciones internas de correspondencia"
                    ,
                    "Disposiciones internas de comunicación social"
                    ,
                    "Disposiciones internas para vehículos oficiales"
                    ,
                    "Lineamientos de Ingresos Propios ITESG"
                    ,
                    "Lineamientos de TIC´s 2024"
                    ,
                    "Políticas generales para el uso del estacionamiento"
                    ,
                    "Hostigamiento laboral"
                ];
                $pdf = [
                    "disp_corresp.pdf"
                    ,
                    "disp_int_com_soc.pdf"
                    ,
                    "disp_int_veh.pdf"
                    ,
                    "lin_ing_pro2021.pdf"
                    ,
                    "Lineamientos_tecnologias2024.pdf"
                    ,
                    "politica_estacionamiento.pdf"
                    ,
                    "Circular-DG-009-2022.pdf"
                ];
                for ($i = 0; $i < 7; $i++) {
                    echo '<h4>' . $texto[$i] . '</h4>
                        <div class="alert alert-success mx-4 text-center">
                            <img src="/sistemas/images/desc_pdf.png" width="44" height="50" alt="Icono de descarga"> 
                            <br>
                            <a href="/sistemas/images/documentos/' . $pdf[$i] . '" download="' . $pdf[$i] . '" target="_blank">
                                Descarga aquí
                            </a>
                        </div>';


                }
                ?>
            </div>
        </section>
    </article>

</body>
<?php
include $_SERVER['DOCUMENT_ROOT'] . '/sistemas/views/footer.php';
?>