<template>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Table Murid</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama</th>
                                        <th>Kelas</th>
                                        <th>Jurusan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr
                                        v-for="(murid, index) in murids"
                                        :key="murid.index"
                                    >
                                        <th>{{ index + 1 }}</th>
                                        <td>{{ murid.nama }}</td>
                                        <td>{{ murid.kelas }}</td>
                                        <td>{{ murid.jurusan }}</td>
                                        <td>
                                            <div class="d-flex gap-2">
                                                <router-link
                                                    :to="`/murids/${murid.id}`"
                                                    class="btn btn-info"
                                                    >View</router-link
                                                >
                                                <router-link
                                                    :to="`/murids/${murid.id}/edit`"
                                                    class="btn btn-success"
                                                    >Edit</router-link
                                                >
                                                <button
                                                    type="button"
                                                    class="btn btn-danger"
                                                    @click="
                                                        deleteMurid(murid.id)
                                                    "
                                                >
                                                    Remove
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from "axios";
export default {
    data() {
        return {
            murids: [],
        };
    },
    async created() {
        try {
            const response = await axios.get("/api/murids");
            this.murids = response.data;
        } catch (error) {
            console.error(error);
        }
    },
    methods: {
        async deleteMurid(id) {
            try {
                await axios.delete(`/api/murids/${id}`);
                this.murids = this.murids.filter((murid) => murid.id !== id);
            } catch (error) {
                console.error(error);
            }
        },
    },
};
</script>
