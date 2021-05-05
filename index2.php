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


h2{
    font-size:20px;
}

</style>
</head>
<body>
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
       Существенно также возросли цены на ряд";

       $link = 'index.php';
?>


<div class="container">
<div class="news">

<h2>
<?=$a;?>

</h2>
<a href="<?= $link ?>">Назад</a>
</div>
</div>


</body>