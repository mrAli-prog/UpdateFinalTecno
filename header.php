<header class="header">
    <div class="miniHeader">
    <img src="<?= $base ?>/assets/img/banner_TopGifDesktop_XVDV9z_dd8da635-159b-44c6-9865-b78988d25bd5.gif" alt="Not Load">
    </div>
    <div class="mainHeader">
        <div class="Right-mainHeader">
            <div class="overlay" id="overlay"></div>
            <div class="search-bar">
                <i class="bi bi-search"></i>
                <input id="mainSearchInput" placeholder="محصول برند یا دسته مورد نظرتان را جستجو کنید" onclick="fadeMenuSearch()" />
            </div>
            <div id="searchMenu" class="serchMenu">
                <div class="searchMenuOptin">
                    <i class="bi bi-search"></i>
                    <input placeholder="جستجو برای ..." />
                </div>
                <hr>
                <h3> جستجوهای محبوب </h3>
                <div class="swip">
                    <p> A55 </p>
                    <p> A16 </p>
                    <p> A16 </p>
                    <p> A16 </p>
                    <p> A16 </p>
                    <p> A16 </p>
                    <p> A16 </p>
                    <p> A16 </p>
                    <p> A16 </p>
                </div>
            </div>
            <a href="<?= $base ?>/#">
                 <div >
                    <img class="logo" src="/karen/TeamWeb/assets/img/logoKaren.jpg" alt="لوگو تکنولایف">
                </div>
            </a>
        </div>
        <div class="Left-mainHeader">
        <?php
            if (isset($_SESSION['user_id'])) {
                echo '<a href="#" class="login">
                        <span> ورود به پنل </span>
                      </a>';
            } else {
                echo '<a href="/karen/TeamWeb/login/index.php" class="login">
                        <span style="margin-left: 5px;"> ثبت نام </span>
                        <span> | </span>
                        <span style="margin-right: 5px;"> ورود </span>
                      </a>';
            }
        ?>
            <a href="/karen/TeamWeb/sabad.php" style="cursor: pointer;">
                <i class="bi bi-cart" onmouseover="toolTip()" onmouseleave="removetoolTip()"></i>
                <div class="tooltip tooltip-up" id="tooltip">
                    <p> سبد خرید (<span id="cart-counter"></span>)</p>
                </div>
            </a>
        </div>
    </div>
</header>
<nav class="nav">
    <div id="overlayFadeMenu" class="overlayFadeMenu"></div>
    <ul class="menuBar" id="menuBar">
        <a>
            <li id="mahsolat" class="firstchild" onclick="fadeMenu()">
                <i class="bi bi-list"></i>
                دسته بندی محصولات
            </li>
        </a>
    </ul>
    <div id="fadeMenu" class="fadeMenu" onclick="fadeMenu()">
        <ul id="fadeMenuList">
            <a href="<?= $base ?>/#">
                <li class="menu-item" onmouseover="mouseOver()">
                    <div class="ico">
                        <i class="bi bi-phone"></i>
                        <p> موبایل </p>
                    </div>
                    <div class="arrow"> <i class="bi bi-arrow-left-short"></i> </div>
                </li>
            </a>
            <hr>
            <a href="<?= $base ?>/#">
                <li class="menu-item">
                    <div class="ico">
                        <i class="bi bi-phone"></i>
                        <p> لب تاب تبلت </p>
                    </div>
                    <div class="arrow"> <i class="bi bi-arrow-left-short"></i> </div>
                </li>
            </a>
            <hr>
            <a href="<?= $base ?>/#">
                <li class="menu-item">
                    <div class="ico">
                        <i class="bi bi-phone"></i>
                        <p> هندزفری </p>
                    </div>
                    <div class="arrow"> <i class="bi bi-arrow-left-short"></i> </div>
                </li>
            </a>
            <hr>
            <a href="<?= $base ?>/#">
                <li class="menu-item">
                    <div class="ico">
                        <i class="bi bi-phone"></i>
                        <p> ساعت و بند هوشمند </p>
                    </div>
                    <div class="arrow"> <i class="bi bi-arrow-left-short"></i> </div>
                </li>
            </a>
            <hr>
            <a href="<?= $base ?>/#">
                <li class="menu-item">
                    <div class="ico">
                        <i class="bi bi-phone"></i>
                        <p> تجهیزات اداری </p>
                    </div>
                    <div class="arrow"> <i class="bi bi-arrow-left-short"></i> </div>
                </li>
            </a>
            <hr>
        </ul>
    </div>
    <div id="fadeMenuPhone" class="fadeMenuItem">
        <h3> موبایل </h3>
        <ul>
            <a href="<?= $base ?>/#">
                <li>
                    موبایل
                </li>
            </a>
            <a href="<?= $base ?>/#">
                <li>
                    گوشی موبایل
                </li>
            </a>
            <a href="<?= $base ?>/#">
                <li>
                    مویابل بر اساس عملکرد
                </li>
            </a>
            <a href="<?= $base ?>/#">
                <li>
                    گوشی بر اساس حافظه
                </li>
            </a>
        </ul>
    </div>
</nav>

<div id="cartModal" class="modal" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">سبد خرید شما</h5>
                <button type="button" class="btn-close" onclick="closeCart()"></button>
            </div>
            <div id="modal-body" class="modal-body">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" onclick="closeCart()">بستن</button>
            </div>
        </div>
    </div>
</div>