<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="./css/dashboard.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <title>side Bar</title>
</head>

<body>
  
  <!-- ===============sidebar-start========== -->
  <div class="sidebar" style="overflow: hidden;">
    <div class="logos">
    </div>
    <i class='bx bx-menu' id="btntog"></i>
    <div class="user-details">
      <img src="./images/Rectangle 17.svg" alt="">
      <div class="ms-2">
        <p>lorem ipsum</p>
        <p class="mail">loremipsum@gmail.com</p>
      </div>
    </div>
    <div class="sidebarlinks">
    <ul>
        <li>
          <a href="./dashboard.php"> <i class='bx bx-category-alt'></i>
            <span class="nav-links">Escritorio</span></a>
        </li>
        <li>
          <a href="./project.php"> <i class='bx bx-rectangle'></i>
            <span class="nav-links">proyecto</span></a>
        </li>
        <li>
          <a href="./inbox.php"> <i class='bx bx-envelope'></i>
            <span class="nav-links"> Correo</span></a>
        </li>
        <li>
          <a href="./contact.php"><i class='bx bx-user'></i>
            <span class="nav-links"> Contactos</span></a>
        </li>
        <li>
          <a href="./Tasks.php"><i class='bx bx-task'></i>
            <span class="nav-links">tareas</span></a>
        </li>
        <li>
          <a href="./user.php"><i class='bx bxs-user'></i>
            <span class="nav-links">usuarias</span></a>
        </li>
        <li>
          <a href="./calendar.php"><i class='bx bx-calendar'></i>
            <span class="nav-links">Calendarios</span></a>
        </li>
      </ul>
      <ul class=" pt-5">
        <li class="sidebar-logout"><i class='logouts-icons bx bx-log-out-circle'></i>
          <span class="logouts">Cerrar sesión</span>
        </li>
      </ul>
    </div>
  </div>
  </div>

  <!-- ===============sidebar-end========== -->
  <div class="main-con">

  </div>


  <script src="./javascript/index.js"></script>
  <script src="https://kit.fontawesome.com/c416a2d46a.js" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script> -->
