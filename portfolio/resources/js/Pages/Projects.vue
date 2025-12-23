<script setup>
import { ref, computed } from 'vue';
import PortfolioLayout from '@/Layouts/PortfolioLayout.vue';

const props = defineProps({
    projects: Array,
});

const selectedTechnology = ref('all');

// Extract all unique technologies from all projects
const allTechnologies = computed(() => {
    const techSet = new Set();
    props.projects.forEach(project => {
        if (project.technologies) {
            project.technologies.forEach(tech => techSet.add(tech));
        }
    });
    return Array.from(techSet).sort();
});

// Filter projects based on selected technology
const filteredProjects = computed(() => {
    if (selectedTechnology.value === 'all') {
        return props.projects;
    }
    return props.projects.filter(project =>
        project.technologies && project.technologies.includes(selectedTechnology.value)
    );
});

const setFilter = (tech) => {
    selectedTechnology.value = tech;
};
</script>

<template>
    <PortfolioLayout title="Proyectos - Portfolio">
        <!-- Hero Section -->
        <section class="py-20 bg-gradient-to-b from-app-bg to-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center">
                    <h1 class="text-5xl md:text-6xl font-bold text-dark mb-6">
                        Mis Proyectos
                    </h1>
                    <p class="text-xl text-muted max-w-3xl mx-auto">
                        Una colección de proyectos que demuestran mi experiencia en desarrollo full stack.
                        Desde aplicaciones empresariales hasta e-commerce y blogs personales.
                    </p>
                </div>
            </div>
        </section>

        <!-- Filter Section -->
        <section class="py-8 bg-white border-b border-default">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex flex-wrap gap-3 justify-center items-center">
                    <span class="text-dark font-semibold mr-2">Filtrar por:</span>
                    <button
                        @click="setFilter('all')"
                        :class="[
                            'px-4 py-2 rounded-lg font-medium transition-all duration-200',
                            selectedTechnology === 'all'
                                ? 'bg-primary text-white'
                                : 'bg-gray-100 text-dark hover:bg-gray-200'
                        ]"
                    >
                        Todos ({{ projects.length }})
                    </button>
                    <button
                        v-for="tech in allTechnologies"
                        :key="tech"
                        @click="setFilter(tech)"
                        :class="[
                            'px-4 py-2 rounded-lg font-medium transition-all duration-200',
                            selectedTechnology === tech
                                ? 'bg-primary text-white'
                                : 'bg-gray-100 text-dark hover:bg-gray-200'
                        ]"
                    >
                        {{ tech }}
                    </button>
                </div>
            </div>
        </section>

        <!-- Projects Grid -->
        <section class="py-20 bg-app-bg">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <!-- No results message -->
                <div v-if="filteredProjects.length === 0" class="text-center py-12">
                    <svg class="w-24 h-24 mx-auto text-muted mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <p class="text-xl text-muted">
                        No hay proyectos con esta tecnología
                    </p>
                </div>

                <!-- Projects Grid -->
                <div v-else class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div
                        v-for="project in filteredProjects"
                        :key="project.id"
                        class="card group hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1"
                    >
                        <!-- Project Image -->
                        <div class="bg-gradient-to-br from-primary/10 to-dark/10 h-48 rounded-lg mb-4 overflow-hidden relative">
                            <div v-if="project.image" class="w-full h-full">
                                <img
                                    :src="project.image"
                                    :alt="project.title"
                                    class="w-full h-full object-cover"
                                >
                            </div>
                            <div v-else class="w-full h-full flex items-center justify-center">
                                <svg class="w-20 h-20 text-primary/30" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                                </svg>
                            </div>

                            <!-- Featured Badge -->
                            <div v-if="project.featured" class="absolute top-3 right-3">
                                <span class="inline-flex items-center gap-1 bg-primary text-white text-xs font-bold px-3 py-1 rounded-full shadow-lg">
                                    <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                    Destacado
                                </span>
                            </div>
                        </div>

                        <!-- Project Info -->
                        <div class="flex-1 flex flex-col">
                            <h3 class="text-2xl font-bold text-dark mb-2 group-hover:text-primary transition-colors">
                                {{ project.title }}
                            </h3>

                            <p class="text-muted mb-4 flex-grow">
                                {{ project.short_description }}
                            </p>

                            <!-- Technologies -->
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span
                                    v-for="tech in project.technologies"
                                    :key="tech"
                                    class="inline-block bg-primary/10 text-primary text-sm px-3 py-1 rounded-full font-medium"
                                >
                                    {{ tech }}
                                </span>
                            </div>

                            <!-- Links -->
                            <div class="flex gap-4 pt-4 border-t border-default">
                                <a
                                    v-if="project.demo_url"
                                    :href="project.demo_url"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                    class="link text-sm font-semibold flex items-center gap-1 hover:gap-2 transition-all"
                                >
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                                    </svg>
                                    Ver Demo
                                </a>
                                <a
                                    v-if="project.github_url"
                                    :href="project.github_url"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                    class="link text-sm font-semibold flex items-center gap-1 hover:gap-2 transition-all"
                                >
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                                    </svg>
                                    Ver Código
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Stats Section -->
                <div v-if="filteredProjects.length > 0" class="mt-16 grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="card text-center">
                        <div class="text-4xl font-bold text-primary mb-2">
                            {{ projects.length }}
                        </div>
                        <div class="text-muted font-medium">
                            Proyectos Totales
                        </div>
                    </div>
                    <div class="card text-center">
                        <div class="text-4xl font-bold text-primary mb-2">
                            {{ allTechnologies.length }}
                        </div>
                        <div class="text-muted font-medium">
                            Tecnologías Utilizadas
                        </div>
                    </div>
                    <div class="card text-center">
                        <div class="text-4xl font-bold text-primary mb-2">
                            {{ projects.filter(p => p.featured).length }}
                        </div>
                        <div class="text-muted font-medium">
                            Proyectos Destacados
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="py-20 bg-dark text-white">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h2 class="text-4xl font-bold mb-6">
                    ¿Te gustaría trabajar conmigo?
                </h2>
                <p class="text-xl text-white/75 mb-8">
                    Estoy siempre abierta a nuevos proyectos y oportunidades de colaboración.
                </p>
                <a
                    href="/contact"
                    class="inline-block bg-white text-dark hover:bg-white/90 px-8 py-3 rounded-lg font-semibold transition-colors duration-200"
                >
                    Hablemos de tu proyecto
                </a>
            </div>
        </section>
    </PortfolioLayout>
</template>
