<template>
  <div id="kohkane" class="kohkane" v-if="settings">
    <header class="kohkane__header">
      <div class="kohkane__header__left">
        <img
          class="kohkane__header__logo"
          :src="settings.baseURL+'assets/public/img/kohkane-logo.png'"
        >
      </div>
      <div class="kohkane__header__right">
        <ul id="nav" class="kohkane__tabs">
          <li class="kohkane__tabs__tab">
            <router-link to="/">Snapshots</router-link>
          </li>
          <li class="kohkane__tabs__tab">
            <router-link to="/activity">Activity</router-link>
          </li>
          <li class="kohkane__tabs__tab">
            <router-link to="/settings">Settings</router-link>
          </li>
        </ul>
      </div>
    </header>
    <main class="kohkane__content">
      <router-view/>
    </main>
  </div>
</template>

<script>
export default {
  data() {
    return {
      settings: null
    };
  },
  mounted() {
    this.settings = this.$root.$options.KOHKANE_SETTINGS;
  }
};
</script>

<style>
.kohkane {
  padding-top: 100px;
  padding-right: 1rem;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  font-size: 20px;
  line-height: 1.4;
  font-family: var(--fontFamilyPrimary);
  font-weight: 400;
  max-width: 1400px;
  margin: 0 auto;

  p {
    font-size: 1rem;
    margin-bottom: 2rem;
  }

  ::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
    background-color: var(--lightGray);
  }

  ::-webkit-scrollbar {
    width: 4px;
    background-color: var(--lightGray);
  }

  ::-webkit-scrollbar-thumb {
    background-color: var(--darkGray);
    border: 2px solid var(--brandPrimary);
  }

  &__header {
    display: flex;
    align-items: flex-end;

    &__left {
      padding: 0 1rem 0.5rem 0;
    }

    &__right {
      flex: 1;
    }

    &__logo {
      max-height: 40px;
      width: auto;
    }
  }

  &__tabs {
    display: flex;
    align-items: flex-end;
    list-style: none;
    margin: 0;
    padding: 0;
    font-family: var(--fontFamilyHeading);
    font-weight: var(--fontWeightBold);

    &__tab {
      margin: 0;
      padding: 0;
      margin-right: 0.25rem;

      a {
        color: var(--mediumGray);
        text-decoration: none;
        padding: 1rem 2rem;
        display: inline-block;
        font-size: 1.2rem;
        transition: padding 0.2s ease;
        will-change: padding;
        transform: translateY(1px);

        border: 1px solid var(--mediumGray);
        border-bottom: 0;
        border-radius: 5px;
        border-bottom-left-radius: 0;
        border-bottom-right-radius: 0;

        &:focus {
          box-shadow: none;
          outline: none;
        }

        &.router-link-exact-active {
          border-color: var(--brandPrimary);
          color: var(--brandPrimary);
          background: white;
        }
      }
    }
  }

  &__content {
    /* border: 1px solid var(--brandPrimary); */
    box-shadow: 0 0 0 1px var(--brandPrimary);
    border-radius: 5px;
    background: white;
    overflow: hidden;
  }

  h1,
  h2,
  h3,
  h4,
  h5,
  h6 {
    color: var(--darkGray);
    font-family: var(--fontFamilyHeading);
    font-weight: 800;
    margin: 0;
  }

  .small-upper-text {
    text-transform: uppercase;
    font-size: 0.7rem;
    letter-spacing: 0.1rem;
    font-weight: var(--fontWeightExtraBold);
  }

  .butn {
    display: inline-block;
    background: var(--brandPrimary);
    font-family: var(--fontFamilyHeading);
    font-weight: var(--fontWeightBold);
    text-transform: uppercase;
    color: white;
    font-size: 0.7rem;
    letter-spacing: 0.1rem;
    border: 0;
    padding: 0.75rem 1.5rem;
    cursor: pointer;
    text-decoration: none;

    &:hover {
      background: var(--brandPrimaryShaded);
    }

    &--gray {
      background: var(--gray);
    }

    &--secondary {
      background: var(--brandSecondary);
    }

    &--tertiary {
      background: var(--brandTertiary);
    }

    &--sm {
      padding: 0.5rem;
    }

    &--rounded {
      border-radius: 10px;
    }
  }
}
</style>
