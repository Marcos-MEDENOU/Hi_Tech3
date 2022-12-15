<?php require './header-admin.php'; ?>

    <div class="col-9" style="padding-top:20px;padding-right:40px">
       
        <div class="d-flex justify-content-between pb-3">
            <div>   
                <button class="btn btn-white text-dark border-dark" type="submit">
                    <i class="bi bi-x"></i>
                    <a href="./products.php" class="text-secondary" style="text-decoration:none">Annuler la modification</a>
                </button>  
            </div>
            <div>
                <button type="button" class="btn btn-primary "  data-toggle="modal" data-target="#myModal">
                    <i class="bi bi-check-lg"></i>
                    Valider et enregistrer la fiche
                </button>
            </div>     
        </div>
        <form action="">
            <fieldset class="bg-light" style="padding-inline:15px">
                <legend class="ont-weight-bold">Gestion</legend>
                <div class="form-group row">
                    <legend class="col-form-label col-sm-2 float-sm-left pt-0">Statut</legend>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                            <label class="form-check-label" for="gridRadios1">
                                En attente de mise en ligne
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                            <label class="form-check-label text-success" for="gridRadios2">
                                En boutique
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
                            <label class="form-check-label text-danger" for="gridRadios3">
                                Retiré
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="shop" class="col-sm-2 col-form-label">Boutique</label>
                    <div class="col-sm-10">
                        <select class="form-control" id="shop">
                            <option>Périphériques & composants</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="ray" class="col-sm-2 col-form-label">Rayon</label>
                    <div class="col-sm-10">
                        <select class="form-control" id="ray">
                            <option>Ecrans d'ordinateur</option>
                        </select>
                    </div>
                </div>
            </fieldset>

            <fieldset class="bg-light" style="padding-inline:15px">
                <legend>Présentation</legend>
                <div class="form-group row">
                    <label for="brand" class="col-sm-2 col-form-label">Marque</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="brand">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="reference" class="col-sm-2 col-form-label">Référence</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="reference">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tag" class="col-sm-2 col-form-label">Etiquettes</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="tag">
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
                            <input type="text" class="form-control" id="price" placeholder="109,94">
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
                            <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="1,70">
                            <div class="input-group-prepend">
                                <div class="input-group-text">£</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Description principal (MarkDown)</label>
                    <div class="col-sm-10">
                        <textarea name="" id="" class="form-control" rows="10"></textarea>
                    </div>
                </div>
            </fieldset>

            <fieldset class="bg-light" style="padding-inline:15px">
                <legend>Photos</legend>
                <div class="form-group row">
                    <label for="reference" class="col-sm-2 col-form-label">Photo 1</label>
                    <div class="col-sm-10">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFileLangHTML">
                            <label class="custom-file-label" for="customFileLangHTML" data-browse="Parcourir">Choisir un fichier</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="reference" class="col-sm-2 col-form-label">Photo 2</label>
                    <div class="col-sm-10">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFileLangHTML">
                            <label class="custom-file-label" for="customFileLangHTML" data-browse="Parcourir">Choisir un fichier</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="reference" class="col-sm-2 col-form-label">Photo 3</label>
                    <div class="col-sm-10">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFileLangHTML">
                            <label class="custom-file-label" for="customFileLangHTML" data-browse="Parcourir">Choisir un fichier</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="reference" class="col-sm-2 col-form-label">Photo 4</label>
                    <div class="col-sm-10">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFileLangHTML">
                            <label class="custom-file-label" for="customFileLangHTML" data-browse="Parcourir">Choisir un fichier</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="reference" class="col-sm-2 col-form-label">Photo 5</label>
                    <div class="col-sm-10">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFileLangHTML">
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
                        <input type="text" class="form-control" id="tag">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="reference" class="col-sm-2 col-form-label">Image</label>
                    <div class="col-sm-10">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFileLangHTML">
                            <label class="custom-file-label" for="customFileLangHTML" data-browse="Parcourir">Choisir un fichier</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Texte</label>
                    <div class="col-sm-10">
                        <textarea name="" id="" class="form-control" rows="10"></textarea>
                    </div>
                </div>
            </fieldset>

            <fieldset class="bg-light" style="padding-inline:15px">
                <legend>Descriptif 2</legend>
                <div class="form-group row">
                    <label for="tag" class="col-sm-2 col-form-label">Titre</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="tag">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="reference" class="col-sm-2 col-form-label">Image</label>
                    <div class="col-sm-10">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFileLangHTML">
                            <label class="custom-file-label" for="customFileLangHTML" data-browse="Parcourir">Choisir un fichier</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Texte</label>
                    <div class="col-sm-10">
                        <textarea name="" id="" class="form-control" rows="10"></textarea>
                    </div>
                </div>
            </fieldset>

            <fieldset class="bg-light" style="padding-inline:15px">
                <legend>Descriptif 3</legend>
                <div class="form-group row">
                    <label for="tag" class="col-sm-2 col-form-label">Titre</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="tag">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="reference" class="col-sm-2 col-form-label">Image</label>
                    <div class="col-sm-10">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFileLangHTML">
                            <label class="custom-file-label" for="customFileLangHTML" data-browse="Parcourir">Choisir un fichier</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Texte</label>
                    <div class="col-sm-10">
                        <textarea name="" id="" class="form-control" rows="10"></textarea>
                    </div>
                </div>
            </fieldset>
        </form>   
    </div>
</div>
<?php require './footer-admin.php'; ?>