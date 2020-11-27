<section>
    <?   
    $link = mysqli_connect("127.0.0.1", "mysql", "mysql", "text");
    if ($link == false)
    {
        print("Не удалось подключиться к БД" . mysqli_connect_error());
    }
    $sql_query = 'SELECT title, descr FROM news';
    $mylink = mysqli_query($link, $sql_query);

    $news_table = mysqli_fetch_all($mylink, MYSQLI_ASSOC);
    foreach ($news_table as $the_new)
    {
    ?> 
        <div class="feed">
            <h2>
                <? print($the_new['title']);  ?>
            </h2>
            <p>
                <? print($the_new['descr']);  ?>
            </p>
        </div>
    <? 
    }
    ?>
</section>