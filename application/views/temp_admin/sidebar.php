        <!-- ============================================================== -->
        <!-- Sidebar scss in sidebar.scss -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <ul id="slide-out" class="sidenav">
                <li>
                    <ul class="collapsible">
                        <li class="small-cap"><span class="hide-menu">PERSONAL</span></li>
                        <li>
                            <a href="<?php echo site_url('admin') ?>" class="collapsible-header"><i class="material-icons">dashboard</i><span class="hide-menu"> Dashboard</span></a>
                       <!--      <div class="collapsible-body">
                                <ul>
                                    <li><a href="index.html"><i class="material-icons">adjust</i><span class="hide-menu">Dashboard-1</span></a></li>
                                  
                                </ul>
                            </div> -->
                        </li>

                        <li class="small-cap"><span class="hide-menu">PEMILIK KONTRAKAN</span></li>
                        <li>
                            <a href="javascript: void(0);" class="collapsible-header has-arrow"><i class="material-icons">move_to_inbox</i><span class="hide-menu">DATA</span></a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a href="<?php echo site_url('PemilikController/data_pemilik_kontrakan') ?>"><i class="material-icons">email</i><span class="hide-menu">Data Pemilik Kontrakan</span></a></li>

                                    <li><a href="<?php echo site_url('KontrakanController/data_kontrakan') ?>"><i class="material-icons">email</i><span class="hide-menu">Data Kontrakan</span></a></li>

                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="collapsible-header has-arrow"><i class="material-icons">move_to_inbox</i><span class="hide-menu">TAMBAH DATA</span></a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a href="<?php echo site_url('PemilikController/input_pemilik') ?>"><i class="material-icons">email</i><span class="hide-menu">Tambah Pemilik Kontrakan</span></a></li>

                                    <li><a href="<?php echo site_url('KontrakanController/input_kontrakan') ?>"><i class="material-icons">email</i><span class="hide-menu">Tambah Kontrakan</span></a></li>
                                </ul>
                            </div>
                        </li>

                        <li>
                            <a href="<?php echo site_url('MapsController/maps') ?>" class="collapsible-header"><i class="material-icons">maps</i><span class="hide-menu"> Maps</span></a>
                        </li>

                    </ul>
                </li>
            </ul>
        </aside>
        <!-- ============================================================== -->
        <!-- Sidebar scss in sidebar.scss -->
        <!-- ============================================================== -->