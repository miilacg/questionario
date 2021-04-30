<?php

namespace App\Services;

use App\Entities\Login;


class LoginService {
  public function authenticate($cpf, $modality){
    $user = Login::where('cpf', $cpf);    

    if(!$user){
      return (object)(['status' => 'error', 'message' => 'CPF incorreto, tente novamente.']);
      
    } else {
      $userModality = Login::where('cpf', $cpf)->where('tipo', $modality)->first();

      if(!$userModality){
        return (object)(['status' => 'error', 'message' => 'Modalidade incorreta, tente novamente.']);
      } else {
        return (object)(['status' => 'error', 'message' => 'Login efetuado com sucesso.']); 
      }
    }
  }
}