<?php
include $_SERVER['DOCUMENT_ROOT'] . '/sistemas/views/header.php';
?>

<body>
    <div class="text-center">
        <img src='../../images/headers/h_politica.jpg' class="w-25 mx-auto">
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
                <img src="../../images/mision.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../../images/vision.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../../images/valores.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../../images/pol_calidad.jpg" class="d-block w-100" alt="...">
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
include $_SERVER['DOCUMENT_ROOT'] . '/sistemas/views/footer.php';
?>