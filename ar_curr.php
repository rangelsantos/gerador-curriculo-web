<?php /*
*Criado por Rangel Santos 
*10/07/2019
*Pagina que recebe as entradas do usuario
*/ ?>

<?php include "layout/ar_header.html" ?>

<div class="main_style">
	<div class="main_content">		

		<h1 id="bigtitle">Gerador de Curriculo</h1>
		<div>
			<h3>Por favor preencha os dados abaixo</h3>
			<fieldset class="main_form">
				<form name="userdata" action="print.php" onsubmit="return myCheck(this)" method="POST">
					<div id="current_info">
						<h2>Dados Pessoais</h2>
						<label>Situação Atual</label>
						<select class="getuserinfo" name="atualmente" style="width: 190px;padding: 6px;">
							<option value="" selected>Selecione</option>
							<option value="Empregado(a)">Empregado(a)</option>
							<option value="Desempregado(a)">Desempregado(a)</option>
							<option value="Procuro um estagio(a)">Procuro um estagio(a)</option>
						</select><br>		
					</div>
					<div id="personal_data">
						<label>Nome Completo</label>
						<input id="checkName" class="getuserinfo" type="text" name="nome" placeholder="nome"><br>				
						<label>Nascimento</label>
						<select class="getuserbirday" name="dia" style="width: 60px;margin-left: -42px;">
							<option value="" selected>Dia</option>
							<option value="01">01</option>
							<option value="02">02</option>
							<option value="03">03</option>
							<option value="04">04</option>
							<option value="05">05</option>
							<option value="06">06</option>
							<option value="07">07</option>
							<option value="08">08</option>
							<option value="09">09</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
							<option value="13">13</option>
							<option value="14">14</option>
							<option value="15">15</option>
							<option value="16">16</option>
							<option value="17">17</option>
							<option value="18">18</option>
							<option value="19">19</option>
							<option value="20">20</option>
							<option value="21">21</option>
							<option value="22">22</option>
							<option value="23">23</option>
							<option value="24">24</option>
							<option value="25">25</option>
							<option value="26">26</option>
							<option value="27">27</option>
							<option value="28">28</option>
							<option value="29">29</option>
							<option value="30">30</option>
							<option value="31">31</option>
						</select>
						<select class="getuserbirday" name="mes" style="width: 120px;">
							<option value="" selected>Mês</option>
							<option value="01">Janeiro</option>
							<option value="02">Fevereiro</option>
							<option value="03">Março</option>
							<option value="04">Abril</option>
							<option value="05">Maio</option>
							<option value="06">Junho</option>
							<option value="07">Julho</option>
							<option value="08">Agosto</option>
							<option value="09">Setembro</option>
							<option value="10">Outubro</option>
							<option value="11">Novembro</option>
							<option value="12">Dezembro</option>
						</select>
						<select class="getuserbirday" name="ano" style="width: 70px;">
							<option value="" selected>Ano</option>
							<option value="1930">1930</option>
							<option value="1931">1931</option>
							<option value="1932">1932</option>
							<option value="1933">1933</option>
							<option value="1934">1934</option>
							<option value="1935">1935</option>
							<option value="1936">1936</option>
							<option value="1937">1937</option>
							<option value="1938">1938</option>
							<option value="1939">1939</option>
							<option value="1940">1940</option>
							<option value="1941">1941</option>
							<option value="1942">1942</option>
							<option value="1943">1943</option>
							<option value="1944">1944</option>
							<option value="1945">1945</option>
							<option value="1946">1946</option>
							<option value="1947">1947</option>
							<option value="1948">1948</option>
							<option value="1949">1949</option>
							<option value="1950">1950</option>
							<option value="1951">1951</option>
							<option value="1952">1952</option>
							<option value="1953">1953</option>
							<option value="1954">1954</option>
							<option value="1955">1955</option>
							<option value="1956">1956</option>
							<option value="1957">1957</option>
							<option value="1958">1958</option>
							<option value="1959">1959</option>
							<option value="1960">1960</option>
							<option value="1961">1961</option>
							<option value="1962">1962</option>
							<option value="1963">1963</option>
							<option value="1964">1964</option>
							<option value="1965">1965</option>
							<option value="1966">1966</option>
							<option value="1967">1967</option>
							<option value="1968">1968</option>
							<option value="1969">1969</option>
							<option value="1970">1970</option>
							<option value="1971">1971</option>
							<option value="1972">1972</option>
							<option value="1973">1973</option>
							<option value="1974">1974</option>
							<option value="1975">1975</option>
							<option value="1976">1976</option>
							<option value="1977">1977</option>
							<option value="1978">1978</option>
							<option value="1979">1979</option>
							<option value="1980">1980</option>
							<option value="1981">1981</option>
							<option value="1982">1982</option>
							<option value="1983">1983</option>
							<option value="1984">1984</option>
							<option value="1985">1985</option>
							<option value="1986">1986</option>
							<option value="1987">1987</option>
							<option value="1988">1988</option>
							<option value="1989">1989</option>
							<option value="1990">1990</option>
							<option value="1991">1991</option>
							<option value="1992">1992</option>
							<option value="1993">1993</option>
							<option value="1994">1994</option>
							<option value="1995">1995</option>
							<option value="1996">1996</option>
							<option value="1997">1997</option>
							<option value="1998">1998</option>
							<option value="1999">1999</option>
							<option value="2000">2000</option>
							<option value="2001">2001</option>
							<option value="2002">2002</option>
							<option value="2003">2003</option>
							<option value="2004">2004</option>
							<option value="2005">2005</option>
							<option value="2006">2006</option>
							<option value="2007">2007</option>
							<option value="2008">2008</option>
							<option value="2009">2009</option>
							<option value="2010">2010</option>
							<option value="2011">2011</option>
							<option value="2012">2012</option>
							<option value="2013">2013</option>
							<option value="2014">2014</option>
							<option value="2015">2015</option>
							<option value="2016">2016</option>
							<option value="2017">2017</option>
							<option value="2018">2018</option>
							<option value="2019">2019</option>
						</select><br>
						<label>Sexo</label>
						<select class="getuserinfo" name="sexo" style="width: 120px;padding: 5px;">
							<option value="" selected>Selecione</option>
							<option value="Masculino">Masculino</option>
							<option value="Feminino">Feminino</option>
						</select><br>
						<label>Estado Civil</label>
						<select class="getuserinfo" name="estadociv" style="width: 140px;padding: 5px;">
							<option value="" selected>Selecione</option>
							<option value="Solteiro(a)">Solteiro(a)</option>
							<option value="Casado(a)">Casado(a)</option>
							<option value="Divorciado(a)">Divorciado(a)</option>
							<option value="União estavel">União estavel</option>
							<option value="Vuivo(a)">Vuivo(a)</option>
						</select><br>		
						<label>Telefone</label>
						<input id="checkFone" class="getuserinfo" type="text" name="celular" placeholder="(00)00000-0000"><br>
						<label>E-Mail</label>
						<input id="checkEmail" class="getuserinfo" type="email" name="email" placeholder="seu-email@dominio.com"><br>
						<label>Endereço</label>
						<input id="checkEnde" class="getuserinfo" type="text" name="endereco" placeholder="seu endereço"><br>
						<label>CEP</label>
						<input id="checkCep" class="getuserinfo" type="text" name="cep" placeholder="00000-000"><br>
					</div>
					<div id="objective">
						<label>Objetivo</label>
						<input id="checkObje" class="getuserinfo" type="text" name="objetivo" placeholder="seus objetivos"><br>
					</div>
					<div id="academy">
						<h2>Formação Academica</h2>
						<div id="get_clone">
							<div id="academy_info">						
								<label>Curso</label>
								<input class="getuserinfo" type="text" name="nomecurso" placeholder="nome do curso"></input><br>
								<label>Instituição</label>
								<input class="getuserinfo" type="text" name="instituicao" placeholder="instituição"></input><br>
								<label>Ano de Conclusão</label>
								<select class="getuserbirday" name="conclusao_curso" style="width: 140px;margin-left: -104px;">
									<option value="" selected>Selecione</option>
									<option value="Concluido em: ">Concluido em: </option>
									<option value="Conclusão em: ">Conclusão em:</option>
								</select>
								<input class="getuserbirday" type="text" name="conclusao_ano" placeholder="ano" style="width: 80px;padding: 6px;"></input>
								<br>
							</div>						
						</div>
						<button type="button" id="clone" class="button_style" onclick="myClone()">Adcionar outro Curso</button><br>
					</div>
					<div id="professional">
						<h2>Experiencia Profissional</h2>
						<div id="get_clone2">
							<div id="prof_info">							
								<label>Empresa</label>
								<input class="getuserinfo" type="text" name="nomeempresa" placeholder="empresa"></input><br>
								<label>Cargo</label>
								<input class="getuserinfo" type="text" name="cargo" placeholder="cargo"></input><br>
								<label>Entrou/Saiu em</label>
								<input class="getuserbirday" type="text" name="entrou" placeholder="ano" style="width: 80px;margin-left: -133px;padding: 6px;"></input>
								<input class="getuserbirday" type="text" name="saiu" placeholder="ano" style="width: 80px;padding: 6px;"></input><br>
								<label>Atividades Desempenhadas</label>
								<textarea id="largebox" class="getuserinfo" type="text" rows="10" cols="50" name="atividades" placeholder="atividades"></textarea><br>
							</div>
						</div>
						<button type="button" id="clone2" class="button_style" onclick="myProfiClone()">Adicionar outra experiência</button><br><br>
					</div>
					<div id="references">
						<label>Referencias Pessoais</label>
						<textarea id="largebox" class="getuserinfo" type="text" rows="10" cols="50" name="referencias" placeholder="suas referencias"></textarea><br>
					</div>
					<div>
						<input class="link_style" type="submit" value="Criar Curriculo" name="salvar" style="float: right;margin-right: 20px;">
					</div>			
				</form>
			</fieldset>
		</div>

	</div>
</div>

<?php include "layout/ar_footer.html" ?>