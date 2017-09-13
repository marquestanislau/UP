<div id="cabecalho">
		<img src="img/icon72x72.png">
		<h2>DIREC&Ccedil;ÃO DE RECURSOS HUMANOS</h2>
		<p id="endereco">
			Rua Comandante Augusto Cardoso nº 135, Caixa Postal 3276, Tef.: 21312585 ou 21324502; Fax nº 21312585, Maputo - Moçambique
		</p>
	</div>

	<h3 style="text-align: center;">DIPLOMA DE PROVIMENTO</h3>
	<p id="diploma" style="text-align: center;">
	
		A despesa tem cabimento na dotação inserida no sector 50 capítulo 62, artigo 111001 do Orçamento do corrente ano.<br>

		_______/_______/_______ <br>
		Assinatura <br>
		 
		_______________________
	</p>
	<p class="corpo">
		Nome Completo <span class="bold"><?php echo $funcionario['Funcionario']['nome'].' '.$funcionario['Funcionario']['apelido']; ?>,</span> nomeado por despacho de <span class="bold"><?php echo $funcionario['Funcionario']['despacho']; ?></span> do Magnífico Reitor da Universidade Pedagógica, para a Carreira de <span class="bold"><?php echo $funcionario['Carreira']['nome'].', '; ?><?php echo 'Classe '.$funcionario['Clazze']['nome'].', ';?></span><span class="bold"><?php echo $funcionario['Escalao']['nome']; ?></span>, nos termos do previsto na alínea e) do artigo 1, da Resolução nº. 2/2006, de 13 de Julho, conjugado com n.° 1 do art. 34 e o n.° 4 do art.° 13, ambos do EGFAE, com colocação na <span class="bold"><?php echo $funcionario['Delegacao']['nome']; ?></span>.
		<br>
		<br>
		Forma de nomeação: <b>Nomeação provisória</b>. <br>
		Observações: <b>NUIT- <?php echo $funcionario['Funcionario']['nuit']; ?></b>
	</p>
	<p id="reitor">
		Data: 
		<?php
		$day = date('d'); 
		$month = date('m'); 
		$year = date('Y');

		 switch ($month) {
			case 1:
				$month = 'Janeiro';
				break;
			case 2:
				$month = 'Fevereiro';
				break;
			case 3:
				$month = 'Março';
				break;
			case 4:
				$month = 'Abril';
				break;
			case 5:
				$month = 'Maio';
				break;
			case 6:
				$month = 'Junho';
				break;	
			case 7:
				$month = 'Julho';
				break;
			case 8:
				$month = 'Agosto';
				break;
			case 9:
				$month = 'Setembro';
				break;
			case 10:
				$month = 'Outubro';
				break;
			case 11:
				$month = 'Novembro';
				break;
			default:
				$month = 'Dezembro';
				break;
		} 
		
		echo $day.' de '.$month.' de '.$year;
		?>
		<br>
		O Reitor<br>
		<br>
		Prof. Doutor Rogério José Uthui <br>
		(Docente Universitário)
	</p>
	<p style="text-align: center;">
		Publicado na II série do Boletim da República nº ________de_____/_____/_____
	</p>

	<!-- Despacho  -->

	<div  class="cabecalho">
			<img src="img/icon72x72.png">
			<h2>DIREC&Ccedil;ÃO DE RECURSOS HUMANOS</h2>
			<p id="endereco">
				Rua Comandante Augusto Cardoso nº 135, Caixa Postal 3276, Tef.: 21312585 ou 21324502; Fax nº 21312585, Maputo - Moçambique
			</p>
		</div>

		<h3 style="text-align: center; margin-top: 9%; margin-bottom: 9%;">DESPACHO</h3>

		<p class="corpo">
			<span class="bold"><?php echo $funcionario['Funcionario']['nome'].' '.$funcionario['Funcionario']['apelido']; ?>,</span> portadora do <b>NUIT- <?php echo $funcionario['Funcionario']['nuit']; ?></b>, nomeada ao abrigo do previsto no C&oacute;digo <?php echo $funcionario['Carreira']['codigo'].','; ?> da Resolução nº. <?php echo $funcionario['Carreira']['resolucao']; ?>, de 13 de Julho, conjugado com n.° <?php echo $funcionario['Carreira']['primeiro_numero']; ?> do art. <?php echo $funcionario['Carreira']['primeiro_artigo']; ?> e o n.° <?php echo $funcionario['Carreira']['segundo_numero']; ?> do art.° <?php echo $funcionario['Carreira']['segundo_artigo']; ?>, ambos do EGFAE, <span class="bold">Carreira de <?php echo $funcionario['Carreira']['nome'].', '; ?></span><span class="bold"><?php echo 'Classe '.$funcionario['Clazze']['nome'].', '.$funcionario['Escalao']['nome']; ?></span>.
		</p>

		<p id="reitor" style="margin-top: 10%;">
			<?php
			$day = date('d'); 
			$month = date('m'); 
			$year = date('Y');

			 switch ($month) {
				case 1:
					$month = 'Janeiro';
					break;
				case 2:
					$month = 'Fevereiro';
					break;
				case 3:
					$month = 'Março';
					break;
				case 4:
					$month = 'Abril';
					break;
				case 5:
					$month = 'Maio';
					break;
				case 6:
					$month = 'Junho';
					break;	
				case 7:
					$month = 'Julho';
					break;
				case 8:
					$month = 'Agosto';
					break;
				case 9:
					$month = 'Setembro';
					break;
				case 10:
					$month = 'Outubro';
					break;
				case 11:
					$month = 'Novembro';
					break;
				default:
					$month = 'Dezembro';
					break;
			} 
			
			echo 'Universidade Pedagógica '.$day.' de '.$month.' de '.$year.'<br>';
			?>
			<br>
			O Reitor	<br>
			<br>
			<br>
			<br>
			(Prof. Doutor Rogério José Uthui) <br>
		</p>

		<br>
		<p style="position: fixed; bottom: 0; font-size: small; border-bottom: 5px gray solid; text-align: center;">
			Rua João Carlos Rapouso Beirão , Caixa Postal 3276, Tef.: 21312585; Fax nº 21312585 Maputo Moçambique
		</p>