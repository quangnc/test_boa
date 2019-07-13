<template>
	<div>
		<table class="table table-striped table-bordered table-hover">
		    <thead>
		        <tr>
		            <th>Priority</th>
		            <th>Price 2 Day</th>
		            <th>Price 3 Day</th>
		            <th>Date Start</th>
		            <th>Date End</th>
		            <th></th>
		        </tr>
		    </thead>
		    <tbody v-if="dataSpecial.length">
		        <tr v-for="(special, index) in dataSpecial">
		            <td>
		                <input type="number" :name="getName(index, 'priority')" v-model="special.priority" class="form-control">
		            </td>
		            <td>
		                <input type="text"
		                	   class="form-control"
		                	   v-model="special.price_2_day"
		                	   :name="getName(index, 'price_2_day')">
		            </td>
					<td>
		                <input type="text"
		                	   class="form-control"
		                	   v-model="special.price_3_day"
		                	   :name="getName(index, 'price_3_day')">
		            </td>
		            <td>
		                <input type="date"
		                	   class="form-control"
		                	   v-model="special.date_start"
		                	   :name="getName(index, 'date_start')">
		            </td>
		            <td>
		                <input type="date"
		                	   class="form-control"
		                	   v-model="special.date_end"
		                	   :name="getName(index, 'date_end')">
		            </td>
		            <td>
		                <button type="button" class="btn btn-danger" index="index" @click="removeSpecial(special)">
		                    <i class="fa fa-minus-circle"></i>
		                </button>
		            </td>
		        </tr>
		    </tbody>
		    <tfoot>
		        <tr>
		            <td colspan="5"></td>
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
				dataSpecial: this.value
			}
		},

		props: {
			value: {
				type: Array,
				default: function () {
					return new Array();
				}
			},

			inputName: {
				type: String,
				default: 'special'
			}
		},

		computed: {

		},

		methods: {

			addSpecial: function(){
				this.dataSpecial.push({
					id: +new Date,
					image: '',
					sort_order: 0
				});

				console.log(this.value);
			},

			removeSpecial: function(special) {

				var dataSpecial = this.dataSpecial.filter(function(image){
					return image.id !== special.id;
				});

				this.dataSpecial = dataSpecial;
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