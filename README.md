# docker_skeleton

### Docker skeleton for Symfony 3
Contains:
- Mysql 5.7
- PHP 7.1 Fpm
- Nginx + conf

### How to run?
1. Paste application to **Symfony** directory (or edit `docker-compose.yml` and change PHP application volume)
2. Set MySQL ENV Values in `docker-compose.yml`
3. Run `docker-compose up` in command line
4. Application should be available on `localhost`
