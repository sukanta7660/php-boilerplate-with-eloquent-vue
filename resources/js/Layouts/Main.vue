<template>
  <el-container>
    <el-row :gutter="0" style="width: 100%;">
      <el-col :span="24">
        <NavMenu />
      </el-col>
      <el-col :span="24" style="padding: 1rem" class="body-container">
        <router-view></router-view>
      </el-col>
    </el-row>
  </el-container>
</template>

<script setup>
import NavMenu from '../Components/Utils/NavMenu.vue';
</script>

<style scoped>

</style>
