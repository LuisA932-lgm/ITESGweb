<?php
include $_SERVER['DOCUMENT_ROOT'] . '/sistemas/views/header.php';
?>

<body>
<div class="text-center">
        <img src="/sistemas/images/headers/h_directorio.jpg">
    </div>
    <h2 style="font-size:200%;" align="center">PERSONAL DOCENTE DE TIEMPO COMPLETO</h2>
    <?php
    $nombre = [
        "Angélica González Páramo",
        "Brenda Mariana Figueroa Espinosa",
        "Carmen Paulina Armenta Rico",
        "Claudia Rivera Domínguez",
        "Dulce Marisol Arteaga Godoy",
        "Edith Adriana Méndez Saucedo",
        "Edgar Enrique Vázquez Ramírez",
        "Everardo Mares Mares",
        "Fernando Jesús Romero Cruz",
        "Ismael Urbina Salas",
        "Itzel González García",
        "Jorge Varela Pérez",
        "José Ramón López Guevara",
        "Mariana Guadalupe Corona Cruz",
        "Luis Armando García de la Rosa",
        "María Guadalupe de Lourdes Acosta Castillo",
        "Martha Isabel Páramo Rosales",
        "Mayra Victoria Campos",
        "Norma Angélica Caudillo Ortega",
        "Paola Patricia García Lira",
        "Rosario Glendenit Zambrano Hernández",
        "Lilia Marcela Zaldumbide Carrillo",
        "Claudia García Acevedo",
        "Víctor Hugo López Enríquez",
        "Emmanuel Mendoza Hernández",
        "Ana Gabriela López Ortega"
    ];

    $categoria = [
        "Profesora Titular A",
        "Profesora Asociada A",
        "Profesora Asociada A",
        "Profesora Titular A",
        "Profesora Titular A",
        "Profesor Asociado A",
        "Profesor Titular A",
        "Profesor Titular B",
        "Profesor Asociado B",
        "Profesor Titular A",
        "Profesora Asociada A",
        "Profesor Titular A",
        "Profesor Asociado A",
        "Profesora Asociada B",
        "Profesor Titular A",
        "Profesora Titular A",
        "Profesora Asociada A",
        "Profesora Asociada A",
        "Profesora Titular A",
        "Profesora Asociada A",
        "Profesora Titular A",
        "Profesora Asociada B",
        "Profesora Asociada A",
        "Profesor Titular A",
        "Profesor Titular A",
        "Profesora Asociada A"
    ];

    $correo = [
        "angelica.gp@guanajuato.tecnm.mx",
        "brenda.fe@guanajuato.tecnm.mx",
        "carmen.ar@guanajuato.tecnm.mx",
        "claudia.rd@guanajuato.tecnm.mx",
        "dulce.ag@guanajuato.tecnm.mx",
        "edith.ms@guanajuato.tecnm.mx",
        "edgar.vr@guanajuato.tecnm.mx",
        "everardo.mm@guanajuato.tecnm.mx",
        "fernando.rc@guanajuato.tecnm.mx",
        "ismael.us@guanajuato.tecnm.mx",
        "itzel.gg@guanajuato.tecnm.mx",
        "jorge.vp@guanajuato.tecnm.mx",
        "jose.lg@guanajuato.tecnm.mx",
        "mariana.cc@guanajuato.tecnm.mx",
        "luis.gr@guanajuato.tecnm.mx",
        "maria.ac@guanajuato.tecnm.mx",
        "martha.pr@guanajuato.tecnm.mx",
        "mayra.vc@guanajuato.tecnm.mx",
        "norma.co@guanajuato.tecnm.mx",
        "paola.gl@guanajuato.tecnm.mx",
        "rosario.zh@guanajuato.tecnm.mx",
        "lilia.zc@guanajuato.tecnm.mx",
        "claudia.ga@guanajuato.tecnm.mx",
        "victor.le@guanajuato.tecnm.mx",
        "emmanuel.mh@guanajuato.tecnm.mx",
        "ana.lo@guanajuato.tecnm.mx"
    ];

    echo '<table class="table">
        <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Categoría</th>
                <th scope="col">Correo Electrónico</th>
            </tr>
        </thead>
        <tbody>';
    for ($i = 0; $i < count($nombre); $i++) {
        if ($correo[$i] == "@guanajuato.tecnm.mx") {
            $linea = '<td>' . $correo[$i] . '</td>';
        } else {
            $linea = '<td> <a href="mailto:' . $correo[$i] . '">' . $correo[$i] . '</a></td>';
        }

        echo '<tr>
                <th scope="row">' . $nombre[$i] . '</th>
                <td>' . $categoria[$i] . '</td>
                ' . $linea . '
            </tr>';
    }
    echo '</tbody>
    </table>';
    ?>
    <h2 style="font-size:200%;" align="center">PERSONAL DOCENTE DE ASIGNATURA</h2>
    <?php
    $nombre = [
        "Alejandro Castillo Esparza",
        "Ana Paulina Serrano Ramírez",
        "Andrea Abigail Hernández Torres",
        "Arturo Berumen Cervantes",
        "César Gabriel Reyes Rodríguez",
        "Christian Ramírez Ledesma",
        "Cristel Sioreli Rodríguez Morales",
        "Cristina Montelongo García",
        "Cruz Verónica Robles Pérez",
        "Eréndira Hernández Guillén",
        "Erika Jacqueline Castillo Ruíz",
        "Esaú Leon Rodríguez",
        "Gabriela Gutiérrez Guerra",
        "Hugo Alberto Rendón Mejía",
        "Jair Iván Félix Ortiz",
        "Jessica Guerrero Lona",
        "Jorge Alberto López Barboza",
        "Josué Julian Herrera Velazquez",
        "José de Jesús Guillén Saldaña",
        "Juan Manuel Carbajo Zúñiga",
        "Judith Ojeda Gutiérrez",
        "Julio César Galvis Chacón",
        "Leslie Estefanía Muñiz Herrera",
        "Maria Fernanda Aguayo Hernádez",
        "María Nieto Escoto",
        "Martín Oscar Armando Pacheco Alvarez",
        "Miguel Angel Sandoval López",
        "Paloma Eloisa Rámirez Zúñiga",
        "Rocío Lira Marmolejo",
        "Sayra Monserrat Arámbula Echeverría",
        "Sebastián Camilo Morales Gutierréz",
        "Tania María González Vázquez",
        "Wendoly Julieta Guadalupe Romero Rodríguez"
    ];

    $categoria = [
        "Profesor Asociado B",
        "Profesora Asociada A",
        "Profesora Asociada A",
        "Profesor Asociado C",
        "Profesora Asociada A",
        "Profesor Asociado A",
        "Profesora Asociada A",
        "Profesora Asociada B",
        "Profesora Asociada B",
        "Profesora Asociada C",
        "Profesora Asociada A",
        "Profesor Asociado C",
        "Profesora Asociada A",
        "Profesor Asociado A",
        "Profesor Asociado A",
        "Profesora Asociada C",
        "Profesor Asociado A",
        "Profesor Asociado B",
        "Profesor Asociado A",
        "Profesor Asociado A",
        "Profesora Asociado A",
        "Profesor Asociado B",
        "Profesora Asociada A",
        "Profesora Asociada A",
        "Profesora Asociado A",
        "Profesor Asociado B",
        "Profesor e Investigador A",
        "Profesora e Investigadora A",
        "Profesora Asociada A",
        "Profesora Asociada A",
        "Profesor Asociado C",
        "Profesora Asociada C",
        "Profesora Asociada C"
    ];

    $correo = [
        "alejandro.ce@guanajuato.tecnm.mx",
        "ana.sr@guanajuato.tecnm.mx",
        "andrea.ht@guanajuato.tecnm.mx",
        "arturo.bc@guanajuato.tecnm.mx",
        "cesar.rr@guanajuato.tecnm.mx",
        "christian.rl@guanajuato.tecnm.mx",
        "cristel.rm@guanajuato.tecnm.mx",
        "cristina.mg@guanajuato.tecnm.mx",
        "cruz.rp@guanajuato.tecnm.mx",
        "erendira.hg@guanajuato.tecnm.mx",
        "erika.cr@guanajuato.tecnm.mx",
        "esau.lr@guanajuato.tecnm.mx",
        "gabriela.gg@guanajuato.tecnm.mx",
        "hugo.rm@guanajuato.tecnm.mx",
        "jair.fo@guanajuato.tecnm.mx",
        "jessica.gl@guanajuato.tecnm.mx",
        "jorge.lb@guanajuato.tecnm.mx",
        "josue.hv@guanajuato.tecnm.mx",
        "jose.gs@guanajuato.tecnm.mx",
        "juan.cz@guanajuato.tecnm.mx",
        "judith.og@guanajuato.tecnm.mx",
        "julio.gc@guanajuato.tecnm.mx",
        "leslie.mh@guanajuato.tecnm.mx",
        "maria.ah@guanajuato.tecnm.mx",
        "maria.ne@guanajuato.tecnm.mx",
        "martin.pa@guanajuato.tecnm.mx",
        "miguel.sl@guanajuato.tecnm.mx",
        "paloma.rz@guanajuato.tecnm.mx",
        "rocio.lm@guanajuato.tecnm.mx",
        "sayra.ae@guanajuato.tecnm.mx",
        "sebastian.mg@guanajuato.tecnm.mx",
        "tania.gv@guanajuato.tecnm.mx",
        "wendoly.rr@guanajuato.tecnm.mx"
    ];


    echo '<table class="table">
        <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Categoría</th>
                <th scope="col">Correo Electrónico</th>
            </tr>
        </thead>
        <tbody>';
    for ($i = 0; $i < count($nombre); $i++) {
        if ($correo[$i] == "@guanajuato.tecnm.mx") {
            $linea = '<td>' . $correo[$i] . '</td>';
        } else {
            $linea = '<td> <a href="mailto:' . $correo[$i] . '">' . $correo[$i] . '</a></td>';
        }

        echo '<tr>
                <th scope="row">' . $nombre[$i] . '</th>
                <td>' . $categoria[$i] . '</td>
                ' . $linea . '
            </tr>';
    }
    echo '</tbody>
    </table>';
    ?>
</body>
<?php
include $_SERVER['DOCUMENT_ROOT'] . '/sistemas/views/footer.php';
?>