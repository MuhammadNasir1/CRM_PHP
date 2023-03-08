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
  <title>Tasks</title>
</head>

<body>
<?php
  include("../CRM2/side-bar.php")
    ?>
  <!-- ==========navbar-start======== -->
  <div class="main-con" style="height:100vh">
    <nav class="navbar task-nav navbar-expand-lg bg-transparent">
      <div class="container-fluid">
        <a class=" ms-4 nav-heading navbar-brand" href="#">Mis tareas</a>
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
    <!-- ===============headings-start========== -->

    <div class="container-fluid">
      <div class="row">
        <div class="task-add-btn mt-3 ">
          <button type="button" class=" float-end">Agregar tarea </button>
        </div>
      </div>
    </div>
    <!-- =========== -->
    <div class="container-fluid">
      <div class="task-table mt-4">
        <div class="task-heading">
          <span class="task-active">
            <img class="icon" src="./images/task-active-icon.svg" alt="icon">
            única tarea activa
          </span>
          <a href="#" class="ms-3">
            <i class='bx bx-sort'></i>
            fecha
          </a>
        </div>
        <div class="task-heading">
          <a href="#" class="add-item">
            <i class='bx bx-plus'></i>
            artículo
          </a>
        </div>
        <div class="daily-tasks">
          <div class="tasks-table">
            <p>hoy(03)</p>
          </div>
          <div class="daily-task">
            <span>
              <img src="./images/Rectangle 17.svg" alt="image">
              <span class="ms-1">Tarea 1</span>
            </span>
            <p class="float-end pt-1 ">Feb 16
              <span class="ms-3">En curso</span>
            </p>
          </div>
          <div class="daily-task">
            <span>
              <img src="./images/Rectangle 17.svg" alt="image">
              <span class="ms-1">Tarea 2</span>
            </span>
            <p class="float-end pt-1 ">Feb 16
              <span class="ms-3">En curso</span>
            </p>
          </div>
          <div class="daily-task">
            <span>
              <img src="./images/Rectangle 17.svg" alt="image">
              <span class="ms-1">Tarea 3</span>
            </span>
            <p class="float-end pt-1 ">Feb 16
              <span class="ms-3">En curso</span>
            </p>
          </div>
        </div>
      </div>
      <!-- ================= -->
    </div>
    <!-- <div class="main-con"> -->
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <script src="./javascript/index.js"></script>
    <script src="https://kit.fontawesome.com/c416a2d46a.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"></script>
</body>

</html>