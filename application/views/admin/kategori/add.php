<?php $this->load->view('admin/templates/head') ?>
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Form Add Kategori Resep Makanan</h4>
                </div>
                <div class="card-body">
              <br> 
                  <form action="<?= base_url() ?>Kategori/store" method="POST">
                    <div>
                      <label for="">Nama Kategori</label>
                     <input type="text" class="form-control" name="kategori" placeholder="Enter Kategori" required>
                    </div><br>
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