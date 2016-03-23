<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="description" content="">
   <meta name="author" content="">

   <title>Timeline</title>

   <!-- Bootstrap Core CSS -->
   <link href="css/bootstrap.min.css" rel="stylesheet">
   <!-- Custom CSS -->
   <link rel="stylesheet" href="css/style.css">
</head>

<body>
   <!-- Navigation -->
   <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
         <!-- Brand and toggle get grouped for better mobile display -->
         <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Start Bootstrap</a>
         </div>
         <!-- Collect the nav links, forms, and other content for toggling -->
         <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
               <li>
                  <a href="parallax.php">Parallax</a>
               </li>
               <li>
                  <a href="timeline.php">Timeline</a>
               </li>
               <li>
                  <a href="#">Contact</a>
               </li>
            </ul>
         </div>
         <!-- /.navbar-collapse -->
      </div>
      <!-- /.container -->
   </nav>

   <!-- TIMELINE SNIPPET source: http://bootsnipp.com/snippets/featured/single-column-responsive-timeline -->
   <div class="container">

      <!-- Page header -->
      <div class="page-header">
         <h2>Timeline <small>using Bootstrap's <code>.panel</code>.</small></h2>
      </div>
      <!-- /Page header -->

      <!-- Timeline -->
      <div class="timeline">

         <!-- Line component -->
         <div class="line text-muted"></div>

         <!-- Separator -->
         <div class="separator text-muted">
            <time>26. 3. 2015</time>
         </div>
         <!-- /Separator -->

         <!-- Panel -->
         <article class="panel panel-danger panel-outline">

            <!-- Icon -->
            <div class="panel-heading icon">
               <i class="glyphicon glyphicon-heart"></i>
            </div>
            <!-- /Icon -->

            <!-- Body -->
            <div class="panel-body">
               <strong>Someone</strong> favourited your photo.
            </div>
            <!-- /Body -->

         </article>
         <!-- /Panel -->

         <!-- Panel -->
         <article class="panel panel-default panel-outline">

            <!-- Icon -->
            <div class="panel-heading icon">
               <i class="glyphicon glyphicon-picture"></i>
            </div>
            <!-- /Icon -->

            <!-- Body -->
            <div class="panel-body">
               <img class="img-responsive img-rounded" src="//placehold.it/350x150" />
            </div>
            <!-- /Body -->

         </article>
         <!-- /Panel -->

         <!-- Panel -->
         <article class="panel panel-primary">

            <!-- Icon -->
            <div class="panel-heading icon">
               <i class="glyphicon glyphicon-plus"></i>
            </div>
            <!-- /Icon -->

            <!-- Heading -->
            <div class="panel-heading">
               <h2 class="panel-title">New content added</h2>
            </div>
            <!-- /Heading -->

            <!-- Body -->
            <div class="panel-body">
               Some new content has been added.
            </div>
            <!-- /Body -->

            <!-- Footer -->
            <div class="panel-footer">
               <small>Footer is also supported!</small>
            </div>
            <!-- /Footer -->

         </article>
         <!-- /Panel -->

         <!-- Separator -->
         <div class="separator text-muted">
            <time>25. 3. 2015</time>
         </div>
         <!-- /Separator -->

         <!-- Panel -->
         <article class="panel panel-success">

            <!-- Icon -->
            <div class="panel-heading icon">
               <i class="glyphicon glyphicon-plus"></i>
            </div>
            <!-- /Icon -->

            <!-- Heading -->
            <div class="panel-heading">
               <h2 class="panel-title">New content added</h2>
            </div>
            <!-- /Heading -->

            <!-- Body -->
            <div class="panel-body">
               Anything you can do with <code>.panel</code>, can be done in timeline too!
            </div>
            <!-- /Body -->

            <!-- List group -->
            <ul class="list-group">
               <li class="list-group-item">Like</li>
               <li class="list-group-item">list</li>
               <li class="list-group-item">groups</li>
               <li class="list-group-item">and</li>
               <li class="list-group-item">tables</li>
            </ul>

         </article>
         <!-- /Panel -->

         <!-- Panel -->
         <article class="panel panel-info panel-outline">

            <!-- Icon -->
            <div class="panel-heading icon">
               <i class="glyphicon glyphicon-info-sign"></i>
            </div>
            <!-- /Icon -->

            <!-- Body -->
            <div class="panel-body">
               That is all.
            </div>
            <!-- /Body -->

         </article>
         <!-- /Panel -->

      </div>
      <!-- /Timeline -->

   </div>



   <!-- jQuery -->
   <script src="js/jquery.js"></script>
   <!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
   <!-- Custom JS -->
   <script src="js/scripts.js"></script>
</body>

</html>
