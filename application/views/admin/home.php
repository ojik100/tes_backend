<?php $this->load->view('admin/templates/head') ?>
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">home</i>
                  </div>
                  <p class="card-category">Data Resep</p>
                  <h3 class="card-title"><?= $resep ?> 
                    <small>Resep</small>
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons text-success">details</i>
                    <a href="javascript:;">Selengkapnya</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">home</i>
                  </div>
                  <p class="card-category">Bahan </p>
                  <h3 class="card-title"><?= $bahan ?> 
                    <small>Bahan </small>
                </div>
                <div class="card-footer">
                  <div class="stats">
                  <i class="material-icons text-success">home</i>
                    <a href="javascript:;">Selengkapnya</a>
                  </div>
                </div>
              </div>
            </div>
      
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">home</i>
                  </div>
                  <p class="card-category">Kategori </p>
                  <h3 class="card-title"><?= $kategori ?> 
                    <small>Kategori </small>
                </div>
                <div class="card-footer">
                  <div class="stats">
                  <i class="material-icons text-success">details</i>
                    <a href="javascript:;">Selengkapnya</a>
                  </div>
                </div>
              </div>
            </div>
      
       
          </div>
          
        </div>
      </div>
      <?php $this->load->view('admin/templates/footer') ?>