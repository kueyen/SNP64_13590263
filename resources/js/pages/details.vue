<template>
  <div>
    <!-- <pre>
    {{ product }}

    </pre> -->
    <div class="container">
      <div class="row">
        <div class="col-6">
          <div class="pe-3 mt-3">
            <img class="card-img-top" :src="product.image_url" />
          </div>
          <carousel :per-page="3" class="mt-4">
            <slide v-for="(item, i) in 3" :key="i">
              <div class="pe-3">
                <img
                  class="card-img-top"
                  :src="product.image_url"
                  alt="Card image cap"
                  width="200"
                  height="100"
                />
              </div>
            </slide>
          </carousel>
        </div>
        <div class="col-6 mt-3">
          <h3>{{ product.title }}</h3>
          <h6 style="color: lightgrey">ราคาสินค้า</h6>
          <hr />
          <h2>฿ {{ product.price }}</h2>
          <div class="container" style="background-color: lightgrey">
            <h6>ข้อมูลจำเพาะของสินค้า</h6>
          </div>
          <div class="container">
            <div class="p-2">
              <p style="color: lightgrey">
                หมวดหมู่ : {{ product.category.name }}
              </p>
            </div>
            <div class="p-2">
              <p style="color: lightgrey">พันธ์พืช : {{ "มอนสเตอร่าด่าง" }}</p>
            </div>
            <div class="p-2">
              <p style="color: lightgrey">
                ร้านค้า : {{ "ร้านแม่พันธ์ุไม้ไทย" }}
              </p>
            </div>
          </div>
          <div class="container">
            <button
              @click="showAlert"
              type="button"
              class="btn btn-outline-success btn-lg"
            >
              <i class="fas fa-shopping-cart" style="color: green"></i>
              เพิ่มไปยังรถเข็น
            </button>
            <button type="button" class="btn btn-success btn-lg">
              ซื้อสินค้า
            </button>
          </div>
        </div>
      </div>
      <div class="mt-5">
        <h3>รายละเอียดสินค้า</h3>
        <hr />
        <h5>
          {{ product.description }}
        </h5>
      </div>
      <div class="mt-5">
        <h3>การดูแล</h3>
        <hr />
        <h5>
          {{ product.howto_description }}
        </h5>
      </div>
    </div>
    <div class="container mt-5">
      <h3>สินค้าแนะนำ</h3>
      <carousel :per-page="4" class="mt-4">
        <slide v-for="(item, i) in recommends" :key="i">
          <div class="pe-3">
            <div class="card w-100">
              <img
                class="card-img-top"
                :src="item.image_url"
                alt="Card image cap"
                width="100"
                height="150"
              />
              <div class="card-body">
                <h5 class="card-title">
                  {{ item.title }}
                </h5>
                <div class="clearfix">
                  <div class="float-start">{{ item.price }} ฿</div>
                  <div class="float-end">
                    <router-link
                      class="btn btn-warning text-white"
                      :to="{ name: 'products.detail', params: { id: item.id } }"
                      >ดูข้อมูล</router-link
                    >
                    <!-- <a href="#" class="btn btn-warning text-white">ดูข้อมูล</a> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </slide>
      </carousel>
    </div>
  </div>
</template>

<script>
import { mapActions, mapGetters } from "vuex";
export default {
  middleware: "auth",
  computed: {
    ...mapGetters("product", {
      product: "show",
      recommends: "items",
    }),
    id() {
      return this.$route.params.id;
    },
  },
  data: () => ({}),
  methods: {
    showAlert() {
      this.$swal({
        icon: "success",
        title: "สำเร็จ",
        showConfirmButton: false,
        timer: 1500,
      });
    },
    ...mapActions("product", {
      show: "show",
      fetch: "recommend",
    }),
  },
  async created() {
    await this.show({ id: this.id });
    await this.fetch();
  },

  metaInfo() {
    return { title: "details" };
  },
};
</script>
