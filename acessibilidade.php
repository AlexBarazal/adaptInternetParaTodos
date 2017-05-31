<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php include_once "cabecalho.php" ?>
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
</head>
<body id="page-top" onload="tamanhooriginal()"  class="index">
			    
			<div id="barra-acessibilidade">
			<a href="index.php#inicio" accesskey="1" alt="Ir para conteudo">Ir para o conteúdo</a>
			<a href="#navegacao.php#mainNav" accesskey="2" alt="Ir para o menu">Ir para o menu</a>
			<input type="button" value="A+" onclick="fonte('a');"  alt="Aumentar Fonte"/>
			<input type="button" value="a-" onclick="fonte('b');"  alt="Aumentar Fonte"/>
			<input type="button" value="Original" onclick="fonte('c');"  alt="Tamnho original"/>
			<a href="#navegacao.php#mainNav" accesskey="4" alt="Diminuir Fonte" >a<i class="fa fa-minus-square-o" aria-hidden="true"></i></a>
			<a href="javascript:void(0);" title="Ative uma versão em autocontraste do site">Versão em autocontraste</a>
			<a href="javascript:void(0);" title="Versão normal">Versão padrão</a>
			</div>
			
			
			<div onload="tamanhooriginal()" id="conteudo" >
				Todos as descrições das pessoas são sobre a humanidade do atendimento, a pessoa pega no pulso, examina, olha com carinho. Então eu acho que vai ter outra coisa, que os médicos cubanos trouxeram pro brasil, um alto grau de humanidade.

				A única área que eu acho, que vai exigir muita atenção nossa, e aí eu já aventei a hipótese de até criar um ministério. É na área de... Na área... Eu diria assim, como uma espécie de analogia com o que acontece na área agrícola.
			</div>


 <?php include_once "rodape.php" ?>
    </body>
   
</html>

