<template>
    <div>
        <div class="layout-modules">
            <div class="drag-content m-b-20">
                <ul class="module-list">
                    <li v-for="module in modules">
                        <div class="module" draggable="true" v-on:dragstart="onDragStart" :id="module.module_id">
                            {{ module.name }}
                            <div>{{ module.code }}:{{ module.module_id }}</div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="layout-design">
            <div class="row m-b-20">
                <div class="col-12">
                    <div
                            data-position="content-top"
                            class="drop-content" v-on:drop="onDrop"
                            v-on:dragover="onDragOver"
                    >
                        <div v-if="!top.length">drop here</div>
                        <div v-else>
                            <div class="module" v-for="module in top">
                                <div class="pull-left">
                                    {{ module.name }}
                                    <div>{{ module.code }}:{{ module.module_id }}</div>
                                </div>
                                <div class="pull-right">
                                    <a href="#" @click.prevent="removeModule(module.layout_module_id)"><i class="fa fa-trash"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row m-b-20">
                <div class="col-3">
                    <div
                            data-position="content-left"
                            class="drop-content" v-on:drop="onDrop"
                            v-on:dragover="onDragOver"
                    >
                        <div v-if="!left.length">drop here</div>
                        <div v-else>
                            <div class="module" v-for="module in left">
                                <div class="pull-left">
                                    {{ module.name }}
                                    <div>{{ module.code }}:{{ module.module_id }}</div>
                                </div>
                                <div class="pull-right">
                                    <a href="#" @click.prevent="removeModule(module.layout_module_id)"><i class="fa fa-trash"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6"><div class="drop-content block">Content</div></div>
                <div class="col-3">
                    <div
                            data-position="content-right"
                            class="drop-content" v-on:drop="onDrop"
                            v-on:dragover="onDragOver"
                    >
                        <div v-if="!right.length">drop here</div>
                        <div v-else>
                            <div class="module" v-for="module in right">
                                <div class="pull-left">
                                    {{ module.name }}
                                    <div>{{ module.code }}:{{ module.module_id }}</div>
                                </div>
                                <div class="pull-right">
                                    <a href="#" @click.prevent="removeModule(module.layout_module_id)"><i class="fa fa-trash"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row m-b-20">
                <div class="col-12">
                    <div
                            data-position="content-bottom"
                            class="drop-content" v-on:drop="onDrop"
                            v-on:dragover="onDragOver"
                    >
                        <div v-if="!bottom.length">drop here</div>
                        <div v-else>
                            <div class="module" v-for="module in bottom">
                                <div class="pull-left">
                                    {{ module.name }}
                                    <div>{{ module.code }}:{{ module.module_id }}</div>
                                </div>
                                <div class="pull-right">
                                    <a href="#" @click.prevent="removeModule(module.layout_module_id)"><i class="fa fa-trash"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <input name="layout_modules" :value="value" type="hidden"/>
    </div>
</template>

<script>

    module.exports = {

        data: function () {
            return {
                data: this.layouts,
            }
        },

        mounted: function(){

        },

        props: {
            modules: {
                type: Array,
                default: () => []
            },

            layouts: {
                type: Array,
                default: () => []
            },
        },

        computed: {
            left: function () {
              return this.findData('content-left');
            },
            right: function() {
                return this.findData('content-right');
            },
            bottom: function() {
                return this.findData('content-bottom');
            },
            top: function() {
                return this.findData('content-top');
            },
            value: function() {
                return JSON.stringify(this.data);
            }
        },

        methods: {
            onDragStart: function(e) {
                console.log(e);
                e.dataTransfer.setData("text/plain", e.target.id);
            },
            onDrop: function(e) {
                e.preventDefault();
                const position = e.currentTarget.dataset.position;
                const id = e.dataTransfer.getData("text/plain");
                this.addModule(position, id);
            },
            onDragOver: function(ev) {
                ev.preventDefault();
                ev.dataTransfer.dropEffect = "move";
            },
            findData: function(type) {
                const modules = this.data.filter( d => d.position == type );
                return modules ? modules : [];
            },

            addModule: function(position, id) {
                const module = this.modules.find( m => m.module_id == id);
                this.data.push({ ...module, sort_order: 0, layout_module_id: +new Date, position: position });
            },

            removeModule: function(layout_module_id) {
                this.data = this.data.filter( d => d.layout_module_id !== layout_module_id );
            },

            editModule: function() {

            }
        }
    }
</script>

<style lang="sass">
    .drop-content
        border: 1px solid rgba(0,0,0,.125)
        padding: 20px
        min-height: 10px
        border-radius: 3px
        &.block
            background: #1b1e21
    .drag-content
        border: 1px solid rgba(0,0,0,.125)
        overflow: hidden
        border-radius: 3px
    .module-list
        list-style: none
        margin: 0
        padding: 0
        li
            padding: 10px
            width: 300px
            float: left
    .module
        padding: 10px
        background: #e1e2db
        border-radius: 3px
        display: block
        margin-bottom: 20px
        overflow: hidden
    .m-b-20
        margin-bottom: 20px
</style>