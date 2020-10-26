<div class="container">

  <div class="row">

    <!-- Post Content Column -->
    <div class="col-lg-8">

      <!-- Title -->
      <h2 class="mt-4">Berikan saran dan masukan</h2>

      <hr>

      <form action="<?= base_url('home/saran/kirim'); ?>" method="POST">
        <div class="form-group">
          <div class="label"><strong> Saran</strong></div>
          <textarea name="isi_saran" class="form-control" id="editor" cols="30" rows="10"></textarea>
        </div>

        <div class="form-group pull-right">
          <button type="submit" class="btn btn-primary">Kirim <i class="fa fa-telegram"></i></button>
        </div>
      </form>

    </div>
    <!-- Sidebar Widgets Column -->
    <div class="col-md-4">
      <!-- Search Widget -->
      <div class="card my-4">
        <h5 class="card-header">Lowongan</h5>
        <div class="card-body">
          <?php foreach ($lowongan as $row) { ?>
            <div class="input-group">
              <a href="<?= base_url('home/lowongan/detail/' . $row->slug); ?>">
                <h5><strong><?= $row->nama_lowongan; ?></strong></h5>
              </a><br>
              <p><?= character_limiter($row->deskripsi, '50') ?></p>
            </div>
          <?php } ?>
        </div>
      </div>


      <!-- Search Widget -->
      <div class="card my-4">
        <h5 class="card-header">Berita</h5>
        <div class="card-body">
          <?php foreach ($berita as $row) { ?>
            <div class="input-group">
              <a href="<?= base_url('home/berita/detail/' . $row->slug); ?>">
                <h5><strong><?= $row->judul_berita; ?></strong></h5>
              </a><br>
              <p><?= character_limiter($row->isi, '50') ?></p>
            </div>
          <?php } ?>
        </div>
      </div>

    </div>

  </div>
  <!-- /.row -->

</div>


<script src="<?= base_url('assets/') ?>js/ckeditor/ckeditor.js"></script>
<script>
  CKEDITOR.replace("editor");
</script>