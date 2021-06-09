<?php ini_set('display_errors', 0); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div class="header">
       <br>
	<h2>Задание №2. Аренда платья</h2>
        
    </div>
    <nav>
        <a href="/pages/page2_1order.php">Назад</a>  
    </nav>

    <article align="center">
       <!-- <p align="center">(content)</p>-->

        
	<?php 
   $file ='../txt/text.txt';

    function readLine1($pathToFile, $index = 0) {
    if (!file_exists($pathToFile)) {
    return null;
    }

    $stream = fopen($pathToFile, 'r');
    $line = null;

    for ($i = 0; $i <= $index; $i++) {
        if ($index > 0) {
         fgets($stream);
        }

        if ($i == $index) {
         $line = fgets($stream);
        }
    }

    fclose($stream);
    return $line;
}

$str1= readLine1($file, 2); 
$strWithoutChars1 = preg_replace('/[^0-9]/', '', $str1);


$str2= readLine1($file, 3);  
$strWithoutChars = preg_replace('/[^0-9]/', '', $str2);?>
 <p>Базовая цена аренды (в рублях): <?php echo $strWithoutChars1;  ?></p>
  <p>Базовая цена услуг (в рублях): <?php echo $strWithoutChars;  ?></p>
<table width="100%" height="600em" border="1" align="center" 
 cellpadding="4" cellspacing="0">
    <tr>
        <td> Тип платья:</td>
        <td>
            <?php 
           

            $type = $_POST['type']; 
            if($type=="Деловое") {$type="Платье";}
        echo($type);
        ?>
        </td>

        <td>Наценка: <?php if($type=="Вечернее"){$e="100"; echo($e);  echo('. Есть укороченные модели.'); } 
        if($type=="Платье"){$e="0"; echo($e);  echo('. Используются материалы первого класса, из льна, шёлка и бархата.'); } 
        if($type=="Брючный костюм"){$e="50"; echo($e); echo('. Возможно отрегулировать длину брюк.');}
        if($type=="На выпускной"){$e="10"; echo($e); echo('. Большинство платьев с корсетом.');}
        
        
        ?>
      
        </td>
    </tr>
    <tr>
        <td>Длина:</td>
        <td> <?php $dlin = $_POST['dzen']; 
        echo($dlin);
        ?></td>
        <td>Наценка: <?php if($dlin=="Миди"){$r="50";} 
        if($dlin=="Мини"){$r="0";} if($dlin=="Макси со шлейфом"){$r="150";} 
        if($dlin=="Макси"){$r="100";}
        echo($r);
        
        ?></td>
    </tr>
    <tr>
        <td>Дополнительные услуги:</td>
        <td><?php 
        $dop=0;$dop1=0;$dop3=0;
        if($_POST['check'] == 'check') {echo('Подгонка по фигуре');$dop=80;} ?></br>
        <?php if($_POST['check1'] == 'check1') {echo('Отпаривание'); $dop1=30;} ?></br>
        <?php if($_POST['check2'] == 'check2') {echo('Упаковка'); $dop3=0; } ?></br>
        </td>
        <td><?php if($_POST['check'] == 'check') { echo($dop); }?></br>
            <?php if($_POST['check1'] == 'check1') {echo($dop1); } ?></br>
            <?php if($_POST['check2'] == 'check2') {echo($dop3); } ?></br>
        </td>
    </tr>
    <tr>
        <td>Вид аренды:</td>
        <td colspan="2"><?php 
         
            $mer = $_POST['mer']; 
            if($mer=="Фотосессия"){ echo($mer);  echo('. Добавить аксессуары для съемки.');}
                if($mer=="Мероприятие"){ echo($mer);  echo('. Возможно будет на улице.');}
        
        ?></td>
    </tr>
    <tr>
        <td>Фамилия заказчика:</td>
        <td colspan="2"><?php 
            
            $name = $_POST['name']; 
           
        echo($name);
        ?></td>
    </tr>
    <tr>
        <td>Адрес:</td>
        <td colspan="2"><?php 
            
            $adres = $_POST['adres']; 
           
        echo($adres);
        ?></td>
    </tr>
    <tr>
        <td>E-mail:</td>
        <td colspan="2"><?php 
            
            $email = $_POST['email']; 
           
        echo($email);
        ?></td>
    </tr>
    <tr>
        <td>Количество дней:</td>
        <td colspan="2"><?php 
            
            $days = $_POST['days']; 
           
        echo($days);
        ?></td>
    </tr>
    <tr>
        <td>Итого:</td>
        <td colspan="2">
            <?php $sum=$days*($r+$e+$dop3+$dop1+$dop+$strWithoutChars+$strWithoutChars1);
            if($mer=='Мероприятие'){$sum=$sum*1.5;}
            echo('Цена за '); echo($days); echo(' дней/дня аренды - '); echo($sum);echo(' рублей');
            ?>
        </td>
    </tr>
</table>









    </article>

 

    <footer><br>
	<p align="center">Санкт-Петербургский политехнический университет Петра Великого. 2021 год. </p>
<br>
	</footer>

</body>

</html>
