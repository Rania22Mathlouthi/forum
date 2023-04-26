<?php
include ('C:\xampp\htdocs\forum\controller\questionC.php');
$pc =new questionC();
$liste = $pc ->listequestions();
?>



<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Psychoz admin</title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="../assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
    
</head>

<body class="g-sidenav-show   bg-gray-100">
<div class="min-height-300 bg-primary position-absolute w-100"></div>
<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/argon-dashboard/pages/dashboard.html " target="_blank">
            <img src="../assets/img/psychoz.png" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-1 font-weight-bold">Psychoz</span>
        </a>
    </div>
    
    
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      
         
          
          
          
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link " href="../pages/dashboard.html">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link active" href="table.php">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Forum</span>
                </a>
            </li>



            <li class="nav-item">
                <a class="nav-link " href="../pages/billing.html">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-credit-card text-success text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Billing</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="../pages/virtual-reality.html">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-app text-info text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Virtual Reality</span>
                </a>
            </li>
            
        </ul>
        
    </div>
</aside>
<main class="main-content position-relative border-radius-lg ">
    
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Questions </h6>
                        
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">

                        <div class="table-responsive p-0">

                                            <?php foreach($liste as $p){ ?>

                            <table class="table align-items-center mb-0">
                                <thead>
                                <tr>
                                    <th class="text-uppercase text-primary text-xxs font-weight-bolder opacity-15">id</th>
                                    <th class="text-uppercase text-primary text-xxs font-weight-bolder opacity-15 ">titre</th>
                                    <th class="text-uppercase text-primary text-xxs font-weight-bolder opacity-15">description</th>
                                    <th class="text-uppercase text-primary text-xxs font-weight-bolder opacity-15">contenu</th>
                                    <th class="text-uppercase text-primary text-xxs font-weight-bolder opacity-15">id_auteur</th>
                                    <th class="text-uppercase text-primary text-xxs font-weight-bolder opacity-15">date_publication</th>

                                    <th class="text-uppercase text-primary text-xxs font-weight-bolder opacity-15"></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>

                                    <td>
                                        <p class="text-sm font-weight-bold mb-0"><?=$p['id'];?></p>
                                    </td>
                                    <td>
                                        <p class="text-sm font-weight-bold mb-0"><?=$p['titre'];?></p>
                                    </td>
                                  
                                    <td>
                                        <p class="text-sm font-weight-bold mb-0"><?=$p['descriptionn'];?></p>
                                    </td>
                                    <td>
                                        <p class="text-sm font-weight-bold mb-0"><?=$p['contenu'];?></p>
                                    </td>
                                    <td>
                                        <p class="text-sm font-weight-bold mb-0"><?=$p['id_auteur'];?></p>
                                    </td>
                                    <td>
                                        <p class="text-sm font-weight-bold mb-0"><?=$p['date_publication'];?></p>
                                    </td>

                                    <td>
                                    <a href="supprimer.php?id=<?=$p['id'];?>">

                                        
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                    <path style="color:#dedede" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"></path>
                </svg></a>
                </a>
                                
                
                </td>
                                    </td>
                                </tr>
                                <?php }?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Reponses </h6>
                        
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            
                            <table class="table align-items-center mb-0">
                                <thead>
                                <tr>
                                    <th class="text-uppercase text-primary text-xxs font-weight-bolder opacity-15">id</th>
                                    <th class="text-uppercase text-primary text-xxs font-weight-bolder opacity-15 ">id_auteur</th>
                                    <th class="text-uppercase text-primary text-xxs font-weight-bolder opacity-15">contenu</th>
                                    <th class="text-uppercase text-primary text-xxs font-weight-bolder opacity-15">id_question</th>                                    <th class="text-uppercase text-primary text-xxs font-weight-bolder opacity-15">date_publication</th>

                                    <th class="text-uppercase text-primary text-xxs font-weight-bolder opacity-15"></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <h6 class="mb-0 text-sm">********</h6>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-sm font-weight-bold mb-0">*******</p>
                                    </td>
                                
                                    <td class="align-middle text-right">
                                        <span class="text-secondary text-xs font-weight-bold">*******</span>
                                    </td>
                                    <td>
                                        <p class="text-sm font-weight-bold mb-0">**********</p>
                                    </td>
                                
                                    <td>
                                        <p class="text-sm font-weight-bold mb-0">**********</p>
                                    </td>

                                    <td>

                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                    <path style="color:#dedede" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"></path>
                </svg>
                </a>
                                
                <a href="?deleteId=4">

                </td>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
</body>
</html>