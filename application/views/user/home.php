<?php $this->load->view('user/header') ?>

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4">
        <?php if ($this->input->post('search') == null): ?>
          Pencarian Buku
          <?php else: ?>
            Hasil Pencarian "<?php echo $this->input->post('search') ?>"
        <?php endif ?>
      </h1>
      <p class="lead">Pencarian Buku berdasarkan judul, penerbit, dan abstrak</p>
      
      <?php echo form_open(""); ?>
      <div class="input-group mb-3">
  <input type="text" name="search" class="form-control" placeholder="Search">
  <div class="input-group-append">
    <button class="btn btn-outline-primary" type="submit">Search</button>
  </div>
</div>
<?php echo form_close(); ?>
    </div>

    <div class="container">
      <div class="row">
        <?php if (count($buku) == 0): ?>
          <div class="col-12">
            <div class="alert alert-danger text-center">
              Not Found
            </div>
          </div>
          <?php else: ?>
          <?php foreach ($buku as $key => $value): ?>
          <div class="col-md-3 col-sm-6">
            <a href="<?php echo base_url('Home/detail/'.$value->kode) ?>">
              <div class="card">
  <img class="card-img-top p-2" src="<?php echo base_url("uploads/".$value->gambar) ?>" alt="Card image cap" style="max-height: 200px;min-height: 200px;">
  <div class="card-body">
    <p class="card-text text-center"><?php echo $value->judul ?></p>
  </div>
</div>
            </a>
          </div>
        <?php endforeach ?>
        <?php endif ?>
      </div>
    </div>


  <?php $this->load->view('user/footer') ?>
