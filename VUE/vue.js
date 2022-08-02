const app = Vue.createApp({
    data() {
        return {
            mess: "ciao mondo"
        }
    }
});

const Home = { template: `<h1>Contenuto Home</h1>` };
const About = { template: `<h1>Contenuto About</h1>` };
const Portfolio = { template: `<h1>Contenuto Portfolio</h1>` };
const Contatti = { template: `<h1>Contenuto Contatti</h1>` };

const routes = [
    { path: "/", component: Home },
    { path: "/about", component: About },
    { path: "/portfolio", component: Portfolio },
    { path: "/contatti", component: Contatti }
];

const router = VueRouter.createRouter({
       history: VueRouter.createWebHashHistory(),
       routes
})

app.use(router)
app.mount('#app2')