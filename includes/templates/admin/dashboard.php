<div id="adminSettings">
    <input v-model="admin" placeholder="edit me" />
    <h2>Message is: {{ admin }}</h2>

    <vue-tabs>
        <v-tab title="First tab">
            First tab content
        </v-tab>

        <v-tab title="Second tab">
            Second tab content
        </v-tab>

        <v-tab title="Third tab">
            Third tab content
        </v-tab>
    </vue-tabs>



</div>

<script> const mountApp = app.mount('#adminSettings'); </script>
<?php ?>



