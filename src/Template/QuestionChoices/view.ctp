<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="mdl-grid">
                    <div class="mdl-cell mdl-cell--12-col-desktop mdl-cell--8-col-tablet">
                        <div class="mdl-card session-list-card " style="overflow-y : auto; height : 650px;">
                            <div class="mdl-card__actions mdl-card--border">
                                <h4 class="profil-list-titre">Informations sur une réponse donnée</h4>
                            </div>
                            <hr>
                            <h3 style="margin-left:30px;">Question : <?= h($questionChoice->text) ?></h3>
                            <h6 style="margin-left:30px;"><b>ID Question : </b><?= $this->Number->format($questionChoice->id) ?></h6>
                            <h6 style="margin-left:30px; margin-top:0px;"><b>ID Session : </b><?= $this->Number->format($questionChoice->sessionId) ?></h6><br />
                            <h6 style="margin-left:30px; margin-top:-20px;"><b>Type "Question ouverte" : </b><?= $questionChoice->isOpenQuestion ? __('Yes') : __('No'); ?></h6><br />
                            <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                            <div style="align : center; margin-left:30px;"><a href="/questions/" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" style="background-color: #3d91ff; color : #ffffff;">
                                    < Retour à la liste
                                </a> 
                                <?php if ($this->request->session()->read('Auth.User.isAdmin') || $this->request->session()->read('Auth.User.isTeacher') ) : ?>
                                    <a href="/questions/edit/<?= $this->Number->format($questionChoice->id) ?>" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" style="background-color: #00c96f; color : #ffffff;">
                                        Editer cette session
                                    </a> 
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>