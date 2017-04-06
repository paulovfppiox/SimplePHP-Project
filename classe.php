<?php

require("Singleton.php");

$pageHTML = Singleton::singleton();

// Defini��o de m�ltiplos arquivos de estilo (CSS) e JS
$cssParams = array("estilo.css", "estilo2.css", "estilo3.css");
$jvParams = array("java1.js", "java2.js", "java3.js");
$pageHTML->setStylesArray($cssParams);
$pageHTML->setJSArray($jvParams);

// Defini��o do ID do estilo e JS atual
$pageHTML->setStyle(0);
$pageHTML->setJavascript(1);

// Defini��o do titulo, head e corpo da p�gina
$pageHTML->setTitle("Virtual Reality (VR) Solutions");
$pageHTML->head();
$pageHTML->setPage('<body bgcolor="#F4F4F4">
			    <center>
			    <div id="topo" style="padding-bottom:12px;"><middle><br><h1 style="padding-left:600px; font-style:oblique; font:Verdana"> Corollarium </h1></middle>
			    </div>
				
			    <div id="menu">
			    <a href="?pag=home"><input class="botoesMenu" type="button" value="Execute Javascript" onclick="funcao();"></a>
			    <a href="?pag="><input class="botoesMenu" type="button" value="Regras"></a> 
			    <a href="?pag="><input class="botoesMenu" style="border-right:none;" type="button" value="Equipe"></a> 
			    </div>
				
				<body>	
				<h5> Sobre N�s </h5>

				<div id="texto"> 
					<img src="logo.jpg" align="right" alt="Logo" width="15%" height="20%" />
				
				<p> 
				Em 2005, um grupo de pesquisadores saindo da p�s-gradua��o, com experi�ncia em <br /> 
				desenvolvimento de software na �rea de computa��o gr�fica e distribu�da, come�ou <br />
				a trabalhar em conjunto, desenvolvendo solu��es de Realidade Virtual, Realidade <br />
				Aumentada e Processamento de Imagens. Esta foi a semente da Corollarium, que desde <br />
				ent�o expandiu e cresceu. Por desenvolver toda a sua tecnologia internamente, a <br />
				Corollarium pode criar solu��es customizadas para suas necessidades, consulte-nos. <br />
				</p>
				
				</div>	
				</body>');

$pageHTML->setRodape('<div id="base">
				<input type="hidden" value="base">
				</div>
				</center>
				</body>
				</html>');
			

// Renderiza��o da p�gina			
$pageHTML->render();


?>