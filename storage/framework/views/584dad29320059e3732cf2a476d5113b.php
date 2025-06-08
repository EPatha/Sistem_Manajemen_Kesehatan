<?php $__env->startSection('main'); ?>
<div class="content-wrapper" style="min-height: 518.667px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Detail Pemeriksaan Poli</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Poli</a></li>
                        <li class="breadcrumb-item active">Detail Pemeriksaan</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header bg-primary">
                    <h3 class="card-title">Detail Pemeriksaan</h3>
                </div>
                <div class="card-body">
                    <center>
                        <!-- Menampilkan Nama Poli -->
                        <h5>Nama Poli</h5>
                        <p><?php echo e($riwayat->daftarPoli->jadwalPeriksa->dokter->poli->nama_poli); ?></p>
                        <hr>

                        <!-- Menampilkan Nama Dokter -->
                        <h5>Nama Dokter</h5>
                        <p><?php echo e($riwayat->daftarPoli->jadwalPeriksa->dokter->nama); ?></p>
                        <hr>

                        <!-- Menampilkan Hari -->
                        <h5>Hari</h5>
                        <p><?php echo e($riwayat->tanggal_periksa); ?></p>
                        <hr>

                        <h5>Catatan</h5>
                        <p><?php echo e($riwayat->catatan); ?></p>
                        <hr>
                        
                        <h5>Obat</h5>
                        <?php $__currentLoopData = $obat->where('id_periksa',$riwayat->id); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $o): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <p>- <?php echo e($o->obat->nama_obat); ?></p>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <hr>

                        <h5>Biaya periksa</h5>
                        <p><?php echo e($riwayat->biaya_periksa); ?></p>
                        <hr>
                    </center>
                </div>
            </div>

            <!-- Tombol Kembali -->
            <a href="<?php echo e(url('dokter/riwayat-pasien')); ?>" class="btn btn-primary btn-block">Kembali</a>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ep/Documents/poliklink-bengkel-koding-main/resources/views/Dokter/Riwayatpasien/show.blade.php ENDPATH**/ ?>