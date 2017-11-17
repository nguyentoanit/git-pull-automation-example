# How to create migration database and git pull code automatic
## Environment
- OS: Centos 6.9
- Web server: Apache
- PHP 5.6.32
- Git 1.7.1
- Laravel 5.4

## Step by Steps
- Install ```sudo``` by command:
```
yum install sudo
```
- Create folder to save ssh key and permission:
```
mkdir /var/www/.ssh
chmod -R 777 /var/www/.ssh/
```
- Generate a ssh key by web server user:
```
sudo -H -u <web server user> bash -c 'ssh-keygen -t rsa -b 4096 -C "your_email@example.com"'
```
- For example, if your web server is apache.
```
sudo -H -u apache bash -c 'ssh-keygen -t rsa -b 4096 -C "your_email@example.com"'
```
- After you generate a ssh keygen. You get ssh public key at /var/www/.ssh/<file-name>.pub and insert it into your git repository. In the next time, You can pull latest source code from repository without input password.
- Testing with web server user. For example with apache user:
```
sudo -H -u apache bash -c 'git pull https://github.com/nguyentoanit/git-pull-automation-example.git master'
```
- Next, Adding a remote. You should use ssh for pulling.
```
git remote add origin <remote url>
```
- For example:
```
git remote add origin git@github.com:nguyentoanit/git-pull-automation-example.git
```
- I have written a demo by Laravel framwork. If you want migrate database, you will have to configure environment in Laravel. Create ```.env``` file and configure environment.
- A few important file in my demo:
```
\path\to\project\routes\web.php
\path\to\project\app\Http\Controllers\MigrationController.php
\path\to\project\resources\views\migration.blade.php
```
