<!doctype html>
<html class="no-js" lang=""> 
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Express Post Victory</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="/img/ll.ico" type="image/x-icon">
        <link href='https://fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/linearicons-web-font.css">
		<link rel="stylesheet" href="css/responsive.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body >
		<div class='preloader'><div class='loaded'>&nbsp;</div></div>
				
		<div class="main_header">
			<h2>Express Post </br>
                <img src="img/ll2.gif" alt="V" class="info-img0">
            Victory</h2>				
		</div>
        
        <section id="about" class="light-bg wrap">
            <div class="container">
            <div class="row">
            <div class="8col-md-6 col-sm-6 col-xs-12 info">
                <?
                    mysql_connect("expres36.mysql.ukraine.com.ua", "expres36_db", "expres36_db");
                    mysql_select_db("expres36_db");
                    /*mysql_connect("localhost", "nata", "nata");
                    mysql_select_db("test");*/

                    mysql_query("SET NAMES 'utf8' COLLATE 'utf8_general_ci'");
                    mysql_query("SET CHARACTER SET 'utf8'");
                ?>
                <h3>
                <?
                    $query = mysql_query("SELECT id, textt FROM infa WHERE id=2 LIMIT 1");
                    $data = mysql_fetch_assoc($query);
                    echo $data['textt']."<br>";
                ?>
                </h3> <br>
                <p>
                <?
                    $query = mysql_query("SELECT id, textt FROM infa WHERE id=4 LIMIT 1");
                    $data = mysql_fetch_assoc($query);
                    echo $data['textt']."<br>";
                ?>
                </p><br>
                <p>
                    Почему Вы можете нам доверять?
                    <ol align = "left">
                         <li>У нас отлаженные и проверенные многолетним опытом схемы доставки грузов в Молдову и Украину.</li>
                         <li>Мы сотрудничаем с ведущими морскими линиями и почтовыми операторами.</li>
                         <li>Обеспечиваем сохранность груза в пути. На складах установлены системы видеонаблюдения, которые полностью исключают возможность кражи или порчи грузов.</li>
                         <li>Мы изучили все требования таможни, поэтому с оформлением отправлений и доставкой в страну получателя проблем не возникнет.</li>
                    </ol>
                </p>                 
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="info-img-block">
					<img src="img/np1.jpg" position = "center" class="info-img"/>
				</div>	
            </div></div></div>
        </section>

        <section>
            <div class="contact_area">
            <div class="container">
            <div class="row" align="center">
                <video id="myVideo" controls="controls" autoplay loop  muted>
                   <source src="video/01.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
                   Тег video не поддерживается вашим браузером. 
                </video>
            </div></div></div>
        </section>
        
        </div>
        <section class="wrap curstab_studio">
            <div class="testimonial">
            <div class="container">
            <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="studio text-center">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="false">
			    <ol class="carousel-indicators" id = "slidol"></ol>
			    <div class="carousel-inner" role="listbox" id = "slid">
                    <?
                        $query = mysql_query("SELECT id, textt, textt1, textt2 FROM slaid");
                        $num = 0;
                        while ($data = mysql_fetch_array($query)){
                    ?>
                    <script type="text/javascript">
                        var i = "<? echo $num ?>";
                        var textt = "<? echo $data['textt']?>";
                        var textt1 = "<? echo $data['textt1']?>";
                        var textt2 = "<? echo $data['textt2']?>";

                        li = document.createElement('li');
                        li.setAttribute('data-target','#carousel-example-generic');
                        li.setAttribute('data-slide-to', i);

                        div = document.createElement('div');
                        div.innerHTML = "<p>"+textt+"</p><span>" + textt1 +"</span><h4>"+textt2+"</h4>";

                        if (i==0){
                            li.className = "active";
                            div.className = "item active";
                        }
                        else {
                            li.className = i;
                            div.className = "item";
                        }
                        slidol.appendChild(li);
                        slid.appendChild(div);
                    </script>
                    <?    
                            $num=$num+1;
                        }
                        $data = mysql_fetch_assoc($query)
                    ?>
			</div></div></div></div></div></div></div>
        </section>
        
        <section>
            <div class="info" align="center">
                <div class="main_contact">
                    <h3>Условие доставки в Украину</h3>
                </div>
                <h4>
                    <?
                        $query = mysql_query("SELECT id, textt FROM infa WHERE id=3 LIMIT 1");
                        $data = mysql_fetch_assoc($query);
                        echo $data['textt']."<br>";
                    ?> 
                </h4>
                <!--<div class="main_contact">
                   <h2>Отслеживание посылки</h2>
                </div>-->
                <a href="https://tracking.novaposhta.international/ru" target="_blank">
                    <button class="btn btn-default" type="submit">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Status tracking&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                </a></br>
                <!--<div class="main_contact">
                   <h2>Запрещенные грузы</h2>
                </div>-->
                <a href="https://tracking.novaposhta.international/files/forbideen_ru.pdf" target="_blank">
                    <button class="btn btn-default" type="submit">Запрещенные грузы</button>
                </a>
            </div>
        </section>

        <div id="portfolio_area" class="light-bg wrap">
        <div class="container">
        <div class="row">
        <div class="portfolio">
        <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="portfolio-item">
            <img src="img/np4.jpg" alt=""  height = 300  width = 300   />
        </div></div>
        <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="portfolio-item">
            <img src="img/np2.jpg" alt="" height = 300    width="auto"/>
        </div></div>
        <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="portfolio-item">
            <img src="img/np3.jpg" alt="" height = 300    width="auto"/>
        </div></div></div></div></div></div>

        <div class="contact_area wrap">
        <div class="container">
        <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="main_contact">
            <h3 color ="#03415b">Наши контакты:</h3>
                <!--Вывод контактов-->
                <?
                    $result = mysql_query("SELECT id, name, numberr FROM kontakt");

                    while($data = mysql_fetch_array($result)){
                        echo "<h4>";
                        echo $data['name'];
                        echo $data['numberr'];
                        echo "</h4>";
                    }
                ?>
            </div>
        </div>
        <div class="col-md-8 col-sm-6 col-xs-12">
        <div class="main_contact2">
            <form method="POST" action="">          
                <div class="col-sm-6 col-md-6 col-xs-12">
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                </div></br>
                <div class="col-sm-12 col-md-12">
                    <textarea  class="form-control" id="exampleInputPassword1" placeholder="Текст" name="txtarea"></textarea>
                    <button class="btn btn-default" type="submit" name="submit">Отправить</button>
                </div>
                <?
                    if(isset($_POST['submit'])){
                        //echo "<script>alert(\"тут)\");</script>";
                        
                        /*
                        $email=$_GET['email'];
                        
                        echo $email;
                        echo $_POST['txtarea']; // Вот значение нашего textarea! Все спецсимволы сохранены в виде \n \r
                        echo nl2br($_POST['txtarea']); // Вот значение нашего textarea! Все спецсимволы переведены в код html с сохранением пробелов и переносов строк

                        if (mail("epv@expresspostvictory.com", "Test mail", "Проверка отправки почты")) {
                              echo "ok";
                        } else {
                               echo "error";}
                    
                        */
                    }
                ?>
            </form>
        </div></div></div></div></div>

        <section class="footer_area">
            <div class="container">
			<div class="footer-main">
			<div class="row">
			<div class="col-md-6 col-sm-6 col-xs-12 all_rights"></div>
            <div class="col-md-6 col-sm-6 col-xs-12">
			<div class="social">
				<ul class="list-inline pull-right">
					<li><a href="https://www.facebook.com/profile.php?id=100016099929072" target="_blank"><i class="fa fa-facebook"></i></a></li>
					<!--<li><a href="#"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
					<li><a href="#"><i class="fa fa-behance"></i></a></li>
					<li><a href="#"><i class="fa fa-instagram"></i></a></li>
					<li><a href="#"><i class="fa fa-dribbble"></i></a></li>-->
				</ul>	
			</div></div></div></div></div>
        </section>

        <script src="js/vendor/jquery-1.11.2.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/masonry.pkgd.min.js"></script>
        <script src="js/main.js"></script>

    </body>
</html>
