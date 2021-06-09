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
	<h2>Задание №1. Вычисление формул</h2>
        
    </div>
    <nav>
        <a href="/pages/page1_1.php">Назад</a>
         
    </nav>


    <article align="center">
       <!-- <p align="center">(content)</p>-->
<br><br>
 
<?php $a = $_GET['a']; ?>
<?php $b = $_GET['b']; ?>
<?php $c = $_GET['c'];
$pi = pi();
$x = ($pi*sqrt($a*$a))/(($b*$b)*$c);

?>
<?php echo("a = "); echo($a);?></br>
<?php echo("b = ");echo($b);?></br>
<?php echo("c = ");echo($c);
?></br>
<?php if($b==0 or $c==0){echo('На ноль делить нельзя!');} 
else { ?>
<br><br>
<table align="center" border="1" width="400px;">
   <tr>
    <th>a</th>
    <th>b</th>
    <th>c</th>
    <th>x</th>
   </tr>
   <tr>
    <td><?php echo($a);?></td>
   <td><?php echo($b);?></td>
   <td><?php echo($c);?></td>
   <td><?php 
$x = number_format($x, 3, ',', ' ');
    echo($x);
   ?></td>
   
  </tr>
 </table>
<?php } ?>     





    </article>

    <aside>
<h4 align="center">* * *<br><br></h4>
        <h4 align="center">Что такое уравнение? </h4>
        <p>
      Уравнение — это равенство, содержащее в себе переменную, значение которой требуется найти. Это значение должно быть таким, чтобы при его подстановке в исходное уравнение получалось верное числовое равенство. </p>
<p><br>
Значения неизвестных, при которых это равенство достигается, называются решениями или корнями данного уравнения.</p>
<p><br>
Решить уравнение означает найти множество всех его решений (корней), или доказать, что корней нет вовсе (либо нет тех, что удовлетворяют заданным условиям).
        </p>
<h4 align="center"><br><br>* * *</h4>
    </aside>

    <footer><br>
	<p align="center">Санкт-Петербургский политехнический университет Петра Великого.<br> 2021 год. </p>
<br>
	</footer>

</body>

</html>
