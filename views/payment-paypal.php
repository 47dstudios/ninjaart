<!DOCTYPE html>
<html>
<head>
  <title>Payment | Ninja Art Online Junior Track</title>
<head>
  <meta charset="utf-8">
  <script src="https://js.braintreegateway.com/web/dropin/1.23.0/js/dropin.min.js"></script>
</head>
<body>
  <div id="dropin-container">
    
    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
    <input type="hidden" name="cmd" value="_s-xclick">
    <input type="hidden" name="hosted_button_id" value="VZKBE9JD2CAT2">
    <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
    <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
    </form>

          
          

  </div>





<!--



  <button id="submit-button">Request payment method</button>






  <script>
    var button = document.querySelector('#submit-button');

    braintree.dropin.create({
      authorization: 'CLIENT_TOKEN_FROM_SERVER',
      container: '#dropin-container'
    }, function (createErr, instance) {
      button.addEventListener('click', function () {
        instance.requestPaymentMethod(function (err, payload) {
          // Submit payload.nonce to your server
        });
      });
    });
  </script>

 Promises 

  <script>
    
    braintree.dropin.create({
      authorization: CLIENT_TOKEN_FROM_SERVER,
      container: '#dropin-container'
    }).then(function (instance) {
      /* ... */
    });

  </script> -->
</body>
</html>