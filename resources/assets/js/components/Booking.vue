<template>
	<div class="room-detail_rates">
		
		<div class="alert alert-success" v-if="alert">
			<button type="button" class="close" @click="alert = ''">&times;</button>
			<span v-html="alert"></span>
		</div>

		<div class="check-rate">
			<span>DEPARTURE DATE</span>
			<input type="text" class="awe-calendar-check" placeholder="Arrive Date" v-model="date">
			<button class="awe-btn awe-btn-13" @click="checkRate">
				Check Rate <i v-if="loading" class="fa fa-spinner fa-pulse fa-fw"></i>
			</button>
		</div>

		<ul class="list-unstyled search-date">
			<li v-for="(d, key, index) in rate" :class="{ active: key == date }">
				<a href="" @click.prevent="seeRate(key)">
					<div>{{ d.l }}</div>
					<div>{{ key }}</div>
				</a>
			</li>
		</ul>

        <table>
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Cabin</th>
                    <th>Max</th>
                    <th>
                    	<a href="" @click.prevent="sortRate(rateSort)">
                    		Rate
                    		<i v-if="rateSort == 'asc'" class="fa fa-caret-up" aria-hidden="true"></i>
                    		<i v-if="rateSort == 'desc'" class="fa fa-caret-down" aria-hidden="true"></i>
                    	</a>
                    </th>
                    <th>Room</th>
                    <th class="text-center">Book</th>
                </tr>
            </thead>
            <tbody>
            	
            	<tr v-for="cabin in cabins">
            		<td>
            			<a :href="cabin.options.href"><img :src="cabin.options.thumb" :alt="cabin.name"></a>
            		</td>
	                <td class="cabin">
	                    <h6><a :href="cabin.options.href">{{ cabin.name }}</a></a></h6>
	                </td>
	                <td>
	                    <i class="fa fa-user" aria-hidden="true" v-for="(value, key, index) in cabin.adult" :key="index"></i>
	                </td>
	                <td>
	                    <p :class="{ price: cabin.price, special: cabin.special }">
	                    	<span class="amout">{{ cabin.currency_price }}</span>
	                    </p>
	                    <p class="special" v-if="cabin.special">
	                    	<span class="amout">{{ cabin.currency_special }}</span>
	                    </p>
	                </td>
	                <td>
	                     <select class="form-control" @change="selectCabin(cabin, $event)">
                    		<option :value="index+1" v-for="(room, index) in cabin.number">{{ index + 1 }}</option>
                    	</select>
	                </td>
	                <td class="text-center">
	                    <a href="" class="awe-btn awe-btn-9" @click.prevent="bookTour(cabin)">Book</a>
	                </td>
            	</tr>

        </tbody>
        </table>

    </div>
	
</template>

<script>
	module.exports = {
		
		data: function () {
			return {
				loading: false,
				date: this.dateArrive,
				cabins: [],
				alert: '',
				rate: [],
				rateSort: 'desc'
			}
		},

		mounted: function(){
			this.getCabin();
		},

		props: ['currency', 'language', 'route', 'duration', 'name', 'dateArrive'],

		computed: {
			
		},

		methods: {

			selectCabin: function(cabin, event) {

				this.cabins = this.cabins.map(function(_cabin){
					if (_cabin.id == cabin.id) {
						return Object.assign({}, cabin, {qty: event.target.value})
					}

					return _cabin;
				});
			},

			getCabin: function() {
				this.loading = true;
				axios.post(this.route, {
                    currency: this.currency,
                    duration: this.duration,
                    name: this.name,
                    date: this.date
                }).then(function (response) {
                	this.rate = response.data.rate;
                    this.cabins = this.cabins = _.orderBy(response.data.cabins, 'price', 'asc');
                    this.loading = false;
                }.bind(this))
                .catch(function (error) {
                	this.loading = false;
                    console.log(error);
                }.bind(this));
			},

			bookTour: function(cabin) {
				axios.post(this.route + '/book', cabin).then(function (response) {

                    this.alert = response.data.success;

                    if (response.data.redirect) {
                    	window.location = response.data.redirect;
                    }
                    
                }.bind(this))
                .catch(function (error) {
                    console.log(error);
                });
			},

			checkRate: function() {
				this.date = $('.awe-calendar-check').val();
				this.getCabin();
			},

			seeRate: function(date) {
				this.date = date;
				this.getCabin();
			},

			sortRate: function(rateSort) {

				this.cabins = _.orderBy(this.cabins, 'price', rateSort);

				if (rateSort == 'asc') {
					this.rateSort = 'desc';
				} else {
					this.rateSort = 'asc';
				}
			}
		}
	}
</script>

<style lang="sass">
	.room-detail_rates table td 
		padding: 15px 0
	.search-date 
		display: flex
		justify-content: space-around
		margin: 0
		background-color: #eeeeee
		margin-top: 10px
		margin-bottom: 10px
		li
		  width: 100%
		  text-align: center
		  border-top: 2px solid transparent 
		  & + li
		  		border-left: 1px solid #fff
		  a
		  	position: relative
		  	padding: 10px
		  &.active
		  	background-color: #fff
		  	border-top-color: #46b8da
		  	a
		  		color: #46b8da
		  		font-weight: bold
		  		
	.alert-success
		margin-bottom: 20px
	.special
		color: red
	.price.special
		text-decoration: line-through
		font-size: 12px
	.check-rate 
		span, button
			padding: 10px 20px
</style>