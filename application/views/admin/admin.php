<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
        </ol>
    </div>

    <div class="row mb-3">
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card h-80">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-uppercase mb-1">Diterima</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?= $jmlacc ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-2x fa-check text-success"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Earnings (Annual) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card h-80">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-uppercase mb-1">Proses</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jmlproses ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-2x fa-info text-warning"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- New User Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card h-80">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-uppercase mb-1">Ditolak</div>
                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= $jmldc ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-2x fa-ban text-danger"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-uppercase mb-1">Total</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jmlall ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-2x fa-inbox text-primary"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Message From Customer-->
        <div class="col-12">
            <div class="card">
                <div class="card-header py-4 bg-primary d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-light">Pesan dari pengguna</h6>
                </div>

                <?php foreach($message as $m) {?>

                <div>
                    <div class="customer-message align-items-center">
                        <div class="font-weight-bold d-flex justify-content-between p-3" href="#">
                            <div class="right">
                                <div class="text-truncate message-title"><?= $m->message ?></div>
                                <div class="userinfo d-flex">
                                    <div class="small text-gray-500 message-time font-weight-bold mr-2">Name :
                                        <?= $m->nama ?>;</div>
                                    <div class="small text-gray-500 message-time font-weight-bold mr-2">No Telpon :
                                        <?= $m->no_telp ?>;</div>
                                    <div class="small text-gray-500 message-time font-weight-bold">Email :
                                        <?= $m->email ?>
                                    </div>
                                </div>
                            </div>
                            <div class="right">
                                <a class="btn btn-sm btn-danger text-white" data-toggle="modal"
                                    data-target="#deleteModal<?= $m->id_message ?>"><i class="fas fa-trash"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <!--Row-->
    <!-- Modal delete -->
    <?php foreach ($message as $m) { ?>
    <div class="modal fade" id="deleteModal<?= $m->id_message ?>" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabelLogout">Delete <?= $m->nama ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Apakah anda yakin ingin menghapusnya ?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                    <a href="<?= base_url('admin/delete_msg/'.$m->id_message)?>" class="btn btn-primary">Delete</a>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
</div>