# General

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
