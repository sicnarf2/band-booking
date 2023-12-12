<?php $__env->startSection('content'); ?>

    <div class="table">
        <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Trainor_ID</th>
                <th>Full Name</th>
                <th>Specialty</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($trainor as $trainor): ?>

                <tr>
                    <td><?php echo e($trainor->id); ?></td>
                    <td><?php echo e($trainor->user->full_name); ?></td>
                    <td><?php echo e($trainor->specialty); ?></td>
                </tr>

                <?php endforeach; ?>
        </tbody>
    </div>
    <?php $__env->stopSection(); ?>
</body>
</html>

<?php echo $__env->make('home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/user3/Documents/Reservapeertutorial/resources/views/trainor.blade.php ENDPATH**/ ?>