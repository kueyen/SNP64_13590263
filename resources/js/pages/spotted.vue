<template>
  <div>
    <div class="container">
      <h3 class="mt-3 text-center">รายการสินค้า {{ "ไม้ด่าง" }}</h3>
      <div class="row">
        <div class="col-6 mt-3" v-for="(item, i) in spotted.items" :key="i">
          <div class="card" style="width: 650px">
            <div class="row no-gutters">
              <div class="col-sm-5">
                <img
                  class="card-img-top"
                  :src="item.image_url"
                  alt="Card image cap"
                  height="200"
                  width="100%"
                />
              </div>
              <div class="col-sm-7">
                <div class="card-body">
                  <h5 class="card-title">{{ item.title }}</h5>
                  <p class="card-text">{{ item.price }} ฿</p>
                  <a href="#" class="btn btn-primary">ซื้อเลย</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
// import axios from 'axios'
import { mapActions, mapGetters } from "vuex";
export default {
  middleware: "auth",
  computed: {
    ...mapGetters("product", {
      recommends: "items",
      spotted: "spotted",
    }),
  },
  methods: {
    ...mapActions("product", {
      fetch: "recommend",
      fetchByCat: "fetchByCat",
    }),
  },
  async created() {
    await this.fetch();
    //load by id and custome name
    await this.fetchByCat({ category_id: 1, name: "spotted" });
  },

  metaInfo() {
    return { title: this.$t("spotted") };
  },
};
</script>

<style>
img {
  object-fit: cover;
}
</style>
