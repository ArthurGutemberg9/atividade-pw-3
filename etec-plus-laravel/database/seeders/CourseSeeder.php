<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course;
use App\Models\Event;
use Carbon\Carbon;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Criar cursos técnicos da ETEC Zona Leste
        Course::create([
            'name' => 'Administração',
            'description' => 'Curso técnico em Administração que prepara profissionais para gerenciar recursos, pessoas e processos em organizações. Aprenda sobre gestão, planejamento estratégico e administração de empresas.',
            'image_url' => null,
        ]);

        Course::create([
            'name' => 'Contabilidade',
            'description' => 'Curso técnico em Contabilidade que forma profissionais capazes de gerenciar a contabilidade de empresas. Estude escrituração, auditoria e planejamento fiscal.',
            'image_url' => null,
        ]);

        Course::create([
            'name' => 'Desenvolvimento de Sistemas',
            'description' => 'Curso técnico em Desenvolvimento de Sistemas que prepara programadores para criar aplicações web e desktop. Aprenda linguagens de programação, bancos de dados e desenvolvimento de software.',
            'image_url' => null,
        ]);

        Course::create([
            'name' => 'Finanças',
            'description' => 'Curso técnico em Finanças que forma profissionais para atuar na área financeira. Estude mercado de capitais, investimentos e gestão de riscos.',
            'image_url' => null,
        ]);

        Course::create([
            'name' => 'Recursos Humanos',
            'description' => 'Curso técnico em Recursos Humanos que prepara profissionais para gerenciar pessoas nas organizações. Aprenda sobre recrutamento, seleção, treinamento e desenvolvimento de pessoal.',
            'image_url' => null,
        ]);

        // Criar eventos da ETEC Zona Leste
        Event::create([
            'title' => 'Festa das Nações',
            'description' => 'Evento cultural onde alunos apresentam a cultura de diferentes países. Comidas típicas, apresentações artísticas e atividades interativas para toda a comunidade escolar.',
            'date' => Carbon::now()->addDays(30),
            'image_url' => null,
        ]);

        Event::create([
            'title' => 'Palestra: Empreendedorismo',
            'description' => 'Palestra com especialista em empreendedorismo abordando como iniciar um negócio, plano de negócios e estratégias de crescimento. Aberta a todos os alunos interessados.',
            'date' => Carbon::now()->addDays(15),
            'image_url' => null,
        ]);

        Event::create([
            'title' => 'Workshop de Programação',
            'description' => 'Workshop prático sobre as últimas tendências em desenvolvimento de software. Aprenda sobre frameworks modernos, boas práticas e desenvolvimento ágil.',
            'date' => Carbon::now()->addDays(45),
            'image_url' => null,
        ]);
    }
}
