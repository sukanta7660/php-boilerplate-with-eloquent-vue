<template>
  <el-menu
      :default-active="activeIndex"
      class="nav-menu"
      mode="horizontal"
      :router="true"
      :ellipsis="false"
  >
    <el-menu-item
        class="app-logo"
        index="/"
    >
      PHP Boilerplate With Eloquent ORM
    </el-menu-item>
    <div class="flex-grow" />
    <el-menu-item
        v-for="route in routes"
        :index="route.path "
        :class="currentRoutePath === route.path ? 'is-active' : ''"
    >
      {{ route.name }}
    </el-menu-item>
<!--    <el-menu-item-->
<!--        v-if="isLoggedIn()"-->
<!--        @click=""-->
<!--    >-->
<!--      Logout-->
<!--    </el-menu-item>-->

<!--    <el-menu-item-->
<!--        v-for="route in guestRoutes"-->
<!--        :index="route.path "-->
<!--        :class="currentRoutePath === route.path ? 'is-active' : ''"-->
<!--    >-->
<!--      {{ route.name }}-->
<!--    </el-menu-item>-->
  </el-menu>
</template>

<script setup>
import {computed, reactive, ref, onMounted} from 'vue';
import {routes, guestRoutes} from '../../utils/routeMap';
import {useRoute, useRouter} from 'vue-router';
// import {isLoggedIn} from '../../middlewares/auth';

const activeIndex = ref('1');

const route = useRoute();
const router = useRouter();

const currentRoutePath = computed(() => {
  return route.path;
});



onMounted(() => {
  router.isReady();
});
</script>

<style scoped lang="scss">
.nav-menu {
  border-bottom: none !important;
  box-shadow: 0 0 7px rgb(0 0 0 / 0.2);
  height: 70px;
}
.flex-grow {
  flex-grow: 1;
}
.app-logo {
  font-size: 1.5rem;
  font-weight: bold;
}
</style>
