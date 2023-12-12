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
            <?php foreach($trainor as $trains): ?>

                <tr>
                    <td><?php echo e($trains->id); ?></td>
                    <td><?php echo e($trains->user->full_name); ?></td>
                    <td><?php echo e($trains->specialty); ?></td>
                </tr>

                <?php endforeach; ?>
        </tbody>
    </div>
    <?php $__env->stopSection(); ?>
</body>
</html>
<?php echo $__env->make('home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/user3/Documents/peer/Reservapeertutorial/resources/views/Trainor/index.blade.php ENDPATH**/ ?>