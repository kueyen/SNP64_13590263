<template>
  <div></div>
</template>

<script>
// import axios from 'axios'
export default {
  middleware: "auth",
  data: () => ({}),

  // async asyncData () {
  //   const { data: projects } = await axios.get('/api/projects')

  //   return {
  //     projects
  //   }
  // },

  metaInfo() {
    return { title: this.$t("admin") };
  },
};
</script>
