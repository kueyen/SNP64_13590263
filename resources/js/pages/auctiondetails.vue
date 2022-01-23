<template>
  <div>
    <div class="container">
      <div class="row">
        <div class="col-6">
          <div class="pe-3 mt-3">
            <img class="card-img-top" src="/images/hd1080.png" />
          </div>
          <carousel :per-page="3" class="mt-4">
            <slide v-for="(item, i) in recommends" :key="i">
              <div class="pe-3">
                <img
                  class="card-img-top"
                  :src="item.image_url"
                  alt="Card image cap"
                />
              </div>
            </slide>
          </carousel>
        </div>
        <div class="col-6 mt-3">
          <h3>{{ "มอนเตอร่าด่าง" }}</h3>
          <h6 style="color: lightgrey">ราคาสินค้าล่าสุด</h6>
          <hr />
          <h2>฿ {{ "1,000" }}</h2>
          <div class="container" style="background-color: lightgrey">
            <h6>ข้อมูลจำเพาะของสินค้า</h6>
          </div>
          <div class="container">
            <div class="p-2">
              <p style="color: lightgrey">หมวดหมู่ : {{ "ต้นไม้ด่าง" }}</p>
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

          <div class="container mb-3">
            <div class="input-group mb-3">
              <input
                type="text"
                class="form-control"
                placeholder="กรอกจำนวนเงินที่ต้องการ"
              />
              <div class="input-group-append">
                <button
                  @click="showAlert"
                  type="button"
                  class="btn btn-outline-success btn-lg"
                >
                  <i class="fas fa-shopping-cart" style="color: green"></i>
                  ประมูล
                </button>
              </div>
            </div>
          </div>
          <h3>ผู้ประมูลล่าสุด</h3>
          <div class="container">
            <div class="row">
              <div class="col">
                <p>flukeerrar</p>
              </div>
              <div class="col">
                <p>1,000 ฿</p>
              </div>
              <div class="col">
                <p>8 มกราคม 2565</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="mt-5">
        <h3>รายละเอียดสินค้า</h3>
        <hr />
        <h5>
          {{
            "มอนสเตร่า มีลักษณะใบสวยเป็นมัน ขนาดใหญ่ มีลักษณะเป็นแฉกฉลุบนพื้นใบ ซึ่งเป็นลักษณะเด่นเฉพาะตัวของพืชในตระกูลนี้ พืชชนิดนี้เป็นไม้เลื้อย ทอดยาวไปตามพื้นดินหรือหลักที่เราทำขึ้นเพื่อค้ำพยุงต้น มีรากทุกข้อปล้อง ขยายพันธุ์ค่อนข่างง่าย เป็นพืชอายุยืนนานหลายปี"
          }}
        </h5>
      </div>
      <div class="mt-5">
        <h3>การดูแล</h3>
        <hr />
        <h5>
          {{
            "วัสดุการปลูก เน้นชื้น แต่ไม่แฉะ การให้น้ำที่พอเหมาะ ไม่มากเกินไป และไม่แห้งเกินไป อุณหภูมิ ถ้าเลี้ยงในอากาศร้อนและไม่มีความชื้น จะทำให้ส่วนใบที่ด่างไหม้ การดูแลแมลงกับปุ๋ย จะไม่ต่างกับมอนสเตอร่าปกติ แต่แนะนำให้เลี้ยงมอนสเตอร่าใบด่างในสแลน ห้ามโดนแดด 100 เปอร์เซ็นต์ หรือให้มีสแลนกรองแสงแดด"
          }}
        </h5>
      </div>
    </div>
  </div>
</template>

<script>
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
        title: "TEst",
        price: "180",
      },
      {
        image_url: "/images/hd1080.png",
        title: "TEst",
        price: "180",
      },
      {
        image_url: "/images/hd1080.png",
        title: "TEst",
        price: "180",
      },
      {
        image_url: "/images/hd1080.png",
        title: "TEst",
        price: "180",
      },
    ],
  }),
  methods: {
    showAlert() {
      this.$swal({
        icon: "success",
        title: "สำเร็จ",
        showConfirmButton: false,
        timer: 1500,
      });
    },
  },

  metaInfo() {
    return { title: "auctiondetails" };
  },
};
</script>
