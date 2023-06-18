<h1 align="center">Metro</h1>

<h2> Start steps</h2>

1. Create and run containers:

```make restart```

2. Create vendor

```docker compose composer istall```

3. Create tables in the database:

 Remember to change your DB configs inside the .env and config/db.php if needed

```make bash```
```cd app```
```php yii migrate```

That will seed your DB also


4. Import Postman collection from the root directory to the Postman itself:

5. Test the routes


