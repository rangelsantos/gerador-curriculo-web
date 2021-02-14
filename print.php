<?php /*
*Criado por Rangel Santos 
*10/07/2019
*Pagina que gera o curriculo
*css, cabeçario e footer proprios
*/ ?>

<!DOCTYPE html>
<html>
<head>
	<title>Curriculo</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/ar_style.css">
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" type="text/css" href="css/print.css">
	<script type="text/javascript" src="js/ar_script.js"></script>
</head>
<body>

	<div id="printpage">
		<button type="button" id="myprint" class="button_style" onclick="myPrint()" style="margin-left: 0;">Imprimir</button><br>
		<div class="finalcurriculo">
			<div id="personal_data">
				<h3 style="font-size: 30px;text-align: center;">
					<?php echo htmlspecialchars ($_REQUEST['nome']); ?>
				</h3>
				<h2>Dados Pessoais</h2>
				<ul>
					<li>
						<?php 
						echo ('Nascimento: '); echo htmlspecialchars ($_REQUEST['dia']); 
						echo ("/"); echo htmlspecialchars ($_REQUEST['mes']); 
						echo ("/"); echo htmlspecialchars ($_REQUEST['ano']); 
						?>				
					</li>
					<li><?php echo ('Sexo: '); echo htmlspecialchars ($_REQUEST['sexo']); ?></li>
					<li><?php echo ('Estado civil: '); echo htmlspecialchars ($_REQUEST['estadociv']); ?></li>
					<li><?php echo ('Telefone: '); echo htmlspecialchars ($_REQUEST['celular']); ?></li>
					<li><?php echo ('E-Mail: '); echo htmlspecialchars ($_REQUEST['email']); ?></li>
					<li><?php echo ('CEP: '); echo htmlspecialchars ($_REQUEST['cep']); ?></li>
					<li><?php echo ('Endereço: '); echo htmlspecialchars ($_REQUEST['endereco']); ?></li>
				</ul>
			</div>
			<div id="current_info">
				<h2>Atualmente</h2>
				<ul>
					<li><?php echo htmlspecialchars ($_REQUEST['atualmente']); ?></li>
				</ul>
			</div>
			<div id="objective">
				<h2>Objetivo</h2>
				<ul>
					<li><?php echo htmlspecialchars ($_REQUEST['objetivo']); ?></li>
				</ul>
			</div>
			<div id="academy">
				<h2>Escolaridade</h2>				
				<?php
					if (isset($_REQUEST['nomecurso'])){
						echo "<ul>";
							echo "<li><strong>"; echo htmlspecialchars ($_REQUEST['nomecurso']); echo "</strong></li>";
							echo "<li>"; echo ('Instituicão: '); echo htmlspecialchars ($_REQUEST['instituicao']); echo "</li>";
							echo "<li>"; echo htmlspecialchars ($_REQUEST['conclusao_curso']); echo htmlspecialchars ($_REQUEST['conclusao_ano']); echo "</li>";
						echo "</ul>";					
					}
					if (isset($_REQUEST['nomecurso1'])){
						echo "<ul>";
							echo "<li><strong>"; echo htmlspecialchars ($_REQUEST['nomecurso1']); echo "</strong></li>";
							echo "<li>"; echo ('Instituicão: '); echo htmlspecialchars ($_REQUEST['instituicao1']); echo "</li>";
							echo "<li>"; echo htmlspecialchars ($_REQUEST['conclusao_curso1']); echo htmlspecialchars ($_REQUEST['conclusao_ano1']); echo "</li>";
						echo "</ul>";					
					}
					if (isset($_REQUEST['nomecurso2'])){
						 echo "<ul>";
							echo "<li><strong>"; echo htmlspecialchars ($_REQUEST['nomecurso2']); echo "</strong></li>";
							echo "<li>"; echo ('Instituicão: '); echo htmlspecialchars ($_REQUEST['instituicao2']); echo "</li>";
							echo "<li>"; echo htmlspecialchars ($_REQUEST['conclusao_curso2']); echo htmlspecialchars ($_REQUEST['conclusao_ano2']); echo "</li>";
						echo "</ul>";					
					}
					if (isset($_REQUEST['nomecurso3'])){
						echo "<ul>";
							echo "<li><strong>"; echo htmlspecialchars ($_REQUEST['nomecurso3']); echo "</strong></li>";
							echo "<li>"; echo ('Instituicão: '); echo htmlspecialchars ($_REQUEST['instituicao3']); echo "</li>";
							echo "<li>"; echo htmlspecialchars ($_REQUEST['conclusao_curso3']); echo htmlspecialchars ($_REQUEST['conclusao_ano3']); echo "</li>";
						echo "</ul>";					
					}
				?>
			</div>
			<div id="professional">
				<h2>Experiencias Profissionais</h2>
				<?php
					if (isset($_REQUEST['nomeempresa'])){
						echo "<ul>";
							echo "<li>"; echo ('Empresa: '); echo "<strong>"; echo htmlspecialchars ($_REQUEST['nomeempresa']); echo "</strong></li>";
							echo "<li>"; echo ('Cargo: '); echo htmlspecialchars ($_REQUEST['cargo']); echo "</li>";
							echo "<li>"; echo ('Periodo: '); echo htmlspecialchars ($_REQUEST['entrou']); echo (' a '); echo htmlspecialchars ($_REQUEST['saiu']); echo "</li>";
							echo "<li>"; echo ('Atividades: '); echo htmlspecialchars ($_REQUEST['atividades']); echo "</li>";
						echo "</ul>";
					}
					if (isset($_REQUEST['nomeempresa1'])){
						echo "<ul>";
							echo "<li>"; echo ('Empresa: '); echo "<strong>"; echo htmlspecialchars ($_REQUEST['nomeempresa1']); echo "</strong></li>";
							echo "<li>"; echo ('Cargo: '); echo htmlspecialchars ($_REQUEST['cargo1']); echo "</li>";
							echo "<li>"; echo ('Periodo: '); echo htmlspecialchars ($_REQUEST['entrou1']); echo (' a '); echo htmlspecialchars ($_REQUEST['saiu1']); echo "</li>";
							echo "<li>"; echo ('Atividades: '); echo htmlspecialchars ($_REQUEST['atividades1']); echo "</li>";
						echo "</ul>";
					}
					if (isset($_REQUEST['nomeempresa2'])){
						echo "<ul>";
							echo "<li>"; echo ('Empresa: '); echo "<strong>"; echo htmlspecialchars ($_REQUEST['nomeempresa2']); echo "</strong></li>";
							echo "<li>"; echo ('Cargo: '); echo htmlspecialchars ($_REQUEST['cargo2']); echo "</li>";
							echo "<li>"; echo ('Periodo: '); echo htmlspecialchars ($_REQUEST['entrou2']); echo (' a '); echo htmlspecialchars ($_REQUEST['saiu2']); echo "</li>";
							echo "<li>"; echo ('Atividades: '); echo htmlspecialchars ($_REQUEST['atividades2']); echo "</li>";
						echo "</ul>";
					}
					if (isset($_REQUEST['nomeempresa3'])){
						echo "<ul>";
							echo "<li>"; echo ('Empresa: '); echo "<strong>"; echo htmlspecialchars ($_REQUEST['nomeempresa3']); echo "</strong></li>";
							echo "<li>"; echo ('Cargo: '); echo htmlspecialchars ($_REQUEST['cargo3']); echo "</li>";
							echo "<li>"; echo ('Periodo: '); echo htmlspecialchars ($_REQUEST['entrou3']); echo (' a '); echo htmlspecialchars ($_REQUEST['saiu3']); echo "</li>";
							echo "<li>"; echo ('Atividades: '); echo htmlspecialchars ($_REQUEST['atividades3']); echo "</li>";
						echo "</ul>";
					}
				?>				
			</div>
			<div id="references">
				<h2>Referencias e Informações Adcionais</h2>
				<ul>
					<li><?php echo htmlspecialchars ($_REQUEST['referencias']); ?></li>
				</ul>
			</div>
		</div>		
	</div>

</body>
</html>