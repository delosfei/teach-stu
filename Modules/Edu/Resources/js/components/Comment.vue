<template>
    <div>
        <div id="comment-4910" class="card shadow-sm mb-2" v-for="(comment,index) in comments" :key="index">
            <div class="card-header bg-white d-flex justify-content-start">
                <img
                    :src="comment.user.icon"
                    class="rounded mr-3 w35 h35"
                />
                <div class="flex-fill">
                    <div class="text-secondary">
                        <a href="/edu/space/23964/topic">{{ comment.user.name }}</a>
                    </div>
                    <span class="small text-black-50">
          <i aria-hidden="true" class="fa fa-clock-o"></i>
       {{ comment.created_at }}
        </span>
                </div>
            </div>
            <div class="card-body text-secondary pb-5">

                <div class="markdown">
                    {{ comment.content }}
                </div>
            </div>
            <div class="card-footer text-muted bg-white small">
                # {{ index + 1 }}
                <a href="#" class="d-inline-block mr-2 ml-2" @click.prevent="reply_user=comment.user">

                    <i aria-hidden="true" class="fa fa-reply"></i>
                    回复
                </a>
                <a href="#" class="d-inline-block" v-if="isAdmin || comment.user.id==user.id"
                   @click.prevent="del(comment,index)">
                    <i class="fas fa-times-circle"></i>
                    删除
                </a>
            </div>
        </div>
        <div id="commentForm" :key="editorId">
            <div class="card">
                <div class="card-header">
                    <div v-if="reply_user.id">
                        回复：{{ reply_user.name }}
                        <a href="#" @click.prevent="reply_user={}">
                            <i class="fas fa-times-circle"></i>
                        </a>
                    </div>

                    <span>发表评论</span>
                </div>
                <editor name="content" :content.sync="form.content" ref="editor" initialEditType="wysiwyg"></editor>
                {{ form.content }}
                <div class="card-footer text-muted" @click.prevent="submit">
                    <button type="button" class="btn btn-primary btn-sm d-inline-block">保存</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

import Editor from "./Editor"

export default {
    components: {Editor},
    props: {
        model: {required: true, type: String},
        id: {required: true}
    },
    data() {
        return {
            form: {
                content: '',
            },
            comments: [],
            editorId: 122,
            reply_user: {},
            user: {},
            isAdmin: false
        }
    },
    mounted() {
        this.load()
    },
    methods: {
        async load() {
            let {data: comments, meta: {user, is_admin}} = await this.axios.get(`Edu/${this.model}/${this.id}/comment`)
            this.comments = comments
            this.user = user;
            this.isAdmin = is_admin;
        },
        async submit() {
            if (this.form.content.length < 10) {
                this.$message.error('评论内容不能少于10个')
                return
            }

            let post = {...this.form};
            if (this.reply_user.id) post.reply_user_id = this.reply_user.id;

            let {comment} = await this.axios.post(`Edu/${this.model}/${this.id}/comment`, post)
            this.comments.push(comment)
            this.form.content = ''
            this.editorId++
            this.reply_user = {}

        },
        async del(comment, index) {
            this.$confirm('确定删除吗?', '温馨提示', {
                confirmButtonText: '确定',
                cancelButtonText: '取消',
                type: 'warning'
            }).then(async () => {
                const url = `Edu/${this.model}/${this.id}/comment/${comment.id}`;
                await this.axios.delete(url)
                this.comments.splice(index, 1)
            }).catch(() => {
            });

        }

    }
}
</script>

<style lang="scss">
.tui-editor-defaultUI {
    border: none;
}
</style>
