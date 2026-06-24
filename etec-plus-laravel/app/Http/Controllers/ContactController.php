<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

/**
 * ContactController - Controlador de formulário de contato da ETEC Zona Leste
 * Responsável por gerenciar as mensagens de contato dos visitantes
 */
class ContactController extends Controller
{
    /**
     * Exibe o formulário de contato
     * 
     * @return \Illuminate\View\View
     */
    public function create()
    {
        // Retorna a view com o formulário de contato
        return view('contact.create');
    }

    /**
     * Armazena a mensagem de contato no banco de dados
     * 
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // Valida os dados do formulário
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|min:10',
        ], [
            'name.required' => 'O nome é obrigatório.',
            'email.required' => 'O email é obrigatório.',
            'email.email' => 'O email deve ser válido.',
            'subject.required' => 'O assunto é obrigatório.',
            'message.required' => 'A mensagem é obrigatória.',
            'message.min' => 'A mensagem deve ter pelo menos 10 caracteres.',
        ]);

        // Cria um novo contato no banco de dados
        Contact::create($validated);

        // Redireciona com mensagem de sucesso
        return redirect()->route('contact.create')
                        ->with('success', 'Mensagem enviada com sucesso! Obrigado por entrar em contato.');
    }
}
