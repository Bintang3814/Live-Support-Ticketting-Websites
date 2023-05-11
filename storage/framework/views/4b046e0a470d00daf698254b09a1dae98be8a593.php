

<?php $__env->startSection('title', 'Create Tickets'); ?>

<?php $__env->startSection('content'); ?>
    <h1>Create Tickets</h1>

    <div class="mt-4">
        <form action="#" method="post">
            <div class="mt-2">
                <label for="id" class="form-label">ID User</label>
                <input type="text" name="id" id="id" class="form-control" style="width: 10%" placeholder="<?php echo e(Auth::user()->id); ?>" disabled>
            </div>
            <div class="mt-2">
                <label for="name" class="form-label">Nama User</label>
                <input type="text" name="name" id="name" class="form-control" style="width: 40%" placeholder="<?php echo e(Auth::user()->name); ?>" disabled>
            </div>
            <div class="mt-2">
                <label for="title" class="form-label">Judul</label>
                <input type="text" name="title" id="title" class="form-control" style="width: 40%" placeholder="Judul Tiket">
            </div>
            <div class="mt-2">
                <label for="name" class="form-label">Nama User</label>
                <input type="text" name="name" id="name" class="form-control" style="width: 40%" placeholder="<?php echo e(Auth::user()->name); ?>" disabled>
            </div>
            <div class="mt-2">
                <label for="name" class="form-label">Nama User</label>
                <input type="text" name="name" id="name" class="form-control" style="width: 40%" placeholder="<?php echo e(Auth::user()->name); ?>" disabled>
            </div>
            <div class="mt-3">
                <button class="btn btn-success">Send Ticket</button>
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\teknik\resources\views/create-tickets.blade.php ENDPATH**/ ?>