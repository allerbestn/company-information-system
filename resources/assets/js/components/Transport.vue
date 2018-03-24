<template>
    <b-card no-body>
        <b-tabs pills card>
            <b-tab title="Легкові автомобілі" active>
                <div id="car">
                    <car></car>
                </div>
            </b-tab>
            <b-tab title="Автобуси">
                Автобуси
            </b-tab>
            <b-tab title="Мотоцикли">
                Мотоцикли
            </b-tab>
            <b-tab title="Вантажівки">
                Вантажівки
            </b-tab>
        </b-tabs>
    </b-card>
</template>

<script>
    import Car from './Car'

    export default {
        components: {
            Car
        }
    }
</script>

