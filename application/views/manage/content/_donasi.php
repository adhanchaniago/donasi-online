<div id="ui-view">
   <div>
      <link href="<?= base_url('assets/') ?>vendor/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
      <div class="animated fadeIn">
         <div class="card">
            <div class="card-header">
               <i class="fa fa-edit"></i> Data Donasi
               <div class="card-header-actions">
                  <a href="https://datatables.net" class="card-header-action" target="_blank">
                  <!-- <small class="text-muted">docs</small> -->
                  </a>
               </div>
            </div>
            <div class="card-body">
                <!-- <div style="padding: 0px 60px;">
                    <a href="<?//= base_url('manage/action/add/kegiatan'); ?>" class="btn btn-primary btn-sm">Tambah Data</a>
                </div>
                <br> -->
               <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                  <div class="row">
                     <div class="col-sm-12">
                        <table class="table table-striped table-bordered datatable dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info" style="border-collapse: collapse !important">
                           <thead>
                              <tr role="row">
                                 <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Username: activate to sort column descending" style="width: 202px;">Nama</th>
                                 <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Date registered: activate to sort column ascending" style="width: 170px;">Kegiatan</th>
                                 <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Role: activate to sort column ascending" style="width: 68px;">Jumlah Donasi</th>
                                 <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 82px;">Bukti Donasi</th>
                                 <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width: 168px;">Actions</th>
                              </tr>
                           </thead>
                           <tbody>
                               <?php foreach($result as $value){ ?>
                              <tr role="row" class="odd">
                                 <td class="sorting_1"><?= $value['fullname']; ?></td>
                                 <td><?= $value['nama_kegiatan']; ?></td>
                                 <td><?= "Rp. " . number_format($value['jumlah_donasi'],0); ?></td>
                                 <td>
                                    <?= $value['bukti_donasi']; ?>
                                 </td>
                                 <td>
                                    <a class="btn btn-info" href="<?= base_url('manage/action/update/kegiatan'); ?>">
                                        <i class="fa fa-edit "></i>Konfirmasi
                                    </a>
                                    <!-- <a class="btn btn-danger" href="<?//= base_url('manage/action/delete/kegiatan'); ?>">
                                        <i class="fa fa-trash-o "></i>Hapus
                                    </a> -->
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalDelKeg"><i class="fa fa-trash-o "></i>Hapus</button>
                                 </td>
                              </tr>
                               <?php } ?>
                           </tbody>
                        </table>
                        <!-- Modal -->
                        <div class="modal fade" id="modalDelKeg" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Apakah Anda yakin ingin menghapaus data ini?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-dismiss="modal">Hapus</button>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>