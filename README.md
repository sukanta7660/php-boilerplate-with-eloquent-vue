# Online Library

## How to run project

- 1 install php latest version
  ``https://www.apachefriends.org/download.html``
- 2 Install `composer` from `https://getcomposer.org/download/` (You have to add your php path while installing composer. Composer Install: `https://www.youtube.com/watch?v=6sbkXfIyFF8&ab_channel=StackDevelopers`)
- 3 Put Your project in the htdocs folder. and run command prompt inside project folder.
- 4 Create a database named `online_library` in `localhost/phpmyadmin`
- 5 run php built in server or any server in port 3000
```
php -S localhost:3000
```


## Database Migration
Hit url in browser. it will migrate the database
- 1 User
```
http://localhost:3000/database/users.php
```

- 2 Book Category
```
http://localhost:3000/database/categories.php
```

- 3 Book
```
http://localhost:3000/database/books.php
```

- 4 Book Issue
```
http://localhost:3000/database/book_issues.php
```

- 4 Notifications
```
http://localhost:3000/database/notifications.php
```

- 4 Contacts
```
http://localhost:3000/database/contacts.php
```

## Make Default Users
- 1 User Seeder
```
localhost:3000/seed-user
```
```
Default Admin:
email: admin@gmail.com
password: 123456
```
