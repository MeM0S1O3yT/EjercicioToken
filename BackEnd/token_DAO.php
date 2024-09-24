<?php
class TokenDAO{

$secretKey = 'ESENCIA';

    public function crearToken($usuario, $contraseña){
        global $secretKey;

        $token = base64_encode(json_encode(['username' => $username, 'exp' => time() + 10]));
        $signature = hash_hmac('sha256', $token, $secretKey);

        return $token . '.' .

    
    }

}

?>