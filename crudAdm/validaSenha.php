
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<title>Validação de Senha</title>
		<link rel="stylesheet" type="text/css" href="style.css" />
		<script>
		function valido() {
		  var senha = document.formulario.senha.value;
		  
		  var letraMaiscula = 0;
		  var numero = 0;
		  var caracterEspecial = 0;
		  var caracteresEspeciais = "/([~`!@#$%\^&*+=\-\[\]\\';,/{}|\":<>\?])"; // adicione o que quiser pra validar como caracter especial
		  
		  for (var i=0; i <= senha.length; i++) {
			var valorAscii = senha.charCodeAt(i);
			
			// de A até Z
			if (valorAscii >= 65 && valorAscii <= 90)
			  letraMaiscula++;
			
			// de 0 até 9
			if (valorAscii >= 48 && valorAscii <= 57)
			  numero++;
			
			// indexOf retorna -1 quando NÃO encontra
			if (caracteresEspeciais.indexOf(senha[i]) != -1)
			  caracterEspecial++;
		  }
				
		  if( (letraMaiscula >= 3) && (numero >= 2) && (caracterEspecial >= 1)){
			alert("Senha Válida");
		  }
		  else{
			alert("Senha Inválida!");
		  }
		}
		
		function valido2(){
			var senha = document.formulario.senha.value;
			var regex = /^(?=(?:.*?[A-Z]){3})(?=(?:.*?[0-9]){2})(?=(?:.*?[!@#$%*()_+^&}{:;?.]){1})(?!.*\s)[0-9a-zA-Z!@#$%;*(){}_+^&]*$/; 
			
/*
// (?=(?:.*?[A-Z]){3}) - Mínimo 3 letras maiúsculas
// (?=(?:.*?[0-9]){2}) - Mínimo 2 números
// (?=(?:.*?[!@#$%*()_+^&}{:;?.]){1})(?!.*\s)[0-9a-zA-Z!@#;$%*(){}_+^&] - Mínimo 1 caractere especial
*/
			if(senha.length < 8)
			{
				alert("A senha deve conter no minímo 8 digitos!");
				document.formulario.senha.focus();
				return false;
			}
			else{
				if(!regex.exec(senha))
				{
					alert("A senha deve conter no mínimo 3 caracteres em maiúsculo, 2 números e 1 caractere especial!");
					document.formulario.senha.focus();
					return false;
				}
				else{
					alert("Senha Correta!");
				}
			}
			return true;
		}
		</script>
	</head>
	<body>
		<h1>Validação de Senha</h1>
	<form name="formulario">
		<label for="senha">Senha:</label> 
			<input name="senha" id="senha" required  size="10" maxlength="10" placeholder="Senha"/> 
			<p>
			<input type="submit" onclick="valido()"/>
	</form>
</form>
	
	</body>
</html>

