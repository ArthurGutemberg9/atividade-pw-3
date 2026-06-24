<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * HomeController - Controlador da página inicial da ETEC Zona Leste
 * Responsável por exibir informações institucionais e dados da escola
 */
class HomeController extends Controller
{
    /**
     * Exibe a página inicial da ETEC Zona Leste
     * 
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Retorna a view home com informações da instituição
        return view('home');
    }
}
