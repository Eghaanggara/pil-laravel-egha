<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Halaman Tambah Mahasiswa</title>
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

    .form-control {
      margin-bottom: 10px;
    }

    .btn-primary {
      background-color: #007bff;
      border-color: #007bff;
    }

    .btn-secondary {
      background-color: #6c757d;
      border-color: #6c757d;
    }

    .btn-primary,
    .btn-secondary {
      width: 100%;
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

      .col-sm-4,
      .col-sm-8 {
        margin-bottom: 20px;
      }

      .row mt-4 {
        margin-top: 20px;
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
    <h1>Halaman Tambah Mahasiswa</h1>

    <div class="row">
      <div class="col-sm-12">
        <h4>Form Mahasiswa</h4>

        @if ($errors->any())
            <div class="pt-3">
              <div class="alert alert-danger">
                <ul>
                  @foreach ($errors->all() as $item)
                      <li>{{ $item }}</li>
                  @endforeach
                </ul>
              </div>
            </div>
        @endif

        <form action="/mahasiswa" method="POST">
          @csrf
          <div class="row">
            <div class="col-sm-4">
              <label for="npm" class="form-label">NPM</label>
              <input type="number" name="npm" class="form-control" placeholder="Input NPM" value="{{ Session::get('npm') }}">
            </div>
            <div class="col-sm-4">
              <label for="nama_mahasiswa" class="form-label">Nama Mahasiswa</label>
              <input type="text" name="nama_mahasiswa" class="form-control" placeholder="Input Nama Mahasiswa" value="{{ Session::get('nama_mahasiswa') }}">
            </div>
            <div class="col-sm-4">
              <label for="jk" class="form-label">Jenis Kelamin</label>
              <select name="jk" id="jk" class="form-select">
                <option value="L" @if(Session::get('jk') == 'L') selected @endif>L</option>
                <option value="P" @if(Session::get('jk') == 'P') selected @endif>P</option>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-8">
              <div class="row">
                <div class="col-sm-5">
                  <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                  <input type="date" name="tgl_lahir" class="form-control" value="{{ Session::get('tgl_lahir') }}">
                </div>
                <div class="col-sm-7">
                  <label for="alamat" class="form-label">Alamat</label>
                  <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Input alamat" value="{{ Session::get('alamat') }}">
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="row mt-4">
                <div class="col-sm-6">
                  <button class="btn btn-primary" type="submit">Simpan</button>
                 </div>
                 <div class="col-sm-6">
                   <a href="/mahasiswa" class="btn btn-secondary">Kembali</a>
                 </div>
              </div>
            </div>
          </div>
          
        </form>
      </div>
    </div>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
