
<?php $__env->startSection('contenu'); ?>
<br> 
<div class="text-center">
    
    <b><label style="" class="text-primary">NOUVEAU CORRESPONDANT</label></b>
</div>

<hr>
<br>
<form class="form-horizontal col-sm-10 offset-1" role="form" method="POST" action="<?php echo e(route('correspondant.update',[$correspondant->idcorrespondant])); ?>" enctype="multipart/form-data">
    <?php echo e(method_field('PUT')); ?>

    <?php echo e(csrf_field()); ?>	

    <div class="col-sm-12">  <!-- Bloc 1-->
        <div class="card"> 
            <div class=" card text-center card-header">IDENTITE DU CORRESPONDANT</div>
            <div class="card-body">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="nom">NOM:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="nom" value="<?php echo e($correspondant->nom); ?>" name="nom">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="prenom">PRENOM (S):</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="prenom" value="<?php echo e($correspondant->prenom); ?>" name="prenom">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="profession">PROFESSSION:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="profession" value="<?php echo e($correspondant->profession); ?>" name="profession">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-sm-3" for="sexe">GENRE :</label>
                    <div class="col-sm-5">
                        <select class="form-control" id="sexe" name="sexe">
                            <option value="HOMME">HOMME</option>
                            <option value="FEMME">FEMME</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="datenaissance">DATE DE NAISSANCE</label>
                    <div class="col-sm-4">
                        <input type="date" class="form-control" id="datenaissance" value="<?php echo e($correspondant->datenaissance); ?>" name="datenaissance">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="lieunaissance">LIEU DE NAISSANCE:</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="lieunaissance" value="<?php echo e($correspondant->lieunaissance); ?>" name="lieunaissance">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="nationalite">NATIONALITE:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="nationalite" value="<?php echo e($correspondant->nationalite); ?>" name="nationalite">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="telephone">TELEPHONE 1:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="telephone" value="<?php echo e($correspondant->telephone); ?>" name="telephone">
                    </div>
                </div> 
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="telephone2">TELEPHONE 2:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="telephone" value="<?php echo e($correspondant->telephone2); ?>" name="telephone2">
                        <label><i>Indiquer votre numero whatsapp</i></label>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" >TYPE CORRESPONDANT :</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" value="<?php echo e($correspondant->typecorrespondant); ?>"   name="typecorrespondant">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" >EMAIL :</label>
                    <div class="col-sm-7">
                        <input type="email" class="form-control" value="<?php echo e($correspondant->mail); ?>"  name="mail">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="region">REGION:</label>
                    <div class="col-sm-5">
                        <select class="form-control" name="region">
                            <option>Centre</option>
                            <option>Nord</option>
                        </select>
                        <label><i>Region de residence au Burkina Faso</i></label>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="lieuresidence">LIEU DE RESIDENCE:</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="lieuresidence" value="<?php echo e($correspondant->lieuresidence); ?>" name="lieuresidence">
                        <label><i>La province,La ville, le secteur, le quartier</i></label>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="numcnib">N° CNI:</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="numcnib" value="<?php echo e($correspondant->cnib); ?>" name="cnib">
                        <label><i>Numero de la Carte Nationale d'Identité </i></label>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="datedelivcnib">DATE DE DELIVRANCE</label>
                    <div class="col-sm-4">
                        <input type="date" class="form-control" id="datedelivcnib" value="<?php echo e($correspondant->datedelivcnib); ?>" name="datedelivcnib">
                        <div class="">
                            <label><i>Date de delivrance de la Carte Nationale d'Identite</i></label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="dateexpircnib">DATE D'EXPIRATION</label>
                    <div class="col-sm-4">
                        <input type="date" class="form-control" id="dateexpircnib" value="<?php echo e($correspondant->dateexpircnib); ?>" name="dateexpircnib">
                        <label><i>Date d'expiration de la CNIB</i></label>
                    </div>
                </div> 
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="numPasseport">N° PASSPORT:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="numPasseport" value="<?php echo e($correspondant->passeport); ?>" name="passeport">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="carteconsulaire">N° CARTE CONSULAIRE:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="carteconsulaire" value="<?php echo e($correspondant->carteconsulaire); ?>" name="carteconsulaire">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="carteconsulaire">N° CARTE DE PRESSE:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="carteconsulaire" value="<?php echo e($correspondant->numcartepresse); ?>" name="numcartepresse">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="personneprevenir">PERSONNE A PREVENIR:</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="personneprevenir" value="<?php echo e($correspondant->personneprevenir); ?>" name="personneprevenir">
                        <label><i>Nom et Prenom(s) de la personne à prevenir</i></label>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="telephonepersp">TELEPHONE:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="telephonepersp" value="<?php echo e($correspondant->telephonepersp); ?>" name="telephonepersp">
                        <label><i>Telephone de la personne à prevenir</i></label>
                    </div>
                </div> 
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="references">REFERENCES JOURNALISTIQUES :</label>
                    <div class="col-sm-7">
                        <textarea class="form-control" name="refjournal"><?php echo e($correspondant->refjournal); ?></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="parcours">PARCOURS PROFESSIONNEL :</label>
                    <div class="col-sm-7">
                        <textarea class="form-control" name="parcourspro" rows="5"><?php echo e($correspondant->parcourspro); ?></textarea>
                    </div>
                </div>
                <input type="hidden" value="1" name="actif">
            </div>
        </div>				
    </div>
    <p>

    <div class="col-sm-12">  <!-- Bloc 2-->
        <div class="card"> <div class=" card text-center card-header">INFORMATIONS SUR L'ORGANE DE PRESSE</div>
            <div class="card-body">
                <div class="form-group row">
                    <label for="organe" class="col-sm-3 col-form-label">NOM DE L'ORGANE</label>
                    <div class="col-sm-8">
                        <input class="form-control" id="telorgane" value="<?php echo e($correspondant->organe); ?>" type="text" name="organe"/>          
                    </div>

                </div>
                <div class="form-group row">
                    <label for="organe" class="col-sm-3 col-form-label">TYPE DE PRESSE</label>
                    <div class="col-sm-5">
                        <select class="form-control" name="typepresse">
                            <option>Presse Ecrite</option>                       
                            <option>Radio</option>
                            <option>Tele</option>   
                            <option>Presse En Ligne</option>
                        </select>
                    </div>

                </div>

                <p></p>

                <div class="form-group row">
                    <label for="telorgane" class="col-sm-3 col-form-label">TELEPHONE</label>
                    <div class="col-sm-4">
                        <input class="form-control" id="telorgane" value="<?php echo e($correspondant->telorgane); ?>" type="text" name="telorgane"/>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="adressestruct" class="col-sm-3 col-form-label">ADRESSE</label>
                    <div class="col-sm-7">
                        <input class="form-control" id="adressestruct" value="<?php echo e($correspondant->adressestruct); ?>" type="text" name="adressestruct" />
                    </div>
                </div>
                <input type="hidden" value="<?php echo e($idcorrespondant); ?>"name="idcorrespondant"> 
                 <input type="hidden" value="<?php echo e($idpiecesjointes); ?>"name="idpiecesjointes"> 
            </div> 
        </div>   
    </div>
    <br>

    <div class="text-center">
        <button class="btn btn-primary" type="submit">MODIFIER</button>
        <button class="btn btn-primary" type="reset">ANNULER</button>

    </div>
    <p></p>
</form>
</body>
<br>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('tprecop.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\RECOP\resources\views/correspondant/modif_correspondant.blade.php ENDPATH**/ ?>