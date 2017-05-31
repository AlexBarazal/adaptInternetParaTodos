    <?php session_start ();
        $nivel_acesso = $_SESSION['userNivel'];
    
    ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Adapt Internet para Todos</title>
    
    <!-- Bootstrap Core CSS -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Theme CSS -->
    <link href="css/freelancer.min.css" rel="stylesheet">

    <!-- Temporary navbar container fix until Bootstrap 4 is patched -->
    <style>
    .navbar-toggler {
        z-index: 1;
    }
    
    @media (max-width: 576px) {
        nav > .container {
            width: 100%;
        }
    }
    </style>
    <script language="javascript">
            var tamanhotexto = new Number();
            var tamanhotexto = 14;
            function tamanhooriginal(){
                document.getElementById("conteudo").style.fontSize=tamanhotexto+'px';
            }
            function fonte(e){
                var elemento =document.getElementById("conteudo");
                var atual=elemento.style.fontSize;
                if(e == 'a'){
                    atual=parseInt(atual)+2+'px';
                }else if(e == 'b'){
                    atual=parseInt(atual)-2+'px';
                }else if(e == 'c'){
                    atual=tamanhotexto+'px';
                }
                    elemento.style.fontSize=atual;

            }
    </script>

         