<!DOCTYPE html>
<html lang="en">

    <?php $this->load->view('include/head'); ?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

      <?php $this->load->view('include/sidebar');?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                
              <?php $this->load->view('include/navbar');?>

                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
           
                <?php echo form_open_multipart('Wisata/update'); ?>
                    
				
				
                    <label for="">Nama</label>
                    <input type="text" name="nama" placeholder="masukan nama Wisatakuliner" value="<?= $Wisatakuliner->nama?>" class="form-control">

                    
                    <label for="">deskripsi</label>
                    <input type="text" name="deskripsi" placeholder="masukan nama Wisatakuliner" value="<?= $Wisatakuliner->deskripsi?>" class="form-control">
                   
                    <label for="">fasilitas</label>
                    <input type="text" name="profesi" placeholder="masukan nama Wisatakuliner" value="<?= $Wisatakuliner->fasilitas?>" class="form-control">
                    
                    <label for="">Rating</label>
                    <input type="number" name="bintang" placeholder="masukan nama Wisatakuliner" value="<?= $Wisatakuliner->bintang?>" class="form-control">

                    <label for="">Kontak</label>
                    <input type="text" name="kontak" placeholder="masukan nama Wisatakuliner" value="<?= $Wisatakuliner->kontak?>" class="form-control">

                    <label for="">Alamat</label>
                    <input type="text" name="Alamat" placeholder="masukan nama Wisatakuliner" value="<?= $Wisatakuliner->alamat?>" class="form-control">

                    <label for="">Latlong</label>
                    <input type="text" name="latlotng" placeholder="masukan nama Wisatakuliner" value="<?= $Wisatakuliner->latlong?>" class="form-control">

                    <label for="">Email</label>
                    <input type="email" name="email" placeholder="masukan nama Wisatakuliner" value="<?= $Wisatakuliner->email?>" class="form-control">

                    <label for="">web</label>
                    <input type="text" name="web" placeholder="masukan nama Wisatakuliner" value="<?= $Wisatakuliner->web?>" class="form-control">

                   
                    <label for="">Jenis Kuliner</label>
                    <input type="text" name="jenis_kuliner_id" placeholder="masukan nama Wisatakuliner" value="<?= $Wisatakuliner->jenis_wisata_id?>" class="form-control">










            
                
                    
                    
                    
       
                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                
                    <?php echo form_close(); ?>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <?php $this->load->view('include/script'); ?>

</body>

</html>