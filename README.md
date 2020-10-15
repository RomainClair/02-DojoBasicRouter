# Basic Router

## Skills & concepts

- Use $_GET
- Manufacture URL/links with query parameters
- Use conditionnal structures

## Goals

The main idea of a web router component is to have a single piece of code that decide which controller will handle the HTTP request.

In this exercice, we won't have any controllers and the router will be a single PHP script : **public/index.php**

The goal of this router is to display one of the simple HTML pages using an include.

There are 4 pages to display :

- src/view/home.php
- src/view/page1.php
- src/view/page2.php
- src/view/page3.php

This pages are build using only php includes to factorize common html parts.

A **$title** variable is supposed to be set and contain the title the page will have

Our router will use the query string to decide which page to display :

- No query => display home.php
- A query parameter page containing 1 => display page1.php
- A query parameter page containing 2 => display page2.php
- A query parameter page containing 3 => display page3.php

For this exercice you will only modify

- public/index.php : our router script
- src/view/parts/nav.php : the html navigation menu which is included on all the pages
