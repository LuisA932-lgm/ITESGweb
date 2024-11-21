<?php
include 'header.php';
?>
<header>
    <style>
        /* Reducir el tamaño de las imágenes */
        .carousel-inner img {
            width: 80%; /* Reduce al 75% del ancho disponible */
            margin: 0 auto; /* Centrar las imágenes */
            border-radius: 10px; /* Opcional: bordes redondeados */
        }

        /* Estilizar los botones de navegación */
        .carousel-control-prev,
        .carousel-control-next {
            width: 50px; /* Hacer los botones más pequeños */
            height: 50px; /* Hacer los botones más pequeños */
            background-color: rgba(0, 0, 0, 0.5); /* Color sólido con transparencia */
            border-radius: 50%; /* Botones circulares */
            top: 50%; /* Centrar verticalmente */
            transform: translateY(-50%);
        }

        /* Colocar los botones más cerca de los lados */
        .carousel-control-prev {
            left: -25px; /* Ajusta la posición hacia la izquierda */
        }

        .carousel-control-next {
            right: -25px; /* Ajusta la posición hacia la derecha */
        }

        /* Cambiar color al pasar el cursor sobre los botones */
        .carousel-control-prev:hover,
        .carousel-control-next:hover {
            background-color: rgba(0, 0, 0, 0.8); /* Color más oscuro */
        }
        .carousel-control-prev {
        left: 5px; /* Ajusta la posición hacia la imagen */
    }

    .carousel-control-next {
        right: 5px; /* Ajusta la posición hacia la imagen */
    }
    </style>
</header>

<body>
    <div class="text-center">
        <img src='../images/headers/h_politica.jpg' class="w-25 mx-auto">
    </div>
    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel"
        data-bs-interval="7000">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../images/mision.jpg" class="d-block" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../images/vision.jpg" class="d-block" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../images/valores.jpg" class="d-block" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../images/pol_calidad.jpg" class="d-block" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</body>

<?php
include 'footer.php';
?>
