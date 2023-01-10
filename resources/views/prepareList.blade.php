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

        <title>Food Preparation List</title>

    </head>
    <body>
        <div class="row">
        <div class="col-sm-2">&nbsp;</div>
        <div class="col-sm-8">
            <br><br>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <td style = "border: 2px solid; color: black;"><Strong>User ID</Strong></td>
                        <td style = "border: 2px solid; color: black;"><Strong>Item ID</Strong></td>
                        <td style = "border: 2px solid; color: black;"><Strong>Total Quantity</Strong></td>
                        <td style = "border: 2px solid; color: black;"><Strong>Date</Strong></td>
                        <td style = "border: 2px solid; color: black;"><Strong>Order ID</Strong></td>

                    </tr>
                </thead>
                <tbody>
                    @foreach($carts as $cart)
                    <tr>
                        <td style = "border: 2px solid; color: black;"><Strong>{{$cart->userID}}</Strong></td>
                        <td style = "border: 2px solid; color: black;"><Strong>{{$cart->itemID}}</Strong></td>
                        <td style = "border: 2px solid; color: black;"><Strong>{{$cart->quantity}}</Strong></td>
                        <td style = "border: 2px solid; color: black;"><Strong>{{$cart->created_at}}</Strong></td>
                        <td style = "border: 2px solid; color: black;"><Strong>{{$cart->orderID}}</Strong></td>



                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-sm-2">&nbsp;</div>
        </div>
    </body>
</html>