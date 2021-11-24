<template>
  <div>
    <div class="container">
      <carousel :per-page="1">
        <slide>
          <img
            class="d-block w-100"
            src="/images/hd1080.png"
            alt="First slide"
          />
        </slide>
        <slide>
          <img
            class="d-block w-100"
            src="/images/hd1080.png"
            alt="First slide"
          />
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
              />
              <div class="card-body">
                <h5 class="card-title">
                  {{ item.title }}
                </h5>
                <div class="clearfix">
                  <div class="float-start">{{ item.price }} ฿</div>
                  <div class="float-end">
                    <a href="#" class="btn btn-warning text-white">ซื้อเลย</a>
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
          <a>ดูทั้งหมด</a>
        </div>
      </div>
      <carousel :per-page="4" class="mt-4">
        <slide v-for="(item, i) in spotted" :key="i">
          <div class="pe-3">
            <div class="card w-100">
              <img
                class="card-img-top"
                :src="item.image_url"
                alt="Card image cap"
              />
              <div class="card-body">
                <h5 class="card-title">
                  {{ item.title }}
                </h5>
                <div class="clearfix">
                  <div class="float-start">{{ item.price }} ฿</div>
                  <div class="float-end">
                    <a href="#" class="btn btn-warning text-white">ซื้อเลย</a>
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
        <slide v-for="(item, i) in spotted" :key="i">
          <div class="pe-3">
            <div class="card w-100">
              <img
                class="card-img-top"
                :src="item.image_url"
                alt="Card image cap"
              />
              <div class="card-body">
                <h5 class="card-title">
                  {{ item.title }}
                </h5>
                <div class="clearfix">
                  <div class="float-start">{{ item.price }} ฿</div>
                  <div class="float-end">
                    <a href="#" class="btn btn-warning text-white">ซื้อเลย</a>
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
        <slide v-for="(item, i) in spotted" :key="i">
          <div class="pe-3">
            <div class="card w-100">
              <img
                class="card-img-top"
                :src="item.image_url"
                alt="Card image cap"
              />
              <div class="card-body">
                <h5 class="card-title">
                  {{ item.title }}
                </h5>
                <div class="clearfix">
                  <div class="float-start">{{ item.price }} ฿</div>
                  <div class="float-end">
                    <a href="#" class="btn btn-warning text-white">ซื้อเลย</a>
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
        <slide v-for="(item, i) in spotted" :key="i">
          <div class="pe-3">
            <div class="card w-100">
              <img
                class="card-img-top"
                :src="item.image_url"
                alt="Card image cap"
              />
              <div class="card-body">
                <h5 class="card-title">
                  {{ item.title }}
                </h5>
                <div class="clearfix">
                  <div class="float-start">{{ item.price }} ฿</div>
                  <div class="float-end">
                    <a href="#" class="btn btn-warning text-white">ซื้อเลย</a>
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
        <slide v-for="(item, i) in spotted" :key="i">
          <div class="pe-3">
            <div class="card w-100">
              <img
                class="card-img-top"
                :src="item.image_url"
                alt="Card image cap"
              />
              <div class="card-body">
                <h5 class="card-title">
                  {{ item.title }}
                </h5>
                <div class="clearfix">
                  <div class="float-start">{{ item.price }} ฿</div>
                  <div class="float-end">
                    <a href="#" class="btn btn-warning text-white">ซื้อเลย</a>
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
export default {
  middleware: "auth",
  data: () => ({
    recommends: [
      {
        image_url: "/images/hd1080.png",
        title: "TEst",
        price: "180"
      },
      {
        image_url: "/images/hd1080.png",
        title: "TEst2",
        price: "150"
      },
      {
        image_url: "/images/hd1080.png",
        title: "TEst2",
        price: "150"
      },
      {
        image_url: "/images/hd1080.png",
        title: "TEst2",
        price: "150"
      },
      {
        image_url: "/images/hd1080.png",
        title: "TEst2",
        price: "150"
      },
      {
        image_url: "/images/hd1080.png",
        title: "TEst2",
        price: "150"
      },
      {
        image_url: "/images/hd1080.png",
        title: "TEst2",
        price: "150"
      }
    ],
    spotted: [
      {
        image_url: "/images/hd1080.png",
        title: "spotted1",
        price: "70"
      },
      {
        image_url: "/images/hd1080.png",
        title: "spotted2",
        price: "40"
      },
      {
        image_url: "/images/hd1080.png",
        title: "spotted2",
        price: "40"
      },
      {
        image_url: "/images/hd1080.png",
        title: "spotted2",
        price: "40"
      },
      {
        image_url: "/images/hd1080.png",
        title: "spotted2",
        price: "40"
      },
      {
        image_url: "/images/hd1080.png",
        title: "spotted2",
        price: "40"
      },
      {
        image_url: "/images/hd1080.png",
        title: "spotted2",
        price: "40"
      }
    ]
  }),

  // async asyncData () {
  //   const { data: projects } = await axios.get('/api/projects')

  //   return {
  //     projects
  //   }
  // },

  metaInfo() {
    return { title: this.$t("home") };
  }
};
</script>
