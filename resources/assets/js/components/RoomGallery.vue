<template>
    <div class="ri-slideshow">
        <div v-if="images.length" class="ri-image">
            <div :class="animatedClassCurrent">
                <img :src="getImageCurrent" alt="">
            </div>
            <div :class="animatedClassNext">
                <img :src="getImageNext" alt="">
            </div>
        </div>
        <div class="ri-control" v-if="images.length > 1">
            <a class="ri-control-left fa-2x" href="" @click.prevent="preSlide"><i class="fa fa-chevron-left"/></a>
            <a class="ri-control-right fa-2x" href="" @click.prevent="nextSlide"><i class="fa fa-chevron-right"/></a>
        </div>
        <div class="ri-images">
            <ul v-if="images.length" class="ri-list-images">
                <li v-for="(value, key) in images" :class="{active: indexCurrent == key}">
                    <a href="" @click.prevent="selectImage(key)">
                        <img :src="value.thumb" :alt="value.title">
                    </a>
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
    export default {
        data: function () {
            return {
                images: this.value,
                indexOld: 0,
                indexCurrent: 0,
                active: 'current', // State image preview active (current | next)
                animatedClassCurrent: '',
                animatedClassNext: 'ri-hidden',
            }
        },

        props: ['value'],

        computed: {
            getImageCurrent: function () {
                if (this.active == 'current') {
                    const currentImage = this.images[this.indexCurrent];
                    return currentImage.image
                }

                const oldImage = this.images[this.indexOld];
                return oldImage.image;
            },
            getImageNext: function () {
                if (this.active == 'next') {
                    const currentImage = this.images[this.indexCurrent];
                    return currentImage.image
                }
                const oldImage = this.images[this.indexOld];
                return oldImage.image;
            }
        },

        methods: {
            selectImage: function (index) {

                if (index == this.indexCurrent) {
                    return;
                }

                this.indexOld = this.indexCurrent;
                if (index > this.indexCurrent) {
                    this.setAnimated(this.active, 'Left');
                    this.indexCurrent = index;
                } else {
                    this.setAnimated(this.active, 'Right');
                    this.indexCurrent = index;
                }

                if (this.active == 'current') {
                    this.active = 'next';
                } else {
                    this.active = 'current';
                }
            },
            nextSlide: function () {
                const imageLength = this.images.length - 1;

                if (imageLength <= 1) {
                    return;
                }

                this.indexOld = this.indexCurrent;

                if (this.indexCurrent == imageLength) {
                    this.indexCurrent = 0;
                } else {
                    this.indexCurrent++;
                }

                this.setAnimated(this.active, 'Left');
                if (this.active == 'current') {
                    this.active = 'next';
                } else {
                    this.active = 'current';
                }
            },
            preSlide: function () {

                const imageLength = this.images.length - 1;

                if (imageLength <= 1) {
                    return;
                }

                this.indexOld = this.indexCurrent;

                if (this.indexCurrent == 0) {
                    this.indexCurrent = imageLength;
                } else {
                    this.indexCurrent--;
                }

                this.setAnimated(this.active, 'Right');
                if (this.active == 'current') {
                    this.active = 'next';
                } else {
                    this.active = 'current';
                }
            },
            setAnimated(state = 'current', type = 'Left') {
                const typeIn = type;

                let typeOut = 'Right';

                if (type == 'Right') {
                    typeOut = 'Left'
                }

                if (state == 'current') {
                    this.animatedClassCurrent = `animated fadeOut${typeIn}`;
                    setTimeout(() => {
                        this.animatedClassCurrent = 'ri-hidden';
                        this.animatedClassNext = `animated fadeIn${typeOut}`
                    }, 500);
                } else {
                    this.animatedClassNext = `animated fadeOut${typeIn}`;
                    setTimeout(() => {
                        this.animatedClassNext = 'ri-hidden';
                        this.animatedClassCurrent = `animated fadeIn${typeOut}`
                    }, 500);
                }
            }
        }
    }
</script>

<style lang="sass">
    .ri-slideshow
        position: relative
        height: 100%
        .ri-list-images
            list-style-type: none
            margin: 0
            padding: 0
            li
                float: left
                margin: 5px
                opacity: .5
                &.active
                    opacity: 1
                    border: 2px solid #fff
        .ri-image
            overflow: hidden
            text-align: center
            padding-top: 40px
            img
                max-width: 100%
        .ri-hidden
            display: none
        .ri-control
            z-index: 9999
            &-left
                position: absolute
                left: 10px
                top: 50%
            &-right
                position: absolute
                right: 10px
                top: 50%
        .ri-images
            position: fixed
            bottom: 0
            width: 100%
            text-align: center
</style>