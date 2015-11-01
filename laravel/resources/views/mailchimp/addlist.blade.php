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
                {!! Form::open(array('route' => 'list')) !!}
                {!! Form::label('listname', 'List Name') !!}
                {!! Form::text('listname') !!}
                
                {!! Form::label('company', 'Company') !!}
                {!! Form::text('company') !!}
                
                {!! Form::label('address1', 'Address 1') !!}
                {!! Form::text('address1') !!}
                
                {!! Form::label('address2', 'Address 2') !!}
                {!! Form::text('address2') !!}
                
                {!! Form::label('city', 'City') !!}
                {!! Form::text('city') !!}
                
                {!! Form::label('state', 'State') !!}
                {!! Form::text('state') !!}
                
                {!! Form::label('zip', 'Zip') !!}
                {!! Form::text('zip') !!}
                
                {!! Form::label('country', 'Country') !!}
                {!! Form::text('country') !!}
                
                {!! Form::label('phone', 'Phone') !!}
                {!! Form::text('phone') !!}
                
                {!! Form::submit('submit') !!}
                
                {!! Form::close() !!}
            </div>
            </div>
        </div>
    </body>
</html>
