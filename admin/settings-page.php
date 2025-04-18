<?php
add_action('admin_menu', function() {
    add_menu_page('Enigma BBS', 'Enigma BBS', 'manage_options', 'enigma-bbs', 'render_enigma_bbs_admin');
});

function render_enigma_bbs_admin() {
    echo '<div class="wrap"><h1>Enigma BBS Controls</h1>';
    echo '<form method="post">';
    if (isset($_POST['bbs_action'])) {
        $action = $_POST['bbs_action'];
        echo '<pre>' . enigma_bbs_control($action) . '</pre>';
    }
    echo '<button name="bbs_action" value="start">Start BBS</button>
          <button name="bbs_action" value="stop">Stop BBS</button>
          <button name="bbs_action" value="restart">Restart BBS</button>';
    echo '</form></div>';
}
