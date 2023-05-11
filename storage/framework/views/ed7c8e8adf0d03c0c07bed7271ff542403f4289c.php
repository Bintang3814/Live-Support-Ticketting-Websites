

<?php $__env->startSection('title', 'Deleted Object'); ?>

<?php $__env->startSection('content'); ?>
    <h1>Deleted Object</h1>

    <div class="mt-3 d-flex justify-content-end">
        <a href="objek" class="btn btn-danger">Kembali</a>
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
                            <a href="restore-objek/<?php echo e($item->slug); ?>">Restore</a>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\teknik\resources\views/master/deleted-object.blade.php ENDPATH**/ ?>