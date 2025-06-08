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
                            <h3 class="card-title">Edit Nama Dokter</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="<?php echo e(route('dokter-update',$dokter->id)); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="namapoli">Nama Dokter</label>
                                    <input type="text" name="nama_dokter" class="form-control "
                                        value="<?php echo e($dokter->nama_dokter); ?>">
                                </div>

                                <div class="form-group">
                                    <label for="namapoli">Alamat</label>
                                    <input type="text" name="alamat" class="form-control "
                                        value="<?php echo e($dokter->alamat); ?>">
                                </div>

                                <div class="form-group">
                                    <label for="namapoli">No Hp</label>
                                    <input type="text" name="no_hp" class="form-control "
                                        value="<?php echo e($dokter->no_hp); ?>">
                                </div>

                                <div class="form-group">
                                    <label for="namapoli">Poli</label>
                                    <select name="id_poli" class="form-control ">
                                        <?php $__currentLoopData = $poli; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($p->id); ?>"><?php echo e($p->nama_poli); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="namapoli">Password</label>
                                    <input type="text" name="password" class="form-control "
                                        value="<?php echo e($dokter->katasandi); ?>">
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
<?php echo $__env->make('Layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ep/Documents/poliklink-bengkel-koding-main/resources/views/Admin/Dokter/edit.blade.php ENDPATH**/ ?>