<?php $this->load->view('admin/templates/head') ?>
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Form Edit Kategori Resep Makanan</h4>
                </div>
                <div class="card-body">
              <br> 
              <?php foreach($kategori as $row){ ?>
                  <form action="<?= base_url() ?>Kategori/update" method="POST">
                    <div>
                      <label for="">Nama Kategori</label>
                     <input type="text" class="form-control" name="kategori" value="<?php echo $row->kategori ?>" placeholder="Enter Kategori" required>
                     <input type="hidden" class="form-control" name="id" value="<?php echo $row->id ?>" placeholder="Enter Kategori" required>
                    </div><br>
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