# README.Docker.md

## Comienzo rápido

Esta aplicación está diseñada para ejecutarse sobre [Docker](https://www.Docker.com/what-docker).

Construir la imagen:

````shell
docker build -t mi-imagen .
````

Para ejecutar un contenedor desde la imagen:

````shell
docker run --name mi-contenedor -v directorio/local/resultado:/usr/src/app/out/ mi-imagen
````

Se generará un fichero de ejemplo en la carpeta local `directorio/local/resultado`.