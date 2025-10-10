# Personal Portfolio Website

This is one of my portfolio projects built with the **Laravel stack**, showcasing my professional profile, skills (keahlian), and services through an interactive landing page.

## About This Project

This personal portfolio website is a full-stack web application developed using Laravel framework. The website features a modern, responsive design that presents my professional information in an elegant and user-friendly manner.

## Features

- **Landing Page**: A professional landing page with hero section displaying personal information and profile image
- **Skills Showcase (Keahlian)**: Display of technical skills and competencies with visual badges
- **Services Section**: Presentation of services offered in a clean, organized layout
- **About Me**: Detailed information about background, experience, and expertise
- **Education**: Academic background and courses taken
- **Projects Portfolio**: Showcase of completed projects with descriptions and technologies used
- **Contact Section**: Easy-to-use contact form for reaching out
- **Admin Panel**: Backend management system powered by Filament for content management
- **Responsive Design**: Mobile-friendly interface that works seamlessly across all devices

## Tech Stack

This project is built with the following technologies:

- **Framework**: Laravel (PHP)
- **Frontend**: Livewire, TailwindCSS, Alpine.js
- **Admin Panel**: Filament
- **Database**: MySQL
- **Assets**: Vite

## Installation

1. Clone the repository
2. Run `composer install`
3. Run `npm install`
4. Copy `.env.example` to `.env` and configure your database
5. Run `php artisan key:generate`
6. Run `php artisan migrate`
7. Run `php artisan storage:link`
8. Run `npm run dev` for development or `npm run build` for production

## Usage

- Visit the root URL to see the portfolio landing page
- Access `/admin` for the admin panel to manage content
- Update personal information, skills, services, and projects through the admin interface

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
