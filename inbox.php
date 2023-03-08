<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="./css/dashboard.css">
  <title>inbox</title>
</head>

<body>
<?php
  include("../CRM2/side-bar.php")
    ?>
  <!-- ==========navbar-start======== -->
  <div class="main-con" style="height:100vh">
    <nav class="navbar task-nav navbar-expand-lg bg-transparent">
      <div class="container-fluid">
        <a class=" ms-4 nav-heading navbar-brand" href="#">Correo</a>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        </ul>
        <form class="d-flex" role="search">
          <label for="#"><a href="#"><i class="fa-solid fa-magnifying-glass"></i></a></label>
          <input class="form-control nav-search me-3 ps-5" class=" me-4" type="text" placeholder="Buscar"
            aria-label="Search">
        </form>
        <div class="dropdown dropstart float-end">
          <button class="me-3 others-task-btn" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown"
            aria-expanded="false">
            <img class="img" src="./images/plus-icon.svg" alt="plus-icons">
          </button>
          <ul class="dropdown-menu others-dropdown">
            <li>
              <a class="dropdown-item" href="#"><i class='bx bx-task'></i> tareas</a>
            </li>
            <li>
              <a class="dropdown-item" href="#"><i class='bx bx-checkbox'></i> proyectos</a>
            </li>
            <li>
              <a class="dropdown-item" href="#"><i class='bx bx-network-chart'></i> Flujos de trabajo</a>
            </li>
            <li>
              <a class="dropdown-item" href="#"><i class='bx bx-folder'></i> carpeta</a>
            </li>
            <li>
              <a class="dropdown-item" href="#"><i class='bx bxs-user-plus'></i> invitar</a>
            </li>
          </ul>
        </div>
        <a href="#"><img class="me-2 nav-img" src="./images/Rectangle 17.svg" alt=""></a>
      </div>
    </nav>
    <!-- ==========navbar-end======== -->
    <div class="container-fluid">
      <div class="row">
        <div class="col-6">
          <div class="inbox-message">
            <div class="inbox-topbar">
              <nav class="navbar top-bar">
                <div class="container-fluid">
                  <span class="navbar-brand mb-0 h1">
                    <a class="a" href="#">entrante</a>
                    <a href="#" class="ms-2">enviada</a>
                    <a href="#" class="ms-2">archivo</a>
                  </span>
                  <div class="inbox-topbar-links">
                    <a href="#"><img src="./images/inbox-nav.svg" alt="icon"></a>
                    <a href="#"><i class='ms-2 bx bx-dots-horizontal-rounded'></i></a>
                    <a href="#"></a>
                  </div>
                </div>
              </nav>
            </div>
            <div class="inbox-date ms-5 mt-2 mb-2">Feb 8</div>
            <!-- =======message======= -->
            <div class="message">
              <p class="ms-4 pt-2">06:17 PM</p>
              <h3>
                <span>BOT CRM:</span>
                Hello and welcome!¡Hola y bienvenido! Aquí hay un proyecto para ayudarlo a comenzar.
              </h3>
              <a href="#"><button class="btn mt-1">Ir a detalles completos</button></a>
            </div>
            <div class="inbox-scroll">
              <div class="messages-scroll">
                <div class="messages">
                  <a class="cross-icon" href="#"><i class='bx bx-x'></i></a>
                  <h4>
                    Inbox te ayuda a mantenerte actualizado. Recibirás notificaciones cuando:
                  </h4>
                  <p>Tienes asignada una nueva tarea o proyecto <br />
                  You're @mentioned by someone else <br />
                  Se te da acceso a algunas nuevas <br />
                  Cuando necesitas estar al tanto</p>
                  <a class="read-more" href="#">Leer más sobre Bandeja de entrada</a>
                </div>
              </div>
              <div class="messages-scroll">
                <div class="messages">
                  <a class="cross-icon" href="#"><i class='bx bx-x'></i></a>
                  <h4>
                    Inbox te ayuda a mantenerte actualizado. Recibirás notificaciones cuando:
                  </h4>
                  <p>Tienes asignada una nueva tarea o proyecto <br />
                  You're @mentioned by someone else <br />
                  Se te da acceso a algunas nuevas <br />
                  Cuando necesitas estar al tanto</p>
                  <a class="read-more" href="#">Leer más sobre Bandeja de entrada</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="inbox-icon">
            <div class="inbox-bg"><img src="./images/inbox-bg.svg" alt=""></div>
          </div>
        </div>
      </div>
    </div>



    <!-- ===============page-end========== -->
  </div>




  <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
  <script src="./javascript/index.js"></script>
  <script src="https://kit.fontawesome.com/c416a2d46a.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
</body>

</html>