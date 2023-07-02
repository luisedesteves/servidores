<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intento 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <div class="d-flex bg-dark bg-opacity-75 justify-content-end" >
        <div><img class="me-2 mb-1" src="storage/img/phone4.png" alt="" style="height: 20px;"></div>
        <div class="me-4  text-white">261232324</div>
        
        <!-- <div class="bg-success text-white p-2 px-5 align-self-end">end</div> -->
    </div>
        <!-- aca ponemos el menu -->
        <nav class="navbar navbar-expand-lg navbar-primary bg-primary">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <a class="navbar-brand" href="#">
                            <img src="storage/img/logosol.png" alt="" height="60">
                            

                        </a>
                    </div>
                    <div class="col align-self-center">
                        <h2>SOLARUM</h2>
                    </div>
                </div>
                <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#mi-menu" >
                    <span class="navbar-toggler-icon"></span>
    
                </button>
                <div class="">
                    <div class="collapse navbar-collapse" id="mi-menu">
        
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link  disabled" href="#">Home</a>
                            </li>
        
                            <li class="nav-item">
                                <a class="nav-link" href="segundo.html">Servicios</a>
        
                            </li>
        
                            <li class="nav-item">
                                <a class="nav-link" href="#">Preguntas Frecuentes</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contactos</a>
                            </li>
        
                        </ul>
        
                    </div>
                </div>
            </div>
        </nav>



    <!-- <div class="d-flex" style="height: 6rem;">
        <div class="p-4"><img src="img/sol2.jpg" alt="" style="height: 80px;"></div>
        <div class=" p-4  border-top"><h2>Solarum</h2>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. At et est expedita laudantium illum architecto cumque sed</div>
        <div class="bg-success bg-opacity-50 p-4 me-4 border-bottom">border-end</div> 

    </div> -->
    <div class="row" style="height: 12rem;">
        <div class="col-5">
        <!-- <div class="col-5 border border-primary border-2">     -->

            <div class="accordion accordion-flush mt-2" id="accordionPpal">

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button bg-primary" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                            Acordion Item 01
                        </button>
                    </h2>
                    <div class="accordion-collapse collapse show" id="collapseOne" data-bs-parent="#accordionPpal">
                        <div class="accordion-body">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora optio nisi sapiente magnam voluptates excepturi, labore, enim debitis officia fugiat rem. Fugit doloremque ipsam placeat deserunt saepe iusto nemo iste!
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">

                        <button class="accordion-button bg-primary collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                            Acordion Item 02
                        </button>
                    </h2>
                    <div class="accordion-collapse collapse" id="collapseTwo" data-bs-parent="#accordionPpal">

                        <div class="accordion-body">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora optio nisi sapiente magnam voluptates excepturi, labore, enim debitis officia fugiat rem. Fugit doloremque ipsam placeat deserunt saepe iusto nemo iste!
                        </div>

                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">

                        <button class="accordion-button bg-primary collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                            Acordion Item 03
                        </button>
                    </h2>
                    <div class="accordion-collapse collapse" id="collapseThree" data-bs-parent="#accordionPpal">

                        <div class="accordion-body">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora optio nisi sapiente magnam voluptates excepturi, labore, enim debitis officia fugiat rem. Fugit doloremque ipsam placeat deserunt saepe iusto nemo iste!
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <div class="img-fluid col-7 mt-2"><img class="img-fluid img-thumbnail" src="https://images.pexels.com/photos/8853536/pexels-photo-8853536.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt=""style="height: 18rem;width: 36rem;"></div>
        <!-- <div class="img-fluid col-7 border border-success border-2"><img class="img-fluid img-thumbnail" src="https://images.pexels.com/photos/8853536/pexels-photo-8853536.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt=""style="height: 18rem;width: 36rem;"></div> -->
        <!-- <div class="col border border-warning border-2">3</div>
        <div class="col border border-success border-2">4</div> -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>       