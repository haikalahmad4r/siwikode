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

                 <h3>Detail Wisata</h3>

                   
                            <div class="col-6">
                            <table class="table table-bordered">
                                    <tbody>
                                       
                                        
                                        <tr>
                                            <td class="bg-primary text-white">Nama :</td>
                                            <td><?= $join_wisata_kuliner->nama_wisata?></td>
                                        </tr>
                                        <tr>
                                            <td class="bg-primary text-white">Deskripsi :</td>
                                            <td><?= $join_wisata_kuliner->deskripsi?></td>
                                        </tr>
                                        
                                        <tr>
                                            <td class="bg-primary text-white">Wisata :</td>
                                            <td><?= $Testimoni->wisata_id?></td>
                                        </tr>
                                        <tr>
                                            <td class="bg-primary text-white">Profesi :</td>
                                            <td><?= $Testimoni->profesi_id?></td>
                                        </tr>
                                        
                                        <tr>
                                            <td class="bg-primary text-white">Rating :</td>
                                            <td><?= $Testimoni->rating?></td>
                                        </tr>
                                        <tr>
                                            <td class="bg-primary text-white">Komentar :</td>
                                            <td><?= $Testimoni->komentar?></td>
                                        </tr>
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

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