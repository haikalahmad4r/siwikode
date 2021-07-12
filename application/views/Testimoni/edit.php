<!DOCTYPE html>
<html lang="en">
    <head>
        <title>EDIT Testimoni</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <?php $this->load->view('template/header'); ?>
    <body>
    <div class="container-fluid">
           
                <?php echo form_open_multipart('Testimoni/update'); ?>
                    
				<input type="hidden" name="id" id="id" value="<?php echo $Testimoni->id; ?>"/>
				
                        <label for="">Nama</label>
                        <input type="text" name="nama" placeholder="masukan nama Testimoni" value="<?= $Testimoni->nama?>" class="form-control">
                        <label for="">Email</label>
                        <input type="email" name="email" placeholder="masukan nama Testimoni" value="<?= $Testimoni->email?>" class="form-control">
                        <label for="">Jenis Wisata</label>
                        <input type="text" name="wisata_id" placeholder="masukan nama Testimoni" value="<?= $Testimoni->wisata_id?>" class="form-control">
                        <label for="">Profesi</label>
                        <input type="text" name="profesi_id" placeholder="masukan nama Testimoni" value="<?= $Testimoni->profesi_id?>" class="form-control">
                        <label for="">Komentar</label>
                        <input type="text" name="komentar" placeholder="masukan nama Testimoni" value="<?= $Testimoni->komentar?>" class="form-control">

				
                    
                        
                        
                        
           
                        <button type="submit" class="btn btn-primary mt-3">Submit</button>
                    
                        <?php echo form_close(); ?>
                </div>
                <!-- /.container-fluid -->

            </div>
    </body>
</html>