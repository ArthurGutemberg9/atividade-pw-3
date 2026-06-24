<x-app-layout>
    <!-- Header -->
    <section class="hero-section">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">{{ $course->name }}</h1>
        </div>
    </section>

    <!-- Conteúdo -->
    <section class="py-16 px-4">
        <div class="max-w-4xl mx-auto">
            @if($course->image_url)
                <img src="{{ $course->image_url }}" alt="{{ $course->name }}" class="w-full h-96 object-cover rounded-lg mb-8">
            @endif
            
            <div class="bg-white p-8 rounded-lg shadow">
                <h2 class="section-title mb-6">Descrição do Curso</h2>
                <p class="text-gray-700 text-lg leading-relaxed mb-8">
                    {{ $course->description }}
                </p>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
                    <div class="card">
                        <h3 class="card-title mb-4">Informações Gerais</h3>
                        <ul class="text-gray-600 space-y-2">
                            <li><strong>Curso:</strong> {{ $course->name }}</li>
                            <li><strong>Tipo:</strong> Técnico</li>
                            <li><strong>Instituição:</strong> ETEC Zona Leste</li>
                        </ul>
                    </div>

                    <div class="card">
                        <h3 class="card-title mb-4">Próximos Passos</h3>
                        <p class="text-gray-600 mb-4">
                            Interessado em se inscrever? Acesse o Vestibulinho ETEC para mais informações.
                        </p>
                        <a href="https://vestibulinho.etec.sp.gov.br/" target="_blank" class="btn-etec inline-block">
                            Inscrever-se
                        </a>
                    </div>
                </div>
            </div>

            <!-- Voltar -->
            <div class="mt-8">
                <a href="{{ route('courses.index') }}" class="btn-etec-outline inline-block">
                    ← Voltar aos Cursos
                </a>
            </div>
        </div>
    </section>
</x-app-layout>
