# Ejemplo básico de Docker compose

Del artículo https://jarroba.com/docker-compose/

Levantar [compose.yaml](compose.yaml) con:

````shell
docker compose up
````

Entrar en la terminal del contenedor con:
````shell
docker exec -it miMySQL-container /bin/bash
````

Ejecutar SQL con:
````shell
mysql
````

Al terminar:
````shell
docker compose down
````