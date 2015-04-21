<form action="destino.php" method="post" name="cadastro">
Nome: <input name="nome" type="text" id="nome"><br>
E-Mail:<input name="email" type="text" id="email"><br>
Mensagem:<textarea name="mensagem" cols="36" rows="4"></textarea><br>
<input type="button" name="button" id="button" onclick="return validaForm()" value="OK" />

<script type="text/javascript">
 
function validaForm(){
           d = document.cadastro;
           //validar nome
           if (d.nome.value == ""){
                     alert("O campo NOME  deve ser preenchido!");
                     d.nome.style.backgroundColor="red";
                     d.nome.style.color="#ffffff";
                    d.nome.focus();
                     return false;
           }
           //validar user
          
          
          
            if (d.email.value == ""){
                   alert("O campo EMAIL  deve ser preenchido!");
                   d.email.style.backgroundColor="red";
                   d.email.style.color="#ffffff";
                   d.email.focus();
                   return false;
         }
         //validar email(verificao de endereco eletrônico)
         parte1 = d.email.value.indexOf("@");
         parte3 = d.email.value.length;
         if (!(parte1 >= 3 && parte3 >= 9)) {
                   alert ("O campo EMAIL  deve ser conter um endereco eletronico!");
                   d.email.style.backgroundColor="red";
                   d.email.style.color="#ffffff";
                   d.email.focus();
                    
                   return false;
         }if (d.mensagem.value == ""){
                     alert("Digite nos a mensagem!");
                     d.mensagem.style.backgroundColor="red";
                     d.mensagem.style.color="#ffffff";
                     return false;
                     d.conheceu.focus();
           }
document.cadastro.submit();
         
}
 
  
 </script>
 
 