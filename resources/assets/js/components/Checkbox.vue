<template>
	<span>
		<input type="checkbox"
			   v-model="checked"
			   :value="checked"
		>
		<span>{{ inputLabel }}</span>
		<input v-if="checked"
			   type="hidden"
			   :name="getName(inputKey, inputFacility)" :value="inputKey"
		>
		<input v-if="checked"
			   type="hidden"
			   :name="getName(inputKey, 'value')" value="1"
		>
	</span>
</template>

<script>
	module.exports = {
		data: function () {
			return {
                checked: this.value
			}
		},

		props: ['inputName', 'inputKey', 'value', 'inputLabel', 'inputFacility'],

		computed: {

		},

		methods: {
            getName: function(index, name) {
                return this.inputName + "[" + index + "][" + name + "]";
            }
		}
	}
</script>

<style lang="stylus">

</style>