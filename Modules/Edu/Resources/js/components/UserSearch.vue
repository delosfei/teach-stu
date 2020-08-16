<template>
    <div>
        <el-dialog title="提示" :visible.sync="dialogVisible" width="60%">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="请输入邮箱/手机号或用户编号" v-model="name"
                       @keydown.enter="search">
                <a href="#" class="input-group-append" @click.prevent="search">
                    <span class="input-group-text" id="basic-addon2">搜索</span>
                </a>
            </div>
            <table class="table mt-3 table-striped">
                <thead>
                <tr>
                    <th>编号</th>
                    <th>昵称</th>
                    <th>邮箱</th>
                    <th>手机号</th>
                    <th width="160"></th>
                </tr>
                </thead>
                <tbody>

                <tr v-for="user in users" :key="user.id">
                    <td class="align-middle">{{ user.id }}</td>
                    <td class="align-middle">{{ user.name }}</td>
                    <td class="align-middle">{{ user.email }}</td>
                    <td class="align-middle">{{ user.mobile }}</td>
                    <td class="align-middle text-right pr-2">

                        <slot :user="user"></slot>

                    </td>
                </tr>
                </tbody>
            </table>
        </el-dialog>

        <button class="btn btn-info mt-3" @click="dialogVisible=true">{{ title }}</button>
    </div>
</template>

<script>
export default {
    props: {
        action: {required: true, type: String},
        title: {required: true, type: String}
    },
    data() {
        return {
            dialogVisible: this.show,
            name: '',
            users: []
        }
    },
    methods: {
        async search() {
            let response = await this.axios.post(this.action, {name: this.name})

            this.users = response
        }
    }
}
</script>

<style scoped>

</style>
