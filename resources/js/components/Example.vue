<template>
    <div>
        <ul>
            <li v-for="item in items" v-text="item"></li>
        </ul>
    </div>
</template>

<script>
    export default {
        props: ['items'],

        name: "Example"
    }
</script>
