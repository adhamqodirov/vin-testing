<form class="form-horizontal" name="form" method="post" enctype="multipart/form-data">
    <div id="vinApp" class="vin-list">
        <input v-model="message" placeholder="enter Vin Number" name="vin_number_name"/>
        <!--        <h2>Message is: {{ message }}</h2>-->
        <?php
        if (isset($_POST['is_post'])) {

            $selected_attributes = get_post_meta('1', 'selected_attributes')[0];

            $list = explode('%%%%', $selected_attributes);

            $vin_number = $_POST['vin_number_name'];
            $url = 'https://vpic.nhtsa.dot.gov/api/vehicles/decodevin/' . $vin_number . '?format=json';
            $json = file_get_contents($url);
            $obj = json_decode($json);
            $length = $obj->Count;

            $display_attributes = [];
            for ($j = 0; $j < count($list); $j++) {




                for ($i = 0; $i < $length; $i++) {
                    if ($list[$j] == $obj->Results[$i]->Variable) {
                        $display_attributes[$j]["name"] = $obj->Results[$i]->Value;
                    }
                }

            }




//    echo 'array ' . $obj->Array[0];
//    var_dump($obj->Results[55]->Variable);
//    echo '<pre>';
//    print_r($display_attributes);
//
//    echo '</pre>';
        }

        ?>


        <table>
            <tr>
                <th>Manufacturer</th>
                <th>Make</th>
                <th>Model</th>
                <th>Year</th>
            </tr>
            <tr>
                <td><?php  echo $display_attributes[3]["name"]?></td>
                <td><?php  echo $display_attributes[0]["name"]?></td>
                <td><?php  echo $display_attributes[1]["name"]?></td>
                <td><?php  echo $display_attributes[2]["name"]?></td>
            </tr>


        </table>


    </div>
    <script> const mountApp = app.mount('#vinApp'); </script>

    <input type="hidden" name="is_post" value="1"/>
    <input type="submit" class="buttonn" value="Save Changes">
</form>


