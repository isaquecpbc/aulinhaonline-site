# Site Aulinha Online.
Pequena aplicação php com laravel e blade usando bootstrap 5



### Para iniciar o laravel com o docker:


1. na raiz do projeto, 
2. ``` $ docker-compose up -d ```
3. ``` $ docker-compose exec aulinha_app bash ```
4. ``` $ composer update ```
5. ``` $ php artisan key:generate ```
6. ``` $ php artisan optimize:clear ```


#### Para popular o banco de dados:

```
$ docker-compose exec aulinha_app bash 
```

```
php artisan migrate:fresh --seed
```

### Teste o acesso do site em http://localhost/
