<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UserDOB</title>


    <style>
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
    </style>

</head>
<body>
    
    <div class="container">
        <h1 style="margin-bottom: 100px;">Check out your Horoscope!</h1>

        <?= form_open('HoroResult') ?>
            <div class="form-group" style="margin-bottom: 50px;">
                <label for="dateDOB">Enter your DOB : </label>
                <!-- <?= form_input(['class' => 'form-control', 'placeholder' => 'Enter your DOB', 'name' => 'uDOB']); ?> -->
                <!-- <input type="date" name="dateFrom" value="<?php echo date('Y-m-d'); ?>" /> -->
                <?= form_input(['class' => 'form-control', 'name' => 'dateDOB', 'type' => 'date']) ?>
            </div>

            <div class="form-group">
                <?= form_submit(['type' => 'submit', 'class' => 'btn btn-default', 'value' => 'Click Me!']); ?>
            </div>
            
    </div>

</body>
</html>