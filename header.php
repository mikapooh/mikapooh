<?php
/**
 * The template for displaying the header
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <!--jquery-->
  <script src="https://code.createjs.com/createjs-2015.11.26.min.js"></script>
<script src="http://jsrun.it/assets/G/k/z/U/GkzUj"></script>
<script>
var emitter = null;
var stage =
window.addEventListener("load", function () {

    emitter = new effects.ParticleEmitter();
    stage = new createjs.Stage("myCanvas");
    stage.addChild(emitter.container);
    createjs.Ticker.framerate = 60;
    createjs.Ticker.timingMode = createjs.Ticker.RAF;
    createjs.Ticker.addEventListener("tick", handleTick);

    emitter.setData(
      {
        "emitFrequency": 60,
        "lifeSpan": "40",
        "lifeSpanVariance": "1.5",
        "initialDirection": "40.5",
        "initialDirectionVariance": "90",
        "initialSpeed": "8",
        "initialSpeedVariance": "10",
        "friction": "0.3",
        "accelerationSpeed": "1.5",
        "accelerationDirection": "220.2",
        "startScale": "1.5",
        "startScaleVariance": "0.52",
        "finishScale": "0",
        "finishScaleVariance": "0",
        "startAlpha": "1",
        "startAlphaVariance": "0",
        "finishAlpha": "1",
        "finishAlphaVariance": "0",
        "startX": 320,
        "startXVariance": "20",
        "startY": 349,
        "startYVariance": "20",
        "shapeIdList": ["kirakira","kirakira2","star"],
        "startColor": {
          "hue": "70",
          "hueVariance": "100",
          "saturation": "100",
          "saturationVariance": "1",
          "luminance": "80",
          "luminanceVariance": "20"
        },
        "blendMode": true,
        "alphaCurveType": "3"
      }
    );

  });

  function handleTick() {
    // マウスの位置に合わせるよ
    emitter.startX = stage.mouseX;
    emitter.startY = stage.mouseY;

    // 少しずつ色が変わるよ
    emitter.startColor.hue += 8;
      if( emitter.startColor.hue  >= 360 ) {
      emitter.startColor.hue = 0;
   }

    emitter.update();
    stage.update();
  }
</script>

    <script type="text/javascript">
    jQuery(function($) {

        var nav = $('#fixedBox'),
            offset = nav.offset();

        $(window).scroll(function() {
            if ($(window).scrollTop() > offset.top) {
                nav.addClass('fixed');
            } else {
                nav.removeClass('fixed');
            }
        });
    </script>

    <link href="<?php echo get_template_directory_uri();?>/js/bootstrap.css" type="text/css" rel="stylesheet">
    <script type="text/javascript" src="http://code.jquery.com/jquery-3.1.0.js"></script>
    <!-- custom fonts -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
    <!-- favicon -->
    <link rel="icon" type="image/png" href="img/favicon.png">
    <!-- custom cSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/style.css">

<!--[if lt IE 9]>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5shiv.min.js"></script>
<![endif]-->

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
    <header class="header bodywrap">
        <div class="logo">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
            <?php if ( get_theme_mod( 'favicon' ) || get_theme_mod( 'favicon' ) != '' ) : ?>
                <img src="<?php echo get_template_directory_uri();?>/img/favicon.png" height="100" width="100">
						<?php else: ?>
								<?php bloginfo('name'); ?>
            <?php endif; ?>
            </a>
        </div>
        <div class="main-nav">
            <input type="checkbox" id="onav" />
            <label for="onav" class="onav-btn"><span class="nav-icon"></span></label>
            <nav>
                <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu', 'container' => '' ) ); ?>
            </nav>
        </div>
    </header>
