<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <script src="js/bootstrap.min.js"></script>
    <!-- FontAwesome -->
    <link rel="stylesheet" href="fontawesome/css/fontawesome.min.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />

    <title>Tampilan Data Buku</title>
  </head>
  <body>

    <!-- Navbar -->
    <nav class="navbar bg-dark" data-bs-theme="dark">
      <div class="container-fluid">
        <a href="index.php"class="navbar-brand">Pemrograman Web - UTS</a>
        <div class="d-flex flex-row-reverse">
            <div class="p-2"></div>
                <form action="index.php" method="GET" class="input-group" role="search">
                    <input type="search" name="search" placeholder="Pencarian..." aria-describedby="button-addon1" class="form-control border-0 bg-white rounded-pill">
                <button id="button-addon1" type="submit" class="btn btn-link text-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                    </svg>
                </button>
                </form>
            </div>
        </div>
      </div>
    </nav>
  </body>
