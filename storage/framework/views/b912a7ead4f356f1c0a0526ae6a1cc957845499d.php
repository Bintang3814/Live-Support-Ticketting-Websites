

<?php $__env->startSection('title', 'Create Tickets'); ?>

<?php $__env->startSection('content'); ?>
    <h1>Data Lokasi</h1>

    <div class="mt-3 d-flex justify-content-end">
        <a href="add-lokasi" class="btn btn-primary">Tambah Lokasi</a>
    </div>

    <div class="my-4">
        <table class="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Kode Ruangan</th>
                    <th>Nama Ruangan</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $lokasi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="align-middle">
                        <td><?php echo e($loop->iteration); ?></td>
                        <td><?php echo e($item->room_code); ?></td>
                        <td><?php echo e($item->room_name); ?></td>
                        <td>
                            <a href="#">Edit</a>
                            <a href="#">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\teknik\resources\views/master/lokasi.blade.php ENDPATH**/ ?>