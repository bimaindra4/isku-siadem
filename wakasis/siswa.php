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
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="odd gradeX">
                                <td>1</td>
                                <td>998403884938</td>
                                <td>29-0038-221</td>
                                <td>
                                    <a href="detail_siswa.php?nis=29-0038-221">MUHAMMAD BIMA INDRA KUSUMA</a>
                                </td>
                                <td>2011</td>
                                <td>
                                    <span class="label label-sm label-default">LULUS</span>
                                </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td>2</td>
                                <td>988403192938</td>
                                <td>19-0032-211</td>
                                <td>
                                    <a href="detail_siswa.php?nis=19-0032-211">INDRA KUSUMA</a>
                                </td>
                                <td>2013</td>
                                <td>
                                    <span class="label label-sm label-primary">AKTIF</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('../layout/wk_footer.php') ?>