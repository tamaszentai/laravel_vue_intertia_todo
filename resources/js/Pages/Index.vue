<script setup>
import axios from "axios";

defineProps({
    todos: Object
})

const onSubmit = (passedTodo) => {
    passedTodo.isCompleted = !passedTodo.isCompleted
    axios.put('/', passedTodo);
}


</script>

<template>
    <div class="flex justify-center mb-2">
        <ul>
            <li v-for="(todo, index) in todos " class="mb-2 text-xl cursor-pointer"
                :class="{ 'line-through': todo.isCompleted }" @click="onSubmit(todo)">
                {{ todo.name }}
            </li>
        </ul>

    </div>
</template>

<style lang="scss" scoped></style>