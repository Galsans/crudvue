<template>
    <div>
        <h5 id="associating-form-text-with-form-controls">Mapel:</h5>
        <h6>{{ mapel.mapel }}</h6>
        <h5 id="associating-form-text-with-form-controls">Guru:</h5>
        <p>{{ mapel.guru }}</p>
        <router-link :to="`/mapels/${mapel.id}/edit`" class="btn btn-primary"
            >Edit</router-link
        >
    </div>
</template>

<script>
import axios from "axios";
export default {
    data() {
        return {
            mapel: {},
        };
    },
    async created() {
        try {
            const response = await axios.get(
                `/api/mapels/${this.$route.params.id}`
            );
            this.mapel = response.data;
        } catch (error) {
            console.error(error);
        }
    },
};
</script>
