<x-app-layout>
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">
                Bem-vindo à ETEC Zona Leste
            </h1>
            <p class="text-xl mb-8">
                Formando profissionais qualificados para o mercado de trabalho
            </p>
            <div class="flex justify-center gap-4 flex-wrap">
                <a href="{{ route('courses.index') }}" class="btn-etec">
                    Conheça nossos Cursos
                </a>
                <a href="{{ route('events.index') }}" class="btn-etec-outline">
                    Veja os Eventos
                </a>
            </div>
        </div>
    </section>

    <!-- Informações Institucionais -->
    <section class="py-16 px-4">
        <div class="max-w-7xl mx-auto">
            <h2 class="section-title text-center mb-12">Sobre a ETEC Zona Leste</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
                <div class="card">
                    <h3 class="card-title mb-4">Nossa Missão</h3>
                    <p class="text-gray-700">
                        Oferecer educação técnica e profissional de qualidade, preparando nossos alunos para o mercado de trabalho e para a continuidade de seus estudos, contribuindo para o desenvolvimento econômico e social da região.
                    </p>
                </div>
                
                <div class="card">
                    <h3 class="card-title mb-4">Nossa Visão</h3>
                    <p class="text-gray-700">
                        Ser uma instituição de referência em educação profissional, reconhecida pela qualidade do ensino, pela formação de profissionais competentes e pela contribuição ao desenvolvimento sustentável.
                    </p>
                </div>
            </div>

            <div class="bg-gray-50 p-8 rounded-lg">
                <h3 class="card-title mb-4">Informações de Contato</h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div>
                        <p class="font-semibold text-gray-800">Endereço</p>
                        <p class="text-gray-600">Av. Águia de Haia, 2633</p>
                        <p class="text-gray-600">A.E Carvalho, São Paulo - SP</p>
                    </div>
                    <div>
                        <p class="font-semibold text-gray-800">Telefone</p>
                        <p class="text-gray-600">(11) 2045-4000</p>
                    </div>
                    <div>
                        <p class="font-semibold text-gray-800">E-mail</p>
                        <p class="text-gray-600">e211dir@cps.sp.gov.br</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Destaques -->
    <section class="py-16 px-4 bg-gray-50">
        <div class="max-w-7xl mx-auto">
            <h2 class="section-title text-center mb-12">Destaques</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="card text-center">
                    <div class="text-4xl font-bold text-red-600 mb-4">5+</div>
                    <h3 class="card-title mb-2">Cursos Técnicos</h3>
                    <p class="text-gray-600">Oferecemos diversos cursos técnicos de qualidade</p>
                </div>
                
                <div class="card text-center">
                    <div class="text-4xl font-bold text-red-600 mb-4">16+</div>
                    <h3 class="card-title mb-2">Anos de Excelência</h3>
                    <p class="text-gray-600">Desde 2008 formando profissionais</p>
                </div>
                
                <div class="card text-center">
                    <div class="text-4xl font-bold text-red-600 mb-4">100%</div>
                    <h3 class="card-title mb-2">Dedicação</h3>
                    <p class="text-gray-600">Comprometidos com o sucesso dos alunos</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-16 px-4">
        <div class="max-w-7xl mx-auto text-center">
            <h2 class="section-title mb-8">Pronto para começar?</h2>
            <p class="text-lg text-gray-600 mb-8">
                Conheça nossos cursos e faça parte da comunidade ETEC Zona Leste
            </p>
            <div class="flex justify-center gap-4 flex-wrap">
                <a href="{{ route('courses.index') }}" class="btn-etec">
                    Explorar Cursos
                </a>
                <a href="{{ route('contact.create') }}" class="btn-etec-outline">
                    Entrar em Contato
                </a>
            </div>
        </div>
    </section>
</x-app-layout>
