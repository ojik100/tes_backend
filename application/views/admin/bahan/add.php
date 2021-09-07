<?php $this->load->view('admin/templates/head') ?>
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Form Add Bahhan Makanan</h4>
          </div>
          <div class="card-body">
            <br>
            <form action="<?= base_url() ?>Bahan/store" method="POST">
              <div>
                <label for="">Nama Kategori</label>
                <select name="id_kategori" class="form-control" id="">
                  <option value="">-Pilih Kategori-</option>
                  <?php

                  foreach ($kategori as $row) {
                    echo '<option value="' . $row->id . '">' . $row->kategori . '</option>';
                  }
                  ?>
                </select>
              </div>
              <div>
                <label for="">Nama Bahan</label>
                <input type="text" name="nama_bahan" class="form-control" required  placeholder="Contoh : nasi 1 piring, telor 2 buah, minyak secukupnya" id="">
              </div>
              <br>
              <div>
                <button type="submit" class="btn btn-success">Simpan</button>
                <button type="reset" class="btn btn-trash">Batal</button>
              </div>
            </form>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

</nav>
<?php $this->load->view('admin/templates/footer') ?>