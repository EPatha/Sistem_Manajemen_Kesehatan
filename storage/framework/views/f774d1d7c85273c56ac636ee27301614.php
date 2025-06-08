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
                <div class="col-md-12">
                    <!-- jquery validation -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Update Profile Dokter</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="<?php echo e(route('dokter.profile.update')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="namapoli">Nama Dokter</label>
                                    <input type="text" value="<?php echo e(session('nama_dokter')); ?>" name="nama_dokter" class="form-control " >
                                </div>
                                <div class="form-group">
                                    <label for="namapoli">Alamat</label>
                                    <input type="text" value="<?php echo e(session('alamat')); ?>" name="alamat" class="form-control " >
                                </div>
                                <div class="form-group">
                                    <label for="namapoli">No Hp</label>
                                    <input type="text" value="<?php echo e(session('no_hp')); ?>" name="no_hp" class="form-control " >
                                </div>
                                <input type="hidden" name="id" value=<?php echo e(session('id')); ?>>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

<!-- Modal Tambah Jadwal -->


<?php $__env->stopSection(); ?>
<?php echo $__env->make('Layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ep/Documents/poliklink-bengkel-koding-main/resources/views/Dokter/Profile/index.blade.php ENDPATH**/ ?>