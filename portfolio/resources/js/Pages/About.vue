<script setup>
import PortfolioLayout from '@/Layouts/PortfolioLayout.vue';

defineProps({
    skills: Array,
    experiences: Array,
    education: Array,
});

// Formatear fechas
const formatDate = (dateString) => {
    if (!dateString) return null;
    const date = new Date(dateString);
    const months = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio',
                    'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
    return `${months[date.getMonth()]} ${date.getFullYear()}`;
};

const formatDateRange = (startDate, endDate, isCurrent) => {
    const start = formatDate(startDate);
    if (isCurrent) return `${start} - Actualidad`;
    const end = formatDate(endDate);
    return `${start} - ${end}`;
};
</script>

<template>
    <PortfolioLayout title="Sobre Mí - Portfolio">
        <!-- Hero Section -->
        <section class="py-20 bg-gradient-to-b from-app-bg to-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <h1 class="text-5xl md:text-6xl font-bold text-dark mb-6">
                        Sobre Mí
                    </h1>
                    <div class="max-w-3xl mx-auto">
                        <p class="text-xl text-muted mb-6">
                            Soy una persona <span class="text-primary font-semibold">proactiva</span>,
                            <span class="text-primary font-semibold">organizada</span> y
                            <span class="text-primary font-semibold">responsable</span>.
                        </p>
                        <p class="text-lg text-muted mb-6">
                            En constante aprendizaje, con experiencia en la <strong>gestión y programación de sistemas clínicos</strong>.
                            Actualmente lidero el desarrollo de un sistema clínico integral, desempeñando múltiples roles.
                        </p>
                        <p class="text-lg text-dark-muted">
                            Comprometida con la <span class="text-primary font-semibold">mejora continua</span> y el
                            desarrollo de <span class="text-primary font-semibold">soluciones eficientes</span> en
                            entornos críticos, combinando habilidades de liderazgo en proyectos con una sólida base técnica.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Skills Section -->
        <section class="py-20 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-4xl font-bold text-dark mb-4">
                        Habilidades Técnicas
                    </h2>
                    <p class="text-lg text-muted">
                        Tecnologías y herramientas con las que trabajo
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                    <!-- Frontend Skills -->
                    <div class="card">
                        <h3 class="text-2xl font-bold text-dark mb-6 flex items-center gap-2">
                            <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                            Frontend
                        </h3>
                        <div class="space-y-4">
                            <div v-for="skill in skills.filter(s => s.category === 'Frontend')" :key="skill.id">
                                <div class="flex justify-between mb-2">
                                    <span class="font-medium text-dark">{{ skill.name }}</span>
                                    <span class="text-primary font-semibold">{{ skill.proficiency }}%</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2">
                                    <div
                                        class="bg-primary h-2 rounded-full transition-all duration-500"
                                        :style="{ width: skill.proficiency + '%' }"
                                    ></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Backend Skills -->
                    <div class="card">
                        <h3 class="text-2xl font-bold text-dark mb-6 flex items-center gap-2">
                            <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01"/>
                            </svg>
                            Backend
                        </h3>
                        <div class="space-y-4">
                            <div v-for="skill in skills.filter(s => s.category === 'Backend')" :key="skill.id">
                                <div class="flex justify-between mb-2">
                                    <span class="font-medium text-dark">{{ skill.name }}</span>
                                    <span class="text-primary font-semibold">{{ skill.proficiency }}%</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2">
                                    <div
                                        class="bg-primary h-2 rounded-full transition-all duration-500"
                                        :style="{ width: skill.proficiency + '%' }"
                                    ></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Database Skills -->
                    <div class="card">
                        <h3 class="text-2xl font-bold text-dark mb-6 flex items-center gap-2">
                            <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"/>
                            </svg>
                            Base de Datos
                        </h3>
                        <div class="space-y-4">
                            <div v-for="skill in skills.filter(s => s.category === 'Database')" :key="skill.id">
                                <div class="flex justify-between mb-2">
                                    <span class="font-medium text-dark">{{ skill.name }}</span>
                                    <span class="text-primary font-semibold">{{ skill.proficiency }}%</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2">
                                    <div
                                        class="bg-primary h-2 rounded-full transition-all duration-500"
                                        :style="{ width: skill.proficiency + '%' }"
                                    ></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tools Skills -->
                    <div class="card">
                        <h3 class="text-2xl font-bold text-dark mb-6 flex items-center gap-2">
                            <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                            Herramientas
                        </h3>
                        <div class="space-y-4">
                            <div v-for="skill in skills.filter(s => s.category === 'Tools')" :key="skill.id">
                                <div class="flex justify-between mb-2">
                                    <span class="font-medium text-dark">{{ skill.name }}</span>
                                    <span class="text-primary font-semibold">{{ skill.proficiency }}%</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2">
                                    <div
                                        class="bg-primary h-2 rounded-full transition-all duration-500"
                                        :style="{ width: skill.proficiency + '%' }"
                                    ></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Experience Section -->
        <section class="py-20 bg-app-bg">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-4xl font-bold text-dark mb-4">
                        Experiencia Profesional
                    </h2>
                    <p class="text-lg text-muted">
                        Mi trayectoria laboral
                    </p>
                </div>

                <div class="max-w-4xl mx-auto">
                    <div class="space-y-8">
                        <div
                            v-for="exp in experiences"
                            :key="exp.id"
                            class="card relative pl-12 border-l-4 border-primary"
                        >
                            <div class="absolute -left-3 top-8 w-6 h-6 bg-primary rounded-full border-4 border-white"></div>

                            <div class="mb-4">
                                <h3 class="text-2xl font-bold text-dark mb-2">
                                    {{ exp.position }}
                                </h3>
                                <p class="text-lg text-primary font-semibold mb-2">
                                    {{ exp.company }}
                                </p>
                                <div class="text-muted">
                                    <span class="inline-flex items-center gap-1 text-sm">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                        </svg>
                                        {{ formatDateRange(exp.start_date, exp.end_date, exp.current) }}
                                    </span>
                                </div>
                            </div>

                            <p v-if="exp.location" class="text-muted mb-4 flex items-center gap-1">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                                {{ exp.location }}
                            </p>

                            <p class="text-muted whitespace-pre-line">
                                {{ exp.description }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Education Section -->
        <section class="py-20 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-4xl font-bold text-dark mb-4">
                        Educación
                    </h2>
                    <p class="text-lg text-muted">
                        Formación académica y certificaciones
                    </p>
                </div>

                <div class="max-w-4xl mx-auto">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
                        <div
                            v-for="edu in education"
                            :key="edu.id"
                            class="card hover:shadow-lg transition-shadow duration-200"
                        >
                            <div class="flex items-start gap-3 mb-4">
                                <div class="p-2 bg-primary/10 rounded-lg">
                                    <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"/>
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-xl font-bold text-dark mb-1">
                                        {{ edu.degree }}
                                    </h3>
                                    <p class="text-primary font-semibold mb-2">
                                        {{ edu.institution }}
                                    </p>
                                    <p class="text-sm text-muted mb-1">
                                        {{ edu.field_of_study }}
                                    </p>
                                    <p class="text-sm text-dark-muted">
                                        {{ formatDateRange(edu.start_date, edu.end_date, edu.current) }}
                                    </p>
                                </div>
                            </div>
                            <p v-if="edu.description" class="text-muted text-sm">
                                {{ edu.description }}
                            </p>
                        </div>
                    </div>

                    <!-- Certifications Section -->
                    <div class="card bg-dark text-white">
                        <h3 class="text-2xl font-bold mb-6 flex items-center gap-2">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
                            </svg>
                            Certificaciones Destacadas
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="flex items-start gap-2">
                                <svg class="w-5 h-5 text-primary flex-shrink-0 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-white/90">Curso Profesional de Git y GitHub (Platzi)</span>
                            </div>
                            <div class="flex items-start gap-2">
                                <svg class="w-5 h-5 text-primary flex-shrink-0 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-white/90">Curso de Frontend Developer (Platzi)</span>
                            </div>
                            <div class="flex items-start gap-2">
                                <svg class="w-5 h-5 text-primary flex-shrink-0 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-white/90">Curso Práctico de Frontend Developer (Platzi)</span>
                            </div>
                            <div class="flex items-start gap-2">
                                <svg class="w-5 h-5 text-primary flex-shrink-0 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-white/90">Curso de Configuración de Entorno en Windows (Platzi)</span>
                            </div>
                            <div class="flex items-start gap-2">
                                <svg class="w-5 h-5 text-primary flex-shrink-0 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-white/90">Curso de Manejo de Datos en PHP (Platzi)</span>
                            </div>
                            <div class="flex items-start gap-2">
                                <svg class="w-5 h-5 text-primary flex-shrink-0 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-white/90">Fundamentos de Ingeniería de Software (Platzi)</span>
                            </div>
                            <div class="flex items-start gap-2">
                                <svg class="w-5 h-5 text-primary flex-shrink-0 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-white/90">Fundamentos de Programación y Desarrollo Web (Platzi)</span>
                            </div>
                            <div class="flex items-start gap-2">
                                <svg class="w-5 h-5 text-primary flex-shrink-0 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-white/90">Curso Básico de JavaScript (Platzi)</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="py-20 bg-app-bg">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h2 class="text-4xl font-bold text-dark mb-6">
                    ¿Quieres saber más?
                </h2>
                <p class="text-xl text-muted mb-8">
                    Estoy disponible para conversar sobre proyectos, colaboraciones o simplemente conectar.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a
                        href="/contact"
                        class="btn-primary text-lg px-8 py-3"
                    >
                        Contáctame
                    </a>
                    <a
                        href="https://github.com/alejandraob"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="btn-secondary text-lg px-8 py-3"
                    >
                        Ver GitHub
                    </a>
                </div>
            </div>
        </section>
    </PortfolioLayout>
</template>
