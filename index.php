<!DOCTYPE html>
<html lang="ru">

<head>
    <?php
    $website_title = 'Магазин одежды XWEAR';
    require 'blocks/head.php';
    ?>
</head>

<body>
    <header class="header">
        <div class="header__container">
            <!-- Логотип -->
            <div class="header__logo">
                <a href="/index.php" class="header__logo-link">
                    <img src="img/logo.png" alt="Логотип" class="header__logo-image">
                </a>
            </div>

            <!-- Каталог -->
            <nav class="header__nav">
                <ul class="header__list">
                    <li class="header__item">
                        <a href="#" class="header__link">Одежда</a>
                        <ul class="header__sub-list">
                            <li class="header__sub-item"><a href="#" class="header__sub-link">Куртки</a></li>
                            <li class="header__sub-item"><a href="#" class="header__sub-link">Рубашки</a></li>
                            <li class="header__sub-item"><a href="#" class="header__sub-link">Футболки</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Обувь</a>
                        <ul class="header__sub-list">
                            <li class="header__sub-item"><a href="#" class="header__sub-link">Кроссовки</a></li>
                            <li class="header__sub-item"><a href="#" class="header__sub-link">Туфли</a></li>
                            <li class="header__sub-item"><a href="#" class="header__sub-link">Кеды</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Аксессуары</a>
                        <ul class="header__sub-list">
                            <li class="header__sub-item"><a href="#" class="header__sub-link">Очки</a></li>
                            <li class="header__sub-item"><a href="#" class="header__sub-link">Браслеты</a></li>
                            <li class="header__sub-item"><a href="#" class="header__sub-link">Кепки</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Бренды</a>
                        <ul class="header__sub-list">
                            <li class="header__sub-item"><a href="#" class="header__sub-link">Adidas</a></li>
                            <li class="header__sub-item"><a href="#" class="header__sub-link">Puma</a></li>
                            <li class="header__sub-item"><a href="#" class="header__sub-link">Zara</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Расчет стоимости</a>
                    <li>
                        <a href="#">Информация</a>
                        <ul class="header__sub-list">
                            <li class="header__sub-item"><a href="#" class="header__sub-link">Наш блог</a></li>
                            <li class="header__sub-item"><a href="#" class="header__sub-link">Наши контакты</a></li>
                            <li class="header__sub-item"><a href="#" class="header__sub-link">Доставка</a></li>
                            <li class="header__sub-item"><a href="#" class="header__sub-link">Оплата</a></li>
                            <li class="header__sub-item"><a href="#" class="header__sub-link">FAQ</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>

            <div class="header__right-side">
                <form action="#" method="get" class="header__search">
                    <input type="text" placeholder="Поиск по каталогу товаров" class="header__search-input">
                    <button type="submit" class="header__search-btn"></button>
                </form>
                <a href="#" class="header__favorite">
                    <button class="header__favorite-btn"></button>
                </a>
                <a href="#" class="header__cart">
                    <button class="header__cart-btn"></button>
                    <span class="header__cart-badge">2</span>
                    <span class="header__cart-total">1500 &#x20bd</span>
                </a>
            </div>
        </div>
    </header>

    <main></main>

    <footer></footer>
</body>

</html>