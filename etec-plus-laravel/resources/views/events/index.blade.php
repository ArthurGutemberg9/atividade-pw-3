<x-app-layout>
    <!-- Header -->
    <section class="hero-section">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Eventos</h1>
            <p class="text-xl">Acompanhe os eventos e atividades da ETEC Zona Leste</p>
        </div>
    </section>

    <!-- Eventos -->
    <section class="py-16 px-4">
        <div class="max-w-7xl mx-auto">
            @if($events->isEmpty())
                <div class="text-center py-12">
                    <p class="text-gray-600 text-lg">Nenhum evento disponível no momento.</p>
                </div>
            @else
                <div class="space-y-8">
                    @foreach($events as $event)
                        <div class="card">
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                                @if($event->image_url)
                                    <img src="{{ $event->image_url }}" alt="{{ $event->title }}" class="w-full h-48 object-cover rounded">
                                @else
                                    <div class="w-full h-48 bg-gray-200 rounded flex items-center justify-center">
                                        <span class="text-gray-400">Sem imagem</span>
                                    </div>
                                @endif
                                
                                <div class="md:col-span-2">
                                    <div class="flex items-center gap-4 mb-4">
                                        <span class="bg-red-600 text-white px-4 py-2 rounded">
                                            {{ $event->date->format('d/m/Y') }}
                                        </span>
                                    </div>
                                    
                                    <h3 class="card-title mb-2">{{ $event->title }}</h3>
                                    <p class="text-gray-600 mb-4">{{ Str::limit($event->description, 150) }}</p>
                                    
                                    <a href="{{ route('events.show', $event) }}" class="btn-etec inline-block">
                                        Saiba Mais
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </section>

    <!-- Calendário de Eventos -->
    <section class="py-16 px-4 bg-gray-50">
        <div class="max-w-7xl mx-auto">
            <h2 class="section-title text-center mb-8">Próximos Eventos</h2>
            <div class="bg-white p-8 rounded-lg">
                <p class="text-gray-700 mb-4">
                    Fique atento aos eventos e atividades da ETEC Zona Leste. Participar de eventos é uma ótima oportunidade para conhecer mais sobre a escola e as oportunidades de aprendizado.
                </p>
                <p class="text-gray-700">
                    Para mais informações, entre em contato conosco através do formulário de contato ou visite nossa escola pessoalmente.
                </p>
            </div>
        </div>
    </section>
</x-app-layout>
