<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> Thank you for contacting Happyshop <br>
                   
                    Dear {!!$name!!} ,<br>
                    Thank you for reaching out to us at Happyshop. We have received your message<br>
                     and we appreciate your interest in our products/services.<br>

We will review your inquiry and get back to you as soon as possible. Our team typically<br>
 responds within 4 jure,but please note that response times may vary <br>
depending on the complexity of your request.<br>

In the meantime, you can find more information about our products/services on our<br>
 website www.Happyshop.com or on our social media pages Happyshop.<br>

If you have any urgent matters that require immediate attention, please don't hesitate to <br>
give us a call at +2126754326178.<br>

Thank you again for choosing Happyshop. We look forward to assisting you.<br>

Best regards,<br>

Team Happyshop<br>

Happyshop
                </div>
                  <div class="card-body">
                   @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                           {{ __('A fresh mail has been sent to your email address.') }}
                       </div>
                   @endif
               </div>
           </div>
       </div>
   </div>
</div>