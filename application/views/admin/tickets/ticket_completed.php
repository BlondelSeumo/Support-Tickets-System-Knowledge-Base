<div class="tile mb30">
    <div class="tile-title-w-btn">
        <div class="title">
        <h3><?= $title; ?></h3>
        </div>
        <p><button class="btn btn-theme-grey btn-fab close-panel-button"><i class="feather icon-x"></i></button></p>
    </div>
    <div class="tile-content">
        <div class="text-center mt50 mb50">
            <div class="mb15"><img src="<?= base_url();?>assets/images/completed-ticket.svg" alt="<?= $title; ?>"></div>
            <p><?= $this->lang->line("text_complete_info"); ?></p>
            <p>
                <button class="btn btn-success btn-lg btn-oval" id="confirmCompleteButton" data-id="<?= $ticket_id; ?>"><i class="feather icon-check-circle"></i> <?= $this->lang->line("text_complete"); ?></button>
                <button class="btn btn-outline-theme-grey btn-lg btn-oval close-panel-button"><i class="feather icon-x-circle"></i> <?= $this->lang->line("text_cancel"); ?></button>
            </p>
        </div>
    </div>
</div>

