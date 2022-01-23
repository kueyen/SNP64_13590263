<template>
  <div>
    <div class="container mt-4">
      <h3>สินค้าประมูล</h3>
      <div class="row">
        <div class="col-3" v-for="(item, i) in recommends" :key="i">
          <div class="card mb-3">
            <img
              class="card-img-top"
              :src="item.image_url"
              alt="Card image cap"
            />
            <div class="card-body">
              <h5 class="card-title">{{ item.title }}</h5>
              <p class="card-text">{{ item.price }} ฿</p>
              <a href="/auctiondetails" class="btn btn-warning text-white"
                >ดูสินค้า</a
              >
            </div>
          </div>
        </div>
      </div>

      <hr />
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
  }),

  // async asyncData () {
  //   const { data: projects } = await axios.get('/api/projects')

  //   return {
  //     projects
  //   }
  // },

  metaInfo() {
    return { title: this.$t("auction") };
  },
};
</script>
