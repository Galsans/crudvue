<template>
    <div class="container">
        <form @submit.prevent="submitForm">
            <div class="form-group">
                <label for="">Mapel</label>
                <input
                    type="text"
                    id="mapel"
                    class="form-control"
                    v-model="mapel.mapel"
                />
            </div>
            <div class="form-group">
                <label for="">Guru</label>
                <input
                    type="text"
                    id="guru"
                    class="form-control"
                    v-model="mapel.guru"
                />
            </div>
            <div class="form-button mt-2">
                <button type="submit" v-if="isNewMapel" class="btn btn-primary">
                    SEND
                </button>
                <button type="submit" v-else class="btn btn-primary">
                    UPDATE
                </button>
            </div>
        </form>
    </div>
</template>

<script>
import axios from "axios";
export default {
    data() {
        return {
            mapel: {
                mapel: "",
                guru: "",
            },
        };
    },
    computed: {
        isNewMapel() {
            return !this.$route.path.includes("edit");
        },
    },
    async created() {
        if (!this.isNewMapel) {
            // const response = await axios.get(
            //     `/api/murids/${this.$rooute.params.id}`
            // );
            // this.murid = response.data;

            const response = await axios.get(
                `/api/mapels/${this.$route.params.id}`
            );
            this.mapel = response.data;
        }
    },
    methods: {
        async submitForm() {
            try {
                if (this.isNewMapel) {
                    await axios.post("/api/mapels", this.mapel);
                } else {
                    await axios.put(
                        `/api/mapels/${this.$route.params.id}`,
                        this.mapel
                    );
                }
                this.$router.push("/mapels");
            } catch (error) {
                console.error(error);
            }
        },
    },
};
</script>
