<?php
interface INotificador{
    public function enviar($destinatário, $mensagem);
}

// implementar: Email
class NotificadorEmail implements INotificador {
public function enviar($destinatario, $mensagem){
echo"Email Enviado Para: {$destinatario}. <br>
     Assunto: {$mensagem}";
}
}

// Implementar: SMS
class NotificadorSMS implements INotificador{
public function enviar($destinatario, $mensagem){
echo"SMS Enviado Para: {$destinatario}. <br>
     Assunto: {$mensagem}";
}
}

// implementar: Whatsapp
class NotificadorWhatsapp implements INotificador{
public function enviar($destinatario, $mensagem){
echo"Whatsapp Enviado Para: {$destinatario}. <br>
     Assunto: {$mensagem}";
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
?>