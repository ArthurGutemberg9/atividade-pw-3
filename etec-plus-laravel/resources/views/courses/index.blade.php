<x-app-layout>
    <!-- Header -->
    <section class="hero-section">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Cursos Técnicos</h1>
            <p class="text-xl">Conheça os cursos oferecidos pela ETEC Zona Leste</p>
        </div>
    </section>

    <!-- Cursos -->
    <section class="py-16 px-4">
        <div class="max-w-7xl mx-auto">
            @if($courses->isEmpty())
                <div class="text-center py-12">
                    <p class="text-gray-600 text-lg">Nenhum curso disponível no momento.</p>
                </div>
            @else
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($courses as $course)
                        <div class="card">
                            @if($course->image_url)
                                <img src="{{ $course->image_url }}" alt="{{ $course->name }}" class="w-full h-48 object-cover rounded mb-4">
                            @else
                                <div class="w-full h-48 bg-gray-200 rounded mb-4 flex items-center justify-center">
                                    <span class="text-gray-400">Sem imagem</span>
                                </div>
                            @endif
                            
                            <h3 class="card-title mb-2">{{ $course->name }}</h3>
                            <p class="text-gray-600 text-sm mb-4">{{ Str::limit($course->description, 100) }}</p>
                            
                            <a href="{{ route('courses.show', $course) }}" class="btn-etec inline-block">
                                Saiba Mais
                            </a>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </section>

    <!-- Informações -->
    <section class="py-16 px-4 bg-gray-50">
        <div class="max-w-7xl mx-auto">
            <h2 class="section-title text-center mb-8">Como se Inscrever</h2>
            <div class="bg-white p-8 rounded-lg">
                <p class="text-gray-700 mb-4">
                    As inscrições para os cursos técnicos da ETEC Zona Leste são realizadas através do Vestibulinho ETEC.
                </p>
                <p class="text-gray-700 mb-4">
                    Para mais informações sobre inscrições, datas e requisitos, acesse o site oficial do Vestibulinho ETEC.
                </p>
                <a href="https://vestibulinho.etec.sp.gov.br/" target="_blank" class="btn-etec inline-block">
                    Ir para Vestibulinho ETEC
                </a>
            </div>
        </div>
    </section>
</x-app-layout>
