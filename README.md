# Práctica 7: Web App con Dockerfile y Docker Compose

Aplicación web "Hola Mundo" en PHP que se conecta a una base de datos MySQL.

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
