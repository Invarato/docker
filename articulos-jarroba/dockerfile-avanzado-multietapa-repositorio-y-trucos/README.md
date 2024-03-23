# Ejemplo de docker avanzado y repositorio

Del artículo https://jarroba.com/dockerfile-avanzado-multietapa-repositorio-y-trucos/

La imagen de este ejemplo está subida al repositorio de Docker Hub: https://hub.docker.com/r/invarato/jarroba_repo

## Construir Imagen

Construir [Dockerfile](Dockerfile):
````shell
docker build -t mi-imagen-jupyter .
````

Ejecutar el contenedor:
````shell
docker run --name mi-contenedor-jupyter -p 8888:8888 mi-imagen-jupyter
````


## Levantar desde Compose

Levantar [compose.yml](compose.yaml):
````shell
docker compose up
````

Si estás trabajando con el [Dockerfile](Dockerfile) puedes forzar la recreación con:
````shell
docker compose up --force-recreate
````


## Subir imagen a respositorio

Construir [Dockerfile](Dockerfile):
````shell
docker build -t mi-imagen-jupyter:1.0 .
````

Tagear la imagen con `1.0` y `latest`
````shell
docker image tag mi-imagen-jupyter:1.0 invarato/jarroba_repo:1.0
docker image tag mi-imagen-jupyter:1.0 invarato/jarroba_repo:latest
````

Iniciar sesión en Docker Hub https://hub.docker.com/:
````shell
docker login -u invarato
````

Subir la imagen con los dos tags:
````shell
docker push invarato/jarroba_repo:1.0
docker push invarato/jarroba_repo:latest
````

Cerrar sesión en Docker Hub
````shell
docker logout
````

Podemos descargar la imagen con:
````shell
docker pull invarato/jarroba_repo:1.0
````