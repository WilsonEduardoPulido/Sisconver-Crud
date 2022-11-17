<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <meta charset="UTF-8">
  <meta name="description" content="Sistema de inventario Colegio la independencia SISCONVER">
  <meta name="author" content="Grupo_2 SISCONVER">
  <meta name="copyright" content="Copyright SISCONVER 2022 ©">
  <meta name="keywords" content="HTML, Sistema de inventario">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="css/newStyle.css">
  <link rel="shortcut icon" href="assets/img/lulogo_PLumita.svg" type="image/x-icon">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&family=Inter:wght@300;500&family=Krub:ital,wght@1,200&family=Quicksand:wght@300;500;700&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Home</title>





</head>





<body>



  <header class="navbar navbar-dark sticky-top bg-light flex-md-nowrap p-0 shadow ">
    
      <div class="col-sm-4 d-flex align-items-center justify-content-center">
       
          <img src="assets/img/lulogo_PLumita.svg" alt="Bootstrap" width="90" height="90">

        
          <h2 class="text-danger p-4">SISCONVER LIBRARY SYS</h2>
      
      </div>
      <div class="col-sm-4 col-12 d-flex justify-content-center align-items-center">
      
        <button class="navbar-toggler position-absolute d-md-none collapsed bg-primary" type="button"
          data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
        <img src="assets/img/trabajando.png" alt="Profile" width="40px" height="50px" class="rounded-circle">
        <span class="d-none d-md-block dropdown-toggle ps-2">K. Anderson</span>
      </a>

      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
        <li class="dropdown-header">
          <h6>Kevin Anderson</h6>
          <span>Web Designer</span>
        </li>
     

        <li>
          <a class="dropdown-item d-flex align-items-center" href="Editarperfil.html">
            <i class="bi bi-person"></i>
            <span>My Profile</span>
          </a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li>
          <a class="dropdown-item d-flex align-items-center" href="Editarperfil.html">
            <i class="bi bi-gear"></i>
            <span>Account Settings</span>
          </a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li>
          <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
            <i class="bi bi-question-circle"></i>
            <span>Need Help?</span>
          </a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li>
          <a class="dropdown-item d-flex align-items-center" href="#">
            <i class="bi bi-box-arrow-right"></i>
            <span>Sign Out</span>
          </a>
        </li>

      </ul>
    
  
  



  </header>

  <section class=" container      ">
    <div class="col-12 "> <section class=" d-flex flex-grow-1 flex-wrap justify-content-between align-items-center  p-5">

      
    
      <div
        class=" col-4 bg-light d-flex usu_3 border rounded-4 flex-column justify-content-center align-items-center ">
        <img src="assets/img/icons8-ibooks.svg" alt="" height="50px" width="50px">
        <div class="d-flex justify-content-center align-items-center flex-column">
          <h2>Libros</h2>
          <h2>Total:{{$n}}</h2>

        </div>
      </div>
      <div
        class=" col-4 bg-light d-flex usu_4 border  rounded-4 flex-column justify-content-center align-items-center ">
        <img src="assets/img/pedir-prestado.png" alt="" height="50px" width="50px">
        <div class="d-flex justify-content-center align-items-center flex-column">
          <h2>Prestamos</h2>
           <h2>Total:{{$h}}</h2></h2>
        </div>
      </div>
      
    </section></div>
  <div class="row">
    <!-- Button trigger modal -->
    <div class="col-5">

  
<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop" >
  Agregar Libro
</button>


<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3>Agregar Libro</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form class="d-flex flex-column justify-content-center align-items-center">
          
          <div class="col-8">
            <label for="" class="form-label">Titulo</label>
            <input type="text" class="form-control" id="inputEmail4">
          </div>
          <div class="col-8">
            <label for="" class="form-label">Autor</label>
            <input type="text" class="form-control" id="inputEmail4">
          </div>
          <div class="col-8">
            <label for="" class="form-label" required pattern="^[0-9]">Cantidad</label>
            <input type="number" class="form-control" id="inputEmail4">
          </div>
        
        
          <div class="col-8">
            <label for="inputState" class="form-label">Curso</label>
            <select id="inputState" class="form-select">
              <option selected>Octavo</option>
              <option>Sexto</option>
            </select>
          
      
          </div>
    
        
         
        
        
        
          <div class="col-8">
            <label for="inputState" class="form-label">Categoria</label>
            <select id="inputState" class="form-select">
              <option selected>Naturales</option>
              <option>Matematicas</option>
            </select>
      
      
          </div>
          
         
     
      </form>
    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Guardar</button>
        <button type="button" class="btn btn-primary">Cancelar</button>
      </div>
    </div>
  </div>
</div>
</div>
    <!--
    
    <div class="col-6  "><form class="d-flex flex-column justify-content-center align-items-center">
      <h1>Agregar Libro</h1>
      <div class="col-5">
        <label for="" class="form-label">Titulo</label>
        <input type="text" class="form-control" id="inputEmail4">
      </div>
      <div class="col-5">
        <label for="" class="form-label">Autor</label>
        <input type="text" class="form-control" id="inputEmail4">
      </div>
      <div class="col-5">
        <label for="" class="form-label">Cantidad</label>
        <input type="number" class="form-control" id="inputEmail4">
      </div>
    
    
      <div class="col-5">
        <label for="inputState" class="form-label">Curso</label>
        <select id="inputState" class="form-select">
          <option selected>Octavo</option>
          <option>Sexto</option>
        </select>
      
  
      </div>

    
     
    
    
    
      <div class="col-5">
        <label for="inputState" class="form-label">Categoria</label>
        <select id="inputState" class="form-select">
          <option selected>Naturales</option>
          <option>Matematicas</option>
        </select>
  
  
      </div>
      
      <div>
        <button class="btn  btn-success">
          Agregar
        </button>
      </div>
 
  </form>

--></div>
  </div>
 
    
  </section>
  
  <main class="container  ">
   <form class="row g-3 col-12 mt-5 d-flex  justify-content-between">
      
        <div class="col-5">
          <label for="" class="form-label">Buscar</label>
          <input type="search" class="form-control" id="inputEmail4">
        </div>
       
      
      
        <div class="col-3">
          <label for="inputState" class="form-label">Curso</label>
          <select id="inputState" class="form-select">
            <option selected></option>
           
            @foreach ($curso as $i)
            <option >{{$i->Grado}}</option>
            
            @endforeach
          </select>
        
    
        </div>

      
      
      
      
      
        <div class="col-3">
          <label for="inputState" class="form-label">Categoria</label>
          <select id="inputState" class="form-select">
          @foreach ($L as $i)
            <option selected>{{$i->Categoria}}</option>
            
            @endforeach
          </select>
    
    
        </div>
        
        <div>
          <button class="btn btn-primary">
            Buscar
          </button>
        </div>
   
    </form>

    
    <table class="table table-striped col-6 mt-5">
      <thead>
        <tr>
          <th>Titulo</th>
          <th>Autor</th>
          <th>Curso</th>
          <th>Categoria</th>
          <th>Cantidad</th>
          
          <th>Editar</th>
          <th>Inactivar</th>
          <th>Prestar</th>
       
        </tr>
      </thead>
      <tbody>
      @foreach ($Libros as $libro)
        <tr>
          <td>{{$libro->Titulo}}</td>
          <td>{{$libro->Autor}}</td>
          <td>{{$libro->Curso}}</td>
          <td>{{$libro->Categoria}}</td>
          <td>{{$libro->Cantidad}}</td>
          
          
         
          <td>
            <button class="btn btn-primary">Editar</button>
          </td>
          <td>
            <button class="btn btn-danger">Inactivar</button>
          </td>
          <td>
            <button class="btn btn-warning">Prestar</button>
          </td>
        </tr>
       
    
      </tr>
      
      
         
      @endforeach
      </tbody>
    </table>
   
  </main>

  
 
  
  
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
      <div class="col-md-4 d-flex align-items-center">
        <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
          <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
        </a>
        <span class="mb-3 mb-md-0 text-muted">Copyright SISCONVER 2022 ©</span>
      </div>
  
      <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
       <a class="" href="#"><img src="assets/img/icons8-whatsapp.svg" alt=""></a>
        <li class="ms-3"><a class="text-muted" href="#"><img src="assets/img/icons8-facebook-nuevo.svg" alt=""></a></li>
        <li class="ms-3"><a class="text-muted" href="#"><img src="assets/img/icons8-phone.svg" alt=""></a></li>
      </ul>
    </footer>
  
  

  <script src="js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>


  <script src="js/modooscuro.js"></script>
  <script src="js/bootstrap.bundle.js"></script>
</body>





</html>