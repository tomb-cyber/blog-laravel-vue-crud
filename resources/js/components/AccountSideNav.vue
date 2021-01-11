<template>
    <div class="account-menu">
        <a class="menu-item" href="/settings">My information</a>

        <a class="menu-item" href="/home">My posts</a>

        <form ref="form" action="/logout" method="post">
            <button class="menu-logout" type="submit">Logout</button>
            <input type="hidden" name="_token" :value="csrf">
        </form>
    </div>
</template>

<script>
export default {
    props: ['csrf']
}
</script>