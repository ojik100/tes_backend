<?php $this->load->view('admin/templates/head') ?>
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Tabel Resep  Makanan</h4>
                </div>
                <div class="card-body">
                <p class="card-category"><a href="<?= base_url() ?>Resep/add" class="btn btn-primary fa fa-plus btn-sm"></a></p>
              
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                          Nama Resep
                        </th>
                        <th>
                         Kategori
                        </th>
                        
                        <th>
                         Nama Bahan
                        </th>
                       
                        <th>
                          Aksi
                        </th>
                      </thead>
                      <tbody>
                     
                      <?php   
                
                       $no = 1;
                       foreach($resep as $row){ ?>
                        <tr>
                          <td>
                            <?= $no++ ?>
                          </td>
                          <td>
                          <?php echo $row->nama_makanan ?>
                            </td>
                          <td>
                          <?php echo $row->kategori ?>
                          </td>
                          <td>
                          <?php echo $row->nama_bahan ?>
                          </td>
                        
                          <td class="text-primary">
                          <a href="<?= base_url() ?>Resep/delete/<?= $row->id ?>" class="btn btn-danger fa fa-trash btn-sm"></a>
                            
                          <a href="<?= base_url() ?>Resep/edit/<?= $row->id ?>" class="btn btn-warning fa fa-edit btn-sm"></a>
                            </td>
                        </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    
          </nav>
          <?php $this->load->view('admin/templates/footer') ?>