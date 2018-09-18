<?php include('../layout/wk_header.php') ?>

<div class="page-content">
    <div class="page-head">
        <div class="page-title">
            <h1>Atur Sanksi</h1>
        </div>
    </div>
    <ul class="page-breadcrumb breadcrumb">
        <li>
            <a href="#">Data Siswa</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span class="active">Atur Sanksi</span>
        </li>
    </ul>
    
    <div class="row">
        <div class="col-md-12">
            <button data-toggle="modal" data-target="#tambah-sanksi" class="btn btn-primary" style="margin-bottom: 15px">Tambah Sanksi</button>
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
                                <th>Bentuk Sanksi</th>
                                <th>Jenis</th>
                                <th>Poin</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="odd gradeX">
                                <td>1</td>
                                <td>Terlambat masuk sekolah</td>
                                <td><span class="label label-sm label-info">RINGAN</span></td>
                                <td>5</td>
                                <td></td>
                            </tr>
                            <tr class="odd gradeX">
                                <td>2</td>
                                <td>Pakaian dicoret-coret</td>
                                <td><span class="label label-sm label-info">RINGAN</span></td>
                                <td>10</td>
                                <td></td>
                            </tr>
                            <tr class="odd gradeX">
                                <td>3</td>
                                <td>Alpha >3 hari tanpa keterangan</td>
                                <td><span class="label label-sm label-warning">SEDANG</span></td>
                                <td>25</td>
                                <td></td>
                            </tr>
                            <tr class="odd gradeX">
                                <td>4</td>
                                <td>Merusak fasilitas sekolah dengan sengaja</td>
                                <td><span class="label label-sm label-warning">SEDANG</span></td>
                                <td>50</td>
                                <td></td>
                            </tr>
                            <tr class="odd gradeX">
                                <td>5</td>
                                <td>Mencuri</td>
                                <td><span class="label label-sm label-danger">BERAT</span></td>
                                <td>125</td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="tambah-sanksi" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" action="config/c_tambahSanksi.php" class="form-horizontal">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title">Tambah Sanksi</h4>
                </div>
                <div class="modal-body">
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">Bentuk Sanksi</label>
                            <div class="col-md-8">
                                <textarea class="form-control" name="bentuk" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Jenis</label>
                            <div class="col-md-8">
                                <select class="form-control" name="jenis">
                                    <option value="0">-- Pilih Jenis --</option>
                                    <option value="ringan">Ringan</option>
                                    <option value="sedang">Sedang</option>
                                    <option value="berat4">Berat</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Poin</label>
                            <div class="col-md-8">
                                <input class="form-control" type="number">
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