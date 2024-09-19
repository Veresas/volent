<html>
 <head>
 <meta charset="UTF-8">
 <title>Расчетный лист</title>
 </head>
 <body>
 <style type="text/css">
 table{
 border-collapse: collapse;
 }
 td{
 width: 20%;
 border: 1px solid black;
 }
 </style>
 <h1>Зарплата и премия</h1>
 <table>
 <tr>
 <td>Фамилия</td>
 <td>Зарплата</td>
 <td>Премия</td>
 </tr>
 <?php
 $workers = array('Валентина' => 0.92, 'Тамара' => 1.02, 'Александра' => 1.6, 'Антон' => 1.3, 'Мария' => 0.65);
 $premia = 0;
 foreach ($workers as $key => $value)
 {
 if ($value >= 1){
    $premia = $value * 0.005;
    $value = $value + $premia;

 } else{
    $premia = 0;
 }
 $table .= "<tr>
 <td>{$key}</td>
 <td>{$value}</td>
 <td>{$premia}</td>
 </tr>";
 }
 echo $table; //Вывод переменной, содержащей заполнение таблицы на страницу
 echo '</table>';
 ?>
 </body>
</html>