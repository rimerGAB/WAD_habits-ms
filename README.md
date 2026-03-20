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
____________________
PHP ≥ 8.0

Composer

SQLite
___________________


Or even shorter version:

```markdown
# Habit Tracker

Laravel habit tracking app.

## Database Fields
- **id** - Primary key
- **title** - Habit name
- **description** - Details
- **status** - pending / in_progress / done
- **target_date** - Goal date
- **created_at** / **updated_at** - Timestamps

## Setup
```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan db:seed
php artisan serve



____________________________________________
Visit http://localhost:8000/habits
_____________________________________________
