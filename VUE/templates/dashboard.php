
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <!-- doesn't work in temaplate -->
    <div id="getProfile">
        <p>Profile ID = {{ getProfile.id }}</p>
        <p>Note: This works because it is not inside the template</p>
    </div><!-- getData -->

    <template id="home">
        <nav class="header-nav-menu">
            <ul class="w-safe m-auto">
                <li>
                    <router-link to="/">Back</router-link>
                </li>
                <li><!-- VUE DATA SHOULD GO HERE {{post.id}} --></li>
                <li>
                    <router-link to="/menu">Menu</router-link>
                </li>
            </ul>
        </nav>
        <div>Contents Goes Here <?php echo $slug; ?> </div>
    </template>

<script src="https://unpkg.com/vue@next"></script>
<script src="https://unpkg.com/vue-router"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js"></script>


<script>
    const GetProfile = {
        props: ['getTest'],
        data() {
            return {
                getProfile: "",
                getTest: "Hello Test",
            }
        },
        mounted() {
            fetch('http://localhost:10038/wp-json/wp/v2/profiles/179?acf_format=standard', {
                headers: {
                    'Content-type': 'application/json'
                },
            }).then(res => res.json()).then((response) => {
                this.getProfile = response;
            }).catch((error) => {
                this.getProfile = error;
            });
        }
    }
    Vue.createApp(GetProfile).mount('#getProfile')
</script>