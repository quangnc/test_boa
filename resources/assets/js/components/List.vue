<template>
	<div>

		<ul class="list-unstyled">
			<li v-for="(item, index) in dataList">
				
				<input-group :item="item" :input-name="inputName" :type="true" :index="index"></input-group>

			</li>
			<li>
				<button type="button" @click="addImage" class="btn btn-primary" >
                	<i class="fa fa-plus-circle"></i>
                </button>
			</li>
		</ul>

	</div>
	
</template>

<script>
	module.exports = {
		data: function () {
			return {
				dataList: this.listData
			}
		},

		props: {
			listData: {
				type: Array,
				default: function () {
					return new Array();
				}
			},

			inputName: {
				type: String,
				default: 'list'
			},

			type: {
				type: Boolean,
				default: true
			},
			
		},

		computed: {
			
		},

		methods: {

			addImage: function(){
				this.dataList.push({
					id: +new Date,
					image: '',
					sort_order: 0
				});

				console.log(this.listData);
			},

			removeImage: function(img) {

				var dataList = this.dataList.filter(function(image){
					return image.id !== img.id;
				});

				this.dataList = dataList;
			},

			getId: function(id) {
				return "cabin_image" + id;
			},

			getName: function(index, name) {
				return this.inputName + "[" + index + "][" + name + "]";
			},

			chooseIcon: function(icon) {

			}

		}
	}
</script>

<style lang="stylus">
	
</style>