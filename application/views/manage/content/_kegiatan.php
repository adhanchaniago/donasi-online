<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
            <strong>Tambah</strong> Kegiatan</div>
            <div class="card-body">
            <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                
                <div class="form-group row">
                <label class="col-md-3 col-form-label" for="text-input">Nama Kegiatan</label>
                <div class="col-md-9">
                    <input class="form-control" id="nama_kegiatan" type="text" name="nama_kegiatan" placeholder="Masukan Nama Kegiatan">
                    <!-- <span class="help-block">This is a help text</span> -->
                </div>
                </div>
                <div class="form-group row">
                <label class="col-md-3 col-form-label" for="email-input">Deskripsi</label>
                <div class="col-md-9">
                    <input class="form-control" id="deskripsi" type="text" name="deskripsi" placeholder="Masukan Deskripsi">
                    <!-- <span class="help-block">Please enter your email</span> -->
                </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 col-form-label" for="password-input">Target Dana</label>
                    <div class="col-md-9">
                        <input class="form-control" id="target_dana" type="text" name="target_dana" placeholder="Masukan Target Dana">
                        <!-- <span class="help-block">Please enter a complex password</span> -->
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 col-form-label" for="password-input">Tanggal Mulai</label>
                    <div class="col-md-9">
                        <input class="form-control" id="stard_date" type="text" name="stard_date" placeholder="Masukan Tanggal Mulai">
                        <!-- <span class="help-block">Please enter a complex password</span> -->
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 col-form-label" for="password-input">Tanggal Berakhir</label>
                    <div class="col-md-9">
                        <input class="form-control" id="end_date" type="text" name="end_date" placeholder="Masukan Tanggal Berakhir">
                        <!-- <span class="help-block">Please enter a complex password</span> -->
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 col-form-label" for="file-input">Image</label>
                    <div class="col-md-9">
                        <input id="img" type="file" name="file-input">
                    </div>
                </div>
            </form>
            </div>
            <div class="card-footer" align="center">
            <button class="btn btn-sm btn-primary" type="submit" style="width:50%">
                <i class="fa fa-dot-circle-o"></i> Simpan</button>
            <!-- <button class="btn btn-sm btn-danger" type="reset">
                <i class="fa fa-ban"></i> Reset</button> -->
            </div>
        </div>
    </div>
    <!-- /.col-->
</div>