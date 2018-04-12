# Yoobee CMS Formative One Assessment

## What are PHP Sessions?

PHP sessions are a way for the browser to persist data entered by the user across multiple pages on a website. Sessions typically last until the user decides to close the browser window.

## How relevant are PHP sessions in modern web development? / What are common use cases for PHP sessions?

PHP sessions are a simple way to temporarily persist data across web page navigation. An example of this would be a page remembering the users' name without the need for the user to create an account. PHP sessions are also a simple way for maintaining/modifying state of a variable like a shopping cart. Being able to add/remove items from an instance of a traditional cart while maintaining the flexibility of being able to click the browsers' back button and not have the state of the cart undone is a perfect use case example. Sessions aren't without their caveats however. Sessions have an expiry as they were never intended to be a permanent way to store data. This is a server side attribution though so it's up to the server/web admin to decide the amount of time before a session is removed due to inactivity. As session IDs are preserved in browser cookies, it is entirely possible for the web browser to have it's cookies cleared and therefore remove all session data.

## How can I implement sessions into my PHP?

To start/resume a session you simply put the following at the very top of your .phtml or .php page:

```php
<?php 
    session_start();
?>
```

This will tell the server to look for any existing session data and allow you to access/set data in the session. Here's an example script of setting a session variable:

```php
<?php
    session_start();
    $_SESSION["favcolor"] = "green";
    $_SESSION["favanimal"] = "cat";
?>
```

Now in another page you can access these session variables and echo them into the page:

```php
<?php
    session_start();
    echo $_SESSION["favcolor"]; // Will return "green"
?>
```