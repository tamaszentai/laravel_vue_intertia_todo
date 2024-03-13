<script setup>
import axios from "axios";
import { ref } from "vue";

const props = defineProps({
    todos: Object
})

const copyTodos = ref(props.todos);

const szett = ref([
    {
        id: 1,
        name: "First todo",
        isCompleted: false
    },
    {
        id: 2,
        name: "Second todo",
        isCompleted: false
    },
    {
        id: 3,
        name: "Third todo",
        isCompleted: false
    }
]);

const onSubmit = async (passedTodo) => {
    await axios.put('/', passedTodo);
    passedTodo.isCompleted = !passedTodo.isCompleted;
}

const deleteTodo = async (id, event) => {
    event.stopPropagation();
    await axios.delete('/', { data: { id: id } });
    copyTodos.value = copyTodos.value.filter(todo => todo.id !== id);
}


</script>

<template>
    <div class="flex justify-center mb-2">
        <ul>
            <li v-for="(todo, index) in copyTodos" :key="index" class="mb-2 text-xl cursor-pointer"
                :class="{ 'line-through': todo.isCompleted }" @click="onSubmit(todo)">
                {{ todo.name }}
                <button @click="deleteTodo(todo.id, $event)">Delete</button>
            </li>
        </ul>

    </div>
</template>

<style lang="scss" scoped></style>