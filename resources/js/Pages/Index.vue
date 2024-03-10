<template>
    <div>
        <ul>
            <li v-for="(todo, index) in todos" class="mb-2 text-xl">
                {{ todo.name }}
            </li>
        </ul>

    </div>
</template>

<script setup>
defineProps({
    todos: Object
})

</script>

<style lang="scss" scoped></style>