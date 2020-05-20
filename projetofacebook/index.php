<!DOCTYPE html>
<html>
<head>
	<title>Facebook</title>
	<meta charset="utf-8">
	<meta name="description" content="Facebook, a rede social">
	<meta name="keywords" content="facebook,rede,social">
	<meta name="author" content="Mateus Rodrigues Baraçal">
	<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>

	<header>
		<div class="center">
			<div class="logo">
				<h2>Facebook</h2>
			</div><!--logo-->

			<form method="post" class="form-login">
				<div class="form-element">
					<p>Email:</p>
					<input type="email" name="email">
				</div><!--form-element-->

				<div class="form-element">
					<p>Senha:</p>
					<input type="password" name="password">
				</div><!--form-element-->

				<div class="form-element">
					<input type="submit" name="acao" value="Entrar">
				</div><!--form-element-->
				<div class="clear"></div>

				<div class="form-recuperar">
					<a href="">Esqueceu sua conta?</a>
				</div>
			</form><!--form-login-->


			<div class="clear"></div>

		</div><!--center-->
	</header>

	<section class="main">
		<div class="center">
			<div class="img-pessoas">
				<img src="images/img.png">
			</div><!--img-pessoas-->

			<div class="abrir-conta">
				<h2>Abra sua conta</h2>
				<h3>É gratuito e sempre será!</h3>

				<form class="criar-conta">
					<div class="w50">
						<input type="text" placeholder="Nome" name="">
					</div><!--w50-->

					<div class="w50">
						<input type="text" placeholder="Sobrenome" name="">
					</div><!--w50-->

					<div class="w100">
						<input type="email" placeholder="Email" name="">
					</div><!--w100-->

					<div class="w100">
						<input type="password" placeholder="Senha" name="">
					</div><!--w100-->

					<div class="w100">
						<h2>Data de nascimento</h2>
						<select  name="nascimento-dia" class="nascimento">
							<?php
								for($i = 1; $i <= 31; $i++){
							?>
							<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
							<?php }?>
						</select>

						<select  name="nascimento-mes" class="nascimento">
							<option value="0">Janeiro</option>
							<option value="0">Fevereiro</option>
							<option value="0">Março</option>
							<option value="0">Abril</option>
							<option value="0">Maio</option>
							<option value="0">Junho</option>
							<option value="0">Julho</option>
							<option value="0">Agosto</option>
							<option value="0">Setembro</option>
							<option value="0">Outubro</option>
							<option value="0">Novembro</option>
							<option value="0">Dezembro</option>
						</select>

						<select name="nascimento-ano" class="nascimento">
							<?php
								for($i = 1960; $i <= 2020; $i++){
							?>
							<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
							<?php }?>
						</select>
						<div class="clear"></div>
					</div><!--w100-->

					<div class="w100">
						<div class="input-radio">
							<input type="radio" name="sexo" value="masculino">
							<h2>Masculino</h2>
						</div><!--input-radio-->
						<div class="input-radio">
							<input type="radio"  name="sexo" value="feminino">
							<h2>Feminino</h2>
						</div><!--input-radio-->
						<div class="clear"></div>
					</div><!--w100-->

					<div class="termos">
						<p>Ao clicar em Cadastre-se, você concorda com nossos Termos, Política de Dados e Política de Cookies. Você pode receber notificações por SMS e pode cancelar isso quando quiser.</p>
					</div>

					<div class="w100">
						<input type="submit" name="acao" value="Cadastre-se">
					</div>

					<div class="clear"></div>
				</form><!--criar-conta-->
			</div><!--abrir-conta-->

			<div class="clear"></div>
		</div><!--center-->
	</section><!--main-->

	<section class="linguas">
		<div class="center">
			<a class="linguagem-selecionada" href=""> Português(BR)</a>
			<a href=""> Português(BR)</a>
			<a href=""> English(US)</a>
			<a href=""> Español</a>
			<a href=""> Français(France)</a>
			<a href=""> Italiano</a>
			<a href=""> Deutsch</a>
			<a href=""> العربية </a>
			<a href=""> हिन्दी</a>
			<a href=""> 中文(简体) </a>
			<a href=""> 日本語</a>
		</div><!--center-->
		
	</section>

</body>
</html>