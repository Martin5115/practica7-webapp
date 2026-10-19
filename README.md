# Práctica 7: Web App con Dockerfile y Docker Compose

Aplicación web "Hola Mundo" en PHP que se conecta a una base de datos MySQL.

<img width="404" height="214" alt="image" src="https://github.com/user-attachments/assets/b32c6435-4e9f-4758-950c-4daa02d6312c" />


## Servicios
- **app**: PHP 8.3 + Apache (construido con `Dockerfile`)
- **db**: MySQL 8.0

## Ejecutar
```bash
docker compose up -d --build
```
Abrir http://localhost:8080

## Detener
```bash
docker compose down        # conserva los datos
docker compose down -v     # borra también la BD
```
