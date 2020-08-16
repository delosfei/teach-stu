<template>
    <div>
        <a href="#" @click.prevent="del" :class="className">
            <slot>删除</slot>
        </a>
    </div>
</template>

<script>
export default {
    props: {
        title: {default: '删除'},
        action: {required: true, type: String},
        className:{default:'btn btn-secondary btn-sm'}
    },
    methods: {
        del($event) {
            this.$confirm('确认删除吗？', '提示', {
                type: 'warning'
            }).then(async () => {
                await this.axios.delete(this.action)
                 location.reload(true)
            }).catch(() => {

            })
        }
    }
}
</script>

<style scoped>

</style>
