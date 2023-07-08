<template>
    <div>
        <code>{{state.data}}</code>
    </div>
</template>

<script setup>
import {onMounted, reactive} from 'vue';
import {api} from "../../api";
import {API_TEST_URL} from '../../utils/constants';

const state = reactive({
    data: null,
});

const fetchData = async () => {
  const response = await api.get(API_TEST_URL);
  state.data = response.data.data;
  console.log(response);
}

onMounted(() => {
    fetchData();
});

</script>

<style scoped>

</style>
