<?php include_once('functions.php'); ?>
<?php $project_name = "Uitleenbalie"; ?>
<?php $project_type = "Front Office"; ?>
<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <title><?php echo($project_name) ?> Style Guide <?php echo($project_type) ?></title>
    <meta name="viewport" content="width=device-width">
    <!-- Style Guide Boilerplate Styles -->
    <link rel="stylesheet" href="css/styleguide.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">

    <!-- Custom Fonts -->
    <link
        href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
        rel='stylesheet' type='text/css'>
    <link
        href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic'
        rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">

</head>
<body data-spy="scroll" data-target=".navbar-default" data-offset="60">
<!-- Fixed navbar -->
<nav id="mainNav" class="navbar navbar-default navbar-fixed-top affix">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand page-scroll" href="#page-top"><?php echo($project_name) ?> Style
                Guide <?php echo($project_type) ?></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
<!--                <li class="dropdown">-->
<!--                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Docs <i class="fa fa-caret-down"></i></a>-->
<!--                    <ul class="dropdown-menu  scroll-menu sg-sect">-->
<!--                        --><?php //listElementsAsDetail('docs'); ?>
<!--                    </ul>-->
<!--                </li>-->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Foundation <i class="fa fa-caret-down"></i></a>
                    <ul class="dropdown-menu  scroll-menu sg-sect">
                        <?php listElementsAsDetail('foundation'); ?>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Base <i class="fa fa-caret-down"></i></a>
                    <ul class="dropdown-menu  scroll-menu sg-sect">
                        <?php listMarkupAsOptions('base'); ?>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Patterns <i class="fa fa-caret-down"></i></a>
                    <ul class="dropdown-menu  scroll-menu sg-sect">
                        <?php listMarkupAsOptions('patterns'); ?>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Select an element: <b class="caret"></b></a>
                    <ul class="dropdown-menu  scroll-menu sg-sect">
                        <?php listElementsAsOptions('docs'); ?>
                        <?php listElementsAsOptions('foundation'); ?>
                        <li role="presentation" class="divider"></li>
                        <li role="presentation" class="dropdown-header">Base Styles</li>
                        <?php listMarkupAsOptions('base'); ?>
                        <li role="presentation" class="divider"></li>
                        <li role="presentation" class="dropdown-header">Patterns</li>
                        <?php listMarkupAsOptions('patterns'); ?>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>

<!--/.sg-header-->

<div class="sg-body sg-container container">
<!--    <div id="docs" class="row">-->
<!--        <h1 class="page-header">Style Guide Documentation</h1>-->
<!--        --><?php //showDocs(); ?>
<!--    </div>-->
    <!--/.row-->
    <div id="foundation" class="row">
        <h1 class="page-header">Foundation</h1>
        <?php showFoundation(); ?>
    </div>
    <!--/.row-->

    <div id="base" class="row sg-base-styles">
        <h1 class="page-header">Base Styles</h1>
        <?php showMarkup('base'); ?>
    </div><!--/.sg-base-styles-->
    <div id="patterns" class="sg-pattern-styles">
        <h1 class="page-header">Patterns
            <small> - Design and mark-up patterns unique to your site.</small>
        </h1>
        <?php showMarkup('patterns'); ?>
    </div>
    <!--/.sg-pattern-styles-->
</div>
<!--/.sg-body-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script src="js/scrollspy.js"></script>
<script src="js/dropdown.js"></script>
<script src="js/sg-plugins.js"></script>
<script src="js/sg-scripts.js"></script>


</body>
</html>
