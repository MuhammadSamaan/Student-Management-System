# 🎓 Student Management System

A role-based **Student Management System** built with **PHP** and **MySQL**, designed to streamline day-to-day academic operations for Admins, Teachers, and Students through three dedicated dashboards.

## Admin Dashboard ##
![Login Page](https://github.com/MuhammadSamaan/Student-Management-System/blob/main/Output%20Images/SMS%20img%201.JPG)
![Admin Dashboard](https://github.com/MuhammadSamaan/Student-Management-System/blob/main/Output%20Images/SMS%20img%202.JPG)
![Add Student](https://github.com/MuhammadSamaan/Student-Management-System/blob/main/Output%20Images/SMS%20img%203.JPG)
![Manage Student](https://github.com/MuhammadSamaan/Student-Management-System/blob/main/Output%20Images/SMS%20img%205.JPG)
![Add Teacher](https://github.com/MuhammadSamaan/Student-Management-System/blob/main/Output%20Images/SMS%20img%206.JPG)
![Manage Teacher](https://github.com/MuhammadSamaan/Student-Management-System/blob/main/Output%20Images/SMS%20img%208.JPG)
![Post Notice](https://github.com/MuhammadSamaan/Student-Management-System/blob/main/Output%20Images/SMS%20img%209.JPG)

## Teacher Dashboard ##
![Teacher Login](https://github.com/MuhammadSamaan/Student-Management-System/blob/main/Output%20Images/SMS%20img%2010.JPG)
![Teacher Dashboard](https://github.com/MuhammadSamaan/Student-Management-System/blob/main/Output%20Images/SMS%20img%2011.JPG)
![Teacher Dashboard](https://github.com/MuhammadSamaan/Student-Management-System/blob/main/Output%20Images/SMS%20img%2012.JPG)
![Student List](https://github.com/MuhammadSamaan/Student-Management-System/blob/main/Output%20Images/SMS%20img%2013.JPG)
![Mark Attendence](https://github.com/MuhammadSamaan/Student-Management-System/blob/main/Output%20Images/SMS%20img%2014.JPG)
![Assign Task](https://github.com/MuhammadSamaan/Student-Management-System/blob/main/Output%20Images/SMS%20img%2015.JPG)
![View Notices](https://github.com/MuhammadSamaan/Student-Management-System/blob/main/Output%20Images/SMS%20img%2016.JPG)
![Assigned Task](https://github.com/MuhammadSamaan/Student-Management-System/blob/main/Output%20Images/SMS%20img%2017.JPG)

## Student Dashboard ##
![Student Login](https://github.com/MuhammadSamaan/Student-Management-System/blob/main/Output%20Images/SMS%20img%2018.JPG)
![Student Dashboard](https://github.com/MuhammadSamaan/Student-Management-System/blob/main/Output%20Images/SMS%20img%2019.JPG)
![Student Dashboard](https://github.com/MuhammadSamaan/Student-Management-System/blob/main/Output%20Images/SMS%20img%2020.JPG)
![Attendence Report](https://github.com/MuhammadSamaan/Student-Management-System/blob/main/Output%20Images/SMS%20img%2021.JPG)
![View Task](https://github.com/MuhammadSamaan/Student-Management-System/blob/main/Output%20Images/SMS%20img%2022.JPG)
![View Schedule](https://github.com/MuhammadSamaan/Student-Management-System/blob/main/Output%20Images/SMS%20img%2023.JPG)

## 📖 Overview

The **Student Management System** is a lightweight, session-based web application that provides three separate, role-specific portals such as **Admin**, **Teacher**, and **Student**  under one platform. It handles the core workflows of a small institution: managing users, marking attendance, assigning tasks, posting notices, and scheduling classes, all through a clean Bootstrap-powered interface.

This project was built as a practical, full-stack academic exercise to demonstrate core web development concepts: authentication, role-based access control (RBAC), CRUD operations, and relational database design using vanilla PHP and MySQL (no frameworks).

## ✨ Features
### 🔑 Authentication
- Single login portal with **role-based redirection** (Admin / Teacher / Student)
- Session-based access control — protected routes redirect unauthenticated users to login
- Secure logout with session destruction

### 🛠️ Admin Dashboard
- Add, edit, and remove **student** and **teacher** accounts
- View all registered students and teachers in a management table
- Create and publish **class schedules**
- Post institution-wide **notices/announcements**

### 👨‍🏫 Teacher Dashboard
- View list of enrolled students
- **Mark daily attendance** (Present / Absent) for students
- **Assign tasks/assignments** to individual students with title and description
- View previously assigned tasks
- Post notices visible to students
- View and manage class schedules

### 🎒 Student Dashboard
- View personal **attendance history**
- View **tasks/assignments** assigned by teachers
- View class **schedule**
- View **notices** posted by admins/teachers

---

## 🧱 Tech Stack

| Layer          | Technology                                  |
|----------------|----------------------------------------------|
| Frontend       | HTML5, CSS3, Bootstrap 5.3, Bootstrap Icons  |
| Backend        | PHP (procedural, MySQLi extension)           |
| Database       | MySQL / MariaDB                              |
| Server         | Apache (via XAMPP / WAMP / LAMP)             |
| Session Mgmt   | PHP native sessions (`$_SESSION`)            |

## 🗂️ Project Structure

```
Student-Management-System/
│
├── assets/                     # Static images used across the UI
│
├── dashboard/
│   ├── admin.php                # Admin route entry
│   ├── admin/
│   │   ├── dashboard.php
│   │   ├── add_student.php
│   │   ├── edit_student.php
│   │   ├── delete_student.php
│   │   ├── manage_students.php
│   │   ├── add_teacher.php
│   │   ├── edit_teacher.php
│   │   ├── delete_teacher.php
│   │   ├── manage_teacher.php
│   │   ├── add_schedule.php
│   │   └── post_notice.php
│   │
│   ├── teacher.php               # Teacher route entry
│   ├── teacher/
│   │   ├── dashboard.php
│   │   ├── mark_attendance.php
│   │   ├── assign_task.php
│   │   ├── view_tasks.php
│   │   ├── view_students.php
│   │   ├── add_schedule.php
│   │   ├── view_schedule.php
│   │   ├── post_notice.php
│   │   └── view_notices.php
│   │
│   ├── student.php               # Student route entry
│   └── student/
│       ├── dashboard.php
│       ├── view_attendance.php
│       ├── view_tasks.php
│       ├── view_schedule.php
│       └── view_notices.php
│
├── includes/
│   ├── db.php                   # Database connection config
│   ├── auth_session.php         # Session guard for protected pages
│   ├── header.php                # Shared page header/navbar
│   ├── sidebar.php               # Role-aware sidebar navigation
│   └── footer.php                # Shared page footer
│
├── def.sql                       # Database schema + seed data
├── index.php                     # Login page
├── logout.php                    # Session destroy / logout
└── README.md
```

## 🗄️ Database Schema

The application uses a single relational database (`def`) with the following core tables:

| Table         | Purpose                                                         |
|---------------|------------------------------------------------------------------|
| `users`       | Stores all accounts (Admin, Teacher, Student) with `role` enum   |
| `attendance`  | Daily attendance records linked to `student_id`                  |
| `tasks`       | Tasks assigned by teachers to individual students                |
| `schedules`   | Class schedule entries                                           |
| `notices`     | Institution-wide announcements/notices                           |

**Entity relationships:**
- `attendance.student_id` → `users.id` (`ON DELETE CASCADE`)
- `tasks.student_id` → `users.id` (`ON DELETE CASCADE`)

The full schema, including table definitions and sample seed data, is available in [`def.sql`](./def.sql).

## ⚙️ Installation & Setup

### Prerequisites
- [XAMPP](https://www.apachefriends.org/) / WAMP / MAMP or any local server stack with **PHP 8.x** and **MySQL/MariaDB**
- A web browser

### Steps

1. **Clone the repository**
   ```bash
   git clone https://github.com/<your-username>/Student-Management-System.git
   ```

2. **Move the project into your server's document root**
   ```bash
   # Example for XAMPP on Windows
   move Student-Management-System C:\xampp\htdocs\
   ```

3. **Start Apache and MySQL** from your XAMPP/WAMP control panel.

4. **Create the database**
   - Open **phpMyAdmin** (`http://localhost/phpmyadmin`)
   - Create a new database named `def`
   - Import the schema file: go to the `def` database → **Import** → select `def.sql`

5. **Configure the database connection**
   Open `includes/db.php` and update the credentials to match your local environment:
   ```php
   $host   = "localhost";
   $user   = "root";
   $pass   = "";
   $dbname = "def";
   ```

6. **Run the application**
   Visit:
   ```
   http://localhost/Student-Management-System/index.php
   ```

---

## 🔐 Default Login Credentials

> The following demo accounts are seeded via `def.sql`. Change or remove them before deploying to a live/production environment.

| Role    | Username   | Password      |
|---------|------------|---------------|
| Admin   | `admin1`   | `admin123`    |
| Teacher | `teacher1` | `teacher123`  |
| Student | `student1` | `student123`  |

---

## 🚧 Known Limitations & Roadmap

This project was built as an academic learning exercise, and the following improvements are natural next steps toward a production-ready system:

- [ ] Replace `MD5`/legacy password hashing with `password_hash()` / `password_verify()` consistently across all auth flows
- [ ] Migrate raw SQL string concatenation to **prepared statements** to eliminate SQL injection risk
- [ ] Add server-side input validation and CSRF protection on all forms
- [ ] Introduce a `.env`-based configuration to keep database credentials out of source control
- [ ] Add pagination and search/filter to management tables (students, teachers, tasks)
- [ ] Write automated tests (PHPUnit) for core CRUD and auth logic
- [ ] Add email notifications for task assignments and notices

---

## 🤝 Contributing

Contributions, issues, and feature requests are welcome!

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/amazing-feature`)
3. Commit your changes (`git commit -m 'Add some amazing feature'`)
4. Push to the branch (`git push origin feature/amazing-feature`)
5. Open a Pull Request



---

## 👤 Author

**Muhammad Samaan**
- GitHub: [@MuhammadSamaan](https://github.com/MuhammadSamaan)

---

<p align="center">⭐ If you found this project useful, consider giving it a star on GitHub!</p>
