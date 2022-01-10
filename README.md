<h1 align="center">Quick - A laravel blog web application</h1>

## About Quick
Quick is a web application I made to learn laravel

## Installation

1. Clone this repository
```bash
git clone https://github.com/zein3/quick-blogs.git
```

2. Install frontend and backend dependencies
```bash
composer install
npm install && npm run dev
```

3. Copy configuration in .env.example
```bash
cp .env.example .env
```

4. Generate app key
```bash
php artisan key:generate --ansi
```

5. Configure database

6. Migrate the database
```bash
php artisan migrate
```

7. Link storage
```bash
php artisan storage:link
```

8. Start dev server
```bash
php artisan serve
```

