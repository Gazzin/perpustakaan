<nav class="navbar navbar-expand-md fixed-top navbar-dark bg-dark">
      <a class="navbar-brand" href="#">Perpustakaan</a>
      <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"></a>
          </li>
          
        </ul>
        <ul class="navbar-nav ml-0">
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo base_url('index.php/Login/logout') ?>">Logout</a>
          </li>
          
        </ul>
      </div>
    </nav>

    <div class="nav-scroller bg-white box-shadow">
      <nav class="nav nav-underline">
        <a class="nav-link active" href="#">Dashboard</a>
        <a class="nav-link" href="<?php echo base_url('index.php/Pengguna') ?>">Pengguna</a>
        <a class="nav-link" href="<?php echo base_url('index.php/Buku') ?>">Buku</a>
        <a class="nav-link" href="<?php echo base_url('index.php/Transaksi') ?>">Transaksi</a>
        <a class="nav-link" href="<?php echo base_url('index.php/Transaksi/laporan') ?>">Laporan Transaksi</a>
      </nav>
    </div>

    