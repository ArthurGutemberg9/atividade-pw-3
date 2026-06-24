<x-app-layout>
    <!-- Header -->
    <section class="hero-section">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Editar Nota</h1>
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

            <div class="bg-white p-8 rounded-lg shadow">
                <form method="POST" action="{{ route('notes.update', $note) }}">
                    @csrf
                    @method('PUT')

                    <!-- Título -->
                    <div class="mb-6">
                        <label for="title" class="block text-gray-700 font-semibold mb-2">
                            Título <span class="text-red-600">*</span>
                        </label>
                        <input 
                            type="text" 
                            id="title" 
                            name="title" 
                            class="form-control @error('title') border-red-600 @enderror"
                            value="{{ old('title', $note->title) }}"
                            placeholder="Título da nota"
                            required
                        >
                        @error('title')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Conteúdo -->
                    <div class="mb-6">
                        <label for="content" class="block text-gray-700 font-semibold mb-2">
                            Conteúdo <span class="text-red-600">*</span>
                        </label>
                        <textarea 
                            id="content" 
                            name="content" 
                            rows="8"
                            class="form-control @error('content') border-red-600 @enderror"
                            placeholder="Escreva o conteúdo da sua nota aqui..."
                            required
                        >{{ old('content', $note->content) }}</textarea>
                        @error('content')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Curso (opcional) -->
                    <div class="mb-6">
                        <label for="course_id" class="block text-gray-700 font-semibold mb-2">
                            Curso (Opcional)
                        </label>
                        <select 
                            id="course_id" 
                            name="course_id" 
                            class="form-control @error('course_id') border-red-600 @enderror"
                        >
                            <option value="">Selecione um curso...</option>
                            @foreach(\App\Models\Course::all() as $course)
                                <option value="{{ $course->id }}" @selected(old('course_id', $note->course_id) == $course->id)>
                                    {{ $course->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('course_id')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Botões -->
                    <div class="flex gap-4">
                        <button type="submit" class="btn-etec">
                            Atualizar Nota
                        </button>
                        <a href="{{ route('notes.index') }}" class="btn-etec-outline">
                            Cancelar
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </section>
</x-app-layout>
