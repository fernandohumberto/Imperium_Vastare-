<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Imperium Vastare - Controle seus gastos</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

    <!-- Icons. Uncomment required icon fonts -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- Core CSS -->
    <link rel="stylesheet" href="../css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../css/demo.css" />
    <link rel="stylesheet" href="../css/cards.css">
    <link rel="stylesheet" href="CartaoCredito.php">



    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="js/config.js"></script>
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo">
                    <a href="../index.php" class="app-brand-link">
                        <span class="app-brand-logo demo">
                            <i><img src="../img/favicon-aba.svg" alt=""></i>
                        </span>
                        <span class="app-brand-text demo menu-text fw-bolder ms-2">Imperium <br>Vastare </span>
                    </a>

                    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                        <i class="bx bx-chevron-left bx-sm align-middle"></i>
                    </a>
                </div>

                <div class="menu-inner-shadow"></div>

                <ul class="menu-inner py-1">
                    <!-- Dashboard -->
                    <li class="menu-item">
                        <a href="../index.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-home-circle"></i>
                            <div data-i18n="Analytics">Página Inicial</div>
                        </a>
                    </li>

                    <li class="menu-header small text-uppercase">
                        <span class="menu-header-text">Páginas</span>
                    </li>
                    <li class="menu-item active">
                        <a href="../conteudo.php" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-dock-top"></i>
                            <div data-i18n="Account Settings">Conteúdos</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="../meusgastos.php" class="menu-link">
                                    <div data-i18n="Account">Meus Gastos</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="../forum.php" class="menu-link">
                                    <div data-i18n="Notifications">Fórum</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="../meusgastos.php" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-lock-open-alt"></i>
                            <div data-i18n="Authentications">Meus Gastos</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="../forum.php" class="menu-link menu-toggle">
                            <patch><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1920 1792">
                                    <path fill="currentColor" d="M593 896q-162 5-265 128H194q-82 0-138-40.5T0 865q0-353 124-353q6 0 43.5 21t97.5 42.5T384 597q67 0 133-23q-5 37-5 66q0 139 81 256zm1071 637q0 120-73 189.5t-194 69.5H523q-121 0-194-69.5T256 1533q0-53 3.5-103.5t14-109T300 1212t43-97.5t62-81t85.5-53.5T602 960q10 0 43 21.5t73 48t107 48t135 21.5t135-21.5t107-48t73-48t43-21.5q61 0 111.5 20t85.5 53.5t62 81t43 97.5t26.5 108.5t14 109t3.5 103.5zM640 256q0 106-75 181t-181 75t-181-75t-75-181t75-181T384 0t181 75t75 181zm704 384q0 159-112.5 271.5T960 1024T688.5 911.5T576 640t112.5-271.5T960 256t271.5 112.5T1344 640zm576 225q0 78-56 118.5t-138 40.5h-134q-103-123-265-128q81-117 81-256q0-29-5-66q66 23 133 23q59 0 119-21.5t97.5-42.5t43.5-21q124 0 124 353zm-128-609q0 106-75 181t-181 75t-181-75t-75-181t75-181t181-75t181 75t75 181z" />
                                </svg></patch>&nbsp;&nbsp;&nbsp;&nbsp;
                            <div data-i18n="Misc">Fórum</div>
                        </a>

                    <li class="menu-item">
                        <a href="../equipe.php" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-cube-alt"></i>
                            <div data-i18n="Misc">Equipe</div>
                        </a>


                    <li class="menu-item">
                        <a href="../suporte.php" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-support"></i>
                            <div data-i18n="Support">Suporte</div>
                        </a>
                    </li>

                </ul>
            </aside>
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->

                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                            <i class="bx bx-menu bx-sm"></i>
                        </a>
                    </div>

                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                        <!-- Search -->
                        <div class="navbar-nav align-items-center">
                            <div class="nav-item d-flex align-items-center">
                                <i class="bx bx-search fs-4 lh-0"></i>
                                <input type="text" class="form-control border-0 shadow-none" placeholder="Search..." aria-label="Search..." />
                            </div>
                        </div>
                        <!-- /Search -->

                        <ul class="navbar-nav flex-row align-items-center ms-auto">


                            <!-- User -->
                            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                                    <div class="avatar avatar-online">
                                        <img src="../img/fotodeperfilbase.svg" alt class="w-px-40 h-auto rounded-circle" />
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="meuperfil.php">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar avatar-online">
                                                        <img src="../img/fotodeperfilbase.svg" alt class="w-px-40 h-auto rounded-circle" />
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <span class="fw-semibold d-block"><?php echo $_SESSION['nome'] ?></span>

                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="meuperfil.php">
                                            <i class="bx bx-user me-2"></i>
                                            <span class="align-middle">Meu Perfil </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="meuperfil.php">
                                            <i class="bx bx-cog me-2"></i>
                                            <span class="align-middle">Configurações</span>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="../config/sair.php">
                                            <i class="bx bx-power-off me-2"></i>
                                            <span class="align-middle">Sair</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!--/ User -->
                        </ul>
                    </div>
                </nav>

                <!-- / Navbar -->

                <!-- conteudo do site -->
                <style>
                    /* Reset de estilos */
                    * {
                        margin: 0;
                        padding: 0;
                        box-sizing: border-box;
                    }

                    /* Estilos gerais */
                    body {
                        background-color: #f0f0f0;
                        margin: 0;
                    }

                    .container {
                        max-width: 960px;
                        margin: 0 auto;
                        padding: 20px;
                    }

                    /* Estilos das seções de conteúdo */
                    .content {
                        background-color: #fff;
                        padding: 20px;
                        border: 1px solid #ddd;
                        border-radius: 5px;
                        margin-bottom: 20px;
                        opacity: 0;
                        transform: translateY(20px);
                        transition: opacity 0.5s ease, transform 0.5s ease;
                    }

                    .content h2 {
                        color: #333;
                        font-size: 24px;
                        margin-bottom: 10px;
                    }

                    .content p {
                        color: #666;
                        font-size: 16px;
                        line-height: 1.5;
                    }
                </style>
                </head>

                <body>
                    <div class="container">
                        <!-- Seções de Conteúdo -->
                        <style>
                                #sub {
                                    margin-left: 10px;
                                }

                                #subtxt {
                                    margin-left: 22px;
                                }
                            </style>
                        <div class="content">
                            <h1>Facilidade do uso de cartão do credito</h1>
                            <p>Como o cartão de crédito permite que você compre agora e pague depois, ele oferece uma grande conveniência para suas compras cotidianas e emergenciais.</p>
                            <p>A facilidade de pagamento com cartão de crédito é uma das principais vantagens desse método de pagamento. Permite que os consumidores façam compras sem precisar
                                pagar imediatamente com dinheiro ou fundos disponíveis em sua conta bancária. Aqui estão alguns aspectos importantes relacionados à facilidade de pagamento com
                                cartão de crédito:</p>
                        </div>
                        <div class="content">
                            <h1>Recompensas e benefícios</h1>
                            <p>Os programas de recompensas e benefícios são uma das características mais atrativas dos cartões de crédito modernos. Esses programas oferecem aos titulares de cartões
                                a oportunidade de ganhar recompensas valiosas por suas despesas diárias, tornando o uso do cartão de crédito não apenas conveniente, mas também gratificante. Aqui está
                                um texto detalhando os principais aspectos desses programas:</p>

                            <ul>
                                <li>
                                    <p id="sub"><strong>Pontos de Recompensa:</strong> Os titulares ganham pontos com base nas compras, que podem ser trocados por viagens, produtos ou dinheiro.</p>
                                </li>
                                <li>
                                    <p id="sub"><strong>Milhas Aéreas:</strong> Cartões de crédito de companhias aéreas acumulam milhas que podem ser usadas para voos ou upgrades.</p>
                                </li>
                                <li>
                                    <p id="sub"><strong>Cashback:</strong> Reembolso de uma porcentagem das compras diretamente na fatura ou na conta bancária do titular.</p>
                                </li>
                                <li>
                                    <p id="sub"><strong>Descontos em Compras:</strong> Ofertas especiais ou descontos em lojas, restaurantes e serviços selecionados.</p>
                                </li>
                                <li>
                                    <p id="sub"><strong>Benefícios de Viagem:</strong> Acesso a salas VIP, seguro de viagem e créditos para despesas de viagem.</p>
                                </li>
                                <li>
                                    <p id="sub"><strong>Recompensas Personalizadas:</strong> Escolha categorias de gastos favoritas para recompensas mais altas.</p>
                                </li>
                                <li>
                                    <p id="sub"><strong>Proteção de Compra:</strong> Garantia estendida e seguro contra danos ou roubo de produtos comprados.</p>
                                </li>
                                <li>
                                    <p id="sub"><strong>Acesso a Eventos Exclusivos:</strong> Oportunidades exclusivas para eventos esportivos, concertos e experiências culturais.</p>
                                </li>
                                <li>
                                    <p id="sub"><strong>Programas de Fidelidade:</strong> Benefícios adicionais para clientes leais, como status de elite e tratamento preferencial.</p>
                                </li>
                            </ul>


                        </div>
                        <div class="content">
                            <h1>Melhores modos de uso</h1>
                            <p>O cartão de crédito é uma ferramenta financeira incrivelmente conveniente, mas seu uso responsável é crucial para evitar armadilhas financeiras. Quando utilizado de forma sábia,
                                o cartão de crédito pode proporcionar inúmeras vantagens e benefícios, além de ajudar a construir um histórico de crédito sólido. </p>
                            <ul>
                                <li>
                                    <p id="sub"><strong>Estabeleça um Orçamento:</strong> Antes de usar o cartão, crie um orçamento para determinar o quanto pode gastar de forma responsável.</p>
                                </li>
                                <li>
                                    <p id="sub"><strong>Pague o Valor Total da Fatura:</strong> Sempre que possível, pague o valor total da fatura para evitar juros.</p>
                                </li>
                                <li>
                                    <p id="sub"><strong>Evite o Pagamento Mínimo:</strong> Pagar apenas o mínimo acumula juros altos; pague sempre mais do que o mínimo.</p>
                                </li>
                                <li>
                                    <p id="sub"><strong>Controle de Gastos:</strong> Registre todas as despesas para manter o controle do orçamento e evitar surpresas na fatura.</p>
                                </li>
                                <li>
                                    <p id="sub"><strong>Conheça os Termos do Cartão:</strong> Leia e compreenda os termos e condições, incluindo taxas e datas de vencimento.</p>
                                </li>
                                <li>
                                    <p id="sub"><strong>Evite Compras Impulsivas:</strong> Use o cartão com responsabilidade e evite compras por impulso.</p>
                                </li>
                                <li>
                                    <p id="sub"><strong>Evite Saques em Dinheiro:</strong> Evite saques em dinheiro devido às altas taxas e juros envolvidos.</p>
                                </li>
                                <li>
                                    <p id="sub"><strong>Proteja Suas Informações:</strong> Mantenha o cartão seguro e não compartilhe informações pessoais.</p>
                                </li>
                                <li>
                                    <p id="sub"><strong>Mantenha o Uso do Crédito Baixo:</strong> Tente manter o uso do cartão abaixo de 30% do limite para preservar sua pontuação de crédito.</p>
                                </li>
                                <li>
                                    <p id="sub"><strong>Pagamento Pontual:</strong> Certifique-se de pagar pelo menos o mínimo até a data de vencimento para evitar multas.</p>
                                </li>
                                <li>
                                    <p id="sub"><strong>Construa um Bom Histórico de Crédito:</strong> O uso responsável ajuda a construir um histórico de crédito positivo, valioso para empréstimos futuros.</p>
                                </li>
                            </ul>

                        </div>
                    </div>

                    <script>
                        // JavaScript para animar as divs após o carregamento da página
                        window.onload = function() {
                            const contentDivs = document.querySelectorAll('.content');

                            contentDivs.forEach((div, index) => {
                                setTimeout(() => {
                                    div.style.opacity = '1';
                                    div.style.transform = 'translateY(0)';
                                }, 300 * (index + 1));
                            });
                        };
                    </script>
                </body>




                <!-- conteudo do site -->

                <!-- Overlay -->
                <div class="layout-overlay layout-menu-toggle"></div>
            </div>
            <!-- / Layout wrapper -->


            <!-- Core JS -->
            <!-- build:js assets/vendor/js/core.js -->
            <script src="js/jquery.js"></script>
            <script src="js/popper.js"></script>
            <script src="js/bostap.js"></script>
            <script src="js/bootstrap.js"></script>
            <script src="js/perfect-scrollbar/perfect-scrollbar.js"></script>

            <script src="js/menu.js"></script>
            <!-- endbuild -->



            <!-- Main JS -->
            <script src="js/main.js"></script>


            <!-- Place this tag in your head or just before your close body tag. -->
            <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>