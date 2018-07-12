<?php $this->load->view('user/header') ?>

    <div class="container">
      <div class="row">
        <div class="col-12">
          <h1 class="text-center"><?php echo $buku->judul ?></h1>
        </div>
        <div class="col-md-6 mx-auto">
          <img src="<?php echo base_url('uploads/'.$buku->gambar) ?>">
        </div>
        <div class="col-8 mx-auto">
          <table>
            <tr>
              <td>Penerbit</td>
              <td> : </td>
              <td><?php echo $buku->penerbit ?></td>
            </tr>
            <tr>
              <td>Pengarang</td>
              <td> : </td>
              <td><?php echo $buku->pengarang ?></td>
            </tr>
            <tr>
              <td>Tahun Terbit</td>
              <td> : </td>
              <td><?php echo $buku->tahunterbit ?></td>
            </tr>
          </table>
        </div>
        <div class="col-8 mx-auto">
          <h2>Abstract</h2>
          <?php echo $buku->abstrak ?>
        </div>
      </div>      
    </div>


  <?php $this->load->view('user/footer') ?>
