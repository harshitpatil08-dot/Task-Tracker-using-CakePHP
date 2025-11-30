🎯 Daily Task Tracker (Built in CakePHP)

The app helps users keep track of their day-to-day tasks with:

1. Task Title
2. Description
3. Priority (Low / Medium / High)
4. Completion Status
5. Created & Modified timestamps

Features Include :

➕ Add new tasks

📃 View all tasks

✏️ Edit tasks

❌ Delete tasks

🔄 Mark tasks as completed

📌 Priority levels

Built using CakePHP conventions (Models, Controllers, Views)

🛠️ Tech Stack

CakePHP 4.x

PHP 8.x

WAMP / Apache

MySQL

Composer

How to Run Locally?

# Clone the repository
git clone https://github.com/harshitpatil08-dot/Task-Tracker-using-CakePHP.git

cd Task-Tracker-using-CakePHP

# Install dependencies
composer install

# Create database
# (Import the tasks.sql file from /config/schema/ if included)

# Start the CakePHP server
php bin/cake.php server


* Now visit:

👉 http://localhost:8765/tasks

Database Schema :

- id INT AUTO_INCREMENT PRIMARY KEY
- title VARCHAR(255)
- description TEXT
- priority ENUM('Low','Medium','High')
- is_completed TINYINT(1)
- created DATETIME
- modified DATETIME

What I Learned?

- How MVC works inside CakePHP (Models, Controllers, Templates).
- How to use CakePHP Bake to quickly scaffold CRUD.
- How to configure database connections using app_local.php.
- How routing & ORM conventions work.
- How to deploy a PHP project to GitHub properly.

👤 Author

Harshit Patil
📧 harshitpatil08@gmail.com
