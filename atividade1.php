<Doctype html>
<html>
   <head>
        <title> Atividade 01 </title>
    <head>
    <body>
    <?php
       $nome = "Nataly Bonfim" ;
       $sobrenome = "Tobias" ;
       $nomecompleto = $nome. " " .$sobrenome;
       $av = "Av Dr. Leweger";
       $bairro = "são josé";
       $numcasa = "1388";
       $estado = "rondonia";
       $cidade = "guajara-mirim";
       $email = "nataly.tobias11@gmail.com";
       $telefone = "(69) 984959261";
       $pai = "Ademir Tobias";
       $mae = "Rosely Bonfim"; 
       $nascimento = "21/03/2002";
       $idade = "19";
       $endereco = $bairro. ", " .$numcasa;

       echo "<h2>Sobre mim</h2>";
       echo "Meu nome é {$nomecompleto} e meus pais são {$pai} e {$mae}.";
       print ("<br>");
       echo "data de nascimento {$nascimento} - {$idade} anos";
       print ("<br>");
       echo "localização {$av}, {$bairro}, {$numcasa}";
       print ("<br>");
       echo "contatos: {$email} e {$telefone}";
       

    ?> 
    </body>
</html>
