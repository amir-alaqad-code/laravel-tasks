Notes – Docker & Git/GitHub Assignment

1. Biggest Docker Issue & How It Was Solved

The most challenging issue during this assignment appeared while building the Docker image for the Laravel project.
Composer attempted to run artisan package:discover during the build stage, but the file artisan was not yet available in the image. This produced an internal Laravel error and caused the entire Docker build to fail.

The issue was solved by reorganizing the Dockerfile using a multi-stage build. In the first stage, Composer dependencies were installed, and the full application source code was copied. In the second stage, the optimized and ready-to-run files were copied to a lightweight PHP runtime image. This solved the dependency timing problem and produced a cleaner and smaller final image.
This experience improved my understanding of build layering, dependency order, and reproducibility inside containers.

2. Key Git/GitHub Lesson Learned

The assignment emphasized the importance of using Git and GitHub professionally.
The biggest lesson learned was that commits should tell a story. Writing small and meaningful commit messages provided a clear timeline of technical decisions, allowed easy debugging, and made the repository more understandable for other developers.

Additionally, using Pull Requests (PRs) highlighted how collaborative reviews and merging workflows are done in real software teams. The process demonstrates the value of transparency, clarity, and traceability in version control systems.

3. Reflection on Reproducibility & OS Concepts

Running the application inside Docker made the environment reproducible across machines, regardless of installed system dependencies.
This reflects a core Operating Systems concept: isolation.
Docker containers isolate processes, networking, and file systems, creating controlled and predictable environments. This reduces “works on my machine” issues and improves portability.

SQLite was chosen for simplicity and reproducibility. It removed the need for additional services and demonstrated how OS-level file systems can integrate with container-based applications.

4. Personal Takeaways

This assignment felt significantly different from typical coursework because it combined:

software development

operating systems concepts

containerization

DevOps workflow

documentation and Git practices

It simulated a simplified real-world engineering scenario and improved my confidence in deploying small applications and documenting them clearly for other developers.
