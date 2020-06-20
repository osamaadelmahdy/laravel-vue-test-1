<template>
    <div>
        <h1>Post</h1>

        <!-- Modal -->
        <div
            class="modal fade"
            id="exampleModal"
            tabindex="-1"
            role="dialog"
            aria-labelledby="exampleModalLabel"
            aria-hidden="true"
        >
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">
                            Create post
                        </h5>
                        <button
                            type="button"
                            class="close"
                            data-dismiss="modal"
                            aria-label="Close"
                        >
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input
                            type="text"
                            name="title"
                            :class="[
                                'form-control',
                                error.title ? 'is-invalid' : ''
                            ]"
                            placeholder="Title"
                            v-model="post.title"
                        />
                        <div v-if="error.title" class="alert alert-danger">
                            {{ error.title[0] }}
                        </div>
                        <textarea
                            name="body"
                            cols="30"
                            rows="5"
                            :class="[
                                'form-control',
                                error.title ? 'is-invalid' : ''
                            ]"
                            v-model="post.body"
                        ></textarea>
                        <div v-if="error.body" class="alert alert-danger">
                            {{ error.body[0] }}
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button
                            type="button"
                            class="btn btn-secondary"
                            data-dismiss="modal"
                        >
                            Close
                        </button>
                        <button
                            type="button"
                            class="btn btn-primary"
                            @click="creatPost"
                        >
                            Create
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Button trigger modal -->
        <button
            type="button"
            class="btn btn-primary"
            data-toggle="modal"
            data-target="#exampleModal"
        >
            New post
        </button>
    </div>
</template>

<script>
export default {
    data() {
        return {
            post: {
                title: "",
                body: ""
            },
            error: []
        };
    },
    methods: {
        creatPost() {
            axios.post("api/createpost", this.post).then(res => {
                console.log("res", res);
                if (res.data.status == "error") {
                    this.error = res.data.errors;
                }
            });
        }
    }
};
</script>
