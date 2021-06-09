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
        <a href="/pages/page1_1.php">1 задание</a>
        <a href="/pages/page2_1order.php">2 задание</a>
        <a href="/pages/page3.html">3 задание</a>  
    </nav>
    <article align="center">
     
<br>
<table width="100%" border="1" align="center" 
 cellpadding="4" cellspacing="0">
 
   <tr height="300em"> 
    <td valign="top"><h4>Длина платья</h4>
    <form action="page2_2bill.php" method="post" enctype="multipart/form-data">
       <p><input name="dzen" type="radio" value="Макси">Макси</p>
          <p><input name="dzen" type="radio" value="Макси со шлейфом">Макси со шлейфом</p>
             <p><input name="dzen" type="radio" value="Миди">Миди</p>
             <p><input name="dzen" type="radio" value="Мини">Мини</p>
    </td>
    
    <td valign="top"><h4>Тип платья </h4>
    <select value=""  name="type" id="type">
  <option value="Вечернее" style="font-weight:bold;">Вечернее</option></strong>
  <option value="Деловое" style="font-weight:bold;">Деловое</option>
  <option value="Платье">&nbsp;&nbsp;Платье</option>
  <option value="Брючный костюм">&nbsp;&nbsp;Брючный костюм</option>
  <option style="font-weight:bold;" value="На выпускной"><b>На выпускной</b></option>
</select>
    </td>

    <td valign="top"><h4>Вид аренды</h4>
       <p><input name="mer" type="radio" value="Фотосессия">Фотосессия</p>
          <p><input name="mer" type="radio" value="Мероприятие">Мероприятие</p>
    
    <h4>Дополнительные услуги</h4>
    <input name="check" value="check" type="checkbox"/>Подгонка по фигуре</br></br>
    <input name="check1" value="check1" type="checkbox"/>Отпаривание</br></br>
     <input name="check2" value="check2" type="checkbox"/>Упаковка</br></br>
    </td>
   </tr>
   <tr> 
    <th valign="top" align="left" height="300em" colspan="3"><p>Ваши данные</p>
<table>
  <tr>
    <td><label style="font-weight:normal;">Имя:</label></td><td><input name="name" type="text"></td>
  </tr>
    <tr>
    <td><label style="font-weight:normal;">Адрес:</label></td><td><input name="adres" type="text"></td>
  </tr>
  <tr>
    <td><label style="font-weight:normal;">E-mail:</label></td><td><input name="email" type="email"></td>
  </tr>
  <tr>
    <td>   <label style="font-weight:normal;">Количество дней:</label></td><td><input name="days" type="number"></td>
  </tr>
</table>
   </br>
  
      <label style="font-weight:normal;"> Файл с базовыми ценами: </label> <input type="file" name="file">
      <br><br><input type="submit"  value="Оформить заказ">
    </form>

    </th>
   </tr>
 
  </table>	








    </article>

   

    <footer><br>
	<p align="center">Санкт-Петербургский политехнический университет Петра Великого. 2021 год. </p>
<br>
	</footer>

</body>

</html>
