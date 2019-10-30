<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Siwaka Pharmacy</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        
        <style>
            html, body {
                background-color: #fff;
                color: green;
                font-family: 'Roboto', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .wrapper {
                align-items: center;
                display: flex;
                justify-content: center;
                height: 100vh;
                position: relative;
                text-align: center;
            }

           

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

        
            .menu-icon
            {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .logo
            {
                font-size: 50px;
                font-weight: 600;
                color: green;
                text-transform: uppercase;
            }
            .menu
            {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .fa {
                margin-bottom: 30px;
            }
            li a
            {
                color: blue;
                padding: 0 100px;
                font-size: 13px;
            }
        </style>
        
    </head>
    <body>
        <div class="wrapper">
            <header>
               <nav>
                  <div class="menu-icon">
                     <i class="fa fa-bars fa-2x"></i>
                  </div>
                  <div class="logo">
                        Siwaka Pharmacy
                  </div>
                  <div class="menu">
                     <ul>
                        <li><a href="#">Log out</a></li>
                     </ul>
                  </div>
               </nav>
           <br>
           <label for="heading">Siwaka Pharmacy</label><br><br>
           <label>Pharmacist Module</label><br>
           <form action = "AddDrug.html">
               <button>Add Drug</button>
               </form><br>
            <form action  = ViewInventory.html>
                <button>View Inventory</button>
            </form><br>
            <form action = "OrderDrug.html">
                <button>Order Drugs</button>
            </form><br>
         </header>
     </div>
    </body>
</html>