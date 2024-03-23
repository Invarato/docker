# Utilizamos la base de Python oficial como imagen padre
FROM python:3.12.2-alpine3.19

# Documentamos indicando que habrá un volumen externo a la imagen, que será donde pongamos el fichero resultante
VOLUME /usr/src/app/out/

# Establecemos el directorio de trabajo a /app, terminará siendo: /usr/src/app (la base que viene en el FROM ya lo establece antes en /usr/src)
WORKDIR /app

# Creamos dentro un directorio llamado out, que será el que compartamos con el resultado
RUN mkdir out

# Copiamos el código de nuestro proyecto al directorio del último WORKDIR (a app)
COPY ./scripts/miCodigoPython.py .

# Ejecutamos nuestro código Python en nuestro contenedor
CMD ["python", "miCodigoPython.py"]