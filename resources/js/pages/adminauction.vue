<template>
  <div>
    <div class="container">
      <h3 class="mt-3 text-center">รายการสินค้าประมูล</h3>
      <div class="row">
        <div class="col-6 mt-3" v-for="(item, i) in recommends" :key="i">
          <div class="card" style="width: 650px">
            <div class="row no-gutters">
              <div class="col-sm-5">
                <img
                  class="card-img-top"
                  :src="item.image_url"
                  alt="Card image cap"
                />
              </div>
              <div class="col-sm-7">
                <div class="card-body">
                  <h5 class="card-title">{{ item.title }}</h5>
                  <p class="card-text">{{ item.price }} ฿</p>
                  <a href="#" class="btn btn-primary">แก้ไขสินค้า</a>
                  <a href="#" class="btn btn-danger">ลบสินค้า</a>
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
export default {
  middleware: "auth",
  data: () => ({
    recommends: [
      {
        image_url: "/images/hd1080.png",
        title: "TEst",
        price: "180",
      },
      {
        image_url: "/images/hd1080.png",
        title: "TEst2",
        price: "150",
      },
      {
        image_url: "/images/hd1080.png",
        title: "TEst2",
        price: "150",
      },
      {
        image_url: "/images/hd1080.png",
        title: "TEst2",
        price: "150",
      },
      {
        image_url: "/images/hd1080.png",
        title: "TEst2",
        price: "150",
      },
      {
        image_url: "/images/hd1080.png",
        title: "TEst2",
        price: "150",
      },
      {
        image_url: "/images/hd1080.png",
        title: "TEst2",
        price: "150",
      },
    ],
    spotted: [
      {
        image_url: "/images/hd1080.png",
        title: "spotted1",
        price: "70",
      },
      {
        image_url: "/images/hd1080.png",
        title: "spotted2",
        price: "40",
      },
      {
        image_url: "/images/hd1080.png",
        title: "spotted2",
        price: "40",
      },
      {
        image_url: "/images/hd1080.png",
        title: "spotted2",
        price: "40",
      },
      {
        image_url: "/images/hd1080.png",
        title: "spotted2",
        price: "40",
      },
      {
        image_url: "/images/hd1080.png",
        title: "spotted2",
        price: "40",
      },
      {
        image_url: "/images/hd1080.png",
        title: "spotted2",
        price: "40",
      },
    ],
  }),

  // async asyncData () {
  //   const { data: projects } = await axios.get('/api/projects')

  //   return {
  //     projects
  //   }
  // },

  metaInfo() {
    return { title: this.$t("adminauction") };
  },
};
</script>
