<!-- ============================================================== -->
<!-- Page wrapper scss in scafholding.scss -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Title and breadcrumb -->
    <!-- ============================================================== -->
    <div class="page-titles">
        <div class="d-flex align-items-center">
            <h5 class="font-medium m-b-0"><?= $title ?></h5>
            <div class="custom-breadcrumb ml-auto">
                <a href="<?php echo base_url('DashboardController') ?>" class="breadcrumb">Home</a>
                <a href="<?php echo base_url('PemilikController/input_pemilik') ?>" class="breadcrumb"><?= $title ?></a>
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

                     <form class="h-form r-separator" method="post" action="<?php echo base_url('KontrakanController/update_kontrakan')?>">
                        <div class="form-body">
                            <div class="card-content">

                                <div class="row">
                                    <div class="col s2">
                                        <div class="h-form-label">
                                            <label>Alamat Kontrakan</label>
                                        </div>
                                    </div>
                                    <div class="input-field col s10">
                                        <input type="text" name="alamat" value="<?php echo $view->alamat ?>">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col s2">
                                        <div class="h-form-label">
                                            <label>Harga</label>
                                        </div>
                                    </div>
                                    <div class="input-field col s10">
                                        <input type="text" name="harga" value="<?php echo $view->harga ?>">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col s2">
                                        <div class="h-form-label">
                                            <label >Unit</label>
                                        </div>
                                    </div>
                                    <div class="input-field col s10">
                                        <input type="number" name="unit" value="<?php echo $view->unit ?>">
                                    </div>
                                </div>

                                <input type="hidden" name="id" value="<?php echo $view->id_kontrakan ?>">
                                <input type="hidden" name="id_pemilik" value="<?php echo $view->id_pemilik ?>">
                                <input type="hidden" name="kode" value="<?php echo $view->kode_detail ?>">

                            </div>
                        </div>
                        <div class="divider"></div>

                        <div class="card-content">
                            <div class="form-action">
                                <button class="btn cyan waves-effect waves-light" type="submit" name="action">Save
                                </button>
                                <button class="btn waves-effect waves-light grey darken-4" type="submit" name="action">Cancel
                                </button>
                            </div>
                        </div>


                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
