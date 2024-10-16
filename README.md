# Titre

This API got 4 endpoints with the same URL :

http://localhost/IDAW/TP4/exo5/users.php

GET :

With the http://localhost/IDAW/TP4/exo5/users.php you will get all the users in the database
and with http://localhost/IDAW/TP4/exo5/users.php?id={id} you will get the users which contains this id

POST

Create User
With the HTTP method POST on http://localhost/IDAW/TP4/exo5/users.php you will need a json to create, a json like :
{
    "name":"toto",
    "email":"tata@gmail.com"
}
If you don't put "name" or "email" you will get a 400 error bad request
You can add more params but it will not be in consideration
If you want to add a user with an email already used you will get a 409 error conflict
If you create your user correctly you will get a 201 HTTP Response

PUT

Update User
With the HTTP method POST on http://localhost/IDAW/TP4/exo5/users.php you will need a json to update, a json like :
{
    "id": 6,
    "name":"toto",
    "email":"tata@gmail.com"
}
You need to put the correct ID of an user or you will get a 404 error not found
With the good ID, you can put name and email params to update the informations, if you just put the ID you will get a 400 error Conflict because you need at least one of the params (name or email).
If you put the right id and one of the right params you will get a 200 HTTP Response

DELETE

Delete User
With the HTTP method POST on http://localhost/IDAW/TP4/exo5/users.php you will need a json to update, a json like :
{
    "id": 6
}
You need to put the correct ID of an user or you will get a 404 error not found
If you don't put the correct params you will get a 400 error conflict
With the good ID you will get a 200 HTTP Response