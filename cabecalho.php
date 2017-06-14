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
    <link id="eCss" href="css/freelancer.min.css" rel="stylesheet">
    <!-- Está linha cima deve ser alterada, para alterar o css com auto contsrate
    O nome do arquivo com css de auto contrsate e 'freelancer.minConstraste.ccs'
    que está na pasta css 
    O arquivo que esta o botão para configurar está no arquivo acessibilidade. php-->



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
   <script src="//api.handtalk.me/plugin/latest/handtalk.min.js"></script>
        <script>
          var ht = new HT({
            token: "ec833255dce7989d6cd9d2916645b96b"
          });
        </script>
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

            function cContraste(){
                 document.getElementById("eCss").setAttribute("href", "css/freelancer.minContraste.css");
                }

            function sContraste(){
                document.getElementById("eCss").setAttribute("href", "css/freelancer.min.css");
            }
            
    </script>

         