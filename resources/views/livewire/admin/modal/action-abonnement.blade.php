
   <!-- Two Factor Auth Modal -->

   <div class="modal fade" id="twoFactorAuth" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-simple">
      <div class="modal-content p-3 p-md-5">
        <div class="modal-body">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          <div class="text-center mb-4">
            <h3 class="mb-2">Veuillez sélectionner l'action que vous souhaitez effectuer.</h3>
            <p class="text-muted">
              {{-- You also need to select a method by which the proxy authenticates to the directory serve. --}}
            </p>
          </div>
          <div class="row">


            <div class="col-12 mb-3">
                <div class="form-check custom-option custom-option-basic">
                  <label
                    class="form-check-label custom-option-content ps-3"
                    for="customRadioTemp1"
                    data-bs-target="#twoFactorAuthOne"
                    data-bs-toggle="modal">
                    <input
                      name="customRadioTemp"
                      class="form-check-input d-none"
                      type="radio"
                      value=""
                      id="customRadioTemp1" />
                    <span class="d-flex align-items-start">
                      <i class="ti ti-settings ti-xl me-3"></i>
                      <span>
                        <span class="custom-option-header">
                          <span class="h4 mb-2">Activer/Désactiver l'abonnement</span>
                        </span>
                        <span class="custom-option-body">
                          <span class="mb-0"
                            >Gérez l'activation ou la désactivation de l'abonnement selon les préférences du client.</span
                          >
                        </span>
                      </span>
                    </span>
                  </label>
                </div>
              </div>
          </div>

            <div class="col-12">
              <div class="form-check custom-option custom-option-basic">
                <label
                  class="form-check-label custom-option-content ps-3"
                  for="customRadioTemp2"
                  data-bs-target="#twoFactorAuthTwo"
                  data-bs-toggle="modal">
                  <input
                    name="customRadioTemp"
                    class="form-check-input d-none"
                    type="radio"
                    value=""
                    id="customRadioTemp2" />
                  <span class="d-flex align-items-start">
                    <i class="ti ti-message ti-xl me-3"></i>
                    <span>
                      <span class="custom-option-header">
                        <span class="h4 mb-2">Prolonger la période d'essai</span>
                      </span>
                      <span class="custom-option-body">
                        <span class="mb-0"
                          >Prolongez la période d'essai pour offrir au client plus de temps avant de souscrire.</span
                        >
                      </span>
                    </span>
                  </span>
                </label>
              </div>
            </div> </br></br>


        </div>
      </div>
    </div>
  </div>

  <!-- Modal Authentication App -->
  <div class="modal fade" id="twoFactorAuthOne" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-simple">
      <div class="modal-content p-3 p-md-5">
        <div class="modal-body">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          <div class="text-center mb-2">
            <h3 class="mb-0">Add Authenticator App</h3>
          </div>

          <h5 class="mb-2 pt-1 text-break">Motif :</h5>
          <div class="mb-4">
            <input
              type="email"
              class="form-control"
              id="twoFactorAuthInput"
              placeholder="Enter le motif" />
          </div>

          <h5 class="mb-4">
            Date debut :
          </h5>
          <div class="mb-4">
            <input type="date" class="form-control" id="twoFactorAuthInputSms" placeholder="747 875 3459" />
          </div>

          <h5 class="mb-4">
            Date fin :
          </h5>
          <div class="mb-4">
            <input type="date" class="form-control" id="twoFactorAuthInputSms" placeholder="747 875 3459" />
          </div>


          <div class="text-end">
            <button
              type="button"
              class="btn btn-label-secondary me-sm-3 me-1"
              data-bs-toggle="modal"
              data-bs-target="#twoFactorAuth">
              <i class="ti ti-arrow-left ti-xs me-1 scaleX-n1-rtl"></i
              ><span class="align-middle d-none d-sm-inline-block">Retour</span>
            </button>
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close">
              <span class="align-middle d-none d-sm-inline-block">Confirmer</span
              ><i class="ti ti-arrow-right ti-xs ms-1 scaleX-n1-rtl"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Authentication via SMS -->
  <div class="modal fade" id="twoFactorAuthTwo" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-simple">
      <div class="modal-content p-3 p-md-5">
        <div class="modal-body">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          <h5 class="mb-2 pt-1">Prolonger la période d'essai</h5>
          <p class="mb-4">
            Enter le motif
          </p>
          <div class="mb-4">
            <input type="text" class="form-control" id="twoFactorAuthInputSms" placeholder="Entre le motif" />
          </div>

          <p class="mb-4">
            Date debut
          </p>
          <div class="mb-4">
            <input type="date" class="form-control" id="twoFactorAuthInputSms" placeholder="747 875 3459" />
          </div>

          <p class="mb-4">
            Date fin
          </p>
          <div class="mb-4">
            <input type="date" class="form-control" id="twoFactorAuthInputSms" placeholder="747 875 3459" />
          </div>


          <div class="text-end">
            <button
              type="button"
              class="btn btn-label-secondary me-sm-3 me-1"
              data-bs-toggle="modal"
              data-bs-target="#twoFactorAuth">
              <i class="ti ti-arrow-left ti-xs me-1 scaleX-n1-rtl"></i
              ><span class="align-middle d-none d-sm-inline-block">Retour</span>
            </button>
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close">
              <span class="align-middle d-none d-sm-inline-block">Confirmer</span
              ><i class="ti ti-arrow-right ti-xs ms-1 scaleX-n1-rtl"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>



  <!--/ Two Factor Auth Modal -->
