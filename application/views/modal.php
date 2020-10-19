<div id="tambahsurat" class="modal fade" tabindex="-1" role="dialog">
    <!-- <div class="alert alert-success alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
        <i class="icon fa fa-check"></i></div> -->
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Surat</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php echo form_open_multipart(base_url() . 'Fungsi_surat/tambah_datasurat'); ?>
                <div class="modal-body form-horizontal">
                    <div class="messages"></div>
                    <div class="form-group">
                        <label for="surat" class="col-sm-3 control-label">Surat</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="surat" name="surat" placeholder="Nama Surat" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tanggal" class="col-sm-3 control-label">Tanggal</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="Tanggal Pelaksanaan" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="file" class="col-sm-3 control-label">File</label>
                        <div class="col-sm-9">
                            <input type="file" id="file" name="file" required>
                            <p>File berformat .pdf</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="status" class="col-sm-3 control-label">Status</label>
                        <div class="col-sm-9">
                            <input type="checkbox" class="ml-auto" value="1" name="status"><em class="indicator label-danger"></em>Urgent<br>
                            <input type="checkbox" class="ml-auto" value="2" name="status"><em class="indicator label-warning"></em>Sedikit
                            Urgent<br>
                            <input type="checkbox" class="ml-auto" value="3" name="status"><em class="indicator label-success"></em>Tidak
                            Urgent<br>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary tambah-surat">Tambah
                        Surat</button>
                </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>
<div id="tambahkepala" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Kepala</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="post" action="<?= base_url() . 'Kepala/tambah_kepala'; ?>">
                    <div class="modal-body">
                        <div class="messages"></div>
                        <div class="form-group">
                            <label for="nip" class="col-sm-3 control-label">NIP</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="nip" name="nip" placeholder="NIP" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nama" class="col-sm-3 control-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="namakepala" name="nama" placeholder="Nama Lengkap" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="alamat" class="col-sm-3 control-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="alamat" placeholder="Alamat" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="jabatan" class="col-sm-3 control-label">Jabatan</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="jabatan" placeholder="Jabatan" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nomor" class="col-sm-3 control-label">Nomor Telp</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" maxlength="12" name="nomor" placeholder="Nomor Telp" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="jenkel" class="col-sm-9 control-label">Jenis Kelamin</label>
                            <div class="col-sm-9">
                                <select class="form-control" id="jenkel1" name="jeniskel" required>
                                    <option>--Jenis kelamin--</option>
                                    <option value="1">Laki-laki</option>
                                    <option value="2">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-sm-3 control-label">Email</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" name="email" placeholder="Email" required>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" value="Tambah" class="btn btn-primary">Tambah
                            Kepala</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Keluar
                </h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Apakah yakin ingin keluar?
                <div class="row">
                    <div class="col-sm-12 text-right">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                        <a class="btn btn-primary" href="authentication/logout">Keluar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>