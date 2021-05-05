<hmtl>
<body>
<head>
<style>
body{
    background:yellow;
}
.container{
    width:1200px;
    height:100%;
    margin:auto;
    background:white;
}
.news{
    text-align:center;
    padding-top:10vh;
    font-family:verdana;
}
.ellipsis {
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
    font-size:20px;
}



</style>
</head>
<?php        
  $a="«Было выявлено, что по сравнению 
  с февралем 2021 года по 20 позициям
   из 28 цены изменились. По 3 позициям:
    капуста белокочанная, картофель и рис,
     наблюдалось снижение минимальных цен в
      пределах 14,2-17,2%. По остальным 17 
      позициям цены возросли. Лидером по росту 
      цен является яблоко, минимальная цена на
       которое за 2 месяца выросла в 2 раза. 
       Существенно также возросли цены на ряд"

       
 
?>

<div class="container">
<div class="news">
<h1>Новости</h1>
<h2 class="ellipsis">
<?php
//ссылка на полный текст
$link = 'index2.php';
//Обрезка текста до 180, если он больше 500
$b = strlen($a) > 500 ? substr($a,0,180) : $a; 

//Отображение обрезанного текста, связанного с переменной b
?>
<?=$b?>
</h2>

<a href="<?= $link ?>">Читать далее</a>

</div>
</div>







</body>













</html>
