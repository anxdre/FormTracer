<p align="center"><a href="https://inertiajs.com" target="_blank"><img src="https://picperf.io/https://laravelnews.s3.amazonaws.com/images/inertia-ssr-featured.png" width="400" alt="Laravel Logo"></a></p>

# Form Tracer

## About This Project

Simple project for personal use, to make dynamic form type. 
highly inspired with google form & my ex-company proprietary form project


- UI Package [Tailwind-v3](https://tailwindcss.com).
- UI Package [Shadcn-Vue](https://www.shadcn-vue.com).

## Specification
The main purpose is to serve survey form for audience with manageable expired time 

[//]: # (- Project Sheet Detail [Requirement]&#40;&#41;)


## Development : Laravel + Vue

This project require several package library to work with approach SPA like development architecture (Laravel + Inertia + Vue + Vite).
Inertia allows you to create fully client-side rendered, single-page apps, without the complexity that comes with modern SPAs.
for better understanding before start development process about this approach recommended to [Read This](https://inertiajs.com)

### Node Package Library
- [Tailwind](https://tailwindcss.com)
- [Shadcn-Vue](https://www.shadcn-vue.com)

### Composer Package Library
- [Dentro/Yalr](https://packagist.org/packages/dentro/yalr)

### Required Development environment
- Database (SQL or SQLite)
- [Pnpm](https://pnpm.io) or [NodeJS](https://nodejs.org/en)

### Start Development
1. Install composer dependencies with `composer install`.
2. Install node dependencies with `pnpm install` or `npm install`.
3. Duplicate & Rename `.env.example` to `.env`.
4. Setup database (PostgresSQL) conf in `.env`.
5. Generate key with `php artisan key:generate`
6. Run `php artisan migrate:fresh` to populate the database.
7. Run `php artisan db:seed` to fill dummy data into database.
8. Run `php artisan serve` to run at local server.
9. Run `pnpm run dev --host`or `npm run dev` to run Vite.
