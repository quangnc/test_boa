<template>
	<div>
		<table class="table table-striped table-bordered table-hover">
		    <thead>
		        <tr>
		            <th>Priority</th>
		            <th>Number</th>
		            <th>Date Start</th>
		            <th>Date End</th>
		            <th></th>
		        </tr>
		    </thead>
		    <tbody v-if="dataNumber.length">
		        <tr v-for="(number, index) in dataNumber">
		            <td>
		                <input type="number" :name="getName(index, 'priority')" v-model="number.priority" class="form-control">
		            </td>
		            <td>
		                <input type="text" 
		                	   class="form-control" 
		                	   v-model="number.number"
		                	   :name="getName(index, 'number')">
		            </td>
		            <td>
		                <input type="date" 
		                	   class="form-control" 
		                	   v-model="number.date_start"
		                	   :name="getName(index, 'date_start')">
		            </td>
		            <td>
		                <input type="date"
		                	   class="form-control" 
		                	   v-model="number.date_end"
		                	   :name="getName(index, 'date_end')">
		            </td>
		            <td>
		                <button type="button" class="btn btn-danger" index="index" @click="removeSpecial(number)">
		                    <i class="fa fa-minus-circle"></i>
		                </button>
		            </td>
		        </tr>
		    </tbody>
		    <tfoot>
		        <tr>
		            <td colspan="4"></td>
		            <td class="text-left">
		                <button type="button" @click="addSpecial" class="btn btn-primary" >
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
				dataNumber: this.listNumber
			}
		},

		props: {
			listNumber: {
				type: Array,
				default: function () {
					return new Array();
				}
			},

			inputName: {
				type: String,
				default: 'number'
			}
		},

		computed: {
			
		},

		methods: {

			addSpecial: function(){
				this.dataNumber.push({
					id: +new Date,
					image: '',
					sort_order: 0
				});
			},

			removeSpecial: function(number) {

				var dataNumber = this.dataNumber.filter(function(image){
					return image.id !== number.id;
				});

				this.dataNumber = dataNumber;
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