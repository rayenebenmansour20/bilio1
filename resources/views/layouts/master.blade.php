<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="css/style.css">
  <title>Dashboard</title>
</head>
<body>
<div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-dark" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-5 primary-text fs-4 fw-bold text-uppercase border-bottom"><i
                    class="mx-auto"></i>Biblio</div>
            <div class="list-group list-group-flush my-3">
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text active"><i
                        class="fas fa-book me-2"></i>Livres</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-user-group me-2"></i>Abonnées</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-circle-check me-2"></i>Emprunts</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i
                        class="fas fa-power-off me-2"></i>Logout</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-bars second-text fs-2 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Dashboard</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                          <a href="#" class="nav-link fw-bold">Home</a>
                        </li>
                        <li class="nav-item">
                          <a href="#" class="nav-link fw-bold">Contact</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user me-2"></i>John Doe
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li><a class="dropdown-item" href="#">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

            
  <!-- cards 
  <section class="p-5">
    <div class="row">
      <div class="col-sm">
        <div class="card">
          <img src="https://images-na.ssl-images-amazon.com/images/I/51yMBnBopTL._AC._SR360,460.jpg" class="card-img-top" alt="Je m'appelle Kylian">
          <div class="card-body">
            <h3>Je m'appele Kylian</h3>
            <h5>Faro</h5>
            <p>BD - Enfants</p>
          </div>
        </div>
      </div>
      <div class="col-sm">
        <div class="card">
          <img src="https://images-na.ssl-images-amazon.com/images/I/41OdE0k7WFL._SX343_BO1,204,203,200_.jpg" class="card-img-top" alt="Je m'appelle Kylian">
          <div class="card-body">
            <h3>Après</h3>
            <h5>Stephen King</h5>
            <p>Romans</p>
          </div>
        </div>
      </div>
      <div class="col-sm">
        <div class="card">
          <img src="https://images-na.ssl-images-amazon.com/images/I/51yMBnBopTL._AC._SR360,460.jpg" class="card-img-top" alt="Je m'appelle Kylian">
          <div class="card-body">
            <h3>Je m'appele Kylian</h3>
            <p>BD - Enfants</p>
          </div>
        </div>
      </div>
      <div class="col-sm">
        <div class="card">
          <img src="https://images-na.ssl-images-amazon.com/images/I/51yMBnBopTL._AC._SR360,460.jpg" class="card-img-top" alt="Je m'appelle Kylian">
          <div class="card-body">
            <h3>Je m'appele Kylian</h3>
            <p>BD - Enfants</p>
          </div>
        </div>
      </div>
  </section>
-->
  @yield('contentA')   
            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
    </div>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>
</body>
</html>