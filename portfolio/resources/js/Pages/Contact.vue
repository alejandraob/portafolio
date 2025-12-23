<script setup>
import { useForm } from '@inertiajs/vue3';
import PortfolioLayout from '@/Layouts/PortfolioLayout.vue';

const form = useForm({
    name: '',
    email: '',
    subject: '',
    message: '',
});

const submit = () => {
    form.post('/contact', {
        preserveScroll: true,
        onSuccess: () => {
            form.reset();
        },
    });
};
</script>

<template>
    <PortfolioLayout title="Contacto - Portfolio">
        <!-- Hero Section -->
        <section class="py-20 bg-gradient-to-b from-app-bg to-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center">
                    <h1 class="text-5xl md:text-6xl font-bold text-dark mb-6">
                        Hablemos
                    </h1>
                    <p class="text-xl text-muted max-w-3xl mx-auto">
                        ¿Tienes un proyecto en mente? ¿Buscas colaborar en algo interesante?
                        Me encantaría escucharte.
                    </p>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section class="py-20 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                    <!-- Contact Information -->
                    <div>
                        <h2 class="text-3xl font-bold text-dark mb-6">
                            Información de Contacto
                        </h2>
                        <p class="text-lg text-muted mb-8">
                            Puedes contactarme a través del formulario o directamente por mis redes sociales.
                            Respondo en un plazo de 24-48 horas.
                        </p>

                        <!-- Contact Methods -->
                        <div class="space-y-6">
                            <!-- Email -->
                            <a
                                href="mailto:alejandraob21@gmail.com"
                                class="flex items-start gap-4 group"
                            >
                                <div class="p-3 bg-primary/10 rounded-lg group-hover:bg-primary/20 transition-colors">
                                    <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-dark mb-1 group-hover:text-primary transition-colors">Email</h3>
                                    <p class="text-muted">alejandraob21@gmail.com</p>
                                </div>
                            </a>

                            <!-- Phone -->
                            <a
                                href="tel:+542996083688"
                                class="flex items-start gap-4 group"
                            >
                                <div class="p-3 bg-primary/10 rounded-lg group-hover:bg-primary/20 transition-colors">
                                    <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-dark mb-1 group-hover:text-primary transition-colors">Teléfono</h3>
                                    <p class="text-muted">+54 299 608 3688</p>
                                </div>
                            </a>

                            <!-- GitHub -->
                            <a
                                href="https://github.com/alejandraob"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="flex items-start gap-4 group"
                            >
                                <div class="p-3 bg-primary/10 rounded-lg group-hover:bg-primary/20 transition-colors">
                                    <svg class="w-6 h-6 text-primary" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-dark mb-1 group-hover:text-primary transition-colors">GitHub</h3>
                                    <p class="text-muted">github.com/alejandraob</p>
                                </div>
                            </a>

                            <!-- LinkedIn -->
                            <a
                                href="https://www.linkedin.com/in/maría-alejandra-ojeda-boisier-506015b3"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="flex items-start gap-4 group"
                            >
                                <div class="p-3 bg-primary/10 rounded-lg group-hover:bg-primary/20 transition-colors">
                                    <svg class="w-6 h-6 text-primary" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-dark mb-1 group-hover:text-primary transition-colors">LinkedIn</h3>
                                    <p class="text-muted">María Alejandra Ojeda Boisier</p>
                                </div>
                            </a>
                        </div>

                        <!-- Availability -->
                        <div class="mt-8 p-6 bg-primary/5 rounded-lg border border-primary/20">
                            <div class="flex items-center gap-2 mb-2">
                                <div class="w-3 h-3 bg-green-500 rounded-full animate-pulse"></div>
                                <span class="font-semibold text-dark">Disponible para proyectos</span>
                            </div>
                            <p class="text-muted">
                                Actualmente aceptando proyectos freelance y oportunidades de colaboración.
                            </p>
                        </div>
                    </div>

                    <!-- Contact Form -->
                    <div class="card">
                        <h2 class="text-3xl font-bold text-dark mb-6">
                            Envíame un Mensaje
                        </h2>

                        <form @submit.prevent="submit" class="space-y-6">
                            <!-- Name -->
                            <div>
                                <label for="name" class="block text-sm font-semibold text-dark mb-2">
                                    Nombre *
                                </label>
                                <input
                                    id="name"
                                    v-model="form.name"
                                    type="text"
                                    class="input"
                                    placeholder="Tu nombre completo"
                                    required
                                >
                                <div v-if="form.errors.name" class="mt-2 text-sm text-danger">
                                    {{ form.errors.name }}
                                </div>
                            </div>

                            <!-- Email -->
                            <div>
                                <label for="email" class="block text-sm font-semibold text-dark mb-2">
                                    Email *
                                </label>
                                <input
                                    id="email"
                                    v-model="form.email"
                                    type="email"
                                    class="input"
                                    placeholder="tu@email.com"
                                    required
                                >
                                <div v-if="form.errors.email" class="mt-2 text-sm text-danger">
                                    {{ form.errors.email }}
                                </div>
                            </div>

                            <!-- Subject -->
                            <div>
                                <label for="subject" class="block text-sm font-semibold text-dark mb-2">
                                    Asunto *
                                </label>
                                <input
                                    id="subject"
                                    v-model="form.subject"
                                    type="text"
                                    class="input"
                                    placeholder="¿De qué se trata tu proyecto?"
                                    required
                                >
                                <div v-if="form.errors.subject" class="mt-2 text-sm text-danger">
                                    {{ form.errors.subject }}
                                </div>
                            </div>

                            <!-- Message -->
                            <div>
                                <label for="message" class="block text-sm font-semibold text-dark mb-2">
                                    Mensaje *
                                </label>
                                <textarea
                                    id="message"
                                    v-model="form.message"
                                    rows="6"
                                    class="input resize-none"
                                    placeholder="Cuéntame más sobre tu proyecto..."
                                    required
                                ></textarea>
                                <div v-if="form.errors.message" class="mt-2 text-sm text-danger">
                                    {{ form.errors.message }}
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <button
                                type="submit"
                                :disabled="form.processing"
                                class="w-full btn-primary py-3 disabled:opacity-50 disabled:cursor-not-allowed flex items-center justify-center gap-2"
                            >
                                <svg v-if="form.processing" class="animate-spin h-5 w-5" fill="none" viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                </svg>
                                <span v-if="form.processing">Enviando...</span>
                                <span v-else>Enviar Mensaje</span>
                            </button>

                            <!-- Success Message -->
                            <div v-if="form.recentlySuccessful" class="p-4 bg-green-50 border border-green-200 rounded-lg">
                                <div class="flex items-center gap-2 text-green-800">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                    <span class="font-semibold">¡Mensaje enviado con éxito!</span>
                                </div>
                                <p class="text-green-700 mt-1 ml-7">
                                    Gracias por contactarme. Te responderé pronto.
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- FAQ Section -->
        <section class="py-20 bg-app-bg">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-3xl font-bold text-dark text-center mb-12">
                    Preguntas Frecuentes
                </h2>

                <div class="space-y-6">
                    <div class="card">
                        <h3 class="text-xl font-bold text-dark mb-2">
                            ¿Cuál es tu disponibilidad?
                        </h3>
                        <p class="text-muted">
                            Actualmente estoy disponible para proyectos freelance y colaboraciones.
                            Mi horario de trabajo es flexible y puedo adaptarme a diferentes zonas horarias.
                        </p>
                    </div>

                    <div class="card">
                        <h3 class="text-xl font-bold text-dark mb-2">
                            ¿Qué tipo de proyectos aceptas?
                        </h3>
                        <p class="text-muted">
                            Me especializo en desarrollo full stack con Laravel y Vue.js. Acepto proyectos
                            de aplicaciones web, sistemas empresariales, e-commerce, y APIs RESTful.
                        </p>
                    </div>

                    <div class="card">
                        <h3 class="text-xl font-bold text-dark mb-2">
                            ¿Cuánto tiempo tardas en responder?
                        </h3>
                        <p class="text-muted">
                            Generalmente respondo en un plazo de 24-48 horas durante días hábiles.
                            Si tu proyecto es urgente, por favor indícalo en el mensaje.
                        </p>
                    </div>

                    <div class="card">
                        <h3 class="text-xl font-bold text-dark mb-2">
                            ¿Trabajas con equipos remotos?
                        </h3>
                        <p class="text-muted">
                            Sí, tengo experiencia trabajando con equipos distribuidos y uso herramientas
                            como Git, Slack, y Jira para mantener una comunicación efectiva.
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </PortfolioLayout>
</template>
