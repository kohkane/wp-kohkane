<template>
  <div id="kohkane">
    <ul id="nav" class="kohkane__tabs">
      <li class="kohkane__tabs__tab">
        <router-link to="/">Snapshots</router-link>
      </li>
      <li class="kohkane__tabs__tab">
        <router-link to="/settings">Settings</router-link>
      </li>
    </ul>
    <router-view/>
  </div>
</template>

<style>
.kohkane {
  &__tabs {
    display: flex;
    list-style: none;
    margin: 0;
    padding: 0;
    &__tab {
      margin-right: 1rem;
    }
  }
}
</style>
