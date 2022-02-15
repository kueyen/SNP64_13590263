<template>
  <div>
    <!-- <router-link :to="{ name: 'products.detail',params:{id: item.id} }"></router-link> -->
    <div class="container">
      <carousel :per-page="1">
        <slide v-for="(item, i) in recommends" :key="i">
          <router-link
            :to="{ name: 'products.detail', params: { id: item.id } }"
          >
            <img
              class="card-img-top"
              :src="item.image_url"
              alt="Card image cap"
              height="600px"
              width="100%"
            />
          </router-link>
        </slide>
      </carousel>
    </div>
    <div class="container mt-4">
      <h3>สินค้าแนะนำ</h3>
      <carousel :per-page="4" class="mt-4">
        <slide v-for="(item, i) in recommends" :key="i">
          <div class="pe-3">
            <div class="card w-100">
              <img
                class="card-img-top"
                :src="item.image_url"
                alt="Card image cap"
                height="200"
                width="100%"
              />
              <div class="card-body">
                <h5 class="card-title">
                  {{ item.title }}
                </h5>
                <div class="clearfix">
                  <div class="float-start">{{ item.price }} ฿</div>
                  <div class="float-end">
                    <a href="/details" class="btn btn-outline-warning"
                      ><i class="fa fa-shopping-cart"></i
                    ></a>
                    <router-link
                      class="btn btn-warning text-white"
                      :to="{ name: 'products.detail', params: { id: item.id } }"
                      >ดูรายละเอียด</router-link
                    >
                  </div>
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
          <div class="pe-3">
            <div class="card w-100">
              <img
                class="card-img-top"
                :src="item.image_url"
                alt="Card image cap"
                height="200"
                width="100%"
              />
              <div class="card-body">
                <h5 class="card-title">
                  {{ item.title }}
                </h5>
                <div class="clearfix">
                  <div class="float-start">{{ item.price }} ฿</div>
                  <div class="float-end">
                    <a href="/details" class="btn btn-outline-warning"
                      ><i class="fa fa-shopping-cart"></i
                    ></a>
                    <router-link
                      class="btn btn-warning text-white"
                      :to="{ name: 'products.detail', params: { id: item.id } }"
                      >ซื้อเลย</router-link
                    >
                  </div>
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
          <div class="pe-3">
            <div class="card w-100">
              <img
                class="card-img-top"
                :src="item.image_url"
                alt="Card image cap"
                height="200"
                width="100%"
              />
              <div class="card-body">
                <h5 class="card-title">
                  {{ item.title }}
                </h5>
                <div class="clearfix">
                  <div class="float-start">{{ item.price }} ฿</div>
                  <div class="float-end">
                    <a href="/details" class="btn btn-outline-warning"
                      ><i class="fa fa-shopping-cart"></i
                    ></a>
                    <router-link
                      class="btn btn-warning text-white"
                      :to="{ name: 'products.detail', params: { id: item.id } }"
                      >ซื้อเลย</router-link
                    >
                  </div>
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
          <div class="pe-3">
            <div class="card w-100">
              <img
                class="card-img-top"
                :src="item.image_url"
                alt="Card image cap"
                height="200"
                width="100%"
              />
              <div class="card-body">
                <h5 class="card-title">
                  {{ item.title }}
                </h5>
                <div class="clearfix">
                  <div class="float-start">{{ item.price }} ฿</div>
                  <div class="float-end">
                    <a href="/details" class="btn btn-outline-warning"
                      ><i class="fa fa-shopping-cart"></i
                    ></a>
                    <router-link
                      class="btn btn-warning text-white"
                      :to="{ name: 'products.detail', params: { id: item.id } }"
                      >ซื้อเลย</router-link
                    >
                  </div>
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
          <div class="pe-3">
            <div class="card w-100">
              <img
                class="card-img-top"
                :src="item.image_url"
                alt="Card image cap"
                height="200"
                width="100%"
              />
              <div class="card-body">
                <h5 class="card-title">
                  {{ item.title }}
                </h5>
                <div class="clearfix">
                  <div class="float-start">{{ item.price }} ฿</div>
                  <div class="float-end">
                    <a href="/details" class="btn btn-outline-warning"
                      ><i class="fa fa-shopping-cart"></i
                    ></a>
                    <router-link
                      class="btn btn-warning text-white"
                      :to="{ name: 'products.detail', params: { id: item.id } }"
                      >ซื้อเลย</router-link
                    >
                  </div>
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
          <div class="pe-3">
            <div class="card w-100">
              <img
                class="card-img-top"
                :src="item.image_url"
                alt="Card image cap"
                height="200"
                width="100%"
              />
              <div class="card-body">
                <h5 class="card-title">
                  {{ item.title }}
                </h5>
                <div class="clearfix">
                  <div class="float-start">{{ item.price }} ฿</div>
                  <div class="float-end">
                    <a href="/details" class="btn btn-outline-warning"
                      ><i class="fa fa-shopping-cart"></i
                    ></a>
                    <router-link
                      class="btn btn-warning text-white"
                      :to="{ name: 'products.detail', params: { id: item.id } }"
                      >ซื้อเลย</router-link
                    >
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
    return { title: this.$t("home") };
  },
};
</script>

<style>
img {
  object-fit: cover;
}
</style>
