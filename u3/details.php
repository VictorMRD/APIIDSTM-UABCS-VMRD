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
                        <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark sticky-top vh-100">
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
                        <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
                            <div class="container-fluid">
                              <a class="navbar-brand" href="#">Navbar</a>
                              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                              </button>
                              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                  <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" href="#">Link</a>
                                  </li>
                                  <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                      Dropdown
                                    </a>
                                    <ul class="dropdown-menu">
                                      <li><a class="dropdown-item" href="#">Action</a></li>
                                      <li><a class="dropdown-item" href="#">Another action</a></li>
                                      <li><hr class="dropdown-divider"></li>
                                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                                  </li>
                                </ul>
                                <form class="d-flex" role="search">
                                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                  <button class="btn btn-outline-success" type="submit">Search</button>
                                </form>
                              </div>
                            </div>
                          </nav>
                          <div class="column container-fluid">
                            <div class="row p-4">
                              <div class="border p-2 bg-white rounded-3 m-bottom-2 mb-4">
                                <h3 class="border-bottom border-dark p-1" style="background-color: lightgray">
                                  Featured
                                </h3>
                                <div class="container-fluid row">
                                  <div id="carouselExampleCaptions" class="carousel slide column col-5">
                                    <div class="carousel-indicators">
                                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                    </div>
                                    <div class="carousel-inner">
                                      <div class="carousel-item active">
                                        <img src="https://ui-avatars.com/api/?name=Victor+Rodriguez" class="d-block w-100" alt="...">
                                        <div class="carousel-caption d-none d-md-block">
                                          <h5>First slide label</h5>
                                          <p>Some representative placeholder content for the first slide.</p>
                                        </div>
                                      </div>
                                      <div class="carousel-item">
                                        <img src="https://ui-avatars.com/api/?name=Queila+Yarib" class="d-block w-100" alt="...">
                                        <div class="carousel-caption d-none d-md-block">
                                          <h5>Second slide label</h5>
                                          <p>Some representative placeholder content for the second slide.</p>
                                        </div>
                                      </div>
                                      <div class="carousel-item">
                                        <img src="https://ui-avatars.com/api/?name=Jorge+Mayer" class="d-block w-100" alt="...">
                                        <div class="carousel-caption d-none d-md-block">
                                          <h5>Third slide label</h5>
                                          <p>Some representative placeholder content for the third slide.</p>
                                        </div>
                                      </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                      <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                      <span class="visually-hidden">Next</span>
                                    </button>
                                  </div>
                                  <div class="column col-7">
                                    <h3>Special Title treatment</h3>
                                    <p>Here we will add a future description talking about the product itself</p>
                                    <h3>$100,000</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut 
                                      labore et dolore magna aliqua. Ac felis donec et odio pellentesque diam. Quisque egestas diam in
                                       arcu cursus euismod. Purus gravida quis blandit turpis cursus in hac habitasse. Augue interdum 
                                       velit euismod in pellentesque massa placerat. Libero id faucibus nisl tincidunt. Tristique null
                                       a aliquet enim tortor at auctor urna nunc id. Dignissim suspendisse in est ante in nibh mauris 
                                       cursus mattis. Varius sit amet mattis vulputate enim nulla aliquet porttitor lacus. Nibh venena
                                       tis cras sed felis eget velit aliquet.</p>
                                       <button class="btn btn-primary">Go To Somewhere</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="container-fluid p-0 bg-light rounded-4 overflow-hidden">
                                <div>
                                <table class="table">
                                  <thead>
                                    <tr>
                                      <th scope="col">#</th>
                                      <th scope="col">First</th>
                                      <th scope="col">Last</th>
                                      <th scope="col">Handle</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <th scope="row">1</th>
                                      <td>Mark</td>
                                      <td>Otto</td>
                                      <td>@mdo</td>
                                    </tr>
                                    <tr>
                                      <th scope="row">2</th>
                                      <td>Jacob</td>
                                      <td>Thornton</td>
                                      <td>@fat</td>
                                    </tr>
                                    <tr>
                                      <th scope="row">3</th>
                                      <td colspan="2">Larry the Bird</td>
                                      <td>@twitter</td>
                                    </tr>
                                  </tbody>
                                </table>
                                </div>
                              </div>
                          </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>