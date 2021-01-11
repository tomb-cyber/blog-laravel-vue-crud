<template>
    <div class="author-info-block">
        <div class="info-about">
            About author
        </div>
        <div class="info-name">
            <h5>{{ name }}</h5>
        </div>
        <div class="info-description">
            {{ description }}
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            name: '',
            description: 'Hover over a post to see more about the author'
        }
    },
    created() {
        this.$eventBus.$on('hovered-over', this.hoveredOver);
        this.$eventBus.$on('mouse-left', this.mouseLeft);
    },
    methods: {
        hoveredOver(authorName, authorDescription) {
            console.log('hovered over triggererd');
            this.name = authorName;
            this.description = authorDescription;
        },
        mouseLeft() {
            console.log('mouse left');
            this.name = '';
            this.description = 'Hover over a post to see more about the author';
        }
    }
}
</script>