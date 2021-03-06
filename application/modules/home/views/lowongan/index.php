<style>
  .thumb {
    width: 100%;
    height: 150px;
    overflow: hidden;
  }
</style>

<div class="col-md-12 text-center mt-5">
  <h2>Lowongan Pekerjaan<br></h2>
</div>
<div class="container">
  <div class="row">

    <?php foreach ($lowongan as $row) { ?>
      <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
          <div class="thumb">
            <img src="<?= base_url($row->gambar); ?>" alt="">
          </div>
          <div class="card-body">
            <h4><strong><?= $row->nama_lowongan; ?></strong></h4>
            <p class="card-text"><?= character_limiter($row->deskripsi, '50') ?></p>
            <div class="d-flex justify-content-between align-items-center">
              <a href="<?= base_url('home/lowongan/detail/' . $row->slug); ?>" class="btn btn-primary">Selengkapnya</a>
            </div>
          </div>
        </div>
      </div>
    <?php } ?>

  </div>
</div>