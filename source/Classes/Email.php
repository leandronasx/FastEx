<?php
    namespace Source\Classes\Email;

    class Email{
        private $name;
        private $email;
        private $subject;

        public function __construct($name, $email, $subject){
            $this->name = $name;
            $this->email = $email;
            $this->subject = $subject;
        }

        public function submit(){
            $headers = "Content-Type: text/html; charset=utf-8\r\n";
            $headers .= "From: $this->email\r\n";
            $headers .= "Reply-To: $this->email\r\n";

            $body = "Formulário da página de contato <br>";
            $body .= "Nome: " . $this->name . " <br>";
            $body .= "Email: " . $this->email . " <br>";

            $email_to = 'fastex.expressamenterapido@gmail.com';

            mail($email_to, mb_encode_mimeheader($this->subject, "utf-8"), $body, $headers);
        }
    }
?>