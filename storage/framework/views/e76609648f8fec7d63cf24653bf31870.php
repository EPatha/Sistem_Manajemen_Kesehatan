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
                            <h3 class="card-title">Inputkan Daftar Poli</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="<?php echo e(route('pasien.poli.daftar')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" name="id_pasien" value="<?php echo e($pasien_id); ?>">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="namapoli">Nama Poli</label>
                                    <input type="text" class="form-control "
                                        value="<?php echo e($poli->nama_poli); ?>" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="namapoli">Nama Jadwal | Dokter</label>
                                    <select name="id_jadwal" id="" class="form-control">
                                        <?php $__currentLoopData = $jadwals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($p->id); ?>"><?php echo e($p->dokter->nama_dokter); ?> | <?php echo e($p->hari); ?> | <?php echo e($p->jam_mulai); ?>

                                            | <?php echo e($p->selesai); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>

                                </div>
                                <div class="form-group">
                                    <label for="namapoli">Keluhan</label>
                                    <textarea name="keluhan" class="form-control" id="" cols="10" rows="2"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="namapoli">Nomor Antrian</label>
                                    <input type="hidden" name="no_antrian" value="<?php echo e($pasien); ?>">
                                    <input type="text" class="form-control "
                                        value="<?php echo e($pasien); ?>" disabled>
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

<?php echo $__env->make('Layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ep/Documents/poliklink-bengkel-koding-main/resources/views/Pasien/Poli/show.blade.php ENDPATH**/ ?>