<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

/**
 * EventController - Controlador de eventos da ETEC Zona Leste
 * Responsável por gerenciar a exibição de eventos e atividades da escola
 */
class EventController extends Controller
{
    /**
     * Exibe a lista de todos os eventos
     * 
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Recupera todos os eventos do banco de dados, ordenados por data decrescente
        $events = Event::orderBy('date', 'desc')->get();
        
        // Retorna a view com a lista de eventos
        return view('events.index', compact('events'));
    }

    /**
     * Exibe os detalhes de um evento específico
     * 
     * @param Event $event
     * @return \Illuminate\View\View
     */
    public function show(Event $event)
    {
        // Retorna a view com os detalhes do evento
        return view('events.show', compact('event'));
    }
}
