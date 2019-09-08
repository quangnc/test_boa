<template>
	<div>
		<table class="table table-striped table-bordered table-hover">
		    <thead>
		        <tr>
		            <th>Block</th>
		            <th></th>
		        </tr>
		    </thead>
		    <tbody v-if="dataService.length">
		        <tr v-for="(number, index) in dataService">
		            <td>
		                <textarea :name="getName(index, 'price')" class="form-control" rows="3" v-model="number.price"></textarea>
		                <input type="hidden" :name="getName(index, 'id')" v-model="number.id">
		            </td>
		            <td>
		                <button type="button" class="btn btn-danger" index="index" @click="removeService(number)">
		                    <i class="fa fa-minus-circle"></i>
		                </button>
		            </td>
		        </tr>
		    </tbody>
		    <tfoot>
		        <tr>
		            <td colspan="1"></td>
		            <td class="text-left">
		                <button type="button" @click="addService" class="btn btn-primary" >
		                	<i class="fa fa-plus-circle"></i>
		                </button>
		            </td>
		        </tr>
		    </tfoot>
		</table>

	</div>
	
</template>

<script>
	module.exports = {
		data: function () {
			return {
				dataService: this.listService
			}
		},

		props: {
			listService: {
				type: Array,
				default: function () {
					return new Array();
				}
			},

			inputName: {
				type: String,
				default: 'data'
			}
		},

		computed: {
			
		},

		methods: {

			addService: function(){
				this.dataService.push({
					id: +new Date,
					image: '',
					sort_order: 0
				});
			},

			removeService: function(number) {

				console.log(number);

				var dataService = this.dataService.filter(function(image){
					return image.id !== number.id;
				});

				this.dataService = dataService;
			},

			getId: function(id) {
				return "cabin_image" + id;
			},

			getName: function(index, name) {
				return this.inputName + "[" + index + "][" + name + "]";
			}

		}
	}
</script>

<style lang="stylus">
	
</style>