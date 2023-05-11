

<?php $__env->startSection('title', 'Add User'); ?>

<?php $__env->startSection('content'); ?>

    <h1>Tambah User</h1>

    <div class="mt-4">
        <form action="add-user" method="post">
            <?php echo csrf_field(); ?>
            <div class="mt-2">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" id="username" class="form-control" style="width: 30%" placeholder="Username">
            </div>
            <div class="mt-2">
                <label for="name" class="form-label">Password</label>
                <input type="password" name="password" id="password" class="form-control" style="width: 30%" placeholder="Password">
            </div>
            <div class="mt-2">
                <label for="name" class="form-label">Nama Pengguna</label>
                <input type="text" name="name" id="name" class="form-control" style="width: 30%" placeholder="Nama Pengguna">
            </div>
            <div class="mt-2">
                <label for="phone" class="form-label">No. Telp</label>
                <input type="text" name="phone" id="phone" class="form-control" style="width: 30%" placeholder="No. Telp">
            </div>
            <div class="mt-2">
                <label for="email" class="form-label">Email</label>
                <input type="text" name="email" id="email" class="form-control" style="width: 30%" placeholder="Email Pengguna">
            </div>
            <div class="mt-3">
                <button class="btn btn-success" type="submit">Add User</button>
                <a href="user" class="btn btn-danger">Batal</a>
            </div>
        </form>
    </div>

    <?php if($errors->any()): ?>
    <div class="alert alert-danger mt-2">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
    <?php endif; ?>

    <?php if(session('status')): ?>
    <div class="alert alert-danger mt-2">
        <?php echo e(session('message')); ?>

    </div>
    <?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\teknik\resources\views/master/add-user.blade.php ENDPATH**/ ?>