# Proyectos de Docker

En este repositorio voy a ir poniendo diferentes ejemplos a modo de plantilla de Docker (Compose, Dockerfile, etc.)
que considero de utilidad y por ahorrar tiempo a quien los necesite.


## Curso gratuito de Docker
Además, aquí estaré el código del curso gratuito de Docker que puedes encontrar en:
 * Docker básico: Usar imágenes https://jarroba.com/docker-basico-docker-desktop-y-objetos-docker/
 * Docker Compose: Usar cómodamente imágenes https://jarroba.com/docker-compose/
 * Docker Compose en un proyecto: Uso de imágenes en un desarrollo https://jarroba.com/docker-compose-en-un-proyecto/
 * Imágenes Docker: Gestión de imágenes avanzada por consola https://jarroba.com/dockerfile-directivas-y-dockerizar-proyectos/
 * Dockerfile: Directivas y Dockerizar proyectos: trabajar con proyectos Dockerizados https://jarroba.com/dockerfile-directivas-y-dockerizar-proyectos/
 * Dockerfile avanzado: multietapa, repositorio y trucos: para especializarse en Dockerizacion https://jarroba.com/dockerfile-avanzado-multietapa-repositorio-y-trucos/


## Requerido
Para ejecutar este proyecto necesitas tener Docker Engine funcionando (más información en el artículo: https://jarroba.com/docker-compose/)

Iniciar Docker con systemd:
````shell
sudo systemctl start docker
````

Iniciar Docker con SysV init:
````shell
sudo service docker start
````

Iniciar Docker con WSL2:
````shell
wsl sudo service docker start
````

Iniciar demonio de Docker:
````shell
sudo dockerd
````

Nota: Puedes ver esto también en: [README.Docker.md](README.Docker.md)
