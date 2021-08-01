<?php
require_once __DIR__ . '/include/Class.Processing.php';
$processing = new PROCESSING();

//save tracking params to cookie
$aff = $processing->get_save_tracking_parameter($processing::$url_aff);
$cid = $processing->get_save_tracking_parameter($processing::$url_cid);
$network = $processing->get_save_tracking_parameter($processing::$url_net);
$sid = $processing->get_save_tracking_parameter($processing::$url_sid);
//save tracking params to cookie

$product = 'clearview';
$processing->save_data_to_cookie($processing->COOKIE_PRODUCT, $product);

$main_url = 'https://hyperstech.com/intl/';
$order_url = $main_url.'order2.php?prod='.$product.'&net='.$network.'&aff='.$aff.'&sid='.$sid.'&cid='.$cid;

$scheme = 'http';
if(!empty($_SERVER['HTTP_X_FORWARDED_PROTO'])){
  $scheme = $_SERVER['HTTP_X_FORWARDED_PROTO'];
}else{
  $scheme = !empty($_SERVER['HTTPS']) ? "https" : "http";
}
$img_to_share = $scheme.'://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'/img/content_img_1.jpg';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Basic Page Needs    ================================================== -->
  <meta charset="utf-8">
  <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta property="og:image" content="<?php echo $img_to_share; ?>">
  <title>Drive Safer at Night with ClearView Glasses, state-of-the-art Night Vision Aid</title>

  <!-- Bootstrap -->
  <!-- Latest compiled and minified CSS -->
  <link href="./css/bootstrap.min.css" rel="stylesheet">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Titillium+Web:200,200i,300,300i,400,400i,600,600i,700,700i,900&display=swap" rel="stylesheet">
  <!-- Stylesheet      ================================================== -->
  <link rel="stylesheet" type="text/css"  href="./css/fontello.css">
  <link rel="stylesheet" type="text/css"  href="./css/style.css">
  <link rel="icon" type="image/png" href="./img/favicon.png">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
  <![endif]-->
</head>
<body>
  <div class="wrapper_page">
    <header class="header">
      <!-- Navigation          ==========================================-->
      <nav id="tf-menu" class="navbar navbar-default">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand visible-xs-block" href="<?php echo $order_url; ?>" target="_blank"><img class="img-logo" src="./img/logo.png" alt="logo"></a>
          </div>
          <div class="collapse navbar-collapse p-0" id="navbar-collapse-1">
            <div class="row row-mob">
              <div class="col-sm-4">
                <ul class="nav navbar-nav">
                  <li class="active"><a href="<?php echo $order_url; ?>" target="_blank" class="">Home</a></li>
                  <li><a href="<?php echo $main_url; ?>legal/contact-us.php?prod=<?php echo $product; ?>" target="_blank" class="">Contact Us</a></li>
                </ul>
              </div>
              <div class="col-sm-4">
                <div class="wrapper_logo text-center clearfix">
                  <a class="navbar-brand hidden-xs" target="_blank" href="<?php echo $order_url; ?>"><img class="img-logo" src="./img/logo.png" alt="logo"></a>
                </div>
              </div>
              <div class="col-sm-4">
                <ul class="nav navbar-nav navbar-right">
                  <li><a href="<?php echo $main_url; ?>legal/policy.php?prod=<?php echo $product; ?>" target="_blank" class="">Privacy Policy</a></li>
                  <li><a href="<?php echo $main_url; ?>legal/term.php?prod=<?php echo $product; ?>" target="_blank" class="">Terms of Business</a></li>
                </ul>
              </div>
            </div>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
      <div class="container">
        <div class="wrapper_top_block">
          <div class="row">
            <div class="col-md-7">
              <div class="top_block clearfix">
                <h1 class="h1">
                  <span class="color-black fw-700">The Incredible <a href="<?php echo $order_url; ?>" target="_blank">ClearView</a></span>
                  Are Night Vision Glasses With A Difference
                </h1>
                <div class="top_icons">
                  <div class="wrapper_soc">
                    <a href="javascript:void(0);" class="btn btn-transparent btn-transparent-facebook"><i class="demo-icon icon-facebook"></i></a>
                  </div>
                  <div class="wrapper_soc">
                    <a href="javascript:void(0);" class="btn btn-transparent btn-transparent-twitter"><i class="demo-icon icon-twitter"></i></a>
                  </div>
                  <div class="wrapper_soc">
                    <button type="button" class="btn btn-transparent btn-transparent-link" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Link copied!">
                      <i class="demo-icon icon-link"></i><span class="social_text">Copy</span>
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-5">
              <div class="wrapper_top_img"><a href="<?php echo $order_url; ?>" target="_blank"><img class="img-responsive top_img" src="./img/top_img.png" alt="top_img"></a></div>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- wrapper-content        ==========================================-->
    <div class="wrapper-content">
      <div class="container container-big">
        <div class="inner_container">
          <div class="row row-mob">
            <div class="col-md-8 pr-20">
              <div class="content">
                <div class="advert clearfix">
                  <div class="item_advert"><img src="./img/img-1.png" alt=""><span>John Lewis</span></div>
                  <div class="item_advert"><img src="./img/img-2.png" alt=""><span>Technology</span></div>
                  <div class="item_advert"><img src="./img/img-3.png" alt=""><span><?php echo date('d.m.Y'); ?></span></div>
                </div>
                <p class="text fw-700 fs-18 fs-italic color-black">Safety on the road is never guaranteed, with accidents frequently happening. But there are things you can do to make your route home safer, and <a href="<?php echo $order_url; ?>" target="_blank">ClearView</a> is a product that can help.</p>
                <p class="text">Glare can reduce a drivers vision to dangerous levels, putting you in a perilous situation that is hard to avoid. Now, <a href="<?php echo $order_url; ?>" target="_blank">ClearView</a> has an answer that makes driving in challenging conditions a lot safer. These modern night vision glasses can be the difference between a bad accident and getting home safe.</p>
                <p class="text">They are the driving aid that many people have been searching for, and it is easy to see why.</p>
                <a href="<?php echo $order_url; ?>" target="_blank"><img class="img-responsive img_radius mt-35 mb-40" src="./img/content_img_1.jpg" alt="content_img_1"></a>
                <h2 class="h2"><a href="<?php echo $order_url; ?>" target="_blank">ClearView</a> Are Incredibly Comfortable</h2>
                <p class="text">Because they are something that everyone should have in their car, <a href="<?php echo $order_url; ?>" target="_blank">ClearView</a> night vision glasses are adjustable. This means that anyone can wear them and making them fit to size takes seconds.</p>
                <p class="text">The adjustable hinge makes them suitable for any face shape or size, meaning any man or woman can benefit from the advanced technology used to increase your level of safety.</p>
                <p class="text">Making them fit right is simple and can be done with limited tools, including the miniature screwdriver that comes with every purchase.</p>
                <a href="<?php echo $order_url; ?>" target="_blank"><img class="img-responsive img_radius mt-50 mb-40" src="./img/content_img_2.jpg" alt="content_img_2"></a>
                <h2 class="h2"><a href="<?php echo $order_url; ?>" target="_blank">ClearView</a> Are Perfect For Night Driving</h2>
                <p class="text">When a car is driving with their full beams on, it can be very dangerous. Making it almost impossible to see, this is the cause of many road accidents. Even the glare from modern LED lights makes it a challenge to see clearly at night.</p>
                <p class="text"><a href="<?php echo $order_url; ?>" target="_blank">ClearView</a> reduces the impact of damaging light on your eyes. They brighten everything with a yellow hue, making your vision clearer and decrease the glare from approaching night lights.</p>
                <div class="mb-40">
                  <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/0WHnHX7CnqA" allowfullscreen="allowfullscreen"></iframe>
                  </div>
                </div>
                <p class="text">This makes it easier for you to stay on the road, and get home safe but it is also good news for pedestrians. Because bright lights can be detrimental to your vision, you might not be able to see someone crossing the road until it is too late. <a href="<?php echo $order_url; ?>" target="_blank">ClearView</a> helps to prevent this from happening.</p>
                <p class="text">The photochromic lenses help to battle poor visibility due to glare in your line of vision. The lines on the road are also clearer which helps you to stay on the road, and well within your lane.</p>
                <a href="<?php echo $order_url; ?>" target="_blank"><img class="img-responsive img_radius mt-50 mb-40" src="./img/content_img_3.jpg" alt="content_img_3"></a>
                <h2 class="h2"><a href="<?php echo $order_url; ?>" target="_blank">ClearView</a> Glasses Are Great In Different Conditions</h2>
                <p class="text">One issue a lot of people have with standard driving glasses is that they do not give you a wide range of vision.</p>
                <p class="text">Because of the aviator design, <a href="<?php echo $order_url; ?>" target="_blank">ClearView</a> offers the maximum range of vision, far more than narrow competitors. This enables them to work in adverse weather and lighting. Therefore, your vision will be enhanced during the haze, fog, low light, and other dark conditions, as well as bright white/blue flashes and contrasts.</p>
                <a href="<?php echo $order_url; ?>" target="_blank"><img class="img-responsive img_radius mt-50 mb-40" src="./img/content_img_4.jpg" alt="content_img_4"></a>
                <h2 class="h2"><a href="<?php echo $order_url; ?>" target="_blank">ClearView</a> Glasses Are Made Of Quality Materials</h2>
                <p class="text">If you have a pair of glasses or sunglasses that last a long time, you know it is because they are made of quality materials. It is not uncommon for cheap sunglasses to break within a week of use. Thankfully, <a href="<?php echo $order_url; ?>" target="_blank">ClearView</a> glasses are built to be solid.</p>
                <p class="text">The durable metallic allow looks good and is made to last. Combine this with the spring loaded hinges which ensure your comfort and you have a quality product, that looks great.</p>
                <a href="<?php echo $order_url; ?>" target="_blank"><img class="img-responsive img_radius mt-50 mb-40" src="./img/content_img_5.jpg" alt="content_img_5"></a>
                <p class="text">The nose pad is professionally made making them comfortable for long periods of use. The soft material really acts as a cushion on your nose to support the glasses. They fit better than most and are stable when in use.</p>
                <p class="text">Despite being made this way, they are also incredibly lightweight. Weighing only 20g they are made with your comfort in mind. The modern yellow color is suitable for both men and women and looks great.</p>
                <a href="<?php echo $order_url; ?>" target="_blank"><img class="img-responsive img_radius mt-50 mb-40" src="./img/content_img_6.jpg" alt="content_img_6"></a>
                <h2 class="h2"><a href="<?php echo $order_url; ?>" target="_blank">ClearView</a> Glasses Are Great For A Number Of Activities</h2>
                <p class="text">Of course, these glasses are especially good for driving, but they can also be worn to give yourself an advantage in sports and other activities. These include the likes of cycling, running, trekking, climbing, fishing and more.</p>
                <p class="text">To give yourself the edge in awkward lighting conditions, <a href="<?php echo $order_url; ?>" target="_blank">ClearView</a> can make a huge difference.</p>
                <a href="<?php echo $order_url; ?>" target="_blank"><img class="img-responsive img_radius mt-50 mb-40" src="./img/content_img_7.jpg" alt="content_img_7"></a>
                <h2 class="h2">They Work With Any Prescription</h2>
                <p class="text">It doesn't matter if you are long or short sighted, they still have the same effect. They might not be comfortable to wear over your regular glasses but they work just the same with contact lenses.</p>
                <p class="text">They provide an excellent alternative to wearing your normal glasses and will help get you home safely.</p>
                <a href="<?php echo $order_url; ?>" target="_blank"><img class="img-responsive img_radius mt-50 mb-40" src="./img/content_img_8.jpg" alt="content_img_8"></a>
                <h2 class="h2"><a href="<?php echo $order_url; ?>" target="_blank">ClearView</a> Are The Most Advanced Night Vision Glasses</h2>
                <p class="text">Cheap night vision glasses are poorly made and don't offer the same results or quality as <a href="<?php echo $order_url; ?>" target="_blank">ClearView</a>. What you will get from these glasses are advanced features such as the polarised lenses.</p>
                <p class="text">They enhance contrast to give you clearer vision but also work to reduce glare. Another great attribute is that they never make your vision too dark. Even when it is pouring rain and there is a car approaching on the other side that has forgotten to turn off their full beams, <a href="<?php echo $order_url; ?>" target="_blank">ClearView</a> glasses will help you to see clearer thanks to their polarised lenses.</p>
                <a href="<?php echo $order_url; ?>" target="_blank"><img class="img-responsive img_radius mt-50 mb-40" src="./img/content_img_9.jpg" alt="content_img_9"></a>
                <h2 class="h2"><a href="<?php echo $order_url; ?>" target="_blank">ClearView</a> Glasses Can Be Worn By Anyone</h2>
                <p class="text">These night vision glasses are great to keep in your car, no matter who is doing the driving.</p>
                <p class="text">Because they are fully adjustable, your partner can amend them to fit so that they can drive comfortably, with the best vision possible. As an essential piece of equipment for any driver, everyone should have a pair to hand. You never know when you might need them.</p>
                <div class="ultra_boost">
                  <div class="ultra_boost_title">How can I buy the <a href="<?php echo $order_url; ?>" target="_blank">ClearView</a> Glasses?</div>
                  <p class="text mb-0"><a href="<?php echo $order_url; ?>" target="_blank">ClearView</a> Glasses is available for a limited time only, with exclusive offers and free shipping.</p>
                  <div class="text mb-0"><span class="wrapper_blue">Ordering is quick and easy</span>, so take advantage of the great price by ordering yours today.</div>
                </div><!-- /ultra_boost -->
                <div class="wrapper_ofer">
                  <div class="offer">
                    <div class="row d-flex align-items-center">
                      <div class="col-md-4 text_offer">Special Offer</div>
                      <div class="col-md-4 center_block">
                        <span class="new_price">$49</span>
                        <span class="old_price line-through"> $98</span>
                      </div>
                      <div class="col-md-4"><span class="right_text_offer">available online only and while supplies last.</span> </div>
                    </div>
                  </div>
                  <div class="text-center"><a href="<?php echo $order_url; ?>" target="_blank" class="btn btn-yellow color-white">Get yours now <span class="fw-700">with 50% discount</span> and <span class="fw-700">free shipping worldwide!</span></a></div>
                </div><!-- /wrapper_ofer -->
              </div><!-- /content -->
            </div>
            <div class="col-md-4 pl-20">
              <div class="wrapper-right-block">
                <div id="aside1" class="">
                  <div class="right-block">
                    <div class="close">X</div>
                    <div class="wrapper_right-img">
                      <a href="<?php echo $order_url; ?>" target="_blank"><img class="img-responsive right-img" src="./img/right-img.jpg" alt="right-img"></a>
                      <div class="valid_block">Valid today only!</div>
                    </div>
                    <div class="inner-right_block">
                      <h2 class="h2 mt-0">How can I buy the <a href="<?php echo $order_url; ?>" target="_blank">ClearView</a>?</h2>
                      <p class="text mb-15"><a href="<?php echo $order_url; ?>" target="_blank">ClearView</a> is available from the official website and for the Best Price!</p>
                      <a href="<?php echo $order_url; ?>" target="_blank" class="btn btn-yellow pulse"><span class="ring"></span><span class="circle"></span>Сheck availability</a>
                    </div>
                  </div>
                </div>
              </div><!-- /wrapper-right-block -->
              <div class="flouting btn-pulse">
                <span class="ring"></span>
                <span class="circle"></span>
                <i class="demo-icon icon-basket color-light-blue"></i>
              </div>
            </div>
          </div><!-- /row-mob -->
        </div><!-- /inner_container -->
      </div><!-- /container-big -->
    </div><!-- /wrapper-content -->

    <footer id="footer">
      <div class="top_footer">
        <div class="container">
          <div class="footer_content clearfix">
            <div class="wrapper_logo_footer">
              <a class="logo_footer" href="<?php echo $order_url; ?>" target="_blank"><img src="./img/logo.png" alt="logo"></a>
            </div>
            <div class="wrapper_nav">
              <ul class="nav navbar-nav">
                <li class="active"><a href="<?php echo $order_url; ?>" target="_blank" class="">Home</a></li>
                <li><a href="<?php echo $main_url; ?>legal/contact-us.php?prod=<?php echo $product; ?>" target="_blank" class="">Contact</a></li>
                <li><a href="<?php echo $main_url; ?>legal/policy.php?prod=<?php echo $product; ?>" target="_blank" class="">Privacy Policy</a></li>
                <li><a href="<?php echo $main_url; ?>legal/term.php?prod=<?php echo $product; ?>" target="_blank" class="">Terms of Business</a></li>
              </ul>
            </div>
            <div class="copyright">© All rights reserved. <?php echo date('Y'); ?></div>
          </div>
        </div>
      </div>
    </footer>
    <img class="circle_top img-responsive" src="./img/bg/circle_yellow.png" >
    <img class="circle_bottom_left img-responsive" src="./img/bg/circle_gray.png" >
    <img class="circle_bottom_right img-responsive" src="./img/bg/circle_yellow_min.png" >
  </div><!-- /wrapper_page -->


  <a id="totop" href="#totop"><i class="demo-icon icon-angle-up"></i></a>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="js/jquery-3.2.1.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <!-- Latest compiled and minified JavaScript -->
  <script src="js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  <!-- Javascripts ================================================== -->
  <script src="./js/main.js"></script>
  <script src="./js/jquery.social.sharing.js"></script>
  <script>
    (function(){
      var a = document.querySelector('#aside1'), b = null, P = 0;  // если ноль заменить на число, то блок будет прилипать до того, как верхний край окна браузера дойдёт до верхнего края элемента. Может быть отрицательным числом
      window.addEventListener('load', Ascroll, false);
      window.addEventListener('resize', Ascroll, false);
      window.addEventListener('scroll', Ascroll, false);
      document.body.addEventListener('load', Ascroll, false);
      document.body.addEventListener('resize', Ascroll, false);
      document.body.addEventListener('scroll', Ascroll, false);
      function Ascroll() {
        if (b == null) {
          var Sa = getComputedStyle(a, ''), s = '';
          for (var i = 0; i < Sa.length; i++) {
            if (Sa[i].indexOf('overflow') == 0 || Sa[i].indexOf('padding') == 0 || Sa[i].indexOf('border') == 0 || Sa[i].indexOf('outline') == 0 || Sa[i].indexOf('box-shadow') == 0 || Sa[i].indexOf('background') == 0) {
              s += Sa[i] + ': ' +Sa.getPropertyValue(Sa[i]) + '; '
            }
          }
          b = document.createElement('div');
          var text_offsetWidth = (a.offsetWidth == 0)?'auto':a.offsetWidth + 'px;'
          b.style.cssText = s + ' box-sizing: border-box; width: ' + text_offsetWidth;
          a.insertBefore(b, a.firstChild);
          var l = a.childNodes.length;
          for (var i = 1; i < l; i++) {
            b.appendChild(a.childNodes[1]);
          }
          a.style.height = b.getBoundingClientRect().height + 'px';
          a.style.padding = '0';
          a.style.border = '0';
        }
        var Ra = a.getBoundingClientRect(),
        R = Math.round(Ra.top + b.getBoundingClientRect().height - document.querySelector('footer').getBoundingClientRect().top + 0);  // селектор блока, при достижении верхнего края которого нужно открепить прилипающий элемент;  Math.round() только для IE; если ноль заменить на число, то блок будет прилипать до того, как нижний край элемента дойдёт до футера
        if ((Ra.top - P) <= 0 && document.querySelector('.wrapper-right-block').scrollTop==0) {
          if ((Ra.top - P) <= R) {
            b.className = 'stop';
            b.style.top = - R +'px';
          } else {
            b.className = 'sticky';
            b.style.top = P + 'px';
          }
        } else {
          b.className = '';
          b.style.top = '';
        }
        window.addEventListener('resize', function() {
          a.children[0].style.width = getComputedStyle(a, '').width
        }, false);
      }
    })()
  </script>
</body>
</html>