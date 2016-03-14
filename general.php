<?php
session_start();
if ($_SESSION["logeado"] != "SI") {
    $error = '<p class="error">Acceso sin codigo no permitido</p>';
    include('login.php');
    exit;
}
?>
<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>M&amp;A Boda</title>
    <meta name="description" content="Bienvenido a la pagina web de la boda de Abel y Maria!">

    <meta charset="UTF-8" name=viewport content="width=device-width, initial-scale=1">

    <!-- For iPhone 4 with high-resolution Retina display: -->
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="apple-touch-icon-114x114-precomposed.png">
    <!-- For first-generation iPad: -->
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="apple-touch-icon-72x72-precomposed.png">
    <!-- For non-Retina iPhone, iPod Touch, and Android 2.1+ devices: -->
    <link rel="apple-touch-icon-precomposed" href="apple-touch-icon-precomposed.png">

    <link rel="shortcut icon" href="favicon.ico?v=1">

    <link rel="stylesheet" href="css/normalize.min.css">
    <link rel="stylesheet" href="css/main-1.6.css">


</head>
<body>
<!--[if lt IE 7]>
<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to
    improve your experience.</p>
<![endif]-->

<div id="bg-image">
    <img src="img/bk.jpg" alt="bg"/>
</div>

<div id="bg-container">

    <div class="header-container">
        <div id="heading" class="wrapper clearfix">
            <nav id="nav">
                <ul>
                    <li><a href="#ceremonia">Ceremonia</a></li>
                    <li><a href="#wedding">Banquete &amp; Discoteca</a></li>
                    <li><a href="#accomodations">Alojamiento</a></li>
                    <li><a href="#confirmaciones" onClick="return submitWindow();">Confirmaciones</a></li>
                </ul>

            </nav>
        </div>
    </div>

    <div class="main-container">
        <div class="main wrapper clearfix">

            <header>
                <div id="introtext">
                    <span class="head-sarah">Maria</span>
                            <span class="head-brad">&nbsp;
                                <span class="amp">&amp;</span> 
                                ABEL
                            </span>

                    <div class="date">6 de Agosto, 2016, Zamora, Espana</div>
                </div>
            </header>

            <div class="clearfix"></div>

            <section id="ceremonia" class="clearfix">
                <h1>Ceremonia</h1>

                <div class="column left">
                    <h2>Iglesia de Santa Maria de la Horta</h2>

                    <p>
                        La iglesia de Santa María de la Horta, también llamada simplemente iglesia de la Horta, es un templo románico de la ciudad de Zamora, España. Es Monumento Nacional desde el 3 de junio de 1931.
                        <br/><br/>
                        <img src="img/iglesia.jpg" class="theinn" alt="Iglesia de Santa María de la Horta" width="400" height="400"/>

                    </p>


                </div><!--end column-->
                <div class="column right">
                    <h2>Horarios de los eventos</h2>
                    <p>
                        Ceremonia religiosa <br/>
                        Sabado, 6 de Agosto a las 18:00<br/><br/>
                    </p>

                    <h2>Direccion</h2>
                    <div id="gmap">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2553.6966990285855!2d-5.746663885068915!3d41.50141869688208!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd391e324eea678d%3A0xa63e445313f37373!2sIglesia+de+Santa+Mar%C3%ADa+de+la+Horta!5e1!3m2!1sen!2ses!4v1457210298125&amp;output=embed" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        <br/>
                    </div>
                </div><!--end column-->

                <div class="clearfix"></div>

                <div class="column full">
                    <div class="hr-t"></div>
                    <div class="hr-b"></div>
                </div>




            </section>

            <section id="wedding" class="clearfix">

                <h1>Banquete &amp; Discoteca</h1>

                <div class="column left">
                    <h2>Finca Maradela</h2>

                    <p>
                        Maradela, tierra de restos romanos, de manantiales de estanques y de leyendas. Se cuenta que
                        aqui tuvo lugar la famosa batalla de Toro <br/>
                        que logro asegurar el trono de Castilla a Isabel y Fernando <br/><br/>
                        Fue poseedora de un monasterio en el Siglo XII. Albergo un palacio, vinedos, olivos y una
                        extensa variedad de arboles frutales que aun hoy engalanan sus bellos rincones<br/><br/>
                        Cuenta ademas con visitantes ilustres como Felipe III y su valido el Duque de Lerma.<br/><br/>

                        <img src="img/logoMaradela.png" class="theinn" alt="The Inn at Rancho Santa Fe"/>

                    </p>


                </div><!--end column-->
                <div class="column right">
                    <h2>Horarios de los eventos</h2>

                    <p>
                        Ceremonia religiosa <br/>
                        Sabado, 6 de Agosto a las 18:00<br/><br/>
                        Banquete <br/>
                        Sabado, 6 de Agosto a las 20:00<br/><br/>
                        Discoteca <br/>
                        Sabado, 6 de Agosoto a las 23:59<br/><br/>
                    </p>
                        <h2>Pagina web</h2>
                    <p>
                        <a href="http://www.fincamaradela.com" target="	_blank">Finca Maradela</a>
                    </p>

                    <h2>Direccion</h2>
                    <div id="gmap">

                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2298.0725627587585!2d-5.50511274727613!3d41.488147370420215!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDHCsDI5JzE3LjMiTiA1wrAzMCcxMS44Ilc!5e1!3m2!1sen!2ses!4v1457206245199&amp;output=embed" frameborder="0"></iframe>
                        <br/>
                    </div>

                </div><!--end column-->

                <div class="clearfix"></div>

                <div class="column full">
                    <div class="hr-t"></div>
                    <div class="hr-b"></div>
                </div>


            </section>

            <section id="accomodations" class="clearfix">

                <h1>Alojamiento</h1>

                <div class="column left">

                    <h2>HOTEL</h2>

                    <p>
                        AC Hotel Zamora <br/>
                        Avda Principe de Asturias, 43 <br/>
                        49029 <br/>
                        Zamora, Espana <br/>
                        <a href="http://www.marriott.com/hotels/travel/slmza-ac-hotel-zamora/" target="_blank">AC Hotel Zamora</a> <br/>
                    </p>
                </div><!--end column-->

                <div class="column right">
                    <h2>DIRECCION</h2>

                    <p>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2722.511101375505!2d-5.739130684910359!3d41.5116449962463!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd391e245c520b87%3A0xa301aeb403bf8005!2sAC+Hotel+Zamora!5e1!3m2!1sen!2ses!4v1457208160309" width="450" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </p>

                </div><!--end column-->

                <div class="clearfix"></div>

                <div class="column full">
                    <div class="hr-t"></div>
                    <div class="hr-b"></div>
                </div>

                <div class="clearfix"></div>

                <div class="column full">
                    <div class="hr-t"></div>
                    <div class="hr-b"></div>
                </div>

                <div class="column full">
                    <h2>Indicaciones</h2>

                    <p>
                      Como creemos que una imagen vale mas que 100 palabras, hemos puesto los mapas de como llegar a las diferentes ubicaciones de la boda.
                    </p>

                    <p>
                    Hotel AC - Iglesia Santa Maria de la Horta
                    </p>
                    <div id="gmap">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d10908.958704710943!2d-5.749427717886608!3d41.50637278738658!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e2!4m5!1s0xd391e245c520b87%3A0xa301aeb403bf8005!2sAC+Hotel+Zamora%2C+Avenida+del+Pr%C3%ADncipe+de+Asturias%2C+Zamora!3m2!1d41.511641!2d-5.736942!4m5!1s0xd391e324eea678d%3A0xa63e445313f37373!2sIglesia+de+Santa+Mar%C3%ADa+de+la+Horta%2C+49002+Zamora!3m2!1d41.5014147!2d-5.7444752!5e1!3m2!1sen!2ses!4v1457209115792" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe><br/>
                    </div>
                    <p>
                    Iglesia Santa Maria de la Horta - Finca Maradela
                    </p>
                    <p>
                        Al terminar la ceremonia religiosa tienes dos opciones para llegar hasta la Finca Maradela, una es con tu propio coche o la otra es utilizar uno de los autobuses que tendras a tu disposcion.
                    </p>
                    <br/>
                    <p>
                        Con tu coche:
                    </p>
                    <div id="gmap">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d87252.54632128075!2d-5.694474196984075!3d41.520558333184276!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m5!1s0xd391e324eea678d%3A0xa63e445313f37373!2sIglesia+de+Santa+Mar%C3%ADa+de+la+Horta!3m2!1d41.5014147!2d-5.7444752!4m3!3m2!1d41.488138899999996!2d-5.503277799999999!5e1!3m2!1sen!2ses!4v1457206703909" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                    <p>
                        Con el autobus: el autobus os estara esperando en la direccion que puedes encontrar en el mapa de abajo
                    </p>
                    <div id="gmap">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d1368.8470258715656!2d-5.746043847313712!3d41.50109616113351!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d41.500616699999995!2d-5.7457706!4m5!1s0xd391e324eea678d%3A0xa63e445313f37373!2sIglesia+de+Santa+Mar%C3%ADa+de+la+Horta%2C+49002+Zamora!3m2!1d41.5014147!2d-5.7444752!5e1!3m2!1sen!2ses!4v1457222227492" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div><!--end column-->

            </section>

            <section id="confirmaciones" class="clearfix">

                <h1>Confirmaciones</h1>

                <div class="column full">

                    <p>Para confirmar tu asistencia, tienes varias opciones. Puedes mandar un correo electronico a esta direccion o puedes hacer click en este enlace <a onClick="return submitWindow();">(Confirmaciones)</a> y decirnos si vas a venir :) </p>

                    <p>
                        Te esperamos el 6 de agosto! <br/>
                        No nos faltes!!! <br/>
                    </p>

                </div><!--end column-->

            </section>

            <div style="height: 300px"></div>

        </div> <!-- #main -->
    </div> <!-- #main-container -->
</div> <!-- #bg-container -->
</body>
<footer>
    <script src="js/script.js"></script>
    <script src="js/main-1.6.js"></script>

    <script>
        function submitWindow() {
            // URL, name and attributes
            var link = window.location.origin;
            if (window.location.hostname == 'localhost') link = link + '/wedding/rsvp.php';
            else link = link + '/rsvp.php';
            popupwindow(link, 'windowNew', '500', '700');
            return true;
        }

        function popupwindow(url, title, w, h) {
            var left = (screen.width / 2) - (w / 2);
            var top = (screen.height / 2) - (h / 2);
            return window.open(url, title, 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width=' + w + ', height=' + h + ', top=' + top + ', left=' + left);
        }
    </script>
</footer>
<?php include_once("analyticstracking.php") ?>
</html>
