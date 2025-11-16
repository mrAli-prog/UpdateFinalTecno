<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    
    $base = "/karen/TeamWeb"; 
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./node_modules/bootstrap-icons/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="./assets/css/fontiran.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>phone</title>
</head>
<body onload="swipBrand();fadeMenuItem(),PhonePageCgange(),PhonePageCgangeFade(),priCeCalcNavleft('navForPriceLeft'),priCeCalcNavRight('navForPriceRight')
,ControllPrice(),closeFilte(),FilterAdd(),more(),priCeCalcNavleftLavazem('navForPriceLeftLavazem'),priCeCalcNavRightLavazem('navForPriceRightLavazem'),ControllPriceLavazem(),ClickTop()">
    <?php
        require_once('requirements/constant.php');
        require_once('requirements/config.php');
        include_once('header.php');
    ?>
    <?php
    $slug = $_GET['slug'] ?? null;
    $search = $_GET['search'] ?? null;
    $search = trim($search);
    $search_exist = strlen($search) > 0;
    $cat_id = 0;
    $cat_name = $search_exist ? 'جست و جو ` '. $search . ' `' : 'دسته بندی نامعتبر';

    if (!empty($slug)) {
        $slug_sql = "SELECT id, description FROM tbl_category WHERE slug = ?";
        if ($stmt = $conn->prepare($slug_sql)) {
            $stmt->bind_param('s', $slug);
            $stmt->execute();
            $result = $stmt->get_result();
            if ($row = $result->fetch_assoc()) {
                $cat_id = $row['id'];
                $cat_name = $row['description'];
            }
            $stmt -> close();
        }
    }
    ?>
    <div class="main">
        <div class="adrressBar">
            <a href="<?= $base ?>/index.html">فروشگاه اینترنتی تکنولایف</a>
            <p style="margin: 0 8px;">/</p>
            <a href="<?= $base ?>/list.php"><?= $cat_name ?></a>
        </div>
        <div class="SwiperBrand">
            <div class="rightBrand" id="rightBrand">
                <i class="bi bi-arrow-right-short"></i>
            </div>
            <div class="BrandContainer" id="BrandContainer">
                <a href="<?= $base ?>/list.php">ایفون</a>
                <a href="<?= $base ?>/list.php">سامسونگ</a>
                <a href="<?= $base ?>/list.php">شیاعومی</a>
                <a href="<?= $base ?>/list.php">پوکو</a>
                <a href="<?= $base ?>/list.php">ریلمی</a>
                <a href="<?= $base ?>/list.php">وان&zwnj;پلاس</a>
                <a href="<?= $base ?>/list.php">اپو</a>
                <a href="<?= $base ?>/list.php">گوگل</a>
                <a href="<?= $base ?>/list.php">اینفینیکس</a>
                <a href="<?= $base ?>/list.php">نوکیا</a>
                <a href="<?= $base ?>/list.php">موتورولا</a>
                <a href="<?= $base ?>/list.php">هواوی</a>
                <a href="<?= $base ?>/list.php">انر</a>
                <a href="<?= $base ?>/list.php">جی&zwnj;پلاس</a>
                <a href="<?= $base ?>/list.php">ارود</a>
                <a href="<?= $base ?>/list.php">جی ال ایکس</a>
                <a href="<?= $base ?>/list.php">دوجی</a>
                <a href="<?= $base ?>/list.php">هایسنس</a>
                <a href="<?= $base ?>/list.php">جیوونی</a>
                <a href="<?= $base ?>/list.php">ویوو</a>
                <a href="<?= $base ?>/list.php">بلک ویو</a>
                <a href="<?= $base ?>/list.php">بلک بری</a>
                <a href="<?= $base ?>/list.php">ناتینگ فون</a>
                <a href="<?= $base ?>/list.php">انرجایزر</a>
                <a href="<?= $base ?>/list.php">HMD</a>
                <a href="<?= $base ?>/list.php">تکنو</a>
                <a href="<?= $base ?>/list.php">داریا باند</a>
                <a href="<?= $base ?>/list.php">الکاتل</a>
                <a href="<?= $base ?>/list.php">تی سی ال</a>
                <a href="<?= $base ?>/list.php">ال جی</a>
                <a href="<?= $base ?>/list.php">بلو</a>
                <a href="<?= $base ?>/list.php">کاجیتل</a>
                <a href="<?= $base ?>/list.php">داکس</a>
                <a href="<?= $base ?>/list.php">وکال</a>
                <a href="<?= $base ?>/list.php">رنسو</a>
                <a href="<?= $base ?>/list.php">هانوفز</a>
            </div>
            <div class="leftBrand" id="leftBrand">
                <i class="bi bi-arrow-left-short"></i>
            </div>
        </div>
        <div class="MainPhone">
            <div class="bodyPhone">
                <div class="FilterTop">
                    <div class="FtlterTopDiv">
                        <i class="bi bi-card-list" style="display: flex;align-items: center;margin-left: 6px;"></i>
                        <p style="font-size: 16px;font-weight: 600;">ترتیب:</p>
                        <p class="FilterTopClick" style="color: cadetblue;" data-sort="most-sold">پرفروش‌ترین</p>
                        <p class="FilterTopClick" data-sort="price-desc">بیشترین‌قیمت</p>
                        <p class="FilterTopClick" data-sort="price-asc">کمترین‌قیمت</p>
                        <p class="FilterTopClick" data-sort="newest">جدیدترین</p>
                        <p class="FilterTopClick" data-sort="discount">بیشترین‌تخفیف</p>
                    </div>
                    <div class="BetWeenPhone" id="BetWeenPhone">
                        <p class="PBetWeenPhone" style="color: white;font-size: 16px;">مقایسه</p>
                    </div>
                    <div class="saleNumber" id="saleNumber">
                        <div>
                            <i class="bi bi-x" style="margin-left: 8px;cursor: pointer;" id="close"></i>
                            <hr style="margin-left: 10px;height: 25px;display: flex;">
                            <p style="margin-left: 8px;">شروع مقایسه</p>
                            <p class="ShowNumber" id="ShowNumber" style="margin-left: 8px;">0</p>
                        </div>
                    </div>
                </div>
                <div class="AllPro" style="margin: 10px;padding: 10px;display: flex;flex-direction: row;flex-wrap: wrap;">
                    <?php
                        $sort = $_GET['sort'] ?? 'p.sell_amount DESC';
                        $orderBy = match($sort) {
                            'price-asc' => 'p.price ASC',
                            'price-desc' => 'p.price DESC',
                            'newest' => 'p.created_at DESC',
                            'discount' => 'p.discount_value DESC',
                            default => 'p.sell_amount DESC'
                        };
                        $sqlOptions = [
                            'with_search' => [
                                'sql' => "SELECT p.* FROM tbl_products p 
                                        WHERE MATCH(p.name, p.card_info, p.description) 
                                        AGAINST(? IN NATURAL LANGUAGE MODE) 
                                        ORDER BY $orderBy",
                                'types' => 's',
                                'params' => [$search]
                            ],
                            'no_search' => [
                                'sql' => "SELECT p.* FROM tbl_products p 
                                        JOIN tbl_product_category pc ON p.product_id = pc.product_id 
                                        WHERE pc.category_id = ? 
                                        ORDER BY $orderBy",
                                'types' => 'i',
                                'params' => [$cat_id]
                            ]
                        ];
                        $config = $search_exist ? $sqlOptions['with_search'] : $sqlOptions['no_search'];
                        if ($stmt = $conn -> prepare($config['sql'])) {
                            $stmt->bind_param($config['types'], ...$config['params']);
                            $stmt -> execute();
                            $result = $stmt->get_result();
                            while ($row = $result->fetch_assoc()) {
                            $imgUrl = ltrim($row['pr_thumbnail'], './');
                            $itemName = $row['name'];
                            $itemPrice = $row['price'];
                            $amount = $row['amount'];
                            $itemId = $row['product_id'];
                            $colors = json_decode($row['colors'], true);
                            $card_info = $row['card_info'];
                            $discount_status = $row['discount_status'];
                            if ($discount_status === 1) {
                                $discount_data = $row['discount_data'];
                                $discount = json_decode($discount_data, true);
                                $discount_display = [
                                    'header' => 'flex',
                                    'footer' => 'block',
                                ];
                            }
                    ?>
                    <a href="<?= $base ?>/product/<?php echo $itemId; ?>" class="AllProCard">
                        <div class="img">
                            <img src="<?= $base ?>/<?php echo $imgUrl; ?>" alt="<?php echo $itemName; ?>">
                        </div>
                        <div class="RamAndOther">
                            <div>
                                <p>15.6</p>
                                <i class="bi bi-tv"></i>
                            </div>
                            <div>
                                <p>CORE I5</p>
                                <i class="bi bi-nvidia"></i>
                            </div>
                            <div>
                                <p>16GB</p>
                                <i class="bi bi-memory"></i>
                            </div>
                        </div>
                        <div class="caption">
                            <?php echo htmlspecialchars($itemName); ?>
                        </div>
                        <div class="Star">
                            <p>4.1</p>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <div class="PricePhone">
                            <p><?php if ($amount < 1) { echo "ناموجود"; } else {if ($discount_status === 1) {echo formatNumberFa(htmlspecialchars((100 - $discount['value'])*$itemPrice / 100));} else {echo formatNumberFa(htmlspecialchars($itemPrice));}};  ?></p>
                        </div>
                        <div class="colorForIn">
                            <p>رنگ های موجود:</p>
                            <?php
                            foreach ($colors as $color) {
                            ?>
                            <span style="width: 15px;height: 15px;background-color: <?php echo $color_display[$color]['color']; ?>;border-radius: 50%;margin-left: 8px;"></span>
                            <?php }; ?>
                        </div>
                    </a>
                    <?php
                        };
                    };
                    ?>
                    <div class="AllProCardLavazem">
                        <div class="img">
                            <a href="<?= $base ?>/#">
                                <img src="<?= $base ?>/assets/img/Lavazem-picture1.webp" alt="NotLoad">
                            </a>
                        </div>
                        <div class="RamAndOther">
                            <div>
                                <p>15.6</p>
                                <i class="bi bi-tv"></i>
                            </div>
                            <div>
                                <p>CORE I5</p>
                                <i class="bi bi-nvidia"></i>
                            </div>
                            <div>
                                <p>16GB</p>
                                <i class="bi bi-memory"></i>
                            </div>
                        </div>
                        <div class="caption">
                            <a href="<?= $base ?>/#">
                                لپ تاپ ایسوس 15.6 اینچی مدل Vivobook 15 X1504VA i5 1335U 16GB 512GB
                            </a>
                        </div>
                        <div class="Star">
                            <p>4.1</p>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <div class="PricePhone">
                            <p>36,150,000</p>
                        </div>
                        <div class="colorForIn">
                            <p>رنگ های موجود:</p>
                            <span style="width: 15px;height: 15px;background-color: aquamarine;border-radius: 50%;margin-left: 8px;"></span>
                            <span style="width: 15px;height: 15px;background-color: red;border-radius: 50%;"></span>
                        </div>
                    </div>
                    <div class="AllProCardLavazem">
                        <div class="img">
                            <a href="<?= $base ?>/#">
                                <img src="<?= $base ?>/assets/img/Lavazem-picture2.webp" alt="NotLoad">
                            </a>
                        </div>
                        <div class="RamAndOther">
                            <div>
                                <p>15.6</p>
                                <i class="bi bi-tv"></i>
                            </div>
                            <div>
                                <p>CORE I5</p>
                                <i class="bi bi-nvidia"></i>
                            </div>
                            <div>
                                <p>16GB</p>
                                <i class="bi bi-memory"></i>
                            </div>
                        </div>
                        <div class="caption">
                            <a href="<?= $base ?>/#">
                                لپ تاپ ایسوس 15.6 اینچی مدل Vivobook 15 X1504VA i5 1335U 16GB 512GB
                            </a>
                        </div>
                        <div class="Star">
                            <p>4.1</p>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <div class="PricePhone">
                            <p>36,150,000</p>
                        </div>
                        <div class="colorForIn">
                            <p>رنگ های موجود:</p>
                            <span style="width: 15px;height: 15px;background-color: aquamarine;border-radius: 50%;margin-left: 8px;"></span>
                            <span style="width: 15px;height: 15px;background-color: red;border-radius: 50%;"></span>
                        </div>
                    </div>
                    <div class="AllProCardLavazem">
                        <div class="img">
                            <a href="<?= $base ?>/#">
                                <img src="<?= $base ?>/assets/img/Lavazem-Picture3.webp" alt="NotLoad">
                            </a>
                        </div>
                        <div class="RamAndOther">
                            <div>
                                <p>15.6</p>
                                <i class="bi bi-tv"></i>
                            </div>
                            <div>
                                <p>CORE I5</p>
                                <i class="bi bi-nvidia"></i>
                            </div>
                            <div>
                                <p>16GB</p>
                                <i class="bi bi-memory"></i>
                            </div>
                        </div>
                        <div class="caption">
                            <a href="<?= $base ?>/#">
                                لپ تاپ ایسوس 15.6 اینچی مدل Vivobook 15 X1504VA i5 1335U 16GB 512GB
                            </a>
                        </div>
                        <div class="Star">
                            <p>4.1</p>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <div class="PricePhone">
                            <p>36,150,000</p>
                        </div>
                        <div class="colorForIn">
                            <p>رنگ های موجود:</p>
                            <span style="width: 15px;height: 15px;background-color: aquamarine;border-radius: 50%;margin-left: 8px;"></span>
                            <span style="width: 15px;height: 15px;background-color: red;border-radius: 50%;"></span>
                        </div>
                    </div>
                    <div class="AllProCardLavazem">
                        <div class="img">
                            <a href="<?= $base ?>/#">
                                <img src="<?= $base ?>/assets/img/LavazemPicture4.webp" alt="NotLoad">
                            </a>
                        </div>
                        <div class="RamAndOther">
                            <div>
                                <p>15.6</p>
                                <i class="bi bi-tv"></i>
                            </div>
                            <div>
                                <p>CORE I5</p>
                                <i class="bi bi-nvidia"></i>
                            </div>
                            <div>
                                <p>16GB</p>
                                <i class="bi bi-memory"></i>
                            </div>
                        </div>
                        <div class="caption">
                            <a href="<?= $base ?>/#">
                                لپ تاپ ایسوس 15.6 اینچی مدل Vivobook 15 X1504VA i5 1335U 16GB 512GB
                            </a>
                        </div>
                        <div class="Star">
                            <p>4.1</p>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <div class="PricePhone">
                            <p>36,150,000</p>
                        </div>
                        <div class="colorForIn">
                            <p>رنگ های موجود:</p>
                            <span style="width: 15px;height: 15px;background-color: aquamarine;border-radius: 50%;margin-left: 8px;"></span>
                            <span style="width: 15px;height: 15px;background-color: red;border-radius: 50%;"></span>
                        </div>
                    </div>
                    <div class="AllProCardLavazem">
                        <div class="img">
                            <a href="<?= $base ?>/#">
                                <img src="<?= $base ?>/assets/img/LavazemPicture4.webp" alt="NotLoad">
                            </a>
                        </div>
                        <div class="RamAndOther">
                            <div>
                                <p>15.6</p>
                                <i class="bi bi-tv"></i>
                            </div>
                            <div>
                                <p>CORE I5</p>
                                <i class="bi bi-nvidia"></i>
                            </div>
                            <div>
                                <p>16GB</p>
                                <i class="bi bi-memory"></i>
                            </div>
                        </div>
                        <div class="caption">
                            <a href="<?= $base ?>/#">
                                لپ تاپ ایسوس 15.6 اینچی مدل Vivobook 15 X1504VA i5 1335U 16GB 512GB
                            </a>
                        </div>
                        <div class="Star">
                            <p>4.1</p>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <div class="PricePhone">
                            <p>36,150,000</p>
                        </div>
                        <div class="colorForIn">
                            <p>رنگ های موجود:</p>
                            <span style="width: 15px;height: 15px;background-color: aquamarine;border-radius: 50%;margin-left: 8px;"></span>
                            <span style="width: 15px;height: 15px;background-color: red;border-radius: 50%;"></span>
                        </div>
                    </div>
                    <div class="AllProCardLavazem">
                        <div class="img">
                            <a href="<?= $base ?>/#">
                                <img src="<?= $base ?>/assets/img/LavazemPicture4.webp" alt="NotLoad">
                            </a>
                        </div>
                        <div class="RamAndOther">
                            <div>
                                <p>15.6</p>
                                <i class="bi bi-tv"></i>
                            </div>
                            <div>
                                <p>CORE I5</p>
                                <i class="bi bi-nvidia"></i>
                            </div>
                            <div>
                                <p>16GB</p>
                                <i class="bi bi-memory"></i>
                            </div>
                        </div>
                        <div class="caption">
                            <a href="<?= $base ?>/#">
                                لپ تاپ ایسوس 15.6 اینچی مدل Vivobook 15 X1504VA i5 1335U 16GB 512GB
                            </a>
                        </div>
                        <div class="Star">
                            <p>4.1</p>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <div class="PricePhone">
                            <p>36,150,000</p>
                        </div>
                        <div class="colorForIn">
                            <p>رنگ های موجود:</p>
                            <span style="width: 15px;height: 15px;background-color: aquamarine;border-radius: 50%;margin-left: 8px;"></span>
                            <span style="width: 15px;height: 15px;background-color: red;border-radius: 50%;"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="about-Tecno" id="about-Tecno">
                <h1>فروشگاه اینترنتی تکنولایف</h1>
                <p>
                    فروشگاه اینترنتی تکنولایف سال&zwnj;ها است که به&zwnj;عنوان بزرگترین فروشگاه کالای دیجیتال مشغول فعالیت است. از آن&zwnj;جا که خرید اینترنتی همواره موجی از بی&zwnj;اعتمادی و شک را با خود به&zwnj;همراه داشته، نماد الکترونیکی می&zwnj;تواند خیال خیلی از افراد را راحت کند. <strong>تکنولایف</strong> با داشتن نماد اعتماد الکترونیکی و عضویت در سازمان صنفی رایانه&zwnj;ای کشور، همچنین عضویت در انجمن صنفی فروشگاه&zwnj;های اینترنتی، فضای ایمن برای خرید آنلاین را برای مشتریان خود ایجاد کرده است. 
                </p>
                <p>
                    شما می&zwnj;توانید خرید کالای دیجیتال مانند
                       <a href="<?= $base ?>//product/list/164_163_130/%D8%AA%D9%85%D8%A7%D9%85%DB%8C-%DA%A9%D8%A7%D9%85%D9%BE%DB%8C%D9%88%D8%AA%D8%B1%D9%87%D8%A7-%D9%88-%D9%84%D9%BE-%D8%AA%D8%A7%D9%BE-%D9%87%D8%A7"> خرید لپ تاپ </a>
                     ، گوشی موبایل در مدل&zwnj;ها و برندهای مختلف،
                       <a href="<?= $base ?>//product/list/26/%D9%84%D9%88%D8%A7%D8%B2%D9%85-%D8%AC%D8%A7%D9%86%D8%A8%DB%8C"> لوازم جانبی موبایل </a>
                      ، هدفون، و کلیه لوازم دیجیتال مدنظر خود را با بهترین قیمت، در فروشگاه تکنولایف به ثبت برسانید.
                </p>
                <h1> خرید گوشی از تکنولایف </h1>
                <p>
                    فروشگاه اینترنتی تکنولایف سال&zwnj;ها است که به&zwnj;عنوان بزرگترین فروشگاه کالای دیجیتال مشغول فعالیت است. از آن&zwnj;جا که خرید اینترنتی همواره موجی از بی&zwnj;اعتمادی و شک را با خود به&zwnj;همراه داشته، نماد الکترونیکی می&zwnj;تواند خیال خیلی از افراد را راحت کند. <strong>تکنولایف</strong> با داشتن نماد اعتماد الکترونیکی و عضویت در سازمان صنفی رایانه&zwnj;ای کشور، همچنین عضویت در انجمن صنفی فروشگاه&zwnj;های اینترنتی، فضای ایمن برای خرید آنلاین را برای مشتریان خود ایجاد کرده است. 
                </p>
                <h1>خرید گوشی سامسونگ </h1>
                <p>
                    برند کره&zwnj;ای سامسونگ، با تولید سالانه&zwnj;ی گوشی&zwnj;های پرچمدار، میان&zwnj;رده و اقتصادی، یکی از پرطرفدارترین و محبوب&zwnj;ترین برندها در میان کاربران سراسر جهان از جمله ایران است. انواع گوشی موبایل سامسونگ، مناسب کاربران گیمر، عاشقان تولید محتوا، علاقه&zwnj;مندان به عکاسی و دیگر گروه&zwnj;ها است. تنوع بالای گوشی سامسونگ در تکنولایف، این امکان را برای شما علاقه&zwnj;مندان ایجاد کرده که اقدام به 
                       <a href="<?= $base ?>//product/list/69_70_77/%DA%AF%D9%88%D8%B4%DB%8C-%D9%85%D9%88%D8%A8%D8%A7%DB%8C%D9%84-%D8%B3%D8%A7%D9%85%D8%B3%D9%88%D9%86%DA%AF-samsung"> خرید گوشی سامسونگ </a>
                    با بهترین قیمت کنید.
                </p>
                <h1>خرید گوشی اپل</h1>
                <p>
                    گوشی اپل از گرانترین گوشی&zwnj;ها، در عین حال محبوب&zwnj;ترین گوشی&zwnj;ها در تمامی دنیا محسوب می&zwnj;شود. بالا بودن
                     <a href="<?= $base ?>//product/list/69_70_73/%DA%AF%D9%88%D8%B4%DB%8C-%D9%85%D9%88%D8%A8%D8%A7%DB%8C%D9%84-%D8%A7%D9%BE%D9%84-apple"> قیمت گوشی آیفون </a>
                      انگار هیچوقت نتوانست مانع شود که افراد موبایل این برند را برای خرید انتخاب نکنند. دوربین قوی، پردازنده&zwnj;ی همه&zwnj;فن&zwnj;حریف، طراحی زیبا و
                    خیلی موارد دیگر، گوشی های این برند آمریکایی را بسیار پرطرفدار کرده و شما می&zwnj;توانید با بهترین قیمت، این گوشی&zwnj;ها را از سایت فروش گوشی تکنولایف خریداری کنید. 
                </p>
                <h1>خرید گوشی هواوی</h1>
                <p>
                    هواوی، این برند چینی، در سال ۲۰۱۲ برای جهانیان شناخته شد و توانست در زمانی کوتاه جزء چند شرکت برتر، به خصوص در فروش گوشی شود. با این که داستان&zwnj;های زیادی این برند داشت، اما باز هم طرفداران پروپاقرصی دارد. کسانی&zwnj;که هنوز هم به فکر خرید 
                       <a href="<?= $base ?>//product/list/69_70_798/%DA%AF%D9%88%D8%B4%DB%8C-%D9%85%D9%88%D8%A8%D8%A7%DB%8C%D9%84-%D9%87%D9%88%D8%A7%D9%88%DB%8C-huawei"> گوشی هواوی </a>
                     هستند. سایت خرید موبایل تکو لایف، گوشی&zwnj;های این برند را با قیمتی فوق&zwnj;العاده برای کاربران به فروش می&zwnj;رساند.
                </p>
                <h1>خرید گوشی شیائومی</h1>
                <p>
                    سازندگان چینی شیائومی نیز، با تولید انواع گوشی و 
                        <a href="<?= $base ?>//product/list/27_550_227/%D8%AA%D9%85%D8%A7%D9%85-%D8%AA%D8%A8%D9%84%D8%AA-%D9%87%D8%A7"> تبلت </a>
                     باکیفیت، توانست نظر و اعتماد خریداران گوشی را به&zwnj; خود جلب کند. شیائومی در طیف&zwnj;های مختلف برای افراد مختلف با نیازهای گوناگون، گوشی&zwnj;های خوبی را در بازه قیمتی مختلف تولید کرد. یکی از دلایلی که شیائومی جزء برندهای پرطرفدار است، مقرون&zwnj;به&zwnj;صرفه بودن قیمت گوشی های این برند نسبت به رقبا است. 
                </p>
            </div>
            <div class="more" id="more">
                <h1 id="moreH1">
                    نمایش بیشتر
                </h1>
                <i class="bi bi-caret-down-fill"></i>
            </div>
            <div class="bluFooter">
                <div class="mainBluFooter">
                    <div class="getUp">
                        <div class="img-logo">
                            <img src="<?= $base ?>/assets/img/digicala.png" alt="Not Load" style="width: 100%;object-fit: cover;">
                        </div>
                        <div class="getUpButton"  id="ToTOp">
                            <p style="display: flex;color: black;"> بازگشت به بالا </p>
                            <i style="color: black;display: flex;margin-right: 15px;" class="bi bi-caret-up-fill"></i>
                        </div>
                    </div>
                    <div class="lineFootBlue" style="display: flex;justify-content: center;align-items: center;">
                        <hr style="width: 940px;color: white;margin-left: 40px;margin-right: 60px;width: 100%;">
                    </div>
                    <div class="ulList">
                        <div class="ulRight">
                            <ul>
                                <h3> دسترسی سریع </h3>
                                <a href="<?= $base ?>/#"><li> بلاگ </li></a>
                                <a href="<?= $base ?>/#"><li> خرید گوشی</li></a>
                                <a href="<?= $base ?>/#"><li> گوشی سامسونگ</li></a>
                                <a href="<?= $base ?>/#"><li> گوشی ایفون</li></a>
                                <a href="<?= $base ?>/#"><li> گوشی شیاعومی</li></a>
                                <a href="<?= $base ?>/#"><li> گوشی پوکو</li></a>
                                <a href="<?= $base ?>/#"><li> مقایسه گوشی</li></a>
                                <a href="<?= $base ?>/#"><li> قیمت لب تاب</li></a>
                                <a href="<?= $base ?>/#"><li> هندزفری بلوتوثی</li></a>
                                <a href="<?= $base ?>/#"><li> لب تاب ایسوس</li></a>
                                <h3> پیش از خرید </h3>
                                <a href="<?= $base ?>/#"><li> راهنمای خرید اقساطی </li></a>
                                <a href="<?= $base ?>/#"><li> خرید سازمانی </li></a>
                                <a href="<?= $base ?>/#"><li> راهنمای خرید از تکنولایف </li></a>
                                <a href="<?= $base ?>/#"><li> روش های خرید از تکنولابف </li></a>
                                <a href="<?= $base ?>/#"><li> ضمانت هفت روزه تکنولایف </li></a>
                                <a href="<?= $base ?>/#"><li> شیوه ها و هزینه ارسال  </li></a>
                            </ul>
                        </div>
                        <div class="ulCenter">
                            <ul>
                                <h3>پرفروش ترین محصولات</h3>
                                <a href="<?= $base ?>/"><li> گوشی A16 </li></a>
                                <a href="<?= $base ?>/"><li> گوشی Pura70 </li></a>
                                <a href="<?= $base ?>/"><li> گوشی 14t </li></a>
                                <a href="<?= $base ?>/"><li> ایفون 16 </li></a>
                                <a href="<?= $base ?>/"><li> گوشی ردمی نوت 14 </li></a>
                                <a href="<?= $base ?>/"><li>  گوشی اس 25 سامسونگ </li></a>
                                <a href="<?= $base ?>/"><li> ساعت هوشمند </li></a>
                                <a href="<?= $base ?>/"><li>  پرینتر </li></a>
                                <a href="<?= $base ?>/"><li>  هارد اکسترنال </li></a>
                                <a href="<?= $base ?>/"><li>  لوازم خانگی </li></a>
                                <h3> پس از خرید </h3>
                                <a href="<?= $base ?>/#"><li> تضمین ریجستری </li></a>
                                <a href="<?= $base ?>/#"><li>رویه های بازگرداندن کالا </li></a>
                                <a href="<?= $base ?>/#"><li> سوالات متداول ریجستری </li></a>
                                <a href="<?= $base ?>/#"><li> رهگیری سفارش ها </li></a>
                            </ul>
                        </div>
                        <div class="ulLeft">
                            <ul>
                                <h3> درباره ما </h3>
                                <a href="<?= $base ?>/#"><li> تکنولایف در یک نگاه </li></a>
                                <a href="<?= $base ?>/#"><li>  اهداف و تعهد های ما </li></a>
                                <a href="<?= $base ?>/#"><li>  سوالات متداول </li></a>
                                <a href="<?= $base ?>/#"><li>  فروشگاه های حضوری </li></a>
                                <a href="<?= $base ?>/#"><li>  تماس با ما </li></a>
                                <h3 style="margin-top: 150px;"> قوانین و مقررات </h3>
                                <a href="<?= $base ?>/#"><li> قوانین و مقررات</li></a>
                                <a href="<?= $base ?>/#"><li>حریم خصوصی کاربران </li></a>
                                <a href="<?= $base ?>/#"><li>تکنولایف مشتریان از زبان</li></a>
                                <a href="<?= $base ?>/#"><li>تکنولایف چرا</li></a>
                            </ul>
                        </div>
                    </div>
                    <div class="lineFootBlue" style="display: flex;justify-content: center;align-items: center;margin-top: 12px;">
                        <hr style="color: white;margin-left: 40px;margin-right: 60px;width: 100%;">
                    </div>
                    <div class="connect">
                        <div class="connectUs">
                            <h3> ارتباط با ما </h3>
                            <p> تلفن : 02147708000-02191077500 </p>
                            <p> ایمیل : info@tchnolife.ir</p>
                        </div>
                        <div class="sotial">
                            <div class="sotialMain">
                                <h3 style="font-size: 20px;margin-bottom: 10px;color: white;"> شبکه های اجتماعی </h3>
                                <div class="ico" style="display: flex;flex-direction: row;font-size: 20px;">
                                    <a href="<?= $base ?>/#"><i class="bi bi-instagram" style="margin-right: 30px;"></i></a>
                                    <a href="<?= $base ?>/#"><i class="bi bi-apple"></i></a>
                                    <a href="<?= $base ?>/#"><i class="bi bi-youtube"></i></a>
                                    <a href="<?= $base ?>/#"><i class="bi bi-telegram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lineFootBlue" style="display: flex;justify-content: center;align-items: center;margin-top: 12px;">
                        <hr style="color: white;margin-left: 40px;margin-right: 60px;width: 100%;">
                    </div>
                    <div class="Namadha">
                        <div class="digiOption">
                            <a href="<?= $base ?>/#"><img src="<?= $base ?>/assets/img/NmTecno.webp" alt="Not Load"></a>
                            <a href="<?= $base ?>/#"><img src="<?= $base ?>/assets/img/NmTecnoGold.webp" alt="Not Load"></a>
                            <a href="<?= $base ?>/#"><img src="<?= $base ?>/assets/img/NmTecno1.webp" alt="Not Load"></a>
                            <a href="<?= $base ?>/#"><img src="<?= $base ?>/assets/img/NmTecnoP.webp" alt="Not Load"></a>
                        </div>
                        <div class="NamadQ">
                            <a href="<?= $base ?>/#"><img src="<?= $base ?>/assets/img/namadQ.webp" alt="Not Load"></a>
                            <a href="<?= $base ?>/#"><img src="<?= $base ?>/assets/img/namadQ1.webp" alt="Not Load"></a>
                            <a href="<?= $base ?>/#"><img src="<?= $base ?>/assets/img/namadQ2.webp" alt="Not Load"></a>
                            <a href="<?= $base ?>/#"><img src="<?= $base ?>/assets/img/namadQ3.svg" alt="Not Load"></a>
                            <a href="<?= $base ?>/#"><img src="<?= $base ?>/assets/img/namadQ4.png" alt="Not Load"></a>
                        </div>
                    </div>
                    <div class="mojavez">
                        <p style="color: white;">1391-1404 تمام حقوق مادی و معنوی این سایت متعلق به تکنولایف میباشد</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="./assets/js/app.js"></script>
    <script src="./assets/js/cart_handler.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</body>
</html>