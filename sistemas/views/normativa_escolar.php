<?php
include 'header.php';
?>

<body>
    <article class="article fulltext ">
        <section class="article-body">
            <div class="text-center">
                <h3 style="font-size:300%;">Normativa Escolar</h3>
                <?php
                $texto = ["Lineamientos de Apoyos y Becas"
                ,"Lineamientos del Centro de Información"
                ,"Lineamientos para el Uso de Laboratorios"
                ,"Manual de Lineamientos Académico-Administrativos TecNM"
                ,"Lineamiento para la Operación de Cursos Intensivos Remediales"
                ,"Reglamento de estudiantes para el ITESG"
                ,"Lineamientos del Servicio Social"
                ,"Políticas Generales para el Uso de Estacionamiento"];
                $pdf = ["Apoyos y becas, lineamientos de.pdf"
                ,"Centro de informacion, lineamientos de.pdf"
                ,"Laboratorios, lineamientos para uso.pdf"
                ,"Manual de lineamientos académico administrativos TecNM.pdf"
                ,"Operación de cursos intensivos remediales, lineamiento para la.pdf"
                ,"Reglamento de estudiantes para el ITESG.pdf"
                ,"Servicio social, lineamientos del,pdf"
                ,"Uso de estacionamiento, Políticas generales para el.pdf"];
                for ($i = 0; $i < count($texto); $i++) {
                    echo '<h4>' . $texto[$i] . '</h4>
                    <div class="alert alert-success mx-5 text-center">
                        <img src="../images/desc_pdf.png" width="44" height="50" alt="Icono de descarga"> 
                        <br>
                        <a href="../images/documentos/' . $pdf[$i] . '"  target="_blank">
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
include 'footer.php';
?>