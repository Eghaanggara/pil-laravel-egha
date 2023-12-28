<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Mahasiswa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <style>
    body {
      background: linear-gradient(to right, #2980B9, #6DD5FA);
      color: #fff;
    }
    .navbar {
      background-color: #3498db;
    }
    .navbar-brand {
      color: #fff;
      font-weight: bold;
    }
    .navbar-toggler-icon {
      background-color: #fff;
    }
    .navbar-nav .nav-link {
      color: #fff;
    }
    .navbar-nav .nav-link:hover {
      color: #f8f9fa;
    }
    .form-control {
      background-color: #2c3e50;
      color: #ecf0f1;
    }
    .btn-outline-success {
      color: #28a745;
      border-color: #28a745;
    }
    .btn-outline-success:hover {
      color: #fff;
      background-color: #28a745;
      border-color: #28a745;
    }
    .btn-info {
      color: #fff;
      background-color: #17a2b8;
      border-color: #17a2b8;
    }
    .btn-info:hover {
      color: #fff;
      background-color: #138496;
      border-color: #117a8b;
    }
    .table {
      background-color: #2c3e50;
      color: #ecf0f1;
    }
    .table th, .table td {
      border-color: #ecf0f1;
    }
  </style>
</head>
<body>

  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">Laravel</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/mahasiswa">Mahasiswa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/mahasiswa/profile">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/about">About</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>

  <div class="container mt-5">
    <h1 class="display-4">Mahasiswa</h1>

    <div class="row">
      <div class="col-sm-6">
        <h4 class="display-6">Tabel Mahasiswa</h4>
      </div>
      <div class="col-sm-6" style="text-align: right">
        <a href="/mahasiswa/create" class="btn btn-info btn-sm">Tambah Mahasiswa</a>        
      </div>
    </div>

    <div class="row">
      <div class="col-sm-12">
        <table class="table table-sm table-hover table-striped table-bordered text-center">
          <thead>
            <tr>
              <th>NPM</th>
              <th>Nama Mahasiswa</th>
              <th>Jenis Kelamin</th>
              <th colspan="2">TTL</th>
            </tr>
          </thead>
          <tbody>
            <!-- Isi tabel mahasiswa disini -->
            <tr>
              <td>2109020190</td>
              <td>Egha anggara arihta Sitepu</td>
              <td>Laki - laki</td>
              <td>Medan - 01 - November -2002</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
