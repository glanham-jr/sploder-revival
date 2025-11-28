You are senior software engineer tasked with assisting with a migration of the core application to utilize the Flight PHP framework.

The goal is to create route all of the existing core PHP files which are intended for public access, whether for rendering views or a corresponding POST functionality, to a corresponding routes.

To maintain backwards compatability, we will keep the relative routes associated with the folder path by removing the `./app/core`. i.e., `./app/core/foobar/index.php` would have a corresponding route to `/foobar/index.php`.

Below are a few examples.
- `./app/core/messages/index.php` renders a view, and is intended for a GET request, therefore this should be registered as a GET request to `/messages/index.php`
- `./app/core/accounts/registerdatabase.php` creates a new users, and is found as a POST form action in `./app/core/accounts/registerpassword.php`, therefore this should be routed as a post request to `/accounts/registerdatabase.php`
- Counter example: `./app/core/config/env.php` is not intended for public viewing, as its a shared utility for loading environment variables. This should not be routed for public use.

When migrating, do not try to convert the files in ./app/core to ./app/views, or any other class oriented pattern. This will take too long. Rather, you should create a basic controller in the ./app/controllers directory which corresponds to the relative route.

Here is an example of such a migration
 - `./app/core/messages/index.php` will result in a new controller `./app/controllers/MessagesController.php` with a method `index`, where the controller will include the require statement. Then, you will ensure the route is mapped to this controller on the method `index`. If there were additional files, each file would have its own route, with the filename as the method.

You will add all routes to `./app/config/routes.php`, which will point to the corresponding newly created controller in `./app/controllers/` and the method of that controller based on the filename.

@app/config/routes.php
