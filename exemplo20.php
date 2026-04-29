<?php
interface INotificador{
    public function enviar($destinatário, $mensagem);
}

// implementar: Email
class NotificadorEmail implements INotificador {
public function enviar($destinatario, $mensagem){
echo"Email Enviado Para: {$destinatario}. <br>
     Assunto: {$mensagem} <br><br>";
}
}

// Implementar: SMS
class NotificadorSMS implements INotificador{
public function enviar($destinatario, $mensagem){
echo"SMS Enviado Para: {$destinatario}. <br>
     Assunto: {$mensagem} <br><br>";
}
}

// implementar: Whatsapp
class NotificadorWhatsapp implements INotificador{
public function enviar($destinatario, $mensagem){
echo"Whatsapp Enviado Para: {$destinatario}. <br>
     Assunto: {$mensagem} <br><br>";
}
}

// Classe que usa a interface
class SistemaDeNotificacoes {
    private $notificador;

    public function __construct(INotificador $notificador)
    {
        $this->notificador = $notificador;
    }

    public function notificarUsuario($destinatario, $mensagem)
    {
        $this->notificador->enviar($destinatario, $mensagem);
    }
}


$sistemaEmail = new SistemaDeNotificacoes(new NotificadorEmail());
$sistemaSMS = new SistemaDeNotificacoes(new NotificadorSMS());
$sistemaWhatsapp = new SistemaDeNotificacoes(new NotificadorWhatsapp());

$sistemaEmail->notificarUsuario("Joao@email.com", "Seu Pedido Foi Enviado");
$sistemaSMS->notificarUsuario("17997243667", "Seu Pedido Foi Enviado");
$sistemaWhatsapp->notificarUsuario("Miguel Teodoro", "Seu Pedido Foi Enviado");
?>