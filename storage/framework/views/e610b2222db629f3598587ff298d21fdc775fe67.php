

<?php $__env->startSection('title', 'Tambah Objek'); ?>

<?php $__env->startSection('content'); ?>

    <h1>Tambah Objek</h1>

    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <div class="mt-4">
        <form action="add-objek" method="post">
            <?php echo csrf_field(); ?>
            <div class="mt-2">
                <label for="objects_name" class="form-label">Nama Objek</label>
                <input type="text" name="objects_name" id="objects_name" class="form-control" style="width: 30%" placeholder="Isi Nama Object">
            </div>
            <div class="mt-3">
                <button class="btn btn-success" type="submit">Add New Object</button>
                <a href="objek" class="btn btn-danger">Batal</a>
            </div>
        </form>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\teknik\resources\views/master/add-object.blade.php ENDPATH**/ ?>