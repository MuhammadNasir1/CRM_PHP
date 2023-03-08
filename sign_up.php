<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/style.css">
  <title>Sign Up</title>
</head>

<body>
  <!-- ========logo============ -->
  <div class="container-fluid">
    <div class="row">
      <!-- ==========input-section==== -->
      <div class="col-lg-6">
        <div class="logo">
          <h3>CRM</h3>
        </div>
        <div class="signup-input">
          <div class="sign-txt signup-txt">Registro de usuario
            <h4 class="signup-heading">inscribirse</h4>
            <h3>Si ya tienes una cuenta regístrate</h3>
            <h3>Puedes<a href="./sign_in.php">Ingresar Aquí !</a></h3>
          </div>
          <!-- ==========form-start=========== -->
          <div class="form-section">
            <div class="form">
              <form>
                <div class="mb-3">
                  <img class="input-icons" src="./images/email-icons.svg" alt="Email">
                  <label for="email" class="form-label">correo electrónico</label>
                  <input type="email" class="form-control" id="email" aria-describedby="emailHelp"
                    placeholder="ingrese su dirección de correo electrónico">
                </div>
                <div class="mb-3">
                  <img class="input-icons" src="./images/user-icon.svg" alt="Email">
                  <label for="username" class="form-label">Usuario</label>
                  <input type="text" class="form-control" id="username" aria-describedby="emailHelp"
                    placeholder="Ingrese su usuario">
                </div>
                <div class="mb-3">
                  <img class="input-icons" src="./images/passsword-icons.svg" alt="Pass">
                  <label for="password" class="form-label">contraseña</label>
                  <input type="password" id="pass" class="form-control" id="exampleInputPassword1"
                    placeholder="Ingrese su contraseña">
                  <div onclick="showpassword()">
                    <a class="pass-icon" id="pass_hide_icon" href="#"><i class="fa-regular fa-eye-slash"></i></a>
                    <a style="display: none;"  class="pass-icon" id="pass_show_icon" href="#"><i class="fa-regular fa-eye"></i></a>
                  </div>
                </div>
                <div class="mb-4">
                  <img class="input-icons" src="./images/passsword-icons.svg" alt="Pass">
                  <label for="password" class="form-label">confirmar Contraseña</label>
                  <input type="password" id="pass" class="form-control" id="exampleInputPassword1"
                    placeholder="Ingrese a conformar su contraseña ">
                  <div onclick="showpassword()">
                    <a class="pass-icon" id="pass_hide_icon" href="#"><i class="fa-regular fa-eye-slash"></i></a>
                    <a style="display: none;"  class="pass-icon" id="pass_show_icon" href="#"><i class="fa-regular fa-eye"></i></a>
                  </div>
                </div>
                <button type="submit" class=" mt-3 btn btn-primary">registro</button>
              </form>
            </div>
          </div>
          <!-- ==========form-End=========== -->
        </div>
      </div>
      <!-- ==========input-section-End==== -->
   
      <?php include("../CRM2/Infographic.php") ?>
        
    </div>
  </div>
  <script src="./javascript/index.js"></script>
  <script src="https://kit.fontawesome.com/c416a2d46a.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
</body>

</html>