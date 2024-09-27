<div class="container-xxl flex-grow-1 container-p-y">
    <div class="shadow-sm card">
        <div class="row g-0">
            <div class="col-lg-7 border-end">
                <div class="p-4 card-body">
                    <h4 class="mb-3">Checkout</h4>

                    @if(!$plan)
                    <p class="text-danger">Plan non trouvé. Veuillez sélectionner un plan valide.</p>
                    @endif

                    <div class="mb-4">
                        <p class="mb-2">We accept the following cards:</p>
                        <div class="gap-2 d-flex">
                            <img src="{{ asset('assets/img/icons/payments/visa.png') }}" alt="Visa" height="30">
                            <img src="{{ asset('assets/img/icons/payments/mastercard.png') }}" alt="Mastercard"
                                height="30">
                            <img src="{{ asset('assets/img/icons/payments/amex.png') }}" alt="American Express"
                                height="30">
                        </div>
                    </div>

                    <h5 class="mb-3">Credit Card Info</h5>
                    @if($plan)
                    <form id="payment-form" wire:submit.prevent="processPayment">
                        <h5 class="mb-3">Durée de l'abonnement</h5>
                        <div class="form-group">
                            <label for="months" class="form-label">Nombre de mois</label>
                            <select id="months" class="form-select" wire:model="months">
                                @for ($i = 1; $i <= 12; $i++) <option value="{{ $i }}">{{ $i }} mois</option>
                                    @endfor
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="cardNumber" class="form-label">Card number</label>
                            <input type="text" class="form-control" id="cardNumber" wire:model.defer="cardNumber"
                                placeholder="1234 5678 9012 3456">
                            @error('cardNumber') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="cardName" class="form-label">Name on card</label>
                                <input type="text" class="form-control" id="cardholderName" wire:model.defer="cardholderName" placeholder="John Doe">
                                @error('cardholderName') <span class="text-danger">{{ $message }}</span> @enderror
                                @error('cardName') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-md-3">
                                <label for="cardExpiry" class="form-label">Expiry date</label>
                                <input type="text" class="form-control" id="cardExpiry" wire:model.defer="cardExpiry"
                                    placeholder="MM/YY">
                                @error('cardExpiry') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-md-3">
                                <label for="cardCVC" class="form-label">CVV</label>
                                <input type="text" class="form-control" id="cardCVC" wire:model.defer="cardCVC"
                                    placeholder="123" maxlength="3">
                                @error('cardCVC') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </form>
                    @endif
                </div>
            </div>

            <div class="col-lg-5">
                <div class="p-4 card-body">
                    <h4 class="mb-3">Order Summary</h4>
                    @if($plan)
                    <div class="p-3 mb-3 rounded bg-light">
                        <p class="mb-1">{{ $plan->name }}</p>
                        <h3 class="mb-2">{{ $plan->price }}€ <small class="text-muted">/month</small></h3>
                        <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal"
                            data-bs-target="#pricingModal">
                            Change Plan
                        </button>
                    </div>
                    <div class="mb-3">
                        <div class="mb-1 d-flex justify-content-between">
                            <span>Subtotal</span>
                            <span>{{ $plan->price }}€</span>
                        </div>
                        <div class="mb-1 d-flex justify-content-between">
                            <span>Tax</span>
                            <span>0€</span>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between">
                            <strong>Total</strong>
                            <strong>{{ $plan->price }}€</strong>
                        </div>
                    </div>
                    <button id="payment-button" type="button" class="btn btn-primary w-100">Payer {{ $plan->price
                        }}€</button>
                    @else
                    <p class="text-danger">Aucun plan sélectionné.</p>
                    @endif
                    <p class="mt-3 small text-muted">By continuing, you accept our Terms of Services and Privacy Policy.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
    var paymentButton = document.getElementById('payment-button');
    var paymentForm = document.getElementById('payment-form');

    if (paymentButton && paymentForm) {
        paymentButton.addEventListener('click', function() {
            paymentForm.dispatchEvent(new Event('submit'));
        });
    }
});
</script>

