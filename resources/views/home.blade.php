<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lopsang Lama | Backend Developer</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap');
        
        :root {
            --brand-cyan: #22d3ee;
            --brand-purple: #a855f7;
            --brand-pink: #ec4899;
            --bg-dark: #050505;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: var(--bg-dark);
            color: #fafafa;
            font-family: 'Inter', system-ui, -apple-system, sans-serif;
            overflow-x: hidden;
        }

        /* Grain Texture */
        .grain-overlay {
            position: fixed;
            top: 0; left: 0; width: 100%; height: 100%;
            pointer-events: none;
            z-index: 9999;
            opacity: 0.03;
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noiseFilter'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.65' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noiseFilter)'/%3E%3C/svg%3E");
        }

        /* Gradient Animation */
        @keyframes gradient-shift {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }
        
        .gradient-animate {
            background-size: 200% 200%;
            animation: gradient-shift 8s ease infinite;
        }

        /* Glassmorphism */
        .glass {
            background: rgba(255, 255, 255, 0.02);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.08);
            transition: all 0.4s cubic-bezier(0.23, 1, 0.32, 1);
        }
        
        .glass:hover {
            background: rgba(255, 255, 255, 0.06);
            border-color: rgba(255, 255, 255, 0.15);
            transform: translateY(-2px);
        }

        /* Animations */
        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-30px) rotate(5deg); }
        }
        
        @keyframes float-delayed {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-25px) rotate(-3deg); }
        }

        .animate-float { animation: float 8s ease-in-out infinite; }
        .animate-float-delayed { animation: float-delayed 10s ease-in-out infinite; }

        /* Reveal Animation */
        .reveal {
            opacity: 0;
            transform: translateY(40px);
            transition: all 1s cubic-bezier(0.23, 1, 0.32, 1);
        }
        
        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }

        /* Skill Bar Animation */
        .skill-bar {
            width: 0;
            transition: width 1.5s cubic-bezier(0.23, 1, 0.32, 1);
        }
        
        .skill-bar.animate {
            width: var(--target-width);
        }

        /* Magnetic Button */
        .magnetic-btn {
            transition: transform 0.3s cubic-bezier(0.23, 1, 0.32, 1);
        }
        
        .magnetic-btn:hover {
            transform: scale(1.05);
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 10px;
        }
        
        ::-webkit-scrollbar-track {
            background: #0a0a0a;
        }
        
        ::-webkit-scrollbar-thumb {
            background: linear-gradient(to bottom, var(--brand-cyan), var(--brand-purple));
            border-radius: 10px;
        }

        /* Selection */
        ::selection {
            background: rgba(34, 211, 238, 0.3);
            color: white;
        }

        /* Mobile Menu */
        .mobile-menu {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-out;
        }
        
        .mobile-menu.open {
            max-height: 300px;
        }

        /* Logo Glow */
        .logo-glow {
            filter: drop-shadow(0 0 20px rgba(34, 211, 238, 0.4));
        }

        /* Smooth Hover Effects */
        .hover-lift {
            transition: transform 0.3s ease;
        }
        
        .hover-lift:hover {
            transform: translateY(-8px);
        }
    </style>
</head>
<body class="selection:bg-cyan-500/30">
    <div class="grain-overlay"></div>

    <!-- HEADER -->
    <header id="navbar" class="fixed top-0 left-0 right-0 z-50 py-6 transition-all duration-500">
        <nav class="max-w-7xl mx-auto px-6">
            <div class="glass rounded-3xl px-8 py-4 flex items-center justify-between">
                <a href="#" class="flex items-center gap-3 group" aria-label="Home">
                    <div class="relative w-10 h-10 logo-glow">
                        <svg viewBox="0 0 100 100" class="w-full h-full transform transition-transform group-hover:rotate-12 duration-500">
                            <defs>
                                <linearGradient id="logoGrad" x1="0%" y1="0%" x2="100%" y2="100%">
                                    <stop offset="0%" stop-color="var(--brand-cyan)" />
                                    <stop offset="100%" stop-color="var(--brand-purple)" />
                                </linearGradient>
                            </defs>
                            <path d="M10,90 L50,10 L90,90 L70,90 L50,50 L30,90 Z" fill="url(#logoGrad)" />
                            <circle cx="50" cy="40" r="6" fill="#fff" class="animate-pulse" />
                        </svg>
                    </div>
                    <span class="text-xl font-black tracking-widest text-white group-hover:text-cyan-400 transition-colors duration-300">LOPSANG</span>
                </a>

                <div class="hidden md:flex items-center gap-10">
                    <a href="#skills" class="text-sm font-medium text-gray-400 hover:text-white transition-colors relative group">
                        Expertise
                        <span class="absolute -bottom-1 left-0 w-0 h-px bg-cyan-400 transition-all duration-300 group-hover:w-full"></span>
                    </a>
                    <a href="#projects" class="text-sm font-medium text-gray-400 hover:text-white transition-colors relative group">
                        Work
                        <span class="absolute -bottom-1 left-0 w-0 h-px bg-cyan-400 transition-all duration-300 group-hover:w-full"></span>
                    </a>
                    <a href="#contact" class="text-sm font-medium text-gray-400 hover:text-white transition-colors relative group">
                        Connect
                        <span class="absolute -bottom-1 left-0 w-0 h-px bg-cyan-400 transition-all duration-300 group-hover:w-full"></span>
                    </a>
                </div>

                <button id="menu-btn" class="md:hidden p-2 text-white hover:text-cyan-400 transition-colors" aria-label="Toggle Menu">
                    <i data-lucide="menu" class="w-6 h-6"></i>
                </button>
            </div>

            <!-- Mobile Menu -->
            <div class="mobile-menu md:hidden mt-4" id="mobile-menu">
                <div class="glass rounded-3xl px-8 py-6 space-y-4">
                    <a href="#skills" class="block text-sm font-medium text-gray-400 hover:text-white transition-colors">Expertise</a>
                    <a href="#projects" class="block text-sm font-medium text-gray-400 hover:text-white transition-colors">Work</a>
                    <a href="#contact" class="block text-sm font-medium text-gray-400 hover:text-white transition-colors">Connect</a>
                </div>
            </div>
        </nav>
    </header>

    <!-- HERO -->
    <section class="relative min-h-screen flex items-center justify-center pt-20 overflow-hidden">
        <!-- Animated Background Blobs -->
        <div class="absolute inset-0 z-0">
            <div class="absolute top-1/4 left-1/4 w-[600px] h-[600px] bg-cyan-500/10 rounded-full blur-[140px] animate-float"></div>
            <div class="absolute bottom-1/4 right-1/4 w-[600px] h-[600px] bg-purple-500/10 rounded-full blur-[140px] animate-float-delayed"></div>
            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[400px] h-[400px] bg-pink-500/5 rounded-full blur-[120px] animate-float" style="animation-delay: -2s"></div>
        </div>

        <div class="relative z-10 text-center px-6 max-w-6xl mx-auto">
            <!-- Intro Text -->
            <div class="reveal mb-8">
                <p class="text-cyan-400 font-mono tracking-[0.3em] uppercase text-sm mb-3 opacity-80">Backend Developer</p>
                <div class="flex items-center justify-center gap-4 text-gray-500 text-xs">
                    <span class="flex items-center gap-2">
                        <span class="w-2 h-2 bg-green-400 rounded-full animate-pulse"></span>
                        Available for Projects
                    </span>
                    <span>•</span>
                    <span>Lalitpur, Nepal</span>
                </div>
            </div>

            <!-- Main Heading -->
            <h1 class="reveal text-6xl md:text-8xl lg:text-9xl font-black tracking-tighter mb-10 leading-[0.9]">
                <span class="inline-block hover:skew-y-2 transition-transform duration-300">Hello I'm</span>
                <br/>
                <span class="bg-clip-text text-transparent bg-gradient-to-r from-cyan-400 via-purple-400 to-pink-400 gradient-animate">Lopsang Lama</span>
            </h1>

            <!-- Description -->
            <div class="reveal text-xl md:text-2xl text-gray-400 max-w-3xl mx-auto font-light leading-relaxed mb-12">
                Backend developer specializing in <span id="typewriter" class="text-white font-medium border-b-2 border-cyan-500/50"></span>
                <br/>
                <span class="text-base text-gray-500 mt-2 inline-block">Building scalable solutions with precision and creativity</span>
            </div>

            <!-- CTA Buttons -->
            <div class="reveal mt-14 flex flex-col sm:flex-row items-center justify-center gap-6">
                <a href="#projects" class="magnetic-btn group px-12 py-5 bg-gradient-to-r from-cyan-500 to-cyan-400 text-black font-bold rounded-2xl hover:shadow-2xl hover:shadow-cyan-500/50 transition-all duration-500 flex items-center gap-3">
                    <span>Explore Work</span>
                    <i data-lucide="arrow-right" class="w-5 h-5 group-hover:translate-x-2 transition-transform duration-300"></i>
                </a>
                <a href="#contact" class="magnetic-btn px-12 py-5 glass text-white font-bold rounded-2xl transition-all duration-300">
                    Get In Touch
                </a>
            </div>

            <!-- Stats -->
            <div class="reveal mt-20 flex flex-wrap items-center justify-center gap-8 md:gap-12 text-sm text-gray-600">
                <div class="text-center">
                    <div class="text-3xl font-bold text-white mb-1">2+</div>
                    <div>Years Experience</div>
                </div>
                <div class="w-px h-12 bg-white/10 hidden sm:block"></div>
                <div class="text-center">
                    <div class="text-3xl font-bold text-white mb-1">15+</div>
                    <div>Projects Delivered</div>
                </div>
                <div class="w-px h-12 bg-white/10 hidden sm:block"></div>
                <div class="text-center">
                    <div class="text-3xl font-bold text-white mb-1">100%</div>
                    <div>Client Satisfaction</div>
                </div>
            </div>
        </div>

        <!-- Scroll Indicator -->
        <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 animate-bounce">
            <i data-lucide="chevron-down" class="w-6 h-6 text-gray-600"></i>
        </div>
    </section>

    <!-- SKILLS -->
    <section id="skills" class="py-32 relative">
        <div class="max-w-7xl mx-auto px-6">
            <!-- Section Header -->
            <div class="reveal mb-20 text-center">
                <h2 class="text-5xl md:text-7xl font-black mb-6 bg-clip-text text-transparent bg-gradient-to-r from-white to-gray-500">Technical Expertise</h2>
                <p class="text-gray-500 text-lg max-w-2xl mx-auto">Mastering modern technologies to build exceptional digital products</p>
            </div>

            <!-- Skills Grid -->
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Frontend -->
                <div class="reveal glass p-10 rounded-3xl group cursor-pointer hover-lift">
                    <div class="mb-6 text-cyan-400">
                        <i data-lucide="code-2" class="w-12 h-12 group-hover:scale-110 transition-transform duration-300"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-3 text-white">Frontend Development</h3>
                    <p class="text-gray-500 text-sm mb-6">React, Vue, Next.js</p>
                    <div class="relative">
                        <div class="h-2 w-full bg-white/5 rounded-full overflow-hidden">
                            <div class="skill-bar h-full bg-gradient-to-r from-cyan-400 to-purple-500 rounded-full" style="--target-width: 95%"></div>
                        </div>
                        <span class="text-xs text-gray-600 mt-2 block">95% Proficiency</span>
                    </div>
                </div>

                <!-- Backend -->
                <div class="reveal glass p-10 rounded-3xl group cursor-pointer hover-lift">
                    <div class="mb-6 text-orange-400">
                        <i data-lucide="server" class="w-12 h-12 group-hover:scale-110 transition-transform duration-300"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-3 text-white">Backend Engineering</h3>
                    <p class="text-gray-500 text-sm mb-6">Laravel, Node.js, APIs</p>
                    <div class="relative">
                        <div class="h-2 w-full bg-white/5 rounded-full overflow-hidden">
                            <div class="skill-bar h-full bg-gradient-to-r from-orange-400 to-red-500 rounded-full" style="--target-width: 95%"></div>
                        </div>
                        <span class="text-xs text-gray-600 mt-2 block">95% Proficiency</span>
                    </div>
                </div>

                <!-- UI/UX -->
                <div class="reveal glass p-10 rounded-3xl group cursor-pointer hover-lift">
                    <div class="mb-6 text-purple-400">
                        <i data-lucide="palette" class="w-12 h-12 group-hover:scale-110 transition-transform duration-300"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-3 text-white">UI/UX Design</h3>
                    <p class="text-gray-500 text-sm mb-6">Figma, Responsive Design</p>
                    <div class="relative">
                        <div class="h-2 w-full bg-white/5 rounded-full overflow-hidden">
                            <div class="skill-bar h-full bg-gradient-to-r from-purple-400 to-pink-500 rounded-full" style="--target-width: 50%"></div>
                        </div>
                        <span class="text-xs text-gray-600 mt-2 block">50% Proficiency</span>
                    </div>
                </div>

                <!-- Performance -->
                <div class="reveal glass p-10 rounded-3xl group cursor-pointer hover-lift">
                    <div class="mb-6 text-yellow-400">
                        <i data-lucide="zap" class="w-12 h-12 group-hover:scale-110 transition-transform duration-300"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-3 text-white">Performance</h3>
                    <p class="text-gray-500 text-sm mb-6">Optimization, SEO</p>
                    <div class="relative">
                        <div class="h-2 w-full bg-white/5 rounded-full overflow-hidden">
                            <div class="skill-bar h-full bg-gradient-to-r from-yellow-400 to-orange-500 rounded-full" style="--target-width: 50%"></div>
                        </div>
                        <span class="text-xs text-gray-600 mt-2 block">50% Proficiency</span>
                    </div>
                </div>
            </div>

            <!-- Tech Stack -->
            <div class="reveal mt-24">
                <h3 class="text-2xl font-bold mb-10 text-center text-gray-400">Technologies I Work With</h3>
                <div class="flex flex-wrap justify-center gap-4">
                    <span class="glass px-6 py-3 rounded-full text-sm font-medium hover:bg-white/10 transition-all cursor-default">Laravel</span>
                    <span class="glass px-6 py-3 rounded-full text-sm font-medium hover:bg-white/10 transition-all cursor-default">PHP</span>
                    <span class="glass px-6 py-3 rounded-full text-sm font-medium hover:bg-white/10 transition-all cursor-default">MySQL</span>
                    <span class="glass px-6 py-3 rounded-full text-sm font-medium hover:bg-white/10 transition-all cursor-default">PostgreSQL</span>
                    <span class="glass px-6 py-3 rounded-full text-sm font-medium hover:bg-white/10 transition-all cursor-default">Redis</span>
                    <span class="glass px-6 py-3 rounded-full text-sm font-medium hover:bg-white/10 transition-all cursor-default">REST APIs</span>
                    <span class="glass px-6 py-3 rounded-full text-sm font-medium hover:bg-white/10 transition-all cursor-default">Docker</span>
                    <span class="glass px-6 py-3 rounded-full text-sm font-medium hover:bg-white/10 transition-all cursor-default">Git</span>
                    <span class="glass px-6 py-3 rounded-full text-sm font-medium hover:bg-white/10 transition-all cursor-default">AWS</span>
                    <span class="glass px-6 py-3 rounded-full text-sm font-medium hover:bg-white/10 transition-all cursor-default">Linux</span>
                    <span class="glass px-6 py-3 rounded-full text-sm font-medium hover:bg-white/10 transition-all cursor-default">Node.js</span>
                    <span class="glass px-6 py-3 rounded-full text-sm font-medium hover:bg-white/10 transition-all cursor-default">Vue.js</span>
                </div>
            </div>
        </div>
    </section>

    <!-- PROJECTS -->
    <section id="projects" class="py-32 bg-gradient-to-b from-[#080808] to-black relative">
        <div class="absolute inset-0 opacity-30">
            <div class="absolute top-20 right-20 w-72 h-72 bg-purple-500/20 rounded-full blur-[100px]"></div>
        </div>

        <div class="max-w-7xl mx-auto px-6 relative z-10">
            <!-- Section Header -->
            <div class="reveal flex flex-col md:flex-row justify-between items-end mb-20 gap-8">
                <div>
                    <h2 class="text-5xl md:text-7xl font-black mb-4">Featured Work</h2>
                    <p class="text-gray-400 text-xl">Selected projects that showcase my expertise</p>
                </div>
                <a href="#" class="magnetic-btn glass px-8 py-4 rounded-full text-sm font-medium hover:bg-white/10 transition-all flex items-center gap-2">
                    View All Projects
                    <i data-lucide="external-link" class="w-4 h-4"></i>
                </a>
            </div>

            <!-- Projects -->
            <div class="space-y-24">
                <!-- Project 1 -->
                <div class="reveal group grid lg:grid-cols-2 gap-12 items-center">
                    <div>
                        <div class="relative overflow-hidden rounded-3xl bg-zinc-900 aspect-video shadow-2xl">
                            <img src="https://images.unsplash.com/photo-1557821552-17105176677c?auto=format&fit=crop&q=80&w=1200" class="w-full h-full object-cover grayscale group-hover:grayscale-0 group-hover:scale-110 transition-all duration-700" alt="E-Commerce Platform">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        </div>
                    </div>
                    <div>
                        <p class="text-cyan-400 font-mono text-sm mb-4 uppercase tracking-wider">Full-Stack Development</p>
                        <h3 class="text-4xl md:text-5xl font-black mb-6 group-hover:text-cyan-400 transition-colors">E-Commerce Platform</h3>
                        <p class="text-gray-400 text-lg leading-relaxed mb-8">Modern e-commerce solution with real-time inventory management, secure payment processing, and comprehensive admin dashboard built with Laravel.</p>
                        <div class="flex flex-wrap gap-3 mb-8">
                            <span class="px-4 py-2 bg-white/5 rounded-full text-sm text-gray-400">Laravel</span>
                            <span class="px-4 py-2 bg-white/5 rounded-full text-sm text-gray-400">Vue.js</span>
                            <span class="px-4 py-2 bg-white/5 rounded-full text-sm text-gray-400">MySQL</span>
                            <span class="px-4 py-2 bg-white/5 rounded-full text-sm text-gray-400">Stripe</span>
                        </div>
                        <a href="#" class="magnetic-btn inline-flex items-center gap-3 px-8 py-4 glass rounded-2xl font-semibold group/btn hover:bg-white/10 transition-all">
                            <span>View Project</span>
                            <i data-lucide="arrow-up-right" class="w-5 h-5 group-hover/btn:translate-x-1 group-hover/btn:-translate-y-1 transition-transform"></i>
                        </a>
                    </div>
                </div>

                <!-- Project 2 -->
                <div class="reveal group grid lg:grid-cols-2 gap-12 items-center">
                    <div class="lg:order-2">
                        <div class="relative overflow-hidden rounded-3xl bg-zinc-900 aspect-video shadow-2xl">
                            <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&q=80&w=1200" class="w-full h-full object-cover grayscale group-hover:grayscale-0 group-hover:scale-110 transition-all duration-700" alt="API System">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        </div>
                    </div>
                    <div class="lg:order-1">
                        <p class="text-cyan-400 font-mono text-sm mb-4 uppercase tracking-wider">Backend Architecture</p>
                        <h3 class="text-4xl md:text-5xl font-black mb-6 group-hover:text-cyan-400 transition-colors">RESTful API System</h3>
                        <p class="text-gray-400 text-lg leading-relaxed mb-8">Scalable REST API architecture with JWT authentication, rate limiting, and comprehensive documentation for mobile and web applications.</p>
                        <div class="flex flex-wrap gap-3 mb-8">
                            <span class="px-4 py-2 bg-white/5 rounded-full text-sm text-gray-400">Laravel</span>
                            <span class="px-4 py-2 bg-white/5 rounded-full text-sm text-gray-400">PostgreSQL</span>
                            <span class="px-4 py-2 bg-white/5 rounded-full text-sm text-gray-400">Redis</span>
                            <span class="px-4 py-2 bg-white/5 rounded-full text-sm text-gray-400">Docker</span>
                        </div>
                        <a href="#" class="magnetic-btn inline-flex items-center gap-3 px-8 py-4 glass rounded-2xl font-semibold group/btn hover:bg-white/10 transition-all">
                            <span>View Project</span>
                            <i data-lucide="arrow-up-right" class="w-5 h-5 group-hover/btn:translate-x-1 group-hover/btn:-translate-y-1 transition-transform"></i>
                        </a>
                    </div>
                </div>

                <!-- Project 3 -->
                <div class="reveal group grid lg:grid-cols-2 gap-12 items-center">
                    <div>
                        <div class="relative overflow-hidden rounded-3xl bg-zinc-900 aspect-video shadow-2xl">
                            <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&q=80&w=1200" class="w-full h-full object-cover grayscale group-hover:grayscale-0 group-hover:scale-110 transition-all duration-700" alt="Management System">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        </div>
                    </div>
                    <div>
                        <p class="text-cyan-400 font-mono text-sm mb-4 uppercase tracking-wider">Enterprise Solution</p>
                        <h3 class="text-4xl md:text-5xl font-black mb-6 group-hover:text-cyan-400 transition-colors">Business Management System</h3>
                        <p class="text-gray-400 text-lg leading-relaxed mb-8">Comprehensive business management platform with inventory tracking, invoicing, and analytics dashboard for enterprise clients.</p>
                        <div class="flex flex-wrap gap-3 mb-8">
                            <span class="px-4 py-2 bg-white/5 rounded-full text-sm text-gray-400">Laravel</span>
                            <span class="px-4 py-2 bg-white/5 rounded-full text-sm text-gray-400">Livewire</span>
                            <span class="px-4 py-2 bg-white/5 rounded-full text-sm text-gray-400">MySQL</span>
                            <span class="px-4 py-2 bg-white/5 rounded-full text-sm text-gray-400">AWS</span>
                        </div>
                        <a href="#" class="magnetic-btn inline-flex items-center gap-3 px-8 py-4 glass rounde<a href="#" class="magnetic-btn inline-flex items-center gap-3 px-8 py-4 glass rounded-2xl font-semibold group/btn hover:bg-white/10 transition-all">
                            <span>View Project</span>
                            <i data-lucide="arrow-up-right" class="w-5 h-5 group-hover/btn:translate-x-1 group-hover/btn:-translate-y-1 transition-transform"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="contact" class="py-32 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 relative z-10">
            <div class="glass rounded-[4rem] p-12 md:p-24 overflow-hidden relative">
                <div class="absolute top-0 right-0 w-96 h-96 bg-cyan-500/10 rounded-full blur-[100px] -mr-48 -mt-48"></div>
                
                <div class="grid lg:grid-cols-2 gap-16 items-center">
                    <div class="reveal">
                        <h2 class="text-5xl md:text-7xl font-black mb-8 leading-tight">
                            Let's build <br/>
                            <span class="text-cyan-400">something great</span>
                        </h2>
                        <p class="text-gray-400 text-xl mb-12 max-w-md">
                            I'm currently available for freelance work and full-time opportunities. Have a project in mind?
                            just Contact me.
                        </p>
                        
                        <div class="space-y-6">
                            <a href="mailto:hello@lopsanglama.com" class="flex items-center gap-6 group">
                                <div class="w-14 h-14 glass rounded-2xl flex items-center justify-center text-cyan-400 group-hover:scale-110 transition-transform">
                                    <i data-lucide="mail"></i>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-500 uppercase tracking-widest">Email Me</p>
                                    <p class="text-lg font-bold">lopsang900@gmail.com</p>
                                </div>
                            </a>
                            <div class="flex items-center gap-6 group">
                                <div class="w-14 h-14 glass rounded-2xl flex items-center justify-center text-purple-400 group-hover:scale-110 transition-transform">
                                    <i data-lucide="map-pin"></i>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-500 uppercase tracking-widest">Location</p>
                                    <p class="text-lg font-bold">Lalitpur, Nepal</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <form class="reveal glass p-8 md:p-10 rounded-3xl space-y-6 border-white/5">
                        <div class="grid md:grid-cols-2 gap-6">
                            <div class="space-y-2">
                                <label class="text-xs font-bold uppercase tracking-widest text-gray-500 ml-2">Name</label>
                                <input type="text" placeholder="Your Name" class="w-full bg-white/5 border border-white/10 rounded-2xl px-6 py-4 focus:outline-none focus:border-cyan-500/50 transition-colors">
                            </div>
                            <div class="space-y-2">
                                <label class="text-xs font-bold uppercase tracking-widest text-gray-500 ml-2">Email</label>
                                <input type="email" placeholder="Your Gmail" class="w-full bg-white/5 border border-white/10 rounded-2xl px-6 py-4 focus:outline-none focus:border-cyan-500/50 transition-colors">
                            </div>
                        </div>
                        <div class="space-y-2">
                            <label class="text-xs font-bold uppercase tracking-widest text-gray-500 ml-2">Message</label>
                            <textarea rows="4" placeholder="Tell me about your project and the requirements..." class="w-full bg-white/5 border border-white/10 rounded-2xl px-6 py-4 focus:outline-none focus:border-cyan-500/50 transition-colors resize-none"></textarea>
                        </div>
                        <button class="w-full py-5 bg-white text-black font-black rounded-2xl hover:bg-cyan-400 transition-colors flex items-center justify-center gap-3">
                            Send Message
                            <i data-lucide="send" class="w-5 h-5"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer class="py-12 border-t border-white/5">
        <div class="max-w-7xl mx-auto px-6 flex flex-col md:flex-row justify-between items-center gap-8">
            <div class="flex items-center gap-3">
                <span class="text-lg font-black tracking-widest">LOPSANG</span>
                <span class="text-gray-600">© 2026 All Rights Reserved</span>
            </div>
            
            <div class="flex items-center gap-8">
                <a href="#" class="text-gray-500 hover:text-white transition-colors"><i data-lucide="github" class="w-5 h-5"></i></a>
                <a href="#" class="text-gray-500 hover:text-white transition-colors"><i data-lucide="linkedin" class="w-5 h-5"></i></a>
                <a href="#" class="text-gray-500 hover:text-white transition-colors"><i data-lucide="twitter" class="w-5 h-5"></i></a>
                <a href="#" class="text-gray-500 hover:text-white transition-colors"><i data-lucide="instagram" class="w-5 h-5"></i></a>
            </div>
        </div>
    </footer>

    <script>
        // Initialize Lucide Icons
        lucide.createIcons();

        // Navbar Scroll Effect
        window.addEventListener('scroll', () => {
            const nav = document.getElementById('navbar');
            if (window.scrollY > 50) {
                nav.classList.add('py-4');
                nav.querySelector('.glass').classList.add('bg-black/60');
            } else {
                nav.classList.remove('py-4');
                nav.querySelector('.glass').classList.remove('bg-black/60');
            }
        });

        // Mobile Menu Toggle
        const menuBtn = document.getElementById('menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        menuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('open');
        });

        // Reveal Animations on Scroll
        const observerOptions = { threshold: 0.1 };
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                    // Animate skill bars if the entry is the skills section
                    const skillBars = entry.target.querySelectorAll('.skill-bar');
                    skillBars.forEach(bar => bar.classList.add('animate'));
                }
            });
        }, observerOptions);

        document.querySelectorAll('.reveal').forEach(el => observer.observe(el));

        // Typewriter Effect
        const words = ["Scalable APIs", "Laravel Mastery", "High Performance", "Clean Code"];
        let i = 0, j = 0, currentWord = "", isDeleting = false;
        const typewriterEl = document.getElementById('typewriter');

        function type() {
            currentWord = words[i];
            if (isDeleting) {
                typewriterEl.textContent = currentWord.substring(0, j - 1);
                j--;
                if (j === 0) {
                    isDeleting = false;
                    i = (i + 1) % words.length;
                }
            } else {
                typewriterEl.textContent = currentWord.substring(0, j + 1);
                j++;
                if (j === currentWord.length) isDeleting = true;
            }
            setTimeout(type, isDeleting ? 100 : 200);
        }
        type();

        // Magnetic Button Effect (Simple version)
        document.querySelectorAll('.magnetic-btn').forEach(btn => {
            btn.addEventListener('mousemove', (e) => {
                const rect = btn.getBoundingClientRect();
                const x = e.clientX - rect.left - rect.width / 2;
                const y = e.clientY - rect.top - rect.height / 2;
                btn.style.transform = `translate(${x * 0.2}px, ${y * 0.2}px) scale(1.05)`;
            });
            btn.addEventListener('mouseleave', () => {
                btn.style.transform = `translate(0px, 0px) scale(1)`;
            });
        });
    </script>
</body>
</html>