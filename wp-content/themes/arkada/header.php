<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php bloginfo('name'); echo " | "; bloginfo('description'); ?></title>

    <?php wp_head(); ?>
</head>

<body>
    <nav class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-lg-offset-0 col-md-2 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-8 col-xs-offset-2">
                    <?php the_custom_logo() ?>
                </div>
                <div class="col-lg-5 col-lg-offset-0 col-md-6 col-md-offset-0 col-sm-0 col-sm-offset-0" id="menu-div">
                    <div class="wrap">
                        <div class="wrap-block">
                            <ul class="header-ul" id="menu">
                                <li><a href="#shop">Проекты</a></li>
                                <li><a href="#example">Примеры работ</a></li>
                                <li><a href="#review">Отзывы</a></li>
                                <li><a href="#contacts">Контакты</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-lg-offset-1 col-md-2 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-8 col-xs-offset-2">
                    <div class="wrap">
                        <div class="wrap-block">
                            <a href="tel:+<?= str_replace('-','',CFS()->get('tel_number', 23)); ?>" class="header-phone"><?= CFS()->get('tel_number', 23); ?></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-lg-offset-0 col-md-2 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-8 col-xs-offset-2">
                    <button type="submit" class="button-small popup-btn">
                        Перезвоните мне
                    </button>
                </div>
            </div>
        </div>
    </nav>