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
                        <form action="<?php echo e(route('pasien-update',$pasien->id)); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="namapoli">Nama Pasien</label>
                                    <input type="text" name="nama" class="form-control " value="<?php echo e($pasien->nama); ?>">
                                </div>
                                <div class="form-group">
                                    <label for="alamat">alamat</label>
                                    <input type="text" name="alamat" class="form-control"
                                        value="<?php echo e($pasien->alamat); ?>">
                                </div>
                                <div class="form-group">
                                    <label for="no_ktp">No Ktp</label>
                                    <input type="text" name="no_ktp" class="form-control"
                                        value="<?php echo e($pasien->no_ktp); ?>">
                                </div>

                                <div class="form-group">
                                    <label for="no_rm">No RM</label>
                                    <input type="text" name="no_rm" class="form-control"
                                        value="<?php echo e($pasien->no_rm); ?>">
                                </div>
                                <div class="form-group">
                                    <label for="no_rm">Password</label>
                                    <input type="text" name="password" class="form-control"
                                        value="<?php echo e($pasien->katasandi); ?>">
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
<?php echo $__env->make('Layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ep/Documents/poliklink-bengkel-koding-main/resources/views/Admin/Pasien/edit.blade.php ENDPATH**/ ?>