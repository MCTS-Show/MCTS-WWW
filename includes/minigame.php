<div class="minigame-container">
    <div
        class="shine-img animated-img pixelated"
        style="mask: url('assets/images/minigames/<?php echo $game_id; ?>.png');
        width: 120px;
        height: 120px;"
        onclick="
                document.getElementById('heading-<?php echo $game_id; ?>').children[0].children[0].click();
        " >
        <img 
            src="assets/images/minigames/<?php echo $game_id; ?>.png"
            class="game-img"/>
    </div>

    <!-- Minigame -->
    <div class="bg-dark mb-4 game-text faq">
        <h3><?php echo $game_title; ?></h3>
        <p><?php echo $game_description; ?></p>
        <!-- Collapse -->
        <div class="card mb-3">
            <div class="card-header minigame-card-header" id="heading-<?php echo $game_id; ?>">
                <h5 class="mb-0">
                    <a class="collapsed" role="button" data-bs-toggle="collapse" href="#collapse-<?php echo $game_id; ?>" aria-expanded="false" aria-controls="collapse-<?php echo $game_id; ?>"><?php echo $game_collapse; ?></a>
                </h5>
            </div>

            <div id="collapse-<?php echo $game_id; ?>" class="collapse" data-parent="#accordion" aria-labelledby="heading-<?php echo $game_id; ?>">
                <div class="card-body">
                    <?php echo $game_collapse_body; ?>
                </div>
            </div>
        </div>
        <!-- End of collapse -->
    </div>
</div>