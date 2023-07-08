<template>
    <div>
        <h5 id="associating-form-text-with-form-controls">Nama:</h5>
        <h6>{{ murid.nama }}</h6>
        <h5 id="associating-form-text-with-form-controls">Kelas:</h5>
        <p>{{ murid.kelas }}</p>
        <h5 id="associating-form-text-with-form-controls">Jurusan:</h5>
        <p>{{ murid.jurusan }}</p>
        <router-link :to="`/murids/${murid.id}/edit`" class="btn btn-primary"
            >Edit</router-link
        >
    </div>
</template>

<script>
import axios from "axios";
export default {
    data() {
        return {
            murid: {},
        };
    },
    async created() {
        try {
            const response = await axios.get(
                `/api/murids/${this.$route.params.id}`
            );
            this.murid = response.data;
        } catch (error) {
            console.error(error);
        }
    },
};
</script>
