

<?php $__env->startSection('title', 'Hapus Objek'); ?>

<?php $__env->startSection('content'); ?>
    <h2>Apakah anda yakin ingin menghapus objek <?php echo e($object->objects_name); ?>?</h2>
    <div class="mt-3">
        <a href="/remove-object/<?php echo e($object->slug); ?>" class="btn btn-danger me-3">Ya, saya yakin</a>
        <a href="/objek" class="btn btn-primary">Batalkan</a>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\teknik\resources\views/master/delete-object.blade.php ENDPATH**/ ?>