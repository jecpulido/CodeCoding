<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="resource/css/estilos.css">
    <link rel="stylesheet" href="resource/css/bootstrap.min.css">
    <script type="text/javascript" src="resource/js/jquery-latest.js"></script>
    <script type="text/javascript" src="resource/js/bootstrap.js"></script>
    <title>Header</title>
  </head>
  <body class="menu">
     <div class="container"> 
       <header>
         <nav class="navbar navbar-default navbar-fixed-top navbar-inverse" >
           <div class="container-fluid headerColor">           
             <div class="navbar-header">
               <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
                 <span class="sr-only">Menu</span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
               </button>
               <a class="navbar-brand" href="#">{CodeCoding}</a>
             </div>
             <div class="collapse navbar-collapse" id="navbar">
               <ul class="nav navbar-nav">
                  <li><a href="https://www.w3schools.com/">Cursos</a></li>
                  <!-- <li><a href="">item #2</a></li> -->
                  <li><a href="">item #3</a></li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Dropdown <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a href="a">item #1</a></li>
                      <li><a href="a">item #2</a></li>
                      <li class="divider"></li>
                      <li><a href="a">item #4</a></li>
                    </ul>
                  </li>
               </ul>
               <form action="" class="navbar-form navbar-left" role="search">
                 <input type="text" name="" id="" class="form-control" placeholder="Buscar">
                 <!-- <input type="submit" value="Buscar" class="form-control"> -->
               </form>
               <ul class="nav navbar-nav navbar-right">                 
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"> Usuario <span class="glyphicon glyphicon-user "></span>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a href="a">item #1</a></li>
                      <li><a href="a">item #2</a></li>
                      <li class="divider"></li>
                      <li><a href="a">item #4</a></li>
                    </ul>
                  </li>
               </ul>
             </div>

            

           </div>
         </nav>
       </header>

     </div>  

  </body>
</html>


