<template>
	<div>
		<table class="table table-striped table-bordered table-hover">
		    <thead>
		        <tr>
		            <th>Image</th>
		            <th>Name</th>
		            <th>Url</th>
					<th>Status</th>
		            <th>Sort Order</th>
		            <th></th>
		        </tr>
		    </thead>
		    <tbody v-if="dataImage.length">
		        <tr v-for="(img, index) in dataImage">
		            <td>
		                <choose-image :id="getId(img.id)" 
		                			  :input-name="getName(index, 'image')"
		                			  :value="img.image">
		                </choose-image>
		                <input type="hidden" :name="getName(index, 'id')" v-model="img.id">
		            </td>
		            <td>
		                <input type="text" 
		                	   class="form-control"
		                	   v-model="img.name"
		                	   :name="getName(index, 'name')">
		            </td>
					<td>
		                <input type="text" 
		                	   class="form-control"
		                	   v-model="img.url"
		                	   :name="getName(index, 'url')">
		            </td>
		            <td>
						<select class="form-control" :name="getName(index, 'status')">
							<option value="0">Enable</option>
							<option value="1">Disable</option>
						</select>
		            </td>

		            <td>
		                <input type="text" 
		                	   class="form-control" 
		                	   v-model="img.sort_order"
		                	   :name="getName(index, 'sort_order')">
		            </td>
		            <td>
		                <button type="button" class="btn btn-danger" index="index" @click="removeImage(img)">
		                    <i class="fa fa-minus-circle"></i>
		                </button>
		            </td>
		        </tr>
		    </tbody>
		    <tfoot>
		        <tr>
		            <td colspan="5"></td>
		            <td class="text-left">
		                <button type="button" @click="addImage" class="btn btn-primary" >
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
				dataImage: this.value
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
				default: 'images'
			}
		},

		computed: {
			
		},

		methods: {

			addImage: function(){
				this.dataImage.push({
					id: +new Date,
					image: '',
					sort_order: 0
				});
			},

			removeImage: function(img) {

				var dataImage = this.dataImage.filter(function(image){
					return image.id !== img.id;
				});

				this.dataImage = dataImage;
			},

			getId: function(id) {
				return "slideshow" + id;
			},

			getName: function(index, name) {
				return this.inputName + "[" + index + "][" + name + "]";
			}

		}
	}
</script>

<style lang="stylus">
	
</style>