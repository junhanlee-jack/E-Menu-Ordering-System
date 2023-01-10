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

        <title>Order Record List</title>

    </head>
    <body>
        <div class="row">
        <div class="col-sm-2">&nbsp;</div>
        <div class="col-sm-8">
            <br><br>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <td style = "border: 2px solid; color: black;"><Strong>Order ID</Strong></td>
                        <!--<td style = "border: 2px solid; color: black;"><Strong>User Name</Strong></td>-->
                        <td style = "border: 2px solid; color: black;"><Strong>Date</Strong></td>
                        <!--<td style = "border: 2px solid; color: black;"><Strong>Item Name</Strong></td>-->
                        <td style = "border: 2px solid; color: black;"><Strong>Payment</Strong></td>
                        <td style = "border: 2px solid; color: black;"><Strong>Amount ( RM )</Strong></td>

                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $order)
                    <tr>
                        <td style = "border: 2px solid; color: black;"><Strong>{{$order->id}}</Strong></td>
                        <!--<td style = "border: 2px solid; color: black;"><Strong>{{$order->userName}}</Strong></td>-->
                        <td style = "border: 2px solid; color: black;"><Strong>{{$order->orderDate}}</Strong></td>
                        <!--<td style = "border: 2px solid; color: black;"><Strong>{{$order->itemName}}</Strong></td>-->
                        <td style = "border: 2px solid; color: black;"><Strong>{{$order->paymentStatus}}</Strong></td>
                        <td style = "border: 2px solid; color: black;"><Strong>{{$order->amount}}.00</Strong></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-sm-2">&nbsp;</div>
        </div>
    </body>
</html>