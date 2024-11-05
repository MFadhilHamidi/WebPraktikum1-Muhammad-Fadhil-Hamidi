<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4"></h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="<?php echo site_url('kustomer') ?>">Kustomer</a></li>
            <li class="breadcrumb-item active"><?php echo $title ?></li>
        </ol>
        <div class="card mb-4">

            <div class="card-header">

            </div>
            <div class="card-body">
                <div class="card mb-4">
                    <div class="card-body">
                        <form class="form-horizontal" method="post" action="<?php echo base_url('report/kustomerlap') ?>" target="_blank">
                            <div class="mb-3">
                                <label for="exampleInputEmail" class="form-label">Internal file Controller : Menyertakan report pada file controller</label>
                            </div>
                            <button type="submit" class="btn btn-warning">Cetak Laporan</button>
                        </form>
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-body">
                        <form class="form-horizontal" method="post" action="<?php echo base_url('report/headerlap') ?>" target="_blank">
                            <div class="mb-3">
                                <label for="exampleInputEmail" class="form-label">Internal file Controller : Menyertakan report hanya header pada file controller</label>
                            </div>
                            <button type="submit" class="btn btn-warning">Cetak Laporan</button>
                        </form>
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-body">
                        <form class="form-horizontal" method="post" action="<?php echo base_url('report/kustomerfull') ?>" target="_blank">
                            <div class="mb-3">
                                <label for="exampleInputEmail" class="form-label">Eksternal file Controller : Menyertakan report pada file berbeda dan di letakan di folder view</label>
                            </div>
                            <button type="submit" class="btn btn-warning">Cetak Laporan</button>
                        </form>
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-body">
                        <form class="form-horizontal" method="post" action="<?php echo base_url('report/kustomerkustom') ?>" target="_blank">
                            <div class="mb-3">
                                <label for="exampleInputEmail" class="form-label">Costom Eksternal file controller : Menyertakan report pada file berbeda dan diletakkan di folder view
                                    berdasarkan fungsi</label>
                            </div>
                            <button type="submit" class="btn btn-warning">Cetak Laporan</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</main>