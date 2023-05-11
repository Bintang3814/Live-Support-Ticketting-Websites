

<?php $__env->startSection('title', 'Data Teknisi'); ?>

<?php $__env->startSection('content'); ?>
    <h1>Data Teknisi</h1>

    <div class="mt-3 d-flex justify-content-end">
        <a href="add-user" class="btn btn-primary">Tambah Teknisi</a>
    </div>

    <div class="my-4">
        <table class="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Username</th>
                    <th>Nama</th>
                    <th>No. Telp</th>
                    <th>Email</th>
                    <th>Level</th>
                    <th>Action</th>
                </tr>
            </thead>
            
        </table>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\teknik\resources\views/master/teknik.blade.php ENDPATH**/ ?>