import React, { useState, useEffect } from 'react';
import { Code, Database, Server, Mail, Github, Linkedin, ExternalLink, ChevronDown } from 'lucide-react';

export default function LaravelPortfolio() {
    const [activeSection, setActiveSection] = useState('home');
    const [isScrolled, setIsScrolled] = useState(false);

    useEffect(() => {
        const handleScroll = () => {
            setIsScrolled(window.scrollY > 50);
        };
        window.addEventListener('scroll', handleScroll);
        return () => window.removeEventListener('scroll', handleScroll);
    }, []);

    const projects = [
        {
            title: "E-Commerce REST API",
            tech: "Laravel 12, MySQL, Redis, JWT",
            description: "Built a scalable REST API handling 100k+ requests/day with advanced caching, payment gateway integration, and real-time inventory management.",
            highlights: ["Optimized queries reducing response time by 60%", "Implemented queue jobs for email notifications", "JWT authentication with refresh tokens"]
        },
        {
            title: "CRM System Backend",
            tech: "Laravel 12, PostgreSQL, Docker",
            description: "Developed a comprehensive CRM backend with role-based access control, automated workflows, and third-party integrations.",
            highlights: ["Multi-tenant architecture", "Custom artisan commands for data migration", "RESTful API with OpenAPI documentation"]
        },
        {
            title: "Real-time Chat Application",
            tech: "Laravel 12, WebSockets, Pusher, Redis",
            description: "Created a real-time messaging system with presence channels, typing indicators, and message encryption.",
            highlights: ["Broadcasting events with Laravel Echo", "Queue-based notification system", "Message persistence and search functionality"]
        }
    ];

    const skills = {
        "Core": ["Laravel 12", "PHP 8.3", "RESTful APIs", "GraphQL", "Microservices"],
        "Database": ["MySQL", "PostgreSQL", "Redis", "MongoDB", "Query Optimization"],
        "Tools": ["Docker", "Git", "Composer", "PHPUnit", "Laravel Sail"],
        "Services": ["AWS", "Pusher", "Stripe", "SendGrid", "Cloudflare"]
    };

    const scrollToSection = (id) => {
        document.getElementById(id)?.scrollIntoView({ behavior: 'smooth' });
        setActiveSection(id);
    };

    return (
        <div className="min-h-screen bg-gradient-to-br from-slate-900 via-purple-900 to-slate-900 text-white">
            {/* Navigation */}
            <nav className={`fixed top-0 w-full z-50 transition-all duration-300 ${isScrolled ? 'bg-slate-900/95 backdrop-blur-sm shadow-lg' : 'bg-transparent'}`}>
                <div className="max-w-6xl mx-auto px-6 py-4">
                    <div className="flex justify-between items-center">
                        <div className="text-2xl font-bold bg-gradient-to-r from-purple-400 to-pink-400 bg-clip-text text-transparent">
                            Laravel Dev
                        </div>
                        <div className="hidden md:flex space-x-8">
                            {['Home', 'About', 'Projects', 'Skills', 'Contact'].map((item) => (
                                <button
                                    key={item}
                                    onClick={() => scrollToSection(item.toLowerCase())}
                                    className={`hover:text-purple-400 transition-colors ${activeSection === item.toLowerCase() ? 'text-purple-400' : ''}`}
                                >
                                    {item}
                                </button>
                            ))}
                        </div>
                    </div>
                </div>
            </nav>

            {/* Hero Section */}
            <section id="home" className="min-h-screen flex items-center justify-center px-6 pt-20">
                <div className="text-center max-w-4xl">
                    <div className="mb-6 inline-block">
                        <div className="w-32 h-32 bg-gradient-to-br from-purple-500 to-pink-500 rounded-full flex items-center justify-center mx-auto shadow-2xl shadow-purple-500/50">
                            <Code className="w-16 h-16" />
                        </div>
                    </div>
                    <h1 className="text-5xl md:text-7xl font-bold mb-6 bg-gradient-to-r from-purple-400 via-pink-400 to-purple-400 bg-clip-text text-transparent animate-pulse">
                        Laravel Backend Developer
                    </h1>
                    <p className="text-xl md:text-2xl text-gray-300 mb-8">
                        Crafting robust, scalable APIs and backend systems with Laravel 12
                    </p>
                    <div className="flex flex-wrap justify-center gap-4">
                        <button
                            onClick={() => scrollToSection('projects')}
                            className="px-8 py-3 bg-gradient-to-r from-purple-600 to-pink-600 rounded-full hover:shadow-lg hover:shadow-purple-500/50 transition-all hover:scale-105"
                        >
                            View My Work
                        </button>
                        <button
                            onClick={() => scrollToSection('contact')}
                            className="px-8 py-3 border-2 border-purple-400 rounded-full hover:bg-purple-400/10 transition-all hover:scale-105"
                        >
                            Get In Touch
                        </button>
                    </div>
                    <div className="mt-12 animate-bounce">
                        <ChevronDown className="w-8 h-8 mx-auto text-purple-400" />
                    </div>
                </div>
            </section>

            {/* About Section */}
            <section id="about" className="min-h-screen flex items-center px-6 py-20">
                <div className="max-w-4xl mx-auto">
                    <h2 className="text-4xl md:text-5xl font-bold mb-12 text-center bg-gradient-to-r from-purple-400 to-pink-400 bg-clip-text text-transparent">
                        About Me
                    </h2>
                    <div className="bg-white/5 backdrop-blur-sm rounded-2xl p-8 border border-purple-500/20 hover:border-purple-500/40 transition-all">
                        <p className="text-lg text-gray-300 mb-6 leading-relaxed">
                            I'm a passionate Laravel backend developer with 5+ years of experience building high-performance web applications.
                            I specialize in creating RESTful APIs, optimizing database queries, and implementing scalable architectures.
                        </p>
                        <p className="text-lg text-gray-300 mb-6 leading-relaxed">
                            My expertise lies in Laravel 12, PHP 8.3, and modern backend development practices. I'm committed to writing
                            clean, maintainable code and following SOLID principles. I love tackling complex problems and turning them
                            into elegant, efficient solutions.
                        </p>
                        <div className="grid grid-cols-1 md:grid-cols-3 gap-4 mt-8">
                            <div className="flex items-center space-x-3 bg-purple-500/10 p-4 rounded-lg">
                                <Server className="w-8 h-8 text-purple-400" />
                                <div>
                                    <div className="font-bold">100+</div>
                                    <div className="text-sm text-gray-400">APIs Built</div>
                                </div>
                            </div>
                            <div className="flex items-center space-x-3 bg-purple-500/10 p-4 rounded-lg">
                                <Database className="w-8 h-8 text-purple-400" />
                                <div>
                                    <div className="font-bold">50+</div>
                                    <div className="text-sm text-gray-400">Projects</div>
                                </div>
                            </div>
                            <div className="flex items-center space-x-3 bg-purple-500/10 p-4 rounded-lg">
                                <Code className="w-8 h-8 text-purple-400" />
                                <div>
                                    <div className="font-bold">5+</div>
                                    <div className="text-sm text-gray-400">Years Exp</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {/* Projects Section */}
            <section id="projects" className="min-h-screen px-6 py-20">
                <div className="max-w-6xl mx-auto">
                    <h2 className="text-4xl md:text-5xl font-bold mb-12 text-center bg-gradient-to-r from-purple-400 to-pink-400 bg-clip-text text-transparent">
                        Featured Projects
                    </h2>
                    <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        {projects.map((project, idx) => (
                            <div
                                key={idx}
                                className="bg-white/5 backdrop-blur-sm rounded-xl p-6 border border-purple-500/20 hover:border-purple-500/40 transition-all hover:scale-105 hover:shadow-xl hover:shadow-purple-500/20"
                            >
                                <div className="flex items-start justify-between mb-4">
                                    <h3 className="text-xl font-bold text-purple-300">{project.title}</h3>
                                    <ExternalLink className="w-5 h-5 text-gray-400 hover:text-purple-400 cursor-pointer" />
                                </div>
                                <div className="text-sm text-purple-400 mb-3 font-mono">{project.tech}</div>
                                <p className="text-gray-300 mb-4 text-sm leading-relaxed">{project.description}</p>
                                <div className="space-y-2">
                                    {project.highlights.map((highlight, i) => (
                                        <div key={i} className="flex items-start space-x-2 text-sm text-gray-400">
                                            <div className="w-1.5 h-1.5 bg-purple-400 rounded-full mt-1.5 flex-shrink-0"></div>
                                            <span>{highlight}</span>
                                        </div>
                                    ))}
                                </div>
                            </div>
                        ))}
                    </div>
                </div>
            </section>

            {/* Skills Section */}
            <section id="skills" className="min-h-screen flex items-center px-6 py-20">
                <div className="max-w-6xl mx-auto w-full">
                    <h2 className="text-4xl md:text-5xl font-bold mb-12 text-center bg-gradient-to-r from-purple-400 to-pink-400 bg-clip-text text-transparent">
                        Technical Skills
                    </h2>
                    <div className="grid grid-cols-1 md:grid-cols-2 gap-6">
                        {Object.entries(skills).map(([category, items]) => (
                            <div
                                key={category}
                                className="bg-white/5 backdrop-blur-sm rounded-xl p-6 border border-purple-500/20 hover:border-purple-500/40 transition-all"
                            >
                                <h3 className="text-2xl font-bold mb-4 text-purple-300">{category}</h3>
                                <div className="flex flex-wrap gap-2">
                                    {items.map((skill, idx) => (
                                        <span
                                            key={idx}
                                            className="px-4 py-2 bg-purple-500/20 rounded-full text-sm hover:bg-purple-500/30 transition-colors cursor-default"
                                        >
                      {skill}
                    </span>
                                    ))}
                                </div>
                            </div>
                        ))}
                    </div>
                </div>
            </section>

            {/* Contact Section */}
            <section id="contact" className="min-h-screen flex items-center px-6 py-20">
                <div className="max-w-4xl mx-auto w-full text-center">
                    <h2 className="text-4xl md:text-5xl font-bold mb-12 bg-gradient-to-r from-purple-400 to-pink-400 bg-clip-text text-transparent">
                        Let's Work Together
                    </h2>
                    <p className="text-xl text-gray-300 mb-8">
                        I'm currently available for freelance projects and full-time opportunities.
                    </p>
                    <div className="bg-white/5 backdrop-blur-sm rounded-2xl p-8 border border-purple-500/20 inline-block">
                        <div className="flex flex-col sm:flex-row gap-4 justify-center">
                            <a
                                href="mailto:dev@example.com"
                                className="flex items-center space-x-2 px-6 py-3 bg-gradient-to-r from-purple-600 to-pink-600 rounded-full hover:shadow-lg hover:shadow-purple-500/50 transition-all hover:scale-105"
                            >
                                <Mail className="w-5 h-5" />
                                <span>Email Me</span>
                            </a>
                            <a
                                href="https://github.com"
                                target="_blank"
                                rel="noopener noreferrer"
                                className="flex items-center space-x-2 px-6 py-3 border-2 border-purple-400 rounded-full hover:bg-purple-400/10 transition-all hover:scale-105"
                            >
                                <Github className="w-5 h-5" />
                                <span>GitHub</span>
                            </a>
                            <a
                                href="https://linkedin.com"
                                target="_blank"
                                rel="noopener noreferrer"
                                className="flex items-center space-x-2 px-6 py-3 border-2 border-purple-400 rounded-full hover:bg-purple-400/10 transition-all hover:scale-105"
                            >
                                <Linkedin className="w-5 h-5" />
                                <span>LinkedIn</span>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            {/* Footer */}
            <footer className="border-t border-purple-500/20 py-8 text-center text-gray-400">
                <p>© 2026 Laravel Backend Developer. Built with React & Tailwind CSS.</p>
            </footer>
        </div>
    );
}
