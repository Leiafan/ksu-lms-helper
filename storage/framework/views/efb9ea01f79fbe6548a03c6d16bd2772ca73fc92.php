<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Form Validation using jQuery in Laravel</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <h2>Form Validation using jQuery</h2><br/>
    <form method="post" action="<?php echo e(url('forms')); ?>" id="form">
        <?php echo csrf_field(); ?>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="Name">Name:</label>
                <input type="text" class="form-control" name="name">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="Email">Email:</label>
                <input type="text" class="form-control" name="email">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="Number">Phone Number:</label>
                <input type="text" class="form-control" name="number">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="Min Length">Min Length(minium 5):</label>
                <input type="text" class="form-control" name="minlength">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="Max Length">Max Length(maximum 8):</label>
                <input type="text" class="form-control" name="maxlength">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="Min Value">Min Value(minium 1):</label>
                <input type="text" class="form-control" name="minvalue">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="Max Value">Max Value(maximum value 100):</label>
                <input type="text" class="form-control" name="maxvalue">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="Range">Range(minium 20, maximum 40):</label>
                <input type="text" class="form-control" name="range">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="Range">URL:</label>
                <input type="text" class="form-control" name="url">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <input type="file" name="filename">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4" style="margin-top:60px">
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </div>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<script>
    $(document).ready(function () {
        $('#form').validate({ // initialize the plugin
            rules: {
                name: {
                    required: true
                },
                email: {
                    required: true,
                    email: true
                },
                number: {
                    required: true,
                    digits: true

                },
                minlength: {
                    required: true,
                    minlength: 5

                },
                maxlength: {
                    required: true,
                    maxlength: 8

                },
                minvalue: {
                    required: true,
                    min: 1

                },
                maxvalue: {
                    required: true,
                    max: 100

                },
                range: {
                    required: true,
                    range: [20, 40]

                },
                url: {
                    required: true,
                    url: true
                },
                filename: {
                    required: true,
                    extension: "jpeg|png"
                },
            }
        });
    });
</script>
</body>
</html>
<?php /**PATH /var/www/course.loc/blog/resources/views/sa.blade.php ENDPATH**/ ?>