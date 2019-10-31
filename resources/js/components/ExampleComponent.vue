<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example faycal</div>
                    <div id="faycal" class="card-body">
                        I'm an faycal component. {{ message }}
                    </div>
                </div>
            </div>

        </div>
    </div>
</template>

<script >
    export default {

        props : ['message', 'tableId'],
        methods : {
            fetchProps() {
                console.log(this.message , 'at least');
            }
        },
        mounted() {
            console.log(this.fetchProps())

        }
    }
</script>
