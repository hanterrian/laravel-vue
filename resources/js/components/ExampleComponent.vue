<template>
    <div class="container">
        <div class="row" v-if="!is_refresh">
            <button @click="update" class="btn btn-default text mb-1" v-if="!is_refresh">Update</button>
        </div>
        <div class="row" v-if="is_refresh">
            <div class="progress col-lg-12">
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                    Updating...
                </div>
            </div>
        </div>
        <div class="row">
            <table class="table">
                <thead>
                <tr>
                    <th>Label</th>
                    <th>Url</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="url in urldata">
                    <td>{{url.label}}</td>
                    <td>{{url.url}}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    </div>
</template>

<script>
    export default {
        data: function () {
            return {
                urldata: [],
                is_refresh: false,
                id: 0
            };
        },
        mounted() {
            this.update()
        },
        methods: {
            update: function () {
                this.is_refresh = true

                axios.get('/json').then((response) => {
                    this.urldata = response.data
                    this.is_refresh = false
                    this.id++
                })
            }
        }
    }
</script>
