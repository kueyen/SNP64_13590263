<template>
  <div>
    <div class="container">
      <div class="col-6 text-gradient">
        <h1 style="font-size: 50px">รายละเอียดสินค้า</h1>
      </div>
      <hooper
        :vertical="true"
        style="height: 400px"
        :itemsToShow="1.5"
        :centerMode="true"
      >
        <slide>
          <div class="row">
            <div class="col-3">
              <div class="mycard bg-blur">
                <img
                  class="card-img-top"
                  :src="product.image_url"
                  alt="Card image cap"
                  height="210"
                  width="100"
                />
              </div>
            </div>
          </div>
        </slide>
        <slide>
          <div class="row">
            <div class="col-3">
              <div class="mycard bg-blur">
                <img
                  class="card-img-top"
                  :src="product.image_url"
                  alt="Card image cap"
                  height="210"
                  width="100"
                />
              </div>
            </div>
          </div>
        </slide>
        <slide>
          <div class="row">
            <div class="col-3">
              <div class="mycard bg-blur">
                <img
                  class="card-img-top"
                  :src="product.image_url"
                  alt="Card image cap"
                  height="210"
                  width="100"
                />
              </div>
            </div>
          </div>
        </slide>
        <slide>
          <div class="row">
            <div class="col-3">
              <div class="mycard bg-blur">
                <img
                  class="card-img-top"
                  :src="product.image_url"
                  alt="Card image cap"
                  height="210"
                  width="100"
                />
              </div>
            </div>
          </div>
        </slide>
        <slide>
          <div class="row">
            <div class="col-3">
              <div class="mycard bg-blur">
                <img
                  class="card-img-top"
                  :src="product.image_url"
                  alt="Card image cap"
                  height="210"
                  width="100"
                />
              </div>
            </div>
          </div>
        </slide>
      </hooper>
    </div>
    <hr />
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
import { Hooper, Slide } from "hooper";
import "hooper/dist/hooper.css";
import { mapActions, mapGetters } from "vuex";
export default {
  middleware: "auth",
  components: {
    Hooper,
    Slide,
  },
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
    return { title: "shop/details" };
  },
};
</script>

<style>
:root {
  /* violet */
  --primary-color: 87, 200, 77;
  --secoundary-color: 0, 0, 0;

  /* white */
  --text-color: 256, 256, 256;
}
img {
  object-fit: cover;
}
.text-glow {
  text-shadow: 0 0 80px rgb(192 219 255 / 75%), 0 0 32px rgb(65 120 255 / 24%);
}
.text-gradient {
  background: linear-gradient(to right, #30cfd0, #c43ad6);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.btn-glow:hover {
  box-shadow: rgba(var(--primary-color), 0.5) 0px 0px 20px 0px;
}
.btn-glow-sdt:hover {
  box-shadow: rgba(var(--secoundary-color), 0.5) 0px 0px 20px 0px;
}
.btn {
  transition: all 0.3s ease;
}
.btn:hover {
  transition: all 0.3s ease;
}
.btn-bightbg {
  background-color: rgb(var(--primary-color));
  border: 1px solid rgb(var(--primary-color));
  color: rgb(var(--text-color));
}
.btn-bightbg-sdt {
  border: 1px solid rgb(var(--secoundary-color));
  /* color: rgb(var(--text-color)); */
  color: black;
}
.btn-gradient-border {
  color: rgb(var(--text-color));
  border: 2px double transparent;
  background-image: linear-gradient(rgb(13, 14, 33), rgb(13, 14, 33)),
    radial-gradient(circle at left top, rgb(1, 110, 218), rgb(217, 0, 192));
  background-origin: border-box;
  background-clip: padding-box, border-box;
}
.btn-bightbg:hover {
  color: rgb(68, 68, 68);
}
.btn-bightbg-sdt:hover {
  color: rgb(0, 0, 0);
}

.mycard {
  margin: 1rem;
  padding: 2rem;
  height: auto;
  width: auto;
  text-align: center;
  color: white;
  display: flex;
  align-items: center;
  justify-content: center;
  position: relative;
  background-color: gray;
  border-radius: 10px;
}

.bg-blur {
  overflow: hidden;
  background-color: transparent;
}

.bg-blur::before {
  content: "";
  background-color: rgb(218, 218, 218);
  /* background-size: cover; */
  height: 100%;
  width: 100%;
  position: absolute;
  filter: blur(30px);
  z-index: -1;
}
input[type="text"] {
  padding-left: 10px;
  width: 100%;
  height: 100%;
  -webkit-transition: width 0.4s ease-in-out;
  transition: width 0.4s ease-in-out;
  border-radius: 25px;
  border: 2px solid transparent;
  border-color: #57c84d;
}
input[type="text"]:hover {
  border-color: #57c84d;
}
</style>
