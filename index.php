<?php
require("components/header.php");

$textLink = mysqli_connect("127.0.0.1", "mysql", "mysql", "text");
if ($textLink == false)
{
    print("Не удалось подключиться к БД" . mysqli_connect_error());
}

$sql_query = 'SELECT id, cite, bq FROM blockquote WHERE id = 1';
$bq_link = mysqli_query($textLink, $sql_query);

$bq_table = mysqli_fetch_array($bq_link);
?>
<section>
    <h1>Компания Rocket — признанный лидер на рынке</h1>
    <img class="front-page" src="img/rocket_front_page.jpg" alt="Взлёт ракеты">
    <h1>Цитата</h1>
    <blockquote>
         <? print($bq_table['bq']); ?>         
        <cite> <? print($bq_table['cite']); ?> </cite>
    </blockquote>
</section>
<?php
require("components/footer.php");
?>