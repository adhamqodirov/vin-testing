<!--<div id="adminSettings">-->
<!--    <input v-model="admin" placeholder="edit me" />-->
<!--    <h2>Message is: {{ admin }}</h2>-->
<!---->
<!---->
<!--</div>-->
<!---->
<!--<script> const mountApp = app.mount('#adminSettings'); </script>-->
<?php ?>

<div class="vin-dashboard">
    <h1>Vin Testing plugin Dashboard</h1>
    <div class="vin-attribute-settings">
        <form class="form-horizontal" name="form" method="post" enctype="multipart/form-data">
            <input type="hidden" name="is_post" value="1"/>

            <h2>Select the attributes to show in frontend ...</h2>
            <div class="row">

                <div class="col-3">
                    <label class="container">Make
                        <input type="checkbox" checked="checked" name="vin_make">
                        <span class="checkmark"></span>
                    </label>
                    <label class="container">Model
                        <input type="checkbox" checked="checked" name="vin_model">
                        <span class="checkmark"></span>
                    </label>
                    <label class="container">Year
                        <input type="checkbox" checked="checked" name="vin_year">
                        <span class="checkmark"></span>
                    </label>
                    <label class="container">Manufacturer
                        <input type="checkbox" checked="checked" name="vin_manufacturer">
                        <span class="checkmark"></span>
                    </label>
                </div>
                <div class="col-9">


                </div>
            </div>

            <div class="row">
                <div class="col-3">
                    <input type="submit" class="buttonn" value="Save Changes">
                </div>
                <div class="col-9"></div>
            </div>


    </div>

    </form>


</div>
<?php

$user = wp_get_current_user();
$selected_attributes= '';

if (isset($_POST['is_post'])) {

    if(isset($_POST['vin_make']) && $_POST['vin_make']=='on'){
        $selected_attributes = $selected_attributes . 'Make%%%%';
    }
    if(isset($_POST['vin_model']) && $_POST['vin_model']=='on'){
        $selected_attributes = $selected_attributes . 'Model%%%%';
    }
    if(isset($_POST['vin_year']) && $_POST['vin_year']=='on'){
        $selected_attributes = $selected_attributes . 'Model Year%%%%';
    }
    if(isset($_POST['vin_manufacturer']) && $_POST['vin_manufacturer']=='on'){
        $selected_attributes = $selected_attributes . 'Manufacturer Name';
    }


    //getting new listing metaboxes and taxonomies from add listing page
    update_post_meta('1', 'selected_attributes', $selected_attributes);

}




