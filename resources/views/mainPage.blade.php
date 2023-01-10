<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link href="https://fonts.googleapis.com/css2?family=Caveat&family=Dancing+Script&family=Roboto+Slab:wght@300&family=Shadows+Into+Light&display=swap" rel="stylesheet">

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

            h2
            {
                font-family: 'Dancing Script', cursive;
                font-size: 40px;
                margin-left: 10px;
            }

            h5
            {
                font-family: 'Roboto Slab', serif;
                color: black;
                font-size: 20px;
                text-align: justify;
            }

            h4
            {
                font-family: 'Roboto Slab', serif;
                ont-size: 21px;
                text-align: justify;
                color: black;
            }
            nav
            {
                display: flex;
                justify-content: space-between;
                margin: auto;
                align-item: justify;
                padding-top: 40px;
                padding-left: 10%;
                padding-right: 10%;
            }

            a
            {
                position: relative;
                text-decoration: none;
                font-family: 'Roboto Slab', serif;
                color: black;
                font-size: 15px;
                letter-spacing: 2px;
                
            }
            header
            {
                margin-top: 20px;
                margin-bottom: 15px;
            }
        </style>

        <title>Main Page</title>

    </head>
    <body>
        <header style = "background-color: ">
            <h2><Strong style = "font-size: 45px; color: black;">Lee Hybrid Cafe Officially Website</Strong></h2>
        </header>

        <nav class="navbar navbar-expand-lg" style = "background-color: ;">
            <a class="navbar-brand" href="">Main Page</a>
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
                    <li class="nav-item">
                        <a href = "{{route('login')}}"><button class="btn btn-primary btn-xs btn-block" type="submit">Login</button></a>
                    </li>
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    &nbsp;
                </ul>
            </div>
            <div>
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
        <div>
            <div class = "col" style = "margin-left: 20px; margin-right: 15px;">
                    
                    <br>
                    <h4>Here already prepare a lot of type which make open to all student can pre-order our food and drink without any services tax.<br></h4>
                    <br>
                    <h4>In our main page, we prepare a lot of various types and the introduction of many kind of food.</h4>
                    <br>
                    <h4>Below is the variety kind of food which is serve in our cafe:</h4>
                </div>
                <br>
                <br>
                <div style = "margin-left: 20px;">
                    <h2 style = "color: black; margin-left: 25px;">Western Food</h2>
                    <div class = "row" style = "margin-left: 10px;">
                        <div class = "col-md-4">
                            <img src = "https://www.travelswithsun.com/wp-content/uploads/Variety-Of-Western-Dishes-At-Kopimeo-Shah-Alam.jpg" width = "420;" height = "330" style = "border: 2px solid white;
                            border-radius: 15px;
                            padding: 3px;
                            width: 420px;">
                        </div>
                        <div class = "col-md-8">
                        <h5>Western Food or Western cuisine is the cuisines of Europe and the other Western country.</h5>
                        <h5>For Asian, the Western Food have a jumbo size, but for them it is only a regular size. The Asian can feel very full with the western size serving, but not for them.</h5></p>
                        <p><h5>And about the food?</h5></p>
                        <p><h5>Western Food can be cooked with simple method people say that you just have to read the cookbook and it is done. It’s not as complicated as Chinese Food. The Western tableware is knife and fork with the food ingredients such as the flour,sugar,butter,etc.</h5></p>
                        </div>
                    </div>
                </div>
                <br>
                <hr style = "color: white;">
                <br>
                <div style = "margin-left: 20px;">
                    <h2 style = "color: black; margin-left: 25px;">Japanese Food</h2>
                    <div class = "row" style = "margin-left: 10px;">
                            <div class = "col-sm-8">
                            <p><h5>The traditional Japanese cuisine is based on the combination of one staple food, and one or more main dish and side dish. Also, clear soup or popular miso soup can be consumed in addition to these. Yet, there is a saying for this: ichiju sansai, which means “one soup, three sides”.</h5></p>
                            <p><h5>A staple food can be rice or noodle and side dishes generally are fish, pickled vegetables or vegetables cooked in broth. Seafood and fishes are very common in Japanese cuisine because the nation consists of many islands which are surrounded by the ocean.</h5></p>
                            <p><h5>Generally, each dish is served in different bowls or plates like the staple food, rice.</h5></p>
                        </div>
                        <div class = "col-sm-4">
                            <img src = "https://restaurantclicks.com/wp-content/uploads/2022/04/Popular-Japanese-Foods.jpg" width = "420;" height = "330" style = "border: 2px solid white;
                            border-radius: 15px;
                            padding: 3px;
                            width: 420px;">
                        </div>
                    </div>
                </div>
                <br>
                <hr style = "color: white;">
                <br>
                <div style = "margin-left: 20px;">
                    <h2 style = "color: black; margin-left: 25px;">Thai Food</h2>
                    <div class = "row" style = "margin-left: 10px;">
                        <div class = "col-sm-4">
                            <img src = "https://www.eatthis.com/wp-content/uploads/sites/4/2020/08/thai-food.jpg?quality=82&strip=1" width = "420;" height = "330" style = "border: 2px solid white;
                            border-radius: 15px;
                            padding: 3px;
                            width: 420px;">
                        </div>
                        <div class = "col-sm-8">
                            <p><h5>What is Thai Food?</h5>
                            <p><h5>Thai food encompasses a wide range of styles from bbq to stir fry, curries to spicy salads, soups to steamed dishes and porridge to crispy insects. Thai food usually has a blend of sour, sweet, salt, and savory tastes plus heat from chilis.</h5></p>
                            <p><h5>Some dishes add a creamy consistency from coconut milk. these tastes are carefully blended to get the perfect balance to serve every taste your tastebuds can sense.</h5></p>
                            <p><h5 >Thai cuisine and the culinary traditions and cuisines of Thailand's neighbors, especially India, Cambodia, Malaysia and Indonesia, have mutually influenced one another over the course of many centuries.</h5></p>
                        </div>
                    </div>
                </div>
                <br>
                <hr style = "color: white;">
                <br>
                <div style = "margin-left: 20px;">
                    <h2 style = "color: black; margin-left: 25px;">Chinese Food</h2>
                    <div class = "row" style = "margin-left: 10px;">
                        <div class = "col-sm-8">
                            <p><h5>A Chinese meal is consisted of two parts: staple food, normally made of rice, noodles or steamed buns, vegetable and meat dishes.</h5></p>
                            <p><h5>This is different from Western meals, which take meat or animal protein as main dish. </h5></p>
                            <p><h5>he primary eating utensils are chopsticks for solid foods and ceramic spoon for soups and congees. </h5></p>
                            <p><h5>In a Chinese meal, everyone will have their own rice bowl; however, the accompanying dishes will be served in communal plates and shared by all people. Normally, the dishes are often eaten together with a mouthful of rice.</h5></p>
                        </div>
                        <div class = "col-sm-4">
                            <img src = "https://cdn-almjc.nitrocdn.com/aZYyrACOqPKwqacflNAAVPArFRYGkpZe/assets/static/optimized/rev-76f8472/wp-content/uploads/2020/02/46d82e1a0b0100936591de3958f3408d.Chinese-food.jpg" width = "420;" height = "330"
                            style = "border: 2px solid white; border-radius: 15px; padding: 3px; width: 420px;">
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <br>
                <div style = "margin-left: 30px;">
                    <div class = "row" style = "margin-left: 20px;">
                        <div class = "col-sm-4">
                            <img src = "https://media.tenor.com/-420uI8y-RkAAAAd/anime-welcome.gif" width = "420;" height = "380"
                            style = "border: 2px solid white; border-radius: 15px; padding: 3px; width: 420px;">
                            <br>
                            <br>
                            <br>
                            <br>
                        </div>
                        <div class = "col-sm-8">
                            <h5 style = "margin-top: 80px">Have you intresting with our food? Click the button below to start your order now!</h5>
                            <br>
                            <a href = "{{route('itemPage')}}"><button class="btn btn-outline-success my-2 my-sm-0" style = "color: black;">Start Order</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <div class = "row" style = "background-color: gray;">
                <div class = "col-md-3" style = "margin-top: 20px; margin-left: 20px;">
                    <h6 style = "color: black;">Lee Hybrid Cafe Officially Website</h6>
                    <br>
                    <h6 style = "color: blac; margin-bottom: 0px"><Strong>Copyright &copy; 2022.</Strong></h6>
                    <h6 style = "color: black;"><Strong>All Rights Reserved.</Strong></h6>
                </div>
                <br>
                <div class = "col-md-3" style = "margin-top: 20px;">
                    <h6 style = "color: black;">Menu List</h6>
                    <a href = "{{route('home')}}"><h6 style = "color: black;"><u>Home</u></h6></a>
                    <a href = "{{route('itemPage')}}"><h6 style = "color: black;"><u>Food Menu</u></h6></a>
                </div>
                <br>
                <div class = "col-md-3" style = "margin-top: 20px;">
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
