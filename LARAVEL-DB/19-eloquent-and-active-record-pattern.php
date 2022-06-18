<?php

/*
ELOQUENT
    Laravel ways to interact with the database

    If I have a table User, I should have a Model User.php (Active record pattern)
        To create a ROW using ELOQUENT, I can do it from the terminal:
            php artisan tinker
            $user = new App\Models\User;
                or
            $user = new User;
            $user->name = "Roberto";
            $user->email = "roberto@gmail.com";
            $user->password = bcrypt('!password');
            $user->save();

            To access the data:
                $user->password;
                $user->name;
            To find the user
                User::find(1);
            To get all users:
                User::all(); - it returns a collection
            To get the first item
                $users->first();
                    or
                $user[0]; - as an array
                We can also use foreach
*/
