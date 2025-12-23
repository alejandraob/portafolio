<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Skill;
use App\Models\Experience;
use App\Models\Education;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Crear proyectos
        Project::create([
            'title' => 'Sistema Clínico Integral',
            'slug' => 'sistema-clinico-integral',
            'short_description' => 'Sistema completo de gestión clínica para el Sindicato de Petróleo y Gas',
            'description' => 'Sistema integral desarrollado con PHP y MySQL que gestiona pacientes, historias clínicas, turnos médicos, facturación y reportes. Incluye módulos de farmacia, laboratorio y administración. Proyecto en desarrollo activo desde 2022.',
            'technologies' => ['PHP', 'JavaScript', 'MySQL', 'HTML5'],
            'demo_url' => null,
            'github_url' => null,
            'project_date' => '2022-06-01',
            'status' => 'published',
            'featured' => true,
            'order' => 1,
        ]);

        Project::create([
            'title' => 'Portfolio Personal',
            'slug' => 'portfolio-personal',
            'short_description' => 'Portfolio profesional desarrollado con Laravel y Vue.js',
            'description' => 'Portafolio personal construido con Laravel 10, Inertia.js y Vue 3. Incluye gestión de proyectos, habilidades, experiencia laboral y formulario de contacto. Proyecto de aprendizaje para dominar el stack moderno de Laravel.',
            'technologies' => ['Laravel', 'Vue.js', 'Inertia.js', 'MySQL', 'TailwindCSS'],
            'demo_url' => null,
            'github_url' => 'https://github.com/alejandraob',
            'project_date' => '2024-12-22',
            'status' => 'published',
            'featured' => true,
            'order' => 2,
        ]);

        Project::create([
            'title' => 'MiTurno Laravel',
            'slug' => 'miturno-laravel',
            'short_description' => 'Sistema de gestión de turnos desarrollado con Laravel',
            'description' => 'Sistema de gestión de turnos y citas médicas desarrollado con Laravel. Permite a los pacientes solicitar turnos online, gestionar sus citas y recibir notificaciones. Incluye panel administrativo para gestionar especialidades, horarios y profesionales.',
            'technologies' => ['Laravel', 'PHP', 'MySQL', 'JavaScript'],
            'demo_url' => null,
            'github_url' => 'https://github.com/alejandraob/proyectos2024/tree/main/creando/miturno-laravel',
            'project_date' => '2024-01-01',
            'status' => 'published',
            'featured' => true,
            'order' => 3,
        ]);

        // Crear habilidades
        $skills = [
            // Frontend
            ['name' => 'HTML5', 'category' => 'Frontend', 'proficiency' => 95, 'order' => 1],
            ['name' => 'JavaScript', 'category' => 'Frontend', 'proficiency' => 90, 'order' => 2],
            ['name' => 'Vue.js', 'category' => 'Frontend', 'proficiency' => 70, 'order' => 3],

            // Backend
            ['name' => 'PHP', 'category' => 'Backend', 'proficiency' => 95, 'order' => 4],
            ['name' => 'Laravel', 'category' => 'Backend', 'proficiency' => 75, 'order' => 5],
            ['name' => 'Python', 'category' => 'Backend', 'proficiency' => 50, 'order' => 6],

            // Database
            ['name' => 'MySQL', 'category' => 'Database', 'proficiency' => 90, 'order' => 7],

            // Tools
            ['name' => 'Git', 'category' => 'Tools', 'proficiency' => 85, 'order' => 8],
            ['name' => 'Visual Studio Code', 'category' => 'Tools', 'proficiency' => 90, 'order' => 9],
            ['name' => 'Azure DevOps', 'category' => 'Tools', 'proficiency' => 80, 'order' => 10],
        ];

        foreach ($skills as $skill) {
            Skill::create($skill);
        }

        // Crear experiencia laboral
        Experience::create([
            'company' => 'Sindicato de Petróleo y Gas Privado de Río Negro, Neuquén y La Pampa',
            'position' => 'Desarrollador',
            'description' => 'Lidero el desarrollo y gestión de un sistema clínico integral, desempeñando múltiples roles.',
            'location' => 'Neuquén, Argentina',
            'start_date' => '2022-06-01',
            'end_date' => null,
            'current' => true,
            'company_url' => null,
            'order' => 1,
        ]);

        Experience::create([
            'company' => 'Sindicato de Petróleo y Gas Privado de Río Negro, Neuquén y La Pampa',
            'position' => 'Soporte Informático',
            'description' => 'Asistencia técnica integral en Clínica privada y otras instituciones pertenecientes al Sindicato. Mantenimiento de equipos, redes y resguardo de información, soporte a usuarios, entre otros.',
            'location' => 'Neuquén, Argentina',
            'start_date' => '2016-08-01',
            'end_date' => '2022-05-31',
            'current' => false,
            'company_url' => null,
            'order' => 2,
        ]);

        Experience::create([
            'company' => 'CENT N°44',
            'position' => 'Profesor de Informática',
            'description' => 'Profesora de Laboratorio de Programación II (Suplencia) y Profesora de Introducción a la Programación (Titular).',
            'location' => 'Neuquén, Argentina',
            'start_date' => '2018-01-01',
            'end_date' => '2022-12-31',
            'current' => false,
            'company_url' => null,
            'order' => 3,
        ]);

        Experience::create([
            'company' => 'Emysa',
            'position' => 'Pasante Administrativo',
            'description' => 'Asistente administrativo.',
            'location' => 'Neuquén, Argentina',
            'start_date' => '2014-01-01',
            'end_date' => '2017-12-31',
            'current' => false,
            'company_url' => null,
            'order' => 4,
        ]);

        // Crear educación
        Education::create([
            'institution' => 'CENT N°44',
            'degree' => 'Técnico Superior',
            'field_of_study' => 'Desarrollo de Sistemas Informáticos',
            'description' => null,
            'start_date' => '2012-01-01',
            'end_date' => '2014-12-31',
            'current' => false,
            'location' => 'Neuquén, Argentina',
            'order' => 1,
        ]);

        Education::create([
            'institution' => 'CENT N°44',
            'degree' => 'Técnico Superior',
            'field_of_study' => 'Soporte de Infraestructura',
            'description' => null,
            'start_date' => '2014-01-01',
            'end_date' => '2016-12-31',
            'current' => false,
            'location' => 'Neuquén, Argentina',
            'order' => 2,
        ]);

        Education::create([
            'institution' => 'Escuela Secundaria CEM °78',
            'degree' => 'Perito Mercantil',
            'field_of_study' => 'Educación Secundaria',
            'description' => null,
            'start_date' => '2003-01-01',
            'end_date' => '2008-12-31',
            'current' => false,
            'location' => 'Neuquén, Argentina',
            'order' => 3,
        ]);
    }
}
