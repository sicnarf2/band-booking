<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Website Title</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        .buttons {
            background-color: #343a40;
            color: #ffffff;
            padding: 10px;
            text-align: center;
        }

        h1 {
            margin: 0;
            font-size: 30px;
            font-weight: bold;
        }

        ul {
            list-style-type: none;
            padding: 0;
            display: flex;
            justify-content: space-around;
            margin-top: 10px;
        }

        li {
            margin-right: 10px;
        }

        a {
            text-decoration: none;
            color: #ffffff;
            padding: 10px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        a:hover, a.active {
            background-color: #495057;
        }

        .container {
            background-color: #ffffff;
            padding: 20px;
            margin-left: 6%;
            margin-top: 2%; 
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="buttons">
        <h1> HOME </h1>
        <ul>
            <li><a href="<?php echo e(url('/home')); ?>" class="<?php echo e(Request::is('home') ? 'active' : ''); ?>">Home</a></li>
            <li><a href="<?php echo e(url('/user')); ?>" class="<?php echo e(Request::is('user') ? 'active' : ''); ?>"> Users</a></li>
            <li><a href="<?php echo e(url('/about')); ?>" class="<?php echo e(Request::is('about') ? 'active' : ''); ?>"> Trainors </a></li>
            <li><a href="<?php echo e(url('/course')); ?>" class="<?php echo e(Request::is('course') ? 'active' : ''); ?>"> Courses </a></li>
            <li><a href="<?php echo e(url('/trainee')); ?>" class="<?php echo e(Request::is('trainee') ? 'active' : ''); ?>"> Trainee </a></li>
        </ul>
    </div>

    <div class="container">
        <?php echo $__env->yieldContent('content'); ?>
    </div>
</body>
</html>
<?php /**PATH /home/user3/Documents/peer/millan_peertutorial/resources/views/home.blade.php ENDPATH**/ ?>