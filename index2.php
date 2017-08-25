
<?php
include 'header.php';
?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="#">Profile</a>
                    </li>
                    <li class="disabled">
                        <a href="#">Messages</a>
                    </li>
                    <li class="dropdown pull-right">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">Dropdown<strong class="caret"></strong></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#">Action</a>
                            </li>
                            <li>
                                <a href="#">Another action</a>
                            </li>
                            <li>
                                <a href="#">Something else here</a>
                            </li>
                            <li class="divider">
                            </li>
                            <li>
                                <a href="#">Separated link</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="carousel slide" id="carousel-633685">
                    <ol class="carousel-indicators">
                        <li class="active" data-slide-to="0" data-target="#carousel-633685">
                        </li>
                        <li data-slide-to="1" data-target="#carousel-633685">
                        </li>
                        <li data-slide-to="2" data-target="#carousel-633685">
                        </li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="item active">
                            <img alt="Carousel Bootstrap First" src="http://lorempixel.com/output/sports-q-c-1600-500-1.jpg" />
                            <div class="carousel-caption">
                                <h4>
								First Thumbnail label
							</h4>
                                <p>
                                    Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                                </p>
                            </div>
                        </div>
                        <div class="item">
                            <img alt="Carousel Bootstrap Second" src="http://lorempixel.com/output/sports-q-c-1600-500-2.jpg" />
                            <div class="carousel-caption">
                                <h4>
								Second Thumbnail label
							</h4>
                                <p>
                                    Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                                </p>
                            </div>
                        </div>
                        <div class="item">
                            <img alt="Carousel Bootstrap Third" src="http://lorempixel.com/output/sports-q-c-1600-500-3.jpg" />
                            <div class="carousel-caption">
                                <h4>
								Third Thumbnail label
							</h4>
                                <p>
                                    Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                                </p>
                            </div>
                        </div>
                    </div> <a class="left carousel-control" href="#carousel-633685" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#carousel-633685" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel-group" id="panel-661213">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a class="panel-title" data-toggle="collapse" data-parent="#panel-661213" href="#panel-element-103866">Collapsible Group Item #1</a>
                        </div>
                        <div id="panel-element-103866" class="panel-collapse collapse in">
                            <div class="panel-body">
                                Anim pariatur cliche...
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a class="panel-title" data-toggle="collapse" data-parent="#panel-661213" href="#panel-element-140390">Collapsible Group Item #2</a>
                        </div>
                        <div id="panel-element-140390" class="panel-collapse collapse">
                            <div class="panel-body">
                                Anim pariatur cliche...
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
						Panel title
					</h3>
                    </div>
                    <div class="panel-body">
                        Panel content
                    </div>
                    <div class="panel-footer">
                        Panel footer
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <form role="form">
                    <div class="form-group">
                        <label for="exampleInputEmail1">
                            Email address
                        </label>
                        <input type="email" class="form-control" id="exampleInputEmail1" />
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">
                            Password
                        </label>
                        <input type="password" class="form-control" id="exampleInputPassword1" />
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">
                            File input
                        </label>
                        <input type="file" id="exampleInputFile" />
                        <p class="help-block">
                            Example block-level help text here.
                        </p>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" /> Check me out
                        </label>
                    </div>
                    <button type="submit" class="btn btn-default">
                        Submit
                    </button>
                </form>
            </div>
            <div class="col-md-4">
                <address>
                    <strong>Twitter, Inc.</strong>
                    <br /> 795 Folsom Ave, Suite 600
                    <br /> San Francisco, CA 94107
                    <br />
                    <abbr title="Phone">P:</abbr> (123) 456-7890
                </address>
            </div>
        </div>
    </div>
    <!-- /.container -->
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>