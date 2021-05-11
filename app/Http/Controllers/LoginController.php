<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\LoginService;
use App\Entities\Login;


class LoginController extends Controller {
  private $loginService;

  public function __construct(LoginService $loginService) {
    $this->loginService = $loginService;
  }

  public function index(){
    return view('login');
  }

  public function authenticate(Request $request) {
    $authentication = $this->loginService->authenticate($request->cpf, $request->modality);
    
    if($authentication->status == 'success'){
      if($request->modality == 'Ciência da Computação'){
        return redirect()->route('personalDataSuperior');
      } else {
        if($request->modality == 'Informática'){
          return redirect()->route('personalDataTecnico');
        } else {
          return redirect()->back()->with(['error' => $authentication->message]);
        }        
      } 
    } else {
      return redirect()->back()->with(['error' => $authentication->message]);
    } 
  }
}