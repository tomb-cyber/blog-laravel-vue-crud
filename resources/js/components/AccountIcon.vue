<template>
    <img class="account_icon"  src="/icons/account_icon.svg" height="30"
    @mouseover="changeColor()"
    @mouseleave="changeColor()"
    :class="{ active: activated }">
</template>

<script>
export default {
    data() {
        return {
            activated: false
        }
    },
    methods: {
        changeColor() {
            this.activated = !this.activated;
        }
    }
}
</script>

