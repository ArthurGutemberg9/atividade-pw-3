<x-app-layout>
    <!-- Header -->
    <section class="hero-section">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">{{ $event->title }}</h1>
            <p class="text-xl">{{ $event->date->format('d de F de Y') }}</p>
        </div>
    </section>

    <!-- Conteúdo -->
    <section class="py-16 px-4">
        <div class="max-w-4xl mx-auto">
            @if($event->image_url)
                <img src="{{ $event->image_url }}" alt="{{ $event->title }}" class="w-full h-96 object-cover rounded-lg mb-8">
            @endif
            
            <div class="bg-white p-8 rounded-lg shadow">
                <div class="mb-8 pb-8 border-b">
                    <p class="text-gray-600 text-sm mb-2">
                        <strong>Data:</strong> {{ $event->date->format('d/m/Y') }}
                    </p>
                    <p class="text-gray-600 text-sm">
                        <strong>Local:</strong> ETEC Zona Leste
                    </p>
                </div>

                <h2 class="section-title mb-6">Descrição do Evento</h2>
                <p class="text-gray-700 text-lg leading-relaxed mb-8">
                    {{ $event->description }}
                </p>

                <div class="card mb-8">
                    <h3 class="card-title mb-4">Informações Importantes</h3>
                    <ul class="text-gray-600 space-y-2">
                        <li>✓ Evento aberto à comunidade</li>
                        <li>✓ Entrada gratuita</li>
                        <li>✓ Atividades para todas as idades</li>
                        <li>✓ Estacionamento disponível</li>
                    </ul>
                </div>

                <div class="card">
                    <h3 class="card-title mb-4">Como Chegar</h3>
                    <p class="text-gray-600 mb-4">
                        <strong>Endereço:</strong> Av. Águia de Haia, 2633 - A.E Carvalho, São Paulo - SP
                    </p>
                    <p class="text-gray-600">
                        Para mais informações, entre em contato conosco pelo telefone (11) 2045-4000.
                    </p>
                </div>
            </div>

            <!-- Voltar -->
            <div class="mt-8">
                <a href="{{ route('events.index') }}" class="btn-etec-outline inline-block">
                    ← Voltar aos Eventos
                </a>
            </div>
        </div>
    </section>
</x-app-layout>
