Laravel Tasks – Dockerized TODO Application 🐳📋

Laravel Tasks is a small task management application built with Laravel 12, fully containerized using Docker and documented in a professional GitHub workflow.
The project demonstrates modern software engineering practices including reproducible environments, clean repository structure, lightweight database configuration, and developer-friendly documentation.

Overview ✨

The application allows users to:

• Create new tasks
• View existing tasks
• Update tasks
• Delete tasks

All data is stored in a local SQLite database, making the environment simple and portable.
Although the features are intentionally minimal, the focus of this work is on:

• Docker containerization
• Professional Git/GitHub usage
• Repository documentation best practices
• Lightweight database setup
• OS-related deployment concepts

Technology Stack ⚙️

Framework & Runtime

• Laravel 12
• PHP 8.3 (CLI)

Database

• SQLite (file-based, no external DB container required)

Environment & Tooling

• Docker + Docker Compose
• Multi-stage Dockerfile (build + runtime)
• Docker Healthcheck
• WSL2 (Ubuntu) + Docker Desktop
• Git + GitHub

Project Structure 📁

The repository follows a clean and professional structure:

laravel-tasks/
– app/
– bootstrap/
– config/
– database/ (SQLite file)
– public/
– resources/
– routes/
– storage/
– tests/
– docs/
• screenshots/ (assignment evidence)
• notes.md (technical notes)
– Dockerfile
– docker-compose.yml
– .dockerignore
– .gitignore
– composer.json / composer.lock
– .env.example / .env
– README.md

This structure meets the assignment requirements and supports reproducible deployments.

Running the Application with Docker 🐳

The application runs fully inside Docker, ensuring consistent behavior across machines.
Using Docker Compose, the entire environment is started with a single command.

Clone the repository

Configure .env

Build the image

Start the container

Access via browser

The service runs on:

http://localhost:8000

Using Docker enables:

✓ Reproducible builds
✓ Clean dependency isolation
✓ Portable development environments
✓ Reduced “works on my machine” problems

Database Configuration (SQLite) 🗄️

SQLite is used as a file-based database for simplicity.
Key benefits:

✓ No extra containers
✓ Zero-configuration
✓ Ideal for academic and testing environments

The SQLite file is stored under database/database.sqlite and is initialized during container setup.

Docker Highlights 🚀

This project includes:

• Multi-stage build (Composer → Runtime)
• Lightweight PHP runtime image
• Healthcheck support
• WSL2 compatibility
• SQLite database inside container
• Clean Dockerfile + Compose design

Bonus features for the assignment include:

✓ Docker Compose (Bonus A)
✓ Multi-stage Dockerfile (Bonus C)
✓ Healthcheck (Bonus D)

Git & GitHub Workflow 📌

GitHub was used with a clean and professional workflow:

• Meaningful commit messages (semantic style)
• Organized repository structure
• Screenshots and notes in /docs
• README tailored for developer onboarding
• No vague commit messages like “final” or “update”
• Optional PR workflow for improvements

This satisfies the assignment’s Commit professionalism and Proof & evidence criteria.

Screenshots & Evidence 📸

All screenshots required for the OS assignment are available inside:

docs/screenshots/

Examples include:

• Docker build output
• Docker container running
• Application running in browser
• GitHub commit history
• GitHub repository overview

These are also included in the final PDF submission.

Technical Notes 📝

The file docs/notes.md summarizes:

• The biggest Docker issue and how it was solved
• Key Git/GitHub lessons learned
• Reflection on reproducibility and OS concepts

This satisfies the written component of the assignment.

Assignment Context 🎓

This repository was completed as part of:

Operating Systems Lab – Assignment #2 (Docker & GitHub)

The assignment evaluates:

• Docker correctness
• GitHub structure & documentation
• Commit professionalism
• Evidence & reproducibility
• Bonus integration

Based on the assignment rubric, this project aims for maximum scoring including bonus sections.

Limitations & Future Enhancements 🔧

Potential extensions include:

• Switching to MySQL/PostgreSQL container
• GitHub Actions CI pipeline
• Deployment to remote server
• Container-based testing
• Role-based authentication
• REST API versioning

These improvements provide paths for scaling the prototype into a production-like service.

Author 👤

Developed by: Amir N. H. Alaqad
Submitted for: Operating Systems Lab
Institution: IUG – Software Development
Eng: Yousef M. Y. Al Sabbah

Repository Link 🔗

GitHub:

https://github.com/amir-alaqad-code/laravel-tasks

Developers can clone, build, and run the application using Docker within minutes.

License 📄

This project is intended for educational and academic use.

SEO Tags 🏷️

Laravel 12, Docker, Docker Compose, PHP 8.3, SQLite, Multi-stage Dockerfile, WSL2, GitHub, DevOps, Software Engineering, OS Lab Assignment, Containerization, Laravel Tasks App, Web Application, Developer Documentation, Clean Repository, Academic Project
