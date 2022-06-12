@extends('frontend.base.base', ['title' => 'Nwanyepote | '] )

@section('css_js_header')
{{-- css ou js spécifique à la page --}}
<meta name="csrf-token" content="{{ csrf_token() }}">
<script src="https://js.stripe.com/v3/"></script>
@endsection


@section('content')

<section class="wrapper bg-dark">
    <div class="container py-12 py-md-16 text-center">
        <div class="row">
            <div class="col-lg-10 col-xxl-8 mx-auto">
                <h1 class="display-1 mb-3 text-blue">Paiement par carte</h1>
                <p class="lead fs-lg px-lg-10 px-xxl-8 text-white">éffectuez des paiements sécurisé sur cette page de notre boutique.</p>
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /section -->

<section class="wrapper bg-light">
    <div class="container py-14 py-md-8">
        <div class="row mt-6 col-6 mx-auto">
            
            <form method="POST" action="{{route('stripe.pay')}}" id="payment-form" class=" my-4">
                @csrf

                <h4>Formulaire de paiement par carte de credit</h4>
                <p class="result-message hidden">
                    Entrez les informations de votre carte et procédez au paiement.
                </p>

                <div id="card-element">
                  <!--Stripe.js injects the Card Element-->
                </div>
      
                <p id="card-error" class="mt-4" role="alert">
      
                </p>
      
                <button id="submit" class="btn btn-success mt-4">
                  <div class="spinner hidden" id="spinner"></div>
                  <span id="button-text">Proceder au paiement : ({{session()->get('total')}} XFA)</span>
                </button>
      
                <p class="result-message hidden">
                    Le paiement a réussi, consultez le résultat dans votre
                    <a href="" target="_blank">tableau de bord Stripe.</a> Actualisez la page pour payer
                    à nouveau.
                </p>
              </form>
            
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->

   
</section>
<!-- /section -->

@endsection
        
@section('js_footer')
    {{-- ajouter du js spécifique à la page --}}

    <script>
        var stripe = Stripe("pk_test_51JBhw3IdFQI46cgXih9TnOUDwTVn9rovpGP4Rponmu5qaNb1Y4SabQZrlhACArg6f1Z86FrLTcLMXFOBjM7hhTE100mN237oxt");
            var elements = stripe.elements();
    
            var style = {
                base: {
                    color: "#32325d",
                    fontFamily: 'Arial, sans-serif',
                    fontSmoothing: "antialiased",
                    fontSize: "16px",
                    "::placeholder": {
                    color: "#32325d"
                    }
                },
                invalid: {
                    fontFamily: 'Arial, sans-serif',
                    color: "#fa755a",
                    iconColor: "#fa755a"
                }
                };
    
                var card = elements.create("card", { style: style });
                // Stripe injects an iframe into the DOM
                card.mount("#card-element");
    
                card.on("change", function (event) {
                // Disable the Pay button if there are no card details in the Element
                document.querySelector("button").disabled = event.empty;
                document.querySelector("#card-error").textContent = event.error ? event.error.message : "";
    
                const displayError = document.querySelector("#card-error");
    
                if (event.error) {
                    document.querySelector("#card-error").textContent=event.error.message;
                    displayError.classList.add('alert', 'alert-danger');
                    
                } else {
                    displayError.classList.remove('alert', 'alert-danger');
                    document.querySelector("#card-error").textContent="";
                }
                
        });
    
    
    
        var form = document.getElementById('payment-form');
        var submitButton=document.getElementById('submit');
    
        form.addEventListener('submit', function(ev) {
        ev.preventDefault();
        submitButton.disabled=true;
        // If the client secret was rendered server-side as a data-secret attribute
        // on the <form> element, you can retrieve it here by calling `form.dataset.secret`
        stripe.confirmCardPayment("{{session()->get('clientSecret')}}", {
            payment_method: {
            card: card,
            }
        }).then(function(result) {
        submitButton.disabled=false;
    
            if (result.error) {
            const displayError = document.querySelector("#card-error");
            // Show error to your customer (e.g., insufficient funds)
            console.log(result.error.message);
            document.querySelector("#card-error").textContent=result.error.message;
            displayError.classList.add('alert', 'alert-danger');
    
            } else {
            // The payment has been processed!
            if (result.paymentIntent.status === 'succeeded') {
                
            var paymentIntent=result.paymentIntent;
            var token = document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            var form=document.getElementById('payment-form');
            var url=form.action;
            var urlSuccess='/reponse-de-paiement-stripe';
            
            
    
            fetch(
                url,
                {
                    headers: {
                    "Content-Type": "application/json",
                    "Accept": "application/json, text-plain, */*",
                    "X-Requested-with": 'XMLHttpRequest',
                    "X-CSRF-TOKEN": token,
                },
                method: 'post',
                body: JSON.stringify({
                    paymentIntent: paymentIntent
                })
                }
            )
            .then(
                (data)=>{
                    console.log(data);
                    window.location.href=urlSuccess;
                })
            .catch((error)=>{
                    console.log(error)
                });
            }
            }
        });
        });
    
    
    
    /* ------- UI helpers ------- */
    // Shows a success message when the payment is complete
    var orderComplete = function(paymentIntentId) {
      loading(false);
      document
        .querySelector(".result-message a")
        .setAttribute(
          "href",
          "https://dashboard.stripe.com/test/payments/" + paymentIntentId
        );
      document.querySelector(".result-message").classList.remove("hidden");
      document.querySelector("button").disabled = true;
    };
    
    
    // Show the customer the error from Stripe if their card fails to charge
    var showError = function(errorMsgText) {
      loading(false);
      var errorMsg = document.querySelector("#card-error");
      errorMsg.textContent = errorMsgText;
      setTimeout(function() {
        errorMsg.textContent = "";
      }, 4000);
    };
    // Show a spinner on payment submission
    var loading = function(isLoading) {
      if (isLoading) {
        // Disable the button and show a spinner
        document.querySelector("button").disabled = true;
        document.querySelector("#spinner").classList.remove("hidden");
        document.querySelector("#button-text").classList.add("hidden");
      } else {
        document.querySelector("button").disabled = false;
        document.querySelector("#spinner").classList.add("hidden");
        document.querySelector("#button-text").classList.remove("hidden");
      }
    };
    
    </script>
@endsection