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
  <title>Contacts</title>
</head>

<body>

  <?php
  include("../CRM2/side-bar.php")
    ?>
  <!-- ==========navbar-start======== -->
  <div class="main-con" style="height:100vh">
    <nav class="navbar navbar-expand-lg bg-transparent">
      <div class="container-fluid">
        <a class=" ms-4 nav-heading navbar-brand" href="#">Contactos</a>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        </ul>
        <form class="d-flex" role="search">
          <label for="#"><a href="#"><i class="fa-solid fa-magnifying-glass"></i></a></label>
          <input class="form-control me-4 ps-5" class=" me-4" type="text" placeholder="Buscar" aria-label="Search">
        </form>
        <a href="#"><img class="me-2 nav-img" src="./images/Rectangle 17.svg" alt=""></a>
      </div>
    </nav>
    <!-- ==========navbar-end======== -->
    <!-- ===============headings-start========== -->

    <div class="container-fluid">
      <div class="row">
        <div class="col-9 col-sm-7">
          <div class="selecter">
            <span>compañía:</span>
            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
              <option selected>una</option>
              <option value="1">toda</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>
        </div>
        <div class="col-3 col-sm-5">
          <div class="contact-btn">
            <button class="float-end" type="d">Agregar contacto</button>
          </div>
        </div>
      </div>
    </div>

    <!-- ===============headings-End========== -->
    <!-- ===============table-start========== -->
    <div class="table mt-3 pe-3 ps-3">
      <table class="table" class="table table-light table-striped">
        <thead>
          <tr>
            <th scope="col"><input type="checkbox" class="checkbox" disabled></th>
            <th scope="col">Nombre</th>
            <th scope="col">correo electrónico</th>
            <th scope="col">Nombre de empresa</th>
            <th scope="col">role</th>
            <th scope="col">pronóstico</th>
            <th scope="col">Actividad reciente</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">
              <form><input type="checkbox" class="checkbox" name="
          " id=""></form>
            </th>
            <td class="td"><img class="table-img" src="./images/table-img.svg" alt=""> <span>Lorem, ipsum</span></td>
            <td>Loremipsum@gmail.com</td>
            <td>Apple</td>
            <td>CEO</td>
            <td>50%</td>
            <td>hace 1 minuto</td>
          </tr>
        </tbody>
      </table>
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