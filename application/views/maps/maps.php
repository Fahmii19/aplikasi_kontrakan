<style type="text/css">
    #mapid { height: 380px; }
</style>
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
            <div class="col s8">
                <div class="card">
                    <div class="card-content">
                        <h4 class="card-title">Maps</h4><hr>

                        <div id="mapid"></div>
                    
                    </div>
                </div>
            </div>

            <div class="col s4">
                <div class="card">
                    <form class="h-form r-separator" method="post">
                        <div class="form-body">
                            <div class="card-content">
                                <h4 class="card-title">Form Input</h4><hr>
                                <div class="h-form-label">
                                    <label><h6>Latitude</h6></label>
                                </div>
                                <input type="text" name="lat" placeholder="Latitude">

                                <div class="h-form-label">
                                    <label><h6>Longitude</h6></label>
                                </div>
                                <input type="text" name="long" placeholder="Longitude">
                            </div>
                        </div>

                        <!-- <input type="hidden" name="id" value="<?php echo $v_edit->id_kontrakan ?>"> -->

                        <div class="divider"></div>

                        <div class="card-content">
                            <div class="form-action">
                                <button id="#simpan" class="btn cyan waves-effect waves-light" type="submit" name="action">Simpan
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-s12">
                <div class="card">
                    <div class="card-content">
                        <h4 class="card-title">Data LatLong Kontrakan</h4><hr>
                        <table class="responsive-table text-inputs-searching">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Alamat</th>
                                    <th>Latitude</th>
                                    <th>Longitude</th>
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
                                    <td><?php echo $row->alamat; ?></td>
                                    <td><?php echo $row->latitude; ?></td>
                                    <td><?php echo $row->longitude; ?></td>
                                    <td>
                                        <a href="<?php echo site_url('MapsController/edit_maps/'.$row->id_kontrakan) ?>"><i style="color: orange;" class="small material-icons">edit</i></a>
                                    </td>
                                </tr>
                                <?php $no++; endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
