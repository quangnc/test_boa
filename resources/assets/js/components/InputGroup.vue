<template>
	
	<div class="input-group" v-if="itemActive">
			      
      <span class="input-group-btn" v-if="type">
        <button data-toggle="modal" :href="'#' + id" class="btn btn-default" type="button"><i :class="[{ fa: true }, itemActive.icon ? itemActive.icon : 'fa-list' ]"></i></button>
        <input type="hidden" :name="getName(index, 'icon')" :value="itemActive.icon">
      </span>
      
      <input type="text" class="form-control" v-model="itemActive.title"
    	   :name="getName(index, 'title')">

      <span class="input-group-btn">
        <button class="btn btn-danger" type="button" index="index" @click="itemActive = false">
        	<i class="fa fa-minus-circle"></i>
        </button>
      </span>

      <div class="modal fade" :id="id">
    	<div class="modal-dialog">
    		<div class="modal-content">
    			<div class="modal-header">
    				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    				<h4 class="modal-title">Icons</h4>
    			</div>
    			<div class="modal-body">

    				<input type="text" name="" class="search-icon" v-model="search" placeholder="Search icons">
	    				
	    				<div class="row scoll">
	    					<div class="fa-hover col-md-2" v-for="icon in icons">
	    						<a @click.prevent="chooseIcon(icon)" class="icon">
	    							<i :class="'fa ' + icon" aria-hidden="true"></i>
	    						</a>
	    					</div>
	    				</div>

    			</div>
    		</div>
    	</div>
    </div>

    </div>

    
	
</template>

<script>
	module.exports = {
		data: function () {
			return {
				search: '',
				itemActive: this.item
			}
		},

		props: {
			item: {
				type: Object,
				default: {}
			},

			inputName: {
				type: String,
				default: 'list'
			},

			type: {
				type: Boolean,
				default: true
			},

			index: 0
		},

		computed: {
			id: function() {
				return +new Date;
			},
			icons: function() {

				var icons = window.fontAwesome;

				if (this.search !== '') {

					return icons.filter(function(item) {
						return item.indexOf(this.search) >= 0;
					}.bind(this));

				} 

				return icons;
			}
		},

		methods: {

			chooseIcon: function(icon) {
				this.itemActive = Object.assign({}, this.itemActive, {icon: icon});
				$('.close').trigger('click');
			},

			getName: function(index, name) {
				return this.inputName + "[" + index + "][" + name + "]";
			},

		}
	}
</script>

<style lang="stylus">
	.search-icon
		border: 1px solid #222
		margin-bottom: 20px
		padding: 10px
		display: block
		width: 100%
	.icon
		margin-bottom: 10px
		color: #222
		cursor: pointer
	.scoll
		max-height: 300px
		overflow: scroll
</style>





