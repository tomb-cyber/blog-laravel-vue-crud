<template>
    <div class="post-block"
        @mouseover="hoveredOver()"
        @mouseleave="mouseLeft()"
        @click="toPost()"
        >
        <div class="block-title">
            <h1>{{ JSON.parse(post).title }}</h1>
        </div>
        <div v-if="isPublicFeed" class="block-author">
            <p>by {{ authorName }}</p>
        </div>
        <div class="block-excerpt">
            <p> {{ JSON.parse(post).body.substring(0,120)}}...
            </p>
        </div>
    </div>
</template>

<script>
export default {
    props: ['post', 'authorName', 'authorDescription', 'isPublicFeed'],
    methods: {
        toPost() {
            window.location.href = 'blogs/' + JSON.parse(this.post).id;
        },
        hoveredOver() {
            this.$eventBus.$emit('hovered-over', this.authorName, this.authorDescription);
        },
        mouseLeft() {
            this.$eventBus.$emit('mouse-left');
        }
    }
}
</script>