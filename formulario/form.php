<?php
function check_input($data){
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
    header('Content-Type: text/html; charset=utf-8');
    if(isset($_POST['email']) && !empty($_POST['email'])){

$nome = addslashes($_POST['nome']);
$sobrenome = addslashes($_POST['sobrenome']);
$empresa = addslashes($_POST['empresa']);
$cidade = addslashes($_POST['cidade']);
$estado = addslashes($_POST['estado']);
$telefone = addslashes($_POST['telefone']);
$whatsapp = addslashes($_POST['whatsapp']);
$email = addslashes($_POST['email']);
$projeto = addslashes($_POST['projeto']);
$investimento = addslashes($_POST['investimento']); 
$message = check_input($_POST['message']);
$to = "comercial@rupturesoftware.com.br";
$subject = "Quero um aplicativo!";
$body = "Nome: ".$nome. " " .$sobrenome. "\n".
        "Empresa: ".$empresa. "\n".
        "Cidade: ".$cidade. "\n".
        "Estado: ".$estado. "\n".
        "Telefone: ".$telefone. "\n".
        "WhatsApp: ".$whatsapp. "\n".
        "Email: ".$email. "\n".
        "Tipo de Projeto: ".$projeto. "\n".
        "Investimento esperado: ".$investimento. "\n".
        "Mensagem: " .$message;

$header = "From:aplicativo@rupturesoftware.com.br"."\r\n"."Reply-To: ".$email."\r\n"
            ."X=Mailer:PHP/".phpversion();

if(mail($to,$subject,$body,$header)){
    echo"Email enviado com sucesso!";
}else{
    echo"Houve um erro com o email!";
    
}
}
if (isset($_POST['enviar']))
    {   
    ?>
<script type="text/javascript">
location.href = "/criamosseuaplicativo/formulario/obrigado.html";
</script>      
<?php
}