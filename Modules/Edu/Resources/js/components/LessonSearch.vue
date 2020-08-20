<template>
    <div class="card">

        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="请输入课程标题或编号">
            <div class="input-group-append">
                <span class="input-group-text">搜索</span>
            </div>
        </div>

        <table class="table mt-3 table-bordered">
            <thead>
            <tr>
                <th>编号</th>
                <th>课程名称</th>
                <th>上架</th>
                <th>标签</th>
                <th>点赞数</th>
                <th>视频数量</th>
                <th>发布时间</th>
                <th width="80"></th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="lesson in lessons" :key="lesson.id">
                <td>1</td>
                <td>2</td>
                <td>
                    <i class="fas fa-check"></i>
                </td>
                <td>3</td>
                <td>44</td>
                <td>4</td>
                <td>5</td>
                <td>
                    <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                        <a href="#" class="btn btn-info" @click.prevent="$emit('add',lesson)">添加</a>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>


    </div>
</template>

<script>
export default {
    data() {
        return {
            lessons: [
                {id: 4, title: 'abd'},
                {id: 5, title: 'abd'},
                {id: 6, title: 'abd'}
            ]
        }
    }
}
</script>

<style scoped>

</style>
