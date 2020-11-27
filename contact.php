<?php
require_once 'config.php';
require 'header.php'?>
<div class="container">
<h2 class="">Horaire d'ouverture</h2>
<p>En moyenne</p>
<?=cr();?>
<br>
<strong> Par detail</strong>
<ul>
    <?=cren();?>
</ul>
<ul class=" container">
    <?=ver();?>
</ul>
<ul>
<h3 class="">Veuiller selectionner votre jour vous venez au magasin  de votre disponibilité </h3>
<form action="" method="GET">
    <div class="form-group container">
                <div class="container jumbotron">
                    <br>
                    <h5 class="md-5 display-6">Jour</h5>
                    <br>
                    <select class="form-control" name="jour">
                        <?php 
                            foreach(JOURS as $k1=>$day): ?>
                        <option value="<?=$k1?>"><?php echo"$day" ?></option>
                            <?php  endforeach; ?>
                    </select>
                    <br>
                    <h5 class="md-5 display-6">Heure</h5>
                    <br>
                    <div class="form-group">
                    <input  type="number" class="center rounded" name="hour" value="<?=$hour?>"><br>
                    <br>
                    </div> 
                    <button class="btn btn-primary col-lg-12" type="submit">Verifier si la magasin est ouvert</button>
                   <br>
                   <br>
                   <?php
                       if((int)($_GET['hour']) != 0 && (int)($_GET['hour']) <25 && (int)($_GET['hour'])>0){
                           veru();
                       }
                       else{
                            echo '<div class="alert alert-danger">
                            <strong>Vous mal ecrit la date ou vous n\'avez rien saisi</strong>
                             </div>';
                       }
                       

                   ?>            
                </div>
            <br>
    

    </div>
</form>
</ul>

</ul>
</div>

 
