    <!--Carrusel e imagenes-->
    <div class="container-flex mt-3 bg-gray">
        <br><br>
        <div class="row g-0">
            <div class="col">
                <div class="container-flex">
                    <div id="carouselExampleAutoplaying" class="carousel carousel-dark slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner m-3">
                            <div class="carousel-item active">
                                <img src="img-carousel1.jpg" class="d-block" height="425px" width="850px">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>First slide label</h5>
                                    <p>Some representative placeholder content for the first slide.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="img-carousel1.jpg" class="d-block" height="425px" width="850px">
                            </div>
                            <div class="carousel-item">
                                <img src="..." class="d-block" height="425px" width="850px" alt="...">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col p-3">
                <div>
                    <img src="img-carousel1.jpg" height="200px" width="435px" alt="">
                </div>
                <br>
                <div class="col">
                    <div>
                        <img src="img-carousel1.jpg" height="200px" width="435px" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Tarjetas-->
    <div class="container-flex bg-light ">
        <div class="text-center">
            <p class="fs-2 p-lg-4 text-uppercase">Principales categorias</p>
        </div>
        <div class="container">
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col">
                    <div class="card">
                        <img src="img-logo-atn.png" class="card-img-top" height="200" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional
                                content. This content is a little bit longer.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="img-logo-atn.png" class="card-img-top" height="200" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional
                                content. This content is a little bit longer.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="img-logo-atn.png" class="card-img-top" height="200" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional
                                content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="img-logo-atn.png" class="card-img-top" height="200" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional
                                content. This content is a little bit longer.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Mini carrusel en container-->
        <div class="container-flex mt-5 bg-gray text-center">
            <div class="row g-0">
                <div class="col p-2">
                    <p class="fs-2 p-lg-5 text-uppercase">Articulos destacados</p>
                </div>
                <div class="col">
                    <div class="container">
                        <div id="carouselExample" class="carousel slide carousel-dark">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <table border="2">
                                        <tr>
                                            <img src="img-logo-atn.png" class=" w-25" alt="...">
                                            <img src="img-logo-atn.png" class=" w-25" alt="...">
                                            <img src="img-logo-atn.png" class=" w-25" alt="...">
                                        </tr>
                                    </table>
                                </div>
                                <div class="carousel-item">
                                    <table border="2">
                                        <tr>
                                            <img src="img-logo-atn.png" class=" w-25" alt="...">
                                            <img src="img-logo-atn.png" class=" w-25" alt="...">
                                            <img src="img-logo-atn.png" class=" w-25" alt="...">
                                        </tr>
                                    </table>
                                </div>
                                <div class="carousel-item">
                                    <table border="2">
                                        <tr>
                                            <img src="img-logo-atn.png" class=" w-25" alt="...">
                                            <img src="img-logo-atn.png" class=" w-25" alt="...">
                                            <img src="img-logo-atn.png" class=" w-25" alt="...">
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>