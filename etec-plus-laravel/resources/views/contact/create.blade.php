<x-app-layout>
    <!-- Header -->
    <section class="hero-section">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Fale Conosco</h1>
            <p class="text-xl">Entre em contato com a ETEC Zona Leste</p>
        </div>
    </section>

    <!-- Formulário -->
    <section class="py-16 px-4">
        <div class="max-w-2xl mx-auto">
            @if($errors->any())
                <div class="alert-error mb-6">
                    <strong>Erros encontrados:</strong>
                    <ul class="mt-2 list-disc list-inside">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if(session('success'))
                <div class="alert-success mb-6">
                    {{ session('success') }}
                </div>
            @endif

            <div class="bg-white p-8 rounded-lg shadow">
                <form method="POST" action="{{ route('contact.store') }}">
                    @csrf

                    <!-- Nome -->
                    <div class="mb-6">
                        <label for="name" class="block text-gray-700 font-semibold mb-2">
                            Nome Completo <span class="text-red-600">*</span>
                        </label>
                        <input 
                            type="text" 
                            id="name" 
                            name="name" 
                            class="form-control @error('name') border-red-600 @enderror"
                            value="{{ old('name') }}"
                            placeholder="Seu nome completo"
                            required
                        >
                        @error('name')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Email -->
                    <div class="mb-6">
                        <label for="email" class="block text-gray-700 font-semibold mb-2">
                            E-mail <span class="text-red-600">*</span>
                        </label>
                        <input 
                            type="email" 
                            id="email" 
                            name="email" 
                            class="form-control @error('email') border-red-600 @enderror"
                            value="{{ old('email') }}"
                            placeholder="seu.email@example.com"
                            required
                        >
                        @error('email')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Assunto -->
                    <div class="mb-6">
                        <label for="subject" class="block text-gray-700 font-semibold mb-2">
                            Assunto <span class="text-red-600">*</span>
                        </label>
                        <input 
                            type="text" 
                            id="subject" 
                            name="subject" 
                            class="form-control @error('subject') border-red-600 @enderror"
                            value="{{ old('subject') }}"
                            placeholder="Assunto da mensagem"
                            required
                        >
                        @error('subject')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Mensagem -->
                    <div class="mb-6">
                        <label for="message" class="block text-gray-700 font-semibold mb-2">
                            Mensagem <span class="text-red-600">*</span>
                        </label>
                        <textarea 
                            id="message" 
                            name="message" 
                            rows="6"
                            class="form-control @error('message') border-red-600 @enderror"
                            placeholder="Sua mensagem aqui..."
                            required
                        >{{ old('message') }}</textarea>
                        @error('message')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Botão -->
                    <div class="flex gap-4">
                        <button type="submit" class="btn-etec">
                            Enviar Mensagem
                        </button>
                        <a href="{{ route('home') }}" class="btn-etec-outline">
                            Cancelar
                        </a>
                    </div>
                </form>
            </div>

            <!-- Informações de Contato -->
            <div class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="card text-center">
                    <h3 class="card-title mb-2">Endereço</h3>
                    <p class="text-gray-600 text-sm">
                        Av. Águia de Haia, 2633<br>
                        A.E Carvalho, São Paulo - SP
                    </p>
                </div>

                <div class="card text-center">
                    <h3 class="card-title mb-2">Telefone</h3>
                    <p class="text-gray-600 text-sm">
                        (11) 2045-4000
                    </p>
                </div>

                <div class="card text-center">
                    <h3 class="card-title mb-2">E-mail</h3>
                    <p class="text-gray-600 text-sm">
                        e211dir@cps.sp.gov.br
                    </p>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
