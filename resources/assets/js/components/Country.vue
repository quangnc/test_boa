<template>
    <div>
        <div class="six columns">
            <div class="quform-element">
                <p>
                    <span>Country</span>
                    <br>
                    <select class="input-select" name="country_id" v-model="country_id">
                        <option class="placeholder" selected disabled value="">Select Country</option>
                        <option v-for="country in countries" :value="country.country_id">{{ country.name }}</option>
                    </select>
                </p>
            </div>
        </div>
        <div class="six columns">
            <div class="quform-element">
                <p>
                    <span> Town / City </span>
                    <br>
                    <select class="input-select" name="zone_id" :disabled="!country_id">
                        <option class="placeholder" selected disabled value="">Select Zone</option>
                        <option v-for="zone in zones" :value="zone.zone_id">{{ zone.name }}</option>
                    </select>
                </p>
            </div>
        </div>
    </div>
</template>

<script>
    module.exports = {

        data: function () {
            return {
                countries: [],
                zones: [],
                country_id: "",
            }
        },

        created: function () {
            axios.get('/api/country')
                .then((res) => res.data)
                .then(data => {
                    this.countries = data;
//                    this.getZones(data[0].country_id);
                })
                .catch(error => console.log(error));
        },

        watch: {
            country_id: function(newCountryId, oldCountryId) {
                console.log(newCountryId);
                this.getZones(newCountryId);
            }
        },

        computed: {},

        methods: {
            getZones: function (country_id) {
                axios.get('/api/zone?country_id=' + country_id)
                    .then((res) => res.data)
                    .then(data => {
                        this.zones = data;

                    })
                    .catch(error => console.log(error));
            }
        }
    }
</script>

<style lang="sass">
    .input-select
        width: calc(100% - 20px)
        padding: 15px 10px
        font-size: 13px
        height: 46px
        background-color: #212121
        color: #cecece
        border-radius: 0
</style>
