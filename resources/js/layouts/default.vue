<template>
  <div class="main-layout">
    <navbar />

    <div class="mh-900">
      <child />
    </div>
    <Footer />
  </div>
</template>

<script>
import Navbar from "~/components/Navbar";
import Footer from "~/components/Footer";
export default {
  name: "MainLayout",

  components: {
    Navbar,
    Footer
  }
};
</script>

<style>
.mh-900 {
  min-height: 980px;
}
</style>
