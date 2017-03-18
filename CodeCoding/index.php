<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no,initial-scale=1.0, maxium-scale=1.0, minimum-scale=1.0 ">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- <link rel="stylesheet" href="/resource/css/bootstrap.min.css"> -->
  <title>Document</title>
</head>
<body>
  <header>
    <?php include("header.php") ?>   
  </header>   
    <div class="jumbotron">
      <div class="container">  
        <div class="row">
          
          <div class="col-md-7">
            <h1>{CodeCoding}</h1>
            <p>Da el primer paso para aprender lo que te apasiona, aqui encontraras las bases para desarrollar las aplicaciones que desees en las plataformas que prefieras .</p>          
          </div>
          <div class="col-md-5">
            <h2>Registrate</h2>
            <form class="form-horizontal" action="" method="post">
              <fieldset >
                <div class="form-group ">
                  <label for="usuario" class="sr-only hidden control-label col-md-2">Usuario</label>
                  <div class="col-md-10">
                    <input type="text" class="form-control" id="usuario" placeholder="Usuario">
                  </div>
                </div>

                <div class="form-group ">
                  <label for="correo" class="sr-only hidden control-label col-md-2">Correo</label>
                  <div class="col-md-10">
                    <input type="text" class="form-control" id="correo" placeholder="Correo">
                  </div>
                </div>

                <div class="form-group ">
                  <label for="pass" class="sr-only hidden control-label col-md-2">Contraseña</label>
                  <div class="col-md-10">
                    <input type="password" class="form-control" id="pass" placeholder="Contraseña">
                  </div>
                </div>

                <div class="form-group ">
                  <label for="Cpass" class="sr-only hidden control-label col-md-2">Confirmar contraseña</label>
                  <div class="col-md-10">
                    <input type="password" class="form-control" id="Cpass" placeholder="Confirmar contraseña">
                  </div>
                </div>

                <div class="form-group">
                <div class="col-md-2 ">
                  <button type="button" class="btn btn-primary">Enviar</button>
                </div>
              </div>

              </fieldset>
            </form>
          </div>
        </div>      
      </div>
    </div>
    


    
  <div class="container-fluid">

    <section class="main-row">
      <div class="col-md-5">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
    </section>
  </div>
  <footer class="">
    <div style="">
      <?php
      include("footer.php") ?>
    </div>
  </footer>
</body>
</html>
