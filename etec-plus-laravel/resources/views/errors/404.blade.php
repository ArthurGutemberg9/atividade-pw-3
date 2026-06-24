<x-app-layout>
    <!-- 404 Section -->
    <section class="py-32 px-4">
        <div class="max-w-4xl mx-auto text-center">
            <div class="mb-8">
                <h1 class="text-9xl font-bold text-red-600">404</h1>
            </div>
            
            <h2 class="section-title mb-4">Página Não Encontrada</h2>
            
            <p class="text-gray-600 text-lg mb-8">
                Desculpe, a página que você está procurando não existe ou foi removida.
            </p>

            <div class="card mb-8 text-left">
                <h3 class="card-title mb-4">O que você pode fazer:</h3>
                <ul class="text-gray-700 space-y-2">
                    <li>✓ Voltar à <a href="{{ route('home') }}" class="text-red-600 hover:underline">página inicial</a></li>
                    <li>✓ Explorar nossos <a href="{{ route('courses.index') }}" class="text-red-600 hover:underline">cursos</a></li>
                    <li>✓ Conferir os <a href="{{ route('events.index') }}" class="text-red-600 hover:underline">eventos</a></li>
                    <li>✓ <a href="{{ route('contact.create') }}" class="text-red-600 hover:underline">Entrar em contato</a> conosco</li>
                </ul>
            </div>

            <div class="flex gap-4 justify-center flex-wrap">
                <a href="{{ route('home') }}" class="btn-etec">
                    Ir para Home
                </a>
                <a href="javascript:history.back()" class="btn-etec-outline">
                    Voltar
                </a>
            </div>

            <div class="mt-12 p-8 bg-gray-50 rounded-lg">
                <p class="text-gray-600 text-sm">
                    Se o problema persistir, entre em contato conosco:<br>
                    <strong>Telefone:</strong> (11) 2045-4000<br>
                    <strong>E-mail:</strong> e211dir@cps.sp.gov.br
                </p>
            </div>
        </div>
    </section>
</x-app-layout>
