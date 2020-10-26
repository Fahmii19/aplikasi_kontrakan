F<!-- ============================================================== -->
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

                     <form class="h-form r-separator" method="post" action="<?php echo site_url('PemilikController/add_pemilik')?>">
                        <div class="form-body">
                            <div class="card-content">

                                <div class="row">
                                    <div class="col s2">
                                        <div class="h-form-label">
                                            <label>Nama Pemilik</label>
                                        </div>
                                    </div>
                                    <div class="input-field col s10">
                                        <input type="text" name="nama_pemilik" placeholder="Nama Lengkap">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col s2">
                                        <div class="h-form-label">
                                            <label>Email</label>
                                        </div>
                                    </div>
                                    <div class="input-field col s10">
                                        <input type="text" name="email" placeholder="Email">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col s2">
                                        <div class="h-form-label">
                                            <label >No.Handphone</label>
                                        </div>
                                    </div>
                                    <div class="input-field col s10">
                                        <input type="number" name="no_hp" placeholder="Nomor Handphone">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col s2">
                                        <div class="h-form-label">
                                            <label>Jenis Kelamin</label>
                                        </div>
                                    </div>
                                    <div class="input-field col s10">
                                        <select name="jk">
                                            <option value="" disabled selected>Pilih Jenis Kelamin</option>
                                            <option value="PRIA">PRIA</option>
                                            <option value="WANITA">WANITA</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col s2">
                                        <div class="h-form-label">
                                            <label >Nama Jalan</label>
                                        </div>
                                    </div>
                                    <div class="input-field col s10">
                                        <input type="text" name="nama_jalan_pemilik" placeholder="Nama Jalan">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col s2">
                                        <div class="h-form-label">
                                            <label>RT</label>
                                        </div>
                                    </div>
                                    <div class="input-field col s10">
                                        <input type="text" name="rt" placeholder="RT">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col s2">
                                        <div class="h-form-label">
                                            <label >RW</label>
                                        </div>
                                    </div>
                                    <div class="input-field col s10">
                                        <input type="text" name="rw" placeholder="RW">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col s2">
                                        <div class="h-form-label">
                                            <label >Kelurahan</label>
                                        </div>
                                    </div>
                                    <div class="input-field col s10">
                                        <input type="text" name="kelurahan" placeholder="Kelurahan">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col s2">
                                        <div class="h-form-label">
                                            <label >Kecamatan</label>
                                        </div>
                                    </div>
                                    <div class="input-field col s10">
                                        <input type="text" name="kecamatan" placeholder="Kecamatan">
                                    </div>
                                </div>

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
