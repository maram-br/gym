# Gym Management Website 
<br>The Gym Management Website is designed to streamline the operations of a fitness center. It provides a platform for managing members, scheduling classes for the admin and offers the possibility to the clients to  create accounts, pay offers and more. 

1-Features<br>
    a-Admin dashboard<br>
        login <br>
        manage members (add,remove,update)<br>
        manage offers(add,remove)<br>
        upload plannings <br>
        sign out <br>
    b-client interface<br>
        explore the website : services, coaches, schedules<br>
        create and account (sign up)<br>
        login<br>
        enroll in an offer and pay it <br>
        download his access card (only if he's already enrolled in an offer)<br>
        visit his profile (update his data)<br>
        sign out <br>
2-Usage<br>
Upon accessing the website, users will be directed to the appropriate interface based on their role (admin or client). Administrators will have access to the dashboard for managing all aspects of the gym, while members can view their details, schedules, and make payments.<br>
3-Testing <br>
    a-Payment <br>
        install composer and stripe <br>
        https://getcomposer.org/download/<br>
        after installing composer you should run this command in your project directory : composer require stripe/stripe-php
        when testing the payment procedure you shoukd use this number for the card information : 4242 4242 4242 4242<br>
    b-admin interface <br>
    To access to the admin account use this :<br>
        username: admin<br>
        password: admin<br>
    c-Database<br>
    open phpmyadmin and create the database with the name tp_thp_gym 
    run the script "script.sql"<br>

    FINNALY ,TO USE STRIPE TEST WITHOUT PROBLEMS YOU SHOULD NAME THE FOLDER OF THE PROJECT "project" , OTHERWISE YOU SHOULD GO TO THE PAYMENT.PHP FILE AND REPLACE in the line 19 'PROJECT' BY THE NAME OF YOUR FOLDER. 


