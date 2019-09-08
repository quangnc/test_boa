<template>

    <div class="custom-image">
        <div class="image-manager-thumb img-thumbnail" v-bind:style="{width: '100px', height: '100px'}">
            <img class="image-manager-thumb_image" :src="image_url">
            <div class="image-manager-thumb_action">
                <a class="btn btn-success btn-xs" @click="openModal" data-toggle="modal" :href="'#' + id">
                    <i class="fa fa-picture-o" aria-hidden="true"></i>
                </a>
                <a href="#"
                   class="btn btn-danger btn-xs"
                   role="button"
                   @click.prevent="clearImage"
                >
                    <i class="fa fa-times" aria-hidden="true"></i>
                </a>
            </div>
            <input type="hidden" :name="inputName" v-model="image_name">
        </div>

        <div class="modal fade" :id="id">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Image manage</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                    <div class="modal-body image-manager">

                        <div class="clearfix well">
                            <div class="pull-left">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item" v-for="breadcrumb in breadcrumbs">
                                        <a href="#" @click.prevent="loadImage(breadcrumb.path)">{{ breadcrumb.name }}</a>
                                    </li>
                                </ol>

                            </div>

                            <button type="button"
                                    class="btn btn-success pull-right btn-xs"
                                    v-on:click="uploadImage"
                            >
                                Upload Image
                            </button>

                            <button type="button"
                                    class="btn btn-danger pull-right btn-xs"
                                    v-on:click="clearCache"
                                    v-bind:style="{marginRight: '10px'}"
                            >
                                Clear Cache
                            </button>

                            <button type="button"
                                    :id="id + 'refesh'"
                                    class="btn btn-warning pull-right btn-xs"
                                    v-bind:style="{marginRight: '10px'}"
                                    v-on:click="fetchImage">
                                Refresh
                            </button>
                        </div>

                        <div class="row">

                            <div class="col-3">
                                <ul class="list-group">
                                    <li class="list-group-item" v-for="directorie in directories">
                                        <a href="#" @click.prevent="">
                                            <span @click.prevent="loadImage(directorie.path)">{{ directorie.name }}</span>
                                            <i class="fa fa-trash pull-right"
                                                aria-hidden="true"
                                                @click.prevent="removeFolder(directorie.path)"></i>
                                        </a>
                                    </li>
                                    <li :class="setActive">
                                        <input @click="add_dir = true"
                                               type="text"
                                               v-model="name"
                                               class="form-control"
                                               placeholder="Add Folder..."
                                               @keyup.enter="addFolter"
                                        >
                                        <div v-if="add_dir">
                                            <button class="btn btn-success btn-xs" type="button" @click="addFolter">
                                                <i class="fa fa-floppy-o" aria-hidden="true"></i>
                                            </button>

                                            <button class="btn btn-link btn-xs"
                                                    type="button"
                                                    @click="add_dir = false">
                                                <i class="fa fa-remove" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </li>
                                </ul>

                            </div>

                            <div class="col-9">
                                <div class="well image-manager-view">
                                    <div class="row" v-if="images.length > 0">
                                        <div class="col-3" v-for="(img, i) in images">
                                            <div class="image-manager-thumb img-thumbnail">
                                                <img class="image-manager-thumb_image" :src="img.thumb">
                                                <div class="image-manager-thumb_action">
                                                    <a @click.prevent="chooseImage(img)" href="#"
                                                       class="btn btn-success btn-xs" role="button">
                                                        <i class="fa fa-check" aria-hidden="true"></i>
                                                    </a>
                                                    <a @click.prevent="deleteImage(img)" href="#"
                                                       class="btn btn-danger btn-xs" role="button">
                                                        <i class="fa fa-times" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="image-manager-thumb_name">
                                                <span @click="index = i" v-if="index !== i">{{ img.name }}</span>
                                                <input v-else
                                                       @keyup.enter="renameImage(img.image, img.ext,  $event)"
                                                       type="text"
                                                       :value="img.filename" @blur="renameImage(img.image, img.ext, $event)"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" v-else>No Images</div>
                                </div>
                            </div>
                        </div>

                        <div v-if="errors.length" class="alert alert-danger  alert-dismissible" role="alert">
                            <button type="button" class="close" @click="errors = []"><span aria-hidden="true">×</span></button>
                            <ul class="list-unstyled">
                                <li v-for="error in errors">{{ error }}</li>
                            </ul>
                            <span class="pull-right">{{ second }}</span>
                        </div>

                        <div v-if="success.length" class="alert alert-success  alert-dismissible" role="alert">
                            <button type="button" class="close" @click="success = []"><span aria-hidden="true">×</span></button>
                            <ul class="list-unstyled">
                                <li v-for="s in success">{{ s }}</li>
                            </ul>
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
                add_dir: false,
                directories: [],
                count: 0,
                name: '',
                files: '',
                directory: 'images',
                images: [],
                index: -1,

                image_url: this.value != '' ? '/upload/' + this.value : 'http://placehold.it/350x150',
                image_name: this.value != '' ? this.value : '',

                errors: [],
                second: 5,
                success: [],
            }
        },

        props: ['id', 'inputName', 'value'],

        created: function () {

        },

        watch: {
            directory: function() {
                this.fetchImage();
            }
        },

        computed: {
            breadcrumbs: function () {

                let breadcrumbs = this.directory.split('/');

                let current= [];

                return breadcrumbs.map(function(breadcrumb, index) {

                    current.push(breadcrumb);

                    var li = {
                        name: breadcrumb,
                        path: current.join('/')
                    }

                    return li;

                });

            },
            setActive: function () {
                if (this.add_dir) return "list-group-item";
                return "not-active list-group-item";
            }
        },

        methods: {

            chooseImage: function (img) {
                this.image_url = img.url;
                this.image_name = img.image;
                $('#'+ this.id +' .close').trigger('click');
                $('.modal-backdrop').remove();
            },

            clearImage: function() {
                this.image_url = 'http://placehold.it/350x150';
                this.image_name = '';
            },

            deleteImage: function (img) {

                axios.post('/api/upload-images/deleteImage', {
                    file: img.image,
                    directorie: this.directorie
                })
                    .then(function (response) {
                        this.images = response.data;
                    }.bind(this))
                    .catch(function (error) {
                        console.log(error);
                    });

            },

            renameImage: function (old, ext, e) {

                axios.post('/api/upload-images/renameImage', {
                    old: old,
                    new: this.directorie + "/" + e.target.value + "." + ext,
                    directorie: this.directorie
                })
                    .then(function (response) {
                        this.images = response.data;
                    }.bind(this))
                    .catch(function (error) {
                        console.log(error);
                    });

            },

            fetchData: function () {
                axios.get('/api/upload-images/directories')
                    .then(function (response) {
                        this.directories = response.data;
                    }.bind(this))
                    .catch(function (error) {
                        console.log(error);
                    });
            },

            addFolter: function (e) {
                axios.post('/api/upload-images/createDirectory', {
                    folder: this.name,
                })
                    .then(function (response) {
                        this.directories = response.data;
                        this.name = "";
                        this.add_dir = false;
                    }.bind(this))
                    .catch(function (error) {
                        console.log(error);
                    });
            },

            removeFolder: function (directorie) {

                axios.post('/api/upload-images/removeDirectory', {
                    folder: directorie,
                })
                    .then(function (response) {
                        this.directorie = "images";
                        this.directories = response.data;
                    }.bind(this))
                    .catch(function (error) {
                        console.log(error);
                    });
            },

            uploadImage: function () {

                const input = document.createElement("input");
                input.setAttribute('type', "file");
                input.setAttribute('name', "files");
                input.setAttribute('multiple', '');
                input.click();
                input.addEventListener('change', this.chooseFiles, false);

                this.input = input;

                document.getElementsByTagName('body')[0].appendChild(this.input);
                document.body.onfocus = this.clearFocus();

            },

            chooseFiles: function (e) {

                const images = e.target.files || e.dataTransfer.files;

                if (images.length <= 0) return;

                const formData = new FormData();

                for (let i = 0, f; file = images[i]; i++) {
                    formData.append('images['+ file.name +']', file);
                }

                formData.append('directory', this.directorie);

                axios.post('/api/upload-images/uploadImage', formData)
                    .then(function (response) {
                        this.images = response.data;
                        document.getElementById(this.id + 'file').value = "";
                        this.upload = true;
                    }.bind(this))
                    .catch(function (error) {
                        if (error.response.status == 422) {

                            this.errors = Object.keys(error.response.data).map(function(k) { return error.response.data[k] });

                            setTimeout(() => {
                                this.errors = [];
                            }, 5000);

                            const exTime = setInterval(() => {
                                this.second--;
                                if (this.second < 0) {
                                    this.second = 5;
                                    clearInterval(exTime)
                                };
                            },1000);


                        } else {
                            console.log(error);
                        }

                    }.bind(this));
            },

            loadImage: function (directorie) {
                this.directorie = directorie;
                this.fetchImage();
            },

            fetchImage: function () {

                axios.post('/api/upload-images/fetchImage', {
                    directorie: this.directorie
                })
                    .then(function (response) {
                        this.images = response.data;
                        // console.log(response);
                    }.bind(this))
                    .catch(function (error) {
                        console.log(error);
                    });
            },

            openModal: function(){
                this.fetchData();
                this.fetchImage();
            },

            clearCache: function() {
                axios.post('/api/upload-images/clearCache', {
                    directorie: this.directorie
                }).then(function (response) {
                    this.images = response.data;
                    this.success= ["You have clear cache!"];
                }.bind(this))
                .catch(function (error) {
                    console.log(error);
                });
            }
        }
    }
</script>

<style lang="sass">
    .image-manager
        .modal-lg
            max-width: 1000px
    .not-active
        .form-control
            border: none
            margin: 0
    .image-manager
        .row
            margin-left: -5px
            margin-right: -5px
            > div
                padding-left: 5px
                padding-right: 5px
        .well
            padding: 10px
        .breadcrumb
            margin-bottom: 0px
    .image-manager-view
    .image-manager-thumb
        margin-bottom: 10px
        position: relative
    .image-manager-thumb_image
        width: 100%
        height: 90px
    .image-manager-thumb_action
        position: absolute
        top: 0
        left: 0
        width: 100%
        height: 100%
        display: flex
        align-items: center
        justify-content: center
    .image-manager-thumb_action
        &:hover
            a
                display: block
    .image-manager-thumb_action
        a
            display: none
            margin: 5px
    .image-manager-thumb_name
        height: 40px
    .image-manager-thumb_name
        input
            border: none
            width: 100%
</style>
