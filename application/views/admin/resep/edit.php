<?php $this->load->view('admin/templates/head') ?>
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Form Edit  Resep Makanan</h4>
                </div>
                <div class="card-body">
              <br> 
              <?php foreach($resep as $row){ ?>
                  <form action="<?= base_url() ?>Resep/update" method="POST">
                    <div>
                      <label for="">Nama Makanan</label>
                     <input type="text" class="form-control" name="nama_makanan" value="<?php echo $row->nama_makanan ?>" placeholder="Enter Kategori" required>
                     <input type="hidden" class="form-control" name="id" value="<?php echo $row->id ?>" placeholder="Enter Kategori" required>
                    </div>
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
                      <button type="submit" class="btn btn-success">Update</button>
                      <button type="reset" class="btn btn-trash">Batal</button>
                    </div>
                  </form>
                  <?php } ?>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    
          </nav>
          <?php $this->load->view('admin/templates/footer') ?>