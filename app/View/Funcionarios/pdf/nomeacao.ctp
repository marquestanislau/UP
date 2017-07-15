<!DOCTYPE html>
<html>
<head>
	<title>Nomea&ccedil;&atilde;o provis&oacute;ria <?php echo $funcionario['Funcionario']['nome']; ?> </title>
	<link rel="stylesheet" type="text/css" href="css/report.css">
</head>
<body>

	<div id="cabecalho">
		<img src="img/icon72x72.png">
		<h2>DIREC&Ccedil;ÃO DE RECURSOS HUMANOS</h2>
		<p id="endereco">
			Rua Comandante Augusto Cardoso nº 135, Caixa Postal 3276, Tef.: 21312585 ou 21324502; Fax nº 21312585, Maputo - Moçambique
		</p>
	</div>

	<h3 style="text-align: center;">DIPLOMA DE PROVIMENTO</h3>
	<p id="diploma">
	
		A despesa tem cabimento na dotação inserida no sector 50 capítulo 62, artigo 111001 do Orçamento do corrente ano.<br>

		_______/_______/_______ <br>
		Assinatura <br>
		 
		_______________________
	</p>


	<p class="corpo">
		Nome Completo <b><?php echo $funcionario['Funcionario']['nome'].' '.$funcionario['Funcionario']['apelido']; ?>,</b>nomeado por despacho de <b><?php echo $funcionario['Funcionario']['despacho']; ?></b> do Magnífico Reitor da Universidade Pedagógica, para a Carreira de <b><?php echo $funcionario['Carreira']['nome']; ?></b>, <?php echo $funcionario['Clazze']['nome']; ?>, <?php echo $funcionario['Escalao']['nome']; ?>, nos termos do previsto na alínea e) do artigo 1, da Resolução nº. 2/2006, de 13 de Julho, conjugado com n.° 1 do art. 34 e o n.° 4 do art.° 13, ambos do EGFAE, com colocação na <?php echo $funcionario['Delegacao']['nome']; ?>.
	</p>
	<p>
		Forma de nomeação: <b>Nomeação provisória</b>. <br>
		Observações: <b>NUIT- <?php echo $funcionario['Funcionario']['nuit']; ?></b>
	</p>

	<p id="reitor">
		Data: 22 de Fevereiro de 2012 <br>
		O Reitor	<br>
		<br>
		<br>
		Prof. Doutor Rogério José Uthui <br>
		(Docente Universitário)
	</p>
	<br>
	<p>
		Publicado na II série do Boletim da República nº ________de_____/_____/_____
	</p>
</body>
</html>