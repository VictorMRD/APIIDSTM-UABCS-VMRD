<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
        <style>
            body{
                background-color: (sgrb(0.8195, 0.8196, 0.8111));
            }
        </style>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body>
        <div class="main">
            <div class="container-fluid">    
                <div class="row">
                    <div class="col-2 bg-danger p-0">
                        <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark sticky-top h-100">
                            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                              <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
                              <span class="fs-4">Sidebar</span>
                            </a>
                            <hr>
                            <ul class="nav nav-pills flex-column mb-auto">
                              <li class="nav-item">
                                <a href="#" class="nav-link active" aria-current="page">
                                  <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
                                  Home
                                </a>
                              </li>
                              <li>
                                <a href="#" class="nav-link text-white">
                                  <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
                                  Dashboard
                                </a>
                              </li>
                              <li>
                                <a href="#" class="nav-link text-white">
                                  <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
                                  Orders
                                </a>
                              </li>
                              <li>
                                <a href="#" class="nav-link text-white">
                                  <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
                                  Products
                                </a>
                              </li>
                              <li>
                                <a href="#" class="nav-link text-white">
                                  <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
                                  Customers
                                </a>
                              </li>
                            </ul>
                            <hr>
                            <div class="dropdown">
                              <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                                <strong>mdo</strong>
                              </a>
                              <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                                <li><a class="dropdown-item" href="#">New project...</a></li>
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Sign out</a></li>
                              </ul>
                            </div>
                          </div>

                    </div>
                    <div class="col-10 bg-info p-0">
                        <nav class="navbar navbar-expand-lg bg-white navbar-expand-lg sticky-top">
                            <div class="container-fluid">
                              <a class="navbar-brand" href="#">Navbar</a>
                              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                              </button>
                              <!-- ponerle estilos y contenido a esta shit basandonos en algun ejemplo  -->
                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>