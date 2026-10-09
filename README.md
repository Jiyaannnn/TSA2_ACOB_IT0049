# Ledgerline Print & Supply — TSA2

A CodeIgniter 4 task management activity built around a neighborhood print and stationery shop. The Today, Task Board, Profile, and About pages are public. Staff sign-in is required to create, edit, or archive tasks. Archive uses `is_archived` and retains the row in MySQL.

## Requirements

- PHP 8.2 or newer with MySQLi, intl, and mbstring
- Composer
- MySQL 8 or MariaDB

## Local setup

Run these commands from this repository folder:

```bash
composer install
cp env .env
mysql -u root -e 'CREATE DATABASE ledgerline_print_pos_tsa2 CHARACTER SET utf8mb4; CREATE DATABASE ledgerline_print_tasks_tsa2 CHARACTER SET utf8mb4;'
```

Edit `.env` and set the local values below. Replace the MySQL username and password with your own. Keep `.env` private.

```ini
CI_ENVIRONMENT = development
app.baseURL = 'http://localhost:8088/'
database.default.hostname = 127.0.0.1
database.default.database = ledgerline_print_pos_tsa2
database.default.username = root
database.default.password =
database.default.DBDriver = MySQLi
database.default.port = 3306
database.taskStore.database = ledgerline_print_tasks_tsa2
```

Set up the tables and sample records on a fresh database:

```bash
php spark migrate --all
php spark migrate -g taskStore --all
php spark db:seed PosSeeder
php spark db:seed TaskSystemSeeder
export TSA2_INITIAL_PASSWORD='replace-with-your-own-private-password-of-at-least-12-characters'
php spark db:seed SetTaskUserPasswordSeeder
unset TSA2_INITIAL_PASSWORD
php spark serve --port 8088
```

The task demo username is `jian`. Use the private password you set in `TSA2_INITIAL_PASSWORD`. Never put it in a commit, screenshot, or issue. Do not rerun the sample seeders on populated databases because they insert sample rows.

## Main routes

| Route | Access | Purpose |
| --- | --- | --- |
| `/`, `/tasks`, `/profile`, `/about` | Public | Browse daily work, all active tasks, profile, and shop information |
| `/login`, `POST /logout` | Public / signed in | Start or end a staff session |
| `/tasks/new`, `POST /tasks` | Signed in | Create a validated task |
| `/tasks/{id}/edit`, `POST /tasks/{id}` | Signed in | Edit a task |
| `POST /tasks/{id}/delete` | Signed in | Set `is_archived = 1` |

The existing customer and staff sections are also available after sign-in. CodeIgniter migrations and seeders in `app/Database` provide the database structure and sample data; a database export is not needed to install this project.

## Evidence and report

- [Screenshot checklist](docs/SCREENSHOT_CHECKLIST.md)
- [TSA2 report](documentation/ACOB_IT0049_TSA2_TasksForToday.docx)
- Real browser captures are in `docs/evidence/`.

## Notes

This source folder is separate from the earlier TFA4 project. `.env`, local credentials, vendor dependencies, writable runtime data, and temporary document-render files are excluded from Git.
