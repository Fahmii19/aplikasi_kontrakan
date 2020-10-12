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

                     <form class="h-form r-separator" method="post" action="<?php echo base_url('PemilikController/update_pemilik')?>">
                        <div class="form-body">
                            <div class="card-content">

                                <div class="row">
                                    <div class="col s2">
                                        <div class="h-form-label">
                                            <label>NIK</label>
                                        </div>
                                    </div>
                                    <div class="input-field col s10">
                                        <input type="text" name="nik" value="<?php echo $view->nik ?>" readonly="readonly">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col s2">
                                        <div class="h-form-label">
                                            <label>Nama Pemilik</label>
                                        </div>
                                    </div>
                                    <div class="input-field col s10">
                                        <input type="text" name="nama_pemilik" value="<?php echo $view->nama_pemilik ?>">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col s2">
                                        <div class="h-form-label">
                                            <label>Email</label>
                                        </div>
                                    </div>
                                    <div class="input-field col s10">
                                        <input type="text" name="email" value="<?php echo $view->email ?>">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col s2">
                                        <div class="h-form-label">
                                            <label >No.Handphone</label>
                                        </div>
                                    </div>
                                    <div class="input-field col s10">
                                        <input type="number" name="no_hp" value="<?php echo $view->no_hp ?>">
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
                                            <?php 
                                            $view2 = array('PRIA','WANITA');
                                            foreach($view2 as $v):
                                                if($view->jk == $v){ ?>
                                                    <option value="<?= $v ?>" selected><?= $v ?></option>
                                                    <?php    
                                                } else { ?>
                                                    <option value="<?= $v ?>"><?= $v ?></option>
                                                <?php } 
                                            endforeach; ?>
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
                                        <input type="text" name="nama_jalan_pemilik" value="<?php echo $view->nama_jalan_pemilik ?>">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col s2">
                                        <div class="h-form-label">
                                            <label>RT</label>
                                        </div>
                                    </div>
                                    <div class="input-field col s10">
                                        <input type="text" name="rt" value="<?php echo $view->rt ?>">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col s2">
                                        <div class="h-form-label">
                                            <label >RW</label>
                                        </div>
                                    </div>
                                    <div class="input-field col s10">
                                        <input type="text" name="rw" value="<?php echo $view->rw ?>">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col s2">
                                        <div class="h-form-label">
                                            <label >Kelurahan</label>
                                        </div>
                                    </div>
                                    <div class="input-field col s10">
                                        <input type="text" name="kelurahan" value="<?php echo $view->kelurahan ?>">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col s2">
                                        <div class="h-form-label">
                                            <label >Kecamatan</label>
                                        </div>
                                    </div>
                                    <div class="input-field col s10">
                                        <input type="text" name="kecamatan" value="<?php echo $view->kecamatan ?>">
                                    </div>
                                </div>

                                <input type="hidden" name="id" value="<?php echo $view->id_pemilik ?>">

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
