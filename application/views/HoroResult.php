<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HoroResult</title>


</head>
<body>
    

    

    <div class="container">
        <h1>Horoscope Result!</h1>
        <br>


        <?php 
        $response1_data = json_decode($response1);
        // echo $response1_data;
        // echo $response1.'<br>'.$response2;
        // echo $response1;
        // echo $response1_data->ascendant;

        echo "<p>Ascendant Sign : ".$response1_data->ascendant."</p> <br>";
        echo "<p>Ascendant Lord : ".$response1_data->ascendant_lord."</p> <br>";
        echo "<p>Sign : ".$response1_data->sign."</p> <br>";
        echo "<p>Tatva: ".$response1_data->tatva."</p> <br>";
        echo "<p>Name's Starting Alphabet: ".$response1_data->name_alphabet."</p> <br>";
        echo "<p>Tithi: ".$response1_data->Tithi."</p> <br>";
        echo "<p>Sign Lord: ".$response1_data->SignLord."</p> <br>";
        echo "<p>Naksahtra: ".$response1_data->Naksahtra."</p> <br>";
        echo "<p>Naksahtra Lord: ".$response1_data->NaksahtraLord."</p> <br>";
        
        ?>

    </div>

</body>
</html>