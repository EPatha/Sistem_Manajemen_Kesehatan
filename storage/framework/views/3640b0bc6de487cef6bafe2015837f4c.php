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
                            <h3 class="card-title">Inputkan Nama Pasien</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="<?php echo e(route('pasien-post')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="namapoli">Username</label>
                                    <input type="text" name="username" class="form-control " placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <label for="namapoli">Nama Pasien</label>
                                    <input type="text" name="nama" class="form-control " placeholder="Polio">
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" name="alamat" class="form-control"
                                        placeholder="alamat">
                                </div>
                                <div class="form-group">
                                    <label for="no_ktp">No Ktp</label>
                                    <input type="text" name="no_ktp" class="form-control"
                                        placeholder="no_ktp">
                                </div>
                                <div class="form-group">
                                    <label for="no_rm">No Rm</label> 
                                    <input type="hidden" name="no_rm" value="<?php echo e($urutan); ?>" >
                                    <input type="text" name="no_rm" class="form-control" value="<?php echo e($urutan); ?>" disabled>
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
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Daftar Nama Pasien</h3>

                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control float-right"
                                        placeholder="Search">

                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0" style="height: 300px;">
                            <table class="table table-head-fixed text-nowrap">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Username</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>No KTP</th>
                                        <th>No RM</th>
                                        <th>Password</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__empty_1 = true; $__currentLoopData = $pasien; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $polri): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr>
                                        <td><?php echo e($loop->iteration); ?></td>
                                        <td><?php echo e($polri->username); ?></td>
                                        <td><?php echo e($polri->nama); ?></td>
                                        <td><?php echo e($polri->alamat); ?></td>
                                        <td><?php echo e($polri->no_ktp); ?></td>
                                        <td><?php echo e($polri->no_rm); ?></td>
                                        <td><?php echo e($polri->katasandi); ?></td>
                                        <td>
                                            <div class="d-flex justify-content">
                                                <a href="<?php echo e(url('admin/pasien/' . $polri->id)); ?>" class="btn btn-primary">Edit</a>
                                                <form action="<?php echo e(url('admin/pasien/' . $polri->id)); ?>/delete" method="POST" style="margin-left: 10px;">
                                                    <?php echo csrf_field(); ?>
                                                    <button class="btn btn-danger" onclick="confirmDelete('<?php echo e(url('admin/pasien/' . $polri->id)); ?>/delete')">Hapus</button>                                                    </form>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <tr>
                                        <td>Kosong</td>
                                    </tr>
                                    <?php endif; ?>
                                
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ep/Documents/poliklink-bengkel-koding-main/resources/views/Admin/Pasien/index.blade.php ENDPATH**/ ?>