<div class="tile mb30">
    <div class="tile-title-w-btn">
        <div class="title">
        <h3><?= $title; ?></h3>
        </div>
        <p><button class="btn btn-theme-grey btn-fab close-panel-button"><i class="feather icon-x"></i></button></p>
    </div>
    <div class="tile-content">
        <form id="addFaqForm" action="#" method="POST">
            <div class="form-group">
                <label for="inputFaqCategory"><?= $this->lang->line("text_category"); ?></label>
                <select id="inputFaqCategory" class="form-control" name="category">
                    <option value="">--<?= $this->lang->line("text_select_category"); ?>--</option>
                    <?php if(isset($categories) && $categories!=NULL) { foreach($categories as $category) { ?>
                    <option value="<?= $category['id'] ?>"><?= $category['category_name'] ?></option>
                    <?php } } ?>
                </select>
            </div>
            <div class="form-group">
                <label for="inputFaqTitle"><?= $this->lang->line("text_title"); ?></label>
                <input type="text" id="inputFaqTitle" class="form-control" name="title" placeholder="<?= $this->lang->line("text_enter_title"); ?>">
            </div>
            <div class="form-group">
                <label for="inputFaqContent"><?= $this->lang->line("text_content"); ?></label>
                <textarea id="inputFaqContent" class="form-control" name="content" placeholder="<?= $this->lang->line("text_enter_content"); ?>"></textarea>
            </div>
            <div class="form-group">
                <label for="inputStatus"><?= $this->lang->line("text_publish"); ?></label>
                <div class="toggle lg">
                    <label>
                        <input type="checkbox" name="publish" id="inputStatus"><span class="button-indecator"></span>
                    </label>
                </div>
            </div>
            <div class="form-group">
                <button id="createFaqButton" class="btn btn-theme-secondary btn-lg btn-oval ladda-button" data-style="expand-right" data-size="xs"
                                    type="submit"><span class="ladda-label"><i class="feather icon-save"></i> <?= $this->lang->line("text_create_faq"); ?></span></button>
            </div>
        </form>
    </div>
</div>
