<template>
  <div>
    <div class="container">
      <div class="row">
        <div class="col-3 text-gradient">
          <h1 style="font-size: 50px">หน้าสินค้า</h1>
        </div>
        <div class="col-9">
          <input type="text" name="search" placeholder="ค้นหาต้นไม้..." />
        </div>
      </div>
    </div>
    <div class="container mt-4">
      <h3>สินค้าแนะนำ</h3>
      <carousel :per-page="3" class="mt-4">
        <slide v-for="(item, i) in recommends" :key="i">
          <div class="ps-2" style="margin-left: 4px">
            <div class="mycard bg-blur">
              <img
                class="card-img-top"
                :src="item.image_url"
                alt="Card image cap"
                object-fit="cover"
                height="200"
                width="100"
              />
            </div>
            <div class="card-body">
              <h5 class="card-title" style="font-size: 25px">
                {{ item.title }}
              </h5>
              <div class="clearfix">
                <div
                  class="float-start"
                  style="font-size: 25px; color: #c41e3a"
                >
                  {{ item.price }} ฿
                </div>
                <div class="float-end"></div>
              </div>
              <div class="clear-fix mt-2">
                <div class="float-start">
                  <router-link
                    class="btn btn-glow-sdt btn-bightbg-sdt btn-right"
                    style="width: 130px"
                    :to="{
                      name: 'products.detail',
                      params: { id: item.id },
                    }"
                    >ดูรายละเอียด</router-link
                  >
                </div>
                <div class="float-end">
                  <a
                    href="shop/details"
                    class="btn btn-glow btn-bightbg"
                    style="width: 130px"
                    ><i class="fa fa-shopping-cart"></i> ซื้อสินค้า</a
                  >
                </div>
              </div>
            </div>
          </div>
        </slide>
      </carousel>
      <hr />
    </div>
    <div class="container mt-4">
      <div class="clearfix">
        <div class="float-start"><h3>ต้นไม้ด่าง</h3></div>
        <div class="float-end">
          <a href="/spotted">ดูทั้งหมด</a>
        </div>
      </div>
      <carousel :per-page="4" class="mt-4">
        <slide v-for="(item, i) in spotted.items" :key="i">
          <div class="ps-2" style="margin-left: 4px">
            <div class="mycard bg-blur">
              <img
                class="card-img-top"
                :src="item.image_url"
                alt="Card image cap"
                object-fit="cover"
                height="200"
                width="100"
              />
            </div>
            <div class="card-body">
              <h5 class="card-title" style="font-size: 25px">
                {{ item.title }}
              </h5>
              <div class="clearfix">
                <div
                  class="float-start"
                  style="font-size: 25px; color: #c41e3a"
                >
                  {{ item.price }} ฿
                </div>
                <div class="float-end"></div>
              </div>
              <div class="clear-fix mt-2">
                <div class="float-start">
                  <router-link
                    class="btn btn-glow-sdt btn-bightbg-sdt btn-right"
                    style="width: 130px"
                    :to="{ name: 'products.detail', params: { id: item.id } }"
                    >ดูรายละเอียด</router-link
                  >
                </div>
                <div class="float-end">
                  <a
                    href="/details"
                    class="btn btn-glow btn-bightbg"
                    style="width: 130px"
                    ><i class="fa fa-shopping-cart"></i> ซื้อสินค้า</a
                  >
                </div>
              </div>
            </div>
          </div>
        </slide>
      </carousel>
    </div>
    <div class="container mt-4">
      <div class="clearfix">
        <div class="float-start"><h3>ต้นไม้ฟอกอากาศ</h3></div>
        <div class="float-end">
          <a>ดูทั้งหมด</a>
        </div>
      </div>
      <carousel :per-page="4" class="mt-4">
        <slide v-for="(item, i) in airpurifier.items" :key="i">
          <div class="ps-2" style="margin-left: 4px">
            <div class="mycard bg-blur">
              <img
                class="card-img-top"
                :src="item.image_url"
                alt="Card image cap"
                object-fit="cover"
                height="200"
                width="100"
              />
            </div>
            <div class="card-body">
              <h5 class="card-title" style="font-size: 25px">
                {{ item.title }}
              </h5>
              <div class="clearfix">
                <div
                  class="float-start"
                  style="font-size: 25px; color: #c41e3a"
                >
                  {{ item.price }} ฿
                </div>
                <div class="float-end"></div>
              </div>
              <div class="clear-fix mt-2">
                <div class="float-start">
                  <router-link
                    class="btn btn-glow-sdt btn-bightbg-sdt btn-right"
                    style="width: 130px"
                    :to="{ name: 'products.detail', params: { id: item.id } }"
                    >ดูรายละเอียด</router-link
                  >
                </div>
                <div class="float-end">
                  <a
                    href="/details"
                    class="btn btn-glow btn-bightbg"
                    style="width: 130px"
                    ><i class="fa fa-shopping-cart"></i> ซื้อสินค้า</a
                  >
                </div>
              </div>
            </div>
          </div>
        </slide>
      </carousel>
    </div>
    <div class="container mt-4">
      <div class="clearfix">
        <div class="float-start"><h3>ต้นไม้ประดับ</h3></div>
        <div class="float-end">
          <a>ดูทั้งหมด</a>
        </div>
      </div>
      <carousel :per-page="4" class="mt-4">
        <slide v-for="(item, i) in ornamental.items" :key="i">
          <div class="ps-2" style="margin-left: 4px">
            <div class="mycard bg-blur">
              <img
                class="card-img-top"
                :src="item.image_url"
                alt="Card image cap"
                object-fit="cover"
                height="200"
                width="100"
              />
            </div>
            <div class="card-body">
              <h5 class="card-title" style="font-size: 25px">
                {{ item.title }}
              </h5>
              <div class="clearfix">
                <div
                  class="float-start"
                  style="font-size: 25px; color: #c41e3a"
                >
                  {{ item.price }} ฿
                </div>
                <div class="float-end"></div>
              </div>
              <div class="clear-fix mt-2">
                <div class="float-start">
                  <router-link
                    class="btn btn-glow-sdt btn-bightbg-sdt btn-right"
                    style="width: 130px"
                    :to="{ name: 'products.detail', params: { id: item.id } }"
                    >ดูรายละเอียด</router-link
                  >
                </div>
                <div class="float-end">
                  <a
                    href="/details"
                    class="btn btn-glow btn-bightbg"
                    style="width: 130px"
                    ><i class="fa fa-shopping-cart"></i> ซื้อสินค้า</a
                  >
                </div>
              </div>
            </div>
          </div>
        </slide>
      </carousel>
    </div>
    <div class="container mt-4">
      <div class="clearfix">
        <div class="float-start"><h3>ต้นไม้มงคล</h3></div>
        <div class="float-end">
          <a>ดูทั้งหมด</a>
        </div>
      </div>
      <carousel :per-page="4" class="mt-4">
        <slide v-for="(item, i) in auspicious.items" :key="i">
          <div class="ps-2" style="margin-left: 4px">
            <div class="mycard bg-blur">
              <img
                class="card-img-top"
                :src="item.image_url"
                alt="Card image cap"
                object-fit="cover"
                height="200"
                width="100"
              />
            </div>
            <div class="card-body">
              <h5 class="card-title" style="font-size: 25px">
                {{ item.title }}
              </h5>
              <div class="clearfix">
                <div
                  class="float-start"
                  style="font-size: 25px; color: #c41e3a"
                >
                  {{ item.price }} ฿
                </div>
                <div class="float-end"></div>
              </div>
              <div class="clear-fix mt-2">
                <div class="float-start">
                  <router-link
                    class="btn btn-glow-sdt btn-bightbg-sdt btn-right"
                    style="width: 130px"
                    :to="{ name: 'products.detail', params: { id: item.id } }"
                    >ดูรายละเอียด</router-link
                  >
                </div>
                <div class="float-end">
                  <a
                    href="/details"
                    class="btn btn-glow btn-bightbg"
                    style="width: 130px"
                    ><i class="fa fa-shopping-cart"></i> ซื้อสินค้า</a
                  >
                </div>
              </div>
            </div>
          </div>
        </slide>
      </carousel>
    </div>
    <div class="container mt-4">
      <div class="clearfix">
        <div class="float-start"><h3>ปุ๋ย ดิน และอุปกรณ์ดูแลต้นไม้</h3></div>
        <div class="float-end">
          <a>ดูทั้งหมด</a>
        </div>
      </div>
      <carousel :per-page="4" class="mt-4">
        <slide v-for="(item, i) in fertilizer.items" :key="i">
          <div class="ps-2" style="margin-left: 4px">
            <div class="mycard bg-blur">
              <img
                class="card-img-top"
                :src="item.image_url"
                alt="Card image cap"
                object-fit="cover"
                height="200"
                width="100"
              />
            </div>
            <div class="card-body">
              <h5 class="card-title" style="font-size: 25px">
                {{ item.title }}
              </h5>
              <div class="clearfix">
                <div
                  class="float-start"
                  style="font-size: 25px; color: #c41e3a"
                >
                  {{ item.price }} ฿
                </div>
                <div class="float-end"></div>
              </div>
              <div class="clear-fix mt-2">
                <div class="float-start">
                  <router-link
                    class="btn btn-glow-sdt btn-bightbg-sdt btn-right"
                    style="width: 130px"
                    :to="{ name: 'products.detail', params: { id: item.id } }"
                    >ดูรายละเอียด</router-link
                  >
                </div>
                <div class="float-end">
                  <a
                    href="/details"
                    class="btn btn-glow btn-bightbg"
                    style="width: 130px"
                    ><i class="fa fa-shopping-cart"></i> ซื้อสินค้า</a
                  >
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
// import axios from 'axios'
import { mapActions, mapGetters } from "vuex";
export default {
  middleware: "auth",
  computed: {
    ...mapGetters("product", {
      recommends: "items",
      spotted: "spotted",
      airpurifier: "airpurifier",
      ornamental: "ornamental",
      auspicious: "auspicious",
      fertilizer: "fertilizer",
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
    await this.fetchByCat({ category_id: 2, name: "airpurifier" });
    await this.fetchByCat({ category_id: 3, name: "ornamental" });
    await this.fetchByCat({ category_id: 4, name: "auspicious" });
    await this.fetchByCat({ category_id: 5, name: "fertilizer" });
  },

  metaInfo() {
    return { title: this.$("shop") };
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
  height: 270px;
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
/* .ps-2:hover {
  background-color: #c5e8b7;
  transition: width 0.4s;
  height: 460px;
  border: 1px solid rgb(199, 199, 199);
} */
/* When the input field gets focus, change its width to 100% */
/* input[type="text"]:hover {
  width: 100%;
  border-radius: 25px;
} */
</style>
