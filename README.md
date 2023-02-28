# Installation

Si tienes instalado docker solo seria utilizar el comando

```
docker-compose up -d --build
```

Esto sirve para tener la imagen de docker y trabajar en ella 

Posteriormente correr la migracion y los seeders:

Si tienes instalado docker ejecuta el siguiente comando:

```
docker exec -it mienvio-backend-1 sh
o
docker exec -it mienvio-backend-1 bash
```


Si no tienes docker solo ejecuta los siguientes comandos

```
php artisan migrate
php artisan db:seed
```


la direccion seria: http://localhost:8012/

Finalizado!
