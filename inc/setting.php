<?php
include_once('func.inc.php');

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $type = $_POST['type'];
    global $wpdb;
    $table_name = $wpdb -> prefix . "plot_type";
    $charset = $wpdb -> get_charset_collate();
    if($wpdb->get_var("show tables like '$table_name'") == $table_name){
        add_type($table_name, $type);
    }
    else{
        create_teble($table_name);
    }
}

$default_type = get_type();

?>

<div id="q-app" style="height:100vh">
    <div class="flex flex-center q-pt-lg">
        <q-card v-bind:style="{width: 'max-content'}">
            <q-card-section>
                <form action="" method="post">
                    <h5 class="q-my-sm">Select Type of plot</h5>
                    <q-select v-model="model" name="type" filled :options="options"></q-select>
                    <div class="flex flex-center q-mt-sm">
                        <q-btn label="Submit" type="submit" name="submit" color="primary" class="glossy"></q-btn>
                    </div>
                    <input type="hidden" name="default_type" id="default_type" value="<?= $default_type ?>">
                </form>
            </q-card-section>
        </q-card>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/vue@3/dist/vue.global.prod.js"></script>
<script src="https://cdn.jsdelivr.net/npm/quasar@2.0.1/dist/quasar.umd.prod.js"></script>
<script src="<?= plugin_dir_url(__FILE__) . '../js/setting.js' ?>"></script>