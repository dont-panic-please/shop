<section>
    <?   
    $textLink = mysqli_connect("127.0.0.1", "mysql", "mysql", "text");
    if ($link == false)
    {
        print("Не удалось подключиться к БД" . mysqli_connect_error());
    }
    $sql_query = 'SELECT title, descr FROM items';
    $mylink = mysqli_query($link, $sql_query);

    $items_table = mysqli_fetch_all($mylink, MYSQLI_ASSOC);
    foreach ($items_table as $item)
    {
    ?> 
        <div class="feed">
            <h2>
                <? print($item['name']);  ?>
            </h2>
            <p>
                <? print($item['descr']);  ?>
            </p>
        </div>
    <? 
    }
    ?>
</section>