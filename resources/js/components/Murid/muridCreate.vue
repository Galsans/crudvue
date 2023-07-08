<template>
    <div class="container">
        <div class="card-body">
            <form @submit.prevent="submitForm">
                <div class="form-group">
                    <label for="">Nama</label>
                    <input
                        type="text"
                        id="nama"
                        class="form-control"
                        v-model="murid.nama" required
                    />
                </div>
                <div class="form-group">
                    <label for="">Kelas</label>
                    <input
                        type="text"
                        id="kelas"
                        class="form-control"
                        v-model="murid.kelas" required
                    />
                </div>
                <div class="form-group">
                    <label for="">Jurusan</label>
                    <input
                        type="text"
                        id="jurusan"
                        class="form-control"
                        v-model="murid.jurusan" required
                    />
                </div>
                <div class="form-button">
                    <button
                        type="submit"
                        v-if="isNewMurid"
                        class="btn btn-primary"
                    >
                        SEND
                    </button>
                    <button type="submit" v-else class="btn btn-primary">
                        UPDATE
                    </button>
                </div>
            </form>
        </div>
    </div>
</template>

<script>
import axios from "axios";
export default {
    data() {
        return {
            murid: {
                nama: "",
                kelas: "",
                jurusan: "",
            },
        };
    },
    computed: {
        isNewMurid() {
            return !this.$route.path.includes("edit");
        },
    },
    async created() {
        if (!this.isNewMurid) {
            // const response = await axios.get(
            //     `/api/murids/${this.$rooute.params.id}`
            // );
            // this.murid = response.data;

            const response = await axios.get(
                `/api/murids/${this.$route.params.id}`
            );
            this.murid = response.data;
        }
    },
    methods: {
        async submitForm() {
            try {
                if (this.isNewMurid) {
                    await axios.post("/api/murids", this.murid);
                } else {
                    await axios.put(
                        `/api/murids/${this.$route.params.id}`,
                        this.murid
                    );
                }
                this.$router.push("/murids");
            } catch (error) {
                console.error(error);
            }
        },
    },
};
</script>
