

<?php $__env->startSection('title', 'Data User'); ?>

<?php $__env->startSection('content'); ?>
    <h1>Data User</h1>

    <div class="mt-3 d-flex justify-content-end">
        <a href="add-user" class="btn btn-primary">Tambah User</a>
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
            <tbody>
                <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="align-middle">
                        <td><?php echo e($loop->iteration); ?></td>
                        <td><?php echo e($data->username); ?></td>
                        <td><?php echo e($data->name); ?></td>
                        <td><?php echo e($data->phone); ?></td>
                        <td><?php echo e($data->email); ?></td>
                        <td><?php echo e($data->rname); ?></td>
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
<?php echo $__env->make('layouts.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\teknik\resources\views/master/user.blade.php ENDPATH**/ ?>