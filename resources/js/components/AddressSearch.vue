<template>
    <div class="container">
        <input v-model="search" type="text" placeholder="Найти..." @input="fetchAddresses" class="search-input"/>
        <div>
            <h3 class="regions">Регионы:</h3>
            <ul>
                <template v-if="regions.length > 0">
                    <li v-for="region in regions" :key="region.id">{{ region.name }}</li>
                </template>
                <template v-else>
                    <li class="no-data"> - </li>
                </template>
            </ul>
            <h3 class="cities">Города:</h3>
            <ul>
                <template v-if="cities.length > 0">
                    <li v-for="city in cities" :key="city.id">{{city.region.name}}<span class="arrow-icon">&rarr;</span>{{
                        city.name }}
                    </li>
                </template>
                <template v-else>
                    <li class="no-data"> - </li>
                </template>
            </ul>
            <h3 class="streets">Улицы:</h3>
            <ul>
                <template v-if="streets.length > 0">
                    <li v-for="street in streets" :key="street.id">{{street.city.region.name}}<span class="arrow-icon">&rarr;</span>{{street.city.name}}<span
                        class="arrow-icon">&rarr;</span>{{ street.name }}
                    </li>
                </template>
                <template v-else>
                    <li class="no-data"> - </li>
                </template>
            </ul>
        </div>
    </div>
</template>

<script>
    import axios from 'axios';

    export default {
        data() {
            return {
                search: '',
                regions: [],
                cities: [],
                streets: [],
            };
        },
        mounted() {
            this.fetchAddresses();
        },
        methods: {
            async fetchAddresses() {
                const {data} = await axios.get(`/?search=${this.search}`);
                this.regions = data.regions;
                this.cities = data.cities;
                this.streets = data.streets;
            },
        },
    };
</script>
<style scoped>
    .container {
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
        background: #f9f9f9;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
        text-align: center;
        color: #333;
    }

    .search-input {
        width: 100%;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 4px;
        margin-bottom: 20px;
        font-size: 16px;
    }

    .regions, .cities, .streets {
        margin: 20px 0;
    }

    h2 {
        font-size: 20px;
        color: #555;
        margin-bottom: 10px;
    }

    ul {
        list-style-type: none;
        padding: 0;
    }

    li {
        padding: 8px 10px;
        background: #fff;
        border: 1px solid #ddd;
        border-radius: 4px;
        margin-bottom: 8px;
        transition: background 0.3s;
    }
    li.no-data{
        padding: 0;
        border:unset;
        margin-bottom: 1px;
    }

    li:hover {
        background: #f0f0f0;
    }

    .arrow-icon {
        font-size: 24px;
        margin-left: 5px;
        margin-right: 5px;
        color: #007bff;
    }
</style>
