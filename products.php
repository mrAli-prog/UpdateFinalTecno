<!DOCTYPE html>
<html lang="en">
    <?php 
        session_start();
        require_once('requirements/config.php');
    ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="/karen/TeamWeb/node_modules/bootstrap-icons/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/karen/TeamWeb/assets/css/fontiran.css">
    <link rel="stylesheet" href="/karen/TeamWeb/assets/css/style.css">
    <title>products</title>
</head>
<body id="body" onload="swiper(),Share()" onscroll="fadeOutScroll(),defultBody(),positionNav(),more(),moreProduct()">
    <?php
     require_once('requirements/constant.php');
     $productId = $_GET["id"];
     ?>
    <span class="BackGroundSet" id="BackGroundSet"></span>
    <div class="SharePlan" id="SharePlan">
        <div class="OnDarkBlack">
            <p>اشتراک گزاری</p>
            <i id="closeLink" class="bi bi-x-circle" style="cursor: pointer;"></i>
        </div>
        <div>
            <p style="margin-bottom: 10px;">این مطلب را با دوستان خود به اشتراک بگزارید</p>
        </div>
        <div style="display: flex;flex-direction: row;justify-content: space-around;align-items: center;width: 100%;
        border: 1px solid blue;border-radius: 12px;padding: 10px;color: darkblue;">
            <p>کپی لینک</p>
            <i class="bi bi-copy"></i>
        </div>   
    </div>
    <span class="BackGroundSetBimeh" id="BackGroundSetBimeh"></span>
    <div class="SharePlanBimeh" id="SharePlanBimeh">
        <div class="OnDarkBlackBimeh">
            <p>اطلاعات خرید بیمه نامه</p>
            <i id="closeLinkBimeh" class="bi bi-x-circle" style="cursor: pointer;"></i>
        </div>
        <div>
            <h4 style="margin-bottom: 8px;">جزئيات بیمه</h4>
            <p style="margin-bottom: 10px;font-size: 13px;">بیمه سامان بخش زیادی از خسارات حوادث زیر را جبران می‌کند:<br>
            1. سرقت انواع گوشی‌ موبایل، لپ‌تاپ، کنسول بازی و سایر لوازم الکتریکی
            <br>
            2. انواع صدمات فیزیکی مانند ضربه دیدگی، شکستگی و آب‌خوردگی غیرعمدی
            <br>
            3. آتش‌سوزی و انفجار‌های غیرعمدی
            <br>
            4. سوختگی یا نیم‌سوز شدن، القای الکتریکی، اتصال کوتاه و نوسانات ولتاژ غیرعمدی
توجه: موبایل‌های رجیستر شده و تبلت‌های سیم کارت خور رجیستر شده شامل پوشش سرقت به هر علت (کف زنی ، قاپ زنی و زورگیری) می‌باشند .
<br>
توجه: برای ثبت بیمه وارد پروفایل کاربری خود در سایت کارن شوید و اطلاعات خود شامل کد ملی و تاریخ تولد را تکمیل نمایید</p>
        </div>
        <div style="display: flex;flex-direction: row;justify-content: center;align-items: center;width: 100%;
        border: 1px solid blue;border-radius: 12px;padding: 10px;color: darkblue;">
            <p>حذف بیمه</p>
        </div>   
    </div>

    <span class="BackGroundAllDetail" id="BackGroundAllDetail"></span>
    <div class="SharePlanAllDetail" id="SharePlanAllDetail">
        <div style="display: flex;flex-direction: row;justify-content: space-between;border-bottom: 1px solid beige;padding: 15px;">
            <p>کالا به سبد خرید اضافه شد</p>
            <i id="CloseAddAllDetail" class="bi bi-x-circle" style="cursor: pointer;"></i>
        </div>
        <div class="OnDarkAllDetail">
            <img src="<?= $base ?>/assets/img/DetailA.webp" alt="NotLoad">
            <p>
                    همراهان عزیز کارن، تمام تلاشمان این است که بتوانیم سفارشات شما را در سریع‌ترین زمان به دست‌تان برسانیم. به‌همین منظور در کارن چند روش برای ارسال سفارش‌ها در نظر گرفته‌ایم که شما می توانید با توجه به موقعیت مکانی خود، یکی از این روش‌‌ها را حین ثبت سفارش انتخاب نمایید.
<br>
ارسال سریع کارن (برای مناطق 22 گانه شهر تهران)
<br>
ارسال عادی کارن (برای مناطق 22 گانه شهر تهران)
<br>
پست پیشتاز (برای سراسر کشور)
<br>
ماهکس (برای شهرهای تحت پوشش ماهکس)
<br>
باربری
<br>
همچنین امکان پرداخت در محل برای شهر تهران فعال است و امکان ارسال محصول به سراسر کشور
<br>
ارسال سریع کارن (برای مناطق 22 گانه شهر تهران)
سرویس کارن شامل مشتریان ساکن تهران و مناطق ۲۲ گانه است. شما می‌توانید حین ثبت سفارش بازه زمانی تحویل سفارش را انتخاب نمایید تا کالا مطابق با زمان انتخابی به شما تحویل گردد. درصورت ثبت سفارش تا قبل از ساعت ۱۷:۰۰ کالا همان روز به شما تحویل خواهد شد. همچنین ممکن است در برخی از روزهای تعطیل، امکان ارسال سفارشات ثبت شده در همان روز میسر نباشد.
<br>
ارسال عادی کارن (برای مناطق 22 گانه شهر تهران)
سرویس ارسال عادی کارن شامل مشتریان تهران و مناطق ۲۲گانه است. با انتخاب این روش شما سفارش خود را تا ۲۴ ساعت بعد از ثبت، دریافت خواهید کرد. این وضعیت ممکن است در روزهای تعطیل دستخوش تغییرات شود.همچنین ممکن است در برخی از روزهای تعطیل، امکان ارسال سفارشات ثبت شده در همان روز میسر نباشد.
<br>
ارسال توسط پست پیشتاز (برای سراسر کشور)
در روزهای کاری، چنانچه تا ساعت 13:30 (پنج‌شنبه‌ها تا ساعت 11:00) سفارش خود را نهایی کنید، سفارش شما همان روز تحویل مرکز پست خواهد شد. همچنین در هنگام ثبت سفارش می‌توانید زمان و ساعتی که سفارش شما تحویل شرکت پست می‌شود را مشاهده فرمایید. کد پیگیری مرسوله در قسمت جزئیات سفارش در حساب کاربری شما درج می‌شود. همچنین کد پیگیری مرسوله از طریق پیامک نیز به دست شما خواهد رسید. با استفاده از کد پیگیری پست پیشتاز می‌توانید وضعیت مرسوله خود را از سامانه رهگیری مرسولات پستی پیگیری نمایید.
<br>
ماهکس (برای سراسر کشور)
ماهکس یک سرویس حمل سریع در کشور است که در ۵۵۰ شهر ایران دارای نمایندگی بوده و با توجه به ارسال مستقیم به اکثر این شهرها روشی سریع جهت ارسال مرسوله به حساب می‌آید. در روزهای کاری، چنانچه تا ساعت 16:30 ( پنج شنبه ها تا ساعت ۱3:۰۰) سفارش خود را نهایی کنید، سفارش شما همان روز تحویل ماهکس خواهد شد. همچنین در هنگام ثبت سفارش می‌توانید زمان و ساعتی که سفارش شما تحویل شرکت ماهکس می‌شود را مشاهده فرمایید. کد پیگیری مرسوله در قسمت جزئیات سفارش در حساب کاربری شما درج می‌شود. همچنین کد پیگیری مرسوله از طریق پیامک نیز به دست شما خواهد رسید. با استفاده از کد پیگیری ماهکس می‌توانید وضعیت مرسوله خود را از سامانه رهگیری ماهکس پیگیری نمایید.
<br>
ارسال با باربری
ارسال با باربری یکی دیگر از روش‌های ارسال است که شامل کالاهای بزرگ و حجیم می‌شود. برای مثال می‌توانید برای کالاهایی مثل یخچال با ابعاد بالاتر از ۷ فوت و تلویزیون‌های با ابعاد بالاتر از ۶۵ اینچ از روش ارسال باربری استفاده کنید. پس از تحویل سفارش شما به باربری، هماهنگی‌های لازم جهت تحویل کالا در شهر مقصد با شما انجام خواهد شد.
<br>
هزینه بسته‌بندی و ارسال سریع با روش کارن: برای مناطق ۲۲گانه شهر تهران حداقل ۶۵۰۰۰ تومان است.
<br>
هزینه بسته بندی و ارسال عادی با روش کارن: برای مناطق ۲۲گانه شهر تهران حداقل ۴۵۰۰۰ تومان است.
<br>
هزینه بسته‌بندی و ارسال با روش پست پیشتاز : این هزینه باتوجه‌به وزن کالا محاسبه می‌شود؛ حداقل هزینه 70,800 تومان است.
<br>
هزینه بسته‌بندی و ارسال با روش ماهکس: این هزینه باتوجه‌به وزن کالا محاسبه می‌شود؛ حداقل هزینه 132,000 تومان است.
<br>
هزینه بسته‌بندی و ارسال با روش باربری: این هزینه باتوجه‌به وزن، ابعاد و آدرس مقصد جهت تحویل کالا محاسبه می‌شود؛ هزینه‌ای که حین ثبت سفارش نمایش داده می‌شود مبلغ پیش‌پرداخت بوده و مابقی هزینه پس از هماهنگی مامور حمل باربری به‌صورت پس‌کرایه باید پرداخت شود.
        </p>
        </div>
    </div>
    <span class="BackGroundTahvil" id="BackGroundTahvil"></span>
    <div class="SharePlanTahvil" id="SharePlanTahvil">
        <div style="display: flex;flex-direction: row;justify-content: space-between;border-bottom: 1px solid beige;
        padding: 15px;">
            <p>تحویل حضوری</p>
            <i id="CloseAllTahvil" class="bi bi-x-circle" style="cursor: pointer;"></i>
        </div>
        <div style="font-size: 13px;padding: 13px;">
            <div>
                <p style="font-size: 14px;font-weight: 600;">
                شما می‌توانید علاوه بر اینکه سفارش‌های خود را در محل موردنظرتان تحویل بگیرید، این امکان فراهم است که سفارش‌تان را در یکی از شعب کارن در شهر تهران دریافت فرمایید.
                </p>
                <p>
                    کارشناسان ما در شعب تحویل حضوری کارن آماده پاسخگویی و راهنمایی به شما برای خرید هستند.
                </p>
            </div>
            <div style="display: flex;flex-direction: column;">
                <div style="display: flex;flex-direction: column;width: 100%;margin-top: 10px;justify-content: center;align-items: center;
                margin-bottom: 10px;">
                    <div>
                        <img src="<?= $base ?>/assets/img/Shobeh.webp" alt="NotLoad">
                        <img src="<?= $base ?>/assets/img/Shobeh.webp" alt="NotLoad">
                        <img src="<?= $base ?>/assets/img/Shobeh.webp" alt="NotLoad">
                    </div>
                    <div>
                        <img src="<?= $base ?>/assets/img/Shobeh.webp" alt="NotLoad">
                        <img src="<?= $base ?>/assets/img/Shobeh.webp" alt="NotLoad">
                        <img src="<?= $base ?>/assets/img/Shobeh.webp" alt="NotLoad">
                    </div>
                </div>
            </div>
        </div>
    </div>
    
            <?php
                $sql = "SELECT * FROM tbl_products WHERE product_id = ?";
                if ($stmt = $conn->prepare($sql)) {
                    $stmt -> bind_param('s', $productId);
                    $stmt -> execute();
                    $result = $stmt->get_result();
                    while ($row = $result->fetch_assoc()) {
                    $imgUrl = ltrim($row['pr_thumbnail'], './');
                    $itemName = $row['name'];
                    $itemPrice = $row['price'];
                    $amount = $row['amount'];
                    $itemId = $row['product_id'];
                    $card_info = $row['card_info'];
                    $short_desc = $row['short_desc'];
                    $description = $row['description'];
                    $colors = json_decode($row['colors'], true);
                    $details = json_decode($row['pr_details'], true);
                    $discount_status = $row['discount_status'];
                    if ($discount_status === 1) {
                        $discount_data = $row['discount_data'];
                        $discount = json_decode($discount_data, true);
                        $discount_display = [
                            'header' => 'flex',
                            'footer' => 'block',
                        ];
                    }
                }
            ?>
    <span class="BackGroundComment" id="BackGroundComment"></span>
    <div class="SharePlanComment" id="SharePlanComment">
        <div class="OnDarkBlack">
            <p>افزودن نظر</p>
            <i class="bi bi-x-circle closeComment" style="cursor: pointer;"></i>
        </div>
        <div style="padding: 12px;font-size: 13px;display: flex;flex-direction: row;
        width: 500px;border: 1px solid beige;border-radius: 12px;margin: 0 auto;">
            <img src="<?= $base ?>/<?php echo $imgUrl; ?>" alt="<?php echo $itemName; ?>" style="width: 50px;height: 50px;">
            <p style="margin-right: 15px;"><?php echo htmlspecialchars($itemName); ?></p>
        </div>
        <div>
            <h4 style="padding: 10px;text-align: center;margin-top: 10px;">به این کالا امتیاز دهید</h4>
        </div>  
        <form class="CommentForm" action="../processors/comment_process.php?pr_id=<?= $productId ?>&action=cm_main" method="POST">
        <ul id="ratingStars" style="display: flex; justify-content: center; align-items: center; padding: 10px;margin: 5px auto;">
            <li><img src="<?= $base ?>/assets/img/RankCommentBad.webp" data-value="1" alt="NotLoad" style="width: 90px;height: 115px;"></li>
            <li><img src="<?= $base ?>/assets/img/RankCommentZaif.webp" data-value="2" alt="NotLoad" style="width: 90px;height: 115px;"></li>
            <li><img src="<?= $base ?>/assets/img/RankCommentGood.webp" data-value="3" alt="NotLoad" style="width: 90px;height: 115px;;"></li>
            <li><img src="<?= $base ?>/assets/img/RankCommentVeryGood.webp" data-value="4" alt="NotLoad" style="width: 90px;height: 115px;"></li>
        </ul> 
        <input type="hidden" name="rating" id="ratingValue">
        <div>
            <h4 style="padding: 10px;margin-right: 35px;margin-bottom: 12px;">نظر خود را در مورد این محصول بنویسید.</h4>
        </div>
            <div>
                <input type="text" placeholder="توضیحات" name="main_comment" style="width: 100%;height: 115px;border: none;border-radius: 5px;">
            </div>
            <div>
                <input type="text" placeholder="نکات منفی" name="neg_comment" style="width: 100%;height: 30px;border: none;border-radius: 5px;">
            </div>
            <div>
                <input type="text" placeholder="نکات مثبت" name="pos_comment" style="width: 100%;height: 30px;border: none;border-radius: 5px;">
            </div>
            <div style="display: flex;flex-direction: row;">
                <input type="checkbox" name="cm_anonymous" style="margin-left: 10px;width: 17px;height: 17px;display: flex;">
                <p style="font-size: 14px;font-weight: 600;">کاربر ناشناس</p>
            </div>
            <div style="margin-bottom: 15px;">
                <h5>با “ثبت نظر” موافقت خود را با قوانین انتشار نظرات در کارن اعلام می‌کنم</h5>
            </div>
            <button type="submit" name="cm_submit" style="height: 50px;justify-content: center;align-items: center;display: flex;width: 100%;
            border-radius: 13px;background-color: blue;color: white;border: none; cursor: pointer;">
                <p>ثبت نظر</p>
            </button>
        </form>
    </div>
    <span class="BackGroundComment" id="repBackGroundComment"></span>
    <div class="SharePlanComment" id="repSharePlanComment">
        <div class="OnDarkBlack">
            <p>پاسخ نظر</p>
            <i class="bi bi-x-circle closeComment" style="cursor: pointer;"></i>
        </div>
        <div style="padding: 12px;font-size: 13px;display: flex;flex-direction: row;
        width: 500px;border: 1px solid beige;border-radius: 12px;margin: 0 auto;">
            <img src="<?= $base ?>/<?php echo $imgUrl; ?>" alt="NotLoad" style="width: 50px;height: 50px;">
            <p style="margin-right: 15px;"><?php echo htmlspecialchars($itemName); ?></p>
        </div>
        <form class="CommentForm" action="../processors/comment_process.php?pr_id=<?= $productId ?>&action=cm_reply" method="POST">
            <input type="hidden" name="parent_data" id="parent_id">
        <div>
            <h4 id="parent_comment" style="padding: 10px;margin-right: 35px;margin-bottom: 12px;"></h4>
        </div>
            <div>
                <input type="text" placeholder="توضیحات" name="main_comment" style="width: 100%;height: 115px;border: none;border-radius: 5px;">
            </div>
            <div style="display: flex;flex-direction: row;">
                <input type="checkbox" name="cm_anonymous" style="margin-left: 10px;width: 17px;height: 17px;display: flex;">
                <p style="font-size: 14px;font-weight: 600;">کاربر ناشناس</p>
            </div>
            <div style="margin-bottom: 15px;">
                <h5>با “پاسخ نظر” موافقت خود را با قوانین انتشار نظرات در کارن اعلام می‌کنم</h5>
            </div>
            <button type="submit" name="cm_submit" style="height: 50px;justify-content: center;align-items: center;display: flex;width: 100%;
            border-radius: 13px;background-color: blue;color: white;border: none; cursor: pointer;">
                <p>پاسخ نظر</p>
            </button>
        </form>
    </div>
    <span class="BackGroundSetBimeh" id="BackGroundSetBimeh"></span>
    <div class="SharePlanBimeh" id="SharePlanBimeh">
        <div class="OnDarkBlackBimeh">
            <p>اطلاعات خرید بیمه نامه</p>
            <i id="closeLinkBimeh" class="bi bi-x-circle" style="cursor: pointer;"></i>
        </div>
        <div>
            <h4 style="margin-bottom: 8px;">جزئيات بیمه</h4>
            <p style="margin-bottom: 10px;font-size: 13px;">بیمه سامان بخش زیادی از خسارات حوادث زیر را جبران می‌کند:<br>
            1. سرقت انواع گوشی‌ موبایل، لپ‌تاپ، کنسول بازی و سایر لوازم الکتریکی
            <br>
            2. انواع صدمات فیزیکی مانند ضربه دیدگی، شکستگی و آب‌خوردگی غیرعمدی
            <br>
            3. آتش‌سوزی و انفجار‌های غیرعمدی
            <br>
            4. سوختگی یا نیم‌سوز شدن، القای الکتریکی، اتصال کوتاه و نوسانات ولتاژ غیرعمدی
توجه: موبایل‌های رجیستر شده و تبلت‌های سیم کارت خور رجیستر شده شامل پوشش سرقت به هر علت (کف زنی ، قاپ زنی و زورگیری) می‌باشند .
<br>
توجه: برای ثبت بیمه وارد پروفایل کاربری خود در سایت کارن شوید و اطلاعات خود شامل کد ملی و تاریخ تولد را تکمیل نمایید</p>
        </div>
        <div style="display: flex;flex-direction: row;justify-content: center;align-items: center;width: 100%;
        border: 1px solid blue;border-radius: 12px;padding: 10px;color: darkblue;">
            <p>حذف بیمه</p>
        </div>   
    </div>
    <?php require_once('header.php') ?>
    <div class="main">
        <div class="addressBar">
            <ul>
                <li>
                    <a href="#">فروشگاه اینترنی کارن</a>
                </li>
                <p>/</p>
                <li>
                    <a href="#">گوشی موبایل</a>
                </li>
                <p>/</p>
                <li>
                    <a href="#">گوشی سامسونگ</a>
                </li>
                <p>/</p>
                <li>
                    <a href="#">     
                        گوشی موبایل سامسونگ A56 5G
                    </a>
                </li>
            </ul>
        </div>

        <div class="products">
            <div class="productDetail">
                <div class="left">
                    <div class="CommentionDiv">
                        <h4 style="margin-bottom: 15px;"><?php echo htmlspecialchars($itemName); ?></h4>
                        <h5 style="margin-bottom: 15px;"><?php echo htmlspecialchars($card_info); ?></h5>
                        <div class="commentionDiv">
                            <h6>نظرات کاربران </h6>
                            <h6 style="margin-right: 10px;color: blue;">6 نظر</h6>
                        </div>
                        <hr class="noneHr" style="margin-top: 15px;width: 115px;color: darkgray;">
                    </div>
                    <div>
                        <div class="JustifyCenter" style="display: flex;flex-direction: row;margin-top: 12px;align-items: center;text-align: center;">
                            <p style="font-size: 12px;display: flex;align-items: center;text-align: center;">رنگ :</p>
                            <p id="color_name" style="margin-right: 5px;display: flex;align-items: center;text-align: center;">انتخاب نشده</p>
                        </div>
                        <div data-id="" class="ColorPro" style="display: flex;flex-direction: row;margin-top: 10px;">
                            <?php
                            foreach($colors as $color){
                            ?>
                            <div onclick="doColorAction('<?php echo $color_display[$color]['color']; ?>_<?php echo $color; ?>', '<?php echo $color_display[$color]['text']; ?>', '<?php echo $color; ?>')" class="<?php echo $color_display[$color]['color']; ?>_<?php echo $color; ?> ">
                                <span style="background-color: <?php echo $color_display[$color]['color']; ?>;"></span>
                                <p><?php echo $color_display[$color]['text']; ?></p>
                            </div>
                            <?php  }; ?>
                        </div>
                    </div>
                    <hr style="margin-top: 15px;width: 100%;color: darkgray;">
                    <div style="margin-top: 40px;margin-bottom: 15px;">
                        <h5>ویژگی های اصلی</h5>
                        <div class="bodyStar" style="overflow: hidden;border-radius: 20px;">
                        <?php
                        foreach($details as $detail){
                        ?>
                            <div>
                                <p><?php echo $detail['title']; ?> :</p>
                                <p class="bodyStarP"><?php echo $detail['text']; ?></p>
                            </div>
                            <?php  }; ?>
                        </div>
                    </div>
                </div>
                <div class="right">
                    <div>
                        <div class="imgUnderIconis">
                            <img src="<?= $base ?>/<?php echo $imgUrl; ?>" alt="NotLoad">
                        </div>
                    </div>
                        <div class="FiveImg">
                            <?php
                            $imgsql = "SELECT * FROM product_images WHERE product_id = ?";
                            if ($stmt = $conn->prepare($imgsql)) {
                            $stmt -> bind_param('s', $productId);
                            $stmt -> execute();
                            $result = $stmt->get_result();
                            while ($row = $result->fetch_assoc()) {
                                $image_path = ltrim($row['image_path'], './');
                            ?>
                            <div class="img_list_thumbnail"><img onclick="setThumbnailIMG('<?php echo $image_path; ?>')" src="<?= $base ?>/<?php echo $image_path; ?>" alt="NotLoad"></div>
                            <?php
                                };
                            };
                            ?>
                        </div>
                </div>
            </div>
            <div style="display: flex;flex-direction: column;justify-content: center;align-items: center;" class="productSideBar">
                <div class="productMainSide">
                <div class="threeBlue">
                    <div class="threeBlueMain2">
                        <i style="margin-left: 5px;" class="bi bi-gear"></i>
                        <p style="margin-left: 5px;">ارزیابی عملکرد:</p>
                        <p>عالی</p>
                    </div>
                    <div class="threeBlueMain3">
                        <i style="margin-left: 5px;" class="bi bi-building-check"></i>
                        <p>18 ماه گارانتی شرکتی</p>
                    </div>
                </div>
                <div class="PriceInSideBar">
                    <div class="freePriceProduct" style="display: <?php echo $discount_display['header'] ?>;">
                        <p><?php echo htmlspecialchars(formatNumberFa(($discount['value'])*$itemPrice / 100)); ?> تومان تخفیف</p>
                    </div>
                    <div style="display: flex;flex-direction: row;margin-top: 15px;">
                        <p style="margin-right: 30px;direction: rtl;font-size: 18px;"><?php if ($amount < 1) { echo "ناموجود"; } else {if ($discount_status === 1) {echo formatNumberFa(htmlspecialchars((100 - $discount['value'])*$itemPrice / 100));} else {echo formatNumberFa(htmlspecialchars($itemPrice));}};  ?> تومان</p>
                        <p style="display: <?php echo $discount_display['footer'] ?>; color: darkgray;text-decoration: line-through;font-size: 16px;"><?php echo htmlspecialchars(formatNumberFa($itemPrice)) ?></p>
                    </div>
                </div>
                <div class="buttonBasketSale" id="buttonBasketSale" data-id = "<?php echo $itemId; ?>" onclick="startCounter('<?php echo $itemId; ?>')">
                    <div><p class="add_to_cart_txt">افزودن به سبد خرید</p></div>
                    <div><i class="bi bi-cart"></i></div>
                </div>
                </div>
            </div>
        </div>
        <?php 
                };
        ?>
        <div class="icons">
            <div>
                <a href="#">
                    <img src="<?= $base ?>/assets/img/icoproPage.svg" alt="NotLoad">
                    <p>7 روز ضمانت بازگشت کالا</p> 
                </a>
            </div>
            <div>
                <a href="#">
                    <img src="<?= $base ?>/assets/img/icoProPage2.svg" alt="NotLoad">
                    <p>پرداخت اقساطی</p>  
                </a>
            </div>
            <div>
                <a href="#">
                    <img src="<?= $base ?>/assets/img/icoProPage4.svg" alt="NotLoad">
                    <p>ضمانت اصالت کالا</p> 
                </a>
            </div>
            <div>
                <a href="#">
                    <img src="<?= $base ?>/assets/img/icoProPage1.svg" alt="NotLoad">
                    <p>پرداخت در محل</p> 
                </a>
            </div>
        </div>
        <div class="swiperForYou" id="swiperForYou">
            <div class="cardTitle">
                <h3 style="margin-right: 20px;">برای نیاز تو</h3>
            </div>
            <div class="arrowLeft">
                    <i id="leftSwipArrow" class="left-amazing bi bi-caret-left-fill"></i>
            </div>
            <div class="SwipProductContainer" id="SwipProductContainer">
                <?php
                $orderBy = 'p.sell_amount DESC';
                $sql = "SELECT p.* FROM tbl_products p WHERE MATCH(p.name, p.card_info, p.description) AGAINST(? IN NATURAL LANGUAGE MODE) AND p.amount > 0 ORDER BY $orderBy";
                if ($stmt = $conn -> prepare($sql)) {
                    $stmt->bind_param('s', $itemName);
                    $stmt -> execute();
                    $result = $stmt->get_result();
                    while ($row = $result->fetch_assoc()) {
                    // if ($row['name'] !== $itemName) {
                    $itemnm = $row['name'];
                    $imginfo = ltrim($row['pr_thumbnail'], './');
                    $itemPrice = $row['price'];
                    $itemId = $row['product_id'];
                    $discount_status = $row['discount_status'];
                ?>
                <div class="card">
                    <a href="<?= $base ?>/product/<?php echo $itemId; ?>">
                        <div class="img">
                            <img src="<?= $base ?>/<?php echo $imginfo; ?>" alt="NotLoad">
                        </div>
                        <div class="caption">
                            <p>
                                <?php echo $itemnm; ?>
                            </p>
                        </div>
                    </a>
                    <div class="price">
                        <p><?php if ($discount_status === 1) {echo formatNumberFa(htmlspecialchars((100 - $discount['value'])*$itemPrice / 100));} else {echo formatNumberFa(htmlspecialchars($itemPrice));} ?></p>
                        <p style="margin-right: 8px;">تومان</p>
                    </div>
                    <div class="addBsket" data-id = "<?php echo $itemId; ?>" onclick="startCounter('<?php echo $itemId; ?>')">
                        <div class="addbuttonToBasket" style="display: flex;justify-content: center;align-items: center;color: crimson;cursor: pointer;">
                            <p class="add_to_cart_txt">افزودن به سبد</p>
                            <i class="bi bi-cart3" style="margin-right: 12px;"></i>
                        </div>
                    </div>
                </div>
                <?php 
                    } } 
                ?>
            </div>
            <div class="arrowRight">
                    <i id="rightSwipArrow" class="right-amazing bi bi-caret-right-fill"></i>
            </div>
        </div>
        <div class="tabSelect" id="tabSelect">
            <section id="secMosh">
                <p>مشخصات فنی</p>
            </section>
            <section id="secNaghd">
                <p>نقدوبررسی</p>
            </section>
            <section id="secComment">
                <p>نظرات کاربران</p>
            </section>
        </div>
        <div class="bodyTab">
            <div class="cardBodyTab" id="cardBodyTab">
                <div class="CardColumnBoTab" style="">
                    <div class="BodyCardImgStyle" style="width: 300px;height: 300px;">
                        <img src="<?= $base ?>/<?php echo $imgUrl; ?>" alt="NotLoad" style="width: 100px;height: 100px;margin-left: 10px;">
                    </div>
                    <div class="ColorPallete" style="display: flex;flex-direction: column;font-size: 14px;">
                        <p style="margin-bottom: 15px;"><?php echo htmlspecialchars($itemName); ?> </p>
                        <?php
                        foreach($colors as $color){
                        ?>
                        <div onclick="doColorAction('<?php echo $color_display[$color]['color']; ?>_<?php echo $color; ?>', '<?php echo $color_display[$color]['text']; ?>', '<?php echo $color; ?>')" class="miniSquere <?php echo $color_display[$color]['color']; ?>_<?php echo $color; ?>">
                            <span style="width: 10px;height: 10px;background-color: <?php echo $color_display[$color]['color']; ?>;border-radius: 50%;margin-left: 10px;"></span>
                            <p><?php echo $color_display[$color]['text']; ?></p>
                        </div>
                        <?php }; ?>
                    </div>
                </div>
                <div style="margin-top: 20px;">
                    <div>
                        <i class="bi bi-shop-window" style="margin-left: 10px;color: blue;"></i>
                        <a href="#"> کارن</a>
                    </div>
                    <div style="display: flex;flex-direction: row;font-size: 13px;margin-bottom: 18px;border-bottom: 1px solid darkgray;
                    padding: 8px 0px;color: blue;">
                        <i class="bi bi-building-check" style="margin-left: 10px;"></i>
                        <p>موجود در انبار کارن</p>
                        <p>(ارسال سریع)</p>
                    </div>
                </div>
                <div style="display: flex;flex-direction: row;align-items: center;font-size: 13px;margin-bottom: 20px;">
                    <i class="bi bi-building-check" style="margin-left: 10px;"></i>
                    <p>18 ماه گارانتی شرکتی</p>
                </div>
                <div style="direction: ltr;margin-bottom: 18px;">
                    <div class="PricebodyCard" >
                        <p><?php echo htmlspecialchars(formatNumberFa(($discount['value'])*$itemPrice / 100)); ?></p>
                        <p>تومان تخفیف</p>
                    </div>
                    <div class="RealyPrice">
                        <p style="margin-right: 5px;">تومان</p>
                        <p><?php if ($amount < 1) { echo "ناموجود"; } else {if ($discount_status === 1) {echo formatNumberFa(htmlspecialchars((100 - $discount['value'])*$itemPrice / 100));} else {echo formatNumberFa(htmlspecialchars($itemPrice));}};  ?></p>
                        <p style="color: grey;text-decoration: line-through;"><?php echo formatNumberFa(htmlspecialchars($itemPrice)); ?></p>
                    </div>
                </div>
            </div>
            <div class="Moshakhasat" id="Moshakhasat">
                <div class="titleMoshakhasat">
                    <span></span>
                    <p style="font-size: 18px;font-weight: 700;">مشخصات فنی</p>
                </div>
                <?php
                foreach($details as $detail){
                ?>
                <div class="row5">
                    <p style="font-size: 14px;"><?php echo $detail['title']; ?> :</p>
                    <p style="font-size: 12px;margin-top: 9px;"><?php echo $detail['text']; ?></p>
                </div>
                <?php } ?>
            </div>
            <hr class="Mosha20Rem">
            <hr class="Mosha20Rem">
            <div class="Naghd">
                <div class="titleNaghd">
                    <span></span>
                    <p style="font-size: 18px;font-weight: 700;">نقد و بررسی</p>
                </div>
                <div class="bodyNaghd" style="height: 250px;overflow: auto;">
                    <h3 style="margin-bottom: 10px;"><?php echo htmlspecialchars($itemName); ?></h3>
                    <p style="margin-bottom: 50px;"><?php echo htmlspecialchars($short_desc); ?></p>
                    <div style="margin-top: 10px;margin-bottom: 10px;">
                        <h3 >توضیحات</h3>
                        <p><br>
                        <?php echo htmlspecialchars($description); ?>
                            <br>
                        </p>
                    </div>
                </div>
            </div>
            <hr class="Mosha20Rem">
            <hr class="Mosha20Rem">
            <div class="comment" id="Comment">
                <div class="titleComment">
                    <span></span>
                    <p style="font-size: 18px;font-weight: 700;">نظرات کاربران</p>
                </div>
                <div class="comentTab"> 
                    <i class="bi bi-card-list" style="margin-left: 5px;"></i>
                    <a href="#" style="color: black;">ترتیب :</a>
                    <a href="#">جدید ترین</a>
                    <a href="#">قدیمی ترین</a>
                    <a href="#">بیشترین امتیاز</a>
                    <a href="#">کمترین امتیاز</a>
                </div>
                <?php
                $cmSql = "SELECT * FROM tbl_comments WHERE product_id = ? AND status = ? AND parent_id IS NULL";
                $stats = 2; 
                if ($stmt = $conn->prepare($cmSql)) {
                    $stmt -> bind_param('si', $productId, $stats);
                    $stmt -> execute();
                    $result = $stmt->get_result();
                    while ($row = $result->fetch_assoc()) {
                        $user_id = $row['user_id'];
                        $id = $row['id'];
                        $fullname = "کاربر مهمان";
                        $cmSql = "SELECT fullName FROM tbl_users WHERE user_id = ?";
                        if ($stmt2 = $conn->prepare($cmSql)) {
                        $stmt2 -> bind_param('s', $user_id );
                        $stmt2 -> execute();
                        $result2 = $stmt2->get_result();
                        if ($row2 = $result2->fetch_assoc()) {
                            $fullname = $row2['fullName'] ;
                        }
                        };

                    
                ?>
                <div style="margin-bottom: 30px;">
                    <div class="commentCard" style="border-top: none;">
                        <div style="display: flex;flex-direction: column;">
                            <div style="display: flex;flex-direction: row;margin-bottom: 15px;font-size: 14px;">
                                <i class="bi bi-person-fill" style="margin-left: 10px;"></i>
                                <p><?php echo htmlspecialchars($fullname); ?></p>
                            </div>
                            <div style="display: flex;flex-direction: column;font-size: 14px;">
                                <div >
                                    <i class="bi bi-star-fill" style="color: black;"></i>
                                    <i class="bi bi-star-fill" style="color: yellow;"></i>
                                    <i class="bi bi-star-fill" style="color: yellow;"></i>
                                    <i class="bi bi-star-fill" style="color: yellow;"></i>
                                    <i class="bi bi-star-fill" style="color: yellow;"></i>
                                </div>
                                <div>
                                    <p style="color: gray;">1403/03/4</p>
                                </div>
                            </div>
                        </div>
                        <div style="margin-bottom: 15px;font-size: 14px;">
                            <p style="color: blue;"><?php echo $row['comment']; ?></p>
                        </div>
                        <div class="footerComment">
                            <p style="width: 500px;display: flex;justify-content: center;align-items: center;padding: 10px;color: gray;font-size: 14px;">این نظر برای شما مفید بود</p>
                            <div class="likeUnlike" style="width: 500px;display: flex;flex-direction: row;justify-content: center;align-items: center;">
                                <span>
                                    <i class="bi bi-hand-thumbs-up"></i>
                                    <p><?php echo $row['cm_like']; ?></p>
                                </span>
                                <span>
                                    <i class="bi bi-hand-thumbs-down"></i>
                                    <p><?php echo $row['cm_dislike']; ?></p>
                                </span>
                            </div>
                            <div style="width: 500px;display: flex;justify-content: center;align-items: center;flex-direction: row;">
                                <div id="replyComment" onclick="openReply(<?php echo $id; ?>, '<?php echo $row['comment']; ?>')" style="display: flex;flex-direction: row;padding: 10px;font-size: 14px;color: cadetblue; cursor: pointer;">
                                    <p style="margin-left: 10px;">پاسخ به این نظر</p>
                                    <i class="bi bi-caret-left"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php ?>
                    <?php
                    $replySql = "SELECT * FROM tbl_comments WHERE product_id = ? AND status = ? AND parent_id = ?";
                    if ($stmt3 = $conn->prepare($replySql)) {
                    $cmId = $row['id'];
                    $stats = 2;
                    $stmt3 -> bind_param('sii', $productId, $stats,$cmId);
                    $stmt3 -> execute();
                    $result3 = $stmt3->get_result();
                    while ($row3 = $result3->fetch_assoc()) {
                    $rep_fullname = "کاربر مهمان";
                    $reply_uId = $row3['user_id'];
                    $cmSql = "SELECT fullName FROM tbl_users WHERE user_id = ?";
                    if ($stmt4 = $conn->prepare($cmSql)) {
                    $stmt4 -> bind_param('s', $reply_uId );
                    $stmt4 -> execute();
                    $result4 = $stmt4->get_result();
                    if ($row4 = $result4->fetch_assoc()) {
                        $rep_fullname = $row4['fullName'] ;
                    }
                    };
                    ?>
                    <div class="answer">
                        <div style="display: flex;flex-direction: row;margin-bottom: 15px;padding: 10px;">
                            <div style="display: flex;flex-direction: row;font-size: 14px;color: blue;">
                                <i class="bi bi-card-image" style="margin-left: 5px;align-items: center;display: flex;"></i>
                                <p style="display: flex;align-items: center;"><?php echo htmlspecialchars($rep_fullname) ?></p>
                            </div>
                            <div style="display: flex;flex-direction: row;margin-right: 15px;font-size: 14px;color: darkblue;align-items: center;">
                                <p style="margin-left: 5px;">پاسخ <?php echo htmlspecialchars($fullname); ?></p>
                                <i class="bi bi-caret-up"></i>
                            </div>
                        </div>
                        <div style="font-size: 14px;color: darkblue;">
                        <p><?php echo htmlspecialchars($row3['comment']); ?></p> 
                        </div>
                    </div>
                    <?php }; }; }; }; ?>
                </div>
                <div class="commentPlus">
                    <p style="display: flex;align-items: center;margin-left: 5px;">نمایش همه نظرات</p>
                    <i style="display: flex;align-items: center;" class="bi bi-caret-down"></i>
                </div>
                <div class="cardComment" id="cardComment">
                    <div style="display: flex;flex-direction: row;justify-content: space-around;">
                        <div style="display: flex;flex-direction: column;">
                            <div class="cardComS">
                                <span>
                                    <div class="color" style="width: 30%;height: 100%;background-color: yellow;border-radius: 20px;"></div>
                                </span>
                                <p>5</p>
                            </div>
                            <div class="cardComS">
                                <span></span>
                                <p>4</p>
                            </div>
                            <div class="cardComS">
                                <span>
                                    <div class="color" style="width: 70%;height: 100%;background-color: yellow;border-radius: 20px;"></div>
                                </span>
                                <p>3</p>
                            </div>
                            <div class="cardComS">
                                <span></span>
                                <p>2</p>
                            </div>
                            <div class="cardComS">
                                <span>
                                    <div class="color" style="width: 50%;height: 100%;background-color: yellow;border-radius: 20px;"></div>
                                </span>
                                <p>1</p>
                            </div>
                        </div>
                        <div style="display: flex;flex-direction: column;font-size: 14px;direction: ltr;">
                            <div style="margin-bottom: 5px;">
                                <a href="#">3.8</a>
                            </div>
                            <div style="direction: ltr;margin-bottom: 5px;display: flex;flex-direction: row;">
                                <p>نظر</p>
                                <p style="margin-left: 5px;">5</p>
                            </div>
                            <div>
                                <i class="bi bi-star-fill" style="color: yellow;"></i>
                                <i class="bi bi-star-fill" style="color: yellow;"></i>
                                <i class="bi bi-star-fill" style="color: yellow;"></i>
                                <i class="bi bi-star-fill" style="color: yellow;"></i>
                                <i class="bi bi-star-fill" style="color: black;"></i>
                            </div>
                        </div>
                    </div>
                    <div class="CardCommentBootom">
                        <div style="display: flex;flex-direction: row;font-size: 14px;margin-top: 18px;align-items: center;">
                            <i class="bi bi-chat-dots" style="margin-left: 8px;"></i>
                            <p>نظر خود را درباره این محصول بنویسید</p>
                        </div>
                        <div id="AddComments" style="display: flex;flex-direction: row;font-size: 14px;background-color: blue;margin-top: 10px;
                        width: 140px;padding: 10px; cursor: pointer; justify-content: center;color: white;border-radius: 15px;margin-bottom: 15px;
                        align-items: center;">
                            <p style="margin-left: 5px;cursor: pointer;">افزودن نظر</p>
                            <i class="bi bi-plus-lg"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="productsIsProduct">
            <div class="cardTitleproductsIsProduct">
                <h3 style="margin-right: 20px;">کاربران در کنارش خریده اند</h3>
            </div>
            <div class="arrowLeftProductsIs">
                    <i id="leftSwipArrowPdoductIs" class="left-amazing bi bi-caret-left-fill"></i>
            </div>
            <div class="productsIsProductContainer" id="productsIsProductContainer">
                <div class="productsIsProductCard">
                    <a href="<?= $base ?>/product/<?php echo $itemId; ?>">
                        <div class="imgProductsCard">
                            <img src="<?= $base ?>/<?php echo $imginfo; ?>" alt="NotLoad">
                        </div>
                        <div class="captionproductsCard">
                            <p>
                                <?php echo $itemnm; ?>
                            </p>
                        </div>
                        <div class="priceProductCard">
                            <p><?php if ($discount_status === 1) {echo formatNumberFa(htmlspecialchars((100 - $discount['value'])*$itemPrice / 100));} else {echo formatNumberFa(htmlspecialchars($itemPrice));} ?></p>
                        <p style="margin-right: 8px;">تومان</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="arrowRightProductsIs">
                    <i id="rightSwipArrowPdoductIs" class="right-amazing bi bi-caret-right-fill"></i>
            </div>
        </div>

        <div class="spetial">
            <div style="display: flex;flex-direction: row;">
                <a href="#">
                    <div class="squere">
                        <i class="bi bi-headset"></i>
                    </div>
                    <div>
                        <p class="tiP">مشاوره و پشتیبانی</p>
                        <p class="captionP">7 روزه هفته</p>
                    </div>
                </a>
            </div>
            <div>
                <a href="#">
                    <div class="squere">
                        <i class="bi bi-ev-front-fill"></i>
                    </div>
                    <div>
                        <p class="tiP">ارسال سریع در تهران و خارج از تهران</p>
                        <p class="captionP">تحویل سرع به مشتریان</p>
                    </div>
                </a>
            </div>
            <div>
                <a href="#">
                    <div class="squere">
                        <i class="bi bi-collection"></i>
                    </div>
                    <div>
                        <p class="tiP">فروشگاه های زنجیره ای</p>
                        <p class="captionP">در بازار موبایل اپال</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <?php
    include_once('./footer.php');
    ?>
    
</body>
</html>