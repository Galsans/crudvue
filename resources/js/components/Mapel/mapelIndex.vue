<template>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h3>Table Mapel</h3>
                        <router-link to="/mapels/create" class="btn btn-primary"
                            >ADD</router-link
                        >
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Mapel</th>
                                        <th>Guru</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr
                                        v-for="(mapel, index) in mapels"
                                        :key="mapel.index"
                                    >
                                        <th>{{ index + 1 }}</th>
                                        <td>{{ mapel.mapel }}</td>
                                        <td>{{ mapel.guru }}</td>
                                        <td>
                                            <div class="d-flex gap-2">
                                                <router-link
                                                    :to="`/mapels/${mapel.id}`"
                                                    class="btn btn-info"
                                                    >View</router-link
                                                >
                                                <router-link
                                                    :to="`/mapels/${mapel.id}/edit`"
                                                    class="btn btn-success"
                                                    >Edit</router-link
                                                >
                                                <button
                                                    type="button"
                                                    class="btn btn-danger"
                                                    @click="
                                                        deleteMapel(mapel.id)
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
            mapels: [],
        };
    },
    async created() {
        try {
            const response = await axios.get("/api/mapels");
            this.mapels = response.data;
        } catch (error) {
            console.error(error);
        }
    },
    methods: {
        async deleteMapel(id) {
            try {
                await axios.delete(`/api/mapels/${id}`);
                this.mapels = this.mapels.filter((mapel) => mapel.id !== id);
            } catch (error) {
                console.error(error);
            }
        },
    },
};
</script>
