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
  <title>user</title>
</head>

<body>
<?php
  include("../CRM2/side-bar.php")
    ?>
  <!-- ==========navbar-start======== -->
  <div class="main-con"  style="height:100vh">
    <nav class="navbar nav navbar-expand-lg bg-transparent">
      <div class="container-fluid">
        <a class=" ms-4 nav-heading navbar-brand" href="#">Usuarios</a>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        </ul>
        <form class="d-flex" role="search">
          <label for="#"><a href="#"><i class="fa-solid fa-magnifying-glass"></i></a></label>
          <input class="form-control me-4 ps-5" class=" me-4" type="text" placeholder="Buscar"
            aria-label="Search">
        </form>
        <a href="#"><img class="me-2 nav-img" src="./images/Rectangle 17.svg" alt=""></a>
        <!-- </div> -->
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
              <option selected>uno</option>
              <option value="1">TODO</option>
              <option value="2">dos</option>
              <option value="3">tres</option>
            </select>
          </div>
        </div>
        <div class="col-3 col-sm-5">
          <div class="contact-btn">
            <!-- <button class="float-end"type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Add Contact</button> -->
            <button type="button" class=" float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">Agregar colaboradores</button>
          </div>
        </div>
      </div>
    </div>

    <!-- ===============headings-End========== -->
    <!-- ===============table-start========== -->
    <div class="container-fluid">
      <div class="table mt-3 pe-3 ps-3">
        <table class="table user-table " class="table table-light table-striped">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">nombre</th>
              <th scope="col">Correo electrónico</th>
              <th scope="col">Teléfono</th>
              <th scope="col">Role</th>
              <th scope="col">Acción</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td class="td"><img class="table-img" src="./images/table-img.svg" alt=""> <span>Lorem, ipsum</span></td>
              <td>Loremipsum@gmail.com</td>
              <td>12341234</td>
              <td>Super administradora</td>
              <td> <a href="#"><i class='bx bxs-pencil '></i></a>
                <a href="#"><i class='bx bx-x ms-2'></i></a>
                <a href="#"><i class='bx bxs-show ms-2'></i></a>
                <a href=""><i class='bx bx-file-blank ms-2'></i></a>
              </td>
            <tr>
              <th scope="row">2</th>
              <td class="td"><img class="table-img" src="./images/table-img.svg" alt=""> <span>Lorem, ipsum</span></td>
              <td>Loremipsum@gmail.com</td>
              <td>12341234</td>
              <td>supervisora</td>
              <td> <a href="#"><i class='bx bxs-pencil '></i></a>
                <a href="#"><i class='bx bx-x ms-2'></i></a>
                <a href="#"><i class='bx bxs-show ms-2'></i></a>
                <a href=""><i class='bx bx-file-blank ms-2'></i></a>
              </td>
            <tr>
              <th scope="row">3</th>
              <td class="td"><img class="table-img" src="./images/table-img.svg" alt=""> <span>Lorem, ipsum</span></td>
              <td>Loremipsum@gmail.com</td>
              <td>12341234</td>
              <td>ayudante 1</td>
              <td> <a href="#"><i class='bx bxs-pencil '></i></a>
                <a href="#"><i class='bx bx-x ms-2'></i></a>
                <a href="#"><i class='bx bxs-show ms-2'></i></a>
                <a href=""><i class='bx bx-file-blank ms-2'></i></a>
              </td>
            <tr>
              <th scope="row">4</th>
              <td class="td"><img class="table-img" src="./images/table-img.svg" alt=""> <span>Lorem, ipsum</span></td>
              <td>Loremipsum@gmail.com</td>
              <td>12341234</td>
              <td>auxiliar</td>
              <td> <a href="#"><i class='bx bxs-pencil '></i></a>
                <a href="#"><i class='bx bx-x ms-2'></i></a>
                <a href="#"><i class='bx bxs-show ms-2'></i></a>
                <a href=""><i class='bx bx-file-blank ms-2'></i></a>
              </td>
            <tr>
              <th scope="row">5</th>
              <td class="td"><img class="table-img" src="./images/table-img.svg" alt=""> <span>Lorem, ipsum</span></td>
              <td>Loremipsum@gmail.com</td>
              <td>12341234</td>
              <td>auxiliar 3</td>
              <td> <a href="#"><i class='bx bxs-pencil '></i></a>
                <a href="#"><i class='bx bx-x ms-2'></i></a>
                <a href="#"><i class='bx bxs-show ms-2'></i></a>
                <a href=""><i class='bx bx-file-blank ms-2'></i></a>
              </td>
            <tr>
          </tbody>
        </table>
      </div>
    </div>
    <!-- ===============table-End========== -->
  </div>



  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar usuario</h1>
          <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <!-- =======form-start============ -->
          <div class="user-form" data-aos="zoom-in">
            <form action="#">
              <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                  <label for="#">Nombre de pila:
                    <input class="form-control" type="text" name="" id="" placeholder="Nombre de pila:">
                  </label>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                  <label for="#">Apellido:
                    <input class="form-control" type="text" name="" id="" placeholder="Apellido:">
                  </label>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                  <label for="#">correo electrónico:
                    <input class="form-control" type="correo electrónico" name="" id="" placeholder="correo electrónico:">
                  </label>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 ">
                  <label for="#">Telefono no:
                    <input class="form-control" type="text" name="" id="" placeholder="Telefono no:">
                  </label>
                </div>
              </div>
              <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 ">
                  <label for="#">Roles del usuario
                    <select class="form-select" aria-label="Default select example">
                      <option selected>Super administradora</option>
                      <option value="1">supervisor</option>
                      <option value="2">ayudante</option>
                      <option value="3">auxiliar</option>
                    </select>
                  </label>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 ">
                  <label for="#">Estatus de usuario
                    <select class="form-select" aria-label="Default select example">
                      <option selected>activo</option>
                      <option value="2">Desactivado</option>
                      <option value="3">Cerrar</option>
                    </select>
                  </label>
                </div>
              </div>
              <div id="emailHelp" class="form-text">la contraseña se enviará al correo electrónico del usuario</div>
          </div>
          <div class="form-btn mt-4">
            <button type="submit" class=" sumbit-btn">Sumito</button>
          </div>
          </form>
        </div>
      </div>
      <!-- =======form-end============== -->
    </div>
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