<?php
/**
  * @var \App\View\AppView $this
  */
?>

                <div class="mdl-grid">
                    <div class="mdl-cell mdl-cell--12-col-desktop mdl-cell--8-col-tablet">
                        <div class="mdl-card session-list-card " style="overflow-y : auto; height : 650px;">
                            <div class="mdl-card__actions mdl-card--border">
                                <h4 class="profil-list-titre">Créer une nouvelle session</h4>
                            </div>
                            <?= $this->Form->create($session) ?>
                            <fieldset style="padding :30px;">
                                <?php
                                    echo $this->Form->control('id', array('class' => 'mdl-textfield__input'));
                                    echo '<br />';
                                    echo $this->Form->control('name', array('class' => 'mdl-textfield__input'));
                                    echo '<br />';
                                    echo $this->Form->control('userId', array('class' => 'mdl-textfield__input'));
                                    echo '<br />';
                                    echo $this->Form->control('classId', array('class' => 'mdl-textfield__input'));
                                    echo '<br />';
                                    echo $this->Form->control('date', ['empty' => false], array('class' => 'mdl-textfield__input'));
                                    echo '<br />';
                                    echo '<br />';
                                    echo '<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="hasQuestions">';
                                    echo '<input type="checkbox" id="hasQuestions" class="mdl-switch__input">';
                                    echo '<span class="mdl-switch__label">Cette session contient un QCM</span>';
                                    echo '</label>';
                                    echo '<br />';
                                    echo '<br />';
                                ?>
                            </fieldset>
                            
                            <span style="padding :30px;">
                                <button class="mdl-button" 
                                type="submit" name="submit" style="width : 200px" 
                                data-upgraded=",MaterialButton">Valider
                                </button>
                                <?= $this->Form->end() ?>
                            </span>
                        </div>
                    </div>
                </div>
          
