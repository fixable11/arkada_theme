<?php get_header() ?>

<main class="main" style="
background-image: url(<?= CFS()->get('main_bg_image', 23); ?>);
">
  <div class="container">
    <div class="row">
      <div class="col-md-5 col-md-offset-1">
        <h1>
          <?= CFS()->get('main_title', 23); ?>
        </h1>
        <h2>
          <?= CFS()->get('main_subtitle', 23); ?>
        </h2>
        <div class="main-feature">
          <img src="<?= get_template_directory_uri() ?>/assets/img/main/icon-1@1x.png" alt="piggy">
          <p class="main-feature-p">
            <?= CFS()->get('feature_1', 23); ?>
          </p>
        </div>
        <div class="main-feature">
          <img src="<?= get_template_directory_uri() ?>/assets/img/main/icon-2@1x.png" alt="clock">
          <p class="main-feature-p">
            <?= CFS()->get('feature_2', 23); ?>
          </p>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="main-cta-block col-md-12 col-sm-12 col-xs-12">

        <div class="col-md-7 col-md-offset-1 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0">
          <b class="main-cta">Оставь заявку прямо сейчас</b>
          <b class="main-cta-sub">и получи <span>бесплатный расчет</span> и <span>входную дверь</span> в подарок<sup>*</sup>!</b>

          <form method="post" name="first-form" action="mailer/smart.php" class="form">

            <div class="col-md-6 col-sm-6 col-xs-12">
              <input name="user_name" required type="text" placeholder="Ваше имя">
            </div>

            <div class="col-md-6 col-sm-6 col-xs-12">
              <input name="phone" id="phone-1" required type="text" placeholder="Ваш телефон">
            </div>

            <div class="col-md-6 col-sm-6 col-xs-12">
              <button id="first-btn" type="submit" class="popup-thanks-btn">Оставить заявку</button>
            </div>

            <div class="col-md-6 col-md-offset-0 col-sm-6 col-sm-offset-0 col-xs-12 col-xs-offset-0">
              <p>Наш менеджер перезвонит Вам в течене 15 минут для консультации.<br>* при заказе строительства дома</p>
            </div>

          </form>

        </div>

      </div>
    </div>
  </div>
</main>

<section class="features">
  <div class="container">
    <div class="col-md-4 col-sm-12 col-xs-12">
      <div class="media">
        <div class="media-left">
          <img class="media-object" src="<?= get_template_directory_uri() ?>/assets/img/features/1.png" alt="Неизменная цена">
        </div>
        <div class="media-body">
          <h2 class="media-heading">
            <?= CFS()->get('feature_3_title', 23); ?>
          </h2>
          <p>
            <?= CFS()->get('feature_3', 23); ?>
          </p>
        </div>
      </div>
    </div>

    <div class="col-md-4 col-sm-12 col-xs-12">
      <div class="media">
        <div class="media-left">
          <img class="media-object" src="<?= get_template_directory_uri() ?>/assets/img/features/2.png" alt="Неизменная цена">
        </div>
        <div class="media-body">
          <h2 class="media-heading">
            <?= CFS()->get('feature_4_title', 23); ?>
          </h2>
          <p>
            <?= CFS()->get('feature_4', 23); ?>
          </p>
        </div>
      </div>
    </div>

    <div class="col-md-4 col-sm-12 col-xs-12">
      <div class="media">
        <div class="media-left">
          <img class="media-object" src="<?= get_template_directory_uri() ?>/assets/img/features/3.png" alt="Неизменная цена">
        </div>
        <div class="media-body">
          <h2 class="media-heading">
            <?= CFS()->get('feature_5_title', 23); ?>
          </h2>
          <p>
            <?= CFS()->get('feature_5', 23); ?>
          </p>
        </div>
      </div>
    </div>

  </div>
</section>

<section class="shop" id="shop">
  <div class="container">
    <h2>Популярные проекты</h2>
    <ul class="shop-ul">
      <li><a class="active-color" href="#shop" id="a-1">Дома из бруса</a></li>
      <li><a href="#shop" id="a-2">Сруб</a></li>
      <li><a href="#shop" id="a-3">Каркасные дома</a></li>
      <li><a href="#shop" id="a-4">Кирпичные дома</a></li>
      <li><a href="#shop" id="a-5">Дома из блоков</a></li>
    </ul>

    

    <!-- Дома из блоков -->
    <div class="shop-cards" id="shop-cards-5">

      <?php
        $args = [
          'category_name' => 'blockhouse',
          'numberposts' => -1,
          'order' => 'ASC',
          'post_type' => 'post',
          'suppress_filters' => true,

        ];

        $posts = get_posts($args);
      ?>

      <?php foreach($posts as $post): setup_postdata($post); ?>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="shop-card">
            <?php if(has_post_thumbnail()): ?>
              <?php the_post_thumbnail('house_thumbnail'); ?>
            <?php else: ?>
              <img src="<?= get_template_directory_uri() . '/assets/img/main/no_image.png' ?>" alt="no-image">
            <?php endif; ?>
            <h3><?php the_title(); ?></h3>
            <p>Площадь <?= CFS()->get('square'); ?> м<sup>2</sup></p>
            <span><?= CFS()->get('old_price'); ?></span>
            <b><?= CFS()->get('new_price'); ?> руб.</b>
            <button type="submit" class="popup-btn button-small">Оставить заявку</button>
          </div>
        </div>

      <?php endforeach; ?>
      <?php wp_reset_postdata(); ?>

    </div>

    <!-- Кирпичные дома -->
    <div class="shop-cards" id="shop-cards-4">

    <?php
        $args = [
          'category_name' => 'bricks',
          'numberposts' => -1,
          'order' => 'ASC',
          'post_type' => 'post',
          'suppress_filters' => true,

        ];

        $posts = get_posts($args);
      ?>

      <?php foreach($posts as $post): setup_postdata($post); ?>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="shop-card">
            <?php if(has_post_thumbnail()): ?>
              <?php the_post_thumbnail('house_thumbnail'); ?>
            <?php else: ?>
              <img src="<?= get_template_directory_uri() . '/assets/img/main/no_image.png' ?>" alt="no-image">
            <?php endif; ?>
            <h3><?php the_title(); ?></h3>
            <p>Площадь <?= CFS()->get('square'); ?> м<sup>2</sup></p>
            <span><?= CFS()->get('old_price'); ?></span>
            <b><?= CFS()->get('new_price'); ?> руб.</b>
            <button type="submit" class="popup-btn button-small">Оставить заявку</button>
          </div>
        </div>

      <?php endforeach; ?>
      <?php wp_reset_postdata(); ?>
     
    </div>

    <!-- Каркасные дома -->
    <div class="shop-cards" id="shop-cards-3">

    <?php
        $args = [
          'category_name' => 'frame',
          'numberposts' => -1,
          'order' => 'ASC',
          'post_type' => 'post',
          'suppress_filters' => true,

        ];

        $posts = get_posts($args);
      ?>

      <?php foreach($posts as $post): setup_postdata($post); ?>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="shop-card">
            <?php if(has_post_thumbnail()): ?>
              <?php the_post_thumbnail('house_thumbnail'); ?>
            <?php else: ?>
              <img src="<?= get_template_directory_uri() . '/assets/img/main/no_image.png' ?>" alt="no-image">
            <?php endif; ?>
            <h3><?php the_title(); ?></h3>
            <p>Площадь <?= CFS()->get('square'); ?> м<sup>2</sup></p>
            <span><?= CFS()->get('old_price'); ?></span>
            <b><?= CFS()->get('new_price'); ?> руб.</b>
            <button type="submit" class="popup-btn button-small">Оставить заявку</button>
          </div>
        </div>

      <?php endforeach; ?>
      <?php wp_reset_postdata(); ?>
      
    </div>

    <!-- Сруб -->
    <div class="shop-cards" id="shop-cards-2">

    <?php
        $args = [
          'category_name' => 'loghouse',
          'numberposts' => -1,
          'order' => 'ASC',
          'post_type' => 'post',
          'suppress_filters' => true,

        ];

        $posts = get_posts($args);
      ?>

      <?php foreach($posts as $post): setup_postdata($post); ?>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="shop-card">
            <?php if(has_post_thumbnail()): ?>
              <?php the_post_thumbnail('house_thumbnail'); ?>
            <?php else: ?>
              <img src="<?= get_template_directory_uri() . '/assets/img/main/no_image.png' ?>" alt="no-image">
            <?php endif; ?>
            <h3><?php the_title(); ?></h3>
            <p>Площадь <?= CFS()->get('square'); ?> м<sup>2</sup></p>
            <span><?= CFS()->get('old_price'); ?></span>
            <b><?= CFS()->get('new_price'); ?> руб.</b>
            <button type="submit" class="popup-btn button-small">Оставить заявку</button>
          </div>
        </div>

      <?php endforeach; ?>
      <?php wp_reset_postdata(); ?>
    
    </div>

    <!-- Дома из бруса -->
    <div class="shop-cards active" id="shop-cards-1">

      <?php
          $args = [
            'category_name' => 'lumber',
            'numberposts' => -1,
            'order' => 'ASC',
            'post_type' => 'post',
            'suppress_filters' => true,

          ];

          $posts = get_posts($args);
        ?>

        <?php foreach($posts as $post): setup_postdata($post); ?>

          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="shop-card">
              <?php if(has_post_thumbnail()): ?>
                <?php the_post_thumbnail('house_thumbnail') ?>
              <?php else: ?>
                <img src="<?= get_template_directory_uri() . '/assets/img/main/no_image.png' ?>" alt="no-image">
              <?php endif; ?>
              <h3><?php the_title(); ?></h3>
              <p>Площадь <?= CFS()->get('square'); ?> м<sup>2</sup></p>
              <span><?= CFS()->get('old_price'); ?></span>
              <b><?= CFS()->get('new_price'); ?> руб.</b>
              <button type="submit" class="popup-btn button-small">Оставить заявку</button>
            </div>
          </div>

        <?php endforeach; ?>
        <?php wp_reset_postdata(); ?>
    
    </div>

  </div>
</section>

<section class="example" id="example">

  <?php
    $args = [
      'numberposts' => 1,
      'category_name' => 'examples_of_works',
      'order' => 'ASC',
      'post_type' => 'extra_posts',
      'suppress_filters' => true,
    ];
    
    $post = get_posts($args)[0];
  ?>

  <div class="container">
    <h2>Примеры наших работ</h2>

    <div class="slider_ex">
      <?php $fields = CFS()->get('gallery_images'); ?>

      <?php foreach ( $fields as $field ):  ?>

          <img src="<?= $field['image'] ?>" alt="example">

      <?php endforeach; ?>

      <?php wp_reset_postdata(); ?>
    </div>
    
  </div>

</section>

<section class="houses">
  <?php
    $args = [
      'numberposts' => -1,
      'category_name' => 'house_advantages',
      'order' => 'ASC',
      'post_type' => 'extra_posts',
      'suppress_filters' => true,
    ];
    
    $posts = get_posts($args);
  ?>
  <?php foreach($posts as $post): ?>
    <div class="house house-<?= $i ?>" style="background-image:url(<?= get_the_post_thumbnail_url() ?>)">
      <div class="container">
        <div class="col-md-6 col-md-offset-6 col-sm-7 col-sm-offset-5 col-xs-12 col-xs-offset-0">
          <h2>Каркасные дома</h2>
          <ul>
            <?php $fields = CFS()->get('advantages_loop'); ?>
            <?php foreach ( $fields as $field ):  ?>            
              <li><?= $field['advantage'] ?></li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>
    </div>
    <?php $i++; ?>
  <?php endforeach; ?>
  <?php wp_reset_postdata(); ?>
</section>

<section class="upsell">
  <?php
      $args = [
        'numberposts' => 1,
        'category_name' => 'roofing_works',
        'order' => 'ASC',
        'post_type' => 'extra_posts',
        'suppress_filters' => true,
      ];
      
      $post = get_posts($args)[0];
      setup_postdata($post);
    ?>

  <div class="container">
    <div class="row">
      <h2><?php the_title(); ?></h2>
      <p class="upsell-desc"><?= get_the_content(); ?></p>

      <?php $fields = CFS()->get('roofing_loop'); ?>

      <?php foreach ( $fields as $field ):  ?>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="upsell-block">
            <img src="<?= $field['roofing_image'] ?>" alt="Металлочерепица">
            <b><?= $field['roofing_title'] ?></b>
          </div>
        </div>

      <?php endforeach; ?>
    </div>
    <p class="upsell-more">и много других материалов.</p>
    <?php wp_reset_postdata(); ?>
    <div class="row">
      <div class="upsell-cta-block main-cta-block col-md-12 col-sm-12 col-xs-12">

        <div class="col-md-7 col-md-offset-1 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0">
          <b class="main-cta">Мы бесплатно проконсультируем вас</b>
          <b class="main-cta-sub">по выбору <span>материала кровли</span> для Вашего дома!</b>

          <form method="post" name="second-form" action="mailer/smart.php" class="form">

            <div class="col-md-6 col-sm-6 col-xs-12">
              <input name="user_name" required type="text" placeholder="Ваше имя">
            </div>

            <div class="col-md-6 col-sm-6 col-xs-12">
              <input name="user_phone" id="phone-2" required type="text" placeholder="Ваш телефон">
            </div>

            <div class="col-md-6 col-sm-6 col-xs-12">
              <button id="second-btn" type="submit" class="popup-thanks-btn">Оставить заявку</button>
            </div>

            <div class="col-md-6 col-md-offset-0 col-sm-6 col-sm-offset-0 col-xs-12 col-xs-offset-0">
              <p>Наш менеджер перезвонит Вам в течене 15 минут для консультации.</p>
            </div>

          </form>

        </div>

      </div>
    </div>
  </div>
</section>

<section class="review" id="review">

  <?php
    $args = [
      'numberposts' => 1,
      'category_name' => 'feedbacks',
      'order' => 'ASC',
      'post_type' => 'extra_posts',
      'suppress_filters' => true,
    ];
    
    $post = get_posts($args)[0];
    setup_postdata($post);
  ?>

  <div class="container">
    <h2>Клиенты о нас</h2>
    <div class="row">
      <div class="slider_ex">

      <?php $fields = CFS()->get('feedbacks_loop'); ?>
        <?php foreach ( $fields as $field ):  ?>            
      
        <div class="review-block">
          <div class="media review-avatar">
            <div class="media-left">
              <img class="media-object" src="<?= get_template_directory_uri() ?>/assets/img/review/ava.png" alt="Анна Маслова">
            </div>
            <div class="media-body">
              <p class="review-avatar-name"><?= $field['feedback_name'] ?></p>
            </div>
          </div>
          <div class="review-block-text">
            <h3><?= $field['feedback_title'] ?></h3>
            <p><?= $field['feedback_desc'] ?></p>
          </div>
        </div>

        <?php endforeach; ?>
        
      </div>
    </div>
  </div>

  <?php wp_reset_postdata(); ?>

</section>

<div class="contacts" id="contacts">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-12 col-xs-offset-0">
        <div class="contacts-block">
          <img src="<?= get_template_directory_uri() ?>/assets/img/contacts/1.png" alt="">
          <a class="contacts-phone" href="tel:+<?= str_replace('-','',CFS()->get('tel_number', 23)); ?>">
            <?= CFS()->get('tel_number', 23); ?></a>
        </div>
      </div>
      <div class="col-md-4 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-12 col-xs-offset-0">
        <div class="contacts-block">
          <img src="<?= get_template_directory_uri() ?>/assets/img/contacts/2.png" alt="">
          <p>
            <?= CFS()->get('adress', 23) ?>
          </p>
        </div>
      </div>
      <div class="col-md-4 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-12 col-xs-offset-0">
        <div class="contacts-block">
          <img src="<?= get_template_directory_uri() ?>/assets/img/contacts/3.png" alt="">
          <a href="mailto:<?= CFS()->get('email', 23) ?>">
            <?= CFS()->get('email', 23) ?></a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="map">
  <?= do_shortcode('[gmap-embed id="173"]'); ?>
</div>

<section class="question" id="question">
  <div class="container">
    <h2>Остались вопросы?</h2>
    <a id="manager-call" href="#question">Задайте их менеджеру</a>
  </div>
</section>

<!-- Popup -->
<div class="popup popup-call">
  <!-- Само (белое) модальное окно -->
  <div class="popup-dialog">
    <!-- Содежримое -->
    <div class="popup-content">
      <button type="submit" class="popup-close">&times;</button>
      <h4 class="popup-header">
        Заинтересовало?
      </h4>
      <p>Оставьте свои контактные данные <br>для связи</p>

      <div class="form">
        <?= do_shortcode('[contact-form-7 id="175" title="Контактная форма 1"]'); ?>
      </div>

      <!-- <form method="post" name="third-form" action="mailer/smart.php" class="form">
        <input name="user_name" required type="text" placeholder="Ваше имя">
        <input name="user_phone" id="phone-3" required type="text" placeholder="Ваш телефон">
        <button id="third-btn" type="submit" class="popup-thanks-btn">Оставить заявку</button>
        <p>Наш менеджер перезвонит Вам в течене 15 минут для консультации.<br>* при заказе строительства дома</p>
      </form> -->
    </div>
  </div>
</div>

<!-- Popup -->
<div class="popup popup-thanks">
  <!-- Само (белое) модальное окно -->
  <div class="popup-dialog">
    <!-- Содежримое -->
    <div class="popup-content">
      <button type="submit" class="popup-close">&times;</button>
      <h2 class="popup-header">
        Спасибо за заявку
        </h4>
        <p>В течение 5 минут мы Вам перезвоним</p>
        <button class="thanks-btn button-small">Вернуться на сайт</button>
    </div>
  </div>
</div>

<?php get_footer() ?>