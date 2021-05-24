<input type="hidden" name="" id="customFile">
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
                <li class="sidebar-item" id="usuario">
                    <a href="/usuario" class='sidebar-link'>
                        <i class="fas fa-home"></i>
                        <span>Início</span>
                    </a>
                </li>
                <li class="sidebar-item" id="exm">
                    <a href="{{ route('examesUser') }}" class='sidebar-link'>
                        <i class="fal fa-notes-medical"></i>
                        <span>Exames</span>
                    </a>
                </li>
                <li class="sidebar-item" id="primeira-dose">
                    <a href="{{ route('dose1') }}" class='sidebar-link'>
                        <i class="fal fa-syringe"></i><sup>1</sup>
                        <span>Covid 1ª Dose</span>
                    </a>
                </li>
                <li class="sidebar-item" id="segunda-dose">
                    <a href="{{ route('dose2') }}" class='sidebar-link'>
                        <i class="fal fa-syringe"></i><sup>2</sup>
                        <span>Covid 2ª Dose</span>
                    </a>
                </li>
                <li class="sidebar-item" id="carteira-vacinacao">
                    <a href="{{ route('carteiraVacina') }}" class='sidebar-link'>
                        <i class="fal fa-file-medical-alt"></i>
                        <span>Carteira de Vacinação</span>
                    </a>
                </li>
                <li class="sidebar-item" id="informacoes">
                    <a href="{{ route('perfilUser') }}" class='sidebar-link'>
                        <i class="fal fa-user"></i>
                        <span>Meus Dados</span>
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