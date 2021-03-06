<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Beau+Rivage&family=Rubik+Glitch&family=Rubik+Microbe&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Serif:wght@100&display=swap" rel="stylesheet">  
    <script src="js/script.js"></script>
</head>
<body>
    
    <nav>
        <div class="containerNav"> 
            <div class="specLogo"><img class="logo" src="img/logo.png" alt=""><p>E-computer Shop</p></div>
        <a class="navItem" href="#cat">Каталог</a>
        <a class="navItem" href="#top">Топ продаж</a>
        <a class="navItem" href="#free">Акции</a>
        <a class="navItem" href="#bye">Сделать заказ</a>
        <a class="navItem" href="#cont">Связь</a>
        </div>
    </nav>
    <header>
        <div class="contHead"><h1 class="mainTitle">E-computer shop</h1>
        <h2 class="miniTitle">Интернет магазин комплектующих для персональных компьютеров</h2>
        </div>
    </header>
    <main>
        <div class="container">
            <a name="cat"></a>
            <h3 class="catalog">Каталог товаров</h3>
            <div class="cardContainer">
                <div class="card">
                    <img class="imgcard" src="img/11.png" alt="">
                    <h4 class="titleCard">Процессор AMD Ryzen 9 5950X Box, без кулера (100-100000059WOF)</h4>
                    <h3 class="coast">117 999 Р</h3>
                    <a><div class="btn" onclick="sbor('Процессор AMD Ryzen 9 5950X Box, без кулера (100-100000059WOF)',117999)"> В корзину</div></a>
                </div>
                <div class="card">
                    <img class="imgcard" src="img/10.png" alt="">
                    <h4 class="titleCard">Материнская плата MSI Z690 S1700 ATX Pro Z690-P DDR4</h4>
                    <h3 class="coast">22199Р</h3>
                    <a><div class="btn" onclick="sbor('Материнская плата MSI Z690 S1700 ATX Pro Z690-P DDR4',22199)"> В корзину</div></a>
                </div><div class="card">
                    <img class="imgcard" src="img/3.png" alt="">
                    <h4 class="titleCard">Видеокарта GIGABYTE PCIE16 RTX3060TI 8GB LHR (N306TGAMING OC-8GD 2.0)</h4>
                    <h3 class="coast">105999Р</h3>
                    <a><div class="btn" onclick="sbor('Видеокарта GIGABYTE PCIE16 RTX3060TI 8GB LHR (N306TGAMING OC-8GD 2.0)',105999)"> В корзину</div></a>
                </div><div class="card">
                    <img class="imgcard" src="img/4.png" alt="">
                    <h4 class="titleCard">Оперативная память Patriot Signature DDR3L 1600Mhz 8GB (PSD38G1600L2S)</h4>
                    <h3 class="coast">4199Р</h3>
                    <a><div class="btn" onclick="sbor('Оперативная память Patriot Signature DDR3L 1600Mhz 8GB (PSD38G1600L2S)',4199)"> В корзину</div></a>
                </div><div class="card">
                    <img class="imgcard" src="img/5.png" alt="">
                    <h4 class="titleCard">Жесткий диск Seagate Barracuda 500GB (ST500DM009)</h4>
                    <h3 class="coast">3299Р</h3>
                    <a><div class="btn" onclick="sbor('Жесткий диск Seagate Barracuda 500GB (ST500DM009)',3299)"> В корзину</div></a>
                </div><div class="card">
                    <img class="imgcard" src="img/6.png" alt="">
                    <h4 class="titleCard">Внешний твердотельный накопитель NETAC Z7S 120GB USB 3.2 (NT01Z7S-120G-32BK)</h4>
                    <h3 class="coast">4999P</h3>
                    <a><div class="btn" onclick="sbor('Внешний твердотельный накопитель NETAC Z7S 120GB USB 3.2 (NT01Z7S-120G-32BK)',4999)"> В корзину</div></a>
                </div><div class="card">
                    <img class="imgcard" src="img/7.png" alt="">
                    <h4 class="titleCard">Корпус для компьютера HIPER HG-C104 RGB Orcus</h4>
                    <h3 class="coast">4399P</h3>
                    <a><div class="btn" onclick="sbor('Корпус для компьютера HIPER HG-C104 RGB Orcus',4399)"> В корзину</div></a>
                </div><div class="card">
                    <img class="imgcard" src="img/8.png" alt="">
                    <h4 class="titleCard">Блок питания для компьютера GIGABYTE GP-P750GM</h4>
                    <h3 class="coast">7899Р</h3>
                    <a><div class="btn" onclick="sbor('Блок питания для компьютера GIGABYTE GP-P750GM',7899)"> В корзину</div></a>
                </div><div class="card">
                    <img class="imgcard" src="img/12.png" alt="">
                    <h4 class="titleCard">Вентилятор для компьютера COOLER-MASTER MasterFan MF200R RGB Led Fan (R4-200R-08FC-R1)</h4>
                    <h3 class="coast">1499Р</h3>
                    <a><div class="btn" onclick="sbor('Вентилятор для компьютера COOLER-MASTER MasterFan MF200R RGB Led Fan (R4-200R-08FC-R1)',1499)"> В корзину</div></a>
                </div>
                <div class="card">
                    <img class="imgcard" src="img/9.png" alt="">
                    <h4 class="titleCard">Оптический привод LG GP60NB60 Black</h4>
                    <h3 class="coast">3999Р</h3>
                    <a><div class="btn" onclick="sbor('Оптический привод LG GP60NB60 Black',3999)"> В корзину</div></a>
                </div>
            </div>

            <a name="top"></a>
            <h3 class="topProd">Топ продаж</h3>
            <div class="cardContainer">
                <div class="topmark">
                <div class="card cardTop">
                    <img class="imgcard" src="img/13.png" alt="">
                    <h4 class="titleCard">Кулер для процессора ABKONCORE CT405W</h4>
                    <h3 class="coast">2499Р</h3>
                    <a><div class="btn" onclick="sbor('Кулер для процессора ABKONCORE CT405W',2499)"> В корзину</div></a>
                    </div>
                    </div>
                    <div class="topmark">
                <div class="card cardTop">
                    <img class="imgcard" src="img/14.png" alt="">
                    <h4 class="titleCard">Корпус для компьютера ABKONCORE Cronos 750 (ABCRO750)</h4>
                    <h3 class="coast">3299Р</h3>
                    <a><div class="btn" onclick="sbor('Корпус для компьютера ABKONCORE Cronos 750 (ABCRO750)',3299)"> В корзину</div></a>
                </div></div>
                <div class="topmark">
                <div class="card cardTop">
                    <img class="imgcard" src="img/15.png" alt="">
                    <h4 class="titleCard">Твердотельный накопитель SILICON-POWER Slim S55 120GB (SP120GBSS3S55S25)</h4>
                    <h3 class="coast">2499Р</h3>
                    <a><div class="btn" onclick="sbor('Твердотельный накопитель SILICON-POWER Slim S55 120GB (SP120GBSS3S55S25)',2499)"> В корзину</div></a>
                </div></div>
        </div>

        <a name="free"></a>
        <h3 class="Free">Акции</h3>
            <div class="cardContainer">
                <div class="freemark">
                <div class="card cardFree">
                    <img class="imgcard" src="img/16.png" alt="">
                    <h4 class="titleCard">Оперативная память Patriot Signature DDR3L 1600Mhz 8GB (PSD38G1600L2S)</h4>
                    <h3 class="coast">3299</h3>
                    <a><div class="btn" onclick="sbor('Оперативная память Patriot Signature DDR3L 1600Mhz 8GB (PSD38G1600L2S)',3299)"> В корзину</div></a>
                    </div>
                    </div>
                    <div class="freemark">
                <div class="card cardFree">
                    <img class="imgcard" src="img/17.png" alt="">
                    <h4 class="titleCard">Жесткий диск WD 1TB Red (WD10EFRX)</h4>
                    <h3 class="coast">6599Р</h3>
                    <a><div class="btn" onclick="sbor('Жесткий диск WD 1TB Red (WD10EFRX)',6599)"> В корзину</div></a>
                </div></div>
                <div class="freemark">
                <div class="card cardFree">
                    <img class="imgcard" src="img/18.png" alt="">
                    <h4 class="titleCard">Внутренний жесткий диск WD 2TB Blue (WD20EZAZ)</h4>
                    <h3 class="coast">4299Р</h3>
                    <a><div class="btn" onclick="sbor('Внутренний жесткий диск WD 2TB Blue (WD20EZAZ)',4299)"> В корзину</div></a>
                </div></div>
        </div>

        <a name="bye"></a>
        <div class="byesect">
            <h3 class="bye">Сделать заказ</h3>
            <form action="send.php" method="post">
                <input type="text" name="name" id="" placeholder="ФИО">
                <input type="tel" name="tel" id="" placeholder="Телефон">
                <input type="email" name="mail" id="" placeholder="E-mail">
                <input type="text" name="adres" id="" placeholder="Адрес доставки">
                <div id="itog">

                </div>
                <textarea name="sms" id="" placeholder="Коментарий для курьера"></textarea>
                <button type="submit">Отправить заказ</button>

            </form>
        </div>
    </main>
    <footer>
        <a name="cont"></a>
        <div class="autor">
        <h3>Авторское право</h3>
        <p>Данный проект является курсовой работой Дарьи Рожковой, студентки 3 курса специальности Прикладная информатика (по отрослям).</p>
        <p>Исходный код разработки является авторской работой, копированию и передачи не подлежит.</p>
        </div>
        <div class="contacts">
        <p>Связаться со мной можно:</p>
        <ul>
            <li><a href="">Вконтакте</a></li>
            <li>По номеру: +7900 777 88 99</li>
        </ul>

        </div>
        <div class="fotLog">
        <img src="img/logo.png" alt="">
        <h3>E-computer Shop</h3>
    </div>
    </footer>
</body>
</html>

