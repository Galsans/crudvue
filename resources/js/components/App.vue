<template>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark p-3">
        <h2 class="navbar-brand">SANTRIKODING</h2>
        <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <router-link to="/murids" class="nav-link"
                        >MURID</router-link
                    >
                </li>
                <li class="nav-item">
                    <router-link to="/mapels" class="nav-link"
                        >MAPEL</router-link
                    >
                </li>
            </ul>
        </div>
    </nav>
    <div class="card-body">
        <div class="container">
            <router-view></router-view>
        </div>
    </div>
</template>
<script>
export default {
    name: "App",
    data() {
        return {
            isOpen: false,
        };
    },
};
</script>
