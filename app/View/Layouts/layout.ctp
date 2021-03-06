<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8">
        <title><?php echo $this->fetch('title'); ?></title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
        <?php
        echo $this->Html->css('style.css');
        ?>

    </head>
    <body id="layout" onload="">

        <!-- header -->
        <header>

            <div id="image_header">
                <h1 id="titre_appli">Human Project</h1>
                <h2 id="slogan">Les projets de demain</h2>

            </div>


            <nav class="navbar navbar-default" role="navigation">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">Menu</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li>
                                <?php
                                echo $this->Html->link(
                                        'Project', array(
                                    'controller' => 'Projet',
                                    'action' => 'index',
                                    'full_base' => true
                                        )
                                );
                                ?>
                            </li>
                            <li><a href="#">Association</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">One more separated link</a></li>
                                </ul>
                            </li>
                        </ul>
                        <form class="navbar-form navbar-left" role="search">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search">
                            </div>
                            <button type="submit" class="btn btn-default">Submit</button>
                        </form>
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <?php
                                if ($this->Session->check('user')) {
                                    echo $this->Html->link(
                                            'Sign out', array(
                                        'controller' => 'user',
                                        'action' => 'logout',
                                        'full_base' => true
                                            )
                                    );
                                } else {
                                    echo $this->Html->link(
                                            'Sign In', array(
                                        'controller' => 'user',
                                        'action' => 'login',
                                        'full_base' => true
                                            )
                                    );
                                }
                                ?>
                            </li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>

        </header>
        <!--Menu-->
        <!-- Fin du header -->

        <?php echo $this->fetch('content'); ?>


        <!-- Tweet -->

        <footer>
            <table class="table" border="0" cellspacing="5" cellpadding="5">
                <tr><th colspan="0" id="titre_tweet">Last tweets</th></tr>
                <tr><td>Tweet1</td><td>Tweet2</td><td>Tweet3</td></tr>
            </table>


        </footer>
        <!-- Fin Tweet -->

    </body>
</html> 
