<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                <a href="/admin"><img src="{{ asset('site/img/logo-white.svg') }}" alt="Logo"></a>
                </div>
                <div class="toggler">
                <a href="javascript:void(0)" class="sidebar-hide d-xl-none d-block text-white"><i class="fal fa-times"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-item" id="admin">
                <a href="{{ route('adminIndex') }}" class='sidebar-link'>
                    <i class="fas fa-home"></i>
                    <span>Início</span>
                </a>
                </li>
                <li class="sidebar-item" id="pacientes">
                <a href="{{ route('pacientes') }}" class='sidebar-link'>
                    <i class="fas fa-procedures"></i>
                    <span>Pacientes</span>
                </a>
                </li>
                <li class="sidebar-item" id="labs">
                <a href="{{ route('labs') }}" class='sidebar-link'>
                    <i class="fas fa-vial"></i>
                    <span>Laboratórios</span>
                </a>
                </li>
                <li class="sidebar-item" id="meds">
                    <a href="{{ route('medicoIndex') }}" class='sidebar-link'>
                        <i class="fas fa-user-md"></i>
                        <span>Médicos</span>
                    </a>
                    </li>
                    <li class="sidebar-item" id="farma">
                        <a href="{{ route('farmaciaIndex') }}" class='sidebar-link'>
                            <i class="fas fa-pills"></i>
                            <span>Farmácias</span>
                        </a>
                        </li>
                <li class="sidebar-item" id="publicidade">
                    <a href="{{ route('pubView') }}" class='sidebar-link'>
                        <i class="fas fa-bullhorn"></i>
                        <span>Publicidade</span>
                    </a>
                    </li>
                <li class="sidebar-item">
                <a href="/logout" class='sidebar-link'>
                    <i class="fal fa-sign-out"></i>
                    <span>Sair</span>
                </a>
                </li>
            </ul>
            <footer style="position: fixed;  bottom: 0;">
                <div class="footer clearfix mb-0 text-muted">
                    <div class="row">
                        <div class="float-start">
                            <a href="https://api.whatsapp.com/send?phone=5511978101120&text=Olá%20Provita%20pode%20me%20ajudar%20?" class="text-white ml-4 text-sm" target="_blank">
                                <i class="fab fa-whatsapp"></i> (11) 9 4730-3098
                            </a>
                            <a href="" class="text-white ml-4 text-sm">Termos de Uso</a>
                        </div>                        
                    </div>
                </div>
            </footer>
        </div>
    </div>
</div>