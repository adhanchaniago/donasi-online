<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <?php 
                    $act = $this->uri->segment(3);
                ?>
            <strong><?php echo ucfirst($act); ?></strong> Kegiatan</div>
            <div class="card-body">
            <form class="form-horizontal" action="<?= base_url('manage/execute/kegiatan'); ?>" method="post" enctype="multipart/form-data">
                
                <div class="form-group row">
                <label class="col-md-3 col-form-label" for="text-input">Nama Kegiatan</label>
                <div class="col-md-9">
                    <input class="form-control" id="nama_kegiatan" type="text" name="nama_kegiatan" required placeholder="Masukan Nama Kegiatan">
                    <!-- <span class="help-block">This is a help text</span> -->
                </div>
                </div>
                <div class="form-group row">
                <label class="col-md-3 col-form-label" for="email-input">Deskripsi</label>
                <div class="col-md-9">
                    <textarea name="deskripsi" class="form-control" id="deskripsi" cols="100" rows="10"></textarea>
                    <!-- <input class="form-control" id="deskripsi" type="text" name="deskripsi" required placeholder="Masukan Deskripsi"> -->
                    <!-- <span class="help-block">Please enter your email</span> -->
                </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 col-form-label" for="password-input">Target Dana</label>
                    <div class="col-md-9">
                        <input class="form-control" id="target_dana" type="text" name="target_dana" required placeholder="Masukan Target Dana">
                        <!-- <span class="help-block">Please enter a complex password</span> -->
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 col-form-label" for="password-input">Tanggal Mulai</label>
                    <div class="col-md-9">
                        <input class="form-control" id="start_date" type="text" name="start_date" required placeholder="ex. 2018-01-01">
                        <!-- <span class="help-block">Please enter a complex password</span> -->
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 col-form-label" for="password-input">Tanggal Berakhir</label>
                    <div class="col-md-9">
                        <input class="form-control" id="end_date" type="text" name="end_date" required placeholder="ex. 2018-01-01">
                        <!-- <span class="help-block">Please enter a complex password</span> -->
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 col-form-label" for="file-input">Image</label>
                    <div class="col-md-9">
                        <input id="img" type="file" name="file_input">
                    </div>
                </div>
                <div class="card-footer" align="center">

                        <?php
                            if($act == 'update'){
                                $btn = "Ubah";
                            }else{
                                $btn = "Simpan";
                            }
                            // echo $btn;
                        ?>
                    <input class="btn btn-sm btn-primary" type="submit" value="<?= $btn ?>" style="width:50%">
                        <!-- <i class="fa fa-dot-circle-o"></i>  -->
                <!-- <button class="btn btn-sm btn-danger" type="reset">
                    <i class="fa fa-ban"></i> Reset</button> -->
                </div>
            </form>
            </div>
        </div>
    </div>
    <!-- /.col-->
</div>