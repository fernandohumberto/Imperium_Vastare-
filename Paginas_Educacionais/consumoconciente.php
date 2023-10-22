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
    <link rel="stylesheet" href="consumoconciente.php">



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

                    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none" onclick="removeClasse()">
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
                        font-family: Arial, sans-serif;
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
                            <h1>Consumo Consciente</h1>
                            <p>O consumo consciente é uma abordagem responsável para adquirir bens e serviços, levando em consideração não apenas as suas próprias necessidades, mas também o impacto social e ambiental de suas escolhas. Aqui estão alguns aspectos importantes relacionados ao consumo consciente:</p>
                        </div>
                        <div class="content">
                            <h1>Benefícios do Consumo Consciente</h1>
                            <p>Praticar o consumo consciente oferece uma série de benefícios importantes para indivíduos e para o planeta. Aqui estão alguns dos principais benefícios:</p>

                            <ul>
                                <li>
                                    <p id="sub"><strong>Redução do Impacto Ambiental:</strong> Consumir menos e fazer escolhas sustentáveis ajuda a reduzir a pressão sobre o meio ambiente.</p>
                                </li>
                                <li>
                                    <p id="sub"><strong>Economia Financeira:</strong> O consumo consciente geralmente resulta em economia de dinheiro, já que evita gastos desnecessários.</p>
                                </li>
                                <li>
                                    <p id="sub"><strong>Melhoria da Qualidade de Vida:</strong> Ao comprar produtos de melhor qualidade e durabilidade, você obtém maior satisfação e menos desperdício.</p>
                                </li>
                                <li>
                                    <p id="sub"><strong>Impacto Social Positivo:</strong> Escolher produtos de empresas que valorizam práticas justas de trabalho e ética empresarial apoia um mercado mais justo.</p>
                                </li>
                                <li>
                                    <p id="sub"><strong>Redução de Resíduos:</strong> O consumo consciente contribui para a redução de resíduos e a conservação de recursos naturais.</p>
                                </li>
                            </ul>
                        </div>
                        <div class="content">
                            <h1>Dicas para o Consumo Consciente</h1>
                            <p>Praticar o consumo consciente requer consciência e ação deliberada. Aqui estão algumas dicas importantes para incorporar o consumo consciente em sua vida:</p>

                            <ul>
                                <li>
                                    <p id="sub"><strong>Reflexão antes da Compra:</strong> Pergunte a si mesmo se você realmente precisa do item antes de comprá-lo.</p>
                                </li>
                                <li>
                                    <p id="sub"><strong>Escolha Produtos Sustentáveis:</strong> Opte por produtos feitos de materiais sustentáveis e de empresas que adotam práticas ecológicas.</p>
                                </li>
                                <li>
                                    <p id="sub"><strong>Compre Localmente:</strong> Apoie produtores locais sempre que possível para reduzir a pegada de carbono relacionada ao transporte de produtos.</p>
                                </li>
                                <li>
                                    <p id="sub"><strong>Reutilize e Recicle:</strong> Dê preferência à reutilização e à reciclagem, evitando o descarte irresponsável de itens.</p>
                                </li>
                                <li>
                                    <p id="sub"><strong>Eduque-se:</strong> Esteja informado sobre as práticas de empresas e produtos, optando por marcas alinhadas com seus valores.</p>
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