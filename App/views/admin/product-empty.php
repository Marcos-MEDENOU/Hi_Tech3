<?php 
    require "../../controllers/ShopRayController.php";
    $shopraycon = new ShopRayController();
    $array = $shopraycon->returnAll();
    $array_distinct = $shopraycon->returnDistinct();
    require './header-admin.php'; 

    $con = false;

?>

    <div class="col-9" style="padding-top:20px;padding-right:40px">
       <?php if($con): ?>
        <h1>Mon compte</h1>
        <h3>Déconnexion</h3>
        <?php else: ?>
            <h2>Mon compte</h2>
            <h3>Connexion</h3>
            <?php endif; ?>
        <form action="../../controllers/send.inc.php" method="post" enctype="multipart/form-data">
            <div class="d-flex justify-content-between pb-3">
                <div> 
                    <button class="btn btn-white text-dark border-dark" type="submit">
                        <i class="bi bi-x"></i>
                        <a href="./products.php" class="text-secondary" style="text-decoration:none">Annuler la modification</a>
                    </button>  
                </div>
                <div>
                    <button type="submit" name="validation" class="btn btn-primary"  data-toggle="modal" data-target="#myModal">
                        <i class="bi bi-check-lg"></i>
                        Valider et enregistrer la fiche
                    </button>
                </div>     
            </div>
            <fieldset class="bg-light" style="padding-inline:15px">
                <legend class="ont-weight-bold">Gestion</legend>
                <div class="form-group row">
                    <legend class="col-form-label col-sm-2 float-sm-left pt-0">Statut</legend>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" id="gridRadios1" value="En attente">
                            <label class="form-check-label" for="gridRadios1">
                                En attente de mise en ligne
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" id="gridRadios2" value="En boutique" checked>
                            <label class="form-check-label text-success" for="gridRadios2">
                                En boutique
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" id="gridRadios3" value="Retirer">
                            <label class="form-check-label text-danger" for="gridRadios3">
                                Retiré
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="shop" class="col-sm-2 col-form-label">Boutique</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="option_boutique" id="shop" required>
                        <option value="">Choississez une boutique</option>
                        <?php foreach($array_distinct as $key => $value): ?>
                            <option value="<?=$array_distinct[$key]["shopray_name_shop"]?>"><?=$array_distinct[$key]["shopray_name_shop"]?></option>
                        <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="ray" class="col-sm-2 col-form-label">Rayon</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="option_rayon" id="ray" required>
                        <option value="">Choississez un rayon</option>
                        <?php foreach($array as $key => $value): ?>
                            <option value="<?=$array[$key]["shopray_id"]?>"><?=$array[$key]["shopray_name_ray"]?></option>
                        <?php endforeach; ?>
                        </select>
                    </div>
                </div>
            </fieldset>

            <fieldset class="bg-light" style="padding-inline:15px">
                <legend>Présentation</legend>
                <div class="form-group row">
                    <label for="brand" class="col-sm-2 col-form-label">Marque</label>
                    <div class="col-sm-10">
                    <input type="text" name="marque" class="form-control" id="brand" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="reference" class="col-sm-2 col-form-label">Référence</label>
                    <div class="col-sm-10">
                    <input type="text" name="ref_pro" class="form-control" id="reference" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tag" class="col-sm-2 col-form-label">Etiquettes</label>
                    <div class="col-sm-10">
                        <input type="text" name="etiq_pro" class="form-control" id="tag" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="tag" class="col-sm-2 col-form-label">Prix</label>
                    <div class="col-sm-5">
                        <label class="sr-only" for="price"></label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Prix</div>
                            </div>
                            <input type="text" class="form-control" name="price" id="price" placeholder="109,94" required>
                            <div class="input-group-prepend">
                                <div class="input-group-text">£</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <label class="sr-only" for="inlineFormInputGroup"></label>
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <div class="input-group-text">éco-Participation</div>
                            </div>
                            <input type="text" name="eco_price" class="form-control" id="inlineFormInputGroup" placeholder="1,70" required>
                            <div class="input-group-prepend">
                                <div class="input-group-text">£</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Description principal (MarkDown)</label>
                    <div class="col-sm-10">
                        <textarea name="des_pro" id="" class="form-control" rows="10" required></textarea>
                    </div>
                </div>
            </fieldset>

            <fieldset class="bg-light" style="padding-inline:15px">
                <legend>Photos</legend>
                <div class="form-group row">
                    <label for="reference" class="col-sm-2 col-form-label">Photo 1</label>
                    <div class="col-sm-10">
                        <div class="custom-file">
                            <input type="file" name="photos[]" class="custom-file-input" id="customFileLangHTML" required>
                            <label class="custom-file-label" for="customFileLangHTML" data-browse="Parcourir">Choisir un fichier</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="reference" class="col-sm-2 col-form-label">Photo 2</label>
                    <div class="col-sm-10">
                        <div class="custom-file">
                            <input type="file" name="photos[]" class="custom-file-input" id="customFileLangHTML" required>
                            <label class="custom-file-label" for="customFileLangHTML" data-browse="Parcourir">Choisir un fichier</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="reference" class="col-sm-2 col-form-label">Photo 3</label>
                    <div class="col-sm-10">
                        <div class="custom-file">
                            <input type="file" name="photos[]" class="custom-file-input" id="customFileLangHTML" required>
                            <label class="custom-file-label" for="customFileLangHTML" data-browse="Parcourir">Choisir un fichier</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="reference" class="col-sm-2 col-form-label">Photo 4</label>
                    <div class="col-sm-10">
                        <div class="custom-file">
                            <input type="file" name="photos[]" class="custom-file-input" id="customFileLangHTML" required>
                            <label class="custom-file-label" for="customFileLangHTML" data-browse="Parcourir">Choisir un fichier</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="reference" class="col-sm-2 col-form-label">Photo 5</label>
                    <div class="col-sm-10">
                        <div class="custom-file">
                            <input type="file" name="photos[]" class="custom-file-input" id="customFileLangHTML" required>
                            <label class="custom-file-label" for="customFileLangHTML" data-browse="Parcourir">Choisir un fichier</label>
                        </div>
                    </div>
                </div>
            </fieldset>

            <fieldset class="bg-light" style="padding-inline:15px">
                <legend>Descriptif 1</legend>
                <div class="form-group row">
                    <label for="tag" class="col-sm-2 col-form-label">Titre</label>
                    <div class="col-sm-10">
                        <input type="text" name="title[]" class="form-control" id="tag" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="reference" class="col-sm-2 col-form-label">Image</label>
                    <div class="col-sm-10">
                        <div class="custom-file">
                            <input type="file" name="image[]" class="custom-file-input" id="customFileLangHTML" required>
                            <label class="custom-file-label" for="customFileLangHTML" data-browse="Parcourir">Choisir un fichier</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Texte</label>
                    <div class="col-sm-10">
                        <textarea name="text[]" class="form-control" rows="10" required></textarea>
                    </div>
                </div>
            </fieldset>

            <fieldset class="bg-light" style="padding-inline:15px">
                <legend>Descriptif 2</legend>
                <div class="form-group row">
                    <label for="tag" class="col-sm-2 col-form-label">Titre</label>
                    <div class="col-sm-10">
                        <input type="text" name="title[]" class="form-control" id="tag" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="reference" class="col-sm-2 col-form-label">Image</label>
                    <div class="col-sm-10">
                        <div class="custom-file">
                            <input type="file" name="image[]" class="custom-file-input" id="customFileLangHTML" required>
                            <label class="custom-file-label" for="customFileLangHTML" data-browse="Parcourir">Choisir un fichier</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Texte</label>
                    <div class="col-sm-10">
                        <textarea name="text[]" class="form-control" rows="10" required></textarea>
                    </div>
                </div>
            </fieldset>

            <fieldset class="bg-light" style="padding-inline:15px">
                <legend>Descriptif 3</legend>
                <div class="form-group row">
                    <label for="tag" class="col-sm-2 col-form-label">Titre</label>
                    <div class="col-sm-10">
                        <input type="text" name="title[]" class="form-control" id="tag" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="reference" class="col-sm-2 col-form-label">Image</label>
                    <div class="col-sm-10">
                        <div class="custom-file">
                            <input type="file" name="image[]" class="custom-file-input" id="customFileLangHTML" required>
                            <label class="custom-file-label" for="customFileLangHTML" data-browse="Parcourir">Choisir un fichier</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Texte</label>
                    <div class="col-sm-10">
                        <textarea name="text[]" class="form-control" rows="10" required></textarea>
                    </div>
                </div>
            </fieldset>
        </form>   
    </div>
</div>
<?php require './footer-admin.php'; ?>