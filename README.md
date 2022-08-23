

## About Upwork-Clone

Upwork clone is a full-stack application that sets up features such as an advanced search bar, application submission, flash messages, messaging and more, using Laravel 9 and Livewire. We will add then TailwindCSS and AlpineJS to complete our TALL stack

## Set up and deploy Upwork-Clone

`git clone https://github.com/abdelazizmirasoft/upwork-clone.git upwork-clone`

`docker run --rm -v $(pwd):/app composer install`

`sudo chown -R $USER:$USER upwork-clone`

Connect to your db server in order to create the db app user and grant him the necessary privileges:

`docker-compose exec db sh -c 'mysql -uroot -p${MYSQL_ROOT_PASSWORD}'`

`CREATE USER 'upwork_user'@'%' IDENTIFIED WITH mysql_native_password BY 'p@$sw0rd';`

`GRANT SHOW DATABASES, CREATE, ALTER, DROP, INSERT, UPDATE, DELETE, SELECT, REFERENCES, RELOAD on *.* TO 'upwork_user'@'%';`

Access the app container to generate the laravel key and save it to the .env file:

`docker-compose exec app bash`

`php artisan key:generate`

Don't forget to cache the configuration settings:

`php artisan config:cache`

