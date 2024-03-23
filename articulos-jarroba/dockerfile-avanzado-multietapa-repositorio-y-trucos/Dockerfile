# Descargamos una imagen base de un sistema operativo pelado
FROM debian:bookworm-20240211-slim

# Documentamos los metadatos que necesitemos
LABEL authors="Ramon Invarato"
LABEL description="Esta es una imagen personalizada de Python con Jupyter "
LABEL maintainer="ramon@jarroba.com"
LABEL version="1.0"
LABEL build_date="2024-03-01"

# Documentamos que exponemos el puerto del servidor Jupyter
EXPOSE 8888

# Nos aseguramos de ser root para realizar las instalaciones
USER root

# Instalamos Python, pip, así como otras dependencias que necesitarán las bibliotecas de Python:
RUN apt update
RUN apt install -y python3 python3-pip python3-venv

# Establecemos las varibles de entorno útiles de Python para quien use nuestra imagen que las tenga disponibles
ENV PYTHON=/usr/bin/python
ENV PIP=/usr/bin/pip3
ENV PATH=$PATH:$PIP:$PYTHON

# Creamos un usuario sin privilegios (sin er root) para quien use la imagen, creamos una carpeta que será donde se pueda trabajar y se la damos a ese usuario
RUN adduser --disabled-password --gecos '' misuarionoroot
RUN mkdir -p /usr/src/app
RUN chown -R misuarionoroot:misuarionoroot /usr/src/app

# Creamos el entorno virtual de Python, le damos permisos al usuario para que lo pueda usar y lo añadimos a la variable de entorno
RUN python3 -m venv /opt/venv
RUN chown -R misuarionoroot:misuarionoroot /opt/venv
ENV PATH="/opt/venv/bin:$PATH"

# Para enviar la salida de manera inmediata a la salida de Docker
ENV PYTHONUNBUFFERED=1


# Cambiamos al usuario sin permisos root
USER misuarionoroot

# Cambiamos el espacio de trabajo
WORKDIR /usr/src/app

# Activamos el entorno virtual de Python
RUN . /opt/venv/bin/activate

# Instalamos las librerías que necesitemos de Python sobre el entorno virtual de Python
RUN pip3 install jupyter jupyterlab

# Establecemos Jupyter como la aplicación por defecto de este contenedor
ENTRYPOINT ["jupyter", "lab", "--no-browser", "--port=8888"]

# Añadimos más argumentos por defecto, que se podrán cambiar si se requieren
CMD ["--NotebookApp.token=''", "--ip=0.0.0.0"]