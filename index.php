<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Device</title>

     <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="http://getbootstrap.com/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="http://getbootstrap.com/examples/cover/cover.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/editor.css" rel="stylesheet">
    <link href="css/introjs.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
  <?php include("analyticstracking.php") ?>

    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">


          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand">The Device</h3>
              <nav>
                <ul class="nav masthead-nav">
                  <li class="active"><a href="#">Home</a></li>
                  <li><a href="#">Features</a></li>
                  <li><a href="#">Contact</a></li>
                </ul>
              </nav>
            </div>
          </div>

          <div class="inner cover">
            
            <h1 class="cover-heading glow" data-intro="Hi there, thanks for trying this out!<br>I'll very quickly show you how it works. Please click 'next'." data-step="1" data-position="bottom-middle-aligned">Program your Grow Room</h1>
            
            <h3>
                Instead of many devices, you'll now need just one. 
            </h3>
            
            <p>
            <button type="button" class="btn btn-success btn" aria-label="Show Tutorial" id="tutorialButton" style="margin-top:20px;">
              <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Click to Learn how in 30 seconds.
            </button>
            </p>
            


<div>

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#device" aria-controls="device" role="tab" data-toggle="tab">Device</a></li>
    <li role="presentation"><a href="#rules" aria-controls="rules" role="tab" data-toggle="tab" data-step="4" data-position="top" data-intro="Now it's time to tell your device what to do.">Rules</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="device"><?php include('device.php') ?></div>
    <div role="tabpanel" class="tab-pane" id="rules"><?php include('editor.php') ?></div>
  </div>
  


</div>            
       
            
          </div>

          <div class="mastfoot">
            <div class="inner">
              <p><a href="http://www.rollitup.org/t/smart-fan-speed-controller-a-good-idea-or-nah.894719/" target="_blank">Join the discussion at Rollitup</a>.</p>
              <p>by QVPark, +61 (0) 437 123 972, vritzka@gmail.com</p>
              <p>Cover template for <a href="http://getbootstrap.com">Bootstrap</a>, by <a href="https://twitter.com/mdo">@mdo</a>.</p>
            </div>
          </div>

        </div>

      </div>

    </div>

    
    
    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="http://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    <script src="js/intro.min.js"></script>
    <script src="js/js.js"></script>
  </body>
</html>
