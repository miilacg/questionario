<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\LoginService;
use App\Entities\Login;


class AssaySuperiorController extends Controller {
  private $loginService;

  public function __construct(LoginService $loginService) {
    $this->loginService = $loginService;
  }

  public function company(){
    return view('cienciaComputacao.company');
  }
  
  function knowledge(){
    return view('cienciaComputacao.knowledge');
  }

  public function laborMarket() {
    return view('cienciaComputacao.laborMarket');
  }

  public function leisureHealthCitizenchip() {
    return view('cienciaComputacao.leisureHealthCitizenchip');
  }

  public function personalData(){
    return view('cienciaComputacao.personalData');
  }

  public function professionalData(){
    return view('cienciaComputacao.professionalData');
  }
}