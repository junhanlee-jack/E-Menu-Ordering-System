<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link href="https://fonts.googleapis.com/css2?family=Caveat&family=Dancing+Script&family=Shadows+Into+Light&display=swap" rel="stylesheet">

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
            h5
            {
                color: black;
            }

            nav
            {
                display: flex;
                justify-content: space-around;
                margin: auto;
            }

            a
            {
                position: relative;
                text-decoration: none;
                font-family: 'Roboto Slab', serif;
                color: black;
                font-size: 20px;
                letter-spacing: 2px;
            }
        </style>

        <title>Xun Ta Cafe Menu List</title>

    </head>
    <body>
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="{{route('itemPage')}}">Go to Previous Page</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>
        <br>
        <div class = "col-sm-10" style = "margin-left: 30px;">
            @foreach($items as $item)
                <div class="row" style="margin-top: 50px;">
                    <div class = "col-sm-5">
                        <img src="{{asset('images')}}/{{$item->image}}" alt="" width = 380 height = 350 style = "border: 4px solid; border-style: double;
                            border-radius: 10%;">
                    </div>
                    <div class = "col-sm-6" style = "">
                        <form action ="{{route('addCart')}}" method="post">
                            @csrf
                            <input type="hidden" name="id" value="{{$item->id}}">
                            <h5>Item ID : {{$item->id}}&nbsp;&nbsp;</h5>
                            <br>
                            <h5>{{$item->name}}</h5>
                            <br>
                            <h5>Quantity</h5> <input type="number" name="quantity" value="1" min="1">
                            <br>
                            <div class = "card-heading"><h5>RM {{$item->price}}.00</h5></div>
                            <br><br>
                            <button class="btn btn-danger btn-xs" type="submit">Add to Cart</button>
                        </form>
                    </div>
                </div>
            <br>
            @endforeach
        </div>
        <br>
        <footer style="margin-top: 50px;">
            <div class = "row" style = "background-color: gray;">
                <div class = "col-md-4" style = "margin-top: 20px;">
                    <h6 style = "color: black; margin-left: 10px;">Lee Hybrid Cafe Officially Website</h6>
                    <br>
                    <h6 style = "color: black; margin-bottom: 0px; margin-left: 10px;"><Strong>Copyright &copy; 2022.</Strong></h6>
                    <h6 style = "color: black; margin-left: 10px;"><Strong>All Rights Reserved.</Strong></h6>
                </div>
                <br>
                <div class = "col-md-4" style = "margin-top: 20px;">
                    <h6 style = "color: black;">Menu List</h6>
                    <a href = "{{route('home')}}"><h6 style = "color: black;"><u>Home</u></h6></a>
                    <a href = "{{route('itemPage')}}"><h6 style = "color: black;"><u>Food Menu</u></h6></a>
                </div>
                <br>
                <div class = "col-md-4" style = "margin-top: 20px;">
                    <h6 style = "color: black;">Resource</h6>
                    <div class = "row">
                        <div class = "col-md-3">
                            <a href = "https://www.facebook.com/"><img src = "https://cdn4.iconfinder.com/data/icons/social-media-outline-3/60/Social-01-Facebook-Outline-512.png" alt = "facebook" width = "50" height = "50"></a>
                        </div>
                    <div class = "col-md-3">
                        <a href = "https://www.instagram.com/"><img src = "https://cdn-icons-png.flaticon.com/512/1225/1225830.png?w=360" alt = "facebook" width = "50" height = "50"></a>
                    </div>
                    <div class = "col-md-3">
                        <a href = "https://twitter.com/"><img src = "https://cdn4.iconfinder.com/data/icons/social-media-outline-3/60/Social-02-Twitter-Outline-512.png" alt = "facebook" width = "50" height = "50"></a>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>