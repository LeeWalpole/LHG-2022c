<!-- Goal : Loop through the profiles in the json file and creater new routes for them using the profiles template 

Need to loop through this API and create Routes via the "slug" value from here: http://localhost:10038/wp-json/wp/v2/profiles/?acf_format=standard

There's only two profiles so far, ID 180, and ID 179
-->



<template id="profiles">

<small>Inside: {{profiles}}</small>

    <section class="bg-white" data-theme="light">
        <h1>Profiles</h1>
        <p>Need to create a v-for loop through this API date and create Routes via the "slug" value from here:
            http://localhost:10038/wp-json/wp/v2/profiles/?acf_format=standard</p>
        <p>There's only two profiles so far, ID 180 (slug = captain-america), and ID 179 (slug = blackwidow)</p>

        <h1>Inside Template</h1>
        <!-- <ul>
    <li :v-for="profile in profiles"><router-link to="/profiles/{{profile.slug}}">{{profile.id}}</router-link></li> -->
        </ul>

    </section>
</template>

<div id="app2">
    <section class="bg-white" data-theme="light">
        <h1>Outside Template</h1>
        <ul>
            <li :v-for="profile in profiles">
                <router-link to="/profiles/{{profile.slug}}">{{profile.id}}</router-link>
            </li>
        </ul>
    </section>
</div>

<script src="https://unpkg.com/vue@next"></script>
<script src="https://unpkg.com/vue-router"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js"></script>


<script>
    const GetProfiles = {
        data() {
            return {
                profiles: []
            }
        },
        mounted() {
            fetch('http://localhost:10038/wp-json/data/v1/profiles/', {
                headers: {
                    'Content-type': 'application/json'
                },
            }).then(res => res.json()).then((response) => {
                this.profiles = response;
                console.log(response)
            }).catch((error) => {
                //this.getProfile = error;//
            });
        }
    }
    Vue.createApp(GetProfiles).mount('#app2')
</script>