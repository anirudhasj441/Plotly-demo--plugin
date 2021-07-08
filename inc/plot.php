<?php
global $wpdb;
$table_name = $wpdb -> prefix . "plot_type";
$res = $wpdb -> get_row("SELECT * FROM $table_name WHERE id = 1");
$type = $res -> type;
?>

<div id="q-app">
    <q-card>
        <q-card-section>
            <div id="plot" class="bg-grey-9"></div>
        </q-card-section>
    </q-card>
</div>

<input type="hidden" name="type" id="type" value="<?= $type; ?>">

<script src="https://cdn.jsdelivr.net/npm/vue@3/dist/vue.global.prod.js"></script>
<script src="https://cdn.jsdelivr.net/npm/quasar@2.0.0/dist/quasar.umd.prod.js"></script>
<script src="<?= plugin_dir_url(__FILE__) . '../js/main.js'; ?>"></script>