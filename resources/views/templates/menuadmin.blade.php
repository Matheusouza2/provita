<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                <a href="/admin"><img src="{{ asset('site/img/logo-white.svg') }}" alt="Logo"></a>
                </div>
                <div class="toggler">
                <a href="#" class="sidebar-hide d-xl-none d-block text-white"><i class="fal fa-times"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-item active">
                <a href="{{ route('adminIndex') }}" class='sidebar-link'>
                    <i class="fas fa-home"></i>
                    <span>Início</span>
                </a>
                </li>
                <li class="sidebar-item">
                <a href="{{ route('pacientes') }}" class='sidebar-link'>
                    <i class="fas fa-procedures"></i>
                    <span>Pacientes</span>
                </a>
                </li>
                <li class="sidebar-item">
                <a href="{{ route('labs') }}" class='sidebar-link'>
                    <i class="fas fa-vial"></i>
                    <span>Laboratórios</span>
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
                            <a href="" class="text-white ml-4 text-sm">Política de Privacidade</a> <a href="" class="text-white ml-4 text-sm">Termos de Uso</a>
                        </div>                        
                    </div>
                </div>
            </footer>
        </div>
    </div>
</div>