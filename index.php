<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Курсы 3DsMax</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/fonts.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/wow-animation/animate.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/SlickNav/slicknav.css" />
    <script src="https://use.fontawesome.com/ca627b43d0.js"></script>
    <<?php wp_head(); ?>
  </head>
  <body>
        <header class="fixed">
          <div class="logo">
            <a href="#">
              <img src="<?php bloginfo('template_url') ?>/img/logo.png" alt="logo">
            </a>
          </div>

          <nav class="menu" id="nav">
            <ul id="menu">
              <li>
                <a href="#">ЛИЦЕНЗИЯ AUTODESK</a>
              </li>
              <li>
                <a href="#">О КУРСЕ</a>
                <i class="fa fa-caret-down" aria-hidden="true"></i>
              </li>
              <li>
                <a href="#">НОВЫЙ НАБОР</a>
                <i class="fa fa-caret-down" aria-hidden="true"></i>
              </li>
              <li>
                <a href="#">КОНТАКТЫ</a>
              </li>
            </ul>
          </nav>
        </header>


        <div class="title">
          <div class="description-wrapper">
            <div class="description">
              <span>Презентация нового курса</span>
              <h1>ДИЗАЙН И АРХИТЕКТУРА</h1>
              <span>50 занятий &nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp; Собственный проект под VR</span>
              <div class="button-holder">
                <a href="#">
                  <button type="button">ПОДРОБНЕЕ</button>
                </a>
              </div>
            </div>
          </div>
          <div class="photo">
            <img src="<?php bloginfo('template_url') ?>/img/interior.jpg" alt="photo">
          </div>
        </div>


        <div class="benefits">
          <div class="benefits-logo wow animated zoomIn">
            <img src="<?php bloginfo('template_url') ?>/img/autodesk.png" alt="autodesk">
          </div>
          <div class="benefits-description wow animated zoomIn">
            <p>
              Многие думают, что <span>Lorem Ipsum</span> - взятый с потолка псевдо-латинский набор слов, но это
              не совсем так. Его корни уходят в один фрагмент классической латыни <span>45 года н.э.</span>, то есть
              более двух тысячелетий назад. <span>Ричард МакКлинток</span>, профессор латыни из колледжа взял
              одно из самых странных слов в Lorem Ipsum, "consectetur", и занялся его поисками в
              классической латинской литературе.
            </p>
            <p class="bold">Главными преимуществами курса являются:</p>
            <ul>
              <li><span class="body">Лекторы – опытные архитекторы</span></li>
              <li><span class="house">Видеозаписи всех лекций</span></li>
              <li><span class="license">Лицензия и сертификат Autodesk</span></li>
              <li><span class="video">Большой объём практики</span></li>
            </ul>
          </div>
        </div>


        <div class="program">
            <div class="program-heading">
                <h2>ПРОГРАММА КУРСА</h2>
            </div>

          <ul>
            <li class="wow animated fadeIn" data-wow-duration="3s">
              <div class="circle fundamental">
              </div>
              <p><span class="program-description">3DsMAX. </span><span>Fundamental</span></p>
            </li>
            <li class="wow animated fadeIn" data-wow-duration="6s">
              <div class="circle exterior">
              </div>
              <p><span class="program-description">3DsMAX. </span><span>Exterior</span></p>
            </li>
            <li class="wow animated fadeIn" data-wow-duration="9s">
              <div class="circle interior">
              </div>
              <p><span class="program-description">3DsMAX. </span><span>Interior</span></p>
            </li>
            <li class="wow animated fadeIn" data-wow-duration="12s">
              <div class="circle architecture">
              </div>
              <p><span class="program-description">Revit. </span><span>Architecture</span></p>
            </li>
          </ul>

          <div class="button-holder">
            <button><a href="#">ПОДРОБНАЯ ПРОГРАММА</a></button>
          </div>
        </div>


        <div class="teacher">
            <div class="teacher-title wow animated fadeInLeft">
                <h2>Максим Булат</h2>
                <p>
                    Сертифицированный специалист <span>Autodesk</span>, имеет опыт 3D-моделирования и САПР
                    проектирования <span>более 10 лет</span>.
                </p>
                <p>
                    Практикующий архитектор с 2007 г., член <span>Национального Союза Архитекторов
                    Украины</span>. Участник градостроительных советов в <span>Харькове, Днепропетровске и
                    Ялте.</span> Соавтор Пассажирского терминала <span>Международного Аэропорта Харьков.</span>
                    Участник ежегодной конференции по компьютерной графике NODE в г. Харькове.
                </p>
                <span class="link" >artlabmzx.com</span>
            </div>
            <div class="teacher-img wow animated fadeInRight">
                <img src="<?php bloginfo('template_url') ?>/img/maksym.jpg" alt="photo">
            </div>
        </div>


        <div class="free-lecture">
            <div class="img-holder">
                <img src="<?php bloginfo('template_url') ?>/img/free-lection-img.jpg" alt="interior">
            </div>
            <div class="form-wrapper">
                <div class="form-holder">
                    <h2>БЕСПЛАТНЫЕ ЛЕКЦИИ</h2>
                    <p>Для получения лекций по курсу 3DsMAX, просто заполните эту форму:</p>
                    <form action="#">
                        <input type="text" placeholder="ФИО (обязательно)">
                        <input type="email" placeholder="Адрес электронной почты (обязательно)">
                        <button>ПОЛУЧИТЬ</button>
                    </form>
                </div>
            </div>
        </div>


         <section class="students">
             <h2>РАБОТЫ НАШИХ СТУДЕНТОВ</h2>
             <a class="gallery-link" href="#">ВСЯ ГАЛЕРЕЯ</a>

             <ul class="students-works">
                 <li class="work1"><a href="#"><img src="<?php bloginfo('template_url') ?>/img/work1.jpg" alt=""></a></li>
                 <li class="work2"><a href="#"><img src="<?php bloginfo('template_url') ?>/img/work2.jpg" alt=""></a></li>
                 <li class="work3"><a href="#"><img src="<?php bloginfo('template_url') ?>/img/work3.jpg" alt=""></a></li>
                 <li class="work4"><a href="#"><img src="<?php bloginfo('template_url') ?>/img/work4.jpg" alt=""></a></li>
             </ul>

         </section>

         <div class="contacts">
            <h2>Контакты</h2>

            <div class="contacts-holder">
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2563.1912261895955!2d36.21537311538959!3d50.02651252570191!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4127a1365d886413%3A0x5352441f03b7f0fa!2z0LLRg9C70LjRhtGPINCe0YLQsNC60LDRgNCwINCv0YDQvtGI0LAsIDE4LCDQpdCw0YDQutGW0LIsINCl0LDRgNC60ZbQstGB0YzQutCwINC-0LHQu9Cw0YHRgtGM!5e0!3m2!1sru!2sua!4v1496846013599" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <div class="contacts-information">
                    <p class="phone">
                        <span>(097)</span> 971 13 13
                    </p>
                    <p class="working-time">
                        пн-пт с 10:00 до 19:00
                    </p>
                    <p class="address">
                        <span>Адрес нашего центра:</span><br>
                        г. Харьков, ул. Отакара Яроша, 18, БЦ «Солярис», 15 этаж
                    </p>
                    <div class="connection">
                        <span class="skype">
                            max3d_course
                        </span>
                        <span class="mail">
                            education@3dsmax.com.ua
                        </span>
                    </div>
                </div>
            </div>
         </div>


         <div class="program-section">
             <p>Программы изучаемые на курcе:</p>
             <img src="<?php bloginfo('template_url') ?>/img/logotype-bw.png" alt="program">
         </div>


         <footer>
             <div class="social">
                 <div>
                     <p>Мы в социальных сетях:</p>
                     <nav class="footer-menu">
                         <ul>
                             <li><a href="#"><i class="fa fa-vk" aria-hidden="true"></i></a></li>
                             <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                             <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                             <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                         </ul>
                     </nav>
                 </div>
                 <div class="img-holder">
                     <img src="<?php bloginfo('template_url') ?>/img/footer-img.png" alt="img">
                 </div>
             </div>
             <div class="copyright">
                 <img src="<?php bloginfo('template_url') ?>/img/footer-logo.png" alt="logo">
                 <p>3dsmax.com.ua | 2013-2017</p>
             </div>
         </footer>

    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/SlickNav/jquery.slicknav.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/app.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/wow-animation/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <?php wp_footer(); ?>
  </body>
</html>
