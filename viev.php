<?php
$server = 'localhost';
$username = 'root';
$password = '';
$dbName = 'testBd';
$connect = mysqli_connect($server, $username, $password, $dbName);

function getCheckUp($db)
{
    $req = mysqli_query($db, "SELECT * FROM checkUps");
    $results = mysqli_fetch_all($req, MYSQLI_ASSOC);
    foreach ($results as $value) {
        echo
        "<div class='swiper-slide'>
                        <div class = 'text-slide'>
                            <h1>CHECK-UP</h1>
                            <h2>$value[textOne]</h2>
                            <ul>
                                <li><span>$value[textTwo]</span></li>
                                <li><span>$value[textThree]</span></li>
                                <li><span>$value[textFour]</span></li>
                                <li><span>$value[textFive]</span></li>
                            </ul>
                            <p>Всего $value[priceNew] <s>$value[priceOld]</s></p>
                            <div class = 'buttons-block'>
                            <p class='Button'>Записаться на прием</p>
                                <a href='#' class='ButtonTwo'>Подробнее</a>
                            </div>
                        </div>
                        <img src = '$value[img]' alt = 'img$value[id]'>
                    </div>";
    }
}
?>