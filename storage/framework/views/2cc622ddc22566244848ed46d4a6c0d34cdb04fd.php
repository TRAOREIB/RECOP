
<?php $__env->startSection('contenu'); ?>
<br>
<div class="text-center">
    
    <b><label style="" class="text-primary">NOUVEAU CORRESPONDANT</label></b>
</div>

<hr>
<br>

<form class="form-horizontal was-validated col-sm-10 offset-1" role="form" method="POST" action="<?php echo e(route('correspondant.update',[$correspondant->idcorrespondant])); ?>" enctype="multipart/form-data">
    <?php echo e(method_field('PUT')); ?>

    <?php echo e(csrf_field()); ?>


    <div class="col-sm-12">
        <!-- Bloc 1-->
        <div class="card">
            <div class=" card text-center card-header">IDENTITE DU CORRESPONDANT</div>
            <div class="card-body">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="nom">NOM:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="nom" value="<?php echo e($correspondant->nom); ?>" name="nom" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="prenom">PRENOM (S):</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="prenom" value="<?php echo e($correspondant->prenom); ?>" name="prenom" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="profession">PROFESSSION:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="profession" value="<?php echo e($correspondant->profession); ?>" name="profession" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-sm-3" for="sexe">GENRE :</label>
                    <div class="col-sm-5">
                        <select class="form-control" id="sexe" name="sexe">
                            <option value="Maculin">Masculin</option>
                            <option value="Feminin">Feminin</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="datenaissance">DATE DE NAISSANCE</label>
                    <div class="col-sm-4">
                        <input type="date" class="form-control" id="datenaissance" value="<?php echo e($correspondant->datenaissance); ?>" name="datenaissance" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="lieunaissance">LIEU DE NAISSANCE:</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="lieunaissance" value="<?php echo e($correspondant->lieunaissance); ?>" name="lieunaissance" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="nationalite">NATIONALITE:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="nationalite" value="<?php echo e($correspondant->nationalite); ?>" name="nationalite">
                    </div>
                </div>
                <?php if($typecorrespondant=="Journaliste independant" || $typecorrespondant=="Correspondant international"): ?>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="nationalite">AUTRE NATIONALITE <span style="color:red">*</span></label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control <?php $__errorArgs = ['autrenationalite'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="autrenationalite" placeholder=" " name="autrenationalite" value="<?php echo e($correspondant->autrenationalite); ?>" required>
                        <?php $__errorArgs = ['autrenationalite'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="invalid-feedback"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
                <?php endif; ?>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="telephone">TELEPHONE 1:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="telephone" value="<?php echo e($correspondant->telephone); ?>" name="telephone" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="telephone2">TELEPHONE 2:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="telephone" value="<?php echo e($correspondant->telephone2); ?>" name="telephone2" required>
                        <label><i>Indiquer votre numero whatsapp</i></label>
                    </div>
                </div>
                       
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">EMAIL :</label>
                    <div class="col-sm-7">
                        <input type="email" class="form-control" value="<?php echo e($correspondant->mail); ?>" name="mail" required>
                    </div>
                </div>
                <?php if($typecorrespondant=="Correspondant national"): ?>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="region">REGION:</label>
                    <div class="col-sm-8">
                        <select class="form-control" name="region">
                            <?php $__currentLoopData = $allregions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $region): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option class="col-sm-7"><?php echo e($region->nomregion); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <label><i>Region de residence au Burkina Faso</i></label>
                    </div>
                </div>
                <?php endif; ?>
                <?php if($typecorrespondant=="Correspondant international"): ?>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="region">REGION DE RESIDENCE <span style="color:red">*</span></label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control <?php $__errorArgs = ['region'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="region" placeholder=" " name="region" value="<?php echo e($correspondant->region); ?>" required>
                        <?php $__errorArgs = ['region'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="invalid-feedback"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
                <?php endif; ?>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="lieuresidence">LIEU DE RESIDENCE:</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="lieuresidence" value="<?php echo e($correspondant->lieuresidence); ?>" name="lieuresidence" required>
                        <label><i>La province,La ville, le secteur, le quartier</i></label>
                    </div>
                </div>
                <?php if($typecorrespondant=="Correspondant national"): ?>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="numcnib">N° CNI:</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="numcnib" value="<?php echo e($correspondant->cnib); ?>" name="cnib" required>
                        <label><i>Numero de la Carte Nationale d'Identité </i></label>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="datedelivcnib">DATE DE DELIVRANCE</label>
                    <div class="col-sm-4">
                        <input type="date" class="form-control" id="datedelivcnib" value="<?php echo e($correspondant->datedelivcnib); ?>" name="datedelivcnib" required>
                        <div class="">
                            <label><i>Date de delivrance de la Carte Nationale d'Identite</i></label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="dateexpircnib">DATE D'EXPIRATION</label>
                    <div class="col-sm-4">
                        <input type="date" class="form-control" id="dateexpircnib" value="<?php echo e($correspondant->dateexpircnib); ?>" name="dateexpircnib" required>
                        <label><i>Date d'expiration de la CNIB</i></label>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="numPasseport">N° PASSPORT:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="numPasseport" value="<?php echo e($correspondant->passeport); ?>" name="passeport" required>
                    </div>
                </div>
                <?php endif; ?>
                <?php if($typecorrespondant=="Journaliste independant" || $typecorrespondant=="Correspondant international"): ?>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="numPasseport">N° PASSPORT:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="numPasseport" value="<?php echo e($correspondant->passeport); ?>" name="passeport" required>
                    </div>
                </div>
                <?php endif; ?>
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
                    <label class="col-sm-3 col-form-label" for="references">REFERENCES JOURNALISTIQUES :</label>
                    <div class="col-sm-7">
                        <textarea class="form-control" name="refjournal" required><?php echo e($correspondant->refjournal); ?></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="parcours">PARCOURS PROFESSIONNEL :</label>
                    <div class="col-sm-7">
                        <textarea class="form-control" name="parcourspro" rows="5" required><?php echo e($correspondant->parcourspro); ?></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="personneprevenir">PERSONNE DE REFERENCE:</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="personneprevenir" value="<?php echo e($correspondant->personneprevenir); ?>" name="personneprevenir" required>
                        <label><i>Nom et Prenom(s) de la personne à prevenir</i></label>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="telephonepersp">TELEPHONE PERSONNE DE REFERENCE:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="telephonepersp" value="<?php echo e($correspondant->telephonepersp); ?>" name="telephonepersp" required>
                        <label><i>Telephone de la personne à prevenir</i></label>
                    </div>
                </div>
                <input type="hidden" value="1" name="actif">
            </div>
        </div>
    </div>
    <p>

    <div class="col-sm-12">
        <!-- Bloc 2-->

        <?php if($typecorrespondant=="Journaliste independant"): ?>
        <div class="card">
            <div class=" card text-center card-header">INFORMATIONS SUR L'ORGANE DE PRESSE</div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <th>Nom de l'organe de Presse</th>
                        <th>Type de presse</th>
                        <th>Telephone de l'organe</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="form-group">
                                    <input type="text" class="form-control col-sm-12" value="<?php echo e($correspondant->organe1); ?>" name="organe1" required>
                                </div>
                            </td>
                            <td>
                                <select class="form-control" required name="typepresse1">
                                    <?php if($correspondant->typepresse1=="Presse Ecrite"): ?>
                                    <option selected>Presse Ecrite</option>
                                    <?php else: ?>
                                    <option>Presse Ecrite</option>
                                    <?php endif; ?>
                                    <?php if($correspondant->typepresse1=="Radio"): ?>
                                    <option selected>Radio</option>
                                    <?php else: ?>
                                    <option>Radio</option>
                                    <?php endif; ?>
                                    <?php if($correspondant->typepresse1=="Tele"): ?>
                                    <option selected>Tele</option>
                                    <?php else: ?>
                                    <option>Tele</option>
                                    <?php endif; ?>
                                    <?php if($correspondant->typepresse1=="Radio/Tele"): ?>
                                    <option selected>Radio/Tele</option>
                                    <?php else: ?>
                                    <option>Radio/Tele</option>
                                    <?php endif; ?>
                                    <?php if($correspondant->typepresse1=="Radio/Tele/Presse Ecrite"): ?>
                                    <option selected>Radio/Tele/Presse Ecrite</option>
                                    <?php else: ?>
                                    <option>Radio/Tele/Presse Ecrite</option>
                                    <?php endif; ?>
                                    <?php if($correspondant->typepresse1=="Radio/Tele/Presse Ecrite/Presse en Ligne"): ?>
                                    <option selected>Radio/Tele/Presse Ecrite/Presse en Ligne</option>
                                    <?php else: ?>
                                    <option>Radio/Tele/Presse Ecrite/Presse en Ligne</option>
                                    <?php endif; ?>
                                    <?php if($correspondant->typepresse1=="Presse en Ligne/Presse Ecrite"): ?>
                                    <option selected>Presse en Ligne/Presse Ecrite</option>
                                    <?php else: ?>
                                    <option>Presse en Ligne/Presse Ecrite</option>
                                    <?php endif; ?>
                                    <?php if($correspondant->typepresse1=="Presse En Ligne"): ?>
                                    <option selected>Presse En Ligne</option>
                                    <?php else: ?>
                                    <option>Presse En Ligne</option>
                                    <?php endif; ?>
                                </select>
                            </td>
                            <td>
                                <input type="text" class="form-control col-sm-12" name="telorgane1" value="<?php echo e($correspondant->telorgane1); ?>" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-group">
                                    <input type="text" class="form-control col-sm-12" name="organe2" value="<?php echo e($correspondant->organe2); ?>">
                                </div>
                            </td>
                            <td>
                            <select class="form-control" required name="typepresse2"> 
                                    <?php if($correspondant->typepresse2=="Presse Ecrite"): ?>
                                    <option selected value="Presse Ecrite">Presse Ecrite</option>
                                    <?php else: ?>
                                    <option value="Presse Ecrite">Presse Ecrite</option>
                                    <?php endif; ?> 
                                    <?php if($correspondant->typepresse2=='Radio'): ?>
                                    <option selected='selected' value="Radio">Radio</option>
                                    <?php else: ?>
                                    <option value="Radio">Radio</option>
                                    <?php endif; ?>
                                    <?php if($correspondant->typepresse2=="Tele"): ?>
                                    <option selected value="Tele">Tele</option>
                                    <?php else: ?>
                                    <option value="Tele">Tele</option>
                                    <?php endif; ?>
                                    <?php if($correspondant->typepresse2=="Radio/Tele"): ?>
                                    <option selected value="Radio/Tele">Radio/Tele</option>
                                    <?php else: ?>
                                    <option value="Radio/Tele">Radio/Tele</option>
                                    <?php endif; ?>
                                    <?php if($correspondant->typepresse2=="Radio/Tele/Presse Ecrite"): ?>
                                    <option selected value="Radio/Tele/Presse Ecrite">Radio/Tele/Presse Ecrite</option>
                                    <?php else: ?>
                                    <option value="Radio/Tele/Presse Ecrite">Radio/Tele/Presse Ecrite</option>
                                    <?php endif; ?>
                                    <?php if($correspondant->typepresse2=="Radio/Tele/Presse Ecrite/Presse en Ligne"): ?>
                                    <option selected value="Radio/Tele/Presse Ecrite/Presse en Ligne">Radio/Tele/Presse Ecrite/Presse en Ligne</option>
                                    <?php else: ?>
                                    <option value="Radio/Tele/Presse Ecrite/Presse en Ligne">Radio/Tele/Presse Ecrite/Presse en Ligne</option>
                                    <?php endif; ?>
                                    <?php if($correspondant->typepresse2=="Presse en Ligne/Presse Ecrite"): ?>
                                    <option selected value="Presse en Ligne/Presse Ecrite">Presse en Ligne/Presse Ecrite</option>
                                    <?php else: ?>
                                    <option value="Presse en Ligne/Presse Ecrite">Presse en Ligne/Presse Ecrite</option>
                                    <?php endif; ?>
                                    <?php if($correspondant->typepresse2=="Presse En Ligne"): ?>
                                    <option selected value="Presse En Ligne">Presse En Ligne</option>
                                    <?php else: ?>
                                    <option value="Presse En Ligne">Presse En Ligne</option>
                                    <?php endif; ?>
                                </select>
                            </td>
                            <td>
                                <input type="text" class="form-control col-sm-12" name="telorgane2" value="<?php echo e($correspondant->telorgane2); ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-group">
                                    <input type="text" class="form-control col-sm-12" name="organe3" value="<?php echo e($correspondant->organe3); ?>">
                                </div>
                            </td>
                            <td>
                            <select class="form-control" required name="typepresse3">  
                                    <?php if($correspondant->typepresse3=="Presse Ecrite"): ?>
                                    <option selected>Presse Ecrite</option>
                                    <?php else: ?>
                                    <option>Presse Ecrite</option>
                                    <?php endif; ?> 
                                    <?php if($correspondant->typepresse3=="Radio"): ?>
                                    <option selected>Radio</option>
                                    <?php else: ?>
                                    <option>Radio</option>
                                    <?php endif; ?>
                                    <?php if($correspondant->typepresse3=="Tele"): ?>
                                    <option selected>Tele</option>
                                    <?php else: ?>
                                    <option>Tele</option>
                                    <?php endif; ?>
                                    <?php if($correspondant->typepresse3=="Radio/Tele"): ?>
                                    <option selected>Radio/Tele</option>
                                    <?php else: ?>
                                    <option>Radio/Tele</option>
                                    <?php endif; ?>
                                    <?php if($correspondant->typepresse3=="Radio/Tele/Presse Ecrite"): ?>
                                    <option selected>Radio/Tele/Presse Ecrite</option>
                                    <?php else: ?>
                                    <option>Radio/Tele/Presse Ecrite</option>
                                    <?php endif; ?>
                                    <?php if($correspondant->typepresse3=="Radio/Tele/Presse Ecrite/Presse en Ligne"): ?>
                                    <option selected>Radio/Tele/Presse Ecrite/Presse en Ligne</option>
                                    <?php else: ?>
                                    <option>Radio/Tele/Presse Ecrite/Presse en Ligne</option>
                                    <?php endif; ?>
                                    <?php if($correspondant->typepresse3=="Presse en Ligne/Presse Ecrite"): ?>
                                    <option selected>Presse en Ligne/Presse Ecrite</option>
                                    <?php else: ?>
                                    <option>Presse en Ligne/Presse Ecrite</option>
                                    <?php endif; ?>
                                    <?php if($correspondant->typepresse3=="Presse En Ligne"): ?>
                                    <option selected>Presse En Ligne</option>
                                    <?php else: ?>
                                    <option>Presse En Ligne</option>
                                    <?php endif; ?>
                                </select>
                            </td>
                            <td>
                                <input type="text" class="form-control col-sm-12" name="telorgane3" value="<?php echo e($correspondant->telorgane3); ?>">
                            </td>
                        </tr>
                    </tbody>
                </table>
                <input type='hidden' value="<?php echo e($typecorrespondant); ?>" name='typecorrespondant'>
                <input type="hidden" value="<?php echo e($idcorrespondant); ?>" name="idcorrespondant">
            </div>
        </div>
        <?php endif; ?>
        <?php if($typecorrespondant!="Journaliste independant"): ?>
        <div class="card">
            <div class=" card text-center card-header">INFORMATIONS SUR L'ORGANE DE PRESSE</div>
            <div class="card-body">
                <div class="form-group row">
                    <label for="organe" class="col-sm-3 col-form-label">NOM DE L'ORGANE</label>
                    <div class="col-sm-8">
                        <input class="form-control" id="telorgane" value="<?php echo e($correspondant->organe); ?>" type="text" name="organe" />
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
                        <input class="form-control" id="telorgane" value="<?php echo e($correspondant->telorgane); ?>" type="text" name="telorgane" />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="adressestruct" class="col-sm-3 col-form-label">ADRESSE</label>
                    <div class="col-sm-7">
                        <input class="form-control" id="adresseorgane" value="<?php echo e($correspondant->adresseorgane); ?>" type="text" name="adresseorgane" />
                    </div>
                </div>
                <input type="hidden" value="<?php echo e($idcorrespondant); ?>" name="idcorrespondant">
                <input type="hidden" value="<?php echo e($idpiecesjointes); ?>" name="idpiecesjointes">
            </div>
        </div>
        <?php endif; ?>
    </div>
    <br>
    <input type="hidden" class="form-control" value="<?php echo e($typecorrespondant); ?>" name="typecorrespondant">
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