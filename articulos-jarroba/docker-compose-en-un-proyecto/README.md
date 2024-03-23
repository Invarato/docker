# Ejemplo básico de Docker compose

Del artículo https://jarroba.com/docker-compose-en-un-proyecto/

Levantar [compose.yml](compose.yml):
````shell
docker compose up
````

Entrar en la terminal del contenedor:
````shell
docker exec -it miMySQL-container /bin/bash
````

Ejecutar SQL:
````shell
mysql
````

Al terminar:
````shell
docker compose down
````