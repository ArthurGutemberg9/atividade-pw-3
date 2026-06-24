<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

/**
 * CourseController - Controlador de cursos da ETEC Zona Leste
 * Responsável por gerenciar a exibição dos cursos técnicos oferecidos
 */
class CourseController extends Controller
    {
        /**
         * Exibe a lista de todos os cursos técnicos
         * 
         * @return \Illuminate\View\View
         */
        public function index()
        {
            // Recupera todos os cursos do banco de dados
            $courses = Course::all();
            
            // Retorna a view com a lista de cursos
            return view('courses.index', compact('courses'));
        }

        /**
         * Exibe os detalhes de um curso específico
         * 
         * @param Course $course
         * @return \Illuminate\View\View
         */
        public function show(Course $course)
        {
            // Retorna a view com os detalhes do curso
            return view('courses.show', compact('course'));
        }
    }
