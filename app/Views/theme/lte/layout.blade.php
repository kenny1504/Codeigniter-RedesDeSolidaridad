<!DOCTYPE html>
<html>
<head>
  
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="icon" href="assets/lte/dist/img/logo.png">
        <title> <?=$this->renderSection('titulo')?> | Redes De Solidaridad</title> <!-- Titulo de la pagina-->
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.7 -->

         <link rel="stylesheet" href="bootstrap.min.css" type="text/css">
        <!-- Font Awesome -->
        <link  rel="stylesheet" type="text/css" href="assets/lte/bower_components/font-awesome/css/font-awesome.min.css" >
        <!-- Ionicons -->
        <link rel="stylesheet" type="text/css" href="assets/lte/bower_components/Ionicons/css/ionicons.min.css" >
        <!-- Theme style -->
        <link rel="stylesheet" type="text/css" href="assets/lte/dist/css/AdminLTE.min.css" >
        <!-- AdminLTE Skins. Choose a skin from the css/skins
            folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" type="text/css" href="assets/lte/dist/css/skins/_all-skins.min.css" >
      
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

      
</head>
    <body class="hold-transition skin-blue sidebar-mini fixed">
<!-- Site wrapper -->
       <div class="wrapper">
                    <!--inicio header-->
                  <?= $this->include("theme/lte/usuario.blade.php") ?> <!-- vista contiene todos los datos del usuario SIEMPRE INCLUIR EN TODAS LAS VISTAS -->
                  <?= $this->include("theme/lte/hearder.blade.php")  ?><!-- Hearder de la pagina inicio-->
                    <!--fin header -->
                    <!--inicio aside -->
                    <?= $this->include("theme/lte/aside.blade.php") ?><!-- aside o menu lateral de la pagina inicio-->
                    <!--fin aside -->
                    <div class="content-wrapper">  
                        
                            <!--******** include de Materia ********-->   

                    <?= $this->renderSection ('contenido') ?> 
                    <?= $this->include("Materia/crear.blade.php") ?><!-- Modal crear materia-->
                    <?= $this->include("Materia/eliminar.blade.php") ?><!-- Modal eliminar materia-->      
                    <?= $this->include("Materia/editar.blade.php") ?><!-- Modal editar materia-->  

                            <!--******** include de Oficios ********-->   

                    <?= $this->include("Oficio/crear.blade.php") ?><!-- Modal crear materia-->     
                    <?= $this->include("Oficio/eliminar.blade.php") ?><!-- Modal eliminar oficio-->    
                    <?= $this->include("Oficio/editar.blade.php") ?><!-- Modal editar oficio-->  

                    <!--******** include de Parentesco ********-->  
                    <?= $this->include("Parentesco/crear.blade.php") ?><!-- Modal crear Parentesco-->
                    <?= $this->include("Parentesco/eliminar.blade.php") ?><!-- Modal eliminar Parentesco-->    
                    <?= $this->include("Parentesco/editar.blade.php")?> <!-- Modal editar Parentesco-->  

                    
                            <!--******** include de Generales ********-->   
                    <?= $this->include("Alertas/exito.blade.php") ?><!-- Modal mensaje "Exito" -->  
                            

                    </div>
            <!--inicio footer -->
            <div>
            <?= $this->include("theme/lte/footer.blade.php") ?><!-- footer de la pagina inicio-->
            </div>        
            <!--fin footer -->

        <!-- jQuery 3 -->
       </div>
        <script type="text/javascript" src="assets/lte/bower_components/jquery/dist/jquery.min.js"> </script>
        <script type="text/javascript" src="assets/lte/bower_components/bootstrap/dist/js/bootstrap.min.js"> </script>
        <script type="text/javascript" src="assets/lte/dist/js/adminlte.min.js"> </script>
        <script type="text/javascript" src="assets/lte/bower_components/fastclick/lib/fastclick.js"> </script>
        <script type="text/javascript" src="assets/lte/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"> </script>


        <script type="text/javascript" src="js/jquery/jquery.validate.min.js"></script>
        <script type="text/javascript" src="js/jquery/localization/messages_es.min.js"></script>
        <script type="text/javascript" src="js/funciones.js"></script>

        <!--********************* script  "Materia" *************************-->

        <script type="text/javascript" src="js/js-redes/Materia/agregar.js"></script> <!-- escript para validar datos requeridos-->
        <script type="text/javascript" src="js/js-redes/Materia/crear.js"></script> <!-- escript para ingresar datos por ajax-->
        <script type="text/javascript" src="js/js-redes/Materia/eliminar.js"></script> <!-- script eliminar materia-->
        <script type="text/javascript" src="js/js-redes/Materia/editar.js"></script> <!-- script editar materia-->

        <!--********************* script  "oficio" *************************-->
        <script type="text/javascript" src="js/js-redes/Oficio/agregar.js"></script> <!-- escript para validar datos requeridos-->
        <script type="text/javascript" src="js/js-redes/Oficio/crear.js"></script> <!-- escript para ingresar datos por ajax-->
        <script type="text/javascript" src="js/js-redes/Oficio/eliminar.js"></script> <!-- script eliminar oficio-->
        <script type="text/javascript" src="js/js-redes/Oficio/editar.js"></script> <!-- script editar oficio-->

        <!--********************* script  "parentesco" *************************-->
        <script type="text/javascript" src="js/js-redes/Parentesco/agregar.js"></script> <!-- escript para validar datos requeridos-->
        <script type="text/javascript" src="js/js-redes/Parentesco/crear.js"></script> <!-- escript para ingresar datos por ajax-->
        <script type="text/javascript" src="js/js-redes/Parentesco/eliminar.js"></script> <!-- script eliminar parentesco-->
        <script type="text/javascript" src="js/js-redes//Parentesco/editar.js"></script> <!-- script editar parentesco-->


      </body>
</html>


