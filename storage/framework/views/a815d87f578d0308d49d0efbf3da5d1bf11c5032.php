

<?php $__env->startSection('title', 'Data Object'); ?>

<?php $__env->startSection('content'); ?>
    <h1>Data Objek</h1>

    <div class="mt-3 d-flex justify-content-end">
        <a href="deleted-objek" class="btn btn-secondary me-3">Data Terhapus</a>
        <a href="add-objek" class="btn btn-primary">Tambah Objek</a>
    </div>

    <div class="mt-3">
        <?php if(session('status')): ?>
            <div class="alert alert-success">
                <?php echo e(session('status')); ?>

            </div>
        <?php endif; ?>
    </div>

    <div class="my-4">
        <table class="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Objek</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $object; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="align-middle">
                        <td><?php echo e($loop->iteration); ?></td>
                        <td><?php echo e($item->objects_name); ?></td>
                        <td>
                            <a href="update-object/<?php echo e($item->slug); ?>">Edit</a>
                            <a href="delete-object/<?php echo e($item->slug); ?>">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\teknik\resources\views/master/object.blade.php ENDPATH**/ ?>