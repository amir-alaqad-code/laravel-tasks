Laravel Tasks – Dockerized TODO Application 🐳📋

Laravel Tasks is a small and portable task management web application built with Laravel 12, fully containerized using Docker and documented through a professional GitHub workflow.
The project demonstrates modern software engineering practices including reproducible environments, clean repository structure, lightweight database configuration, and developer-friendly documentation.

✨ Features Overview

The application allows users to:

Create Tasks

View Tasks

Update Tasks

Delete Tasks

Data is stored in a local SQLite database to ensure simplicity and portability.
Although functionality is minimal, the focus is on:

Docker containerization

OS-related deployment concepts

Professional Git/GitHub usage

Clean documentation for reproducibility

⚙️ Technology Stack

Framework & Runtime

Laravel 12

PHP 8.3 (CLI)

Database

SQLite (file-based)

Environment & Tooling

Docker

Docker Compose

Multi-stage Dockerfile

Docker Healthcheck

WSL2 (Ubuntu) + Docker Desktop

Git & GitHub

📁 Repository Structure
laravel-tasks/
├─ app/
├─ bootstrap/
├─ config/
├─ database/
│  └─ database.sqlite
├─ public/
├─ resources/
├─ routes/
├─ storage/
├─ tests/
├─ docs/
│  ├─ screenshots/
│  └─ notes.md
├─ Dockerfile
├─ docker-compose.yml
├─ .dockerignore
├─ .gitignore
├─ composer.json
├─ composer.lock
├─ .env.example
├─ .env
└─ README.md


This structure satisfies reproducibility and documentation requirements.

🐳 Running the Application with Docker

The application runs entirely inside Docker via Docker Compose, ensuring consistent behavior across machines.

Steps:

Clone repository

Configure .env

Build Docker image

Run container

Access via browser

Service URL:

http://localhost:8000

Using Docker provides:

Reproducible builds

Portability

Clean isolation

Reduced “it works on my machine” issues

🗄️ Database (SQLite)

SQLite is used for simplicity and academic testing:

Benefits:

No additional containers

Zero-configuration

Lightweight and portable

Database file:

database/database.sqlite

🚀 Docker Highlights

Included features:

Multi-stage Dockerfile (Composer → Runtime)

Lightweight runtime image

Healthcheck support

WSL2 compatibility

SQLite configured inside container

Clean Dockerfile + Compose setup

Assignment Bonus Work:

Docker Compose (Bonus A)

Multi-stage Dockerfile (Bonus C)

Healthcheck (Bonus D)

📌 Git & GitHub Workflow

A clean workflow has been used throughout the project:

Meaningful commit messages (semantic style)

Organized repository structure

README designed for developer onboarding

Technical notes under /docs

Avoided vague commit messages (e.g., “final”, “test”, “update”)

Optional PR workflow for extra bonus points

This satisfies Commit professionalism + Proof & Evidence criteria.

📸 Screenshots & Evidence

All assignment screenshots are located in:

docs/screenshots/


Screenshots include:

Docker build output

Docker container running

Application in browser

GitHub commit history

GitHub repository view

These are also provided in the final PDF.

📝 Technical Notes

The file:

docs/notes.md


contains:

Biggest Docker problem and solution

Key Git/GitHub lesson learned

Reflection on reproducibility and OS concepts

🎓 Assignment Context

This repository was completed for:

Operating Systems Lab – Assignment #2 (Docker & GitHub)

Evaluated on:

Docker correctness

Repository structure & documentation

Commit professionalism

Technical evidence & screenshots

Bonus integration

This project aims for maximum scoring including bonus sections.

🔧 Limitations & Future Enhancements

Possible improvements:

Switch to MySQL/PostgreSQL container

Add GitHub Actions CI pipeline

Deploy to remote server

Add container-based testing

Role-based authentication

REST API versioning

👤 Author

Developed by: Amir N. H. Alaqad
Submitted to: Operating Systems Lab
Institution: IUG – Software Development
Eng: Yousef M. Y. Al Sabbah

🔗 Repository Link

https://github.com/amir-alaqad-code/laravel-tasks

Developers can clone, build, and run the application using Docker in minutes.

📄 License

This project is intended for academic and educational use.

🏷️ SEO Tags

Laravel 12, Docker, Docker Compose, PHP 8.3, SQLite, Multi-stage Dockerfile, WSL2, GitHub, DevOps, Software Engineering, OS Lab Assignment, Containerization, Laravel Tasks App, Web Application, Developer Documentation, Clean Repository, Academic Project
