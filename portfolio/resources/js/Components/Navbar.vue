<script setup>
import { Link } from '@inertiajs/vue3';
import { ref } from 'vue';

const mobileMenuOpen = ref(false);

const toggleMobileMenu = () => {
    mobileMenuOpen.value = !mobileMenuOpen.value;
};
</script>

<template>
    <nav class="bg-dark shadow-lg sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <!-- Logo -->
                <div class="flex items-center">
                    <Link href="/" class="flex items-center gap-3">
                        <img
                            src="/images/logo-sinfondo.png"
                            alt="MAO Logo"
                            class="h-10 w-auto"
                        >
                    </Link>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden md:flex md:items-center md:space-x-8">
                    <Link
                        href="/"
                        class="text-white/75 hover:text-white transition-colors duration-200 font-medium"
                    >
                        Inicio
                    </Link>
                    <Link
                        href="/projects"
                        class="text-white/75 hover:text-white transition-colors duration-200 font-medium"
                    >
                        Proyectos
                    </Link>
                    <Link
                        href="/about"
                        class="text-white/75 hover:text-white transition-colors duration-200 font-medium"
                    >
                        Sobre Mí
                    </Link>
                    <Link
                        href="/contact"
                        class="btn-primary"
                    >
                        Contacto
                    </Link>
                </div>

                <!-- Mobile menu button -->
                <div class="flex items-center md:hidden">
                    <button
                        @click="toggleMobileMenu"
                        class="text-white hover:text-white/80 focus:outline-none"
                        aria-label="Toggle menu"
                    >
                        <svg
                            v-if="!mobileMenuOpen"
                            class="h-6 w-6"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16"
                            />
                        </svg>
                        <svg
                            v-else
                            class="h-6 w-6"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M6 18L18 6M6 6l12 12"
                            />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile menu -->
        <div
            v-show="mobileMenuOpen"
            class="md:hidden bg-dark border-t border-white/10"
        >
            <div class="px-2 pt-2 pb-3 space-y-1">
                <Link
                    href="/"
                    class="block px-3 py-2 rounded-md text-white/75 hover:text-white hover:bg-white/10 transition-colors duration-200"
                    @click="mobileMenuOpen = false"
                >
                    Inicio
                </Link>
                <Link
                    href="/projects"
                    class="block px-3 py-2 rounded-md text-white/75 hover:text-white hover:bg-white/10 transition-colors duration-200"
                    @click="mobileMenuOpen = false"
                >
                    Proyectos
                </Link>
                <Link
                    href="/about"
                    class="block px-3 py-2 rounded-md text-white/75 hover:text-white hover:bg-white/10 transition-colors duration-200"
                    @click="mobileMenuOpen = false"
                >
                    Sobre Mí
                </Link>
                <Link
                    href="/contact"
                    class="block px-3 py-2 rounded-md text-white hover:bg-white/10 transition-colors duration-200"
                    @click="mobileMenuOpen = false"
                >
                    Contacto
                </Link>
            </div>
        </div>
    </nav>
</template>
