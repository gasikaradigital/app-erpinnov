<!-- Create App Modal -->
<div class="modal fade" id="createApp" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-simple modal-upgrade-plan">
        <div class="modal-content p-3 p-md-5">
            <div class="modal-body p-2">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="text-center">
                    <h3 class="mb-2">Créer instance</h3>
                    <p>Fournissez des données avec ce formulaire pour créer instance.</p>
                </div>
                <div id="wizard-create-app" class="bs-stepper vertical mt-2 shadow-none">
                    <div class="bs-stepper-content p-1">
                        <form onSubmit="return false">
                            <!-- Details -->
                            <div id="details" class="content pt-3 pt-lg-0">
                                <div class="mb-3">
                                    <input type="text" class="form-control form-control-lg" id="name_instance"
                                        placeholder="Nom d'instance" />
                                </div>
                                <h5>Catégorie</h5>
                                <ul class="p-0 m-0">
                                    <li class="d-flex align-items-start mb-3">
                                        <div class="badge bg-label-info p-2 me-3 rounded">
                                            <i class="ti ti-file-text ti-md"></i>
                                        </div>
                                        <div class="d-flex justify-content-between w-100">
                                            <div class="me-2">
                                                <h6 class="mb-0">CRM Application</h6>
                                                <small class="text-muted">S'adapte à toutes les entreprises</small>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <div class="form-check form-check-inline">
                                                    <input name="details-radio" class="form-check-input" type="radio"
                                                        value="" />
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-start mb-3">
                                        <div class="badge bg-label-success p-2 me-3 rounded">
                                            <i class="ti ti-shopping-cart ti-md"></i>
                                        </div>
                                        <div class="d-flex justify-content-between w-100">
                                            <div class="me-2">
                                                <h6 class="mb-0">eCommerce Platforms</h6>
                                                <small class="text-muted">Développez votre entreprise</small>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <div class="form-check form-check-inline">
                                                    <input name="details-radio" class="form-check-input" type="radio"
                                                        value="" checked />
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-start">
                                        <div class="badge bg-label-danger p-2 me-3 rounded">
                                            <i class="ti ti-device-laptop ti-md"></i>
                                        </div>
                                        <div class="d-flex justify-content-between w-100">
                                            <div class="me-2">
                                                <h6 class="mb-0">Online Learning platform</h6>
                                                <small class="text-muted">Commencez à apprendre aujourd'hui</small>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <div class="form-check form-check-inline">
                                                    <input name="details-radio" class="form-check-input" type="radio"
                                                        value="" />
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="col-12 d-flex justify-content-center mt-4">
                                    <button class="btn btn-primary btn-next">
                                        <span class="align-middle d-sm-inline-block d-none me-sm-1">Créer instance</span>
                                        <i class="ti ti-arrow-right ti-xs"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ Create App Modal -->
