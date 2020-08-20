<template>
    <div class="card">
        <div class="card-header">
            课程列表
        </div>
        <div class="card-body">
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
                    <th width="180"></th>
                </tr>
                </thead>
                <tbody>
                <tr>
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
                            <a href="#" class="btn btn-info">移除</a>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="card-footer text-muted">
           <button class="btn btn-primary btn-sm">课程选择</button>
        </div>
    </div>
</template>

<script>
export default {

}
</script>

<style scoped>

</style>
