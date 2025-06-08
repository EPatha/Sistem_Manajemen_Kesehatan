<?php $__env->startSection('main'); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Validation</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Validation</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- jquery validation -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Edit Nama Pasien</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="<?php echo e(route('dokter.jadwal-periksa.update',$jadwal->id)); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="namapoli">Nama Dokter</label>
                                    <input type="hidden" name="id_dokter" class="form-control " value="<?php echo e($jadwal->dokter->id); ?>">
                                    <input type="text" class="form-control " value="<?php echo e($jadwal->dokter->nama_dokter); ?>" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Hari</label>
                                    <input type="text" name="hari" class="form-control"
                                        value="<?php echo e($jadwal->hari); ?>">
                                </div>
                                <div class="form-group">
                                    <label for="no_ktp">Jam Mulai</label>
                                    <input type="time" name="jam_mulai" class="form-control"
                                        value="<?php echo e($jadwal->jam_mulai); ?>">
                                </div>

                                <div class="form-group">
                                    <label for="no_rm">Jam Selesai</label>
                                    <input type="text" name="jam_selesai" class="form-control"
                                        value="<?php echo e($jadwal->jam_selesai); ?>">
                                </div>
                                <div class="form-group">
                                    <label for="no_rm">Status</label>
                                    <select name="status" class="form-control" id="">
                                        <option value="">== SILAHKAN PILIH ==</option>
                                        <option value="1">Aktif</option>
                                        <option value="2">Tidak Aktif</option>
                                    </select>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (left) -->
                <!-- right column -->
                <div class="col-md-6">

                </div>
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ep/Documents/poliklink-bengkel-koding-main/resources/views/Dokter/Jadwalperiksa/edit.blade.php ENDPATH**/ ?>