<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link href="https://fonts.googleapis.com/css2?family=Caveat&family=Dancing+Script&family=Shadows+Into+Light&display=swap" rel="stylesheet">

        <meta charset="utf-8">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

        <script> //cart script
            function cal(){
                var names=document.getElementsByName('subtotal[]');
                var subtotal=0;
                var cboxes=document.getElementsByName('cid[]');
                var len=cboxes.length;
                for(var i=0;i<len;i++){
                    if(cboxes[i].checked){
                        subtotal=parseFloat(names[i].value)+parseFloat(subtotal);
                    }
                }
                document.getElementById('sub').value=subtotal.toFixed(2);
            } //end cart script
        </script>

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
            h2
            {
                color: black;
                margin-left: 15px;
                margin-top: 10px;
                margin-bottom: 10px;
            }
            .itemDetails
            {
                background: rgba(0,0,0,0.6);
                width: 1300px;
                height: 570px;
                position: absolute;
                top: 20%;
                margin-left: 40px;
                display: none;
                justify-content: center;
                align-item: center;
                border-radius: 15px;
            }
            .itemDetails-content
            {
            width: 100%;
            height: 100%;
            background: #fff;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            padding: 20px;
            border-radius: 15px;
            position: relative;
            }
        </style>

        <title>Xun Ta Cafe Menu List</title>

    </head>
    <body>
        @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
        {{Session::get('success')}}
        </div>
        @endif
        <header>
            <h2>Menu List</h2>
        </header>
        <nav class="navbar navbar-expand-lg" style = "">
            <a class="navbar-brand" href="{{ url('/') }}">Main Page</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('home')}}">Home</a>
                    </li>
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{route('itemPage')}}">
                            Food Menu
                        </a>
                    </li>
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    &nbsp;
                </ul>
            </div>
            <div style = "margin-right: 10px;">
                <form class="form-inline my-2 my-lg-0" method="post" action="{{route('searchItem')}}">
                        @csrf
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="keyword">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    @guest
                    @else
                    <button type="button" class="btn btn-success" onClick="location.href='{{route('cart')}}'">My Cart<span class="badge bg-danger">{{Session()->get('cartItem')}}</span></button>
                    @endguest
                </form>
            </div>
        </nav>
        <br>
        <div class = "col-sm-2"></div>
        <div class = "col-sm-8" style="margin: auto; border: 2px solid; border-style: double;">
            <div class = "row">
                @foreach($items as $item)
                <div class = "col-sm-7">
                    <div class = "card-body">
                        <br>
                        <a href = "{{route('itemInformation',['id'=>$item->id])}}">
                            <img src = "{{asset('images')}}/{{$item->image}}" class = "image" width = 320 height = 220 style = "border: 4px solid; border-style: double;
                            border-radius: 10%;">
                        </a>
                    </div>
                </div>
                <div class = "col-sm-5">
                    <div>
                        <br>
                        <br>
                        <h5 class = "card-title">ID: {{$item->id}}&nbsp;&nbsp;{{$item->name}}</h5>
                        <br>
                        <h5>Item Status: <u style = "color: black">{{$item->description}}</u></h5>
                        <br>
                        <h5><div class = "card-heading">RM {{$item->price}}.00</div></h5>
                        <br>
                    </div>
                </div>
                @endforeach
                <div class = "col-sm-3">
                    <br>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <div class = "row" style = "background-color: gray; margin-bottom: 0%;">
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
        </div>
    </body>
</html>
