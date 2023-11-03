<?php
include_once('config.php');
include_once('config/conexao.php');

$idUser = $_SESSION['id'];
$sql = "SELECT * FROM `meusgastos` where idUser = $idUser AND deletado = 1 ";

$resposta = mysqli_query($conn, $sql);
$results = mysqli_fetch_all($resposta);

// codigo que traz os dados do user
$id = $_SESSION['id'];

$sqls = "SELECT * FROM `user` WHERE id = $id";

$query = mysqli_query($conn, $sqls);
$row = mysqli_fetch_assoc($query);

?>

<!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        <!-- Menu -->
        

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme ">
            <div class="app-brand demo">
                <a href="index.php" class="app-brand-link">
                    <span class="app-brand-logo demo">
                        <i><img src="img/favicon-aba.svg" alt=""></i>
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
                    <a href="index.php" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-home-circle"></i>
                        <div data-i18n="Analytics">Página Inicial</div>
                    </a>
                </li>

                <li class="menu-header small text-uppercase">
                    <span class="menu-header-text">Páginas</span>
                </li>
                <li class="menu-item">
                    <a href="conteudo.php" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons bx bx-dock-top"></i>
                        <div data-i18n="Account Settings">Conteúdos</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="meusgastos.php" class="menu-link">
                                <div data-i18n="Account">Meus Gastos</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="forum.php" class="menu-link">
                                <div data-i18n="Notifications">Fórum</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item  active">
                    <a href="meusgastos.php" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons bx bx-lock-open-alt"></i>
                        <div data-i18n="Authentications">Meus Gastos</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="forum.php" class="menu-link menu-toggle">
                        <patch><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1920 1792">
                                <path fill="currentColor" d="M593 896q-162 5-265 128H194q-82 0-138-40.5T0 865q0-353 124-353q6 0 43.5 21t97.5 42.5T384 597q67 0 133-23q-5 37-5 66q0 139 81 256zm1071 637q0 120-73 189.5t-194 69.5H523q-121 0-194-69.5T256 1533q0-53 3.5-103.5t14-109T300 1212t43-97.5t62-81t85.5-53.5T602 960q10 0 43 21.5t73 48t107 48t135 21.5t135-21.5t107-48t73-48t43-21.5q61 0 111.5 20t85.5 53.5t62 81t43 97.5t26.5 108.5t14 109t3.5 103.5zM640 256q0 106-75 181t-181 75t-181-75t-75-181t75-181T384 0t181 75t75 181zm704 384q0 159-112.5 271.5T960 1024T688.5 911.5T576 640t112.5-271.5T960 256t271.5 112.5T1344 640zm576 225q0 78-56 118.5t-138 40.5h-134q-103-123-265-128q81-117 81-256q0-29-5-66q66 23 133 23q59 0 119-21.5t97.5-42.5t43.5-21q124 0 124 353zm-128-609q0 106-75 181t-181 75t-181-75t-75-181t75-181t181-75t181 75t75 181z" />
                            </svg></patch>&nbsp;&nbsp;&nbsp;&nbsp;
                        <div data-i18n="Misc">Fórum</div>
                    </a>

                <li class="menu-item">
                    <a href="equipe.php" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons bx bx-cube-alt"></i>
                        <div data-i18n="Misc">Equipe</div>
                    </a>


                <li class="menu-item">
                    <a href="suporte.php" class="menu-link">
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
                    <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)" onclick="adicionarClasse()">
                        <i class="bx bx-menu bx-sm"></i>
                    </a>
                </div>
                <!-- <ul class="navbar-nav flex-row align-items-center ms-auto">

          
         Style Switcher
          <li class="nav-item dropdown-style-switcher dropdown me-2 me-xl-0">
            <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
              <i class="bx bx-sm bx-moon"></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-end dropdown-styles">
            <li class="menu-item active">
                        <a href="index.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-home-circle"></i>
                            <div data-i18n="Analytics">Página Inicial</div>
                        </a>
                    </li>

                    <li class="menu-header small text-uppercase">
                        <span class="menu-header-text">Páginas</span>
                    </li>
                    <li class="menu-item">
                        <a href="conteudo.php" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-dock-top"></i>
                            <div data-i18n="Account Settings">Conteúdos</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="meusgastos.php" class="menu-link">
                                    <div data-i18n="Account">Meus Gastos</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="forum.php" class="menu-link">
                                    <div data-i18n="Notifications">Fórum</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="meusgastos.php" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-lock-open-alt"></i>
                            <div data-i18n="Authentications">Meus Gastos</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="forum.php" class="menu-link menu-toggle">
                            <patch><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1920 1792">
                                    <path fill="currentColor" d="M593 896q-162 5-265 128H194q-82 0-138-40.5T0 865q0-353 124-353q6 0 43.5 21t97.5 42.5T384 597q67 0 133-23q-5 37-5 66q0 139 81 256zm1071 637q0 120-73 189.5t-194 69.5H523q-121 0-194-69.5T256 1533q0-53 3.5-103.5t14-109T300 1212t43-97.5t62-81t85.5-53.5T602 960q10 0 43 21.5t73 48t107 48t135 21.5t135-21.5t107-48t73-48t43-21.5q61 0 111.5 20t85.5 53.5t62 81t43 97.5t26.5 108.5t14 109t3.5 103.5zM640 256q0 106-75 181t-181 75t-181-75t-75-181t75-181T384 0t181 75t75 181zm704 384q0 159-112.5 271.5T960 1024T688.5 911.5T576 640t112.5-271.5T960 256t271.5 112.5T1344 640zm576 225q0 78-56 118.5t-138 40.5h-134q-103-123-265-128q81-117 81-256q0-29-5-66q66 23 133 23q59 0 119-21.5t97.5-42.5t43.5-21q124 0 124 353zm-128-609q0 106-75 181t-181 75t-181-75t-75-181t75-181t181-75t181 75t75 181z" />
                                </svg></patch>&nbsp;&nbsp;&nbsp;&nbsp;
                            <div data-i18n="Misc">Fórum</div>
                        </a>

                    <li class="menu-item">
                        <a href="equipe.php" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-cube-alt"></i>
                            <div data-i18n="Misc">Equipe</div>
                        </a>

                    
                    <li class="menu-item">
                        <a href="suporte.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-support"></i>
                            <div data-i18n="Support">Suporte</div>
                        </a>
                    </li>
          

        </ul>-->
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
                                    <img src="img/fotodeperfilbase.svg" alt class="w-px-40 h-auto rounded-circle" />
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 me-3">
                                                <div class="avatar avatar-online">
                                                    <img src="img/fotodeperfilbase.svg" alt class="w-px-40 h-auto rounded-circle" />
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <span class="fw-semibold d-block"><?php echo $row['user'] ?></span>
                                                <small class="text-muted">Usuário</small>
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
                                    <div class="dropdown-divider"></div>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="config/sair.php">
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



            <section class="container p-3">
                <?php
                if(isset($_GET['status']) == 1)
                {
                    echo' <div class="alert  text-center alert-success" role="alert">
                   Gasto criado com sucesso!!
                </div>';
                }
                
                ?>
           
                <form class="row g-3" action="config/cadastraDespesa.php" method="POST">
                    <div class="row">
                        <div class="col-4 py-3">
                            <input class="form-control" type="text" placeholder="Despesa" name="despesa" id="valorAlfa" required>
                            <span id="mensagemErroAlfa" style="color: red;"></span>
                        </div>
                        <input type="hidden" value="<?php echo $_SESSION['id'] ?>" name="idUser" required>
                        <div class="col-4 py-3">
                            <input class="form-control" type="text" placeholder="Valor" name="valor" id="valor"> <!--Inserir valor do R$, função apenas números e função de mascaras de dinheiro-->
                            <span id="mensagemErro" style="color: red;"></span>
                        </div>
                        <div class="col-4 py-3">
                            <input class="form-control" type="date" id="dataGasto" name="data" required>
                        </div>
                        <div class="col-3 py-3">
                            <button type="submit" class="btn btn-outline-primary">Adicionar Gasto</button>
                        </div>
                    </div>
                </form>

                <div class="col-12">
                    <table id="tabelaGastos" class="table table-striped table-responsive">
                        <thead>
                            <tr class="table-primary">
                                <th class="">Nome</th>
                                <th>Valor</th>
                                <th>Data</th>
                                <th>Ações</th>
                        </thead>
                        <tbody>
                            <?php foreach ($results as $linha) : ?>
                                <tr>
                                    <td><?= $linha[1] ?></td>
                                    <td>R$ <?= number_format($linha[2], 2, ',', '.') ?></td>
                                    <td><?= date_format(date_create($linha[4]), 'd/m/Y') ?></td>
                                    <td>
                                        <div class="btn-excluir-container">
                                            <a href="config/exluirGastoTabela.php?id=<?php echo $linha[0] ?>" class="btn-excluir">
                                                <i class="bi bi-trash"></i> Excluir
                                            </a>
                                        </div>
                                    </td>
                                    </button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <div class="col-12">
                    <form method="post" id="filtroForm">
                        <label for="mes">Selecione o mês:</label>
                        <input type="date" id="mes" name="mes">
                        <button type="submit" class="btn btn-sm btn-outline-primary">Filtrar</button>
                    </form>

                    <div class="mt-2" id="resultado"></div>

                    <script>
                        document.getElementById('filtroForm').addEventListener('submit', function(e) {
                            e.preventDefault();

                            const formData = new FormData(this);

                            fetch('processar_gastos.php', {
                                    method: 'POST',
                                    body: formData
                                })
                                .then(response => response.text())
                                .then(data => {
                                    document.getElementById('resultado').innerHTML = data;
                                });
                        });
                    </script>

                </div>
            </section>

            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

            <script type="text/javascript">
                google.charts.load('current', {
                    'packages': ['corechart']
                });
                google.charts.setOnLoadCallback(drawChart);

                function drawChart() {
                    var data = google.visualization.arrayToDataTable([
                        ['Task', 'Hours per Day'],
                        <?php foreach ($results as $linha) : ?>['<?= $linha[1] ?>', <?= $linha[2] ?>],
                        <?php endforeach; ?>
                    ]);

                    var options = {
                        title: 'Cronograma de Gastos - (Gastos em R$)'
                    };

                    var chart = new google.visualization.PieChart(document.getElementById('piechart'));

                    chart.draw(data, options);
                }
            </script>

            <div class="content-wrapper">
                <!-- Content -->

                <div class="container-xxl flex-grow-1 container-p-y">
                    <div class="row">

                        <div id="piechart" style="width: 900px; height: 500px;"></div>
                    </div>
                </div>
            </div>


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