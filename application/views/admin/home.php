<?php $this->load->view('admin/header') ?>
<?php $this->load->view('admin/navbar') ?>
<main role="main" class="container">
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="<?php echo base_url('assets/img/1.jpg') ?>" alt="First slide" style="max-height: 500px;min-height: 500px;">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo base_url('assets/img/2.jpg') ?>" alt="Second slide" style="max-height: 500px;min-height: 500px;">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo base_url('assets/img/3.jpg') ?>" alt="Third slide" style="max-height: 500px;min-height: 500px;">
    </div>
    <style type="">
	.judul-halaman{
		position: absolute;
		z-index: 1000;
		top:150px;
		width: 100%;
		text-align: center;
		font-size: 25pt;
		color: white;
	}
	.background-abu-abu{
		background-color: #000000;
		height: 50px;
		opacity: 0.8;
	}
</style>
<div class="judul-halaman background-abu-abu">
</div>
<div class="judul-halaman">
	Selamat Datang
</div>

  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    </main>
<?php $this->load->view('admin/footer') ?>