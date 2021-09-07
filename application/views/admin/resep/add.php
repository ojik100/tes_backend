<?php $this->load->view('admin/templates/head') ?>
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Form Add Resep Makanan</h4>
          </div>
          <div class="card-body">
            <br>
            <form action="<?= base_url() ?>resep/store" method="POST">
            <div>
                <label for="">Nama Makanan</label>
                <input type="text" name="nama_makanan" class="form-control" required  placeholder="Enter Nama Makanan" id="">
              </div>
              <div>
                <label for="">Nama Bahan</label>
                <select name="id_bahan" class="form-control" id="">
                  <option value="">-Pilih Bahan-</option>
                  <?php

                  foreach ($bahan as $row) {
                    echo '<option value="' . $row->id . '">' . $row->nama_bahan . '</option>';
                  }
                  ?>
                </select>
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