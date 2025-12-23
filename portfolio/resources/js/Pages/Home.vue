<script setup>
import { Link } from '@inertiajs/vue3';
import PortfolioLayout from '@/Layouts/PortfolioLayout.vue';

defineProps({
    featuredProjects: Array,
});
</script>

<template>
    <PortfolioLayout title="Inicio - Portfolio">
        <!-- Hero Section -->
        <section class="relative py-20 md:py-32 overflow-hidden">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center">
                    <!-- Saludo -->
                    <div class="mb-6">
                        <span class="inline-block text-primary text-lg font-semibold mb-2">
                            Hola, soy
                        </span>
                    </div>

                    <!-- Nombre -->
                    <h1 class="text-5xl md:text-7xl font-bold text-dark mb-6">
                        María Alejandra Ojeda
                    </h1>

                    <!-- Título/Profesión -->
                    <h2 class="text-2xl md:text-3xl font-semibold text-muted mb-8">
                        Desarrolladora Full Stack
                    </h2>

                    <!-- Descripción -->
                    <p class="text-lg text-muted max-w-2xl mx-auto mb-12">
                        Especializado en crear aplicaciones web modernas con
                        <span class="text-primary font-semibold">Laravel</span>,
                        <span class="text-primary font-semibold">Vue.js</span> y
                        <span class="text-primary font-semibold">TailwindCSS</span>.
                        Transformo ideas en soluciones digitales elegantes y funcionales.
                    </p>

                    <!-- CTAs -->
                    <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                        <Link href="/projects" class="btn-primary text-lg px-8 py-3">
                            Ver Proyectos
                        </Link>
                        <Link href="/contact" class="btn-secondary text-lg px-8 py-3">
                            Contáctame
                        </Link>
                    </div>

                    <!-- Social Links -->
                    <div class="flex justify-center gap-6 mt-12">
                        <a
                            href="https://github.com/alejandraob"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="text-dark hover:text-primary transition-colors duration-200"
                            aria-label="GitHub"
                        >
                            <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                            </svg>
                        </a>
                        <a
                            href="https://www.linkedin.com/in/maría-alejandra-ojeda-boisier-506015b3"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="text-dark hover:text-primary transition-colors duration-200"
                            aria-label="LinkedIn"
                        >
                            <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </a>
                        <a
                            href="/contact"
                            class="text-dark hover:text-primary transition-colors duration-200"
                            aria-label="Contacto"
                        >
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Decorative elements -->
            <div class="absolute top-0 right-0 -z-10 opacity-10">
                <div class="w-72 h-72 bg-primary rounded-full blur-3xl"></div>
            </div>
            <div class="absolute bottom-0 left-0 -z-10 opacity-10">
                <div class="w-72 h-72 bg-dark rounded-full blur-3xl"></div>
            </div>
        </section>

        <!-- Featured Projects Section -->
        <section v-if="featuredProjects && featuredProjects.length > 0" class="py-20 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <!-- Section Header -->
                <div class="text-center mb-16">
                    <h2 class="text-4xl font-bold text-dark mb-4">
                        Proyectos Destacados
                    </h2>
                    <p class="text-lg text-muted max-w-2xl mx-auto">
                        Algunos de mis trabajos más recientes
                    </p>
                </div>

                <!-- Projects Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div
                        v-for="project in featuredProjects"
                        :key="project.id"
                        class="card group cursor-pointer hover:shadow-xl transition-all duration-300"
                    >
                        <!-- Project Image Placeholder -->
                        <div class="bg-gray-100 h-48 rounded-lg mb-4 overflow-hidden">
                            <div class="w-full h-full flex items-center justify-center text-gray-400">
                                <svg class="w-16 h-16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                </svg>
                            </div>
                        </div>

                        <!-- Project Info -->
                        <h3 class="text-2xl font-bold text-dark mb-2 group-hover:text-primary transition-colors">
                            {{ project.title }}
                        </h3>
                        <p class="text-muted mb-4">
                            {{ project.short_description }}
                        </p>

                        <!-- Technologies -->
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span
                                v-for="tech in project.technologies"
                                :key="tech"
                                class="inline-block bg-primary/10 text-primary text-sm px-3 py-1 rounded-full"
                            >
                                {{ tech }}
                            </span>
                        </div>

                        <!-- Links -->
                        <div class="flex gap-4">
                            <a
                                v-if="project.demo_url"
                                :href="project.demo_url"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="link text-sm font-semibold"
                            >
                                Ver Demo →
                            </a>
                            <a
                                v-if="project.github_url"
                                :href="project.github_url"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="link text-sm font-semibold"
                            >
                                Ver Código →
                            </a>
                        </div>
                    </div>
                </div>

                <!-- View All Projects Button -->
                <div class="text-center mt-12">
                    <Link href="/projects" class="btn-primary text-lg px-8 py-3">
                        Ver Todos los Proyectos
                    </Link>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="py-20 bg-dark text-white">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h2 class="text-4xl font-bold mb-6">
                    ¿Tienes un proyecto en mente?
                </h2>
                <p class="text-xl text-white/75 mb-8">
                    Estoy disponible para trabajar en proyectos freelance o colaboraciones.
                    ¡Hablemos!
                </p>
                <Link
                    href="/contact"
                    class="inline-block bg-white text-dark hover:bg-white/90 px-8 py-3 rounded-lg font-semibold transition-colors duration-200"
                >
                    Comencemos a trabajar juntos
                </Link>
            </div>
        </section>
    </PortfolioLayout>
</template>
