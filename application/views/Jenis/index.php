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

                    <a href="<?= base_url()?>index.php/jenis/add" class="btn btn-primary">Tambahkan</a>
                    
                    
                    <!-- Page Heading -->
                    
                    <h1 class="h2 mb-6 text-white-500">Jenis Wisata</h1>

                    <table class="table table-striped">
                    <thead>
                    <tr>
                                
                                <th>Nama</th>
                                
                                <th>Action</th>
                            </tr>
                        </thead>
                        <?php
                                foreach($jenis_wisata->result() as $jenis_wisata){
                                    echo '
                                    <tr>
                                        
                                        <td>'.$jenis_wisata->nama_wisata.'</td>
                                      
                                        
                                        
                                        <td>
                                        <a class="btn btn-outline-secondary" style="background-color:#17243B"  href="'.base_url().'index.php/jenis/view/'.$jenis_wisata->id.'">View</a>
                                        <a class="btn btn-outline-info" style="background-color:#2578AF" href="'.base_url().'index.php/jenis/edit/'.$jenis_wisata->id.'">Edit</a>
                                        <a class="btn btn-outline-danger"  style="background-color:#000000" onclick="return confirm(‘Yakin Hapus?’)" href="'.base_url().'index.php/jenis/delete/'.$jenis_wisata->id.'">Delete</a>

                                        </td>
                                        
                                    </tr>';
                                }
                            ?>
                        </tbody>
                    
                    
                    </table>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span> &copy; SIWIKODE </span>
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