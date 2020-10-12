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
                                    <th>No</th>
                                    <th>Pemilik</th>
                                    <th>Alamat Kontrakan</th>
                                    <th>Latitude</th>
                                    <th>Longitude</th>
                                    <th>Harga</th>
                                    <th>Unit</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $no = 1;
                                    foreach($view as $row):
                                 ?>
                                <tr>
                                    <td><?php echo $no; ?></td>
                                    <td><?php echo $row->nama_pemilik; ?></td>
                                    <td><?php echo $row->alamat; ?></td>
                                    <td><?php echo $row->latitude; ?></td>
                                    <td><?php echo $row->longitude; ?></td>
                                    <td><?php echo $row->harga; ?></td>
                                    <td><?php echo $row->unit; ?></td>
                                    <td>
                                        <a href="<?php echo site_url('KontrakanController/edit_kontrakan/'.$row->id_kontrakan) ?>"><i style="color: orange;" class="small material-icons">edit</i></a>
                                        <a href="<?php echo site_url('KontrakanController/detail_kontrakan/'.$row->id_pemilik) ?>"><i style="color: blue;" class="small material-icons">format_list_bulleted</i></a>
                                        <a href=""><i style="color: red;" class="small material-icons">delete</i></a>
                                    </td>
                                </tr>
                            <?php $no++; endforeach; ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Pemilik</th>
                                    <th>Alamat Kontrakan</th>
                                    <th>Latitude</th>
                                    <th>Longitude</th>
                                    <th>Harga</th>
                                    <th>Unit</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>