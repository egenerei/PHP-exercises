# PHP Exercises Repository

## 🎓 About This Repository

This repository contains all the PHP programming exercises completed by Jorge Del Rey Prieto throughout the academic year as part of coursework in programming. The work spans procedural PHP, object-oriented PHP, and database-integrated tasks with HTML/PHP forms. It reflects hands-on learning, progressive complexity, and topic coverage aligned with a structured curriculum.

## 🗂 Structure Overview

```
PHP-exercises-main/
├── DB/                    # Exercises and assignments related to MySQL (CRUD, joins, forms)
│   ├── TAREA1-TAREA7/     # Thematic tasks with individual focus (CRUD ops, join queries, etc.)
│   ├── EXAMEN DB/         # Examination materials (forms, db connectors, win/loss logic)
│   ├── pruebaN/           # Misc. prototypes and standalone tests
│   └── db.php             # Common DB connector(s)
├── EXAMEN/                # Standalone PHP exam module with `index.php` and shared `functions.php`
├── OOP/                   # Object-oriented exercises (e.g., class-based geometry like `circulo.php`)
├── menuFigurasPlanas.html# Static entry point for figure-related tasks
└── http.desktop           # Desktop shortcut or meta entry (non-PHP)
```

## 📦 Requirements

- **PHP**: >= 7.4
- **MySQL/MariaDB** (for DB-related exercises)
- (Optional) **Apache/Nginx** + `mod_php`/`php-fpm` setup
- (Optional) **Docker** for isolated test environments

## 🛠 Setup & Usage

### Running Locally

1. Clone this repo:
   ```bash
   git clone https://github.com/egenerei/PHP-exercises.git
   cd PHP-exercises
   ```

2. Serve via built-in PHP server (good for quick testing):
   ```bash
   php -S localhost:8000
   ```

3. For DB-backed scripts:
   - Import the provided SQL (embedded in `.zip` or `.rar`) into your MySQL server.
   - Update connection details inside `db.php`:
     ```php
     $conn = new mysqli("localhost", "user", "password", "database");
     ```

### OOP Exercises

```bash
cd OOP/
php test.php
```

### Exam Runner

```bash
cd EXAMEN/
php -S localhost:8000
```

Open in browser: `http://localhost:8000/index.php`

## 📚 Notes

- ZIP and RAR files (e.g., `DelRey_Prieto_Jorge_TAREA7_TEMA5.rar`) may contain SQL schemas or bundled PHP/HTML/CSS.
- Consider unpacking archives under each task folder to complete the picture if reviewing or assessing.


## 🧑‍💻 Contributing

This repository is primarily individual work for study and internal reference. However, you may fork it for academic, bootcamp, or institutional use.

## 🪪 License

MIT License — feel free to reuse with attribution.

---

Maintained by **Jorge DelRey Prieto**
