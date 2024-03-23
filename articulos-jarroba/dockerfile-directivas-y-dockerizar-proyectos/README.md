# Ejemplo básico de Docker compose

Del artículo https://jarroba.com/dockerfile-directivas-y-dockerizar-proyectos/

Construir [Dockerfile](Dockerfile):
````shell
docker build -t mi-imagen .
````

Analizar:
````shell
docker scout quickview
````

Ver recomendaciones de seguridad:
````shell
docker scout recommendations
````

Ver historial de la imagen:
````shell
docker history mi-imagen
````

Ejecutar el contenedor:
````shell
docker run --name mi-contenedor -v C:\Users\usuario\Desktop\miProyecto\resultado:/usr/src/app/out/ mi-imagen
````