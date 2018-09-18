<?php include('../layout/wk_header.php') ?>

<div class="page-content">
    <div class="page-head">
        <div class="page-title">
            <h1>Lihat Data <small>Siswa</small></h1>
        </div>
    </div>
    <ul class="page-breadcrumb breadcrumb">
        <li>
            <a href="#">Data Siswa</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span class="active">Lihat Data</span>
        </li>
    </ul>
    
    <div class="row">
        <div class="col-md-12">
            <div class="profile-sidebar">
                <div class="portlet light profile-sidebar-portlet bordered">
                    <div class="profile-userpic">
                        <img src="<?php echo base_url() ?>assets/pages/media/profile/profile_user.jpg" class="img-responsive" alt=""> </div>
                    <div class="profile-usertitle">
                        <div class="profile-usertitle-name">MUHAMMAD BIMA INDRA KUSUMA</div>
                        <div class="profile-usertitle-job"><?php echo $_GET['nis'] ?></div>
                    </div>
                    <div class="profile-userbuttons">
                        <button type="button" class="btn btn-circle green btn-sm bold">EDIT</button>
                        <button type="button" class="btn btn-circle red btn-sm bold">MUTASI</button>
                    </div>
                    <div class="profile-usermenu">
                        <ul class="nav">
                            <li class="active">
                                <a href="page_user_profile_1.html">
                                    <i class="icon-home"></i> Informasi</a>
                            </li>
                            <li>
                                <a href="page_user_profile_1_account.html">
                                    <i class="icon-badge"></i> Daftar Prestasi</a>
                            </li>
                            <li>
                                <a href="page_user_profile_1_help.html">
                                    <i class="icon-close"></i> Daftar Sanksi</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="profile-content">
                
            </div>
        </div>
    </div>
</div>

<?php include('../layout/wk_footer.php') ?>