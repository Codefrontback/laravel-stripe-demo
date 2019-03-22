@extends('welcome')

@section('content')
    <form action="your-server-side-code" method="POST">
        <script
                src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                data-key="pk_test_kSwMgii9z9pbbeypfctcqPzO"
                data-amount="999"
                data-name="Demo Site"
                data-description="Example charge"
                data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                data-locale="auto">
        </script>
    </form>
@stop