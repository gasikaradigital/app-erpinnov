<!-- Menu -->
<aside id="layout-menu" class="layout-menu-horizontal menu-horizontal menu bg-menu-theme flex-grow-0">
    <div class="container-xxl d-flex h-100">
        <ul class="menu-inner">
            <!-- Dashboards -->
            <li class="menu-item active">
                <a href="{{ route('espaceClient') }}" class="menu-link">
                    <i class="menu-icon tf-icons ti ti-smart-home"></i>
                    <div data-i18n="Tableau de bord">Tableau de bord</div>
                </a>
            </li>
            <!-- Apps -->
            <li class="menu-item">
                <a href="{{ route('instance.create') }}" class="menu-link">
                    <i class="menu-icon tf-icons ti ti-layout-grid-add"></i>
                    <div data-i18n="Création d'instance">Création d'instance</div>
                </a>
            </li>

            <!-- Ma facturation -->
            <li class="menu-item">
                <a href="{{ route('client.facture') }}" class="menu-link">
                    <i class="menu-icon tf-icons ti ti-layout-sidebar"></i>
                    <div data-i18n="Ma facturation">Ma facturation</div>
                </a>
            </li>

            <!-- Support -->
            <li class="menu-item">
                <a href="javascript:void(0)" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons ti ti-box-multiple"></i>
                    <div data-i18n="Support">Support</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="#" class="menu-link">
                            <i class="menu-icon tf-icons ti ti-lifebuoy"></i>
                            <div data-i18n="FAQ">FAQ</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="#"
                            class="menu-link">
                            <i class="menu-icon tf-icons ti ti-file-description"></i>
                            <div data-i18n="Contact">Contact</div>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</aside>
<!-- / Menu -->
