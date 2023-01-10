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
         .container
         {
            position: absolute;
            left: 38%;
         }
         .button
         {
            background: #fff;
            padding: 30px 20px;
            color: #34495e;
            font-size: 25px;
            font-weight: bolder;
            font-transform: uppercase;
            border-radius: 15px;
            box-shadow: 6px 6px 20px -4px rgba(0,0,0,0.75);
         }
         .button:hover
         {
            background: #34495e;
            color: #fff;
         }
         .payment
         {
            background: rgba(0,0,0,0.6);
            width: 1300px;
            height: 400px;
            position: absolute;
            top: 0;
            display: none;
            justify-content: center;
            align-item: center;
            border-radius: 15px;
         }
         .payment-content
         {
            width: 100%;
            height: 100%;
            background-image:url('https://img.freepik.com/premium-vector/hand-painted-background-violet-orange-colours_23-2148427578.jpg?w=2000');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            padding: 20px;
            border-radius: 15px;
            position: relative;
         }
        </style>

        <title>My cart and Payment</title>
    </head>
    <body>
      <nav class="navbar navbar-expand-lg">
         <a class="navbar-brand" href="{{route('itemPage')}}" style = "color: black">Back To Selecting</a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
         </button>
         </nav>

         <script>
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
            }
         </script>

         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
         <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-10">
               <br><br>
               <div class="table-wrapper">
                  <div class="table-title">
                     <div class="row">
                        <div class="col-sm-8"><h2>My Cart</h2></div>
                        <div class="col-sm-4">                        
                    </div>
                  </div>
               </div>
            <table class="table table-bordered">
               <thead style = "border: 1px solid; color: black;">
                  <tr style = "border: 1px solid; color: black;">
                     <th style = "border: 1px solid; color: black;">&nbsp;</th>
                     <th style = "border: 1px solid; color: black;">Name</th>                        
                     <th style = "border: 1px solid; color: black;">Unit Price</th>                         
                     <th style = "border: 1px solid; color: black;">Quantity</th> 
                     <th style = "border: 1px solid; color: black;">Subtotal</th>                         
                     <th style = "border: 1px solid; color: black;">Actions</th>
                  </tr>
               </thead>
               <form action="{{route('payment.post')}}" method="post" class="require-validation" data-cc-on-file="false" data-stripe-publishable-key="{{ env('STRIPE_KEY') }}" id="payment-form">  
                  @csrf           
                  <tbody style = "border: 1px solid; color: black;">
                  @foreach($carts as $cart)
                     <tr style = "border: 1px solid; color: black;">
                        <td style = "border: 1px solid; color: black;"><input type="checkbox" name="cid[]" id="cid[]" value="{{$cart->cid}}" onclick="cal()"><input type="hidden" name="subtotal[]" id="subtotal[]" value="{{$cart->cartQty*$cart->price}}"></td>
                        <td style = "border: 1px solid; color: black;">{{$cart->name}}</td>                        
                        <td style = "border: 1px solid; color: black;">{{$cart->price}}.00</td>                        
                        <td style = "border: 1px solid; color: black;">{{$cart->cartQty}}</td> 
                        <td style = "border: 1px solid; color: black;">{{$cart->cartQty*$cart->price}}.00</td>                         
                        <td style = "border: 1px solid; color: black;">        							
                           <a href="{{ route('deleteCartItem',['id'=>$cart->id])}}" id= "delete" class="btn btn-danger btn-xs">Delete</a>                        
                        </td>
                     </tr>
                  @endforeach
                     <tr align ="right" style = "border: 1px solid; color: black;">
                        <td colspan="5" style = "border: 1px solid; color: black;">&nbsp;</td>
                        <td style = "border: 1px solid; color: black;">RM<i> </i> <input type="text" value="0" name="sub" id="sub" size="7" readonly /></td>
                        <td style = "border: 1px solid; color: black;">&nbsp;</td>
                     </tr>
                  </tbody>              
            </table>
            <br>
            <br>
            <div class = "container">
               <a href = "#" class = "button" id = "button">Proceed the Payment</a>
            </div>
            </div>
            <script>
               document.getElementById("button").addEventListener("click", function(){
                  document.querySelector(".payment").style.display = "flex";
               });
            </script>
            <div class = "payment">
            <div class = "payment-content">
               <!--<img src = "https://icons.iconarchive.com/icons/iconsmind/outline/512/Close-icon.png" alt = "close" class = "close" id = "close" width = "30" height = "30">-->
               <div class="col-sm-1"></div>
               <div class="col-sm-1"></div>
               <div class="col-sm-10">
                  <div class="row">
                     <div class="col-md-6 col-md-offset-3">
                        <div class="panel panel-default credit-card-box">
                           <div class="panel-heading" >
                              <div class="row">
                                 <br>
                                 <h3>Card Payment</h3>
                              </div>
                           </div>
                           <div class="panel-body">
                              <br>
                              <div class='form-row row'>
                                 <div class='col-xs-12 col-md-6 form-group required'>
                                    <label class='control-label'>Name on Card</label> 
                                    <input class='form-control' size='4' type='text'>
                                 </div>
                                 <div class='col-xs-12 col-md-6 form-group required'>
                                    <label class='control-label'>Card Number</label> 
                                    <input autocomplete='off' class='form-control card-number' size='20' type='text'>
                                 </div>                           
                              </div>                        
                              <div class='form-row row'>
                                 <div class='col-xs-12 col-md-4 form-group cvc required'>
                                    <label class='control-label'>CVC</label> 
                                    <input autocomplete='off' class='form-control card-cvc' placeholder='ex. 311' size='4' type='text'>
                                 </div>
                                 <div class='col-xs-12 col-md-4 form-group expiration required'>
                                    <label class='control-label'>Expiration Month</label> 
                                    <input class='form-control card-expiry-month' placeholder='MM' size='2' type='text'>
                                 </div>
                                 <div class='col-xs-12 col-md-4 form-group expiration required'>
                                    <label class='control-label'>Expiration Year</label> 
                                    <input class='form-control card-expiry-year' placeholder='YYYY' size='4' type='text'>
                                 </div>
                              </div>
                              {{-- <div class='form-row row'>
                              <div class='col-md-12 error form-group hide'>
                                 <div class='alert-danger alert'>Please correct the errors and try again.
                              </div>
                           </div>
                           </div> --}}
                           <div class="form-row row">
                              <div class="col-xs-12">
                                 <button class="btn btn-primary btn-xs btn-block" type="submit">Pay Now</button>
                                 <br>
                                 <a class="btn btn-link" href="{{ route('cart') }}">
                                    Need To Comfirm Again the Item?
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
               <script type="text/javascript">
                  $(function() {
                     var $form = $(".require-validation");
                     $('form.require-validation').bind('submit', function(e) {
                        var $form = $(".require-validation"),
                        inputSelector = ['input[type=email]', 'input[type=password]', 'input[type=text]', 'input[type=file]', 'textarea'].join(', '),
                        $inputs = $form.find('.required').find(inputSelector),
                        $errorMessage = $form.find('div.error'),
                        valid = true;
                        $errorMessage.addClass('hide');
                        $('.has-error').removeClass('has-error');
                        $inputs.each(function(i, el) {
                           var $input = $(el);
                           if ($input.val() === '') {
                              $input.parent().addClass('has-error');
                              $errorMessage.removeClass('hide');
                              e.preventDefault();
                           }
                        });
                        if (!$form.data('cc-on-file')) {
                           e.preventDefault();
                           Stripe.setPublishableKey($form.data('stripe-publishable-key'));
                           Stripe.createToken({
                              number: $('.card-number').val(),
                              cvc: $('.card-cvc').val(),
                              exp_month: $('.card-expiry-month').val(),
                              exp_year: $('.card-expiry-year').val()
                           }, stripeResponseHandler);
                        }
                     });

                     function stripeResponseHandler(status, response) {
                        if (response.error) {
                           $('.error')
                           .removeClass('hide')
                           .find('.alert')
                           .text(response.error.message);
                        }
                        else
                        {
                           /* token contains id, last4, and card type */
                           var token = response['id'];
                           $form.find('input[type=text]').empty();
                           $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                           $form.get(0).submit();
                        }
                     }
                  });
               </script>
            </div>
         </div>
   </body>
</html>



