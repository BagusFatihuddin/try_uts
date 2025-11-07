{{-- MENJADI LAYOUT UTAMA ATAU TEMPLETE BERISI NAVBAR DAN FOOTER --}}

<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
   
</head>
<body>
    
  {{-- Navbar --}}
  <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">Home</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/product">Product</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/halamanDua">About</a>
          </li>
        </ul>
        

        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
    {{-- <nav>
        <a href="/home">Home</a>
        <a href="/about">About</a>
    </nav> --}}
    <main>
    @yield('content')

    </main>


      {{-- Footer --}}
  <footer class="container py-5 border-top">
    <div class="row">
      <div class="col-md-3 mb-3">
        <p class="text-muted">© 2025 Websiteku</p>
      </div>
      <div class="col-md-3 mb-3">
        <h5>Section</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
        </ul>
      </div>
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>