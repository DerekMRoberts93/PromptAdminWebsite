=====================
Website Documentation
=====================


**Version 1.0**

^^^^^^^^^^

Executive Summary
=======================
 The main front end for BYU OIT Monitoring running on Laravel 5.2.*.

==================

Documentation Information
=========================
Version 1.0


^^^^^^^^^^^^^^^^^^^^^^

Overview
===============
 The deep dive on the exec summary.

^^^^^^^^^^^^^^^^

Design Decisions
================
* Currently, the website does not work with Laravel 5.3+. That will be corrected in a later iteration. Part of this upgrade process is removing the parameters in the boot functions in the App/Providers Event and Route service providers. Upgrade by updating the ``composer.json`` file and running ``sudo composer update``.
* Currently, there is an abundance of inline CSS styling. This is a terrible decision on the developer's part. It's removal is ongoing.
* There is an 'extra dependencies' section that adds links to stylesheets, external js, ect to the nagios-layout.
* Due to the base bootstrap CSS not agreeing with some of the design details, it is only added on a page-by-page basis in the 'extra dependencies' section.

^^^^^^^^^^^^^^^^

Web Architecture
================

Functionality
-------------
 The functionality

Site Map
--------
 Endpoints and the /whatevers

Product Interaction
-------------------

Website URL
-----------
 monitoring.byu.edu

Code Pipeline
-------------
The pipe

^^^^^^^^^^^^^

Dependencies
============

Libraries
---------
 The libraries that are being used.

^^^^^^^^^^^^^^

Each Individual Page
====================

Overview
--------
 What does it do?

Mapping
-------
 Page to Microservice or DB.


Dependencies
------------
 Microservices called, external stylesheets ect.

Environment Variables
---------------------
 The global and environment variables in the microservice.

Nuances
-------
 The whole code

Functions
---------
 Description: bla bla bla

Code
----


Unit Testing
------------


Load Test
----------
Testing

^^^^^^^^^^

Add Host
====================

Overview
--------
 What does it do?

Mapping
-------
 Page to Microservice or DB.


Dependencies
------------
 Microservices called, external stylesheets ect.

Environment Variables
---------------------
 The global and environment variables in the microservice.

Nuances
-------
 * For some reason, this page cannot use the 'extra dependencies' section to add an external ``modal.css`` file because it breaks some of the functionality of the ``AddHostJS.js`` file. The extra css stylesheet is simply inserted at the top of the page and it works that way.
 * The base bootstrap css **DOES NOT** work with this page.

Functions
---------
 Description: bla bla bla

Code
----


Unit Testing
------------


Load Test
----------
Bla

^^^^^^^^^^^

View Host
====================

Overview
--------
 What does it do?

Mapping
-------
 Page to Microservice or DB.


Dependencies
------------
 Microservices called, external stylesheets ect.

Environment Variables
---------------------
 The global and environment variables in the microservice.

Nuances
-------
 * A few dependencies are outside of the 'extra dependencies' section. This makes it work so **leave them there**.
 * The inline styling when displaying the services is by design. It currently is necessary for the ``toggleOutput()`` javascript function to work.

Functions
---------
 Description: bla bla bla

Code
----


Unit Testing
------------


Load Test
----------
