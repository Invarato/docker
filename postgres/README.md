# Postgres


## Contiene

 * postgres: https://hub.docker.com/_/postgres
 * adminer: https://registry.hub.docker.com/_/adminer


Está todo en una red: `postgres-network`

Los datos de la base de datos se guardan en el volumen: `postgres-data`

Fichero de inicialización fácil de la base de datos en [init.sql](scripts%2Finit.sql)scripts/init.sql


## Iniciar
Con las variables de [.env](.env)
````shell
docker-compose up
````

O especificando las variables:
````shell
export POSTGRES_VERSION=16.1
export ADMINERDB_VERSION=4.8.1

docker-compose up
````

## Endopoints

 * Adminer: http://localhost:8090/
   * Usuario: user
   * Contraseña: 1234
   * Base de datos: bd

 * JDBC: jdbc:postgresql://localhost:5432/db
   * User: user
   * Password: 1234



## Probar

### Adminer
Con Adminer se pueden ver las bases de datos y trabajar con ellas desde la interfaz de usuario