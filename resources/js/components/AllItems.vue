<template>
    <div>
        <h3> All Items </h3>

        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Photos</th>
                    <th>Price</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="item in items" :key="item.id">
                    <td>{{ item.id }}</td>
                    <td>{{ item.name }}</td>
                    <td>{{ item.photos }}</td>
                    <td>{{ item.price }}</td>
                    <td>
                        <router-link :to="{name: 'edit', params: {id: item.id}}"
                            class="btn btn-primary btn-sm">Edit</router-link>
                        <button @click="deleteItem(item.id)" class="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                items: []
            }
        },
        created() {
            this.getItems();
        },
        methods: {
            getItems() {
                axios.get("/api/items").then(({ data }) => {
                    this.items = data.data;
                });
            },
            deleteItem(id) {
                axios.delete("/api/items/" + id).then(response => {
                    this.getItems();
                });
            }
        }
    }
</script>