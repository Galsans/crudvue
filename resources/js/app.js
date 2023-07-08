import { createApp } from "vue";
import { createRouter, createWebHistory } from "vue-router";

// Import components
import App from "./components/App.vue";
import muridIndex from "./components/Murid/muridIndex.vue";
import muridCreate from "./components/Murid/muridCreate.vue";
import Murid from "./components/Murid/Murid.vue";

// IMPORT MAPEL
import mapelIndex from "./components/Mapel/mapelIndex.vue";
import mapelCreate from "./components/Mapel/mapelCreate.vue";
import mapel from "./components/Mapel/mapel.vue";

const router = createRouter({
    history: createWebHistory(),
    routes: [
        // { path: "/", component: App },

        { path: "/murids", component: muridIndex },
        { path: "/murids/create", component: muridCreate },
        { path: "/murids/:id", component: Murid },
        { path: "/murids/:id/edit", component: muridCreate },

        // ROUTES MAPEL
        { path: "/mapels", component: mapelIndex },
        { path: "/mapels/create", component: mapelCreate },
        { path: "/mapels/:id", component: mapel },
        { path: "/mapels/:id/edit", component: mapelCreate },
    ],
});
const app = createApp(App);
app.use(router);
app.mount("#app");
