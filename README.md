# Laravel Project

This project was generated with:
- `laravel new laravel-project`
- `npm install`

On the Homestead Virtual Machine.

## Set Up on Windows

- Install [Vagrant](https://www.vagrantup.com/downloads.html). Used version: 2.2.5
- Install [VirtualBox 6.x](https://www.virtualbox.org/wiki/Downloads). Used version: 6.0.10
- On PowerShell: `vagrant box add laravel/homestead`
- On PowerShell: `cd ~`
- On PowerShell: `git clone https://github.com/laravel/homestead.git Homestead`
- On PowerShell: `cd Homestead`
- Check for the [last version](https://github.com/laravel/homestead/releases).
- On PowerShell: `git checkout v9.0.7`
- On PowerShell: `.\init.bat`
- Change Homestead.yaml folders and sites configuration:

    ```` 
    folders:    
         - map: ~/laravel-project
           to: /home/vagrant/laravel-project
     
    sites:
         - map: homestead.test
           to: /home/vagrant/laravel-project/public
    ````
 - On PowerShell: `vagrant up`
 - On PowerShell: `vagrant ssh`. Now, we are on the Virtual Machine.
 - `git clone git@github.com:estevegf/laravel.git laravel-project`
 - `cd laravel-project`
 - `cp .env.example .env`
 - `composer install`
 - `exit`. We get out from our Virtual Machine.
 - **Hostname Resolution**. File C:\Windows\System32\drivers\etc\hosts.
 - Add to this file: `192.168.10.10  homestead.test`
 - Navigate to: `http://homestead.test`
 - Done.
 
 For more details go [here](https://laravel.com/docs/5.8/homestead).

## Development server

- Run on the Homestead folder `vagrant up` for a dev server. 
- Navigate to: `http://homestead.test`
- To reload any change: `ctrl + shift + r`

## Commands

- Create a Controller: `php artisan make:controller EducationController`

## Deployment Apache & NGINX

- `cd /var/www`
- `sudo chown -R www-data:www-data <folder-domain>/`
- `cd /<folder-domain>`
- `git clone https://github.com/estevegf/laravel.git laravel-project`
- `cd laravel-project`
- `cp .env.example .env`
- `nano .env`

  ```
    APP_ENV=production
    APP_DEBUG=false
    APP_URL=http://example.com
  ```
- `sudo composer install`
- `sudo php artisan key:generate`
- `sudo php artisan cache:clear`
- `sudo php artisan config:cache`
- `sudo php artisan route:cache`
