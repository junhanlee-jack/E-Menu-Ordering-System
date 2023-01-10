<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <meta charset="utf-8">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

        <style>
            body
            {
                background-image: url("https://img.freepik.com/free-photo/vegetables-set-left-black-slate_1220-685.jpg?w=2000");
            }
        </style>

        <title>Insert Category</title>

    </head>
    <body>
    <div class = "row">
    <div class = "col-sm-2"></div>
    <div class = "col-sm-8" style = "margin-top: 50px;">
        <form action = "{{route('insertNewCategory')}}" method = "post" ><br><br> @csrf
            <h3><Strong>Please Enter Food Category:</Strong><h3><input name = "CategoryName" type = "text" class = "form-control"><br>
            <div class = "row">
                <div class = "col-sm-2">
                    <button type = "submit" class = "btn btn-info">Insert</button><br><br>
                </div>
            </div>
        </form>
    </div>
    <div class = "col-sm-2">&nbsp;</div>
    </div>
    </body>
</html>