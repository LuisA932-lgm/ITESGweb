<?php
include 'header.php';
?>
<head>

</head>

<body>
<article class="article fulltext ">
<section class="article-body">
    <div class="text-center">
        <img src="../images/headers/h_directorio.jpg">
    </div>
    <h4 style="font-size:200%;">Dirección General</h4>
    <?php
    $nombre = ["Eusebio Vega Pérez", "Aide Alejandra Murillo Moreno", "Luis Felipe Rosales Ponce", "Ma. Magdalena Alicia Sánchez Palafox", "José Alberto González Flores", "Juana Micaela Salazar López", "Eduardo Emiliano Ruíz Morfin"];
    $puesto = ["Director(a) General", "Abogado(a) General", "Ing. en Sistemas/ Coordinador(a) De Proyectos Institucionales", "Secretaria(o) de Dirección General", "Analista Especializado", "Capturista de Abogada General", "Chofer del Director"];
    $correo = ["eusebio.vp@guanajuato.tecnm.mx", "aide.mm@guanajuato.tecnm.mx", "luis.rp@guanajuato.tecnm.mx", "ma.sp@guanajuato.tecnm.mx", "jose.gf@guanajuato.tecnm.mx", "juana.sl@guanajuato.tecnm.mx", "eduardo.rm@guanajuato.tecnm.mx"];
    $telefono = "473 73 47878";
    echo '<table class="tables mx-5">
        <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Puesto</th>
                <th scope="col">Correo Electrónico</th>
                <th scope="col">Teléfono</th>
            </tr>
        </thead>
        <tbody>';
    for ($i = 0; $i < 7; $i++) {
        if ($correo[$i] == "@guanajuato.tecnm.mx") {
            $linea = '<td>' . $correo[$i] . '</td>';
        } else {
            $linea = '<td> <a href="mailto:' . $correo[$i] . '">' . $correo[$i] . '</a></td>';
        }

        echo '<tr>
                <th scope="row">' . $nombre[$i] . '</th>
                <td>' . $puesto[$i] . '</td>
                ' . $linea . '
                <td>' . $telefono . '</td>
            </tr>';
    }
    echo '</tbody>
    </table>';
    ?>
    <h4 style="font-size:200%;">Subdirección Académica</h4>
    <?php
    $nombre = [
        "Nicte-Ha Mejía Vázquez",
        "V A C A N T E",
        "Luis Armando Torres Pérez",
        "César Iván Castañeda Jiménez",
        "Brenda Celene Garnica Rodríguez",
        "Cristobal Vargas Contreras",
        "Alejandra Teresa Caselis Ramírez",
        "Diana Hazel González Padilla",
        "Diana Estefania Barrientos Llamas",
        "V A C A N T E",
        "Claudia Catalina Valtierra Trujillo",
        "Nora García Martínez",
        "Silvia Fabiola Rodríguez Jasso",
        "Arturo Olmos Palacios",
        "Juan Carlos Rodríguez Arriaga",
        "Fabiola Olmos Martínez"
    ];

    $puesto = [
        "Subdirector(a) Académico",
        "Jefe(a) De División/Coordinador(a) de Ing. en Sistemas Computacionales",
        "Jefe(a) De División/Coordinador(a) de Ing. Industrial",
        "Jefe(a) De División/Coordinador(a) de Ing. en Mecatrónica",
        "Jefe(a) De División/Coordinador(a) de Ing. en Industrias Alimentarias",
        "Jefe(a) De División/Coordinador(a) de Ing. en Gestión Empresarial",
        "Jefe(a) de Departamento de Desarrollo Académico",
        "Psicólogo(a)",
        "Psicólogo(a)",
        "Medico(a) General",
        "Secretaria(o) de Subdirección Académica",
        "Secretaria(o) de Jefe de Departamento",
        "Capturista de Coordinación de Carrera",
        "Laboratorista/Encargado(a) de Laboratorios",
        "Laboratorista",
        "Laboratorista"
    ];

    $correo = [
        "nicte.mv@guanajuato.tecnm.mx",
        "@guanajuato.tecnm.mx",
        "luis.tp@guanajuato.tecnm.mx",
        "cesar.cj@guanajuato.tecnm.mx",
        "brenda.gr@guanajuato.tecnm.mx",
        "cristobal.vc@guanajuato.tecnm.mx",
        "alejandra.cr@guanajuato.tecnm.mx",
        "diana.gp@guanajuato.tecnm.mx",
        "diana.bl@guanajuato.tecnm.mx",
        "@guanajuato.tecnm.mx",
        "claudia.vt@guanajuato.tecnm.mx",
        "nora.gm@guanajuato.tecnm.mx",
        "silvia.rj@guanajuato.tecnm.mx",
        "arturo.op@guanajuato.tecnm.mx",
        "juan.ra@guanajuato.tecnm.mx",
        "fabiola.om@guanajuato.tecnm.mx"
    ];

    $telefono = "473 73 47878";

    echo '<table class="tables mx-5">
        <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Puesto</th>
                <th scope="col">Correo Electrónico</th>
                <th scope="col">Teléfono</th>
            </tr>
        </thead>
        <tbody>';
    for ($i = 0; $i < 16; $i++) {
        if ($correo[$i] == "@guanajuato.tecnm.mx") {
            $linea = '<td>' . $correo[$i] . '</td>';
        } else {
            $linea = '<td> <a href="mailto:' . $correo[$i] . '">' . $correo[$i] . '</a></td>';
        }

        echo '<tr>
                <th scope="row">' . $nombre[$i] . '</th>
                <td>' . $puesto[$i] . '</td>
                ' . $linea . '
                <td>' . $telefono . '</td>
            </tr>';
    }
    echo '</tbody>
    </table>';
    ?>
    <h4 style="font-size:200%;">Subdirección de Planeación y Vinculación</h4>
    <?php
    $nombre = [
        "Carmen del Rosio Esparza Valencia",
        "Fernanda Berenice Márquez Vélez"
        ,
        "José Alejandro Castro Téllez",
        "Sandra Guadalupe Salas Torres",
        "Elihu Jonathan Granados Montero"
        ,
        "Luz Elena Isadora Zendejas Chavez",
        "Ernesto Ibarra Rodríguez",
        "Sandra Selene Torres Durán",
        "V A C A N T E"
        ,
        "Juan Alonso Rocha Valadez",
        "Juan Manuel Juárez Pérez",
        "Daniela Yadira Ortiz Pérez",
        "Karina Hernández Blancarte"
        ,
        "David Hernández Tinoco",
        "V A C A N T E"
    ];
    $puesto = [
        "Subdirector(a) de Planeación y Vinculación",
        "Secretaria(o) de Subdirección",
        "Jefe(a) de Departamento de Vinculación y Extensión"
        ,
        "Coordinador(a) de Promociones/ Difusión y Comunicación",
        "Secretaria(o) de Jefe de Departamento",
        "Bibliotecaria(o)/Encargado(a) de Biblioteca"
        ,
        "Jefe(a) de Departamento de Calidad/Actividades Extraescolares y de Innovación",
        "Analista Técnico"
        ,
        "Jefe(a) de Departamento de Planeación, Programación y Presupuesto/ Evaluación",
        "Jefe(a) de Departamento de Servicios Escolares",
        "Analista Técnico"
        ,
        "Analista Técnico/Analista Técnico Especializado",
        "Programadora",
        "Secretario(a) de Jefe de Departamento",
        "Capturista de Jefe de Departamento"
    ];
    $correo = [
        "carmen.ev@guanajuato.tecnm.mx",
        "fernanda.mv@guanajuato.tecnm.mx",
        "jefaturadevinculacion@guanajuato.tecnm.mx",
        "difusion@guanajuato.tecnm.mx"
        ,
        "elihu.gm@guanajuato.tecnm.mx",
        "biblioteca@guanajuato.tecnm.mx",
        "ernesto.ir@guanajuato.tecnm.mx",
        "sandra.td@guanajuato.tecnm.mx",
        "@guanajuato.tecnm.mx"
        ,
        "juan.rv@guanajuato.tecnm.mx",
        "juan.jp@guanajuato.tecnm.mx",
        "daniela.op@guanajuato.tecnm.mx",
        "karina.hb@guanajuato.tecnm.mx",
        "david.ht@guanajuato.tecnm.mx",
        "@guanajuato.tecnm.mx"
    ];
    $telefono = "473 73 47878";
    echo '<table class="tables mx-5">
        <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Puesto</th>
                <th scope="col">Correo Electrónico</th>
                <th scope="col">Teléfono</th>
            </tr>
        </thead>
        <tbody>';
    for ($i = 0; $i < 15; $i++) {
        if ($correo[$i] == "@guanajuato.tecnm.mx") {
            $linea = '<td>' . $correo[$i] . '</td>';
        } else {
            $linea = '<td> <a href="mailto:' . $correo[$i] . '">' . $correo[$i] . '</a></td>';
        }

        echo '<tr>
                <th scope="row">' . $nombre[$i] . '</th>
                <td>' . $puesto[$i] . '</td>
                ' . $linea . '
                <td>' . $telefono . '</td>
            </tr>';
    }
    echo '</tbody>
    </table>';
    ?>
    <h4 style="font-size:200%;">Subdirección de Administración y Finanzas</h4>
    <?php
    $nombre = [
        "Félix Valencia Rocha",
        "Clara Vanesa Villar García",
        "Rosario Betsabé Ramírez Chávez",
        "Eduardo Rojas González",
        "Erika Martínez Martínez",
        "Eva Idalid Salce Morales",
        "Patricia Díaz de León Núñez",
        "Efrén Vázquez Villegas",
        "Perla Denisse Suárez Mariscal",
        "Yunuel Reséndiz Vizcaya",
        "Cynthia Ivonne Mendez Fonseca",
        "Nayeli Alejandra García Medina",
        "Ma. Guadalupe Villalobos Prado",
        "Danae Dolores Segoviano Romero",
        "Jonathan Eduardo Barrera Sanchez"
    ];

    $puesto = [
        "Subdirector(a) de Servicios Administrativos/Administración y Finanzas",
        "Jefe(a) de Departamento de Recursos Financieros",
        "Jefe(a) de Departamento de Servicios Administrativos/Recursos Materiales y Servicios Generales",
        "Jefe(a) de Departamento de Centro de Cómputo",
        "Jefe(a) de Oficina de Sistemas",
        "Técnico(a) Especializado/Encargado(a) de Contabilidad",
        "Técnico(a) Especializado/Encargado(a) de Recursos Humanos",
        "Técnico(a) en Mantenimiento/Encargado(a) de Mantenimiento",
        "Analista Especializado/Analista Técnico Especializado (Compras)",
        "Analista Técnico (Administrativo)",
        "Secretaria(o) de Subdirección",
        "Capturista de Recursos Humanos",
        "Intendente",
        "Intendente",
        "Intendente"
    ];

    $correo = [
        "felix.vr@guanajuato.tecnm.mx",
        "clara.vg@guanajuato.tecnm.mx",
        "rosario.rc@guanajuato.tecnm.mx",
        "eduardo.rg@guanajuato.tecnm.mx",
        "erika.mm@guanajuato.tecnm.mx",
        "eva.sm@guanajuato.tecnm.mx",
        "patricia.dln@guanajuato.tecnm.mx",
        "efren.vv@guanajuato.tecnm.mx",
        "perla.sm@guanajuato.tecnm.mx",
        "yunuel.rv@guanajuato.tecnm.mx",
        "cynthia.mf@guanajuato.tecnm.mx",
        "nayeli.gm@guanajuato.tecnm.mx",
        "ma.gp@guanajuato.tecnm.mx",
        "danae.sr@guanajuato.tecnm.mx",
        "jonathan.bs@guanajuato.tecnm.mx"
    ];

    $telefono = "473 73 47878";

    echo '<table class="tables mx-5">
        <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Puesto</th>
                <th scope="col">Correo Electrónico</th>
                <th scope="col">Teléfono</th>
            </tr>
        </thead>
        <tbody>';
    for ($i = 0; $i < 15; $i++) {
        if ($correo[$i] == "@guanajuato.tecnm.mx") {
            $linea = '<td>' . $correo[$i] . '</td>';
        } else {
            $linea = '<td> <a href="mailto:' . $correo[$i] . '">' . $correo[$i] . '</a></td>';
        }

        echo '<tr>
                <th scope="row">' . $nombre[$i] . '</th>
                <td>' . $puesto[$i] . '</td>
                ' . $linea . '
                <td>' . $telefono . '</td>
            </tr>';
    }
    echo '</tbody>
    </table>';
    ?>
    </section>
    </article>
</body>
<?php
include 'footer.php';
?>
