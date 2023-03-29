# Task Management Application

## Project Overview

The Task Management application is a web-based tool designed to help users keep track of their tasks. The application allows users to create, edit, and delete tasks, and to drag and drop tasks to reorder them based on priority.

Key features of the application include:

- Simple and intuitive user interface
- Easy task creation and editing
- Drag and drop task ordering
- Automatic priority assignment based on task order

The Task Tracker application was built using the Laravel PHP framework, Livewire for real-time interactions, and the Laravel Sortable package for drag and drop functionality.

## Installation

For installation start by cloning this git repository:
`git clone https://www.github.com/ashoemaker-tech/taskManagement`

Navigate to the project directory:
`cd task-tracker`

Install the dependencies using Composer:
`composer install`

Copy the .env.example file to a new file called .env:
`cp .env.example .env`

Generate a new application key:
`php artisan key:generate`

Configure the .env file with your database credentials:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=task_tracker
DB_USERNAME=root
DB_PASSWORD=
```
Run the database migrations:
`php artisan migrate`

Start the local development server:
`php artisan serve`

## Deployment

1. Choose a web hosting provider that supports PHP and MySQL, such as DigitalOcean or AWS.

2. Create a new server instance and configure it with the necessary software and settings, such as Apache or Nginx, PHP, and MySQL. This will vary based on hosting providers please refer to their docs for specific needs when deploying Laravel applications to the server.

3. Clone the Git repository onto the server.

4. Follow the steps in the installation section to finish deployment on your server.

If you do not have a hosting provider check out <a href="https://laravel.com">Laravel</a> for the best hosting solutions for laravel applications.

### Technologies Used

- Laravel
- Livewire
- Livewire/Sortable

### Contact

- <a href="https://www.ashoemaker.net" target="_blank">Andrew Shoemaker</a> 
- Email: andrew.shoemaker9@gmail.com
