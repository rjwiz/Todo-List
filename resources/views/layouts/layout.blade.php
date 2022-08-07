<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>COACHTECH</title>

        <!-- Styles -->
        <style>
            html, body {
                font-family: 'Nunito', sans-serif;
                font-weight: 20
            }
            

            ul{
                list-style: none;
            }

            .container{
                background-color: #2d197c;
                height: 100vh;
                width: 100vw;
                position: relative;
            }

            .card{
                background-color: #fff;
                width: 50vw;
                padding: 30px;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                border-radius: 10px;
            }

            .title{
                font-weight: bold;
                font-size: 24px;
            }

            .task-store{
                justify-content: space-between;
                margin-bottom: 30px;
            }

            .task-store__input{
                width: 80%;
                padding: 5px;
                border-radius: 5px;
                border: 1px solid #ccc;
                appearance: none;
                font-size: 14px;
                outline: none;
            }

            .task-store__btn{
                text-align: left;
                border: 2px solid #dc70fa;
                font-size: 12px;
                color: #dc70fa;
                background-color: #fff;
                font-weight: bold;
                padding: 8px 16px;
                border-radius: 5px;
                cursor: pointer;
                transition: 0.4s;
                outline: none;
            }

            table{
                text-align: center;
                width: 100%;
            }

            tr{
                height:50px;
            }


            .task-update{
                width: 90%;
                padding: 5px;
                border-radius: 5px;
                border: 1px solid #ccc;
                appearance: none;
                font-size: 14px;
                outline: none;
            }

            .task-update__input{
                width: 80%;
                padding: 5px;
                border-radius: 5px;
                border: 1px solid #ccc;
                appearance: none;
                font-size: 14px;
                outline: none;
            }

            .task-update__btn{
                text-align: left;
                border: 2px solid #fa9770;
                font-size: 12px;
                color: #fa9770;
                background-color: #fff;
                font-weight: bold;
                padding: 8px 16px;
                border-radius: 5px;
                cursor: pointer;
                transition: 0.4s;
                outline: none;
            }

            .task-delete__btn{
                text-align: left;
                border: 2px solid #00BFFF;
                font-size: 12px;
                color: #00BFFF;
                background-color: #fff;
                font-weight: bold;
                padding: 8px 16px;
                border-radius: 5px;
                cursor: pointer;
                transition: 0.4s;
                outline: none;
            }
            

        </style>
    </head>
    <body>
        <div class="">           

            <div class="container">
                <div class="card">
                    @yield('content')
                </div>
            </div>
        </div>
    </body>
</html>