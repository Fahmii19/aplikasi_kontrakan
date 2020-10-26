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
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15861.489806933263!2d106.8362976696315!3d-6.345791550202384!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ec4912942c3d%3A0x2bfafa40d54777a!2sPasir%20Gn.%20Sel.%2C%20Kec.%20Cimanggis%2C%20Kota%20Depok%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1602474761161!5m2!1sid!2sid" width="805" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

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
                                <input type="text" name="lat" placeholder="Latitude" value="<?php echo $v_edit->latitude ?>">

                                <div class="h-form-label">
                                    <label><h6>Longitude</h6></label>
                                </div>
                                <input type="text" name="long" placeholder="Longitude" value="<?php echo $v_edit->longitude ?>">
                            </div>
                        </div>

                        <input type="hidden" name="id" value="<?php echo $v_edit->id_kontrakan ?>">

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
