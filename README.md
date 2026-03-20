**WAD-HABITS-MS**
--------------------------------------------
# Habit Tracking System

A simple Laravel application to track daily habits.

## Database Schema

| Field | Type | Description |
|-------|------|-------------|
| id | integer | Primary key |
| title | string | Habit name |
| description | text | Habit details (optional) |
| status | string | pending, in_progress, or done |
| target_date | date | Target completion date |
| created_at | datetime | Record creation date |
| updated_at | datetime | Last update date |

## Features

- ✅ Create, Read, Update, Delete habits
- ✅ Track habit status
- ✅ Set target dates


## Quick Start

```bash
# Clone repository
git clone https://github.com/rimerGAB/WAD_habits-ms.git

# Install dependencies
composer install

# Setup environment
cp .env.example .env
php artisan key:generate

# Run migrations
php artisan migrate

# Seed database
php artisan db:seed

# Start server
php artisan serve
```


REQUIREMENTS
____________________
PHP ≥ 8.0

Composer

SQLite
___________________

____________________________________________
Visit http://localhost:8000/habits
_____________________________________________
