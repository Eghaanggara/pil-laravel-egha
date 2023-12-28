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
      background-color: #f8f9fa;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .navbar {
      background-color: #343a40;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .navbar-brand {
      color: #ffffff;
      font-weight: bold;
      font-size: 24px;
    }

    .navbar-toggler-icon {
      background-color: #ffffff;
    }

    .navbar-nav .nav-link {
      color: #ffffff;
    }

    .navbar-nav .nav-link:hover {
      color: #f8f9fa;
    }

    h1 {
      color: #343a40;
      margin-top: 20px;
    }

    .btn-info {
      background-color: #17a2b8;
      border-color: #17a2b8;
    }

    .table {
      margin-top: 20px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      border-radius: 8px;
      overflow: hidden;
    }

    .table thead th {
      background-color: #343a40;
      color: #ffffff;
    }

    .table tbody tr:nth-child(odd) {
      background-color: #ffffff;
    }

    .table tbody tr:hover {
      background-color: #f8f9fa;
    }

    .alert {
      background-color: #28a745;
      color: #ffffff;
      animation: fadeInUp 0.5s ease-out;
    }

    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @media (max-width: 576px) {
      .navbar-brand {
        margin-right: 0;
      }

      .navbar-toggler-icon {
        background-color: #ffffff;
      }

      .navbar-collapse {
        margin-top: 10px;
      }

      .container {
        margin-top: 20px;
      }

      .col-sm-6,
      .col-sm-12 {
        margin-bottom: 20px;
      }

      footer {
      position: absolute;
      bottom: 0;
      width: 100%;
      background-color: #343a40;
      color: #ffffff;
      text-align: center;
      padding: 1rem;
    }
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
            <a class="nav-link" href="/profile">Profile</a>
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

  <div class="container">
    <h1>Ini adalah halaman Mahasiswa</h1>

    <div class="row">
      <div class="col-sm-6">
        <h4 style="margin-bottom: 20px;">Tabel Mahasiswa</h4>
      </div>
      <div class="col-sm-6" style="text-align: right">
        <a href="/mahasiswa/create" class="btn btn-info btn-sm">Tambah Mahasiswa</a>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-12">
        @if (Session::has('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Successfully</strong> {{ Session::get('success') }}.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif
      </div>
    </div>

    <div class="row">
      <div class="col-sm-12">
        <div class="table-responsive">
          <table class="table table-sm table-hover table-striped table-bordered text-center">
            <thead>
              <tr>
                <th>No</th>
                <th>NPM</th>
                <th>Nama Mahasiswa</th>
                <th>Jenis Kelamin</th>
                <th>Tanggal Lahir</th>
                <th>Alamat</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($mahasiswa as $m)
                <tr>
                  <td>{{ $no++ }}</td>
                  <td>{{ $m->npm }}</td>
                  <td>{{ $m->nama_mahasiswa }}</td>
                  <td>{{ $m->jk }}</td>
                  <td>{{ $m->tgl_lahir }}</td>
                  <td>{{ $m->alamat }}</td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <footer class="bg-dark text-light text-center py-3">
    <div class="container">
      <p>@eghaaas 2023 PIL-Laravel &copy;</p>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
