<script setup>
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Guía de Estilos" />

    <div class="min-h-screen py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <!-- Header -->
            <div class="text-center mb-12">
                <h1 class="text-4xl font-bold text-dark mb-4">
                    Sistema de Diseño
                </h1>
                <p class="text-xl text-muted">
                    Guía de estilos del portafolio
                </p>
            </div>

            <!-- Colores -->
            <section class="mb-16">
                <h2 class="text-3xl font-bold text-dark mb-6">Colores</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <!-- Color Primario -->
                    <div class="card">
                        <div class="bg-primary h-24 rounded-lg mb-4"></div>
                        <h3 class="font-semibold text-dark mb-2">Primary</h3>
                        <p class="text-muted text-sm">#0550b8</p>
                    </div>

                    <!-- Color Oscuro -->
                    <div class="card">
                        <div class="bg-dark h-24 rounded-lg mb-4"></div>
                        <h3 class="font-semibold text-dark mb-2">Dark</h3>
                        <p class="text-muted text-sm">#1a355c</p>
                    </div>

                    <!-- Color Card -->
                    <div class="card">
                        <div class="bg-card border-2 border-default h-24 rounded-lg mb-4"></div>
                        <h3 class="font-semibold text-dark mb-2">Card</h3>
                        <p class="text-muted text-sm">#ffffff</p>
                    </div>
                </div>
            </section>

            <!-- Tipografía -->
            <section class="mb-16">
                <h2 class="text-3xl font-bold text-dark mb-6">Tipografía</h2>
                <div class="card space-y-4">
                    <div>
                        <h1 class="text-4xl font-bold text-dark">Heading 1</h1>
                        <p class="text-sm text-muted">text-4xl font-bold</p>
                    </div>
                    <div>
                        <h2 class="text-3xl font-bold text-dark">Heading 2</h2>
                        <p class="text-sm text-muted">text-3xl font-bold</p>
                    </div>
                    <div>
                        <h3 class="text-2xl font-semibold text-dark">Heading 3</h3>
                        <p class="text-sm text-muted">text-2xl font-semibold</p>
                    </div>
                    <div>
                        <p class="text-base text-dark">
                            Texto principal. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        </p>
                        <p class="text-sm text-muted">text-base text-dark</p>
                    </div>
                    <div>
                        <p class="text-base text-muted">
                            Texto secundario. Información complementaria o menos importante.
                        </p>
                        <p class="text-sm text-muted">text-muted</p>
                    </div>
                    <div>
                        <p class="text-base text-disabled">
                            Texto deshabilitado. No disponible o inactivo.
                        </p>
                        <p class="text-sm text-muted">text-disabled</p>
                    </div>
                </div>
            </section>

            <!-- Botones -->
            <section class="mb-16">
                <h2 class="text-3xl font-bold text-dark mb-6">Botones</h2>
                <div class="card">
                    <div class="space-y-6">
                        <!-- Primarios -->
                        <div>
                            <h3 class="font-semibold text-dark mb-3">Primarios</h3>
                            <div class="flex flex-wrap gap-4">
                                <button class="btn-primary">
                                    Acción Principal
                                </button>
                                <button class="btn-primary" disabled>
                                    Deshabilitado
                                </button>
                            </div>
                        </div>

                        <!-- Secundarios -->
                        <div>
                            <h3 class="font-semibold text-dark mb-3">Secundarios</h3>
                            <div class="flex flex-wrap gap-4">
                                <button class="btn-secondary">
                                    Acción Secundaria
                                </button>
                                <button class="btn-secondary" disabled>
                                    Deshabilitado
                                </button>
                            </div>
                        </div>

                        <!-- Tailwind variants -->
                        <div>
                            <h3 class="font-semibold text-dark mb-3">Con clases Tailwind</h3>
                            <div class="flex flex-wrap gap-4">
                                <button class="bg-primary hover:bg-primary-hover text-white px-4 py-2 rounded-lg font-medium transition">
                                    Hover me
                                </button>
                                <button class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-lg font-medium transition">
                                    Success
                                </button>
                                <button class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg font-medium transition">
                                    Danger
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Inputs -->
            <section class="mb-16">
                <h2 class="text-3xl font-bold text-dark mb-6">Formularios</h2>
                <div class="card">
                    <div class="space-y-4 max-w-md">
                        <div>
                            <label class="block text-sm font-medium text-dark mb-2">
                                Input Normal
                            </label>
                            <input type="text" class="input w-full" placeholder="Escribe algo...">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-dark mb-2">
                                Input con Focus
                            </label>
                            <input type="text" class="input w-full" placeholder="Click para ver focus">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-dark mb-2">
                                Input Deshabilitado
                            </label>
                            <input type="text" class="input w-full" placeholder="Deshabilitado" disabled>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-dark mb-2">
                                Textarea
                            </label>
                            <textarea class="input w-full" rows="4" placeholder="Mensaje largo..."></textarea>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Cards -->
            <section class="mb-16">
                <h2 class="text-3xl font-bold text-dark mb-6">Cards</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="card">
                        <h3 class="text-xl font-semibold text-dark mb-2">
                            Card Simple
                        </h3>
                        <p class="text-muted mb-4">
                            Esta es una tarjeta básica con contenido de ejemplo.
                        </p>
                        <button class="btn-primary">
                            Ver más
                        </button>
                    </div>

                    <div class="card">
                        <h3 class="text-xl font-semibold text-dark mb-2">
                            Con Imagen
                        </h3>
                        <div class="bg-gray-200 h-32 rounded-lg mb-4"></div>
                        <p class="text-muted">
                            Card con placeholder de imagen.
                        </p>
                    </div>

                    <div class="card">
                        <h3 class="text-xl font-semibold text-dark mb-2">
                            Con Badge
                        </h3>
                        <span class="inline-block bg-primary text-white text-xs px-3 py-1 rounded-full mb-3">
                            Destacado
                        </span>
                        <p class="text-muted">
                            Card con badge decorativo.
                        </p>
                    </div>
                </div>
            </section>

            <!-- Links -->
            <section class="mb-16">
                <h2 class="text-3xl font-bold text-dark mb-6">Enlaces</h2>
                <div class="card space-y-4">
                    <p>
                        Este es un párrafo con un
                        <a href="#" class="link">enlace azul</a>
                        incluido en el texto.
                    </p>
                    <p>
                        <a href="#" class="link font-semibold">
                            Enlace destacado →
                        </a>
                    </p>
                    <p>
                        <a href="#" class="text-dark hover:text-primary transition">
                            Enlace con hover sutil
                        </a>
                    </p>
                </div>
            </section>

            <!-- Sidebar Preview -->
            <section class="mb-16">
                <h2 class="text-3xl font-bold text-dark mb-6">Sidebar</h2>
                <div class="sidebar rounded-lg p-6">
                    <h3 class="text-xl font-bold mb-6">Navegación</h3>
                    <nav class="space-y-2">
                        <a href="#" class="block px-4 py-2 rounded-lg active">
                            Dashboard
                        </a>
                        <a href="#" class="block px-4 py-2 rounded-lg hover:bg-white/10">
                            Proyectos
                        </a>
                        <a href="#" class="block px-4 py-2 rounded-lg hover:bg-white/10">
                            Experiencia
                        </a>
                        <a href="#" class="block px-4 py-2 rounded-lg hover:bg-white/10">
                            Contacto
                        </a>
                    </nav>
                </div>
            </section>

            <!-- Estados -->
            <section class="mb-16">
                <h2 class="text-3xl font-bold text-dark mb-6">Estados</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="card border-l-4 border-green-600">
                        <div class="flex items-center gap-3 mb-2">
                            <span class="text-2xl">✓</span>
                            <h3 class="font-semibold text-dark">Success</h3>
                        </div>
                        <p class="text-muted text-sm">
                            Operación completada correctamente.
                        </p>
                    </div>

                    <div class="card border-l-4 border-yellow-500">
                        <div class="flex items-center gap-3 mb-2">
                            <span class="text-2xl">⚠</span>
                            <h3 class="font-semibold text-dark">Warning</h3>
                        </div>
                        <p class="text-muted text-sm">
                            Atención: revisa esta información.
                        </p>
                    </div>

                    <div class="card border-l-4 border-red-600">
                        <div class="flex items-center gap-3 mb-2">
                            <span class="text-2xl">✕</span>
                            <h3 class="font-semibold text-dark">Error</h3>
                        </div>
                        <p class="text-muted text-sm">
                            Ha ocurrido un error.
                        </p>
                    </div>
                </div>
            </section>
        </div>
    </div>
</template>
