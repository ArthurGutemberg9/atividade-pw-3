<x-app-layout>
    <!-- Header -->
    <section class="hero-section">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Minhas Notas</h1>
            <p class="text-xl">Gerencie suas notas e registros acadêmicos</p>
        </div>
    </section>

    <!-- Notas -->
    <section class="py-16 px-4">
        <div class="max-w-7xl mx-auto">
            @if(session('success'))
                <div class="alert-success mb-6">
                    {{ session('success') }}
                </div>
            @endif

            <div class="mb-8">
                <a href="{{ route('notes.create') }}" class="btn-etec">
                    + Criar Nova Nota
                </a>
            </div>

            @if($notes->isEmpty())
                <div class="text-center py-12 card">
                    <p class="text-gray-600 text-lg mb-4">Você ainda não tem nenhuma nota.</p>
                    <a href="{{ route('notes.create') }}" class="btn-etec inline-block">
                        Criar Primeira Nota
                    </a>
                </div>
            @else
                <div class="space-y-4">
                    @foreach($notes as $note)
                        <div class="card">
                            <div class="flex justify-between items-start mb-4">
                                <div>
                                    <h3 class="card-title">{{ $note->title }}</h3>
                                    @if($note->course)
                                        <p class="text-gray-600 text-sm">
                                            <strong>Curso:</strong> {{ $note->course->name }}
                                        </p>
                                    @endif
                                    <p class="text-gray-500 text-sm">
                                        Criada em {{ $note->created_at->format('d/m/Y H:i') }}
                                    </p>
                                </div>
                                <div class="flex gap-2">
                                    <a href="{{ route('notes.edit', $note) }}" class="btn-etec-outline text-sm px-3 py-1">
                                        Editar
                                    </a>
                                    <form method="POST" action="{{ route('notes.destroy', $note) }}" class="inline" onsubmit="return confirm('Tem certeza que deseja deletar esta nota?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn-etec-outline text-sm px-3 py-1 text-red-600 border-red-600">
                                            Deletar
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <p class="text-gray-700">{{ Str::limit($note->content, 200) }}</p>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </section>
</x-app-layout>
