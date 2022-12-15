<?php require './header-admin.php'; ?>         
                <div class="col-9" style="padding-top:20px;padding-right:40px">
                    <div class="d-flex justify-content-between">
                        <div>
                            <form class="form-inline my-2 my-lg-0" action="/action_page.php">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search">
                                <button class="btn btn-success" type="submit">Rechercher</button>
                            </form> 
                        </div>
                        
                        <div>
                            <button type="button" class="btn btn-primary "  data-toggle="modal" data-target="#myModal">
                            <i class="bi bi-plus"></i>
                            <a href="./product-empty.php" class="text-white" style="text-decoration:none"> Ajouter un produit</a>
                            </button>
                        </div>     
                    </div>
                    <div class="tab-content" style="padding-top:20px">
                        <div class="table-responsive tab-pane fade show active" id="v-pills-products" role="tabpanel" aria-labelledby="v-pills-products-tab">
                            <table  class="table table-bordered table-striped" style="width:100%">
                                <thead class="thead-dark">
                                    <tr>
                                        <th style="text-align:center;">Statut</th>
                                        <th style="text-align:center;">Boutique </th>
                                        <th style="text-align:center;">Rayons</th>
                                        <th style="text-align:center;">Produits</th>
                                        <th style="text-align:center;">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-success">En boutique</td>
                                        <td>Péripheriques & composants</td>
                                        <td>Ecrans d'ordinateur</td>
                                        <td>AOC 24B1XHS </td>
                                        <td>
                                            <button class="btn btn-light border-danger text-danger" data-toggle="modal" data-target="#supModal">
                                                <i class="bi bi-archive-fill"></i>
                                                Retirer
                                            </button>
                                            <button class="btn btn-light border-dark text-secondary">
                                                <i class="bi bi-pencil"></i>
                                                <a href="./product-1.php" class="text-secondary" style="text-decoration:none"> Modifier</a>
                                            </button>
                                            <button class="btn btn-light border-dark text-dark">
                                                <i class="bi bi-tags"></i>
                                                Caractéristiques
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-success">En boutique</td>
                                        <td>Péripheriques & composants</td>
                                        <td>Ecrans d'ordinateur</td>
                                        <td>AOC 24B1XHS </td>
                                        <td>
                                            <button class="btn btn-light border-danger text-danger"  data-toggle="modal" data-target="#supModal">
                                                <i class="bi bi-archive-fill"></i>
                                                Retirer
                                            </button>
                                            <button class="btn btn-light border-dark text-secondary">
                                                <i class="bi bi-pencil"></i>
                                                <a href="./product-1.php" class="text-secondary" style="text-decoration:none"> Modifier</a>
                                            </button>
                                            <button class="btn btn-light border-dark text-dark">
                                                <i class="bi bi-tags"></i>
                                                Caractéristiques
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-danger">Retiré</td>
                                        <td>Péripheriques & composants</td>
                                        <td>Ecrans d'ordinateur</td>
                                        <td>AOC 24B1XHS </td>
                                        <td>
                                            <button class="btn btn-light border-success text-success">
                                                <i class="bi bi-check-square-fill"></i>
                                                Remettre
                                            </button>
                                            <button class="btn btn-light border-dark text-secondary">
                                                <i class="bi bi-pencil"></i>
                                                <a href="./product-1.php" class="text-secondary" style="text-decoration:none"> Modifier</a>
                                            </button>
                                            <button class="btn btn-light border-dark text-dark">
                                                <i class="bi bi-tags"></i>
                                                Caractéristiques
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>En attente</td>
                                        <td>Péripheriques & composants</td>
                                        <td>Ecrans d'ordinateur</td>
                                        <td>AOC 24B1XHS </td>
                                        <td>
                                            <button class="btn btn-light border-success text-success">Mettre en boutique</button>
                                            <button class="btn btn-light border-dark text-secondary">
                                                <i class="bi bi-pencil"></i>
                                                <a href="./product-1.php" class="text-secondary" style="text-decoration:none"> Modifier</a>
                                            </button>
                                            <button class="btn btn-light border-dark text-dark">
                                                <i class="bi bi-tags"></i>
                                                Caractéristiques
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>   
                            
                        </div>
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-center">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                                        <i class="bi bi-chevron-double-left"></i>
                                    </a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">
                                        <i class="bi bi-chevron-double-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    
                    <!-- Modal -->
                    <div class="modal fade" id="supModal" tabindex="-1" aria-labelledby="supModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title text-danger" id="supModalLabel">
                                    <i class="bi bi-archive-fill"></i>
                                    Retrait d'un produit
                                </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                               Attention, le produit ne sera plus visible sur le site
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                                <button type="button" class="btn btn-danger">Retirer le produit de la boutiques</button>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    
    <?php require './footer-admin.php'; ?>