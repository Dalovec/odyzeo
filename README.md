<div style="width: 80%; margin: auto">

<h1 style="text-shadow: 0 4px 4px rgba(0, 0, 0, 0.25); text-align: center; padding-bottom: 10px; border-bottom: 2px solid">Laravel Ticketing System</h1>
<a href="https://www.figma.com/file/FGcfdvIA9PuSFzTSHa6ngT/Odyzeo"><p style="text-align: center; background-color: #2d3748; padding: 10px; box-shadow: 0 4px 4px rgba(0, 0, 0, 0.25); border-radius: 5px;"><img src="resources/figma.png" width="40"></p></a>

<h2 style="text-shadow: 0 4px 4px rgba(0, 0, 0, 0.25); text-align:center; border-bottom:1px solid; width:80%; margin:auto; padding:10px; margin-bottom:20px;">Installation on Linux</h2>
**Clone repository**

    git clone git@github.com:Dalovec/odyzeo.git
    cd odyzeo

**Setup .env file**
    
    cp .env.example .env



**Edit .env file**

    MAIL_MAILER=smtp
    MAIL_HOST=mailhog
    MAIL_PORT=1025
    MAIL_USERNAME=null
    MAIL_PASSWORD=null
    MAIL_ENCRYPTION=null
    MAIL_FROM_ADDRESS=null
    MAIL_FROM_NAME="${APP_NAME}"

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=laravel
    DB_USERNAME=root
    DB_PASSWORD=

_Tested with MySQL_

**Run installation commands**

    composer install
    php artisan key:generate
    php artisan migrate
    php artisan serve

<h2 style="text-shadow: 0 4px 4px rgba(0, 0, 0, 0.25); text-align:center; border-bottom:1px solid; width:80%; margin:auto; padding:10px; margin-bottom:20px;">Project Orientation</h2>

**Submiting a ticket :**

    localhost/

**All tickets:**

    localhost/tickets - in a real app would be accessible through admin

**Close ticket by clicking on "Open" button**

**You can click on any ticket header to see only the ticket**

<h2 style="text-shadow: 0 4px 4px rgba(0, 0, 0, 0.25); text-align:center; border-bottom:1px solid; width:80%; margin:auto; padding:10px; margin-bottom:20px;">Bugs/Issues/To Do etc.</h2>

- Human centered design:
- - No indication that you can close a ticket
- - Css unconsistent over whole project
- - Mail-template not compatible with Outlook ( tested on Gmail )
- OOP not consistent
- Ticket object is used 'too' liberally
- No url in email to a specific ticket
- No realtime validation - Needs JS
- Single ticket view and multi ticket view are the same:
- - If no tickets exist wrong error is displayed
- Untranslated validation errors

<h3 style="text-shadow: 0 4px 4px rgba(0, 0, 0, 0.25); text-align:center; width:80%; margin:auto; padding:10px; margin-bottom:20px;">Dávid Kolembus 2022</h2>

</div>
