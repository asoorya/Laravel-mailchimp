<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                //display: table;
                font-weight: 100;
            }

            .container {
                //display: table-cell;
                vertical-align: middle;
                padding: 20px;
            }

            .content {
                //display: inline-block;
            }

            .title {
                font-size: 20px;
            }
            .form input{
                display: table;
            }
            .form label{
                padding: 10px 0;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Add List</div>
                <div class="form">
                {!! Form::open(array('route' => 'mcuser')) !!}
                {!! Form::label('firstname', 'First Name') !!}
                {!! Form::text('firstname') !!}
                
                {!! Form::label('lastname', 'Last Name') !!}
                {!! Form::text('lastname') !!}
                
                {!! Form::label('email', 'Email Address') !!}
                {!! Form::text('email') !!}
                
                {!! Form::label('subscribed', 'Subscribed') !!}
                {!! Form::checkbox('subscribed', 'subscribed') !!}
                
                {!! Form::submit('submit') !!}
                
                {!! Form::close() !!}
            </div>
            </div>
        </div>
    </body>
</html>
