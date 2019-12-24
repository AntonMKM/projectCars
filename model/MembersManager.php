<?php
class MembersManager extends DbConnect
{
    function signup(Member $data)
    {
        $pdo = $this->Connect();
        $insert = "INSERT INTO members (lastname, firstname, email, pass, address) VALUES (:lastnamee, :firstname, :email, pass, adress)";
        $signup = $pdo->prepare($insert);
        $signup->execute([
            'lastname' => htmlspecialchars($data->getLastname()),
            'firstname' => htmlspecialchars($data->getFirstname()),
            'email' => htmlspecialchars($data->getEmail()),
            'pass' => password_hash($data->getPass(), PASSWORD_DEFAULT),
            'address' => htmlspecialchars($data->getAddress())
        ]);
    }
}
