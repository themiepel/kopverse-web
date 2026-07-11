# KOPVERSE

KOPVERSE is a gamified web-based learning platform designed to introduce the concept of **Koperasi Desa Merah Putih (KDMP)** through interactive business simulation. Players start by creating and managing a virtual bakery while completing daily missions, earning rewards, and learning how cooperative ecosystems operate in a fun and engaging way.

---

# Technology Architecture

| Layer | Technology |
|--------|------------|
| Frontend | Laravel Blade, Tailwind CSS, JavaScript |
| Backend | Laravel 13 |
| Database | PostgreSQL |
| Authentication | Laravel Authentication |
| Build Tool | Vite |
| Version Control | Git & GitHub |

---

# Installation Guide

## 1. Clone Repository

```bash
git clone https://github.com/themiepel/kopverse-web.git
```

```bash
cd kopverse
```

---

## 2. Install Dependencies

```bash
composer install
```

```bash
npm install
```

---

## 3. Configure Environment

Copy the environment file.

```bash
cp .env.example .env
```

Generate application key.

```bash
php artisan key:generate
```

Configure your PostgreSQL database in the `.env` file.

Example:

```env
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=kopverse
DB_USERNAME=postgres
DB_PASSWORD=your_password
```

---

## 4. Run Migration

```bash
php artisan migrate
```

If sample data is available:

```bash
php artisan db:seed
```

---

## 5. Compile Assets

```bash
npm run dev
```

---

## 6. Run Application

```bash
php artisan serve
```

Open:

```
http://127.0.0.1:8000
```

---

# Project Structure

```
app/
bootstrap/
config/
database/
public/
resources/
routes/
storage/
```

---

# AI Usage Disclosure

This project utilizes **Generative AI** solely as a development assistant.

The core concept, gameplay mechanics, business processes, educational objectives, and overall innovation of KOPVERSE were independently designed by the development team.

Generative AI was used to assist with:

- Laravel development and debugging
- Blade & Tailwind CSS implementation
- UI component refinement
- JavaScript implementation
- Code optimization
- Technical documentation
- README preparation

AI Tool Used:

- ChatGPT (OpenAI GPT-5.5)

The development team remains fully responsible for the originality, implementation, and final outcome of this project.

---

# License

This project was developed for the **Hackathon Digital Cooperative Expo 2026**.
