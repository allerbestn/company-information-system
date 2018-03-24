<template>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th scope="col">Марка</th>
            <th scope="col">Кузов</th>
            <th scope="col">Двигун</th>
            <th scope="col">Колір</th>
            <th scope="col">Коробка передач</th>
            <th scope="col">Рік випуску</th>
            <th scope="col">Цех</th>
            <th scope="col">Дії</th>
        </tr>
        </thead>
        <tbody>
        <tr v-for="car in cars">
            <td>{{ car.brand }}</td>
            <td>{{ car.body_type }}</td>
            <td>{{ car.engine }}</td>
            <td>{{ car.color }}</td>
            <td>{{ car.transmission }}</td>
            <td>{{ car.production_year }}</td>
            <td>{{ car.workshop_id }}</td>
        </tr>
        </tbody>
    </table>
</template>

<script>
    import axios from 'axios';
    export default {
        data() {
            return {
                cars: []
            }
        },

        created() {
            this.fetchCars()
        },

        methods: {
            fetchCars() {
                axios.get('/transport').then(response => {
                    this.cars = response.data.cars;
                });
            }
        }
    }
</script>