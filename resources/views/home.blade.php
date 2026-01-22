<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lopsang | Lama</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
    <style>
        :root {
            --brand-cyan: #22d3ee;
            --brand-purple: #a855f7;
            --bg-dark: #050505;
        }

        body {
            background-color: var(--bg-dark);
            color: #fafafa;
            font-family: 'Inter', system-ui, -apple-system, sans-serif;
        }

        /* High-end Grain Texture Overlay */
        .grain-overlay {
            position: fixed;
            top: 0; left: 0; width: 100%; height: 100%;
            pointer-events: none;
            z-index: 9999;
            opacity: 0.04;
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noiseFilter'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.65' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noiseFilter)'/%3E%3C/svg%3E");
        }

<<<<<<< HEAD
        /* Glassmorphism Refinement */
=======
        /* Magnetic Button Effect */
        .magnetic-btn {
            position: relative;
            transition: transform 0.3s cubic-bezier(0.23, 1, 0.32, 1);
        }

        /* Smooth Reveal Animation */
        .reveal {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s cubic-bezier(0.23, 1, 0.32, 1);
        }
        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }

        /*!* Cursor Trail *!*/
        /*.cursor-dot {*/
        /*    width: 8px;*/
        /*    height: 8px;*/
        /*    background: var(--brand-cyan);*/
        /*    border-radius: 50%;*/
        /*    position: fixed;*/
        /*    pointer-events: none;*/
        /*    z-index: 10000;*/
        /*    mix-blend-mode: difference;*/
        /*    transition: transform 0.2s ease;*/
        /*    transform: translate(-50%, -50%);*/
        /*}*/
        /*.cursor-outline {*/
        /*    width: 40px;*/
        /*    height: 40px;*/
        /*    border: 2px solid rgba(34, 211, 238, 0.5);*/
        /*    border-radius: 50%;*/
        /*    position: fixed;*/
        /*    pointer-events: none;*/
        /*    z-index: 10000;*/
        /*    transition: all 0.15s ease;*/
        /*    transform: translate(-50%, -50%);*/
        /*}*/

        /* Enhanced Glassmorphism */
>>>>>>> main
        .glass {
            background: rgba(255, 255, 255, 0.02);
            backdrop-filter: blur(16px);
            border: 1px solid rgba(255, 255, 255, 0.08);
            transition: all 0.4s cubic-bezier(0.23, 1, 0.32, 1);
        }
        .glass:hover {
            background: rgba(255, 255, 255, 0.05);
            border-color: rgba(255, 255, 255, 0.2);
        }

        /* Animations */
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }
        .animate-float { animation: float 6s ease-in-out infinite; }

        .logo-glow {
            filter: drop-shadow(0 0 15px rgba(34, 211, 238, 0.3));
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
                        <svg viewBox="0 0 100 100" class="w-full h-full transform transition-transform group-hover:rotate-12">
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
                    <span class="text-xl font-black tracking-widest text-white group-hover:text-cyan-400 transition-colors">LOPSANG</span>
                </a>

                <div class="hidden md:flex items-center gap-10" id="desktop-nav">
                    <!-- Links injected via JS -->
                </div>

                <button id="menu-btn" class="md:hidden p-2 text-white" aria-label="Toggle Menu">
                    <i data-lucide="menu"></i>
                </button>
            </div>
        </nav>
    </header>

<<<<<<< HEAD
    <!-- HERO -->
    <section class="relative min-h-screen flex items-center justify-center pt-20">
        <div class="absolute inset-0 z-0 overflow-hidden">
            <div class="absolute top-1/4 left-1/4 w-[500px] h-[500px] bg-cyan-500/10 rounded-full blur-[120px] animate-float"></div>
            <div class="absolute bottom-1/4 right-1/4 w-[500px] h-[500px] bg-purple-500/10 rounded-full blur-[120px] animate-float" style="animation-delay: -3s"></div>
        </div>

        <div class="relative z-10 text-center px-6">
            <p class="text-cyan-400 font-mono tracking-[0.3em] uppercase text-sm mb-6 opacity-0 translate-y-4 transition-all duration-1000 ease-out" id="hero-sub">Creative Technologist</p>
            <h1 class="text-6xl md:text-9xl font-black tracking-tighter mb-8 leading-none">
                <span class="inline-block hover:italic transition-all duration-300">Building</span><br/>
                <span class="bg-clip-text text-transparent bg-gradient-to-r from-cyan-400 via-white to-purple-500">Interfaces.</span>
            </h1>
            <div class="text-xl md:text-2xl text-gray-400 max-w-2xl mx-auto font-light leading-relaxed">
                Expert in crafting <span id="typewriter" class="text-white font-medium border-b-2 border-cyan-500/50"></span>
=======
            <!-- Mobile Menu -->
            <div class="mobile-menu md:hidden" id="mobile-menu">
                <div class="pt-6 pb-2 space-y-4">
                    <a href="#skills" class="block text-sm font-medium text-gray-400 hover:text-white transition-colors">Expertise</a>
                    <a href="#projects" class="block text-sm font-medium text-gray-400 hover:text-white transition-colors">Work</a>
                    <a href="#contact" class="block text-sm font-medium text-gray-400 hover:text-white transition-colors">Connect</a>
                </div>
            </div>
        </div>
    </nav>
</header>

<!-- HERO -->
<section class="relative min-h-screen flex items-center justify-center pt-20 overflow-hidden">
    <div class="absolute inset-0 z-0">
        <div class="absolute top-1/4 left-1/4 w-[600px] h-[600px] bg-cyan-500/10 rounded-full blur-[140px] animate-float"></div>
        <div class="absolute bottom-1/4 right-1/4 w-[600px] h-[600px] bg-purple-500/10 rounded-full blur-[140px] animate-float" style="animation-delay: -4s"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[400px] h-[400px] bg-pink-500/5 rounded-full blur-[120px] animate-float" style="animation-delay: -2s"></div>
    </div>

    <div class="relative z-10 text-center px-6 max-w-6xl mx-auto">
        <div class="reveal mb-8">
            <p class="text-cyan-400 font-mono tracking-[0.3em] uppercase text-sm mb-3 opacity-80">Creative Technologist</p>
            <div class="flex items-center justify-center gap-4 text-gray-500 text-xs">
                    <span class="flex items-center gap-2">
                        <span class="w-2 h-2 bg-green-400 rounded-full animate-pulse"></span>
                        Available for Projects
                    </span>
                <span>•</span>
                <span>Lalitpur, Nepal</span>
            </div>
        </div>

        <h1 class="reveal text-6xl md:text-8xl lg:text-9xl font-black tracking-tighter mb-10 leading-[0.9]">
            <span class="inline-block hover:skew-y-2 transition-transform duration-300">Hello I'am </span>
            <br/>
            <span class="bg-clip-text text-transparent bg-gradient-to-r from-cyan-400 via-purple-400 to-pink-400 gradient-animate">Backend Developer</span>
        </h1>

        <div class="reveal text-xl md:text-2xl text-gray-400 max-w-3xl mx-auto font-light leading-relaxed mb-12">
            Backend developer specializing in <span id="typewriter" class="text-white font-medium border-b-2 border-cyan-500/50"></span>
            <br/>
            <span class="text-base text-gray-500 mt-2 inline-block">Building scalable solutions with precision and creativity</span>
        </div>

        <div class="reveal mt-14 flex flex-col sm:flex-row items-center justify-center gap-6">
            <a href="#projects" class="magnetic-btn group px-12 py-5 bg-gradient-to-r from-cyan-500 to-cyan-400 text-black font-bold rounded-2xl hover:shadow-2xl hover:shadow-cyan-500/50 transition-all duration-500 flex items-center gap-3">
                <span>Explore Work</span>
                <i data-lucide="arrow-right" class="w-5 h-5 group-hover:translate-x-2 transition-transform"></i>
            </a>
            <a href="#contact" class="magnetic-btn px-12 py-5 glass text-white font-bold rounded-2xl hover:scale-105 transition-all duration-300">
                Get In Touch
            </a>
        </div>

        <div class="reveal mt-20 flex flex-wrap items-center justify-center gap-8 md:gap-12 text-sm text-gray-600">
            <div class="text-center">
                <div class="text-3xl font-bold text-white mb-1"></div>
                <div>Years Experience</div>
            </div>
            <div class="w-px h-12 bg-white/10 hidden sm:block"></div>
            <div class="text-center">
                <div class="text-3xl font-bold text-white mb-1"></div>
                <div>Projects Delivered</div>
            </div>
            <div class="w-px h-12 bg-white/10 hidden sm:block"></div>
            <div class="text-center">
                <div class="text-3xl font-bold text-white mb-1">100%</div>
                <div>Client Satisfaction</div>
            </div>
        </div>
    </div>

    <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 animate-bounce">
        <i data-lucide="chevron-down" class="w-6 h-6 text-gray-600"></i>
    </div>
</section>

<!-- SKILLS -->
<section id="skills" class="py-32 relative">
    <div class="max-w-7xl mx-auto px-6">
        <div class="reveal mb-20 text-center">
            <h2 class="text-5xl md:text-7xl font-black mb-6 bg-clip-text text-transparent bg-gradient-to-r from-white to-gray-500">Technical Expertise</h2>
            <p class="text-gray-500 text-lg max-w-2xl mx-auto">Mastering modern technologies to build exceptional digital products</p>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Frontend Development -->
            <div class="reveal glass p-10 rounded-3xl group cursor-pointer">
                <div class="mb-6 text-cyan-400">
                    <i data-lucide="code-2" class="w-12 h-12 group-hover:scale-110 transition-transform duration-300"></i>
                </div>
                <h3 class="text-2xl font-bold mb-3 text-white">Frontend Development</h3>
                <p class="text-gray-500 text-sm mb-6">React, Vue, Next.js</p>
                <div class="relative">
                    <div class="h-2 w-full bg-white/5 rounded-full overflow-hidden">
                        <div class="skill-bar h-full bg-gradient-to-r from-cyan-400 to-purple-500 rounded-full transition-all duration-1000 ease-out" style="width: 0" data-width="95%"></div>
                    </div>
                    <span class="text-xs text-gray-600 mt-2 block">95% Proficiency</span>
                </div>
>>>>>>> main
            </div>

<<<<<<< HEAD
            <div class="mt-12 flex flex-col sm:flex-row items-center justify-center gap-6">
                <a href="#projects" class="group px-10 py-5 bg-white text-black font-bold rounded-2xl hover:bg-cyan-400 transition-all duration-300 flex items-center gap-2">
                    View Projects <i data-lucide="arrow-right" class="w-5 h-5 group-hover:translate-x-1 transition-transform"></i>
=======
            <!-- Backend Engineering -->
            <div class="reveal glass p-10 rounded-3xl group cursor-pointer">
                <div class="mb-6 text-orange-400">
                    <i data-lucide="server" class="w-12 h-12 group-hover:scale-110 transition-transform duration-300"></i>
                </div>
                <h3 class="text-2xl font-bold mb-3 text-white">Backend Engineering</h3>
                <p class="text-gray-500 text-sm mb-6">Laravel, Node.js, APIs</p>
                <div class="relative">
                    <div class="h-2 w-full bg-white/5 rounded-full overflow-hidden">
                        <div class="skill-bar h-full bg-gradient-to-r from-cyan-400 to-purple-500 rounded-full transition-all duration-1000 ease-out" style="width: 0" data-width="92%"></div>
                    </div>
                    <span class="text-xs text-gray-600 mt-2 block">95% Proficiency</span>
                </div>
            </div>

            <!-- UI/UX Design -->
            <div class="reveal glass p-10 rounded-3xl group cursor-pointer">
                <div class="mb-6 text-purple-400">
                    <i data-lucide="palette" class="w-12 h-12 group-hover:scale-110 transition-transform duration-300"></i>
                </div>
                <h3 class="text-2xl font-bold mb-3 text-white">UI/UX Design</h3>
                <p class="text-gray-500 text-sm mb-6">Figma, Responsive Design</p>
                <div class="relative">
                    <div class="h-2 w-full bg-white/5 rounded-full overflow-hidden">
                        <div class="skill-bar h-full bg-gradient-to-r from-cyan-400 to-purple-500 rounded-full transition-all duration-1000 ease-out" style="width: 0" data-width="88%"></div>
                    </div>
                    <span class="text-xs text-gray-600 mt-2 block">50% Proficiency</span>
                </div>
            </div>

            <!-- Performance -->
            <div class="reveal glass p-10 rounded-3xl group cursor-pointer">
                <div class="mb-6 text-yellow-400">
                    <i data-lucide="zap" class="w-12 h-12 group-hover:scale-110 transition-transform duration-300"></i>
                </div>
                <h3 class="text-2xl font-bold mb-3 text-white">Performance</h3>
                <p class="text-gray-500 text-sm mb-6">Optimization, SEO</p>
                <div class="relative">
                    <div class="h-2 w-full bg-white/5 rounded-full overflow-hidden">
                        <div class="skill-bar h-full bg-gradient-to-r from-cyan-400 to-purple-500 rounded-full transition-all duration-1000 ease-out" style="width: 0" data-width="94%"></div>
                    </div>
                    <span class="text-xs text-gray-600 mt-2 block">50% Proficiency</span>
                </div>
            </div>
        </div>

        <!-- Tech Stack -->
        <div class="reveal mt-24">
            <h3 class="text-2xl font-bold mb-10 text-center text-gray-400">Technologies I Work With</h3>
            <div class="flex flex-wrap justify-center gap-4">
                <span class="glass px-6 py-3 rounded-full text-sm font-medium hover:bg-white/10 transition-all cursor-default">React</span>
                <span class="glass px-6 py-3 rounded-full text-sm font-medium hover:bg-white/10 transition-all cursor-default">Vue.js</span>
                <span class="glass px-6 py-3 rounded-full text-sm font-medium hover:bg-white/10 transition-all cursor-default">Next.js</span>
                <span class="glass px-6 py-3 rounded-full text-sm font-medium hover:bg-white/10 transition-all cursor-default">Laravel</span>
                <span class="glass px-6 py-3 rounded-full text-sm font-medium hover:bg-white/10 transition-all cursor-default">Node.js</span>
                <span class="glass px-6 py-3 rounded-full text-sm font-medium hover:bg-white/10 transition-all cursor-default">TypeScript</span>
                <span class="glass px-6 py-3 rounded-full text-sm font-medium hover:bg-white/10 transition-all cursor-default">Tailwind CSS</span>
                <span class="glass px-6 py-3 rounded-full text-sm font-medium hover:bg-white/10 transition-all cursor-default">PostgreSQL</span>
                <span class="glass px-6 py-3 rounded-full text-sm font-medium hover:bg-white/10 transition-all cursor-default">Docker</span>
                <span class="glass px-6 py-3 rounded-full text-sm font-medium hover:bg-white/10 transition-all cursor-default">AWS</span>
                <span class="glass px-6 py-3 rounded-full text-sm font-medium hover:bg-white/10 transition-all cursor-default">Git</span>
                <span class="glass px-6 py-3 rounded-full text-sm font-medium hover:bg-white/10 transition-all cursor-default">Figma</span>
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
                    <p class="text-gray-400 text-lg leading-relaxed mb-8">Modern e-commerce solution with real-time inventory and payment processing</p>
                    <div class="flex flex-wrap gap-3 mb-8">
                        <span class="px-4 py-2 bg-white/5 rounded-full text-sm text-gray-400">Laravel</span>
                        <span class="px-4 py-2 bg-white/5 rounded-full text-sm text-gray-400">Vue.js</span>
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
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&q=80&w=1200" class="w-full h-full object-cover grayscale group-hover:grayscale-0 group-hover:scale-110 transition-all duration-700" alt="Analytics Dashboard">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    </div>
                </div>
                <div class="lg:order-1">
                    <p class="text-cyan-400 font-mono text-sm mb-4 uppercase tracking-wider">Data Visualization</p>
                    <h3 class="text-4xl md:text-5xl font-black mb-6 group-hover:text-cyan-400 transition-colors">Analytics Dashboard</h3>
                    <p class="text-gray-400 text-lg leading-relaxed mb-8">Interactive dashboard for real-time business metrics and insights</p>
                    <div class="flex flex-wrap gap-3 mb-8">
                        <span class="px-4 py-2 bg-white/5 rounded-full text-sm text-gray-400">React</span>
                        <span class="px-4 py-2 bg-white/5 rounded-full text-sm text-gray-400">D3.js</span>
                        <span class="px-4 py-2 bg-white/5 rounded-full text-sm text-gray-400">Node.js</span>
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
                        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&q=80&w=1200" class="w-full h-full object-cover grayscale group-hover:grayscale-0 group-hover:scale-110 transition-all duration-700" alt="SaaS Application">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    </div>
                </div>
                <div>
                    <p class="text-cyan-400 font-mono text-sm mb-4 uppercase tracking-wider">Product Design</p>
                    <h3 class="text-4xl md:text-5xl font-black mb-6 group-hover:text-cyan-400 transition-colors">SaaS Application</h3>
                    <p class="text-gray-400 text-lg leading-relaxed mb-8">Enterprise SaaS platform with multi-tenant architecture</p>
                    <div class="flex flex-wrap gap-3 mb-8">
                        <span class="px-4 py-2 bg-white/5 rounded-full text-sm text-gray-400">Next.js</span>
                        <span class="px-4 py-2 bg-white/5 rounded-full text-sm text-gray-400">PostgreSQL</span>
                        <span class="px-4 py-2 bg-white/5 rounded-full text-sm text-gray-400">AWS</span>
                    </div>
                    <a href="#" class="magnetic-btn inline-flex items-center gap-3 px-8 py-4 glass rounded-2xl font-semibold group/btn hover:bg-white/10 transition-all">
                        <span>View Project</span>
                        <i data-lucide="arrow-up-right" class="w-5 h-5 group-hover/btn:translate-x-1 group-hover/btn:-translate-y-1 transition-transform"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FOOTER -->
<footer id="contact" class="relative pt-40 pb-12 border-t border-white/5 bg-gradient-to-b from-black to-[#050505]">
    <div class="max-w-7xl mx-auto px-6">
        <div class="reveal flex flex-col items-center text-center mb-32">
            <p class="text-cyan-400 font-mono text-sm tracking-widest uppercase mb-6">Let's Collaborate</p>
            <h2 class="text-5xl md:text-8xl font-black mb-8 tracking-tight leading-tight">
                Ready to Build<br/>
                <span class="bg-clip-text text-transparent bg-gradient-to-r from-cyan-400 to-purple-400">Something Great?</span>
            </h2>
            <a href="mailto:lopsang900@gmail.com" class="magnetic-btn group text-2xl md:text-4xl font-light hover:text-cyan-400 transition-all mb-8 flex items-center gap-4">
                <span class="border-b-2 border-cyan-400/30 group-hover:border-cyan-400">lopsang900@gmail.com</span>
                <i data-lucide="arrow-up-right" class="w-8 h-8 group-hover:translate-x-1 group-hover:-translate-y-1 transition-transform"></i>
            </a>
            <p class="text-gray-500 max-w-xl">Open to exciting projects, collaborations, and full-time opportunities</p>
        </div>

        <div class="grid md:grid-cols-3 items-center gap-12 pt-12 border-t border-white/5">
            <div class="flex items-center gap-4">
                <svg viewBox="0 0 100 100" class="w-12 h-12">
                    <defs>
                        <linearGradient id="logoGrad2" x1="0%" y1="0%" x2="100%" y2="100%">
                            <stop offset="0%" stop-color="var(--brand-cyan)" />
                            <stop offset="100%" stop-color="var(--brand-purple)" />
                        </linearGradient>
                    </defs>
                    <path d="M10,90 L50,10 L90,90 L70,90 L50,50 L30,90 Z" fill="url(#logoGrad2)" />
                </svg>
                <div>
                    <span class="text-2xl font-black block">LOPSANG</span>
                    <span class="text-xs text-gray-600">Creative Developer</span>
                </div>
            </div>

            <div class="flex justify-center gap-6">
                <a href="#" class="w-12 h-12 rounded-full glass flex items-center justify-center hover:bg-white/10 transition-all group" aria-label="GitHub">
                    <i data-lucide="github" class="w-5 h-5 group-hover:scale-110 transition-transform"></i>
>>>>>>> main
                </a>
                <a href="#contact" class="px-10 py-5 glass text-white font-bold rounded-2xl hover:bg-white/5 transition-all">
                    Let's Chat
                </a>
            </div>
        </div>
    </section>

    <!-- SKILLS -->
    <section id="skills" class="py-32 relative">
        <div class="max-w-7xl mx-auto px-6">
            <div class="mb-20">
                <h2 class="text-4xl md:text-6xl font-black mb-4">Core Mastery</h2>
                <div class="h-1.5 w-24 bg-gradient-to-r from-cyan-400 to-purple-500 rounded-full"></div>
            </div>
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6" id="skills-grid">
                <!-- Injected via JS -->
            </div>
        </div>
    </section>

    <!-- PROJECTS -->
    <section id="projects" class="py-32 bg-[#080808]">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex flex-col md:flex-row justify-between items-end mb-20 gap-8">
                <div>
                    <h2 class="text-4xl md:text-6xl font-black">Featured</h2>
                    <p class="text-gray-500 text-xl mt-4">Selected work from 2024 - 2026</p>
                </div>
                <div class="text-gray-400 font-mono text-sm uppercase tracking-widest">[ Scroll to discover ]</div>
            </div>

            <div class="grid lg:grid-cols-2 gap-12" id="projects-grid">
                <!-- Injected via JS -->
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer id="contact" class="relative pt-40 pb-12 border-t border-white/5">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex flex-col items-center text-center mb-32">
                <h2 class="text-5xl md:text-8xl font-black mb-10 tracking-tight">Need a Partner?</h2>
                <a href="mailto:lopsang900@gmail.com" class="text-2xl md:text-4xl font-light hover:text-cyan-400 transition-all underline underline-offset-8">
                    lopsang900@gmail.com
                </a>
            </div>

<<<<<<< HEAD
            <div class="grid md:grid-cols-3 items-center gap-12">
                <div class="flex items-center gap-4">
                     <svg viewBox="0 0 100 100" class="w-12 h-12">
                        <path d="M10,90 L50,10 L90,90 L70,90 L50,50 L30,90 Z" fill="url(#logoGrad)" />
                    </svg>
                    <span class="text-2xl font-black">LOPSANG</span>
                </div>
                <div class="flex justify-center gap-8 text-gray-500">
                    <a href="#" class="hover:text-white transition-colors">Github</a>
                    <a href="#" class="hover:text-white transition-colors">LinkedIn</a>
                    <a href="#" class="hover:text-white transition-colors">Dribbble</a>
                </div>
                <div class="text-right text-gray-600 text-sm">
                    © 2026 Lalitpur, Nepal
                </div>
=======
            <div class="text-center md:text-right">
{{--                <div class="text-gray-600 text-sm mb-2">© 2026 All Rights Reserved</div>--}}
                <div class="text-gray-700 text-xs">Contact me</div>
>>>>>>> main
            </div>
        </div>
    </footer>

    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <script>
        const NAV_LINKS = [
            { name: 'Expertise', href: '#skills' },
            { name: 'Work', href: '#projects' },
            { name: 'Connect', href: '#contact' }
        ];

        const SKILLS = [
            { title: 'Frontend Engine', level: '95%', icon: 'code-2', color: 'text-cyan-400' },
            { title: 'Laravel Ecosystem', level: '90%', icon: 'server', color: 'text-orange-400' },
            { title: 'UI Architect', level: '85%', icon: 'layout', color: 'text-purple-400' },
            { title: 'Optimization', level: '92%', icon: 'zap', color: 'text-yellow-400' }
        ];

        const PROJECTS = [
            {
                title: 'Nexus Platform',
                category: 'Architecture',
                img: 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&q=80&w=800'
            },
            {
                title: 'Quantum Dashboard',
                category: 'Data Visualization',
                img: ''
            }
        ];

        document.getElementById('desktop-nav').innerHTML = NAV_LINKS.map(link =>
            `<a href="${link.href}" class="text-sm font-medium text-gray-400 hover:text-white transition-colors relative group">
                ${link.name}
                <span class="absolute -bottom-1 left-0 w-0 h-px bg-cyan-400 transition-all group-hover:w-full"></span>
            </a>`
        ).join('');

        document.getElementById('skills-grid').innerHTML = SKILLS.map(skill => `
            <div class="glass p-8 rounded-[2rem] group">
                <i data-lucide="${skill.icon}" class="${skill.color} mb-6 w-10 h-10 group-hover:scale-110 transition-transform"></i>
                <h3 class="text-xl font-bold mb-4 text-white">${skill.title}</h3>
                <div class="h-1.5 w-full bg-white/5 rounded-full overflow-hidden">
                    <div class="h-full bg-gradient-to-r from-cyan-400 to-purple-500" style="width: ${skill.level}"></div>
                </div>
            </div>
        `).join('');

        document.getElementById('projects-grid').innerHTML = PROJECTS.map(proj => `
            <div class="group">
                <div class="relative overflow-hidden rounded-[2.5rem] bg-zinc-900 aspect-video">
                    <img src="${proj.img}" class="w-full h-full object-cover grayscale group-hover:grayscale-0 group-hover:scale-105 transition-all duration-700" alt="${proj.title}">
                    <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                        <span class="px-8 py-3 bg-white text-black font-bold rounded-full">View Details</span>
                    </div>
                </div>
                <div class="mt-8 flex justify-between items-start">
                    <div>
                        <h3 class="text-3xl font-bold">${proj.title}</h3>
                        <p class="text-gray-500 font-mono text-sm mt-2">${proj.category}</p>
                    </div>
                    <div class="w-12 h-12 rounded-full border border-white/10 flex items-center justify-center group-hover:bg-white group-hover:text-black transition-all">
                        <i data-lucide="arrow-up-right"></i>
                    </div>
                </div>
            </div>
        `).join('');

        lucide.createIcons();

        new Typed('#typewriter', {
            strings: ['Scalable Architecture', 'Immersive UI', 'Laravel Backends', 'Performant Code'],
            typeSpeed: 50,
            backSpeed: 30,
            loop: true
        });

        setTimeout(() => {
            document.getElementById('hero-sub').classList.replace('opacity-0', 'opacity-100');
            document.getElementById('hero-sub').classList.replace('translate-y-4', 'translate-y-0');
        }, 300);

        const nav = document.getElementById('navbar');
        window.addEventListener('scroll', () => {
            if(window.scrollY > 50) {
                nav.classList.add('bg-black/50', 'backdrop-blur-xl', 'py-4');
                nav.classList.remove('py-6');
            } else {
                nav.classList.remove('bg-black/50', 'backdrop-blur-xl', 'py-4');
                nav.classList.add('py-6');
            }
        });
    </script>
</body>
</html>
