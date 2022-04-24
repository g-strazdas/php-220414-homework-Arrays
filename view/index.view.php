<!doctype html>
<html lang="lt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mokykla - mokinių pažymių vidurkiai</title>
    <link href="../style.css" rel="stylesheet"
</head>
<body>
<h1>Mokyklos mokinių pažymių vidurkiai</h1>
<section>
        <div>
            <?php setlocale(LC_CTYPE, 'lt_LT.UTF8');?>
            <?php date_default_timezone_set('Europe/Vilnius');?>
            <?php $header = array_keys($catalog['nr1']);?>
            <?php //var_dump($header); echo $header[0]?>
            <table class="tbl_loc">
                <thead>
                <tr>
                    <th><?=ucfirst($header[0]);?></th>
                    <th><?=ucfirst($header[1]);?></th>
                    <th><?=ucfirst($header[2]);?></th>
                    <th>Kontrolinių darbų vidurkis</th>
                    <th>Duomenų formavimo data</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($catalog as $number=>$student):?>
                <?php $value = array_values($student);?>
                    <tr>
                        <td><?=$value[0];?></td>
                        <td><?=ucfirst($value[1]); //Ąžuolo varto nepasitaikė, bet...?></td>
                        <td><?=mb_strtoupper($value[2], $encoding ='UTF-8');?></td>
                        <td><?=($value[3] + $value[4] + $value[5])/3;?></td>
                        <td><?=date("Y-m-d");;?></td>
                    </tr>
                <?php endforeach;?>
                </tbody>
            </table>
        </div>




</section>

</body>
</html>