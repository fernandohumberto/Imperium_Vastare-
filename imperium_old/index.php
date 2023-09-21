<?php
session_start();
if ($_SESSION['id'] == '' || $_SESSION['id'] == NULL) {
    unset($_SESSION['id']);
    header("location: login.php");
} elseif (isset($_SESSION['id'])) {
}


?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- Meu CSS -->
    <link rel="stylesheet" href="style.css">

    <title>Imperium Vastare</title>
</head>

<body>


    <!-- BARRA LATERAL -->
    <section id="sidebar">
        <a href="#" class="brand">
            <i class='bx bxs-coin'></i>
            <span class="text">Imperium Vastare</span>
        </a>
        <br>

        <ul class="side-menu top">
            <li class="active">
                <a href="#">
                    <i class='bx bxs-dashboard'></i>
                    <span class="text">Painel de Controle</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-grid'></i>
                    <span class="text">Meus Gastos</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-message'></i>
                    <span class="text">Forúm</span>
                </a>
            </li>

            <!-- 			<li>
				<a href="#">
					<i class='bx bxs-message-dots'></i>
					<span class="text">Mensagens</span>
				</a>
			</li> -->
            <li>
                <a href="#">
                    <i class='bx bxs-group'></i>
                    <span class="text">Equipe</span>
                </a>
            </li>
        </ul>
        <ul class="side-menu">
            <li>
                <a href="#">
                    <i class='bx bxs-cog'></i>
                    <span class="text">Configurações</span>
                </a>
            </li>
            <li>
                <a href="config/sair.php" class="logout">
                    <i class='bx bxs-log-out-circle'></i>
                    <span class="text">Sair</span>
                </a>
            </li>
            <hr style="color:yellow">
            <li>
                <b style="color: white">Bem vindo,&nbsp;&nbsp;<?php echo $_SESSION['user']  ?></b>
            </li>
        </ul>
    </section>
    <!-- BARRA LATERAL -->


    <!-- CONTEÚDO -->
    <section id="content">
        <!-- BARRA DE NAVEGAÇÃO -->
        <nav>
            <i class='bx bx-menu'></i>

            <form action="#">
                <div class="form-input">
                    <input type="search" placeholder="Buscar...">
                    <button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
                </div>
            </form>

            <input type="checkbox" id="switch-mode" hidden>
            <label for="switch-mode" class="switch-mode"></label>

            <a href="#" class="profile">
                <!-- 	<img src=""> --> <!-- add o icone -->
            </a>

            <ul>
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                    <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                        <div class="avatar avatar-online">
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a class="dropdown-item" href="#">
                                <div class="d-flex">
                                    <div class="flex-shrink-0 me-3">
                                        <div class="avatar avatar-online">

                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <span class="fw-semibold d-block">John Doe</span>
                                        <small class="text-muted">Admin</small>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <div class="dropdown-divider"></div>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                <i class="bx bx-user me-2"></i>
                                <span class="align-middle">Meu Perfil</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                <i class="bx bx-cog me-2"></i>
                                <span class="align-middle">Configurações</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                <span class="d-flex align-items-center align-middle">
                                    <i class="flex-shrink-0 bx bx-credit-card me-2"></i>
                                    <span class="flex-grow-1 align-middle">Billing</span>
                                    <span class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>
                                </span>
                            </a>
                        </li>
                        <li>
                            <div class="dropdown-divider"></div>
                        </li>
                        <li>
                            <a class="dropdown-item" href="auth-login-basic.html">
                                <i class="bx bx-power-off me-2"></i>
                                <span class="align-middle">Log Out</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- BARRA DE NAVEGAÇÃO -->

        <!-- PRINCIPAL -->


        <main>
            <div class="head-title">
                <div class="left">
                    <h1>Área de Aprendizagem</h1>
                </div>
            </div>

            <ul class="box-info">
                <li>
                    <i class='bx bxs-calendar-check'></i>
                    <span class="text">
                        <h3>1020</h3>
                        <p>Genrencie Seus Gastos</p>
                    </span>
                </li>
                <li>
                    <i class='bx bxs-group'></i>
                    <span class="text">
                        <h3>2834</h3>
                        <p>Visitantes</p>
                    </span>
                </li>
                <li>
                    <i class='bx bxs-dollar-circle'></i>
                    <span class="text">
                        <h3>
                            <span id="dollar-value"></span>
                        </h3>



                        <p>Valor do Dolar</p>
                    </span>
                </li>
            </ul>

            <div class="table-data">
                <div class="order">

                    <h1>O bom uso do cartão de Credito</h1>

                    <p>O cartão de crédito é uma ferramenta que facilita as compras, mas também exige cuidado e
                        planejamento. Se usado com responsabilidade, pode trazer benefícios e comodidade. Se usado
                        sem controle, pode gerar dívidas e problemas financeiros.</p>
                    <span class="container_button"><button class="button">Saiba Mais</button></span>
                </div>

                <div class="order">
                    <h1>O bom uso do cartão de Credito</h1>

                    <p>O cartão de crédito é uma ferramenta que facilita as compras, mas também exige cuidado e
                        planejamento. Se usado com responsabilidade, pode trazer benefícios e comodidade. Se usado
                        sem controle, pode gerar dívidas e problemas financeiros.</p>
                    <span class="container_button"><button class="button">Saiba Mais</button></span>
                </div>

                <div class="order">
                    <h1>O bom uso do cartão de Credito</h1>

                    <p>O cartão de crédito é uma ferramenta que facilita as compras, mas também exige cuidado e
                        planejamento. Se usado com responsabilidade, pode trazer benefícios e comodidade. Se usado
                        sem controle, pode gerar dívidas e problemas financeiros.</p>
                    <span class="container_button"><button class="button">Saiba Mais</button></span>
                </div>

                <div class="order">
                    <h1>O bom uso do cartão de Credito</h1>

                    <p>O cartão de crédito é uma ferramenta que facilita as compras, mas também exige cuidado e
                        planejamento. Se usado com responsabilidade, pode trazer benefícios e comodidade. Se usado
                        sem controle, pode gerar dívidas e problemas financeiros.</p>
                    <span class="container_button"><button class="button">Saiba Mais</button></span>
                </div>

                <div class="order">
                    <h1>O bom uso do cartão de Credito</h1>

                    <p>O cartão de crédito é uma ferramenta que facilita as compras, mas também exige cuidado e
                        planejamento. Se usado com responsabilidade, pode trazer benefícios e comodidade. Se usado
                        sem controle, pode gerar dívidas e problemas financeiros.</p>
                    <span class="container_button"><button class="button">Saiba Mais</button></span>
                </div>

                <div class="order">
                    <h1>O bom uso do cartão de Credito</h1>

                    <p>O cartão de crédito é uma ferramenta que facilita as compras, mas também exige cuidado e
                        planejamento. Se usado com responsabilidade, pode trazer benefícios e comodidade. Se usado
                        sem controle, pode gerar dívidas e problemas financeiros.</p>
                    <span class="container_button"><button class="button">Saiba Mais</button></span>
                </div>

                <div class="order">
                    <h1>O bom uso do cartão de Credito</h1>

                    <p>O cartão de crédito é uma ferramenta que facilita as compras, mas também exige cuidado e
                        planejamento. Se usado com responsabilidade, pode trazer benefícios e comodidade. Se usado
                        sem controle, pode gerar dívidas e problemas financeiros.</p>
                    <span class="container_button"><button class="button">Saiba Mais</button></span>
                </div>

                <div class="order">
                    <h1>O bom uso do cartão de Credito</h1>

                    <p>O cartão de crédito é uma ferramenta que facilita as compras, mas também exige cuidado e
                        planejamento. Se usado com responsabilidade, pode trazer benefícios e comodidade. Se usado
                        sem controle, pode gerar dívidas e problemas financeiros.</p>
                    <span class="container_button"><button class="button">Saiba Mais</button></span>
                </div>

                <div class="order">
                    <h1>O bom uso do cartão de Credito</h1>

                    <p>O cartão de crédito é uma ferramenta que facilita as compras, mas também exige cuidado e
                        planejamento. Se usado com responsabilidade, pode trazer benefícios e comodidade. Se usado
                        sem controle, pode gerar dívidas e problemas financeiros.</p>
                    <span class="container_button"><button class="button">Saiba Mais</button></span>
                </div>


        </main>
        
        <!-- PRINCIPAL -->
    </section>
    <!-- CONTEÚDO -->


    <script src="script.js"></script>
    <script src="API.js"></script>
</body>

</html>