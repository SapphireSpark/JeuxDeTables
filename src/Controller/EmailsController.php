<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Mailer\Email;

class EmailsController extends AppController {

    public function index() {
       $role = $user->role;
       if (role == 2 || role == 1) {
           
        $email1 = $user->email;
        $email = new Email('default');
        $email->setTo($email1)->setSubject('Confirmation')->send(String::uuid());
        
       }
    }

}
?>

