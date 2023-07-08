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
                    <router-link to="/murids/create" class="nav-link"
                        >MURID</router-link
                    >
                </li>
                <li class="nav-item">
                    <router-link to="/mapels/create" class="nav-link"
                        >MAPEL</router-link
                    >
                </li>
                <li class="nav-item dropdown">
                    <a
                        class="nav-link dropdown-toggle"
                        href="#"
                        id="navbarDropdown"
                        role="button"
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                    >
                        Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#"
                            >Something else here</a
                        >
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <div class="card-body">
        <router-view></router-view>
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
