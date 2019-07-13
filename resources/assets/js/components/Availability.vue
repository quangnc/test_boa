<template>
    <div>
        <div class="block-rooms">
            <div v-for="(room, key) in data" class="block-room">
                <div class="block-room-heading">
                    <b>{{ room.name }}</b>
                </div>
                <div class="a-table">
                    <div class="a-row">
                        <div class="a-cell room-info">
                            <div class="room-info--content">
                                <img :src="room.image" alt="Image" style="margin-bottom: 5px">
                                <a style="margin-bottom: 10px; display: block" href="" @click.prevent="openModal(room.room_id)">See photos and details</a>
                                <div class="ul">
                                    <div class="li">
                                        <i class="fa fa-check-square-o icon-check"></i>
                                        <b>Bed</b>
                                        <span>{{ room.bed_type_name }}</span>
                                    </div>
                                    <div class="li">
                                        <i class="fa fa-check-square-o icon-check"></i>
                                        <b>Size</b>
                                        <span>{{ room.width }}x{{ room.length }}m<sup>2</sup></span>
                                    </div>
                                    <div class="li" v-if="room.breakfast_included">
                                        <i class="fa fa-check-square-o icon-check"></i>
                                        <span>Breakfast included</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="a-cell room-list">
                            <div class="a-table">
                                <div class="a-row">
                                    <div class="a-cell capacity text-center">
                                        <div class="room-list--heading">Sức chứa</div>
                                    </div>
                                    <div class="a-cell price">
                                        <div class="room-list--heading">Giá phòng/đêm</div>
                                    </div>
                                    <div class="a-cell quality">
                                        <div class="room-list--heading text-center">SL</div>
                                    </div>
                                    <div class="a-cell book text-center">
                                        <div class="room-list--heading">Đặt nhiều nhất</div>
                                    </div>
                                </div>
                                <div class="a-row">
                                    <div class="a-cell capacity text-center">
                                        <img v-for="i in room.max_person" src="icon/max_per.png" alt="person">
                                    </div>
                                    <div class="a-cell price text-center">
                                        <div v-if="room.special_price">
                                            <div class="new-price">{{ room.special_price_currency }}</div>
                                            <div class="old-price">{{ room.price_currency }}</div>
                                        </div>
                                        <div v-else>
                                            <div class="new-price">{{ room.price_currency }}</div>
                                        </div>
                                    </div>
                                    <div class="a-cell quality text-center">
                                        <select v-model="data[key].qty">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>5</option>
                                            <option>6</option>
                                            <option>7</option>
                                            <option>8</option>
                                            <option>9</option>
                                            <option>10</option>
                                        </select>
                                    </div>
                                    <div class="a-cell book text-center">
                                        <input type="checkbox" id="checkbox" v-model="data[key].extra_bed">
                                        <label for="checkbox">Extra bed</label>
                                        <button style="min-width: 80px" class="btn-book" @click="bookRoom(room)">Book</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div v-if="modal" class="room-model">
            <a class="room-modal--close" href="" @click.prevent="closeModal">
                <i class="fa fa-times fa-2x" />
            </a>
            <div class="a-table room-model--body">
                <div class="a-row room-model--content">
                    <div class="a-cell room-model--left">
                        <div class="rml-heading">{{ room.name }}</div>
                        <div class="rml-facilities">
                            <div v-if="room.facilities" class="rml-facilities-content" v-for="(facilities, facility_group_name) in room.facilities">
                                <div>
                                    <h3>{{ facility_group_name }}</h3>
                                    <ul>
                                        <li v-for="facility in facilities">{{ facility }}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="a-cell room-model--right">
                        <room-gallery :value="room.images"></room-gallery>
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
                data: [],
                modal: false,
                room_id: null,
                room: {
                    images: [],
                },
            }
        },

        props: ['hotelId', 'route', 'checkIn', 'checkOut', 'adultNumber', 'childrenNumber'],

        created: function () {
            axios.get('/api/room?hotel_id=1').then((res) => res.data).then(data => this.data = data).catch(error => console.log(error));
        },

        watch: {},

        computed: {},

        methods: {
            openModal: function (room_id) {
                this.modal = true;
                document.getElementById("id-body").classList.add('modal-open');

                const room = this.data.find(r => r.room_id == room_id);
                this.room = room;
            },
            closeModal: function(e) {
                this.modal = false;
                document.getElementById("id-body").classList.remove('modal-open');
            },
            bookRoom: function(room) {

                const price = room.special_price ? room.special_price : room.price;

                const data = {
                    id: room.room_id,
                    name: room.name,
                    qty: room.qty,
                    price: price,
                    options: {
                        extra_bed: room.extra_bed,
                        checkIn: this.checkIn,
                        checkOut: this.checkOut,
                        adultNumber: this.adultNumber,
                        childrenNumber: this.childrenNumber
                    }
                };

                axios.post(this.route, data)
                    .then(res => res.data)
                    .then((data) => {
                        if (data.redirect) {
                            window.location = data.redirect;
                        }
                    })
                    .catch(err => console.log(err));
            }
        }
    }
</script>

<style lang="sass">
    .block-rooms
        .block-room
            border: 1px solid #3a3a3a
            /*border-radius: 3px*/
            margin-bottom: 20px
            &-heading
                background-color: #3a3a3a
                padding: 10px 15px
                /*border-bottom: 1px solid #3a3a3a*/
    .a-table
        display: table
        width: 100%
    .a-row
        display: table-row
    .a-cell
        display: table-cell
        vertical-align: top
        /*padding: 10px*/
        &.include
            width: 20%
        &.capacity
            width: 20%
        &.price
            width: 20%
        &.quality
            width: 20%
        &.book
            width: 20%
    .room-info
        width: 25%
        &--heading
            padding: 10px
            border-right: 1px solid #3a3a3a
        &--content
            border-right: 1px solid #3a3a3a
    .room-list
        &--heading
            padding: 10px
            border-bottom: 1px solid #3a3a3a
    .room-list
        width: 75%
        .a-cell
            padding: 10px
    .btn-book
        background-color: #967c61
        padding: 5px 10px
        color: #fff
    .new-price
        color: #fff
        font-size: 16px
        font-weight: bold
    .old-price
        text-decoration: line-through
    .room-model
        position: fixed
        top: 0
        left: 0
        right: 0
        bottom: 0
        width: 100%
        height: 100%
        z-index: 9999
        background-color: rgba(0,0,0,.7)
    .room-modal--close
        position: absolute
        right: 20px
        top: 20px
        z-index: 9999
    .modal-open
        overflow: hidden
        .gdlr-header-inner
            display: none
    .room-info--content
        padding: 10px
    .room-model--right
        width: 80%
    .room-model--left
        width: 20%
        background-color: #fff
        position: relative
        vertical-align: top
    .room-model--content
        height: 100%
    .room-model--body
        height: 100%
    .rml-heading
        display: block
        /*position: absolute*/
        /*top: 0*/
        /*left: 0*/
        /*right: 0*/
        box-shadow: 0 3px 2px rgba(86,86,86,.15)
        padding: 10px
        color: #000
        background-color: #fff
        font-weight: 700
        font-size: 16px
    .rml-facilities
        height: 100%
        overflow-y: scroll
        padding-bottom: 100px
    .rml-facilities-content
        > div
            padding: 10px
        h3
            color: #000
            font-size: 16px
            font-weight: 700
        ul
            margin: auto
            list-style-position: inside
            font-size: 14px
            color: #222
    .text-center
        text-align: center
    .text-right
        text-align: right
    .ul
        .li
            span
                color: #fff
</style>
