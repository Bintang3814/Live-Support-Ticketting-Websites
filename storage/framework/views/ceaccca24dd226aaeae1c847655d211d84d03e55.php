

<?php $__env->startSection('title', 'Tickets'); ?>

<?php $__env->startSection('content'); ?>
    <h1>Tickets List</h1>

    <?php if(Auth::user()->role_id != 3): ?>
        <div class="mt-3 d-flex justify-content-end">
            <a href="tickets-add" class="btn btn-primary">Create Tickets</a>
        </div>
    <?php endif; ?>

    <div class="my-4">
        
        <table class="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>User</th>
                    <th>Title</th>
                    <th>Lokasi</th>
                    <th>Objek</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $tickets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="align-middle">
                        <td><?php echo e($loop->iteration); ?></td>
                        <td><?php echo e($data->name); ?></td>
                        <td><?php echo e($data->title); ?></td>
                        <td><?php echo e($data->room_name); ?></td>
                        <td><?php echo e($data->objects_name); ?></td>
                        <td>
                            <a href="" class="btn btn-warning"><?php echo e($data->sname); ?></a>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\teknik\resources\views/tickets.blade.php ENDPATH**/ ?>