<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>ADOPET</title>
		<link rel="icon" type="image/x-icon" href="https://cdn-icons-png.flaticon.com/512/12/12638.png">
		<link rel="stylesheet" href="estilo.css">
		<script language="javascript">
			var imagens=[];
			imagens[0]="https://www.azpetshop.com.br/blog/wp-content/uploads/2020/06/adotar-gato-805x452.jpeg";
			imagens[1]="http://www.petdoctor.com.br/wp-content/uploads/2021/04/10RacasDeCaesMaisPopularesNoBrasil-Topo-Abr21.jpg";
			imagens[2]="https://www.chefbob.com.br/wp-content/uploads/2021/05/2021-05-12-como-deixar-os-gatos-mais-tranquilos.jpg";
			imagens[3]="https://super.abril.com.br/wp-content/uploads/2020/09/04-09_gato_SITE.jpg?quality=70&strip=info";
			imagens[4]="https://vamospet.com/wp-content/uploads/2022/01/Diferencas-entre-cacatua-e-calopsita.-Descubra-agora_.webp";
			var cont=0;
			function altera(){
				document.getElementById("imgPrincipal").src=imagens[cont];
				cont++;
				if(cont==5){
					cont=0;
				}
			}
			setInterval(altera,2000);
		</script>
	</head>
	<body>
		<div id="titulo"><a href="index.php" style="text-decoration:none;color:inherit"> ADOPET </a></div>
		<nav>
			<div id="menu">
				<ul>
					<li id="home"><a href="#">HOME</a></li>
					<li id="doacoes"><a href="doacoes.html">DOAÇÕES</a></li>
					<li id="quemsomos"><a href="sobre.html">QUEM SOMOS</a></li>
					<li id="fale"><a href="contato.html">FALE CONOSCO </a></li>
					<li id="cadastro"><button><a href="cadastroNovoUsuario.php">CADASTRO</a></button></li>
					<li id="login"><button><a href="login.php">LOGIN</a></button></li>
				</ul>
			</div>
		</nav>
		<div id="conteudo">
		<p align="center">
			<img style="margin:auto;width:40%;height:40%;padding:1.6%;" id="imgPrincipal" src=https://www.azpetshop.com.br/blog/wp-content/uploads/2020/06/adotar-gato-805x452.jpeg>
		</p>
		</div>
		</div>
	</body>
</html>