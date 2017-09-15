<?php
include 'header.php';
?>
    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-md-3">
             <!-- Gismeteo informer START -->
<link rel="stylesheet" type="text/css" href="https://nst1.gismeteo.ru/assets/flat-ui/legacy/css/informer.min.css">
    <div id="gsInformerID-0CCCIlASA5rsNA" class="gsInformer" style="width:245px;height:201px">
        <div class="gsIContent">
            <div id="cityLink">
                                    <a href="https://www.gismeteo.ru/weather-sankt-peterburg-4079/" target="_blank">Погода в Санкт-Петербурге</a>
            </div>
            <div class="gsLinks">
                <table>
                    <tr>
                        <td>
                            <div class="leftCol">
                                <a href="https://www.gismeteo.ru/" target="_blank">
                                    <img alt="Gismeteo" title="Gismeteo" src="https://nst1.gismeteo.ru/assets/flat-ui/img/logo-mini2.png" align="middle" border="0" />
                                    <span>Gismeteo</span>
                                </a>
                            </div>
                            <div class="rightCol">
                                <a href="https://www.gismeteo.ru/weather-sankt-peterburg-4079/2-weeks/" target="_blank">Прогноз на 2 недели</a>
                            </div>
                        </td>
                        </tr>
                                    </table>
            </div>
        </div>
    </div>
<script async src="https://www.gismeteo.ru/api/informer/getinformer/?hash=0CCCIlASA5rsNA" type="text/javascript"></script>
<!-- Gismeteo informer END -->
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                    Связаться с нами
                </button>
                <!-- Modal -->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="bootstrap-iso">
                                <form name="formcheck" onsubmit="return formCheck(this);" method="post">
                                    <div class="form-group ">
                                        <label class="control-label " for="name">
                                            Name
                                        </label>
                                        <input class="form-control" id="name" name="name" type="text" />
                                    </div>
                                    <div class="form-group ">
                                        <label class="control-label " for="phonenumber">
                                            Phone Number
                                        </label>
                                        <input class="form-control" id="phonenumber" name="phonenumber" type="text" />
                                    </div>
                                    <div class="form-group ">
                                        <label class="control-label requiredField" for="email">
                                            Email
                                            <span class="asteriskField">*</span>
                                        </label>
                                        <input class="form-control" id="email" name="email" type="text" />
                                    </div>
                                    <div class="form-group ">
                                        <label class="control-label " for="message">
                                            Details
                                        </label>
                                        <textarea class="form-control" cols="40" id="message" name="message" placeholder="Please Explain Everything in Detail" rows="10"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <div>
                                            <button class="btn btn-danger btn-lg" name="submit" type="submit">
                                                Complete
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="row carousel-holder">
                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <a href="cruises.php">
                                    <img class="slide-image" src="img/1.png" alt="">
                                    <p>
                                        Круизы по Балтийскому морю
                                    </p>
                                    </a>
                                </div>
                                <div class="item">
                                <a href="sochi.php">
                                    <img class="slide-image" src="img/2.png" alt="">
                                    <p>
                                        Сочи от 31 000 рублей
                                    </p>
                                    </a>
                                </div>
                                <div class="item">
                                 <a href="turkey.php">
                                    <img class="slide-image" src="img/3.jpg" alt="">
                                
                                <p>
                                        Горящие туры в Турцию
                             </p>
                             </a>
                             </div>
                            </div>
                           <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">

                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>
                </div>
                         <h2 class="ta-title"> Горящие предложения </h2>
                <div class="row">
                    <div class="col-sm-4 col-lg-4 col-md-4">
                    <a href="#" data-toggle="modal" data-target="#greeceModal" class="tour-link">
                        <div class="thumbnail">
                            <img src="img/4.jpg" alt="">
                            <div class="caption">
                                <h4 class="pull-right">от 54 000 руб</h4>
                                <h4>Греция
                                </h4>
                                <p>Горящие предложения на август на курорты: Родос, Крит и Корфу
                                </p>
                                 Связаться с нами
                             </button>
                            </div>
                            </div>
                            </a>
                    </div>
                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="img/6.jpg" alt="">
                            <div class="caption">
                                <h4 class="pull-right">от 40 000 руб</h4>
                                <h4><a href="#">Тунис</a>
                                </h4>
                                <p> Туры в Тунис из Санкт-Петербурга для активных туристов</p>
                            </div>
                            </div>
                    </div>
                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="img/7.jpg" alt="">
                            <div class="caption">
                                <h4 class="pull-right">от 27 000 руб</h4>
                                <h4><a href="#">Кипр</a>
                                </h4>
                                <p>Остров Кипр — это несколько отличных пляжных курортов и один горнолыжный</p>
                            </div>
                            </div>
                    </div>
                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="img/8.jpg" alt="">
                            <div class="caption">
                                <h4 class="pull-right">от 19 000 руб</h4>
                                <h4><a href="#">Испания</a>
                                </h4>
                                <p>Испания – прекрасная европейская страна, города которой славятся своей величественной архитектурой</p>
                            </div>
                            </div>
                    </div>
                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="img/9.jpg" alt="">
                            <div class="caption">
                                <h4 class="pull-right">от 13 000 руб</h4>
                                <h4><a href="#">Россия</a>
                                </h4>
                                <p>Курорты Черноморского побережья</p>
                            </div>
                           </div>
                    </div>
                  <div class="col-sm-4 col-lg-4 col-md-4">
            <?php include 'form.php'; ?>

                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- /.container -->
    <?php include "greece-popup.php" ; ?>
    <?php include "footer.php"; ?>