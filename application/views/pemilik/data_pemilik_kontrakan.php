<!-- ============================================================== -->
<!-- Page wrapper scss in scafholding.scss -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Title and breadcrumb -->
    <!-- ============================================================== -->
    <div class="page-titles">
        <div class="d-flex align-items-center">
            <h5 class="font-medium m-b-0"><?= $title; ?></h5>
            <div class="custom-breadcrumb ml-auto">
                <a href="#!" class="breadcrumb">Home</a>
                <a href="#!" class="breadcrumb">Dashboard</a>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Container fluid scss in scafholding.scss -->
    <!-- ============================================================== -->
    <div class="container-fluid">

        <div class="row">
            <div class="col s12">
                <div class="card">
                    <div class="card-content">

                        <table class="responsive-table text-inputs-searching">
                            <thead>
                                <tr>
                                    <th>NIK</th>
                                    <th>Nama</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Email</th>
                                    <th>No.Telp</th>
                                    <th>Nama Jalan</th>
                                    <th>RT</th>
                                    <th>RW</th>
                                    <th>Kelurahan</th>
                                    <th>Kecamatan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    foreach($view as $row):
                                 ?>
                                <tr>
                                    <td><?php echo $row->nik; ?></td>
                                    <td><?php echo $row->nama_pemilik; ?></td>
                                    <td><?php echo $row->jk; ?></td>
                                    <td><?php echo $row->email; ?></td>
                                    <td><?php echo $row->no_hp; ?></td>
                                    <td><?php echo $row->nama_jalan_pemilik; ?></td>
                                    <td><?php echo $row->rt; ?></td>
                                    <td><?php echo $row->rw; ?></td>
                                    <td><?php echo $row->kelurahan; ?></td>
                                    <td><?php echo $row->kecamatan; ?></td>
                                    <td>
                                        <a href="<?php echo site_url('PemilikController/edit_pemilik_kontrakan/'.$row->id_pemilik) ?>"><i style="color: orange;" class="small material-icons">edit</i></a>
                                        <a href=""><i style="color: red;" class="small material-icons">delete</i></a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>NIK</th>
                                    <th>Nama</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Email</th>
                                    <th>No.Telp</th>
                                    <th>Nama Jalan</th>
                                    <th>RT</th>
                                    <th>RW</th>
                                    <th>Kelurahan</th>
                                    <th>Kecamatan</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>