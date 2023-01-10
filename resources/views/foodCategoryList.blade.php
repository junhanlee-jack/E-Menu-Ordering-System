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
                background-image:url('https://wallpapercave.com/wp/wp7661110.jpg');
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-position: center;
            }
        </style>

        <title>Category List</title>

    </head>
    <body>
    <div class="row">
    <div class="col-sm-2">&nbsp;</div>
    <div class="col-sm-8">
        <br>
        <h3 style = "color: black;"><Strong>Table of Category List</Strong></h3>
        <table class="table table-bordered" style = "border: 2px solid; color: black;">
            <thead>
                <tr style = "border: 2px solid; color: black;">
                    <td style = "border: 2px solid; color: black;"><Strong>Category ID</Strong></td>
                    <td style = "border: 2px solid; color: black;"><Strong>Category Name</Strong></td>
                    <td style = "border: 2px solid; color: black;"><Strong>Action Button</Strong></td>
                </tr>
            </thead>
            <tbody style = "border: 2px solid; color: black;">
                @foreach($foodCategories as $foodCategory)
                <tr style = "border: 2px solid; color: black;">
                    <td style = "border: 2px solid; color: black;"><Strong>{{$foodCategory->id}}</Strong></td>
                    <td style = "border: 2px solid; color: black;"><Strong>{{$foodCategory->CategoryName}}</Strong></td>
                    <td style = "border: 2px solid; color: black;"><a href="{{route('deleteFoodCategory',['id'=>$foodCategory->id])}}" class="btn btn-danger btn-xs" onClick="return confirm('Do you sure want to delete this category?')">Delete</a>&nbsp;
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="col-sm-2">&nbsp;</div>
    </div>
    </body>
</html>