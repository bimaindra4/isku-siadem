<?php include('../layout/wk_header.php') ?>

<div class="page-content">
    <div class="page-head">
        <div class="page-title">
            <h1>Siswa Mutasi</h1>
        </div>
    </div>
    <ul class="page-breadcrumb breadcrumb">
        <li>
            <a href="#">Data Siswa</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span class="active">Siswa Mutasi</span>
        </li>
    </ul>
    
    <div class="row">
        <div class="col-md-12">
            <button data-toggle="modal" data-target="#tambah-mutasi" class="btn btn-primary" style="margin-bottom: 15px">Tambah Mutasi</button>
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption font-dark">
                        <i class="icon-users font-dark"></i>
                        <span class="caption-subject uppercase"> Data Siswa</span>
                    </div>
                </div>
                <div class="portlet-body">
                    <table class="table table-striped table-bordered table-hover order-column" id="sample_3">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NISN</th>
                                <th>NIS</th>
                                <th>Nama Siswa</th>
                                <th>Tahun Masuk</th>
                                <th>Tahun Mutasi</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="odd gradeX">
                                <td>1</td>
                                <td>984693192938</td>
                                <td>19-0032-221</td>
                                <td>
                                    <a href="detail_siswa.php?nis=19-0032-221">KUSUMA SKIDIBAPBAP</a>
                                </td>
                                <td>2013</td>
                                <td>2014</td>
                                <td>
                                    <span class="label label-sm label-danger">MUTASI</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="tambah-mutasi" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" action="config/c_tambahMutasi.php" class="form-horizontal">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title">Tambah Mutasi</h4>
                </div>
                <div class="modal-body">
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">NISN</label>
                            <div class="col-md-8">
                                <div class="input-group">
                                    <input class="form-control" type="text" name="nisn" placeholder="NISN"> 
                                    <span class="input-group-btn">
                                        <button class="btn btn-success" type="button">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Nama Siswa</label>
                            <div class="col-md-8">
                                <input class="form-control" type="text" placeholder="Nama Siswa" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Kelas</label>
                            <div class="col-md-8">
                                <input class="form-control" type="text" placeholder="Kelas" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Alasan</label>
                            <div class="col-md-8">
                                <select class="form-control" name="alasan">
                                    <option value="0">-- Pilih Alasan --</option>
                                    <option value="M01">Dikeluarkan</option>
                                    <option value="M02">Mengundurkan Diri</option>
                                    <option value="M03">Meninggal Dunia</option>
                                    <option value="M04">Pindah Sekolah</option>
                                    <option value="M05">Pindah Tempat Tinggal</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Keterangan</label>
                            <div class="col-md-8">
                                <textarea class="form-control" name="keterangan" rows="7"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" data-dismiss="modal" class="btn dark btn-outline">Cancel</button>
                    <button type="submit" data-dismiss="modal" class="btn green">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include('../layout/wk_footer.php') ?>