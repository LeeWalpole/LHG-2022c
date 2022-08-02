<br>
<br>
<br>
<br>
<br>
<br>



<!-- Bellow doesn't work in temaplate -->
<div id="getProfile" class="bg-offwhite" data-theme="light">
    <p>Note: I'm fetching the ID ({{ getProfile.id }}) from one of the APIs as a test to see if it works. It does, but I
        need this in the template code only.</p>

    <h1>Test2: {{ getProfile.slug }}</h1>

        <small>Outside: {{wp_data}}</small>
</div>



<template id="profile">

<small>Inside: {{wp_data}}</small>


    <nav class="header-nav-menu">
        <ul class="w-safe m-auto">
            <li>
                <router-link to="/">Back</router-link>
            </li>
            <li>
                <!-- VUE DATA SHOULD GO HERE {{post.id}} -->
            </li>
            <li>
                <router-link to="/menu">Menu</router-link>
            </li>
        </ul>
    </nav>
    <section>



        <section class="bg-white" data-theme="light">
            <h1>Single Profile Template</h1>
            <p>this should be the profile page</p>
            <p>I would like this "slot" to dymaically changed based on the profile ID</p>
            <p>For example, if we use the Fetch this api is contains all the info needs for this profile. I can do this
                in PHP, but I should probably do it in Vue?
                <br>http://localhost:10038/wp-json/wp/v2/profiles/179?acf_format=standard
            </p>
            <br><br><br><br><br><br><br>
        </section>


</template>

<script src="https://unpkg.com/vue@next"></script>
<script src="https://unpkg.com/vue-router"></script>



<script>
    const GetProfile = {
        props: ['getTest', 'wp_data'],
        data() {
            return {
                getProfile: "",
                getTest: "Hello Test",
                wp_data: [],
            }
        },
        mounted() {
            // Fetch Page 237 (Experiences - which has ACF repeater field will all experiences)
            fetch("http://localhost:10038/wp-json/wp/v2/pages/237?acf_format=standard")
                .then(res => res.json())
                .then(data => this.wp_data = data)
                .catch(err => console.log(err.message))
        }
    }
    Vue.createApp(GetProfile).mount('#getProfile')
</script>



<!-- Ignore Below -->

<?php /*

    <?php

$json_data_profile_url = 'http://localhost:10038/wp-json/wp/v2/profiles/179?acf_format=standard';

// Read JSON file
$json_data_profile = file_get_contents($json_data_profile_url);

// Decode JSON data into PHP array
$decoded_data_profile = json_decode($json_data_profile);

// All user data exists in 'data' object
$user_data = $decoded_data_profile->data;

// Cut long data into small & select only first 10 records
// $user_data = array_slice($user_data, 0, 9);

// Print data if need to debug
//print_r($user_data);


// Traverse array and display user data
foreach ($decoded_data_profile as $profile) {
	echo "Twitter New: ".$profile->twitter;
}
?>

*/ ?>

<?php /*


    <?php 
$age = get_fields( 179 );
$json_pretty = json_encode($age, JSON_PRETTY_PRINT);
?>




<div class="bg-color">
    <h1>Twitter: <?php 	echo "Twitter New: ".$profile->twitter; ?></h1>
    <h1>Slug: <?php echo $user_data->$id; ?></h1>
</div>



<?php 
$age = get_fields( 179 );
echo "<pre>".$json_pretty."<pre/>";
?>

<?php 
$post_id = 179; //specify post id here
$post = get_post($post_id); 
$slug = $post->post_name;
?>
*/?>