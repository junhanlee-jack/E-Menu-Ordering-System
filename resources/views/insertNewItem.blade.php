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
            h3
            {
                color: black;
                margin-top: 15px;
            }
            h4
            {
                color: #f8f8ff;
            }
        </style>

        <title>Insert New Item</title>

    </head>
    <body>
        <div class="row">
            <div class="col-sm-2">&nbsp;</div>
                <div class="col-sm-8">
                    <form action="{{route('insertNewItem')}}" method="post" enctype="multipart/form-data"><br><br> @csrf
                        <h3><Strong>Add New Item</Strong></h3> <Strong>Name:</Strong> <input name="itemName" type="text" class="form-control"><br>
            
                        <Strong>Description:</Strong><input name="description" type="text" class="form-control"><br>

                        <Strong>Price:</Strong> <input name="price" type="number" class="form-control"><br>
                        
                        <Strong>Quantity:</Strong> <input name="quantity" type="number" class="form-control"><br>

                        <Strong>Image:</Strong> <input name="image" type="file" class="form-control"><br>

                        <Strong>Category:</Strong> <select name="categoryID" id="" class="form-control">
                        <option value="">Select Category</option>
                        <option value="1">Western Food</option>
                        <option value="2">Japanese Food</option>
                        <option value="3">Thai Food</option>
                        <option value="4">Chinese Food</option>
                        <option value="5">Drink</option>
                        <option value="6">Snack</option>
                        </select> <br>           
                        <button type="submit" class="btn btn-info">Insert Item</button><br><br>
                    </form>
                </div>
            <div class="col-sm-2">&nbsp;</div>
        </div>
    </body>
</html>