<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'ETEC Zona Leste') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        
        <!-- Estilos customizados para ETEC Zona Leste -->
        <style>
            :root {
                --etec-red: #C41E3A;
                --etec-dark-gray: #2C3E50;
                --etec-light-gray: #ECF0F1;
            }
            
            body {
                font-family: 'Figtree', sans-serif;
            }
            
            .navbar {
                background: linear-gradient(135deg, var(--etec-red) 0%, var(--etec-dark-gray) 100%);
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            }
            
            .navbar a {
                color: white;
                transition: opacity 0.3s ease;
            }
            
            .navbar a:hover {
                opacity: 0.8;
            }
            
            .btn-etec {
                background-color: var(--etec-red);
                color: white;
                padding: 10px 20px;
                border-radius: 4px;
                text-decoration: none;
                transition: background-color 0.3s ease;
                border: none;
                cursor: pointer;
            }
            
            .btn-etec:hover {
                background-color: #A01730;
            }
            
            .btn-etec-outline {
                border: 2px solid var(--etec-red);
                color: var(--etec-red);
                padding: 8px 18px;
                border-radius: 4px;
                text-decoration: none;
                transition: all 0.3s ease;
                background: transparent;
                cursor: pointer;
            }
            
            .btn-etec-outline:hover {
                background-color: var(--etec-red);
                color: white;
            }
            
            .hero-section {
                background: linear-gradient(135deg, var(--etec-red) 0%, var(--etec-dark-gray) 100%);
                color: white;
                padding: 60px 20px;
                text-align: center;
            }
            
            .section-title {
                color: var(--etec-red);
                font-weight: 600;
                font-size: 2rem;
                margin-bottom: 20px;
            }
            
            .card {
                border: 1px solid #ddd;
                border-radius: 8px;
                padding: 20px;
                transition: transform 0.3s ease, box-shadow 0.3s ease;
            }
            
            .card:hover {
                transform: translateY(-5px);
                box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            }
            
            .card-title {
                color: var(--etec-red);
                font-weight: 600;
            }
            
            .footer {
                background-color: var(--etec-dark-gray);
                color: white;
                padding: 40px 20px;
                margin-top: 60px;
            }
            
            .footer a {
                color: var(--etec-light-gray);
                text-decoration: none;
                transition: color 0.3s ease;
            }
            
            .footer a:hover {
                color: var(--etec-red);
            }
            
            .form-control {
                border: 1px solid #ddd;
                border-radius: 4px;
                padding: 10px;
                width: 100%;
                font-size: 1rem;
            }
            
            .form-control:focus {
                outline: none;
                border-color: var(--etec-red);
                box-shadow: 0 0 0 3px rgba(196, 30, 58, 0.1);
            }
            
            .alert-success {
                background-color: #d4edda;
                color: #155724;
                padding: 12px;
                border-radius: 4px;
                margin-bottom: 20px;
            }
            
            .alert-error {
                background-color: #f8d7da;
                color: #721c24;
                padding: 12px;
                border-radius: 4px;
                margin-bottom: 20px;
            }
            
            /* Menu Mobile */
            .mobile-menu {
                display: none;
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: rgba(0, 0, 0, 0.5);
                z-index: 999;
            }
            
            .mobile-menu.active {
                display: block;
            }
            
            .mobile-menu-content {
                position: fixed;
                top: 0;
                left: 0;
                width: 80%;
                max-width: 300px;
                height: 100%;
                background: linear-gradient(135deg, var(--etec-red) 0%, var(--etec-dark-gray) 100%);
                padding: 20px;
                z-index: 1000;
                overflow-y: auto;
            }
            
            .mobile-menu-content a {
                display: block;
                color: white;
                padding: 12px 0;
                border-bottom: 1px solid rgba(255, 255, 255, 0.1);
                text-decoration: none;
            }
            
            .mobile-menu-content a:hover {
                opacity: 0.8;
            }
            
            .hamburger {
                display: none;
                background: none;
                border: none;
                color: white;
                font-size: 24px;
                cursor: pointer;
            }
            
            .hamburger.active {
                display: block;
            }
            
            @media (max-width: 768px) {
                .section-title {
                    font-size: 1.5rem;
                }
                
                .hero-section {
                    padding: 40px 20px;
                }
                
                .hidden.md\:flex {
                    display: none !important;
                }
                
                .hamburger {
                    display: block;
                }
            }
        </style>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-white">
            <!-- Navbar -->
            <nav class="navbar">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex justify-between items-center h-16">
                        <!-- Logo -->
                        <div class="flex items-center">
                            <a href="{{ route('home') }}" class="text-white font-bold text-xl">
                                ETEC
                            </a>
                        </div>
                        
                        <!-- Menu Desktop -->
                        <div class="hidden md:flex space-x-6">
                            <a href="{{ route('home') }}" class="hover:opacity-80">Home</a>
                            <a href="{{ route('courses.index') }}" class="hover:opacity-80">Cursos</a>
                            <a href="{{ route('events.index') }}" class="hover:opacity-80">Eventos</a>
                            <a href="{{ route('contact.create') }}" class="hover:opacity-80">Contato</a>
                        </div>
                        
                        <!-- Auth Links Desktop -->
                        <div class="hidden md:flex items-center space-x-4">
                            @auth
                                <a href="{{ route('notes.index') }}" class="hover:opacity-80">Minhas Notas</a>
                                <a href="{{ route('dashboard') }}" class="hover:opacity-80">Dashboard</a>
                                <form method="POST" action="{{ route('logout') }}" class="inline">
                                    @csrf
                                    <button type="submit" class="btn-etec-outline">Logout</button>
                                </form>
                            @else
                                <a href="{{ route('login') }}" class="hover:opacity-80">Login</a>
                                <a href="{{ route('register') }}" class="btn-etec">Registrar</a>
                            @endauth
                        </div>
                        
                        <!-- Hamburger Menu -->
                        <button class="md:hidden hamburger" onclick="toggleMobileMenu()">
                            ☰
                        </button>
                    </div>
                </div>
            </nav>

            <!-- Mobile Menu -->
            <div class="mobile-menu" id="mobileMenu" onclick="closeMobileMenu()">
                <div class="mobile-menu-content" onclick="event.stopPropagation()">
                    <button onclick="closeMobileMenu()" style="background: none; border: none; color: white; font-size: 24px; cursor: pointer; float: right;">✕</button>
                    <div style="clear: both;"></div>
                    
                    <a href="{{ route('home') }}">Home</a>
                    <a href="{{ route('courses.index') }}">Cursos</a>
                    <a href="{{ route('events.index') }}">Eventos</a>
                    <a href="{{ route('contact.create') }}">Contato</a>
                    
                    @auth
                        <a href="{{ route('notes.index') }}">Minhas Notas</a>
                        <a href="{{ route('dashboard') }}">Dashboard</a>
                        <form method="POST" action="{{ route('logout') }}" style="padding: 12px 0; border-bottom: 1px solid rgba(255, 255, 255, 0.1);">
                            @csrf
                            <button type="submit" style="background: none; border: none; color: white; cursor: pointer; text-align: left; width: 100%;">Logout</button>
                        </form>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Registrar</a>
                    @endauth
                </div>
            </div>

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>

            <!-- Footer -->
            <footer class="footer">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8">
                        <!-- Sobre -->
                        <div>
                            <h3 class="text-lg font-bold mb-4">Sobre a ETEC</h3>
                            <p class="text-sm">Escola Técnica da Zona Leste - Formando profissionais para o mercado de trabalho desde 2008.</p>
                        </div>
                        
                        <!-- Contato -->
                        <div>
                            <h3 class="text-lg font-bold mb-4">Contato</h3>
                            <p class="text-sm">📍 Av. Águia de Haia, 2633 - A.E Carvalho, São Paulo - SP</p>
                            <p class="text-sm">📞 (11) 2045-4000</p>
                            <p class="text-sm">📧 e211dir@cps.sp.gov.br</p>
                        </div>
                        
                        <!-- Links Rápidos -->
                        <div>
                            <h3 class="text-lg font-bold mb-4">Links Rápidos</h3>
                            <ul class="text-sm space-y-2">
                                <li><a href="{{ route('courses.index') }}">Cursos</a></li>
                                <li><a href="{{ route('events.index') }}">Eventos</a></li>
                                <li><a href="{{ route('contact.create') }}">Contato</a></li>
                                @auth
                                    <li><a href="{{ route('notes.index') }}">Minhas Notas</a></li>
                                @endauth
                            </ul>
                        </div>
                    </div>
                    
                    <div class="border-t border-gray-700 pt-8 text-center text-sm">
                        <p>&copy; {{ date('Y') }} ETEC Zona Leste. Todos os direitos reservados.</p>
                        <p>Desenvolvido com ❤️ para a educação profissional</p>
                    </div>
                </div>
            </footer>
        </div>

        <script>
            function toggleMobileMenu() {
                const menu = document.getElementById('mobileMenu');
                menu.classList.toggle('active');
            }

            function closeMobileMenu() {
                const menu = document.getElementById('mobileMenu');
                menu.classList.remove('active');
            }
        </script>
    </body>
</html>
