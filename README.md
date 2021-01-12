## About this project

This project was made as a learning experience. I utilized Laravel, Vue, Scss and for some styling Bootstrap. I understand that some things could have been made more efficiently or consistently (for example using only Vue or Laravel components, not both), but to get a feel for the most features I used them diversely.

The site is a simple CRUD-site with authentication, authorization, form validation and pagination features provided by Laravel. On the site a user can:
- view published blog posts and descriptions of their authors
- login, logout, register and delete their account (deletion also deletes the user's posts)
- get password reset -link via email
- create, edit and delete their own posts
- change their name and description as an author

## Setup
The setup requires npm, composer and mysql (default in the files). Then
- create a database and edit the .env accordingly
- on command line, in the project directory type npm install
- while mysql is running type on the command line php artisan migrate
- type php artisan db:seed
- host the site with php artisan serve
- open the site in browser

## Demo gif
![alt text](https://github.com/tomb-cyber/blog-laravel-vue-crud/blob/master/blog-demo.gif "Demo gif")