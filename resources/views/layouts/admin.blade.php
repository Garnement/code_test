<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Code Test</title>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
    <div class="container">
        <div class="row blue-grey darken-1">
            @include('back.partials.nav')
        </div>      
        <div class="row"> 
            <div class="col s3 blue-grey darken-1">
                @include('back.partials.sidebar')   
            </div>  
            <div class="col s9">      
                @yield('content')
            </div>
        </div>

        <div class="row">
            @include('partials.footer')
        </div>
    </div>

      <!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
<script>
 $(document).ready(function() {
    $('.button-collapse').sideNav();
    
    $('select').material_select();

    //Gestion de la popup
    $('#flash').delay(3000).fadeOut();

    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();

    $('.modal').modal({
        dismissible: false, // Modal can be dismissed by clicking outside of the modal
        opacity: .5, // Opacity of modal background
        inDuration: 300, // Transition in duration
        outDuration: 200, // Transition out duration
        startingTop: '4%', // Starting top style attribute
        endingTop: '10%', // Ending top style attribute
        }
    );
  });
</script>
</body>
</html>