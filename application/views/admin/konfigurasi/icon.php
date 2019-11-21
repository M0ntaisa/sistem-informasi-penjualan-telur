<?php 
    if( $this->session->flashdata('sukses') ) {
        echo '<p class="alert alert-success">';
        echo $this->session->flashdata('sukses');
        echo '/p>';
    }
?>

<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
            
                <?php if( isset($error) ) : ?>
                    <div class="alert alert-warning">
                        <?= $error; ?>
                    </div>
                <?php endif; ?>

                <?= validation_errors('<div class="alert alert-warning">','</div>'); ?>
        
                <?= form_open_multipart(base_url('admin/konfigurasi/icon')); ?>

                    <div class="form-group">
                        <label for="nama_web">Nama Website</label>
                        <?= form_input('nama_web', set_value('nama_web', $konfigurasi->nama_web), 'class="form-control"'); ?>
                    </div>
                    <div class="form-group">
                        <label for="icon">Upload Icon Baru</label>
                        <?= form_upload('icon', set_value('icon', $konfigurasi->icon), 'class="form-control"'); ?>
                        Icon lama: <br> 
                        <img src="<?= base_url('assets/upload/image/'.$konfigurasi->icon) ?>" alt="<?= $konfigurasi->icon ?>" class="img img-responsive img-thumbnail" width="200">
                    </div>
                    
                    <button type="submit" class="btn btn-info float-right"><i class="fa fa-save"></i>  Simpan</button>
                </form>

            </div>
        </div>
    </div>