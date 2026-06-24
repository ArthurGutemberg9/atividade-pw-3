<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * NoteController - Controlador de notas acadêmicas da ETEC Zona Leste
 * Responsável por gerenciar as notas e registros acadêmicos dos usuários autenticados
 */
class NoteController extends Controller
{
    /**
     * Construtor - Aplica middleware de autenticação
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Exibe a lista de notas do usuário autenticado
     * 
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Recupera as notas do usuário autenticado
        $notes = Auth::user()->notes()->get();
        
        // Retorna a view com a lista de notas
        return view('notes.index', compact('notes'));
    }

    /**
     * Exibe o formulário para criar uma nova nota
     * 
     * @return \Illuminate\View\View
     */
    public function create()
    {
        // Retorna a view com o formulário de criação de nota
        return view('notes.create');
    }

    /**
     * Armazena uma nova nota no banco de dados
     * 
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // Valida os dados do formulário
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'course_id' => 'nullable|exists:courses,id',
        ], [
            'title.required' => 'O título é obrigatório.',
            'content.required' => 'O conteúdo é obrigatório.',
        ]);

        // Cria uma nova nota associada ao usuário autenticado
        Auth::user()->notes()->create($validated);

        // Redireciona com mensagem de sucesso
        return redirect()->route('notes.index')
                        ->with('success', 'Nota criada com sucesso!');
    }

    /**
     * Exibe o formulário para editar uma nota
     * 
     * @param Note $note
     * @return \Illuminate\View\View
     */
    public function edit(Note $note)
    {
        // Verifica se o usuário é o proprietário da nota
        $this->authorize('update', $note);

        // Retorna a view com o formulário de edição
        return view('notes.edit', compact('note'));
    }

    /**
     * Atualiza uma nota no banco de dados
     * 
     * @param Request $request
     * @param Note $note
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Note $note)
    {
        // Verifica se o usuário é o proprietário da nota
        $this->authorize('update', $note);

        // Valida os dados do formulário
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'course_id' => 'nullable|exists:courses,id',
        ]);

        // Atualiza a nota
        $note->update($validated);

        // Redireciona com mensagem de sucesso
        return redirect()->route('notes.index')
                        ->with('success', 'Nota atualizada com sucesso!');
    }

    /**
     * Deleta uma nota do banco de dados
     * 
     * @param Note $note
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Note $note)
    {
        // Verifica se o usuário é o proprietário da nota
        $this->authorize('delete', $note);

        // Deleta a nota
        $note->delete();

        // Redireciona com mensagem de sucesso
        return redirect()->route('notes.index')
                        ->with('success', 'Nota deletada com sucesso!');
    }
}
